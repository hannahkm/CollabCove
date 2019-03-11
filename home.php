<?php
    include('server.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link type = "text/css" rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
  </head>
  <body><!--find free use image-->
      <?php if  (isset($_SESSION['success'])): ?>
        <div class = "content">
          <div class="sidenav">
            <div class="tooltip">
              <a href="home.php">
                <center>
                  <img src="media/home.png" width="47" style="padding-bottom: 10px">
                </center>
              </a>
              <span class="tooltiptext">Home</span>
            </div>
            <div class="tooltip">
              <a href="profile.php">
                <center>
                  <img src="media/profile.png" width="45" height="45">
                </center>
              </a>
              <span class="tooltiptext">Profile</span>
            </div>
            <div class="tooltip">
              <a href="tasks.php">
                <center>
                  <img src="media/tasks.png" width="50" height="50">
                </center>
              </a>
              <span class="tooltiptext">Tasks</span>
            </div>
            <div class="tooltip">
              <a href="messages.php">
                <center>
                  <img src="media/messages.png" width="60" height="60">
                </center>
              </a>
              <span class="tooltiptext">Messages</span>
            </div>
            <div class="tooltip">
              <a href="calendar.php">
                <center>
                  <img src="media/calendar.png" width="40" height="40">
                </center>
              </a>
              <span class="tooltiptext">Calendar</span>
            </div>
            <div class="tooltip">
              <a href="settings.php">
                <center>
                  <img src="media/settings.png" width="50" style="margin-top: 10px">
                </center>
              </a>
              <span class="tooltiptext">Settings</span>
            </div>
            <center style="margin-top: 43vh;"></center>
            <div class="tooltip">
              <a href="index.php?logout='1'">
                <center>
                  <img src = "media/logout.png" width="40" style="bottom: 0">
                </center>
              </a>
              <span class="tooltiptext">Logout</span>
            </div>
          </div>
          <div class="heading">
            <h1>
              your cove
            </h1>
          </div>
          <br>
          <div width="100%" class="orLine"></div>
    </div>
    <br>
    <div class="main">
      <div style="font-size:72px; text-align: center">
        Hello
      </div>
    </div>
    <?php else: ?>
    <div style="font-size:20px">
      You are not logged in!
    </div>
    <meta http-equiv="refresh" content="2; URL='/index.php">
    <?php endif ?>
    <script type="text/javascript" src="js/script.js"></script>
  </body>
</html>