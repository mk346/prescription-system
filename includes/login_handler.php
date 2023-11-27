<?php
$error_array = array();
if(isset($_POST['login_btn'])){
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $_SESSION['email'] = $email;

    $password = md5($_POST['password']);

    //check if user details exists on the database
    $check_database = mysqli_query($con, "SELECT * FROM users WHERE email = '$email' AND password='$password'");
    $check_rows = mysqli_num_rows($check_database);

    if($check_rows == 1) {
        $row = mysqli_fetch_array($check_database);
        $username = $row['fname'];
        //$_SESSION['username'] = $username;

        header("Location: index.php");
        exit();
    }else{
        array_push($error_array, "<span style='color: red;'>Email or Password was Incorrect</span><br>");
    }
}



?>