<?php

//menghapus todo di list

function removeTodoList(int $number): string
{
  global $todoList;

  if ($number > sizeof($todoList)) {
    echo $numberOutOfRange = "Nomor lebih dari Todo";
    return $numberOutOfRange;
  }

  for ($i = $number; $i < sizeof($todoList); $i++) {
    $todoList[$i] = $todoList[$i + 1];
  }

  unset($todoList[sizeof($todoList)]);
  echo $benar = "Data ke $number Telah dihapus";
  return $benar;
}
