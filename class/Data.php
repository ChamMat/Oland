<?php

class Data{

    private $pdo;

        
    
    public function __construct(){
        
    $bdd = 'mysql:dbname=Oland;host=localhost;charset=UTF8';
    $user = 'Oland';
    $password = 'matmat';

        try {
            $this->pdo = new PDO(
                $bdd,
                $user,
                $password,
                array(
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
                )
            );
        } catch (PDOException $exception) {
            echo 'Connexion échouée : ' . $exception->getMessage();
        }
    }

    public function getTilesList(){

        $sql='
        SELECT *
        FROM `tiles`
        ';

        $req = $this->pdo->query($sql);

        if($req === false){

            exit('Echec de la connection à la base de donnée.');
            return false;
        }

        return $req->fetchAll(PDO::FETCH_ASSOC);

    }

    public function getPerso($id){
        $sql='
        SELECT *
        FROM `perso`
        WHERE `id` = '.$id.'
        ';

        $req = $this->pdo->query($sql);

        if($req === false){

            exit('Echec de la connection à la base de donnée.');
            return false;
        }

        return $req->fetch(PDO::FETCH_ASSOC);
        
    }
    

}