<?php
require_once('./code/show/showDAO.php');

class Show implements \JsonSerializable {
  // Properties
  private $userLog;
  private $showTitle;
  private $showDescription;
  private $showRating;

  // Methods
  function __construct() {
  }
  function getUserLog(){
    return $this->userLog;
  }
  function setUserLog($userLogPassed){
    $this->userLog = $userLogPassed; 
  }
  function getShowTitle(){
    return $this->showTitle;
  }
  function setShowTitle($showTitlePassed){
    $this->showTitle = $showTitlePassed;
  }
  function getShowDescription(){
    return $this->showDescription;
  }
  function setShowDescription($showDescriptionPassed){
    $this->showDescription= $showDescriptionPassed;
  }
  function getShowRating(){
    return $this->showRating;
  }
  function setShowRating($showRatingPassed){
    $this->showRating = $showRatingPassed;
  }

  function getAllShows(){
    $showDAO = new ShowDAO();
    $shows = $showDAO->getShows();
    return $shows;
  }

  function createShow(){
    $showDAO = new ShowDAO();
    $showDAO->createShow($this);
  }

//   function deleteShow($username2){
//     $userDAO = new userDAO();
//     $userDAO->deleteUser($username2);
//   }

  public function jsonSerialize(){
      $vars = get_object_vars($this);
      return $vars;
  }
}
?>