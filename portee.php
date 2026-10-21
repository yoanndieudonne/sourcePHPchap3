<html>
<body>
<?php
$a = 1;

function fonc($param) {
    $b = 4;
    echo "j ai reçu le param : $param<br>";
    $param++;
    echo "param = $param<br>";
    // $a n'est pas visible ici (variable globale)
    echo "\$a = $a (donc non visible !)<br>";
}

echo "avant appel, \$a = $a<br>";
fonc($a);
echo "après appel, \$a = $a<br>";
?>
</body>
</html>
