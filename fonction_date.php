<html>
<body>
<?php
// Renvoie un string jour/mois/an avec jour et mois sur 2 chiffres
function formaterDate($jour, $mois, $an) {
    if ($jour < 10) {
        $res = '0' . $jour . '/';
    } else {
        $res = $jour . '/';
    }
    if ($mois < 10) {
        $res = $res . '0' . $mois . '/';
    } else {
        $res = $res . $mois . '/';
    }
    return $res . $an;
}

echo 'date formatée : ' . formaterDate(3, 5, 2003);
?>
</body>
</html>
