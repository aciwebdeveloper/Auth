<?php
require_once(dirname(__DIR__) . "/Auth/include/header.php");


if (isset($_SESSION["user_id"]) && !empty($_SESSION["user_id"]) ) {




 # code...

?>

<h1> Welcome TO Dashboard <?php echo $_SESSION["user_id"]; ?> </h1>
<?php


require_once(dirname(__DIR__) . "/Auth/include/footer.php");


}

else{
header("Location:".login);

}
?>