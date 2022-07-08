<?php



include('con_db.php');
		include('function.php');
  include('header.php');

   ?>

<form class="form-login" action="index.php" method="POST">
  <h1 class="login-h1"> Lou Geh Supermarket </h1>
    
  <div class="container-login">
    <input type="text" placeholder="Enter Username" name="uname" required>
    
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button class = "button-login" type="submit">Log in</button>
    <label>
  </div>

  <!--<div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div> -->
</form>