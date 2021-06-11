<?php 
        
    try 
    {
        $bdd = new PDO("mysql:host=localhost;dbname=test-technique;charset=utf8", "root", "");
    }
    catch(PDOException $e)
    {
        die('Erreur : '.$e->getMessage());
    }
