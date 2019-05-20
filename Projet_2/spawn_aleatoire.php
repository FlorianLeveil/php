<?php
    require_once('request.php');

    $req = $db->prepare('SELECT * FROM spwan');
    $req->execute();
    $spawns = $req->fetchAll();

    $index = rand(0, count($spawns) - 1);

    $spawn = $spawns[$index];
