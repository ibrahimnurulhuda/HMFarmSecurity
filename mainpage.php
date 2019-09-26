<?php
include('session.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="generator" content="CoffeeCup HTML Editor (www.coffeecup.com)">
  <meta name="dcterms.created" content="Tue, 06 Aug 2019 14:52:05 GMT">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <style>
    .right {
      float: right;
    }

    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      border: 1px solid #e7e7e7;
      background-color: black;
      border-radius: 0px;
    }

    li {
      float: left;
    }

    li a {
      display: block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      border-radius: 10px;
    }

    li a:hover:not(.active) {
      background-color: white;
      color: black;
      border-radius: 10px;
    }

    .logout {
      text-align: right;
    }

    .content {
      margin: center;
    }


    .container {
      background: url('bgbunga.jpg');
      background-size: auto;
      width: 100%;
      height: 30%;
      margin: center;
      border-radius: 0px;
      border-color: black;
      box-sizing: border-box;
      margin-top: 3px;
      margin-bottom: 16px;
    }

    .container1 {
      background: url('bgbunga.jpg');
      width: 100%;
      height: 100%;
      margin: center;
      border-radius: 0px;
      border-color: black;
      box-sizing: border-box;
      margin-top: 3px;
      margin-bottom: 16px;
    }

    .container2 {
      background: url('bgbunga.jpg');
      width: 100%;
      height: 100%;
      border-radius: 0px;
      border-color: black;
      box-sizing: border-box;
      margin-top: 3px;
      margin-bottom: 16px;
    }

    .container3 {
      background-color: black;
      width: 90%;
      height: 60%;
      border-radius: 0px;
      border-color: black;
      box-sizing: border-box;
      margin-top: 3px;
      margin-bottom: 16px;
    }


    .calendar {
      border-color: black;
      color: black;
      width: 100%;
      box-sizing: border-box;
    }

    /* slider */
    * {
      box-sizing: border-box
    }

    body {
      font-family: Verdana, sans-serif;
      margin: 0
    }

    .mySlides {
      display: none
    }

    img {
      vertical-align: center;
    }

    /* Slideshow container */
    .slideshow-container {
      max-width: 30%;
      position: relative;
      margin: auto;
    }

    /* Next & previous buttons */
    .prev,
    .next {
      cursor: pointer;
      position: absolute;
      top: 50%;
      width: auto;
      padding: 16px;
      margin-top: -22px;
      color: white;
      font-weight: bold;
      font-size: 18px;
      transition: 0.6s ease;
      border-radius: 0 3px 3px 0;
      user-select: none;
    }

    /* Position the "next button" to the right */
    .next {
      right: 0;
      border-radius: 3px 0 0 3px;
    }

    /* On hover, add a black background color with a little bit see-through */
    .prev:hover,
    .next:hover {
      background-color: rgba(0, 0, 0, 0.8);
    }

    /* Caption text */
    .text {
      color: white;
      font-size: 15px;
      padding: 8px 12px;
      position: absolute;
      bottom: 8px;
      width: 100%;
      text-align: center;
    }

    /* Number text (1/3 etc) */
    .numbertext {
      color: #f2f2f2;
      font-size: 12px;
      padding: 8px 12px;
      position: absolute;
      top: 0;
      float: center;
    }

    /* The dots/bullets/indicators */
    .dot {
      cursor: pointer;
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.6s ease;
    }

    .active,
    .dot:hover {
      background-color: #717171;
    }

    .table th,
    td {
      border: 1px white;
      border-collapse: collapse;
      background: url('bgbunga.jpg');

    }

    * {
      box-sizing: border-box;
    }

    body {
      font-family: Verdana, sans-serif;
    }

    .mySlides {
      display: none;
    }

    img {
      vertical-align: middle;
    }

    /* Slideshow container */
    .slideshow-container {
      max-width: 1000px;
      position: relative;
      margin: auto;
    }

    /* Caption text */
    .text {
      color: white;
      font-size: 15px;
      padding: 8px 12px;
      position: absolute;
      bottom: 8px;
      width: 100%;
      text-align: center;
    }

    /* Number text (1/3 etc) */
    .numbertext {
      color: #f2f2f2;
      font-size: 12px;
      padding: 8px 12px;
      position: absolute;
      top: 0;
    }

    /* The dots/bullets/indicators */
    .dot {
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.6s ease;
    }

    .active {
      background-color: #717171;
    }

    /* Fading animation */
    .fade {
      -webkit-animation-name: fade;
      -webkit-animation-duration: 1.5s;
      animation-name: fade;
      animation-duration: 1.5s;
    }

    @-webkit-keyframes fade {
      from {
        opacity: .4
      }

      to {
        opacity: 1
      }
    }

    @keyframes fade {
      from {
        opacity: .4
      }

      to {
        opacity: 1
      }
    }

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {
      .text {
        font-size: 11px
      }
    }
  </style>
