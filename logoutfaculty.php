<?php
session_start();
$_SESSION["fidx"]=="";
session_unset('fidx');
header('Location:index.php');
?>
