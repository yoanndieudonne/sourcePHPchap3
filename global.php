<html>
<body>
<?php
$a1 = 1;
$a4 = 4;

function fonc($param) {
    global $a1;   // Rend $a1 visible dans la fonction
    $a1++;
    echo "dans fonc : \$a1 = $a1 (visible)<br>";
    echo "dans fonc : \$a4 = $a4 (non visible)<br>";
}

echo "avant appel : \$a1 = $a1<br>";
echo "avant appel : \$a4 = $a4<br>";
echo "appel fonc(\$a4)<br>";
fonc($a4);
echo "après appel : \$a1 = $a1<br>";
echo "après appel : \$a4 = $a4<br>";
?>
</body>
</html>
