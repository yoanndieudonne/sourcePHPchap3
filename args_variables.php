<html>
<body>
<?php
function somme() {
    $som = 0;
    $args = func_get_args();
    $nbr = count($args);
    for ($i = 0; $i < $nbr; $i++) {
        $som += $args[$i];
    }
    return $som;
}

echo somme(1, 2, 3) . "<br>";       // 6
echo somme(1, 2, 3, 4) . "<br>";    // 10
echo somme() . "<br>";               // 0
?>
</body>
</html>
