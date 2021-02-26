<?php
class UserDAO {
  function getUser($user){
    require_once('./utilities/connection.php');
    
    $sql = "SELECT first_name, last_name, username1, user_id FROM user WHERE user_id =" . $user->getUserId();
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $user->setFirstName($row["first_name"]);
        $user->setLastName($row["last_name"]);
        $user->setUsername($row["username"]);
    }
    } else {
        echo "0 results";
    }
    $conn->close();
  }

  function checkLogin($passedinusername, $passedinpassword){
    require_once('./utilities/connection.php');
    $user_id = 0;
    $sql = "SELECT user_id FROM user WHERE username1 = '" . $passedinusername . "' AND password1 = '" . hash("sha256", trim($passedinpassword)) . "'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $user_id = $row["user_id"];
      }
    }
    $conn->close();
    return $user_id;
  }

  function createUser($user){
    require_once('./utilities/connection.php');
    //prepare and bind
    $stmt = $conn->prepare(
    "INSERT INTO cs3620.user
    (
    username1,
    password1,
    first_name,
    last_name)
    VALUES
    (?, ?, ?, ?)");
    $un= $user->getUsername();
    $pw= $user->getPassword();
    $fn= $user->getFirstName();
    $ln= $user->getLastName();

    $stmt->bind_param("ssss",$un,$pw,$fn,$ln);

    if(!$stmt->execute()){
      $stmt->close();
      $conn->close();

      session_start();
      if($un == ""){
        $_SESSION['errorMessage'] = "Email is Required";
      } else if ($fn ==""){
        $_SESSION['errorMessage'] = "First Name is Required";
      } else if ($ln == ""){
        $_SESSION['errorMessage'] = "Last Name is Required";
      }
      else{
        $_SESSION['errorMessage'] = "A user with that email already exists";
      }
      
      header("Location: ../registerView.php");
    }

    $stmt->close();
    $conn->close();
  }

  function deleteUser($un){
    require_once('./utilities/connection.php');
    
    $sql = "DELETE FROM cs3620_proj.user WHERE username = '" . $un . "';";

    if ($conn->query($sql) === TRUE) {
      echo "user deleted";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
  }
}
?>