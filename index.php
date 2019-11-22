<?php

require 'class/Data.php';
$data = new Data();
$tilesList = $data->getTilesList();

require 'templates/header.tpl.php';
require 'templates/panel.tpl.php';
require 'templates/footer.tpl.php';

    
