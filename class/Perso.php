<?php

class Perso{

    private $id;
    private $img;
    private $pos;

    public function __construct($id, $img, $pos){
        
        $this->id = $id;
        $this->img = $img;
        $this->pos = $pos;
    }

    public function getId(){
        return $this->id;
    }

    public function getImg(){
        return $this->img;
    }

    public function getPos(){
        return $this->pos;
    }
}