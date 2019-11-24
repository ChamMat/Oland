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

    public function getAllPerso(){
        $sql='
        SELECT *
        FROM `perso`
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
        WHERE `id`="'.$id.'"';

        $req = $this->pdo->query($sql);

        if($req === false){

            exit('Echec de la connection à la base de donnée.');
            return false;
        }

        return $req->fetchAll(PDO::FETCH_ASSOC);

    }

    public function getUser($selecteur = ""){
        $sql='
        SELECT *
        FROM `compteUser`
        '.$selecteur
        ;

        $req = $this->pdo->query($sql);

        if($req === false){

            exit('Echec de la connection à la base de donnée.');
            return false;
        }

        return $req->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function updatePos($perso, $pos){

        $sql='
        UPDATE `perso`
        SET `pos`="'.$pos.'"
        WHERE `id`="'.$perso.'"';

        $this->pdo->exec($sql);
    }

}