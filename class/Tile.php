<?php

class Tile{

    private $id;
    private $background;
    private $concretItem;
    private $metaItem;
    private $character;

    public function __construct($id, $background = null, $concretItem = null, $metaItem = null, $character = null){
        $this->id = $id;
        $this->background = $background;
        $this->concretItem = $concretItem;
        $this->metaItem = $metaItem;
        $this->character = $character;
    }

    public function getId(){
        return $this->id;
    }

    public function getBackground(){
        return $this->background;
    }

    public function getConcretItem(){
        return $this->concretItem;
    }

    public function getMetaItem(){
        return $this->metaItem;
    }

    public function getCharacter(){
        return $this->character;
    }

}