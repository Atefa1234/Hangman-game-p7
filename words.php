<?php


$word = [
    "pepino",
    "tomate",
    "cebolla",
    "guitarra",
    "zapato",
    "camello",
    "platano",
    "camiseta",
    "ordenador",
    "apio",
];
//Crea un arrray de 2 palabras de $word de forma alteatoria 
    $random_words = array_rand($word, 2);
//Escoje 1 palabra de $random_word
    $chosen_word =  $word[$random_words[0]];
//Separa en caracteres la palabra escogidas
    $characters = str_split($chosen_word);
   // print_r($characters);

//
$espacios = array_fill(0, count($characters), '_');
  /*   print_r(implode(' ', $espacios));
    print_r($espacios); */

?>