<?php
$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];
function gezegenler($arr,$val){


  $filtrele = array_filter($arr);

  $randomArr = array_rand($filtrele,$val);

  $getir = array_map(function($e) use ($filtrele) {
    return $filtrele[$e];
  },$randomArr);
  echo "<pre>";
return $getir;
}

print_r(gezegenler($planets,2));
print_r(gezegenler($planets,3));
print_r(gezegenler($planets,4));
print_r(gezegenler($planets,5));
