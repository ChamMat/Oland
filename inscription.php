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



}


