<?php

require_once "../Model/TodoList.php";
require_once "../BussinessLogic/ShowTodoList.php";
require_once "../BussinessLogic/AddTodoList.php";
require_once "../BussinessLogic/RemoveTodoList.php";

echo "Add Todo List";
addTodoList("Soca");
addTodoList("Ramdhani");
addTodoList("Eko");
showTodoList();

echo "removed Todo List ";
removeTodoList(3);

// echo "after removed";
showTodoList();
