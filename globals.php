<html>
<body>
<?php
$a = 1;
$b = 2;

function somme() {
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
}

somme();
echo "b = $b<br>";
?>
</body>
</html>
