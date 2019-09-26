<?php
  include('session.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="generator" content="CoffeeCup HTML Editor (www.coffeecup.com)">
  <meta name="dcterms.created" content="Tue, 06 Aug 2019 15:48:58 GMT">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <title></title>
  <!DOCTYPE html>
  <html>

  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
      .center {
        text-align: center;
      }

      /* Style all input fields */
      input {
        width: 50%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
      }

      /* Style the submit button */
      input[type=submit] {
        background-color: rgb(27, 31, 31);
        color: rgb(253, 252, 252);
        font-size: 20px;
        width: 50%;
      }

      /* Style the container for inputs */
      .container {
        background-color: #f6fa07;
        padding: 20px;
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
    </style>
  </head>

<body background="bgb.jpg">

  <div class="center">
    <img style="margin: auto" src="logo.png" width="600dp" height="400dp">
    <h4><b>
        <font size="10">LOGIN</font>
      </b></h4>
  </div>

  <div class="container">
    <form action="index.php" method="POST">
      <label for="username">Username</label>
      <input type="text" id="username" name="username" required>

      <label for="password">Password</label>
      <input type="password" id="password" name="password" required>

      <input type="submit" value="Submit">
    </form>
  </div>
  </div>
</body>

</html>