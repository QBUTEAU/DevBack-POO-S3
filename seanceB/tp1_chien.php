<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TP2 WR313 - Chiens</title>
</head>
<body>
    
    <?php
        require('chien.php');
        echo "<h1>TP 2 - Chiens</h1>";
        echo "<h2>Chien 1</h2>";
        $chien1 = new Chiens("Médor", "Labrador", 4, 15);

        echo "<h2>Chien 2</h2>";
        $chien2 = new Chiens("Balthazar", "Berger allemand", 6, 20);

        echo "<br><br><hr>";
        echo "<h2>Modification de l'identité des chiens</h2>";
        echo "<h3>Chien 1</h3>";
        $chien1->setAge(5);
        $chien1->setKilosMoins(2);
        $chien1->affichage();
        echo "<h3>Chien 2</h3>";
        $chien2->setKilosPlus(1.5);
        $chien2->affichage();

    ?>

</body>
</html>