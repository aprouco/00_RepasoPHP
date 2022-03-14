<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio1_4</title>
</head>
<body>
    <?php 
     ############################---------------------HORARIO---------------------############################
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

    echo "<table border '1'>"; 
    echo "<th>Hora</th>";
    echo "<td><b>LUNS</b></td><td><b>MARTES</b></td><td><b>MÉRCORES</b></td><td><b>XOVES</b></td><td><b>VENRES</b></td>";
        foreach ($horario as $hora => $clase) {
            echo "<tr>";
            echo "<th>".$hora."</th>";
            foreach($clase as $m){
                if(count($clase)==1){
                    echo "<td colspan='5'>".$m."</td>";
                }else{
                    echo "<td>".$m."</td>";
                }
            }
        }
    echo"</table>";

    ?>
</body>
</html>