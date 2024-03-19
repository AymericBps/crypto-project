<?php
// Include the Currencies class
require_once './App/Model/currencies.php';
require_once './js/traitement.php';

// Create an instance of the Currencies class
$currencies = new Curencies();

// Get all currency data
$currencyData = $currencies->getAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>
<body>
    <header class="p-5 bg-info text-white text-center">
        <h1>Currency Information</h1>
    </header>
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered mb-5">
                    
                    <?php foreach ($currencyData as $c): ?>
                        <tr>
                            <th>Nom</th>
                            <th>Valeur (€)</th>
                        </tr>
                        <tr>
                            <td><?php echo $c['name'] ?> </td>
                            <td><?php echo $c['valueEUR'] ?> €</td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>