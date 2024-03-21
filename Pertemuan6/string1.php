<?php

$loremIpsum =
    "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse condimentum ex lectus, 
vel commodo ligula efficitur quis. Nulla mollis tellus ac mi vestibulum, at ornare felis fringilla. Nulla ullamcorper malesuada leo non molestie. 
Quisque lobortis aliquam est in laoreet. Aenean purus odio, aliquet sit amet fringilla non, bibendum nec ligula. Donec odio nulla, volutpat ut auctor et, 
venenatis in nisi. Aliquam lobortis maximus scelerisque. Donec semper tincidunt metus. Sed volutpat tristique elit, id fermentum sapien aliquet nec. 
Curabitur ac neque et arcu efficitur condimentum. Aenean mattis ullamcorper malesuada. Fusce at nulla bibendum, lacinia sem eget, iaculis erat. 
Curabitur convallis elit suscipit ornare faucibus. Quisque eget placerat elit. Vestibulum dictum tempus sollicitudin.";

echo "<p>{$loremIpsum}</p>";
echo "Panjang Karakter : ". strlen($loremIpsum). "<br>";
echo "Panjang Kata : ". str_word_count($loremIpsum). "<br>";
echo "<p>" . strtoupper($loremIpsum)."<p>";
echo "<p>" . strtolower($loremIpsum)."<p>";

