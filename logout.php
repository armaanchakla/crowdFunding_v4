<?php
session_start();
unset($_SESSION['unameshow']);
unset($_SESSION['type']);
header("location:homepage.php");
?>