<?php

class Map{

    private $tiles;

    public function __construct(){

        require 'class/Data.php';
        $data = new Data();

        $tilesArray = $data->getTilesList();

        foreach($tilesArray as $row){

            if($row['charactereId']!= null){
                $character = $data->getPerso($row['charactereId']);
            }else{
                $character = "";
            }

             $this->tiles[] = new Tile($row['id'], $row['background'],$row['concretItem'],$row['metaItem'],$character);

        }

    }

    public function getAllTiles(){

        return $this->tiles;
    }


}