<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width">
    <title>Prescription History</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
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
    <!-- Your prescription history page content goes here -->
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <title>Prescription History Page</title>
        <link rel="stylesheet" href="presctionhist.css" />
    </head>

    <body>
        <div class="container">
            <!-- Page Title -->
            <h1>Prescription History Page</h1>

            <!-- Prescription History Table -->
            <table class="prescription-table">
                <thead>
                    <!-- Table Header -->
                    <tr>
                        <th>Date</th>
                        <th>Antibiotic Taken</th>
                        <th>Sickness</th>
                        <th>Frequency</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Table Rows with Prescription Data -->
                    <tr class="light-row">
                        <td>2023-01-15</td>
                        <td>Amoxicillin</td>
                        <td>Sinusitis</td>
                        <td>Twice a day</td>
                    </tr>
                    <tr>
                        <td>2023-02-05</td>
                        <td>Azithromycin</td>
                        <td>Respiratory Infection</td>
                        <td>Once a day</td>
                    </tr>
                    <tr class="light-row">
                        <td>2023-03-20</td>
                        <td>Ciprofloxacin</td>
                        <td>Urinary Tract Infection</td>
                        <td>Three times a day</td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
    </body>

    </html>

</body>

</html>