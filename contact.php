<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width">
    <title>Contact Us</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="contact.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- Include any additional styles or scripts if necessary -->
</head>

<body>
    <div class="sidebar">
        <div class="logo"></div>
        <ul class="side">
            <li class="active">
                <a href="index.php">
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
    <div class="contact-container">
        <h2>Contact Us</h2>
        <form action="#" method="post">
            <!-- Your Names input -->
            <label for="yourNames">Your Names:</label>
            <input type="text" id="yourNames" name="yourNames" placeholder="Enter your names" required>

            <!-- Email Address input -->
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email address" required>

            <!-- Message textarea -->
            <label for="message">Message:</label>
            <textarea id="message" name="message" placeholder="Type your message here" required></textarea>

            <!-- Submit button -->
            <button type="submit" class="contact-btn">Send Message</button>
        </form>
    </div>

</body>

</html>