<?php 
    session_start();
    if(isset($_POST['valider'])) {

        if(!empty($_POST['email']) && !empty($_POST['password'])) {

            $email_par_defaut = "chazal.hassani@gmail.com";
            $password_par_defaut = "admin_test" ;

            $email_saisi = htmlspecialchars($_POST['email']);
            $password_saisi = htmlspecialchars($_POST['password']);

            if($email_saisi == $email_par_defaut AND $password_saisi == $password_par_defaut){

                $_SESSION['password'] = $password_saisi;
                header('Location:index.php');
                $_SESSION['email'] = $email_saisi;
                header('Location:index.php');
 
            }else{ echo "veuiller reessayer" ;}

        } 

    }
?>



<html>
    <head>
        <title>connection</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    </head>
    <body style="background-image: url(img/clavier.jpg);">
        <div id="login">
            <div class="container login-from">
<br>
<div class="container col-8 align-self-center main">
                    <br>
                    <br>
                   <div class="container col-auto align-self-center"> 
                        <form action="" method="post">
                            <h1 class="text-center connexion">Connexion</h1>     
                            <br>  
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
                            </div>
                            <br>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
                            </div>
                            <br>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block" name="valider">Connexion</button>
                            </div>   
                        </form>
                        <h2 class="inscription"><a href="inscription.php" style="text-decoration: none; color:white;">Inscription</h2></a>
                    </div>
                    <br>
                    <br>
                </div>         
            </div>         
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
        </body>
</html>