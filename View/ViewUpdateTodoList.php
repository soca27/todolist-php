<?php


require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BussinessLogic/UpdateTodoList.php";


function viewUpdateTodoList()
{
  echo "Update Data" . PHP_EOL;
  $pilihan = input("Pilih data ke berapa yang akan diupdate? (tekan x untuk keluar)");

  if ($pilihan == "X" || $pilihan == 'x') {
    echo $batal = "Anda Batal Mengedit" . PHP_EOL;
    return $batal;
  } else {
    updateTodo($pilihan);
    echo $berhasil = "berhasil mengubah data ke $pilihan" . PHP_EOL;
    showTodoList();
    return $berhasil;
  }
}
