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

// Reucpero il nuovo Task inviato al Server dal metodo "post"
$new_task = isset($_POST['newText']) ? $_POST['newText'] : null;

if ($new_task !== null) {

  $new_task_comp = [
    "text" => $new_task,
    "done" => false
  ];

  $todo_list[] = $new_task_comp;

  // Creo una nuova Stringa di dati (decodificando da PHP a JSON), aggiornata con l'inserimento del nuovo Task
  $new_list_string = json_encode($todo_list);

  // Aggiorno il file.json (sovrascrive), inserendo la nuova Stringa di dati (JSON)
  file_put_contents('./todolist.json', $new_list_string);
}

// Modifico un campo dell'Header di Risposta del Server, specificando il linguaggio utilizzato
header("Content-Type: application/json");

// Sto inviando Risposta del Server in linguaggio JSON, trasformando l'Array PHP in una Stringa JSON
echo json_encode($todo_list);
