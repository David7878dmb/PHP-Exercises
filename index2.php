<?php
$jsonFilePath ="data__rooms.json";
$jsonData = file_get_contents($jsonFilePath);

if ($jsonData === false) {
    die ("Error al leer");
}

$rooms = json_decode($jsonData,true);


if ($rooms === null ){
    die ("Error al decodificar");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Rooms</h1>
    <pre><?php print_r($rooms) ?></pre>
</body>
</html>