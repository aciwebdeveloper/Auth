<?php
require_once(dirname(__FILE__) ."/include/header.php");
?>

<form class="text-bg-dark p-5" method="POST" action="./action/form_php.php">
  <div class="mb-3">
    <label for="user_name" class="form-label">Enter Your username</label>
    <input type="text" name="user_name" class="form-control" id="user_name" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="password">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <input type="submit" name="signup" class="btn btn-primary">
</form>



<?php
require_once(dirname(__FILE__) ."/include/footer.php");
?>