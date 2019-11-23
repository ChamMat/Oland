<?php

require 'class/Perso.php';
require 'class/Tile.php';
require 'class/Map.php';

$map = new Map();
$tileList = $map->getAllTiles();

require 'templates/header.tpl.php';
require 'templates/panel.tpl.php';
require 'templates/footer.tpl.php';

    
