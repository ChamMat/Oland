<?php

session_start();

require 'class/Data.php';
$data = new Data();

if(empty($_SESSION["user"])){

    require 'templates/header.tpl.php';

    if(!isset($_GET[connection]) && !isset($_GET[inscription])){
    require 'templates/form.tpl.php';
    }

    if($_GET[connection]){
        require 'templates/connection.tpl.php';
    }

    require 'template/footer.tpl.php';

}else{

require 'class/Perso.php';
require 'class/Tile.php';
require 'class/Map.php';

$map = new Map($data);
$tileList = $map->getAllTiles();

require 'templates/header.tpl.php';
require 'templates/panel.tpl.php';
require 'templates/footer.tpl.php';

}

    
