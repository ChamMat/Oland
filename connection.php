<?php
session_start();

require 'class/Data.php';
$data = new Data();

var_dump($_POST);

if(isset($_POST)){

  $userList = $data->getUser();
$test = false;
  foreach($userList as $index => $value){
      if($value['user'] === $_POST['user'] && $value['password'] === $_POST['password']){

        $test = true;

          echo "On est ok";
      }
  }

  if ($test){
    $_SESSION['user'] = $_POST['user'];
    setcookie("user", $_POST['user'], time()+(3600*24*30));
  }
}

header("Location: index.php");