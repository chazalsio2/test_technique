<?php 
      $bdd = new PDO("mysql:host=localhost;dbname=test-technique;charset=utf8", "root", "");
      session_start();
      if(!$_SESSION['password']) {
          header('Location:admin.php');
      }
       
        if(!isset($_SESSION['email'])){
        }
        if(isset($_GET['id']) AND !empty($_GET['id'])){

            $getid = $_GET['id'];

            $recupuser = $bdd->prepare('SELECT * FROM utilisateur WHERE id = ?');
            $recupuser->execute(array($getid));

            if($recupuser->rowCount() > 0) {

                $userinfo = $recupuser->fetch();
                $id= $userinfo['id'];
                $email= $userinfo['email'];
                $pseudo= $userinfo['pseudo'];
                $ip= $userinfo['ip'];
                $date_inscription= $userinfo['date_inscription'];

                if(isset($_POST['valider'])) {

                    $id_saisi = htmlspecialchars($_POST['id']);
                    $email_saisi = htmlspecialchars($_POST['email']);
                    $pseudo_saisi = htmlspecialchars($_POST['pseudo']);
                    $ip_saisi = htmlspecialchars($_POST['ip']);
                    $date_inscription_saisi = htmlspecialchars($_POST['date_inscription']);

                    $update_user = $bdd->prepare('UPDATE utilisateur SET id = ?, email = ?, pseudo = ?, ip = ?, date_inscription = ? WHERE id= ?');
                    $update_user->execute(array($id_saisi, $email_saisi, $pseudo_saisi, $ip_saisi, $date_inscription_saisi, $getid));

                    header('Location:index.php');

                }

            }else{
                echo "utilisateur introuvable";
            }

        }else {
            echo "id introuvable"; 
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
                <a class="navbar-brand" href="index.php">Concept</a><p style="text-align:center;">
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
                               
                                <a class="dropdown-item" href="deconnexion.php"><i class="fas fa-power-off mr-2"></i>d??connexion</a>
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
                                            <a class="nav-link" href="deconnexion.php">D??connexion</a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </li>
                            
                            
                            
                            
                        </ul>
                    </div>
                </nav>
            </div>
        </div>  
    
        <div class="container">
            <div class="row">
                <div class="col-2">

                </div>
                <div class="col-10">
                <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Utilisateur</h5>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table">
                                            <thead class="bg-light">
                                                    <tr class="border-0">
                                                        <th class="border-0">#</th>
                                                        <th class="border-0">Pseudo</th>
                                                        <th class="border-0">Email</th>
                                                        <th class="border-0">Ip</th>
                                                        <th class="border-0">Date d'inscription</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                        <form method="POST" action="">
                                                        <td>1</td>
                                                        
                                                        <td>
                                                        <div class="m-r-2"><input type="text" name="pseudo" value="<?= $pseudo; ?>"></div>
                                                        </td>
                                                        <td>
                                                        <div class="m-r-2"><input type="text" name="email" value="<?= $email; ?>"></div>
                                                        </td>
                                                        <td>
                                                        <div class="m-r-2"><input type="text" name="ip" value="<?= $ip; ?>"></div>
                                                        </td>
                                                        <td>
                                                        <div class="m-r-2"><input type="text" name="date_inscription" value="<?= $date_inscription; ?>"></div>
                                                        </td>
                                                    
                                                        
                                                        <input type="submit" name="valider">
                                                    </form>

                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
            </div>
                </div>
            
        
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