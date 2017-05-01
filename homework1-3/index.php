<?php
$countries_and_animals = [
    "Africa" => ["Bitis gabonica", "Atheris ceratophora", "Syncerus", "Caffer"],
    "Europe" => ["Erinaceus europaeus", "Echinosorex gymnura", "Hemiechinus", "Auritus"],
    "Asia" => ["Acinonyx jubatus", "Felis margarita", "Leopardus", "Colocolo"]
]; 
 
foreach($countries_and_animals as $animal) { 
    foreach($animal as $list){
        if(strpos($list, " ")) {
            $two_words_animal[] = $list;            
        }
    }
}  

foreach($two_words_animal as $animal_names) { 
    $first_part = strstr($animal_names, " ", true);
    $second_part = substr($animal_names, strpos($animal_names, " ") + 1, strlen($animal_names));
    $first_part_name[] = $first_part;
    $second_part_name[] = $second_part; 
} 

shuffle($first_part_name);
shuffle($second_part_name);

for ($i = 0; $i < count($first_part_name); $i++) {
    echo $first_part_name[$i] . " " . $second_part_name[$i] . "<br>";
}
?>
