<?php

require __DIR__ . '/../Models/Product.php';

require __DIR__ . '/../Models/Category.php';

require __DIR__ . '/../Models/Toy.php';

require __DIR__ . '/../Models/Food.php';

require __DIR__ . '/../Models/Kennel.php';

// CATEGORIES
$dogCategory = new Category('Cani', '<i class="fa-solid fa-dog" style="color: #000000;"></i>');

$catCategory = new Category('Gatti', '<i class="fa-solid fa-cat" style="color: #000000;"></i>');

// TOYS
$kong = new Toy($dogCategory, 'Kong', 10.99, '01KONG', 10, 'Rosso', 'Gomma', 'piccola');
$fresbee = new Toy($dogCategory, 'Fresbee', 4, '02FREE', 20, 'Verde', 'Plastica', 'qualsiasi');
$mouse = new Toy($catCategory, 'Topo Giocattolo', 1.50, '03TOPO', 30, 'Grigio/Rosa', 'Tessuto', 'qualsiasi');
$laser = new Toy($catCategory, 'Laser', 8.50, '04LAS', 23, 'Rosso', 'Metallo', 'qualsiasi');

// FOOD
$mongee = new Food($dogCategory, 'Mongee', 52, '05MONGE', 35, 15, 250, "Adulti");
$oasy = new Food($dogCategory, 'Oasy', 14.65, '06OASY', 42, 2.5, 120, 'Cuccioli');
$almonature = new Food($catCategory, 'Almo Nature', 49.90, '07ALMO', 9, 12, 140, 'Cuccioli');
$exclusion = new Food($catCategory, 'Exclusion', 17, '08EXCLU', 17, 1.5, 158, 'Adulti');

// KENNELS
$woodKennel = new Kennel($dogCategory, 'Cuccia in Legno Classica', 150, '09WOOD', 2, 60, 80, 50, 100, 'Noce', 'Legno');
$fluffyBed = new Kennel($dogCategory, 'Letto Morbido Fluffy', 15, '10FLUFFY', 15, 3, 30, 50, 100, 'Bianco', 'Tassuto/Memory Foam');
$mochi = new Kennel($catCategory, 'Letto Mochi', 24.99, '11MOCHI', 5, 2.5, 25, 55, 55, 'Grigio Chiaro', 'Tessuto/Peluche');
$mupfel = new Kennel($catCategory, 'Letto Mupfel', 26.99, '12MUPFE', 8, 2, 35, 50, 50, 'Beije/Marrone', 'Poliestere');

$productsList = [];
array_push($productsList, $kong, $fresbee, $mouse, $laser, $mongee, $oasy, $almonature, $exclusion, $woodKennel, $fluffyBed, $mochi, $mupfel);