<?php
require 'config/config.php';

if (isset($_SESSION['username'])) {
    $userLoggedIn = $_SESSION['username'];
    //$id = $_SESSION['login_id'];
    $user_details_query = mysqli_query($con, "SELECT * FROM users WHERE fname='$userLoggedIn'");
    //echo $userLoggedIn;
    $user = mysqli_fetch_array($user_details_query);
} else {
    header("Location: login.php");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width">
    <title>Patient Dashboard</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
    <div class="sidebar">
        <div class="logo"></div>
        <ul class="side">
            <li class="active">
                <a href="index.php" >
                    <i class="fa fa-tachometer"></i> <!-- dashboard icon -->
                    <span> Patient Dashboard</span>
                </a>
            </li>
            <li>
                <a href="profile.php">
                    <i class="fa fa-user-circle "></i> <!-- profile icon -->
                    <span> Profile</span>
                </a>
            </li>
            <li>
                <a href="prescriptions.php">
                    <i class="fa fa-medkit"></i> <!-- prescriptions icon -->
                    <span> Prescriptions</span>
                </a>
            </li>
            <li>
                <a href="presctionhist.php">
                    <i class="fa fa-industry"></i> <!-- Prescriptionn history icon -->
                    <span> Prescription History</span>
                </a>
            </li>
            <li>
                <a href="appoint.php">
                    <i class="fa fa-industry"></i> <!-- Apponintment icon -->
                    <span> Appointments</span>
                </a>
            </li>
            <li>
                <a href="contact.php">
                    <i class="fa fa-industry"></i> <!-- contact icon -->
                    <span>Contact Us</span>
                </a>
            </li>
            <li class="Logout">
                <a href="#">
                    <i class="fa fa-industry"></i> <!-- logout icon -->
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="body">
        <div class="dashboard--wrapper">
            
                </div>

                <div class="contain">
                    <h3 class="main--title"></h3>
                    <div class="message-container welcome">
                        <h3>Welcome to Your Dashboard</h3>
                        <p>Explore the features and manage your health with ease.</p>
                    </div>
                    <div class="message-container we-serve">
                        <h3>We Are Happy to Serve You!</h3>
                        <p>Thank you for choosing our services. Your health is our priority.</p>
                    </div>
            
                    
            
                    <div class="message-container contact-us">
                        <h3>Contact Us</h3>
                        <p>If you have any questions or concerns, feel free to reach out to us.</p>
                    </div>
                </div>
            </body>
            
            </html>
                

</body>

</html>
