<?php

    require "vehicule.php";

    $vehicule1 = new Vehicule("Renault", 100, 50000);
    $vehicule1->lire_caracteristiques();
    echo "<br>";
    $vehicule1->parcourir(100);
    $vehicule1->lire_caracteristiques();
    echo "<br><br>";

    $voiture1 = new Voiture("Citroën", 70, 6000, "berline");
    $voiture1->lire_caracteristiques();
    echo "<br>";
    echo $voiture1->lire_type();
    echo "<br><br>";

    $voiture2 = new Voiture("Peugeot", 120, 20000, "citadine");
    $voiture2->lire_caracteristiques();
    echo "<br>";
    echo $voiture2->lire_type();
    echo "<br><br>";

    $bus1 = new Bus("Mercedes", 200, 100000, 50, 3);
    $bus1->lire_caracteristiques();
    echo "<br>";
    echo $bus1->lire_nb_places();
    echo "<br>";
    echo $bus1->lire_nb_essieux();
    echo "<br><br>";

    $bus2 = new Bus("Man", 80, 150000, 8, 5);
    $bus2->lire_caracteristiques();
    echo "<br>";
    echo $bus2->lire_nb_essieux();

?>