<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BussinessLogic/RemoveTodoList.php";
require_once __DIR__ . "/../BussinessLogic/ShowTodoList.php";
require_once __DIR__ . "/../Helper/Input.php";

function viewRemoveTodoList()
{
  $pilihan = input("Todo yang akan dihapus ?") . PHP_EOL;
  removeTodoList($pilihan);
  showTodoList();
}
