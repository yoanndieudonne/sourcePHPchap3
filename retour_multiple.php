<html>
<body>
<?php
// Renvoie un array avec le quotient puis le reste
function divisionEntiere($entier, $diviseur) {
    $quotient = (int)($entier / $diviseur);
    $reste = $entier - $diviseur * $quotient;
    return array($quotient, $reste);
}

$entier = 15;
$diviseur = 6;

// Methode 1 : acces par indice
$tab = divisionEntiere($entier, $diviseur);
echo "$entier = $diviseur * " . $tab[0] . " + " . $tab[1] . "<br>";

// Methode 2 : destructuration (syntaxe moderne)
[$quotient, $reste] = divisionEntiere($entier, $diviseur);
echo "$entier = $diviseur * $quotient + $reste<br>";
?>
</body>
</html>
