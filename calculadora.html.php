<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="<?php echo $_SERVER ['PHP_SELF'];?>" method="post">

    <label for="num1">Introduce el primer número</label>
    <input type="number" name="num1"/>
    </p>
    <label for="num2">Introduce el segundo número</label>
    <input type="number" name="num2"/>
    </p>
    <input type="submit" value="Sumar" name="sumar"/>
    <input type="submit" value="Restar" name="restar"/>
    <input type="submit" value="Multiplicar" name="multiplicar"/>
    <input type="submit" value="Dividir" name="dividir"/>

</form>

    <?php
    //Escribe un programa que sume, reste, multiplique y divida dos números introducidos por teclado.
        
        if (!isset($_POST['num1']) && !isset($_POST['num2'])) {
            echo "<p>Tienes que introducir los números</p>";
        }

        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        $suma = $num1 + $num2;
        $resta = $num1 - $num2;
        $multiplicar = $num1 * $num2;
        $dividir = $num1 / $num2;

        if (isset($_POST['sumar'])) {
            echo "<p> La suma da ".$suma." como resultado</p>";
        }
        
        if (isset($_POST['restar'])) {
            echo "<p> La resta da ".$resta." como resultado</p>";
   
        }

        if (isset($_POST['multiplicar'])) {
            echo "<p> La multiplicación da ".$multiplicar." como resultado</p>";    
    
        }
        
        if (isset($_POST['dividir'])) {
            echo "<p> La división da ".$dividir." como resultado</p>";

        }

    ?>

</body>
</html>