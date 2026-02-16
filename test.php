<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Traitement</title>
</head>

<body>
    <h1>Données reçues</h1>
    <div id="data">
        <?php
        $labels = [
            'prenom' => "Prénom",
            'classe' => "Classe",
            'genre' => "Genre",
            'date_naiss' => "Date de naissance",
            'club' => "Club Sciences",
            'contact' => "Contact",
            'courriel' => "Courriel",
            'opt1' => "Option 1",
            'opt2' => "Option 2",
            'opt3' => "Option 3",
            'heures' => "Heures NSI",
            'motivation' => "Motivation"
        ];

        foreach ($_GET as $key => $value) {
            if (isset($labels[$key])) {
                echo "<p>" . htmlspecialchars($labels[$key]) . " : " . htmlspecialchars($value) . "</p>";
            }
        }
        ?>
    </div>
</body>

</html>
