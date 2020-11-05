<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssf/all.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;1,100&display=swap" rel="stylesheet">
    <title>My content</title>
</head>
<body>
 <div class="mycontainer">
    <h1 class="tittle"> Sign Up</h1>
    <hr class="border">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" class="form" name="login">
      <div class="form-group">
          <i class="icon left fa fa-user"></i>
          <input type="text" name="user" class="user" placeholder="User:">
  </div>


  <div class="form-group">
          <i class="icon left fa fa-lock"></i>
          <input type="text" name="password" class="password" placeholder="Password:">
          <i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>


  </div>
</form>
     <p class="text-signup">
         do you haven't an account
         <a href="signup.php"> Sign UP</a>

      </p>

  </div>
  </body>
</html>
