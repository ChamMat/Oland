<?php

class Perso{
    private $id;
    private $img;
    private $pos;

    public function __construct($img, $pos){
        $this->img = $img;
        $this->pos = $pos;
    }

    public function getImg(){
        return $this->img;
    }

    public function getPos(){
        return $this->$pos;
    }
}