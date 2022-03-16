<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio10</title>
</head>
<body>
    <form action=<?php echo $_SERVER['PHP_SELF'] ?> method="post">
        <label for="intentos">Intentos</label>
        <input type="hidden" name="intentos" value="<?php echo (isset($_REQUEST['intentos'])?$_REQUEST['intentos']+1:'1')?>"/>
        <br>
        <label for="dia">Día: </label>
        <input type="number" min="1" max="31" name="dia" value="<?php echo isset($_REQUEST['dia'])?$_REQUEST['dia']:''?>">
        <br><label for="dia">Mes: </label>
        <select name="mes">
            <option value="01" <?php if (isset($_REQUEST["dia"])&&$_REQUEST["dia"]=="01") {
                echo "selectec";
            } ?>
            >Xaneiro</option>
            <option value="02" <?php if (isset($_REQUEST["dia"])&&$_REQUEST["dia"]=="02") {
                echo "selectec";
            } ?>
            >Febreiro</option>
            <option value="03" <?php if (isset($_REQUEST["dia"])&&$_REQUEST["dia"]=="03") {
                echo "selectec";
            } ?>
            >Marzo</option>
            <option value="04" <?php if (isset($_REQUEST["dia"])&&$_REQUEST["dia"]=="04") {
                echo "selectec";
            } ?>
            >Abril</option>
            <option value="05" <?php if (isset($_REQUEST["dia"])&&$_REQUEST["dia"]=="05") {
                echo "selectec";
            } ?>
            >Maio</option>
            <option value="06" <?php if (isset($_REQUEST["dia"])&&$_REQUEST["dia"]=="06") {
                echo "selectec";
            } ?>
            >Xuño</option>
            <option value="07" <?php if (isset($_REQUEST["dia"])&&$_REQUEST["dia"]=="07") {
                echo "selectec";
            } ?>
            >Xullo</option>
            <option value="08" <?php if (isset($_REQUEST["dia"])&&$_REQUEST["dia"]=="08") {
                echo "selectec";
            } ?>
            >Agosto</option>
            <option value="09" <?php if (isset($_REQUEST["dia"])&&$_REQUEST["dia"]=="09") {
                echo "selectec";
            } ?>
            >Setembro</option>
            <option value="10" <?php if (isset($_REQUEST["dia"])&&$_REQUEST["dia"]=="10") {
                echo "selectec";
            } ?>
            >Outubro</option>
            <option value="11" <?php if (isset($_REQUEST["dia"])&&$_REQUEST["dia"]=="11") {
                echo "selectec";
            } ?>
            >Novembro</option>
            <option value="12" <?php if (isset($_REQUEST["dia"])&&$_REQUEST["dia"]=="12") {
                echo "selectec";
            } ?>
            >Decembro</option>
        </select>
        <br>
        <input type="submit" value="Enviar">
    </form>
    <?php
        if (!isset($_REQUEST["dia"]) || !isset($_REQUEST["mes"])) {
            echo "<p>Tes que escoller o día e o mes</p>";
        }else {
            $mes = $_REQUEST["mes"];
            $dia = $_REQUEST["dia"];
            $dataConsultada=mktime(0,0,0,intval($mes),intval($dia));
            $calendarioHoroscopo = array(
                mktime(0,0,0,1,20) => "Capricornio",
                mktime(0,0,0,2,19) => "Acuario",
                mktime(0,0,0,3,21) => "Piscis",
                mktime(0,0,0,4,20) => "Aries",
                mktime(0,0,0,5,22) => "Tauro",
                mktime(0,0,0,6,22) => "Géminis",
                mktime(0,0,0,7,23) => "Cáncer",
                mktime(0,0,0,8,24) => "Leo",
                mktime(0,0,0,9,23) => "Virgo",
                mktime(0,0,0,10,23) => "Libro",
                mktime(0,0,0,11,21) => "Escorpio",
                mktime(0,0,0,12,22) => "Sagitario",
            );
            
            $horoscopo = "";
            foreach ($calendarioHoroscopo as $marcaTempo => $signoHoroscopo) {
                if ($dataConsultada < $marcaTempo && $horoscopo == "") {
                    $horoscopo = $signoHoroscopo;   
                }
            }
            
            if ($horoscopo == ""){
                    $horoscopo = "Capricornio";    
            }
            echo "O teu horóscopo, según varias fontes consultadas é aproximadamente: ".$horoscopo;
        }
    ?>
</body>
</html>