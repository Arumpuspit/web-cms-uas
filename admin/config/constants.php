<?php
session_start();
define("ROOT_URL", "http://localhost/newcms/");
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'Arum123*');
define('DB_NAME', 'cmsnew');
if (!isset($_SESSION['user-id'])) {
    header("location: " . ROOT_URL . "logout.php");
    //destroy all sessions and redirect user to login page
    session_destroy();
    die();
    header("location: " . ROOT_URL . "signin.php");
}