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
    
    //Igual que el programa anterior, pero esta vez la pirámide estará hueca (se debe ver únicamente el
    //contorno hecho con asteriscos).
    
    //Creo un bucle que recorra 9 líneas
    for ($linea=0; $linea <=8 ; $linea++) {
    //Dentro creo otro bucle para que vaya pintando los asteriscos 
        for ($asterisco=0; $asterisco <=$linea ; $asterisco++) { 
    //Se pinta el asterisco en la primera línea (9 líneas empezando desde 0 a 8)
    //O si coinciden el asterisco y la línea
    //O si el bucle está recorriendo la última línea (9 líneas empezando desde 0 a 8) 
            if ($asterisco==0 || $asterisco==$linea || $linea==8) {
    //Que pinte el asterisco
                echo "*";
    //Si no se cumple la condición que lo deje en blanco
            }else {
                echo '&nbsp;&nbsp;';
            }
        }
    //Por cada línea que recorre el primer bucle hacemos un salto de línea
        echo "</br>";
    }

    
    ?>

</body>
</html>