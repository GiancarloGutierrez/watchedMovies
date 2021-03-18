<?php
require_once('./code/show/showDAO.php');

class Show implements \JsonSerializable {
  // Properties
  private $userLog;
  private $showTitle;
  private $showID;
  private $showDescription;
  private $showRating;

  // Methods
  function __construct() {
  }
  function getShowID(){
    return $this->showID;
  }
  function setShowID($show_ID){
    $this->showID = $show_ID;
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
  function getMyShows($user_id){
    $showDAO = new ShowDAO();
    $shows = $showDAO->getMyShows($user_id);
    return $shows;
  }
  function deleteShow($showID,$username2){
    $showDAO = new ShowDAO();
    $result = $showDAO->deleteShow($showID,$username2);
    return $result;
  }

  public function jsonSerialize(){
      $vars = get_object_vars($this);
      return $vars;
  }
}
?>