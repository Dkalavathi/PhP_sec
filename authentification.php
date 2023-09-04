<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connexion à la base de données avec MySQLi
    $host = 'mysql';
    $user = 'root';
    $pass = '';
    
    $mysqli = new mysqli($host, $user, $pass,"test");

    // Vérification de la connexion
    if ($mysqli->connect_error) {
        die("Échec de la connexion à la base de données : " . $mysqli->connect_error);
    }

// Vérification de la connexion
if ($mysqli->connect_error) {
    die("Échec de la connexion à la base de données : " . $mysqli->connect_error);
}

// Récupération des entrées utilisateur (non sécurisées)
$nom_utilisateur = $_POST['nom_utilisateur'];
$mot_de_passe = $_POST['mot_de_passe'];


// Construction de la requête SQL (vulnérable à l'injection SQL)
$sql = "SELECT * FROM utilisateur WHERE nom_utilisateur = '$nom_utilisateur' AND mot_de_passe = '$mot_de_passe'";

var_dump($sql);
die();
$resultat = $mysqli->query($sql);

// Vérification de l'authentification
if ($resultat->num_rows > 0) {
    echo "Connexion réussie!";
} else {
    echo "Échec de la connexion!";
}

// Fermeture de la connexion
$mysqli->close();

}

?>
<!---

     nom d'utilisateur et son mot de passe.
admin' OR '1'='1 
' OR '1'='1.
​[10:25] NHAILA  Achraf
    INSERT INTO posts (title, content) VALUES
    ('post1', 'Informations post1'),
    ('post2', 'Informations post2'),
    ('post3', 'Informations post3');
-- Insertion de données fictives dans la table 'utilisateurs'
INSERT INTO posts (nom_utilisateur, mot_de_passe) VALUES
    ('post1', 'Informations post1'),
    ('post2', 'Informations post2'),
    ('post3', 'Informations post3');

-- Création de la table 'utilisateurs'
CREATE TABLE utilisateurs 
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom_utilisateur VARCHAR(50) NOT NULL,
    mot_de_passe VARCHAR(255) NOT NULL
);
-- Insertion de données fictives dans la table 'utilisateurs'
INSERT INTO utilisateurs (nom_utilisateur, mot_de_passe) VALUES
    ('utilisateur1', 'motdepasse1'),
    ('utilisateur2', 'motdepasse2'),
    ('utilisateur3', 'motdepasse3');
"; -->

