<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        /* Container styling */
        .register-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 350px; /* Adjusted width */
            text-align: center;
        }

        /* Input styling */
        .register-container label {
            display: block;
            margin: 10px 0 5px;
            font-weight: bold;
        }

        .register-container input,
        .register-container select {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: none;
            border-bottom: 2px solid #ccc;
            outline: none;
            transition: border-bottom-color 0.3s ease-in-out;
        }

        /* Change border color on input focus */
        .register-container input:focus,
        .register-container select:focus {
            border-bottom-color: #28023a;
        }

        /* Register button styling */
        .register-btn {
            background-color: #28023a;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        .register-btn:hover {
            background-color: #4f0e72;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h2>Register</h2>
        <form action="#" method="post">
            <!-- Your Name input -->
            <label for="Yourname">Your Name:</label>
            <input type="text" id="Yourname" name="YourName" placeholder="Enter Your name" required>

            <!-- ID Number input -->
            <label for="idNumber">ID Number:</label>
            <input type="text" id="idNumber" name="idNumber" placeholder="Enter your ID number" required>

            <!-- Gender selection -->
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="female">Female</option>
                <option value="male">Male</option>
            </select>

            <!-- Age selection -->
            <label for="age">Age:</label>
            <select id="age" name="age" required>
                <option value="18-25">18-25</option>
                <option value="25-35">25-35</option>
                <option value="35-45">35-45</option>
                <option value="45-55">45-55</option>
                <option value="55-65">55-65</option>
                <option value="65-85">65-85</option>
                <option value="85+">85 and above</option>
            </select>

            <!-- Email Address input -->
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email address" required>

            <!-- Area of Residence dropdown -->
            <label for="areaOfResidence">Area of Residence:</label>
            <select id="areaOfResidence" name="areaOfResidence" required>
                <option value="Algeria">Algeria</option>
                <option value="Nigeria">Nigeria</option>
                <option value="South Africa">South Africa</option>
                <option value="Kenya">Kenya</option>
                <option value="Egypt">Egypt</option>
                <!-- Add more African countries as needed -->
            </select>

            <!-- Submit button -->
            <button type="submit" class="register-btn">Register</button>
        </form>
    </div>
</body>
</html>
