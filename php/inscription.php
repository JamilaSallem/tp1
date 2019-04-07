<?php
include "config.php";

$base=connect();

$n=$_REQUEST['nom'];
$p=$_REQUEST['prenom'];
$e=$_REQUEST['email'];
$m=$_REQUEST['mdp'];
$t=$_REQUEST['telephone'];
$g=$_REQUEST['gender'];
$i=$_REQUEST['Interets'];
foreach($_POST['prenom'] as $valeur)
$d=$_REQUEST['Date De Naissance'];

$mdpc=md5($m);

$req="INSERT INTO utilisateurs (id,nom,prenom,email,telephone,genre,date_de_naissance,interets,mot_de_passe) VALUES(null,'$n','$p','$e','$t','$g','$d','$i','$mdpc')";

$resp=$base->exec($req);

if ($resp==1){
    echo "Données insérées avec succès";
}
else{
    echo "Vérifier la requete ou le fichier config";
}

?>