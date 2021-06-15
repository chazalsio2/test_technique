<?php 
      $bdd = new PDO("mysql:host=localhost;dbname=test-technique;charset=utf8", "root", "");
      session_start();
      if(!$_SESSION['password']) {
          header('Location:admin.php');
      }