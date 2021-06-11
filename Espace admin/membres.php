<?php 
    $bdd = new PDO("mysql:host=localhost;dbname=test-technique;charset=utf8", "root", "");
    session_start();
    if(!$_SESSION['password']) {
        header('Location:admin.php');
    }

?>
<html>
    <head>
        <title>Membre</title>
    </head>
    <body>
        <!-- afficher membre -->
            <?php 
            
            $recupuser = $bdd->query('SELECT * FROM utilisateur');
            while($user = $recupuser->fetch()) {
                ?>
                <p><?= $user['pseudo'] ?><span></span><a href="bannir.php?id=<?= $user['id']?>" style="color:red; text-decoration:none;">banir membre</a></p>
                <p><?= $user['email'] ?><span></span></p>

                <?php
            }
            ?>
        <!-- fin afficher membre -->
    </body>
</html>