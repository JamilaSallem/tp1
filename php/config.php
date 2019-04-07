<?php
function connect()
{
    $server="localhost";
    $base="tp1_db";
    $username="root";
    $pass="";
    try{
        //code à exécuter..
        $con = new PDO("mysql:host=$server;dbname=$base",$username,$pass);//le 1er parametre est une chaine de caractères contenant le nom de SGBD, du seveur et le nom de la bd

        return $con;
    }catch(PDOException $e)
    {
        //exeption..
        die("Erreur: ".$e->getMessage());
    }
}
?>