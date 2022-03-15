<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor monedas</title>
</head>
<body>

<form action="<?php echo $_SERVER ['PHP_SELF'];?>" method="post">

        <p>
            <label> Selecciona tu moneda:          
            <select name="moneda_seleccionada">               
                <option value="euro_select">Euro</option>
                <option value="dolar_select">Dolar</option>
                <option value="rublo_select">Rublo</option>
                <option value="yuan_select">Yuan</option>
        </p>
   
        <input type="text" name="num"/>

        </p>
        <input type="submit" value="euros" name="euros"/>
        <input type="submit" value="dolares" name="dolares"/>
        <input type="submit" value="rublos" name="rublos"/>
        <input type="submit" value="yuan" name="yuan"/>

</form>

    <?php
    error_reporting(E_ERROR);
    //Escribe un programa que sume, reste, multiplique y divida dos números introducidos por teclado.
        
        $num=intval($_POST['num']);
        $moneda=$_POST['moneda_seleccionada'];
     

        $euros_dolares=$num*1.10;
        $euros_rublos=$num*123.69;
        $euros_yuan=$num*7.01;
        $dolares_euros=$num*0.91;
        $dolares_rublos=$num*112.46;
        $dolares_yuan=$num*6.38;
        $rublos_euros=$num*0.0076;
        $rublos_dolares=$num*0.0089;
        $rublos_yuan=$num*0.057;
        $yuan_euros=$num*0.14;
        $yuan_dolares=$num*0.16;
        $yuan_rublos=$num*17.64;


        ######EUROS######

        echo "<p>";
        if (isset($_POST['euros'])) {
            if ($moneda == 'dolar_select') {
                echo $dolares_euros;
            }elseif ($moneda == 'rublo_select') {
                echo $rublos_euros;
            }elseif ($moneda == 'yuan_select') {
                echo $yuan_euros;
            }
        }
        echo "</p>";

        ######DOLARES######

        if (isset($_POST['dolares'])) {
            if ($moneda == 'euro_select') {
                echo $euros_dolares;
            }elseif ($moneda == 'rublo_select') {
                echo $rublos_dolares;
            }elseif ($moneda == 'yuan_select') {
                echo $yuan_dolares;
            }
   
        }

        ######RUBLOS######

        if (isset($_POST['rublos'])) {
            if ($moneda == 'euro_select') {
                echo $euros_rublos;
            }elseif ($moneda == 'dolar_select') {
                echo $dolares_rublos;
            }elseif ($moneda == 'yuan_select') {
                echo $yuan_rublos;
            }
   
        }

        ######YUAN######

        if (isset($_POST['yuan'])) {
            if ($moneda == 'euro_select') {
                echo $euros_yuan;
            }elseif ($moneda == 'rublo_select') {
                echo $rublos_yuan;
            }elseif ($moneda == 'dolar_select') {
                echo $dolares_yuan;
            }
   
        }

    ?>

</body>
</html>