<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
   <title>Registration</title>
   </head>
   <body>
       <div class="container">

       <div class="header">
       <h2>Register dropya </h2>

       </div>
       <form action="registration.php" method="post">
        <?php include('errors.php') ?>


        <div>
        <label for="username" >Username :</label>
        <input type="text"  name="username">

        </div>
        
        
        <div>
        <label for="email" >Email :</label>
        <input type="email"  name="email" required>

        </div>

        <div>
        <label for="password" >Password :</label>
        <input type="password"  name="password_1" required>

        </div>

        <div>
        <label for="password" >Confirm password :</label>
        <input type="password"  name="password_2" required>
        </div>

        <button type="Submit">Submit </button>
        <p> Already a user<a href="login.php"><b> Login </b></a></p>
        </form>

        </div>
        </body>
        </html>


    








   </body>
   </html>
