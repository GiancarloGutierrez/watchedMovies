<?php
require_once('./user/user.php');

class session {
  // Methods
  public function logout(){
    unset($_SESSION["loggedIn"]);
    unset($_SESSION["user_id"]);
  }
  public function login($username, $password) {
    $user = new User();
    $loggedInUser = $user->checkLogin($username, $password);
    if($loggedInUser != 0){
      $_SESSION["loggedIn"] = true;
      $_SESSION["user_id"] = $loggedInUser;
      return true;
    }
    else{
      return false;
    }
  }

}
?>