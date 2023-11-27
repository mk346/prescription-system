<?php 

//declaring variables
$fname = "";
$id_number = "";
$gender = "";
$age = "";
$email = "";
$residence = "";
$password1 = "";
$password2 = "";
$error_array = array();

if(isset($_POST['btn_save'])){
    //capturing the data input by user 
    $fname = strip_tags($_POST['fname']);
    $fname = ucfirst(strtolower($fname));
    $_SESSION['fname'] = $fname;

    $id_number = strip_tags($_POST['id_number']);
    $_SESSION['id_number'] = $id_number;

    $gender = strip_tags($_POST['gender']);
    $_SESSION['gender'] = $gender;

    $age = strip_tags($_POST['age']);
    $_SESSION['age'] = $age;

    $email = strip_tags($_POST['email']);
    $email = str_replace(' ', '',$email);
    $_SESSION['email'] = $email;

    $residence = strip_tags($_POST['residence']);
    $fname = ucfirst(strtolower($residence));
    $_SESSION['residence'] = $residence;

    $password1 = strip_tags($_POST['password1']);
    $password1 = str_replace(' ', '',$password1);

    $password2 = strip_tags($_POST['password2']);
    $password2 = str_replace(' ', '',$password2);


    // validate some data e.g email
    //check full name length
    if(strlen($fname) > 25 || strlen($fname) < 3 ){
        array_push($error_array, "<span style='color: red;'>Your name must be between 3 and 25 characters</span><br>");
    }

    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);

    }else {
        array_push($error_array, "<span style='color: red;'>Invalid Email Format</span><br>");
    }

    //set password strength
    $uppercase = preg_match('@[A-Z]@', $password1); // uppercase check
    $number    = preg_match('@[0-9]@', $password1); // number check

    //check if passwords match
    if($password1 != $password2){
        array_push($error_array, "<span style='color: red;'>Your Passwords do not Match</span><br>");
    }else {
        //check password strength
        if(!$uppercase || !$number){
            array_push($error_array, "<span style='color: red;'>Password must contain one Uppercase letter and one Number</span><br>");
        }
    }
    //check password length
    if(strlen($password1) > 32 || strlen($password1) < 8){
        array_push($error_array, "<span style='color: red;'>Password must be between 8 and 32 characters</span><br>");
    }

    // if no errors save data to database
    if(empty($error_array)){
        //encrypt password
        $password1 = md5($password1);

        //save data to db
        $query = mysqli_query($con, "INSERT INTO users VALUE('', '$fname', '$id_number', '$gender', '$age','$email', '$residence', '$password1')");

        array_push($error_array, "<span style='color: #14C800;'>Account Created Successfully</span><br>");

        //clear session variables
        $_SESSION['fname'] = "";
        $_SESSION['gender'] = "";
        $_SESSION['age'] = "";
        $_SESSION['email'] = "";
        $_SESSION['residence'] = "";


    }





}




?>