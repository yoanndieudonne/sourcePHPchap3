<html>
<body>
<?php
// Passage par valeur (par defaut)
function ajouter10_valeur($x) {
    $x += 10;
}

// Passage par reference
function ajouter10_reference(&$x) {
    $x += 10;
}

$a = 5;
ajouter10_valeur($a);
echo "Apres passage par valeur : a = $a<br>";   // 5 (inchange)

$b = 5;
ajouter10_reference($b);
echo "Apres passage par reference : b = $b<br>"; // 15 (modifie)
?>
</body>
</html>
