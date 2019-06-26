<?php
session_start();

if (
    !isset($_SESSION['is_logged_in']) ||
    $_SESSION['is_logged_in'] === false
){
    header('Location: http://portfolio.local/admin/login.php');
    exit();
}