<?php
    include 'request.php';


    $titre = $_POST['new_titre'];
    $img = $_POST['new_img'];
    $texte = $_POST['new_texte'];

    $req = $bd->prepare('INSERT INTO spwan (img, titre, texte) VALUES(:img, :titre, :texte)');
    $req->execute(array(
        "img" => $img,
        "titre" => $titre,
        "texte" => $texte,
    ));



?><?php

