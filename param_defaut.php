<html>
<body>
<?php
function formaterDate($jour, $mois, $an = 2006) {
    if ($jour < 10) $res = '0' . $jour . '/';
    else $res = $jour . '/';
    if ($mois < 10) $res = $res . '0' . $mois . '/';
    else $res = $res . $mois . '/';
    return $res . $an;
}

// Appel avec 3 parametres
echo formaterDate(3, 5, 2025) . "<br>";
// Appel avec 2 parametres : $an prend la valeur par defaut 2006
echo formaterDate(3, 5) . "<br>";

// Fonction avec plusieurs parametres par defaut
function exemple($a, $b = 10, $c = 20) {
    return "a=$a, b=$b, c=$c";
}

echo exemple(1) . "<br>";         // a=1, b=10, c=20
echo exemple(1, 2) . "<br>";      // a=1, b=2, c=20
echo exemple(1, 2, 3) . "<br>";   // a=1, b=2, c=3
// exemple(1, , 3) => ERREUR DE SYNTAXE (impossible de sauter un parametre)
echo exemple(1, 10, 3) . "<br>";  // a=1, b=10, c=3 (on repete la valeur par defaut)
?>
</body>
</html>
