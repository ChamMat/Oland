<div class="panel">
        <?php
        for($i = 1; $i <= 10; $i+=1){ ?>
            <div class="row">
            <?php
            for($j=0; $j <10; $j+=1){?>
                <div class="tile <?=$tilesList[$i*$j]['background']?>"></div>
            <?php } ?>
            </div>
        <?php } ?>
    </div>