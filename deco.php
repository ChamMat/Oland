<?php

session_start();

if(isset($_COOKIE['user'])){
    setcookie("user", "", time()-3600);
}

session_unset();

header("Location: index.php");