<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <title>OLand</title>
</head>
<body>
<div class ="wrapper">

<header class = "title">

<h1 class = "title-h1"><a href="deco.php">O'land!</a></h1>

<aside class="title-subtitle">Bienvenu dans O'land <span class="italic">interactif</span></aside>


<?php

if(isset($_SESSION["user"])){ ?>

<div>Connecté en temps que <?=$_SESSION["user"]?> </div>

<?php
}
?>

</header>

