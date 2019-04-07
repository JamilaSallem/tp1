<?php
include "config.php";

$base=connect();

$des=$_REQUEST['description'];
$da=new DateTime()->format('d/m/Y');


$req="INSERT INTO todo (id,description,date_ajout) VALUES(null,'$des','$da')";

$resp=$base->exec($req);

if ($resp==1){
    echo "Données insérées avec succès";
}
else{
    echo "Vérifier la requete ou le fichier config";
}

?>