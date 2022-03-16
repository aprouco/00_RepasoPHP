<!DOCTYPE html>

<!--Escribe un programa que pida por teclado un día de la semana y que diga qué asignatura toca a
primera hora ese día.-->

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boletín03_T01</title>
</head>
<body>
    <form action="ejercicio1.html.php" method="post">
        <label for="dia">Escolle o día da semana</label>
        <select name="dia">
            <option value="">Escolle unha opción</option>
           
            <?php 
            if (isset($_REQUEST["dia"]) && ($_REQUEST["dia"]==0)){
                echo '<option value="0" selected>Luns</option>' ;
            }else{
                echo '<option value=0>Luns</option>';
            }
            ?> 
            
            <?php 
            if (isset($_REQUEST["dia"]) && ($_REQUEST["dia"]==1)){
                echo '<option value="1" selected>Martes</option>' ;
            }else{
                echo '<option value=1>Martes</option>';
            }
            ?> 
            
            <?php 
            if (isset($_REQUEST["dia"]) && ($_REQUEST["dia"]==2)){
                echo '<option value="2" selected>Mércores</option>' ;
            }else{
                echo '<option value=2>Mércores</option>';
            }
            ?> 
            
            <?php 
            if (isset($_REQUEST["dia"]) && ($_REQUEST["dia"]==3)){
                echo '<option value="3" selected>Xoves</option>' ;
            }else{
                echo '<option value=3>Xoves</option>';
            }
            ?> 

            <?php 
            
            if (isset($_REQUEST["dia"]) && ($_REQUEST["dia"]==4)){
                echo '<option value="4" selected>Venres</option>' ;
            }else{
                echo '<option value=4>Venres</option>';
            }
            ?>
        </select>
        <br>
        <label for="hora">Escolle a hora de clase: </label>
        <select name="hora">
            <option value="">Escolle unha opción</option>
            <?php 
            if (isset($_REQUEST["hora"]) && ($_REQUEST["hora"]=="8:50 - 9:40")){
                echo '<option selected>8:50 - 9:40</option>' ;
            }else{
                echo '<option>8:50 - 9:40</option>';
            }
            ?>

            <?php 
            if (isset($_REQUEST["hora"]) && ($_REQUEST["hora"]=="9:40 - 10:30")){
                echo '<option selected>9:40 - 10:30</option>' ;
            }else{
                echo '<option>9:40 - 10:30</option>';
            }
            ?>
            <?php 
            
            if (isset($_REQUEST["hora"]) && ($_REQUEST["hora"]=="10:30 - 11:20")){
                echo '<option selected>10:30 - 11:20</option>' ;
            }else{
                echo '<option>10:30 - 11:20</option>';
            }
            
            ?>

            <?php 
            if (isset($_REQUEST["hora"]) && ($_REQUEST["hora"]=="12:00 - 12:50")){
                echo '<option selected>12:00 - 12:50</option>' ;
            }else{
                echo '<option>12:00 - 12:50</option>';
            }
            ?>

            <?php 
            if (isset($_REQUEST["hora"]) && ($_REQUEST["hora"]=="12:50 - 13:40")){
                echo '<option selected>12:50 - 13:40</option>' ;
            }else{
                echo '<option>12:50 - 13:40</option>';
            }
            ?>

            <?php 
            if (isset($_REQUEST["hora"]) && ($_REQUEST["hora"]=="13:40 - 14:30")){
                echo '<option selected>13:40 - 14:30</option>' ;
            }else{
                echo '<option>13:40 - 14:30</option>';
            }
            ?>

            <?php 
            if (isset($_REQUEST["hora"]) && ($_REQUEST["hora"]=="16:00 - 16:50")){
                echo '<option selected>16:00 - 16:50</option>' ;
            }else{
                echo '<option>16:00 - 16:50</option>';
            }
            ?>
            <option>16:50 - 17:40</option>
            <?php 
            
            if (isset($_REQUEST["hora"]) && ($_REQUEST["hora"]=="16:50 - 17:40")){
                echo '<option selected>16:50 - 17:40</option>' ;
            }else{
                echo '<option>16:50 - 17:40</option>';
            }
            
            ?>

            <?php 
            if (isset($_REQUEST["hora"]) && ($_REQUEST["hora"]=="16:50 - 17:40")){
                echo '<option selected>17:40 - 18:30</option>' ;
            }else{
                echo '<option>17:40 - 18:30</option>';
            }
            ?>
        </select>
        <br>
        <input type="submit" value="Enviar"/>
    </form>

<?php

$horario = array (
    '8:50 - 9:40' => array('IAW','SAD','ASXBD','ASXBD','IAW'),
    '9:40 - 10:30' => array('IAW','SAD','EIE','ASXBD','SRI'),
    '10:30 - 11:20' => array('SRI','SAD','EIE','ASX','SRI'),
    '11:20 - 12:00' => array('Recreo'),
    '12:00 - 12:50' => array('SRI','ASO','ASO','IAW','SAD'),
    '12:50 - 13:40' => array('ASO','ASO','IAW','IAW','SAD'),
    '13:40 - 14:30' => array('ASXBD','ASO','IAW','SRI','SAD'),
    '14:30 - 16:00' => array('Mediodía'),
    '16:00 - 16:50' => array('','SRI','','ASO',''),
    '16:50 - 17:40' => array('','SRI','','ASO',''),
    '17:40 - 18:30' => array('','SRI','','ASO','')
);


if (!isset($_REQUEST["dia"]) || !isset($_REQUEST["dia"]) ) {
    echo "<p>Tes que escoller o día e a hora.</p>";
}else{
    $dia = $_REQUEST["dia"];
    $hora = $_REQUEST["hora"];
    $horarioDaHoraEscollida = $horario[$hora];
    echo "<p>Nese horario a clase é: ".$horarioDaHoraEscollida[$dia]."</p>";
}
?>
</body>
</html>