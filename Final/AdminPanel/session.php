<?php 
session_start();
if (empty($_SESSION['SESSION_ID'])) {
    header('location:login.php');
    }
?>