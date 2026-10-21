<html>
<body>
<?php
// 1. Verification de l'existence des parametres
if (isset($_GET['prenom']) && isset($_GET['age'])) {
    
    // 2. Recuperation et nettoyage (suppression des espaces)
    $prenom = trim($_GET['prenom']);
    $age_str = $_GET['age']; // C'est une chaine de caracteres !
    
    // 3. Verification que les champs ne sont pas vides
    if (!empty($prenom) && !empty($age_str)) {
        
        // 4. Transtypage en entier (bonne pratique de validation)
        $age = (int)$age_str; 
        
        echo "Bonjour $prenom !<br>";
        echo "Vous avez $age ans.<br>";
        echo "Dans 10 ans, vous aurez " . ($age + 10) . " ans.";
        
    } else {
        echo "Erreur : les parametres ne peuvent pas etre vides.";
    }
} else {
    // Cas ou l'URL est appelee sans parametres (ex: bienvenue.php)
    echo "Bienvenue ! Veuillez ajouter ?prenom=VotrePrenom&age=VotreAge a l'URL.";
}
?>
</body>
</html>
