<html>
<?php require('request.php'); ?>
<?php require_once('spawn_aleatoire.php'); ?>

    <Head>
        <meta charset="utf-8">
        <title>Florian Léveil</title>
    </Head>
    <body>
        <h1>Bienvenue sur mon Spwan aléatoire</h1>
        <div>
            <hr>
            <h2>Spwan Aléatoire</h2>
            <form action="" method="post">
                <input type="submit" value="Me generer un Spwan Aléatoire" id="submit" name="submit">
            </form>

            
            <div style='width:30%;float:left'>
                <div>
                    <img style='max-width:370px;max-height:210px;' src="<?= $spawn["img"] ?>" alt="">
                </div>
                <div>
                    <div>
                        <h4><?=$spawn["titre"] ?></h4>
                        <p><?=$spawn["texte"] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>