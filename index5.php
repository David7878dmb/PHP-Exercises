<?php
include __DIR__ . '/utils/connection.php';

$rooms = load_rooms();

include_once __DIR__ . '/views/rooms_template.php';

?>