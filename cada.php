<!DOCTYPE html>
<?php
session_start();
include "koneksi.php"
?>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    
    
    <link rel="stylesheet" href="templatelogin/css/normalize.css">

    
        <link rel="stylesheet" href="templatelogin/css/style.css">

    
    
    
  </head>

  <body>
<form method="post" action="ceklogin.php?op=in" name="login" id="login">
    <div class="login">
  <h2>Log In</h2>
  <fieldset>
    <input type="text" placeholder="username" name="username" />
  	<input type="password" placeholder="Password" name="password"/>
  </fieldset>
  <input type="submit" value="Log In" />
  <div class="utilities">
    <a href="#">Forgot Password?</a>
    <a href="#">Sign Up &rarr;</a>
  </div>
</div>
    
    
    
    
    
  </body>
</html>
