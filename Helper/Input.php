<?php


function input(string $inputed): string
{
  echo "$inputed :";
  $input = fopen("php://stdin", "r");
  $result = trim(fgets($input));
  return $result;
}
