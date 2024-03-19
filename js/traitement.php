<script>
    <?php require_once("./js/main.js");?>
</script>

<?php

$data = json_decode(file_get_contents('php://input'), true);

$dbhost = "localhost";
$dbuser = "root";
$dbpasswd = "";
$dbname = "crypto";

var_dump($data);

$conn = new mysqli($dbhost, $dbuser, $dbpasswd, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$nom = "Bitcoin";
$valeur_eur = $data['bitcoin']['eur'];
var_dump($valeur_eur);

$sql = "INSERT INTO currencies (name, valueEUR VALUES (?, ?)";
$stmt = $conn->prepare($sql);
var_dump($sql);
$stmt->execute();


if ($conn->query($sql) === TRUE) {
    echo "Nouvel enregistrement créé avec succès";
} else {
    echo "Erreur : " . $sql . "<br>" . $conn->error;
}

$conn->close();


