<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boletín03_T01</title>
</head>
<!--Escribe un programa que pida por teclado un día de la semana y que diga qué asignatura toca a
primera hora ese día.-->
<body>
    <form action="<?php echo $_SERVER ['PHP_SELF'];?>" method="post">
        <label for="dia">Escolle o día da semana</label>
        <select name="dia">
            <option value="0">Luns</option>
            <option value="1">Martes</option>
            <option value="2">Mércores</option>
            <option value="3">Xoves</option>
            <option value="4">Venres</option>
        </select>
        <br>
        <label for="hora">Escolle a hora de clase: </label>
        <select name="hora">
            <option value="">Escolle unha opción</option>
            <option>8:50 - 9:40</option>
            <option>9:40 - 10:30</option>
            <option>10:30 - 11:20</option>
            <option>12:00 - 12:50</option>
            <option>12:50 - 13:40</option>
            <option>13:40 - 14:30</option>
            <option>16:00 - 16:50</option>
            <option>16:50 - 17:40</option>
            <option>17:40 - 18:30</option>
        </select>
        <br>
        <input type="submit" value="Enviar"/>
    </form>

    <?php
    /*Escribe un programa que pida por teclado un día de la semana y que diga qué asignatura toca a
    primera hora ese día.*/

    $horario = array(
        '8:50 - 9:40' => array('IAW','SAD','ASXBD','ASXBD','IAW'),
        '9:40 - 10:30' => array('IAW','SAD','EIE','ASXBD','SRI'),
        '10:30 - 11:20' => array('SRI','SAF','EIE','EIE','SRI'),
        '11:20 - 12:00' => array('DESCANSO'),
        '12:00 - 12:50' => array('SRI','ASO','ASO','IAW','SAD'),
        '12:50 - 13:40' => array('ASO','ASO','IAW','IAW','SAD'),
        '13:40 - 14:30' => array('ASXBD','ASO','IAW','SRI','SAD'),
        '14:30 - 16:00' => array('MEDIODÍA'),
        '16:00 - 16:50' => array('','SRI','','ASO',''),
        '16:50 - 17:40' => array('','SRI','','ASO',''),
        '17:40 - 18:30' => array('','SRI','','ASO',''),
    );
    
    $dia = isset($_POST['dia']) ? $_POST['dia'] : "";
    $hora = isset($_POST['hora']) ? $_POST['hora'] : ""; 

    if (!isset($dia) && !isset($hora)) {
        echo "<p>Tienes que introducir el dia y la hora</p>";
    }elseif($dia < 5 && $dia >= 0 && $hora != "") {
        echo "<p>".$dia." es el día escogido.</p> "."<p>".$hora." es la hora escogida</p>";
        $claseEscogida = $horario[$hora];
        echo "<p>La clase que hay en la hora escogida es ".$claseEscogida[$dia]."</p>";
    }else {
        echo "<p>Se ha producido un error.</p>";
    }
    
 
    ?>

</body>
</html>