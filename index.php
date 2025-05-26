<!DOCTYPE html>
<html>
<head>
    <title>Calculateur d'IMC</title>to
</head>
<body>
    <h1>Calcul de l'IMC</h1>
    <form method="post">
        Poids (kg) : <input type="number" step="0.1" name="poids" required><br><br>
        Taille (m) : <input type="number" step="0.01" name="taille" required><br><br>
        <input type="submit" value="Calculer">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $poids = $_POST["poids"];
        $taille = $_POST["taille"];
        if ($taille > 0) {
            $imc = $poids / ($taille * $taille);
            echo "<h2>Votre IMC est : " . round($imc, 2) . "</h2>";
        } else {
            echo "La taille doit être supérieure à 0.";
        }
    }
    ?>
</body>
</html>
