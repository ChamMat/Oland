<?php
session_start();

require 'class/Data.php';
$data = new Data();

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
    $_SESSION['user'] = $value["user"];
  }
}

header("Location: index.php");