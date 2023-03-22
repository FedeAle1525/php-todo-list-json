<?php

// Array Associativo Multidimensionale
$tasks = [
  [
    "text" => "Prepararsi per la lezione",
    "done" => true
  ],

  [
    "text" => "Andare in Banca",
    "done" => true
  ],

  [
    "text" => "Fare la spesa",
    "done" => true
  ],

  [
    "text" => "Fare esercizione pomeridiano",
    "done" => false
  ],

  [
    "text" => "Preparare la cena",
    "done" => false
  ]
];

// Modifico un campo dell'Header di Risposta del Server, specificando il linguaggio utilizzato
header("Content-Type: application/json");

// Sto inviando Risposta del Server in linguaggio JSON, trasformando l'Array PHP in una Stringa JSON
echo json_encode($tasks);
