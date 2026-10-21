<?php 

declare(strict_types=1);?>

<html>
<body>
<?php
function additionner(int $a, int $b): int {
    return $a + $b;
}

echo additionner(1, 1) . "<br>";     // 2
// La ligne suivante provoque une TypeError fatale :
// echo additionner(1, '1') . "<br>";
?>
</body>
</html>
