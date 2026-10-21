<?php
function formaterDate($jour, $mois, $an) {
    if ($jour < 10) $res = '0' . $jour . '/';
    else $res = $jour . '/';
    if ($mois < 10) $res = $res . '0' . $mois . '/';
    else $res = $res . $mois . '/';
    return $res . $an;
}
?>
