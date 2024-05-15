<?php

require __DIR__ . '/../Models/Product.php';

require __DIR__ . '/../Models/Category.php';



require __DIR__ . '/../Models/Food.php';



// CATEGORIES
$dogCategory = new Category('Cani', '<i class="fa-solid fa-dog"></i>');

$catCategory = new Category('Gatti', '<i class="fa-solid fa-cat"></i>');



// FOOD
$mongee = new Food($dogCategory, 'Mongee', 52, '05MONGE', 35, 15, 250, "Adulti");
$oasy = new Food($dogCategory, 'Oasy', 14.65, '06OASY', 42, 2.5, 120, 'Cuccioli');
$almonature = new Food($catCategory, 'Almo Nature', 49.90, '07ALMO', 9, 12, 140, 'Cuccioli');
$exclusion = new Food($catCategory, 'Exclusion', 17, '08EXCLU', 17, 1.5, 158, 'Adulti');


$productsList = [];
array_push($productsList);