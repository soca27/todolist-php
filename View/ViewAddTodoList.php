<?php

require_once  __DIR__ . "/../Model/TodoList.php";
require_once  __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BussinessLogic/AddTodoList.php";

function viewAddTodoList()
{
  echo "MENAMBAH TODO" . PHP_EOL;
  $todo = input("What To Do ? || Press X untuk keluar ");

  if ($todo == "X" || $todo == "x") {
    echo $batal = "Anda Keluar";
    return $batal;
  } else {
    echo $berhasil = "Berhasil Menambah Data $todo" . PHP_EOL;
    addTodoList($todo);
    showTodoList();
    return $berhasil;
  }
}
