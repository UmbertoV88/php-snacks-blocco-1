<?php

$array_numbers = [];

// ciclo for
for ($i = 0; count($array_numbers) < 15; $i++) {
    $number = rand(1,100);
    if(!in_array($number, $array_numbers)){
        array_push($array_numbers, $number);
    }
}

//ciclo while
// $i = 0;
// while (count($array_numbers) < 15) {
//     $number = rand(1,15);
//     if (!in_array($number, $array_numbers)) {
//         array_push($array_numbers, $number);
//     }
//     $i++;
// }


// ciclo do while
// $i = 0;
// do {
//     $number = rand(1,15);
//     if (!in_array($number, $array_numbers)) {
//         array_push($array_numbers, $number);
//     }
//     $i++;
// } while (count($array_numbers) < 15);

echo "<pre>";
var_dump($array_numbers);
echo "</pre>";

?>
