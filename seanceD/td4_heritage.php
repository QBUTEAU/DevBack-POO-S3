<?php

    require 'animal.php';

    //créer l’instance $bestiole de la classe animal : 
    //Nom : ‘Une drôle de bête’, Age : 1, Age théorique maximum : 10, état : ‘vivant’

    echo "<h1>Exercice 1</h1>";

    $bestiole = new Animal('Une drôle de bête', 1, 10);

    // Appeler la méthode : mange(‘fruits’)
    $bestiole->mange('fruits');
    // Appeler la méthode : mange(‘légumes’)
    $bestiole->mange('légumes');
    // Appeler la méthode : lire_regime()
    echo $bestiole->lire_regime();
    // Appeler la méthode : lire_informations()
    echo $bestiole->lire_informations();
    // Appeler la méthode : vieillir(4)
    $bestiole->vieillir(4);
    // Appeler la méthode : lire_informations()
    echo $bestiole->lire_informations();
    // Appeler la méthode : vieillir(6)
    $bestiole->vieillir(6);
    // Appeler la méthode : lire_informations()
    echo $bestiole->lire_informations();

    echo "<h1>Exercice 2</h1>";

    $chien1 = new Chien('Chien', 2, 15, "Médor");

    // Appeler la méthode : seNomme()
    echo $chien1->seNomme();
    // Appeler la méthode mange(‘viande’)
    $chien1->mange('viande');
    // Appeler la méthode : mange("croquettes")
    $chien1->mange('croquettes');
    // Appeler la méthode : lire_regime()
    echo $chien1->lire_regime();
    // Appeler la méthode : lire_informations()
    echo $chien1->lire_informations();


?>