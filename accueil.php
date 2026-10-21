<html>
<body>
<?php
if (isset($_GET['ville']) && isset($_GET['commentaire'])) {
    // PHP a deja decode les valeurs : rien a faire !
    echo "Ville : " . $_GET['ville'] . "<br>";
    echo "Commentaire : " . $_GET['commentaire'] . "<br>";
} else {
    echo "Parametres manquants.<br>";
}

// Pour visualiser tous les parametres recus :
echo "<br>Detail de \$_GET :<br>";
foreach ($_GET as $cle => $valeur) {
    echo "[$cle] => [$valeur]<br>";
}
?>
</body>
</html>
