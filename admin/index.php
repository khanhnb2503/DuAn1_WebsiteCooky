<?php
session_start();
if(isset($_SESSION['username'])) {
    require_once "./mvc/Bridge.php";
    $result = new App();
} else {
    $_GET['url'] = "login";
    require_once "./mvc/Bridge.php";
    $result = new App();
}

?>