<?php

require_once "../Model/TodoList.php";
require_once "../BussinessLogic/UpdateTodoList.php";
require_once "../BussinessLogic/ShowTodoList.php";
require_once "../BussinessLogic/AddTodoList.php";
require_once "../View/ViewShowTodoList.php";
require_once "../View/ViewUpdateTodoList.php";

addTodoList("soca");
addTodoList("ramdhani");
addTodoList("rian");

viewShowTodoList();
