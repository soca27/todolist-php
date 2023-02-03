<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ .  "/../Helper/Input.php";
require_once __DIR__ . "/../BussinessLogic/ShowTodoList.php";
require_once __DIR__ . "/../BussinessLogic/RemoveTodoList.php";
require_once __DIR__ . "/../BussinessLogic/AddTodoList.php";
require_once __DIR__ . "/../BussinessLogic/UpdateTodoList.php";


function viewShowTodoList()
{
  showTodoList();
  while (true) {
    echo "MENU TODOLIST" . PHP_EOL;
    echo "1. TAMBAH TODO" . PHP_EOL;
    echo "2. UPDATE TODO" . PHP_EOL;
    echo "3. HAPUS TODO" . PHP_EOL;
    echo "X UNTUK KELUAR" . PHP_EOL;

    $pilihan = input("Pilihan");

    if ($pilihan == "1") {
      viewAddTodoList();
    } else if ($pilihan == "2") {
      viewUpdateTodoList();
    } else if ($pilihan == "3") {
      viewRemoveTodoList();
    } else if ($pilihan == "X" || $pilihan == "x") {
      break;
    } else {
      echo "Pilihan Tidak Dimengerti" . PHP_EOL;
    }
  }
  showTodoList();
  echo "Sampai Jumpa Lagi" . PHP_EOL;
}
