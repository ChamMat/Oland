<?php
session_start();

require 'class/Data.php';
$data = New Data();

$inscriptionValide = true;

require 'templates/header.tpl.php';

if(isset($_POST)){

    if($_POST["password"] != $_POST["password2"])
    {
        echo "<p class ='erreur'>Erreur: Les deux mots de passes ne sont pas identique.</p>";
        $inscriptionValide = false;
    }

    $userList= $data->getUser();

    foreach($userList as $row => $value){
        if($value['user']== $_POST['pseudo']){
            echo "Erreur: un utilisateur possède déjà ce pseudo";
            $inscriptionValide = false;
        }
    }
    

}else{
    $inscriptionValide = false;
}


if($inscriptionValide){

    $sql ="
    INSERT INTO `perso` (img, pos) VALUES ('unit".$_POST["img"]."', 47)";

    $data->execSql($sql);

    $persoId =$data->getLastPerso();

    $sql ="
    INSERT INTO `compteUser` (`user`, `password`, `persoId`)
    VALUE ('".$_POST['pseudo']."', '".$_POST['password']."', '".$persoId["MAX(`id`)"]."')
    ";


    $data->execSql($sql);

    ?>

    <p>Enregistrement réussi!</p>

    <form action="connection.php" method="post">
    <input type="text" name="user" value="<?=$_POST['pseudo']?>" hidden>
    <input type="password" name="password" value="<?=$_POST['password']?>" hidden>
    <button type="submit" class=submit>GO!</button>
    </form>

    <?php

    

}



