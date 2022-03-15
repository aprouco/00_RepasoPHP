<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moneda</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">

    <label> Introduzca el valor: </label><br /><br />
    
    <input type="text" name="moneda"/> <br /> <br />   
           
        <label> Selecciona tu moneda:          
        <select name="monedas">           
            
            <option value="dolar">Dolar</option>
            <option value="euro">Euro</option>
            <option value="libra">Libra</option>
            <option value="rupia">Rupia</option>
            <option value="yuan">Yuan</option>
            <option value="rublo">Rublo</option>
            
        </select>
        </label> <br />
        
        <label> Selecciona la moneda que requieres:
    
        <select name="divisas">             
            
            <option value="dol">Dolar</option>
            <option value="eur">Euro</option>
            <option value="lib">Libra</option>
            <option value="rup">Rupia</option>
            <option value="yu">Yuan</option>
            <option value="rub">Rublo</option>
            
        </select>
        </label> <br /> <br />
        
        <input type="submit" value="Convertir">  
        <input type="reset" value="Reiniciar"> 
    </form>

    <?php

        $mon=$_POST['moneda'];
        $div=$_POST['divisas'];
        

    ?>

</body>
</html>