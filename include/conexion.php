<?php
//conexion a la BDD projet-1-AM

try{

    $bdd = new PDO('mysql:host='.(getenv('MYSQL_HOST') ?: 'localhost').';dbname=projet-1-AM;charset=utf8', 'root', '');
    
    }
    
    catch(Exception $e){
    
        die('Erreur : '.$e->getMessage());
    
    }
    
    