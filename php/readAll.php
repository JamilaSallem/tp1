<?php
include "config.php";

$base=connect();

$req="SELECT * FROM utilisateurs";
$result=$base->query($req);

?>
<h2 class="text-primary">Informations Personnelles</h2>
<table>
    <thead>
        <tr>
            <th><B class="text-success">Nom</B></th>
            <th><B class="text-success">Prenom</B></th>
            <th><B class="text-success">Telephone</B></th>
            <th><B class="text-success">E-mail</B></th>
            <th><B class="text-success">Genre</B></th>
            <th><B class="text-success">Date de Naissance</B></th>
            <th><B class="text-success">Interets</B></th>
            <th><B class="text-success">Mot De Passe</B></th>
        </tr>
    </thead>
</table>
<tbody>
    <?php
    while($utilisateurs=$result->fetchObject()){
    ?>
    <tr>
        <td><?php echo $utilisateurs->nom; ?></td>
        <td><?php echo $utilisateurs->prenom; ?></td>
        <td><?php echo $utilisateurs->telephone; ?></td>
        <td><?php echo $utilisateurs->email; ?></td>
        <td><?php echo $utilisateurs->genre; ?></td>
        <td><?php echo $utilisateurs->date_de_naissance; ?></td>
        <td><?php echo $utilisateurs->interets; ?></td>
        <td><?php echo $utilisateurs->mot_de_passe; ?></td>
    </tr>
    <?php
    }
    ?>

<?php
$req="SELECT * FROM todo";
$result=$base->query($req);
?>

<h2 class="text-primary">To Do</h2>
<table>
    <thead>
        <tr>
            <th><B class="text-success">Description</B></th>
            <th><B class="text-success">Date Ajout</B></th>
        </tr>
    </thead>
</table>
<tbody>
    <?php
    while($utodo=$result->fetchObject()){
    ?>
    <tr>
        <td><?php echo $todo->description; ?></td>
        <td><?php echo $todo->date_ajout; ?></td>
    </tr>
    <?php
    }
    ?>
