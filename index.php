<?php

include_once __DIR__ . "/include/functions.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hai detto password?</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center">Hai bisogno di una password? Prova con questo metodo:</h1>
            <div id="form"class="bg-dark text-white d-flex justify-content-center p-5 m-5">
                <div class="text-color">
                    <form action="index.php" method="GET">
                         <span>Lunghezza password:</span>
                         <input type="number" name="lunghezzaPassword">
                         <button class="btn btn-warning">Crea</button>
                    </form>
                    
                    <div class="text-center mt-5">
                         <span> La tua password è: <h3> <?php echo randomPassword() ?></h3> </span>
                    </div>
                </div>
            </div>
    </div>
    <!-- script bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>