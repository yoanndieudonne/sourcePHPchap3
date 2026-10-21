<html>
<body>
<?php
function additionner_float(float $a, float $b): int {
    return $a + $b;
}

// En mode faible : 1.0 + 1.1 = 2.1, converti en int -> 2
echo additionner_float(1.0, 1.1) . "<br>";
?>
</body>
</html>
