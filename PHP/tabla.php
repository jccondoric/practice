<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="display: flex; justify-content: center; align-items: center; height: 300px;">


<?php

$a = $_GET['a'];

echo "<table border = '1'>";

echo "<tr><td colspan = '5' style='text-align: center;'>Tabla de multiplicar de $a</td></tr>";

for($i=1;$i <= 25; $i++){

    if(($i-1)%5==0) echo "</tr><tr>";

    echo "<td> $a x $i = ".$a * $i."</td>";
}

echo "</td>";



echo "</table>";


?>
    
</body>
</html>