<html>
<body>
<?php
echo "<h2>Informations sur la requete</h2>";
echo "Vous visitez la page : " . $_SERVER['PHP_SELF'] . "<br>";
echo "Votre adresse IP est : " . $_SERVER['REMOTE_ADDR'] . "<br>";
echo "Serveur : " . $_SERVER['SERVER_NAME'] . "<br>";
echo "Methode utilisee : " . $_SERVER['REQUEST_METHOD'] . "<br>";
echo "<hr>";
echo "Votre navigateur : <br>" . $_SERVER['HTTP_USER_AGENT'];
?>
</body>
</html>
