<?php
$jsonFile = 'data__rooms.json';

$roomFound = null;

if (file_exists($jsonFile)) {
    $jsonData = file_get_contents($jsonFile);

    $rooms = json_decode($jsonData, true);

    if (isset($_GET['id'])) {
        $requestedId = intval($_GET['id']);

        foreach ($rooms as $room) {
            if ($room['room_id'] === $requestedId) {
                $roomFound = $room; // Guarda la habitación encontrada
                break; // Sale del bucle si se encontró la habitación
            }
        }
    }
} else {
    echo "El archivo JSON no existe.";
}

// Muestra la habitación encontrada o un mensaje si no se encontró
if ($roomFound) {
    echo "<h2>Habitación Encontrada:</h2>";
    echo "<p><strong>Nombre:</strong> " . $roomFound['room_type'] . "</p>";
    echo "<p><strong>Número:</strong> " . $roomFound['room_number'] . "</p>";
    echo "<p><strong>Precio:</strong> $" . $roomFound['room_price'] . "</p>";
    echo "<p><strong>Descuento:</strong> " . $roomFound['room_discount'] . "%</p>";
} else {
    echo "<p>No se encontró ninguna habitación con ese ID.</p>";
}
?>