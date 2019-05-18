<html>
<?php require('request.php'); ?>


    <head>
        <meta charset="utf-8">
        <title>Florian Léveil</title>

    </head>
    <body>        
    <h2> Liste des Spawns ! </h2>

    <?php foreach($data_spawn as $SPA) { ?>
        <div style='width:30%;float:left'>
            <div>
                <img style='max-width:370px;max-height:210px;' src="<?=$SPA["img"];?>" alt="">
            </div>
            <div>
                <div>
                    <h4 class="text-white"><?=$SPA["titre"];?></h4>
                    <p class="mb-0 text-white-50"><?=$SPA["texte"];?></p>
                </div>
            </div>
        </div>
    <?php } ?> 
        <div style='width:1500px'>
        <div>
            <hr>
            <h2>Créer un Spawn</h2>

                <form action="creee_spawn.php" method="post" enctype="multipart/form-data">
                    <label for="new_titre">Nom du spawn :</label>
                    <input type="text" name="new_titre" id="new_titre" placeholder="new_titre">
                    <br>
                    <label for="new_img">Image du spawn :</label>
                    <input type="text" name="new_img" id="new_img" placeholder="new_img">
                    <br>
                    <label for="new_texte">Déscription du Spawn:</label>
                    <input type="text" name="new_texte" id="new_texte" placeholder="new_texte">
                    <br>
                    <input type="submit" value="Créer ce spawn !" id="submit" name="submit">
                </form>
        </div>
        <div>
            <hr>
            <h2>Supprimer un Spawn</h2>
            <form action="sup_spawn.php" method="post">
            <label for="user_name">ID du spawn :</label>
            <input type="text" name="spawn_id" id="spawn_id" placeholder="ID">
            <br>
            <br>
            <input type="submit" value="Supprimer ce spawn" id="submit" name="submit">
            </form>
        </div>
        <div>
            <hr>
            <h2>Spwan Aléatoire</h2>
            <form action="spwan_aleatoire.php" method="post">
                <input type="submit" value="Me generer un Spwan Aléatoire" id="submit" name="submit">
            </form>
        </div>
        </div>
        
     
    </body>
</html>