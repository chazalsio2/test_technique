<?php 

    session_start();
    $bdd = new PDO("mysql:host=localhost;dbname=test-technique;charset=utf8", "root", "");
    if(!$_SESSION['password']) {
        header('Location:admin.php');
    }
    if(!isset($_SESSION['email'])){
        header('Location:admin.php');
        die();
    }
    if(!empty($_POST['date']) && !empty($_POST['time']) && !empty($_POST['id_ordinateur']) && !empty($_POST['id_user']))    
    {
        $date = htmlspecialchars($_POST['date']);
        $time = htmlspecialchars($_POST['time']);
        $ordinateur = htmlspecialchars($_POST['id_ordinateur']);
        $utilisateur = htmlspecialchars($_POST['id_user']);
        $i=0;
     
            $insert = 'INSERT INTO relation(id_user, id_ordinateur, date, horaire) VALUES (:date,:time,:id_ordinateur,:id_user)';
            $test = $bdd->prepare($insert);
            $test->bindValue(':date',$date);
            $test->bindValue(':time',$time);
            $test->bindValue(':id_ordinateur',$ordinateur);
            $test->bindValue(':id_user',$utilisateur);
            $test->execute(array(
                'id_ordinateur'->$ordinateur,
                'id_user'->$utilisateur,
                'date'->$date,
                'horaire'->$time
            ));
            header('Location:index.php');
        }else {
            echo"ça marche pas zebi";
    
        }

            
?>


<html>
    <head>
        <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <title>Concept - Bootstrap 4 Admin Dashboard Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Administrateur</title>
    </head>
    <body>


   
                        <a href="membres.php"><button type="button" class="btn btn-info btn-lg">espace membre</button></a>
                        
             <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index.php">Concept</a><p style="text-align:center;">Bonjour ! <?php echo $_SESSION['email']; ?></p>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">Administrateur </h5>
                                </div>
                               
                                <a class="dropdown-item" href="deconnexion.php"><i class="fas fa-power-off mr-2"></i>déconnexion</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"  aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        
                                        <li class="nav-item">
                                            <a class="nav-link" href="index.php">Utilisateur</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="adduser.php">Ajouter utilisateur</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="ordinateur.php">Ordinateur</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="addpc.php">Ajouter ordinateur</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="deconnexion.php">Déconnexion</a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </li>
                            
                            
                            
                            
                        </ul>
                    </div>
                </nav>
            </div>
        </div>  
    
    <form action="" method="post">     
        <div class="container">
            <div class="row">
                <div class="col-2">

                </div>
                
    <div class="col-2">
    <select class=form-control style="max-width:150px;" >
  <?php
        $recupuser = $bdd->query('SELECT DISTINCT * FROM utilisateur WHERE NOT EXISTS (SELECT * FROM relation WHERE id_user = id)');
        while($user = $recupuser->fetch()) {
        ?>
       <option value="<?= $user['id'] ?>" name="id_user"><?= $user['id'] ?></option>
        
        <?php
        }
                                                         
        ?> 
        </select>   
    </div>
    <div class="col-2">
        <select class=form-control style="max-width:150px;" >
  <?php
        $recupuser = $bdd->query('SELECT DISTINCT * FROM ordinateur WHERE NOT EXISTS (SELECT * FROM relation WHERE id_ordinateur = id)');
        while($user = $recupuser->fetch()) {
        ?>
       <option value="<?= $user['id'] ?>" name="id_ordinateur"><?= $user['id'] ?></option>
        
        <?php
        }
                                                         
        ?> 
        </select>
    </div>
    <br>
    <br>
    <br>
    <div class="col-2">
        <input type="date" id="date" name="date">
    </div>
    <div class="col-2">
        <input type="time" id="time" name="time">
    </div>
    <br>
    <div class="col-2">
        <input type="submit" name="submit" value="Attribuer" class="box-button" />
    </div>
       
    </div>
</div>
 </form>
        <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
        <!-- bootstap bundle js -->
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
        <!-- slimscroll js -->
        <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
        <!-- main js -->
        <script src="assets/libs/js/main-js.js"></script>
        <!-- chart chartist js -->
        <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
        <!-- sparkline js -->
        <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
        <!-- morris js -->
        <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
        <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
        <!-- chart c3 js -->
        <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
        <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
        <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
        <script src="assets/libs/js/dashboard-ecommerce.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    </body>
    
</html>