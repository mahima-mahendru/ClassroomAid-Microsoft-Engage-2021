<!-- <?php
session_start();
?>
<?php
$_SESSION["fidx"]=="";
session_unset('fidx');
header('Location:index.php');
?> -->

<?php
session_start();
unset($_SESSION["fidx"]);
header('Location:index');
?>
