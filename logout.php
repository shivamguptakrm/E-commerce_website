<?php
require 'includes/common.php';
/*if (!isset($_SESSION['Email'])) {
    header('location: login.php');
}*/
session_destroy();
header('location:index.php');
?>