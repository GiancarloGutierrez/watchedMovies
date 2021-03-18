<?php
class ShowDAO {
  function getShows(){
    require_once('./code/utilities/connection.php');
    
    $sql = "SELECT showId,showTitle, showDescription, showRating FROM shows ";
    $result = $conn->query($sql);
    $shows;
    if ($result->num_rows > 0) {
    // output data of each row
    $showsCount = 0;
    while($row = $result->fetch_assoc()) {
        $show = new show();
        $show->setShowID($row["showId"]);
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
  function getMyShows($user_id){
    require_once('./code/utilities/connection.php');
    
    $sql = "SELECT showId, showTitle, showDescription, showRating FROM shows where showUser = ".$user_id;
    $result = $conn->query($sql);
    $shows;
    if ($result->num_rows > 0) {
    // output data of each row
    $showsCount = 0;
    while($row = $result->fetch_assoc()) {
        $show = new show();
        $show->setShowID($row["showId"]);
        $show->setShowTitle($row["showTitle"]);
        $show->setShowDescription($row["showDescription"]);
        $show->setShowRating($row["showRating"]);
        $shows[$showsCount] = $show;
        $showsCount ++;
    }
    } else {
        $shows = false;
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
  function deleteShow($sd,$ud){
    require_once('./utilities/connection.php');
    
    $sql = "DELETE FROM cs3620.shows WHERE showId = " . $sd . " AND showUser = ".$ud.";";
  
    if ($conn->query($sql) === TRUE) {
      $conn->close();
      return "true";
    } else {
      $conn->close();
      return "false";
    }
  }
}
?>