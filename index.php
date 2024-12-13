<?php 
include('conn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Awesome_from_php_mysql</title>

     <!-- css link start here -->
      <link rel="stylesheet" href="/Awesome_from_php_mysql/style.css">
</head>
<body>

     <div class="login_box">
          <form action="index.php" method="POST">

               <h2>Login</h2>
               <div class="input_box">
                    <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                    <input type="email" name="email">
                    <label> Email </label>
               </div>

               <!-- second input area -->
               <div class="input_box">
                    <span class="icon"><ion-icon name="lock-open-outline"></ion-icon></span>
                    <input type="password" name="password">
                    <label> Password </label>
               </div>

               <div class="remember_forget">
                    <label> <input type="checkbox">Remember Me</label>
                    <a href="#">Forget Password</a>
               </div>
               <button type="submit" name="submit">Login</button>

               <div class="register_link">
                    <p> Don't have an Account ? <a href="#">Register Now</a></p>
                    
               </div>

          </form>
     </div>
     




<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>