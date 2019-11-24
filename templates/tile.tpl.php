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

?>

<a href="moveTo.php?id=<?=$idTile+1?>">
<div class="tile <?=$backgroundImg?>" id="tile<?=$idTile+1?>">
<div class="tile <?=$concretItem?>">
<div class="tile <?=$persoImg?>">



</div>
</div>
</div>
</a>
<?php $idTile +=1; ?>
