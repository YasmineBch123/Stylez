<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href ="login.css">
    <title>Document</title>
</head>
<body>
   
    <div id="box"></div>
    <div class="loginbx">
    <div id="text">Log in</div>

  


    </div>
    <div id="signupbx">
       <div id="text">Sign up</div>
    

    <div id="line">
    <div id="text1">Stylez</div>
    </div>

    <!--log in page -->
    <form action="action_page.php" method="post">
  <div class="imgcontainer">
  </div>

  <div class="container">
    <label for="uname"><b>Username/email</b></label>
    <input type="text" placeholder="Enter Username/email" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>


  </div>
</form>

    
</body>
</html>