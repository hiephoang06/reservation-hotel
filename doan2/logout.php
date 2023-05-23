<?php
session_start();
unset($_SESSION['ten']);
header("Location:index.php");
?>