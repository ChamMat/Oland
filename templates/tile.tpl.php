<?php

$backgroundImg = $tileList[$idTile]->getBackground();
$concretItem = $tileList[$idTile]->getconcretItem();

if( $tileList[$idTile]->getCharacter() != NULL ){

    if(count($tileList[$idTile]->getCharacter())>1){
        $persoImg = 'unitXX';
    }else{
        $indexPerso=$tileList[$idTile]->getCharacter()[0];
        $persoImg = $map->getPerso($indexPerso)->getImg();
    }

}else{
    $persoImg = NULL;
}


// if($map->getPerso($tileList[$idTile]->getCharacter()) ==null ){
//     $persoImg =NULL;
// }else{
//     $persoImg = $map->getPerso($tileList[$idTile]->getCharacter())->getImg();
// }

?>

<a href="index.php?id=<?=$idTile+1?>">
<div class="tile <?=$backgroundImg?>">
<div class="tile <?=$concretItem?>">
<div class="tile <?=$persoImg?>">


</div>
</div>
</div>
</a>
<?php $idTile +=1; ?>
