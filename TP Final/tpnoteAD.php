<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TP Noté</title>
</head>
<body>
<h1>TP Noté : Groupe A&D - 17/10/2023 à 11h00</h1>

<?php
spl_autoload_register(function ($class_name) {
    require $class_name . '.php';
});
?>
<h2>1. Création d'un Sport Collectif</h2>
<?php
$sport = new SportEquipe('Handball', 7);
echo $sport->afficher();
?>
<h2>2. Création d'un club de football</h2>

<?php
$club = new Football('Estac');
echo $club->afficher();

$joueur1 = new Joueur('Nivet', 'Benjamin', 'Milieu');
$joueur2 = new Joueur('Tinhan', 'Jonathan', 'Attaquant');
$joueur3 = new Joueur('Giraudon', 'Jimmy', 'Défenseur');
$joueur4 = new Joueur('Samassa', 'Mamadou', 'Gardien');

$club->addJoueur($joueur1);
$club->addJoueur($joueur2);
$club->addJoueur($joueur3);
$club->addJoueur($joueur4);
?>

<h2>3. Club avec les Joueurs</h2>

<?php
echo $club->afficher();
?>

<h2>4. Modification d'un joueur</h2>
<?php
$club->modifierPosteJoueur('Nivet', 'Attaquant');
echo $club->afficher();
?>

<h2>5. Suppression d'un joueur</h2>
<?php
$club->supprimerJoueur('Giraudon');
echo $club->afficher();
?>
<h2>6. Nombre de sport</h2>
<?php
echo Sport::getNbSport().' sports ont été crées.';
?>

<h2>7. Modification d'un Sport Collectif</h2>
<?php
$sport->modifierIntitule('Handball Féminin');
echo $sport->afficher();
?>
</body>
</html>
