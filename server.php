<?php

// Array Associativo Multidimensionale
// $tasks = [
//   [
//     "text" => "Prepararsi per la lezione",
//     "done" => true
//   ],

//   [
//     "text" => "Andare in Banca",
//     "done" => true
//   ],

//   [
//     "text" => "Fare la spesa",
//     "done" => true
//   ],

//   [
//     "text" => "Fare esercizione pomeridiano",
//     "done" => false
//   ],

//   [
//     "text" => "Preparare la cena",
//     "done" => false
//   ]
// ];

// Trasformo contenuto in file.json in una Stringa
$list_string = file_get_contents('./todolist.json');

// Decodifico la Stringa da codice JSON a PHP
$todo_list = json_decode($list_string, true);

// Modifico un campo dell'Header di Risposta del Server, specificando il linguaggio utilizzato
header("Content-Type: application/json");

// Sto inviando Risposta del Server in linguaggio JSON, trasformando l'Array PHP in una Stringa JSON
echo json_encode($todo_list);
