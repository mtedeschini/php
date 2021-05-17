<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>

<?php

$aProductos = array("TV", "Radio", "Aire");

echo "<table class='table'>";
for ($i = 0; $i < count($aProductos); $i++ ){
    echo "<tr><td>" . $aProductos[$i] . "</td></tr>";
    }

    echo"</table>";
?>

</body>
</html>