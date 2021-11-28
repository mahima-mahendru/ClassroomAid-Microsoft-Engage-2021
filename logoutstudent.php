<?php
session_start();
unset($_SESSION["sidx"]);
header('Location:index');
?>