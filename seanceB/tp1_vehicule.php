<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TP1 WR313 - Véhicule</title>
</head>
<body>

    <?php

        require('vehicule.php');

        echo "<h1>TP 1 - Véhicules</h1>";
        echo "<h2>Véhicule 1</h2>";
        $vehicule1 = new Vehicule("Renault", "Clio", 90, 15000);

        echo "<h2>Véhicule 2</h2>";
        $vehicule2 = new Vehicule("Peugeot", 208, 110, 20000);

        echo "<br><br><hr>";

        echo "<h2>Modification des véhicules</h2>";

        echo "<h3>Véhicule 1</h3>";
        $vehicule1->setPuissance(110);
        $vehicule1->setKilometrage(3500);
        $vehicule1->affichage();

        echo "<h3>Véhicule 2</h3>";
        $vehicule2->setKilometrage(1500);
        $vehicule2->affichage();
    ?>

</body>
</html>