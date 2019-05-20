<?php
    require 'request.php';

    $img = $_POST['new_img'];
    $titre = $_POST['new_titre'];
    $texte = $_POST['new_texte'];

    $req = $db->prepare('INSERT INTO spwan (img, titre, texte) VALUES(:img, :titre, :texte)');
    $req->execute(array(
        "img" => $img,
        "titre" => $titre,
        "texte" => $texte,
    ));

    header('Location: http://127.0.0.1/php/Projet_2/admin.php');
    exit();

