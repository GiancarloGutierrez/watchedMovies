<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

require_once('./show/show.php');
session_start();
$show = new show();
$result = $show->deleteShow($_GET["showId"],$_SESSION["user_id"]);

header("Location: ../index.php?showDeleted=".$result);
?>