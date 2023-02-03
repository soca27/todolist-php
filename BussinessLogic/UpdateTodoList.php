<?php

// require_once __DIR__ . "/../Helper/Input.php";

// function updateTodo(int $number)
// {
//   global $todoList;
//   // for ($i = $number; $i <= sizeof($todoList); $i++) {
//   $update = input("Data ke $number Diganti dengan apa ?");
//   $todoList[$number] = $update;
//   // break;
// }


$first = 1;
$second = 3;
$n = 10;


for ($i = 1; $i < $n; $i++) {
  $third = $first + $second;
  echo ", " . $third;
  $first = $second;
  $second = $third;
}

echo $first . $second;
