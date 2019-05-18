<html>
    <head>
        <meta charset="utf-8">
        <title>Florian Léveil</title>

        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    </head>
    <body>
    <?php foreach($data_spawn as $spawn) { ?>

        <div class="bg-black text-center project">
            <div class="col-lg" style='padding-left:0px !important'>
                <img class="img-fluid" style='max-width:370px;max-height:210px;' src="img/<?=$spawn["spawn_img"];?>" alt="">
            </div>
            <div class="d-flex">
                <div class="project-text w-100 text-center">
                    <h4 class="text-white"><?=$spawn["spawn_titre"];?></h4>
                    <p class="mb-0 text-white-50"><?=$spawn["spawn_txt"];?></p>
                    <hr class="d-none d-lg-block">
                </div>
            </div>
        </div>
    <?php } ?>     
     
    </body>
</html>