<?php


$getal = 2;

echo gettype($getal);



$klas = ["Piet van Dijk", "Rembrandt van Rijn", "Vincent van Gogh", "Floris van Dyck"];

print_r ($klas);



for ($i=0; $i < count($klas); $i++) {
    echo $klas[$i].PHP_EOL;
}


foreach ($klas as $i) {
  echo ($i).PHP_EOL;
}

$bucket_list = [];

$hoeveelheid_ativiteiten;

$activity;

$hoeveelheid_ativiteiten  = readline("hoeveel activiteiten wil je invullen?");

for ($i=0; $i < $hoeveelheid_ativiteiten; $i++) {
    $activity = readline("welke activiteit wil je invullen?");
    array_push($bucket_list,$activity);
}

print_r ($bucket_list);

foreach ($bucket_list as $list) {
  echo  $list.PHP_EOL;
}
 ?>
