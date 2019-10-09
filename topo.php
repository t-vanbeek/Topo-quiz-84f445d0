<?php
/*# $landen = array(
#   0 => "Japan",
#  1 => "Mexico",
# 2 => "USA",
#    3 => "India",
#   4 => "Korea",
#  5 => "China",
# 6 => "Nigeria",
#    7 => "Argentina",
#   8 => "Egypt",
#  9 => "UK"
# );
# $hoofdsteden = array(
#    0 => "Tokyo",
#   1 => "Mexico City",
#  2 => "New York City",
# 3 => "Mumbai",
#    4 => "Seoul",
#   5 => "Shanghai",
#  6 => "Lagos",
# 7 => "Buenos Aires",
#    8 => "Cairo",
#   9 => "London"
# );

# var_dump($landen);
# var_dump($hoofdsteden);

# $aantal_landen = count($landen);
# echo $aantal_landen . PHP_EOL . PHP_EOL;
# $x = 0;
# for ($i = 0; $i < $aantal_landen; $i++) {
#   $antwoord = readline("Welke hoofdstad heeft " . $landen[$i] . PHP_EOL);
#  if ($antwoord === $hoofdsteden[$i] . print "Correct!\r\n" . PHP_EOL){
#     $x++;}

#   elseif ($antwoord !== $hoofdsteden[$i] . print $antwoord . " is niet de hoofdstad van " . $landen[$i] ."\r\n" . PHP_EOL);
#  elseif ($x === 9)
#     echo $aantal_goed;
#}

# echo $aantal_goed;
echo "======================================================================================";
?>

<?php

$landen = array(
    0 => "Japan",
    1 => "Mexico",
    2 => "USA",
    3 => "India",
    4 => "Korea",
    5 => "China",
    6 => "Nigeria",
    7 => "Argentina",
    8 => "Egypt",
    9 => "UK"
);

#Japan, Tokyo
#Mexico, Mexico City
#USA, New York City
#India, Mumbai
#Korea, Seoul
#China, Shanghai
#Nigeria, Lagos
#Argentina, Buenos Aires
#Egypt, Cairo
#UK, London

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

var_dump($landen);
var_dump($hoofdsteden);

$aantalLanden = count($landen);

$aantalGoed = 0;
$antwoord = array(

);

$subject = array_keys($hoofdsteden);  
$marks = count($hoofdsteden);   
    
for($i=0; $i < $marks; $i++) {  
    echo $subject[$i] . ' ' . $student_one[$subject[$i]] . "\n";  
}  

echo "Je hebt " . $aantalGoed . " van de 10 goed geraden!";
*/
?>
<?php

$land = array(
    0 => "Japan",
    1 => "Mexico",
    2 => "USA",
    3 => "India",
    4 => "Korea",
    5 => "China",
    6 => "Nigeria",
    7 => "Argentina",
    8 => "Egypt",
    9 => "UK"
);

/*
Japan, Tokyo
Mexico, Mexico City
USA, New York City
India, Mumbai
Korea, Seoul
China, Shanghai
Nigeria, Lagos
Argentina, Buenos Aires
Egypt, Cairo
UK, London
*/

$stad = array(
    1 => "Tokyo",
    2 => "Mexico City",
    3 => "New York City",
    4 => "Mumbai",
    5 => "Seoul",
    6 => "Shanghai",
    7 => "Lagos",
    8 => "Buenos Aires",
    9 => "Cairo",
    0 => "London"
);
$aantalGoed1 = 0;
$antwoordJapan = readline("Wat is de hoofdstad van " . $land[0] . "?" . PHP_EOL);
if ($antwoordJapan === "Tokyo") {
    echo "Correct!" . PHP_EOL;
    $aantalGoed1++;
} elseif ($antwoordJapan !== "Tokyo") {
    echo "Jammer, '$antwoordJapan' is niet juist, het juiste antwoord was " . $stad[1] . PHP_EOL;
}

