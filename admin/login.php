<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/theme.css">
    <!-- @google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kantumruy&display=swap" rel="stylesheet">
    <!-- @google font -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
    <div class="content login">
        <div class="wrap-login">
            <h3 class="title">SIGN IN ACCOUNT</h3>
            <form method="post">
                <div class="label">Username</div>
                <input type="text" class="box" placeholder="Username" name="name">
                <div class="label">Password</div>
                <input type="password" class="box" placeholder="Password" name="password">
                <div class="btn-wrap">
                    <button type="submit" name="btn_login">SIGN IN <i class="fas fa-sign-in-alt"></i></button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
//login form
session_start();
include('../database/connection.php');
if (isset($_POST['btn_login'])) {
    $username = $_POST['name'];
    $password = md5($_POST['password']);
    $sql_select = "SELECT * FROM tbl_admin WHERE username='" . $username . "' AND password='" . $password . "' ";
    $result_select = $con->query($sql_select);

    if (mysqli_num_rows($result_select) > 0) {
        $_SESSION['id'] = $password;
        header("location:index.php");
    } else {
        echo '<script>
                    swal({
                        title: "invalid Password or Username !",
                        text: "You clicked the button!",
                        icon: "warning",
                        button: "Okay!",
                    });
                </script>';
    }
}

?>