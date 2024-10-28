<?php 
 
$room = [
    $room1 = [
        "id" => 1,
        "name" => "paco",
        "number" => 591,
        "price" => "$104.97",
        "discount" => 10
    ],
        
    $room2 = [
        "id" => 3,
        "name" => "Deluxe A",
        "number" => 701,
        "price" => "$191.89",
        "discount" => 20
    ],            
            
    $room3 = [        
        "id" => 2,
        "name" => "Pepe",
        "number" => 995,
        "price" => "$81.32",
        "discount" => 40
    ]
];

echo "<pre>";
print_r($room);
echo "</pre>";
?>