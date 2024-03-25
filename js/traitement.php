<script>
    <?php require_once("./js/main.js");?>
</script>

<?php

$data = json_decode(file_get_contents('php://input'));

$dbhost = "localhost";
$dbuser = "root";
$dbpasswd = "";
$dbname = "crypto";

var_dump($data);

$conn = new mysqli($dbhost, $dbuser, $dbpasswd, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$nom = $data['bitcoin'];//Le truc de notre js (l'api)
$valeurEUR = $data['eur'];//Le truc de notre js (l'api)

$sql = "INSERT INTO currencies (name, valueEUR VALUES ($nom)";
$stmt = $conn->prepare($sql);
var_dump($sql);
$stmt->execute();


if ($conn->query($sql) === TRUE) {
    echo "Nouvel enregistrement créé avec succès";
} else {
    echo "Erreur : " . $sql . "<br>" . $conn->error;
}

$conn->close();


