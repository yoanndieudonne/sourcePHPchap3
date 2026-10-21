<html>
<body>
<?php
// Timestamp du 26 novembre 2000 a minuit
$ts = mktime(0, 0, 0, 11, 26, 2000);
echo "Le 26/11/2000 : " . date("d-m-Y", $ts) . "<br>";

// Le lendemain du 26/11/2000
$lendemain = $ts + 24 * 3600;
echo "Le lendemain : " . date("d-m-Y", $lendemain) . "<br>";

// Un mois apres le 31 janvier (mktime gere les debordements)
// 31 janvier + 1 mois = 28 ou 29 fevrier selon l'annee
$un_mois_apres = mktime(0, 0, 0, 1 + 1, 31, 2025);
echo "Un mois apres le 31/01/2025 : " . date("d-m-Y", $un_mois_apres) . "<br>";
?>
</body>
</html>
