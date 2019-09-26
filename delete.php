<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "security";
$date = '';
$time = '';

$conn = mysqli_connect("localhost", "root", "", "security") or die(mysql_error());
$id = $_GET['id'];

$sql = "delete FROM time WHERE id = $id";
if (mysqli_query($conn, $sql)) {
    echo $id;
    ?>
    <script>
        alert("delete");
        window.location = 'historymotion.php';
    </script>
<?php
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>