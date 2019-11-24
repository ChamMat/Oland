<?php

class Map{

    private $tiles;
    private $perso;

    public function __construct($data){

        

        $tilesArray = $data->getTilesList();

        $persoArray = $data->getAllPerso();

        foreach($persoArray as $persoRow){

            $this->perso[] = new Perso($persoRow['id'], $persoRow['img'], $persoRow['pos']);
        }

        foreach($tilesArray as $row){
            

            foreach($this->perso as $persoRow2){
                
                if($persoRow2->getPos() == $row['id']){

                    $character[] = ($persoRow2->getId())-1;
               
                }
            
            }

            $this->tiles[] = new Tile($row['id'], $row['background'],$row['concretItem'],$row['metaItem'],$character);
            
             $character = NULL;

        }


    }

    public function getAllTiles(){

        return $this->tiles;
    }

    public function getPerso($id){
        return $this->perso[$id];
    }


}