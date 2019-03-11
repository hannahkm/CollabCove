<?php include('server.php');?>
<!DOCTYPE html>
<html>
  <head>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link type = "text/css" rel="stylesheet" href="style.css">
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
      <div class="sidenav1" style="color:#052A4C;border-right:1px solid #A2C4C9">
        <table width="100%" style="padding-left:10px;padding-right:10px; font-size:18px">
          <tr>
            <td style="text-align:left">
              messages
            </td>
            <td style="text-align:right">
              <button type="button" onclick="messagesArrow()" style="border:0px; background-color:transparent; cursor: pointer"><img id="messagesArrow" src = "media/downarrow.png" width="15" height="15"></button>
            </td>
          </tr>
        </table>
        <div style="border-bottom:2px solid #A2C4C9"></div>
          <table id="recents" width="100%" style="padding-left:10px;padding-right:10px;display:table">
            <tr>
              <td style="text-align:left">
                <p style="font-size:14px">
                  recents
                </p>
              </td>
              <td style="text-align:right">
                <button id="recentsArrow" type="button" onclick="recentsArrow()" style="cursor: pointer; border:0px; background-color:transparent; font-size:18px; color:#45818E">⯇</button>
              </td>
            </tr>
          </table>
        <div id="divR" style="border-bottom:1px solid #A2C4C9"></div>
        <table id="recents1" width="100%" style="padding-left:10px;padding-right:10px;background:white;display:none">
          <tr>
            <td width="5%">
              <img src = "media/cove.jpg" style="width: 25px; height: 25px; display: inline-block; border-radius:50%" align = center>
            </td>
            <td style="text-align:left">
              <p style="font-size:14px">
                &nbsp;&nbsp;&nbsp;person
              </p>
            </td>
          </tr>
        </table>
        <div id="divR1" style="border-bottom:1px solid #A2C4C9;display:none"></div>
        <table id="threads" width="100%" style="padding-left:10px;padding-right:10px">
          <tr>
            <td style="text-align:left">
              <p style="font-size:14px">
                threads
              </p>
            </td>
            <td style="text-align:right">
              <button id="threadsArrow" type="button" onclick="threadsArrow()" style="cursor: pointer; border:0px; background-color:transparent; font-size:18px; color:#45818E">⯇</button>
            </td>
          </tr>
        </table>
        <div id="divT" style="border-bottom:1px solid #A2C4C9"></div>
        <table id="threads1" width="100%" style="padding-left:10px;padding-right:10px;background:white;display:none">
          <tr>
            <td style="text-align:left">
              <p style="font-size:14px">
                &nbsp;&nbsp;&nbsp;person
              </p>
            </td>
          </tr>
        </table>
        <div id="divT1" style="border-bottom:1px solid #A2C4C9;display:none"></div>
        <table id="people" width="100%" style="padding-left:10px;padding-right:10px">
          <tr>
            <td style="text-align:left">
              <p style="font-size:14px">
                people
              </p>
            </td>
            <td style="text-align:right">
              <button id="peopleArrow" type="button" onclick="peopleArrow()" style="cursor: pointer; border:0px; background-color:transparent; font-size:18px; color:#45818E">⯇</button>
            </td>
          </tr>
        </table>
        <div id="divP" style="border-bottom:1px solid #A2C4C9"></div>
        <table id="people1" width="100%" style="padding-left:10px;padding-right:10px;background:white;display:none">
          <tr>
            <td width="5%">
              <img src = "media/cove.jpg" style="width: 25px; height: 25px; display: inline-block; border-radius:50%" align = center>
            </td>
            <td style="text-align:left">
              <p style="font-size:14px">
                &nbsp;&nbsp;&nbsp;person
              </p>
            </td>
          </tr>
        </table>
        <div id="divP1" style="border-bottom:1px solid #A2C4C9;display:none"></div>
      </div>
      <div class="main1" style="font-size:18px">
        <table width="100%">
          <tr>
            <td width="5%">
              <img src = "media/cove.jpg" class="profilepic1" align = center>
            </td>
            <td width="10%" style="color:black">
              person
            </td>
            <td style="font-size:14px">
              last active: 1 hour ago
            </td>
          </tr>
        </table>
      </div>
      <br>
      <div class="orLine" width="100%" style="border-bottom:1px solid #cccccc"></div>
      <div class="main1">
        <div style="position:fixed;bottom:0px;background-color:#F3F3F3;color:#666666;margin-left:-29px;width:100%">
          <div style="border-bottom:1px solid #A2C4C9"></div>
          <table>
            <tr style="width:100%">
              <td>
                <p style="margin-left:10px">
                  text
                </p>
              </td>
              <td style="align:right; border:1px solid red; margin-right:1px;">
                image
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <?php else: ?>
    <div style="font-size:20px">
      You are not logged in!
    </div>
    <meta http-equiv="refresh" content="2; URL='/index.php">
    <?php endif ?>
    <script type="text/javascript" src="script.js">
    </script>
    <script>
      function messagesArrow() {
        if (document.getElementById("recents").style.display == "table") {
          document.getElementById("recents").style.display = "none";
          document.getElementById("threads").style.display = "none";
          document.getElementById("people").style.display = "none";
          document.getElementById("threads1").style.display = "none";
          document.getElementById("recents1").style.display = "none";
          document.getElementById("people1").style.display = "none";
          document.getElementById("divR").style.display = "none";
          document.getElementById("divT").style.display = "none";
          document.getElementById("divP").style.display = "none";
          document.getElementById("divR1").style.display = "none";
          document.getElementById("divT1").style.display = "none";
          document.getElementById("divP1").style.display = "none";
          document.getElementById("messagesArrow").src= "media/leftarrow.png";
          document.getElementById("recentsArrow").innerHTML="⯇";
          document.getElementById("threadsArrow").innerHTML="⯇";
          document.getElementById("peopleArrow").innerHTML="⯇";
        } else {
          document.getElementById("recents").style.display = "table";
          document.getElementById("threads").style.display = "table";
          document.getElementById("people").style.display = "table";
          //document.getElementById("recents1").style.display = "table";
          //document.getElementById("threads1").style.display = "table";
          //document.getElementById("people1").style.display = "table";
          document.getElementById("divR").style.display = "block";
          document.getElementById("divT").style.display = "block";
          document.getElementById("divP").style.display = "block";
          //document.getElementById("divR1").style.display = "block";
          //document.getElementById("divT1").style.display = "block";
          //document.getElementById("divP1").style.display = "block";
          document.getElementById("messagesArrow").src= "media/downarrow.png";
          //document.getElementById("recentsArrow").innerHTML="⯆";
          //document.getElementById("threadsArrow").innerHTML="⯆";
          //document.getElementById("peopleArrow").innerHTML="⯆";
        }
      }
      function recentsArrow() {
        if (document.getElementById("recents1").style.display == "table") {
          document.getElementById("recents1").style.display = "none";
          document.getElementById("divR1").style.display = "none";
          document.getElementById("recentsArrow").innerHTML="⯇";
        } else {
          document.getElementById("recents1").style.display = "table";
          document.getElementById("divR1").style.display = "block";
          document.getElementById("recentsArrow").innerHTML="⯆";
        }
      }
      function threadsArrow() {
        if (document.getElementById("threads1").style.display == "table") {
          document.getElementById("threads1").style.display = "none";
          document.getElementById("divT1").style.display = "none";
          document.getElementById("threadsArrow").innerHTML="⯇";
        } else {
          document.getElementById("threads1").style.display = "table";
          document.getElementById("divT1").style.display = "block";
          document.getElementById("threadsArrow").innerHTML="⯆";
        }
      }
      function peopleArrow() {
        if (document.getElementById("people1").style.display == "table") {
          document.getElementById("people1").style.display = "none";
          document.getElementById("divP1").style.display = "none";
          document.getElementById("peopleArrow").innerHTML="⯇";
        } else {
          document.getElementById("people1").style.display = "table";
          document.getElementById("divP1").style.display = "block";
          document.getElementById("peopleArrow").innerHTML="⯆";
        }
      }
    </script>
  </body>
</html>