<?php

require_once "../BussinessLogic/ShowTodoList.php";
require_once "../View/ViewRemoveTodoList.php";
require_once "../BussinessLogic/AddTodoList.php";
require_once "../View/ViewShowTodoList.php";

addTodoList("soca");
addTodoList("ramdhani");
addTodoList("rian");

showTodoList();

viewShowTodoList();


showTodoList();
