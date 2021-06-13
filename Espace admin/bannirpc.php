<?php

     // Ordinateur
     if(isset($_GET['id']) AND !empty($_GET['id'])){
        $getid = $_GET['id'];
        $recupuser= $bdd->prepare('SELECT * FROM ordinateur WHERE id =?');
        $recupuser->execute(array($getid));
        if($recupuser->rowCount() > 0) {

            $banniruser = $bdd->prepare('DELETE FROM ordinateur WHERE id =?');
            $banniruser->execute(array($getid));
            header('Location: ordinateur.php');

        }else {echo "aucun membre na ete trouver";}
    }else{echo "aucun id en paramètre";}