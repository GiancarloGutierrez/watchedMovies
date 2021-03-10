<?php
class ShowDAO {
  function getShows(){
    require_once('./code/utilities/connection.php');
    
    $sql = "SELECT showTitle, showDescription, showRating FROM shows ";
    $result = $conn->query($sql);
    $shows;
    if ($result->num_rows > 0) {
    // output data of each row
    $showsCount = 0;
    while($row = $result->fetch_assoc()) {
        $show = new show();
        $show->setShowTitle($row["showTitle"]);
        $show->setShowDescription($row["showDescription"]);
        $show->setShowRating($row["showRating"]);
        $shows[$showsCount] = $show;
        $showsCount ++;
    }
    } else {
        echo "0 results";
    }
    $conn->close();
    return $shows;
  }

  function createShow($show){
    require_once('./utilities/connection.php');
    //prepare and bind
    $stmt = $conn->prepare(
    "INSERT INTO cs3620.shows
    (
    showTitle,
    showDescription,
    showRating,
    showUser)
    VALUES
    (?, ?, ?, ?)");
    $st= $show->getShowTitle();
    $sd= $show->getShowDescription();
    $sr= $show->getShowRating();
    $su= $show->getUserLog();

    $stmt->bind_param("ssss",$st,$sd,$sr,$su);

    $stmt->execute();

    $stmt->close();
    $conn->close();
  }
}
?>