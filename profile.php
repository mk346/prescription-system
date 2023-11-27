<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width">
    <title>Profile</title>
    <link rel="stylesheet" href="style.css" />
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
    <!-- Your profile page content goes here -->

    <head>
        <meta charset="UTF-8" />
        <title>Profile Page</title>
        <link rel="stylesheet" href="profile.css" />
    </head>

    <body>
        <div class="profile-content">
            <h1>Profile Page</h1>
            <div class="profile-details">
                <h2>Profile Details</h2>
                <div class="details">
                    <p><strong>Name:</strong> John Doe</p>
                    <p><strong>Age:</strong> 30</p>
                    <p><strong>Email:</strong> johndoe@example.com</p>
                    <p><strong>Address:</strong> 123 Main Street, City, Country</p>
                    <!-- Add other profile details as needed -->

                    <!-- Update buttons -->
                    <div class="update-buttons">
                        <button onclick="editName()">Update Name</button>
                        <button onclick="editAge()">Update Age</button>
                        <!-- Add more buttons for other details -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Script for update functionality (Example purposes only) -->
        <script>
            function editName() {
                // Add functionality to update the name
                alert("Name update functionality goes here.");
            }

            function editAge() {
                // Add functionality to update the age
                alert("Age update functionality goes here.");
            }
            // Add more functions for other details as needed
        </script>
    </body>

</html>