$antwoordMexico = readline("Wat is de hoofdstad van " . $land[1] . "?" . PHP_EOL);
if ($antwoordMexico === "Mexico City") {
    echo "Correct!" . PHP_EOL;
    $aantalGoed1++;
} elseif ($antwoordMexico !== "Mexico City") {
    echo "Jammer, '$antwoordMexico' is niet juist, het juiste antwoord was " . $stad[2] . PHP_EOL;
}
$antwoordUSA = readline("Wat is de hoofdstad van " . $land[2] . "?" . PHP_EOL);
if ($antwoordUSA === "New York City" || $antwoordUSA === "NYC") {
    echo "Correct!" . PHP_EOL;
    $aantalGoed1++;
} elseif ($antwoordUSA !== "New York City" and $antwoordUSA !== "NYC") {
    echo "Jammer, '$antwoordUSA' is niet juist, het juiste antwoord was " . $stad[3] . PHP_EOL;
}
$antwoordIndia = readline("Wat is de hoofdstad van " . $land[3] . "?" . PHP_EOL);
if ($antwoordIndia === "Mumbai") {
    echo "Correct!" . PHP_EOL;
    $aantalGoed1++;
} elseif ($antwoordIndia !== "Mumbai") {
    echo "Jammer, '$antwoordIndia' is niet juist, het juiste antwoord was " . $stad[4] . PHP_EOL;
}
$antwoordKorea = readline("Wat is de hoofdstad van " . $land[4] . "?" . PHP_EOL);
if ($antwoordKorea === "Seoul") {
    echo "Correct!" . PHP_EOL;
    $aantalGoed1++;
} elseif ($antwoordKorea !== "Seoul") {
    echo "Jammer, '$antwoordKorea' is niet juist, het juiste antwoord was " . $stad[5] . PHP_EOL;
}
$antwoordChina = readline("Wat is de hoofdstad van " . $land[5] . "?" . PHP_EOL);
if ($antwoordChina === "Shanghai") {
    echo "Correct!" . PHP_EOL;
    $aantalGoed1++;
} elseif ($antwoordChina !== "Shanghai") {
    echo "Jammer, '$antwoordChina' is niet juist, het juiste antwoord was " . $stad[6] . PHP_EOL;
}
$antwoordNigeria = readline("Wat is de hoofdstad van " . $land[6] . "?" . PHP_EOL);
if ($antwoordNigeria === "Lagos") {
    echo "Correct!" . PHP_EOL;
    $aantalGoed1++;
} elseif ($antwoordNigeria !== "Lagos") {
    echo "Jammer, '$antwoordEgypt' is niet juist, het juiste antwoord was " . $stad[7] . PHP_EOL;
}
$antwoordArgentina = readline("Wat is de hoofdstad van " . $land[7] . "?" . PHP_EOL);
if ($antwoordArgentina === "Buenos Aires") {
    echo "Correct!" . PHP_EOL;
    $aantalGoed1++;
} elseif ($antwoordArgentina !== "Buenos Aires") {
    echo "Jammer, '$antwoordArgentina' is niet juist, het juiste antwoord was " . $stad[8] . PHP_EOL;
}
$antwoordEgypt = readline("Wat is de hoofdstad van " . $land[8] . "?" . PHP_EOL);
if ($antwoordEgypt === "Cairo") {
    echo "Correct!" . PHP_EOL;
    $aantalGoed1++;
} elseif ($antwoordEgypt !== "Cairo") {
    echo "Jammer, '$antwoordEgypt' is niet juist, het juiste antwoord was " . $stad[9] . PHP_EOL;
}
$antwoordUK = readline("Wat is de hoofdstad van " . $land[9] . "?" . PHP_EOL);
if ($antwoordUK === "London") {
    echo "Correct!" . PHP_EOL;
    $aantalGoed1++;
} elseif ($antwoordUK !== "London") {
    echo "Jammer, '$antwoordUK' is niet juist, het juiste antwoord was " . $stad[0] . PHP_EOL;
}
echo "Je hebt " . $aantalGoed1 . " van de " . count($stad) . " goed geraden!";
