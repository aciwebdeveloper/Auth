<?php
require_once(dirname(__FILE__) ."/include/header.php");

session_destroy();

// header("Location:".login);
?>

<div class="alert alert-success" role="alert">
  Logut SUCCESSFULL
</div>


<?php

header("Refresh:2,url=./".login);
require_once(dirname(__FILE__) ."/include/footer.php");
?>