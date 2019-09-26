<?php
require('config.php');
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

</head>
<style>
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        border: 1px solid #e7e7e7;
        background-color: lightpink;
        border-radius: 0px;
        height: 10%;
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
        font-family: Arial, Helvetica, sans-serif;
    }

    font {
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
        .right {
            float: none;
            display: block;
        }
    }

    .content {
        margin: center;
    }

    .container {
        background: url('bg1.jpg');
        width: 100%;
        height: 50%;
        margin: center;
        border-radius: 0px;
        border-color: black;
        box-sizing: border-box;
        margin-top: 3px;
        margin-bottom: 16px;
    }

    .table th,
    td {
        border: 2px solid white;
        border-collapse: collapse;
        background: #f3f3f3;
    }

    .content {
        margin: center;
    }

    /*command picture*/
    #myImg {
        border-radius: 5px;
        cursor: pointer;
        transition: 0.3s;
    }

    #myImg:hover {
        opacity: 0.7;
    }

    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        padding-top: 100px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        background-color: rgb(0, 0, 0, 0, 9);
    }

    .modal-content {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
    }

    #caption {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
        text-align: center;
        color: #ccc;
        padding: 10px 0;
        height: 150px;
    }

    .modal-content,
    #caption {
        animation-name: zoom;
        animation-direction: 0.6s;
    }

    @keyframes zoom {
        from {
            transform: scale(0)
        }

        to {
            transform: scale(1)
        }
    }

    .close {
        position: absolute;
        top: 15px;
        right: 35px;
        color: #f1f1ff;
        font-size: 40px;
        font-weight: bold;
        transition: 0.3s;
    }

    .close:hover,
    .close:focus {
        color: #bbb;
        text-decoration: none;
        cursor: pointer;
    }

    @media only screen and (max-width: 700px) {
        .modal-content {
            width: 100%;
        }
    }
</style>

<body background="bgb.jpg" class="center">
    <div class="container">
        <br>
        <center><img src="logo1.png" /> <img src="text.png" /></center><br>
        <ul>
            <li><a href="live.html">Live</a></li>
            <li><a href="changePass.php">Change Password</a></li>
            <li><a href="mainpage.php">Back</a></li>
            <div class="right">
                <li><a href="logout.php"><img src="logout1.png" width="30dp" height="18dp"></a> </li>
            </div>
        </ul>
    </div>
    <div class="font">
        <center>
            <h1>
                <font size="6" color="white">HISTORY</font>
            </h1>
        </center>
    </div>

    <table style="width:70%" align="center">
        <center>
            <tr>
                <td width="5%">
                    <center>
                        <font size="5">No</font>
                    </center>
                </td>
                <td width="15%">
                    <center>
                        <font size="5">Date</font>
                    </center>
                </td>
                <td width="15%">
                    <center>
                        <font size="5">Time</font>
                    </center>
                </td>
                <td width="20%">
                    <center>
                        <font size="5">Capture Picture</font>
                    </center>
                </td>
                <td width="10%">
                    <center>
                        <font size="5">Action</font>
                    </center>
                </td>
            </tr>
        </center>

        <?php
        $bil = 1;
        $sql = "SELECT * FROM time";
        $result = $db->query($sql);
        while ($row = $result->fetch_object()) {
            ?>
            <tr>
                <center>
                    <td>
                        <center><?php echo $bil++; ?></center>
                    </td>
                </center>
                <center>
                    <td><?php echo $row->date; ?></td>
                </center>
                <center>
                    <td><?php echo $row->time; ?></td>
                </center>
                <center>
                    <td>
                        <center><img src="c.jpg" width="10%" height="10%" /></center>
                    </td>
                </center>
                <center>
                    <img id="myImg" src="c.jpg" alt="c" style="width:50%; max-width: 300px">
                    <div id="myModal" class="modal">
                        <span class="close">&times;</span>

                        <img class="modal-content" id="imgo1">

                        <div id="caption"></div>
                    </div>
                </center>
                <center>
                    <td>
                        <center><a href="delete.php?id=<?php echo $row->id; ?>"><img src="delete.png" width="20%" height="20%"></a></center>
                    </td>
                </center>
            </tr>
        <?php
        }
        ?>
    </table>

    <script>
        var modal = document.getElementById("myModal");

        var img = document.getElementById("myImg");
        var modalImg = document.getElementById("imgo1");
        var captionText = document.getElementById("caption");
        img.onclick = function() {
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }

        var span = document.getElementsByClassName("close")[0];

        span.onclick = function() {
            modal.style.display = "none";
        }
    </script>

</body>

</html>