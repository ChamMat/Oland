<?php
session_start();

require 'class/Data.php';
$data = new Data();

if(isset($_SESSION['user']) && !empty($_GET['id'])){

    $user = $data->getUser('WHERE user="'.$_SESSION['user'].'"')[0];
    $perso = $data->getPerso($user['persoId'])[0];



    $data->updatePos($perso['id'], $_GET['id']);
}


header("Location: index.php");