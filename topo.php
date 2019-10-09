<?php
$hoofdsteden = array(
    'Japan' => "Tokyo",
    'Mexico' => "Mexico City",
    'USA' => "New York City",
    'India' => "Mumbai",
    'Korea' => "Seoul",
    'China' => "Shanghai",
    'Nigeria' => "Lagos",
    'Argentina' => "Buenos Aires",
    'Egypt' => "Cairo",
    'UK' => "London"
);
$aantalGoed1 = 0;
foreach ($hoofdsteden as $land => $steden) {
    $antwoordUK = readline("Wat is de hoofdstad van " . $land . "?" . PHP_EOL);
    if ($antwoordUK === $steden) {
        echo "Correct!" . PHP_EOL;
        $aantalGoed1++;
    } elseif ($antwoordUK !== $steden) {
        echo "Jammer, '$antwoordUK' is niet juist, het juiste antwoord was " . $steden . PHP_EOL;
    }
}
echo "Je hebt " . $aantalGoed1 . " van de " . count($hoofdsteden) . " goed geraden!";