<?php

 define("RootPATH",dirname(__DIR__)."/Auth");
function Check($input)
{
 if (isset($input) && !empty($input)) {
  return true;
 } else {
  return false;
 }
}

function filterData($data)
{
 global $link;
 $data = $link->real_escape_string($data);
 $data = trim($data);
 $data = stripslashes($data);
 return $data;
}

function pre($a)
{
 if (is_array($a)) {

  echo "<pre>";
  print_r($a);
  echo "</pre>";

 } else {
  echo $a;
 }

}


?>