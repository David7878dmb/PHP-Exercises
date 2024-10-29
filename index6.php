<?php
include __DIR__ . '/utils/connection.php';
include __DIR__ . '/utils/path.php';

$id = (int)get_param_id();
$rooms = load_room($id);

include_once __DIR__ . '/views/room_template.php';

?>