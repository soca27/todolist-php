<?php

require_once "../Model/TodoList.php";
require_once "../BussinessLogic/UpdateTodoList.php";
require_once "../BussinessLogic/ShowTodoList.php";
require_once "../BussinessLogic/AddTodoList.php";
require_once "../Helper/Input.php";


addTodoList("Soca");
addTodoList("Ramdhani");
addTodoList("Rian");

showTodoList();

updateTodo(1);

showTodoList();

updateTodo(3);

showTodoList();

updateTodo(2);

showTodoList();