</head>


<body background="bgbunga.jpg" onload="startTime()">

  <div class="container">
    <center><img src="logo1.png" /><img src="text.png" /></center>
    <br>

    <ul>
      <li><a href="live.html">Live</a></li>
      <li><a href="historymotion.php">History</a></li>
      <li><a href="changePass.php">Change Password</a></li>
      <div class="right">
        <li><a href="logout.php"><img src="logout1.png" width="30dp" height="18dp"></a></li>
      </div>
    </ul>

    <table style="width:100%" align="left">
      <center>
        <tr>
          <td width="10%">
            <div class="container2">

              <center><canvas id="canvas" width="200%" height="200%">
                </canvas></center>

              <script>
                var canvas = document.getElementById("canvas");
                var ctx = canvas.getContext("2d");
                var radius = canvas.height / 2;
                ctx.translate(radius, radius);
                radius = radius * 0.90
                setInterval(drawClock, 1000);

                function drawClock() {
                  drawFace(ctx, radius);
                  drawNumbers(ctx, radius);
                  drawTime(ctx, radius);
                }

                function drawFace(ctx, radius) {
                  var grad;
                  ctx.beginPath();
                  ctx.arc(0, 0, radius, 0, 2 * Math.PI);
                  ctx.fillStyle = 'white';
                  ctx.fill();
                  grad = ctx.createRadialGradient(0, 0, radius * 0.95, 0, 0, radius * 1.05);
                  grad.addColorStop(0, '#333');
                  grad.addColorStop(0.5, 'white');
                  grad.addColorStop(1, '#333');
                  ctx.strokeStyle = grad;
                  ctx.lineWidth = radius * 0.1;
                  ctx.stroke();
                  ctx.beginPath();
                  ctx.arc(0, 0, radius * 0.1, 0, 2 * Math.PI);
                  ctx.fillStyle = '#333';
                  ctx.fill();
                }

                function drawNumbers(ctx, radius) {
                  var ang;
                  var num;
                  ctx.font = radius * 0.15 + "px arial";
                  ctx.textBaseline = "middle";
                  ctx.textAlign = "center";
                  for (num = 1; num < 13; num++) {
                    ang = num * Math.PI / 6;
                    ctx.rotate(ang);
                    ctx.translate(0, -radius * 0.85);
                    ctx.rotate(-ang);
                    ctx.fillText(num.toString(), 0, 0);
                    ctx.rotate(ang);
                    ctx.translate(0, radius * 0.85);
                    ctx.rotate(-ang);
                  }
                }

                function drawTime(ctx, radius) {
                  var now = new Date();
                  var hour = now.getHours();
                  var minute = now.getMinutes();
                  var second = now.getSeconds();
                  //hour
                  hour = hour % 12;
                  hour = (hour * Math.PI / 6) +
                    (minute * Math.PI / (6 * 60)) +
                    (second * Math.PI / (360 * 60));
                  drawHand(ctx, hour, radius * 0.5, radius * 0.07);
                  //minute
                  minute = (minute * Math.PI / 30) + (second * Math.PI / (30 * 60));
                  drawHand(ctx, minute, radius * 0.8, radius * 0.07);
                  // second
                  second = (second * Math.PI / 30);
                  drawHand(ctx, second, radius * 0.9, radius * 0.02);
                }

                function drawHand(ctx, pos, length, width) {
                  ctx.beginPath();
                  ctx.lineWidth = width;
                  ctx.lineCap = "round";
                  ctx.moveTo(0, 0);
                  ctx.rotate(pos);
                  ctx.lineTo(0, -length);
                  ctx.stroke();
                  ctx.rotate(-pos);
                }
              </script>

              <center>
                <div class="container3">
                  <div class="calendar">
                    <br>
                    <center>
                      <script language="javascript" type="text/javascript">
                        var day_of_week = new Array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
                        var month_of_year = new Array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');

                        //  DECLARE AND INITIALIZE VARIABLES
                        var Calendar = new Date();

                        var year = Calendar.getFullYear(); // Returns year
                        var month = Calendar.getMonth(); // Returns month (0-11)
                        var today = Calendar.getDate(); // Returns day (1-31)
                        var weekday = Calendar.getDay(); // Returns day (1-31)

                        var DAYS_OF_WEEK = 7; // "constant" for number of days in a week
                        var DAYS_OF_MONTH = 31; // "constant" for number of days in a month
                        var cal; // Used for printing

                        Calendar.setDate(1); // Start the calendar day at '1'
                        Calendar.setMonth(month); // Start the calendar month at now


                        /* VARIABLES FOR FORMATTING
                        NOTE: You can format the 'BORDER', 'BGCOLOR', 'CELLPADDING', 'BORDERCOLOR'
                              tags to customize your caledanr's look. */

                        var TR_start = '<TR>';
                        var TR_end = '</TR>';
                        var highlight_start = '<TD WIDTH="30"><TABLE CELLSPACING=0 BORDER=1 BGCOLOR=DEDEFF BORDERCOLOR=CCCCCC><TR><TD WIDTH=20><B><CENTER>';
                        var highlight_end = '</CENTER></TD></TR></TABLE></B>';
                        var TD_start = '<TD WIDTH="30"><CENTER>';
                        var TD_end = '</CENTER></TD>';

                        /* BEGIN CODE FOR CALENDAR
                        NOTE: You can format the 'BORDER', 'BGCOLOR', 'CELLPADDING', 'BORDERCOLOR'
                        tags to customize your calendar's look.*/

                        cal = '<TABLE BORDER=1 CELLSPACING=0 CELLPADDING=0 BORDERCOLOR=BBBBBB><TR><TD>';
                        cal += '<TABLE BORDER=0 CELLSPACING=0 CELLPADDING=2>' + TR_start;
                        cal += '<TD COLSPAN="' + DAYS_OF_WEEK + '" BGCOLOR="#EFEFEF"><CENTER><B>';
                        cal += month_of_year[month] + '   ' + year + '</B>' + TD_end + TR_end;
                        cal += TR_start;

                        //   DO NOT EDIT BELOW THIS POINT  //

                        // LOOPS FOR EACH DAY OF WEEK
                        for (index = 0; index < DAYS_OF_WEEK; index++) {

                          // BOLD TODAY'S DAY OF WEEK
                          if (weekday == index)
                            cal += TD_start + '<B>' + day_of_week[index] + '</B>' + TD_end;

                          // PRINTS DAY
                          else
                            cal += TD_start + day_of_week[index] + TD_end;
                        }

                        cal += TD_end + TR_end;
                        cal += TR_start;

                        // FILL IN BLANK GAPS UNTIL TODAY'S DAY
                        for (index = 0; index < Calendar.getDay(); index++)
                          cal += TD_start + '  ' + TD_end;

                        // LOOPS FOR EACH DAY IN CALENDAR
                        for (index = 0; index < DAYS_OF_MONTH; index++) {
                          if (Calendar.getDate() > index) {
                            // RETURNS THE NEXT DAY TO PRINT
                            week_day = Calendar.getDay();

                            // START NEW ROW FOR FIRST DAY OF WEEK
                            if (week_day == 0)
                              cal += TR_start;

                            if (week_day != DAYS_OF_WEEK) {

                              // SET VARIABLE INSIDE LOOP FOR INCREMENTING PURPOSES
                              var day = Calendar.getDate();

                              // HIGHLIGHT TODAY'S DATE
                              if (today == Calendar.getDate())
                                cal += highlight_start + day + highlight_end + TD_end;

                              // PRINTS DAY
                              else
                                cal += TD_start + day + TD_end;
                            }

                            // END ROW FOR LAST DAY OF WEEK
                            if (week_day == DAYS_OF_WEEK)
                              cal += TR_end;
                          }

                          // INCREMENTS UNTIL END OF THE MONTH
                          Calendar.setDate(Calendar.getDate() + 1);

                        } // end for loop

                        cal += '</TD></TR></TABLE></TABLE>';

                        //  PRINT CALENDAR
                        document.write(cal);

                        //  End -->
                      </script>
                    </center>
                  </div>
                  <br>
                </div>
              </center>
            </div>
          </td>

          <td width="50%">

            <div class="slideshow-container">

              <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="1.jpg" style="width:600px; height:400px">
              </div>

              <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="2.jpg" style="width:600px; height:400px">
              </div>

              <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="3.jpg" style="width:600px; height:400px">
              </div>

            </div>
            <br>

            <center>
              <script>
                var slideIndex = 0;
                showSlides();

                function showSlides() {
                  var i;
                  var slides = document.getElementsByClassName("mySlides");
                  var dots = document.getElementsByClassName("dot");
                  for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                  }
                  slideIndex++;
                  if (slideIndex > slides.length) {
                    slideIndex = 1
                  }
                  for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                  }
                  slides[slideIndex - 1].style.display = "block";
                  dots[slideIndex - 1].className += " active";
                  setTimeout(showSlides, 3000); // Change image every 3 seconds
                }
              </script>
            </center>
          </td>
        </tr>
      </center>
    </table>
  </div>

  <br>

</body>

</html>