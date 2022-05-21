<?php
    session_start();
    if(isset($_SESSION['name']))
    {   
    header('location:dashboad.php');
  exit;
}
    
    ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="login.css">
    <title>PHP login system!</title>
  </head>
  <body>
<div class="container">
    <form action="login_script.php" method="post" class="login-email">
      <p class="err"><?php if(isset($_GET['succes'])){ echo $_GET['succes'];}?></p>
        <p class="login-text" style="font-size: 2rem; font-weight:800;">Login</p>
        <div class="input-group">
        <p class="err"><?php if(isset($_GET['userr'])){ echo $_GET['userr'];}?></p>
            <input type="text" name="username" placeholder="Email" required>
        </div>
        <div class="input-group">
        <p class="err"><?php if(isset($_GET['pass'])){ echo $_GET['pass'];}?>
            <input type="password" name="password" placeholder="Password" required>
        </div>
        <div class="input-group">
            <button class="btn">Login</button>
        </div>
        <p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
    </form>
</div>


    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>