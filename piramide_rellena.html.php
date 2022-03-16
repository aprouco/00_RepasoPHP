<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    
    /*
    Escribe un programa que pinte por pantalla una pirámide rellena a base de asteriscos. La base de la
    pirámide debe estar formada por 9 asteriscos
    */

    // crear un bucle que recorra 9 líneas
    for ($linea=0; $linea <=8 ; $linea++) { 
    //Y dentro de él otro bucle que pinte los asteriscos
        for ($asterisco=0; $asterisco <= $linea ; $asterisco++) {
            echo "*"; 
        }
    //Con br hago que por cada vez que el primer for haga una pasada haga un salto de línea
        echo "</br>";
    }

    ?>


</body>
</html>