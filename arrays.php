<?php

$planets = ["Mercury","Venus","Earth","Mars","Jupiter","Saturn","Uranus","Neptune","","",NULL];

function filterFunction($array , $value){


    $filtered = array_filter($array);
    $randArray = array_rand($filtered, $value);
    $result = array_map(function ($item) use ($filtered){
        return $filtered[$item];

    }, $randArray);
    return $result;
}

echo "<pre>";
print_r(filterFunction($planets,2));
print_r(filterFunction($planets,3));
print_r(filterFunction($planets,2));
print_r(filterFunction($planets,4));
print_r(filterFunction($planets,5));

?>