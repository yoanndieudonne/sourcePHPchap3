<html>
<body>
<?php
echo "Timestamp actuel : " . time() . "<br>";

// Demain : maintenant + 24 heures
$demain = time() + 24 * 3600;
echo "Demain : " . date("d-m-Y", $demain) . "<br>";

// Il y a une semaine
$semaine = time() - 7 * 24 * 3600;
echo "Il y a une semaine : " . date("d-m-Y", $semaine) . "<br>";
?>
</body>
</html>
