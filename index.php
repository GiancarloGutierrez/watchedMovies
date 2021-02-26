<?php

require_once("code/sessionCheck.php");

?>
<!doctype html>
<html lang ="en-us">

<?php
    require_once('html/header.php');
?>
<body>
    <header>
        <p>Movie Watcher</p>
    </header>
<?php
    require_once('html/navigation.php');
?>

<div class = "row">
<?php
    require_once('html/page/main.php');
    require_once('html/aside.php'); 
?>
</div>


<?php
require_once('html/footer.php');
?>
</body>
</html>