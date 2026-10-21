<html>
<body>
<?php
function additionner(int $a, int $b): int {
    return $a + $b;
}

echo additionner(1, 1) . "<br>";     // 2
echo additionner(1, '1') . "<br>";   // 2 (conversion implicite de "1" en 1)
?>
</body>
</html>
