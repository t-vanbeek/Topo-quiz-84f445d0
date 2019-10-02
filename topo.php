<?php
$landen = array(
    "Japan",
    "Mexico",
    "USA",
    "India",
    "Korea",
    "China",
    "Nigeria",
    "Argentina",
    "Egypt",
    "UK"
);
$hoofdsteden = array(
    Japan => "Tokyo",
    Mexico => "Mexico City",
    USA =>    "New York City",
    India =>  "Mumbai",
    Korea =>  "Seoul",
    China =>  "Shanghai",
    Nigeria => "Lagos",
    Arentina => "Buenos Aires",
    Egypt =>   "Cairo",
    UK =>     "London"
);

var_dump($landen);
var_dump($hoofdsteden);

$aantal_landen = count($landen);
echo $aantal_landen . PHP_EOL . PHP_EOL;

foreach ($hoofdsteden as $hoofdstad)
    echo $hoofdstad . PHP_EOL;
