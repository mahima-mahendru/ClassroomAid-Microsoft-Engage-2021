<?php
session_start();
unset($_SESSION["umail"]);
header('Location:index.php');
?>