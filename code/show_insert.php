<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

require_once('./show/show.php');
session_start();
$show = new show();
$show->setShowTitle($_POST["title"]);
$show->setShowRating($_POST["rating"]);
$show->setShowDescription($_POST["description"]);
$show->setUserLog($_SESSION["userLogged"]);
$show->createShow();


header("Location: ../index.php");

?>