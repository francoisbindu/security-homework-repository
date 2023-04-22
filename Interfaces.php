<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <h1>Génération d'une clé</h1>
    <form action="all_operations.php" method="post">
        <input type="hidden" name="contexte" value="q1">
        <input type="text" name="key" placeholder="Clé:"> <br>
        <input type="text" name="function" placeholder="Fonction de permutation:"><br> <br>
        <button type="submit">Générer</button>
    </form>
    <form action="all_operations.php" method="post">
        <h1>Chiffrement</h2>
            <input type="hidden" name="contexte" value="q2">
            <input type="text" name="N" placeholder="Valeur de n:"> <br>
            <input type="text" name="k1" placeholder="Valeur de k1:"> <br>
            <input type="text" name="k2" placeholder="Valeur de k2:"> <br>
            <input type="text" name="pi" placeholder="Valeur de pi:"> <br>
            <input type="text" name="p" placeholder="Valeur de p"> <br><br>
            <button type="submit">Chiffrer</button>
    </form>
    <h1>Déchiffrement</h1>
    <form action="all_operations.php" method="post">
    <input type="hidden" name="contexte" value="q3">
            <input type="text" name="N" placeholder="Valeur  chiffée:"> <br>
            <input type="text" name="k1" placeholder="Valeur de k1:"> <br>
            <input type="text" name="k2" placeholder="Valeur de k2:"> <br>
            <input type="text" name="pi" placeholder="Valeur de pi:"> <br>
            <input type="text" name="p" placeholder="Valeur de p:"> <br>
            <button type="submit">Déchiffer</button>
    </form>
</body>

</html>