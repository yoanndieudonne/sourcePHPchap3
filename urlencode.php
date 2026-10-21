<html>
<body>
<?php
// Valeurs "difficiles" : espace, accent, &, =
$ville = "Saint Etienne";
$commentaire = "chouette & rapide = top";

// Construction de l'URL : on encode chaque valeur !
$url = "accueil.php?ville=" . urlencode($ville)
     . "&commentaire=" . urlencode($commentaire);

echo "URL generee :<br>" . $url . "<br><br>";
echo "<a href=\"$url\">Cliquez ici</a><br>";
?>
</body>
</html>
