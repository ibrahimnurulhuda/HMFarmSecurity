<?php
include('session.php');

#echo '<pre>', print_r($_POST);

$password1 = mysqli_real_escape_string($db, $_POST['password1']);
$password2 = mysqli_real_escape_string($db, $_POST['password2']);
$password3 = mysqli_real_escape_string($db, $_POST['password3']);

$sql = "SELECT * FROM login WHERE username = 'admin' and password = '$password1'";
$result = mysqli_query($db, $sql);
echo mysqli_error($db);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
#$active = $row['active'];

$count = mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

if ($count == 1) {
    if ($password2 == $password3) {
        $panjang = strlen($password3);
        $n1 = false;
        $n2 = false;
        for ($i = 0; $i < $panjang; $i++) {
            if (is_numeric(substr($password3, $i, 1))) {
                $n1 = true;
            } else {
                $n2 = true;
            }
        }

        if ($n1 == false or $n2 == false) {
            ?>
            <script>
                alert("Follow the instruction if you want to change password");
                window.location = 'changePass.php';
            </script>
        <?php
                } else {

                    $sql  = "UPDATE login SET password = '$password2'";
                    mysqli_query($db, $sql);
                    #echo mysqli_error($db); exit;
                    ?>
            <script>
                alert("Your password have changed ");
                window.location = 'mainpage.php';
            </script>
        <?php
                }
            } else {
                ?>
        <script>
            alert("Your new password and confirm password don't match");
            window.location = 'changePass.php';
        </script>
    <?php
        }
    } else {
        ?>
    <script>
        alert("Your password wrong");
        window.location = 'changePass.php';
    </script>
<?php
}
