<?php
include("config.php");
session_start();
$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 

    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    $sql = "SELECT * FROM login WHERE username = '$username' and password = '$password'";
    $result = mysqli_query($db, $sql);
    echo mysqli_error($db);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    #$active = $row['active'];

    $count = mysqli_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row

    if ($count == 1) {
        # session_register("username");
        $_SESSION['login_user'] = $username;
        #print_r($_SESSION); exit;
        header("location:mainpage.php");
    } else {
        ?>
        <script>
            alert("Your Login Name or Password is invalid");
            window.location = 'index.php';
        </script>
<?php
    }
}
?>

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

        .container {
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
    </style>


</head>

<body background="bgb.jpg">

    <br><br><br>
    <center>
        <form action="" method="POST" class="container">
            <h4>
                <b>
                    <br><br>
                    <center><img style="margin: auto" src="login.png" width="20%" height="20%"></center><br><br>

                    <center>
                        <font size="6">LOGIN</font>
                    </center>
                </b>
            </h4>
            <center>
                <label for="username">Username</label><br>
                <input type="text" id="username" name="username" required><br>

                <label for="password">Password </label><br>
                <input type="password" id="password" name="password" required><br>
                <input type="submit" value="Submit">
            </center>
        </form>
    </center>

</body>

</html>