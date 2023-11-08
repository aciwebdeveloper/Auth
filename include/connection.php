<?php 

define("SERVER","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DB","auth");

$link=new mysqli(SERVER,USERNAME,PASSWORD,DB);

if ($link) {
// echo "established";
}


?>