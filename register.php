<?php
    include('server.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet' type='text/css'>
    <link type = "text/css" rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
  </head>
  <body>

    <br>
    <a href="index.php">
      <center>
        <img src="media/logo.png" height="45" alt="logo">
      </center>
    </a>
    <br>
  
    <p class="line"></p>
  
  <br>
  <br>
  <br>
  <br>
  <center>
    <form action="register.php" method="post">
      <div width=22vw>
        <input class="input_field" type="text" name="email" placeholder="Email" value="" required><br><br>
        <input class="input_field" type="text" name="name" placeholder="Full Name" value="" required><br><br>
        <input class="input_field" type="password" name="password_1" placeholder="Password" required><br><br>
        <input class="input_field" type="password" name="password_2" placeholder="Confirm Password" required><br><br>
        <!-- validation error messages -->
        <?php include('errors.php') ?>
      </div>
      <table width="27%">
        <tr>
          <td width="50%">Already have an account? <a href="index.php">Login</a></td>
          <td width="50%" valign="middle" align="right">
            <button type="submit" class="login" name="register">Register</button>
          </td>
        </tr>
      </table>
    </form>
  </center>
  <footer>
      <center><a href="about.php">about</a> | <a href="help.php">help</a> | © collabcove</center>
  </footer>
  <!--<center><div style="border-radius: 10px; -moz-border-radius: 10px; -webkit-border-radius: 10px; -khtml-border-radius: 10px; -icab-border-radius: 10px; -o-border-radius: 10px; border-top: 1px solid #cccccc; border-bottom: 5px solid #eeeeee; background: #F9F9F9; border: 2px solid #cccccc; margin-bottom: 5px; width: 20%"; align="center";>x<br>y</div></center>-->
  
</body>
</html>
<!--border-radius: 10px; -moz-border-radius: 10px; -webkit-border-radius: 10px; -khtml-border-radius: 10px; -icab-border-radius: 10px; -o-border-radius: 10px;-->
  <!--style="{{roundy|10px}} background: #F9F9F9; border: 2px solid #2b6ab8; margin-bottom: 5px;" width="50%" align="{{{align|right}}}"-->