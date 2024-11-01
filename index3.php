<?php

$jsonFilePath = 'data__rooms.json'; 
$jsonData = file_get_contents($jsonFilePath);


if ($jsonData === false) {
    die('Error al leer el archivo JSON');
}


$rooms = json_decode($jsonData, true);

if ($rooms === null) {
    die('Error al decodificar el JSON');
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rooms</title>
</head>
<body>
    <h1>Lista de Habitaciones</h1>
    <ol>
        <?php foreach ($rooms as $room): ?>
            <li>
                <strong>Name:</strong> <?php echo htmlspecialchars($room['room_type']); ?><br>
                <strong>Number:</strong> <?php echo htmlspecialchars($room['room_number']); ?><br>
                <strong>Price:</strong> $<?php echo htmlspecialchars($room['room_price']); ?><br>
                <strong>Discount:</strong> <?php echo htmlspecialchars($room['room_discount']); ?>%
            </li>
        <?php endforeach; ?>
    </ol>
</body>
</html>