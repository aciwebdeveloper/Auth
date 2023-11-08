<?php
require_once(dirname(__DIR__) . "/include/header.php");
?>

<?php

if (isset($_POST["login"]) && !empty($_POST["login"])) {

 $email = filterData($_POST["email"]);
 $password = filterData($_POST["password"]); //1234

 $encryptPass = base64_encode($password);

 $hash_pass = hash("sha256", $password);

 $combineHashing= $hash_pass . "/" . $encryptPass;


 $check_user_q = "SELECT * FROM `users` 
WHERE `email`='{$email}' AND `password`='{$combineHashing}' ";

 $check_user_exe = $link->query($check_user_q);

 if ($check_user_exe) {

  if ($check_user_exe->num_rows > 0) {

   $fetch = $check_user_exe->fetch_assoc(); // associative array jonsa user login hua hai
   // save user id in session
   $_SESSION["user_id"] = $fetch["user_id"];

   echo "<div class='alert alert-success' role='alert'>
LOGIN SuccessFUll
</div>";

   header("Refresh:2,url=../" . Dashboard);

  } else {
   echo "<div class='alert alert-danger' role='alert'>
   You'r not a registered in our portal
 </div>";
   header("Refresh:2,url=../" . HOME);
  }


 }

}




if (isset($_POST["signup"]) && !empty($_POST["signup"])) {

 $email = filterData($_POST["email"]);
 $user_name = filterData($_POST["user_name"]);
 $password = filterData($_POST["password"]);
 /* 
 hash('algorithm', password)
 encrypting 
 base64
 */
 $encryptPass = base64_encode($password);

 $hash_pass = hash("sha256", $password) . "/" . $encryptPass;


 // echo $hash_pass;
 $check_user_q = "INSERT INTO `users` (`user_name`,`email`,`password`,`bActive`)
 VALUES ('{$user_name}','{$email}','{$hash_pass}','{$encryptPass}')
 ";

 $check_user_exe = $link->query($check_user_q);
 if ($check_user_exe) {

  // var abc= "jdksajdsa"+dsakjl+"dsadsa";
  echo "<div class='alert alert-success' role='alert'>
   Register SuccessFull
</div>";
// 03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4/MTIzNA==

$_SESSION["user_id"]=$link->insert_id;

header("Refresh:2,url=../" . Dashboard);

 }
}
?>


<?php
require_once(dirname(__DIR__) . "/include/footer.php");
?>