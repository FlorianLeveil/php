<?php
include_once 'request.php';

    $supp_spawn_id = $_POST['spawn_id'];

    $req = $bd->prepare('DELETE * FROM spawn WHERE id=:id');
    $req->execute(array(
        "id" => $supp_spawn_id
    ));
?>

