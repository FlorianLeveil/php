<?php
    require 'request.php';

    $supp_spawn_id = $_POST['spawn_id'];

    $req = $db->prepare('DELETE FROM spwan WHERE id=:id');
    $req->execute(array(
        "id" => $supp_spawn_id
    ));


    header('Location: http://127.0.0.1/php/Projet_2/admin.php');
    exit();
