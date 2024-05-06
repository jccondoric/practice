<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$a = $_GET['a'];

echo "<table border ='1'>";

echo "<tr><td colspan = '5'>Tabla de Multiplicar de $a</td></tr>";

for($i=1;$i <= 25;$i++){


    if(($i-1)%5==0) echo "</tr><tr>";

    echo "<td>$a x $i = ".$a * $i." </td>";

}

echo "</tr>";



echo "</table>";

?>
    
</body>
</html>