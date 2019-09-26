<html>

<head>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    /* Style all input fields */
    .header {
      background-color: lightyellow;
    }

    input {
      width: 40%;
      padding: 12px;
      border: 2px solid #ccc;
      border-radius: 5px;
      border-color: black;
      box-sizing: border-box;
      margin-top: 3px;
      margin-bottom: 16px;
    }

    .container1 {
      background-color: #f3f3f3;
      width: 40%;
      height: 80%;
      margin: center;
      border-radius: 10px;
      border-color: black;
      box-sizing: border-box;
      margin-top: 3px;
      margin-bottom: 16px;
    }

    /* Style the submit button */
    input[type=submit] {
      background-color: rgb(27, 31, 31);
      color: rgb(253, 252, 252);
      font-size: 15px;
      border-color: white;
      width: 20%;
      border-radius: 7px;
    }

    /* Add a green text color and a checkmark when the requirements are right */
    .valid {
      color: green;
    }

    .valid:before {
      position: relative;
      left: -35px;
      content: "?";
    }

    /* Add a red text color and an "x" when the requirements are wrong */
    .invalid {
      color: red;
    }

    .invalid:before {
      position: relative;
      left: -35px;
      content: "?";
    }

    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      border: 1px solid #e7e7e7;
      background-color: lightpink;
      border-radius: 0px;
    }

    li {
      float: left;
    }

    li a {
      display: block;
      color: black;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      border-radius: 10px;
      border-block-color: black;
      font-family: Arial, Helvetica, sans-serif;
    }

    li a:hover:not(.active) {
      background-color: lightgreen;
      border-radius: 10px;
    }

    .right {
            float: right;
        }

        @media screen and (max-width: 600px) {
            .right{
                float: none;
                display: block;
            }
        }

    .content {
      margin: center;
    }

    font {
      font-family: Arial, Helvetica, sans-serif;
    }

    .container {
      background: url('bg1.jpg');
      width: 100%;
      height: 35%;
      margin: center;
      border-radius: 0px;
      border-color: black;
      box-sizing: border-box;
      margin-top: 3px;
      margin-bottom: 16px;
    }
  </style>

</head>

<body background="bgb.jpg">
  <div class="container">
    <br>
    <center><img src="logo1.png" /> <img src="text.png" /></center><br>
    <ul>
      <li><a href="live.html">Live</a></li>
      <li><a href="historymotion.php">History</a></li>
      <li><a href="mainpage.php">Back</a></li>
      <div class="right">
        <li><a href="logout.php"><img src="logout1.png" width="30dp" height="18dp" ></a> </li> </div> </ul> </div> <br>
            <div>
              <center>
                <form action="newPass.php" method="POST" class="container1">
                  <h4>
                    <b>
                      <br><br>
                      <center>
                        <font size="7">Change Password</font>
                      </center>
                      <br>
                    </b>
                  </h4>
                  <h5>
                    <center>
                      <font size="3" color="red">Password must have number and letter</font>
                    </center>
                  </h5>
                  <center>
                    <label for="password">Password</label><br>
                    <input type="password" id="password" name="password1" required><br>
                    <label for="password">New password </label><br>
                    <input type="password" id="password" name="password2" required><br>
                    <label for="password">Cornfirm password </label><br>
                    <input type="password" id="password" name="password3" required><br>
                    <input type="submit" value="Confirm">
                  </center>
                </form>
              </center>
            </div>

</body>

</html>