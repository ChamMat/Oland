<div class = "menuInscription">

    <form class ="menuInscriptionForm" action="inscription.php" method="post">

        <fieldset class="">
        <label for="pseudo">Pseudo</label>
        <input class="inputArea" type="text" name ="pseudo" required>

        <label for="password">Mot de passe</label>
        <input class="inputArea" type="password" name="password" required>

        <label for="password2">confirme le Mot de passe</label>
        <input class="inputArea" type="password" name="password2" required>

        

        </fieldset>

        <fieldset class="avatarChoise">
        <p>Choisir un avatar</p>

        <?php
        for($i = 1; $i <= 24; $i+=1){
            if($i<10)
            {
                $path = "medievalUnit_0";
            }else{
                $path = "medievalUnit_";
            }
            ?>
        <fieldset class="radioLabel">
        <input class="inputImg" type="radio" name="img" value ="<?=$i?>" id='img<?=$i?>' required>
        <label class="labelImg" for="img<?=$i?>"><img src="lib/units/<?=$path?><?=$i?>.png" alt=""></label>
        </fieldset>
        <?php } ?>

        </select>
        </fieldset>

        <input class="submit" type="submit">

        <p class="warning">Ton mots de passe ne sera pas cryptés et apparaitra en claire dans ma base de donnée!!!<br>N'utilise que des mots de passe simple que tu n'utilise pas ailleurs</p>


    </form>


</div>