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
    
    /*Crear una pirámide invertida de 9 líneas*/

    //Creo un bucle que recorra 9 líneas emprezando desde la última y pare cuando llegue a 0
    //(9 líneas empezando desde 0 a 8)
    for ($linea=8; $linea >= 0 ; $linea--) {
    //Creo otro bucle en el que por cada pasada del primer bucle vaya pintando asteriscos
    //Empezará a pintar desde la línea 9 por lo que dará la impresión de una pirámide invertida 
        for ($asterisco=0; $asterisco <=$linea ; $asterisco++) { 
            echo "*";
        }
        echo "</br>";
    }

    ?>


</body>
</html>