<html>
<body>
<?php
$date = date("d-m-Y");
$heure = date("H:i");
echo "Nous sommes le $date et il est $heure<br>";

echo date("l j F Y") . "<br>";
echo date("d/m/y H:i:s") . "<br>";

// Annee bissextile ?
echo "Annee bissextile : " . date("L") . "<br>";
?>
</body>
</html>
