<?php
// Connexion à la base de données
$conn = new mysqli("localhost", "root", "", "coffeeshopdataset");

// Vérifier la connexion
if ($conn->connect_error) {
    die("Erreur de connexion : " . $conn->connect_error);
}

if(isset($_POST['addWorker'])) {
    // Traitement des données du formulaire pour ajouter un travailleur à la base de données
    $worker_name = $_POST['name'];
    $worker_email = $_POST['email'];
    $worker_pass = $_POST['password'];
    $worker_num = $_POST['num'];
    // Ajoutez d'autres variables si nécessaire

    // Requête SQL pour insérer un nouveau travailleur
    $sql = "INSERT INTO workersprofiles (name, email, password , number) VALUES ('$worker_name', '$worker_email', '$worker_pass' ,'$worker_num')";
    if ($conn->query($sql) === TRUE) {
        echo "Travailleur ajouté avec succès.";
    } else {
        echo "Erreur : " . $sql . "<br>" . $conn->error;
    }
}

if(isset($_POST['addClient'])) {
    // Traitement des données du formulaire pour ajouter un client à la base de données
    $client_name = $_POST['name'];
    $client_email = $_POST['email'];
    $client_num = $_POST['num'];
    $coffee_temperature = $_POST['coffee-temperature'];
    $coffee_container = $_POST['coffee-container'];
    $coffee_type = $_POST['coffee-type'];
    
    $client_review = $_POST['review'];
    $order = isset($_POST["order"]) ? $_POST["order"] : "";
   if(is_array($order)){
    $order = implode(', ', $order);
}
    // Ajoutez d'autres variables si nécessaire

    // Requête SQL pour insérer un nouveau client
    $escaped_review = $conn->real_escape_string($client_review); // Escape the review string
    $sql = "INSERT INTO orderdetails (name, email, `numéro`, `coffee-temperature`, `coffee-container`, `coffee-type`, `order`, review) VALUES ('$client_name', '$client_email', '$client_num', '$coffee_temperature', '$coffee_container', '$coffee_type', '$order', '$escaped_review')";
    if ($conn->query($sql) === TRUE) {
        echo "Client ajouté avec succès.";
    } else {
        echo "Erreur : " . $sql . "<br>" . $conn->error;
    }
}

// Requête SQL pour récupérer tous les travailleurs
$sql = "SELECT * FROM workersprofiles";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Début du tableau avec style
    echo "<h2>Travailleurs</h2>";
    echo "<table border='3' style='background-color: beige; color: black; border-collapse: collapse; width: 100%;'>";
    echo "<tr><th style='border: 1px solid gray;'>Nom du travailleur</th><th style='border: 1px solid gray;'>Email</th><th style='border: 1px solid gray;'>mot de passe</th><th style='border: 1px solid gray;'>Numéro de téléphone</th></tr>";
    
    // Afficher les données de chaque travailleur avec style
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td style='border: 1px solid gray;'>" . $row["name"] . "</td>";
        echo "<td style='border: 1px solid gray;'>" . $row["email"] . "</td>";
        echo "<td style='border: 1px solid gray;'>" . str_repeat('*', strlen($row["password"])) . "</td>"; // Masquer le mot de passe avec des étoiles
        echo "<td style='border: 1px solid gray;'>" . $row["number"] . "</td>";
        echo "</tr>";
    }

    // Fin du tableau
    echo "</table>";
} else {
    echo "Aucun travailleur trouvé.";
}

// Requête SQL pour récupérer tous les clients
$sql = "SELECT * FROM orderdetails";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Début du tableau avec style
    echo "<h2>Clients</h2>";
    echo "<table border='3' style='background-color: beige; color: black; border-collapse: collapse; width: 100%;'>";
    echo "<tr><th style='border: 1px solid gray;'>Nom du client</th><th style='border: 1px solid gray;'>Email</th><th style='border: 1px solid gray;'>Numéro de téléphone</th><th style='border: 1px solid gray;'>Température du café</th><th style='border: 1px solid gray;'>Container du café</th><th style='border: 1px solid gray;'>Type de café</th><th style='border: 1px solid gray;'>Ordre</th><th style='border: 1px solid gray;'>Avis</th></tr>";
    
    // Afficher les données de chaque client avec style
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td style='border: 1px solid gray;'>" . $row["name"] . "</td>";
        echo "<td style='border: 1px solid gray;'>" . $row["email"] . "</td>";
        echo "<td style='border: 1px solid gray;'>" . $row["numéro"] . "</td>";
        echo "<td style='border: 1px solid gray;'>" . $row["coffee-temperature"] . "</td>";
        echo "<td style='border: 1px solid gray;'>" . $row["coffee-container"] . "</td>";
        echo "<td style='border: 1px solid gray;'>" . $row["coffee-type"] . "</td>";
        echo "<td style='border: 1px solid gray;'>" . $row["order"] . "</td>";
        echo "<td style='border: 1px solid gray;'>" . $row["review"] . "</td>";
        echo "</tr>";
    }

    // Fin du tableau
    echo "</table>";
} else {
    echo "Aucun résultat trouvé.";
}

// Fermer la connexion à la base de données
$conn->close();
?>
