<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio1.3</title>
</head>
<body>
    <?php
    ############################---------------------TRADUCTOR---------------------############################
        $palabras = array('leche' => "milk",
                          'mesa' => "table",
                          'agua' => "water",
                          'vino' => "wine",
                          'hola' => "hello" );
    
        echo "<table border = '1'>";
            echo "<th><b>Castellano</b></th>";
            echo "<th><b>Ingles</b></th>";
            foreach ($palabras as $castellano => $ingles) {
                echo "<tr><td>".$castellano."</td><td>".$ingles."</td></tr>";
            }

        echo "</table>";

    ?>

</body>
</html>