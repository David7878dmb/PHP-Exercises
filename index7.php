    <form>
        <label for="search">Escribe el tipo de habitación</label>
        <input type="text" id="search" name="search"></input>
        <button type="submit">Enviar</button>
    </form>


<?php 
    include_once __DIR__ . '/utils/connection.php';
    
    if (isset($_GET["search"]) && !empty($_GET["search"])){
        $searchTerm = htmlspecialchars($_GET["search"]);
        $rooms = load_rooms_by_type($searchTerm);
    } else {
        $rooms = load_rooms();
    }

    include_once __DIR__ . '/views/rooms_template.php';
?>