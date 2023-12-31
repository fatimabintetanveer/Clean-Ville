<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer Registration - Clean Ville</title>
    <link rel="stylesheet" type="text/css" href="styles.css">

    <style>
      
    body {
        font-family: Arial, sans-serif;
        background-color: #f7f7f7;
        margin: 0;
        padding: 0;
    }

    header {
        background-color: #007BFF;
        color: #fff;
        padding: 10px;
        display: flex;
        justify-content: space-between; /* Updated to space-between */
        align-items: center;
    }

    nav a {
        order: 1;
        text-decoration: none;
        color: #fffcfc;
        font-weight: bold;
        border-radius: 5px;
        padding: 5px 10px;
        transition: background-color 0.3s, color 0.3s; /* Added transition properties for color and background-color */
    }

    nav a:hover {
        background-color: #cafacd;
        color: #007BFF; /* Change the link color on hover */
    }

    .logo {
        order: 3; /* Adjusted order to move the logo to the end */
    }


        .container {
            max-width: 400px;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .registration-container {
            text-align: center;
        }

        h2 {
            color: #095a55;
            font-size: 24px;
            font-weight: 500;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            margin-top: 10px;
            color: #333;
            font-weight: bold;
            display: block;
        }

        input, textarea, select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        button {
            background-color: #095a55;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0d9480;
        }
    
    </style>
</head>
<body>
   <header>
    <nav>
        <ul>
            <li><a href="/viewevent">Back</a></li>
        <ul></ul>
        
        <div class="logo">
            <img src="{{ asset('images/Clean ville.png') }}" alt="Cleaning Scheduler Logo">
            <!-- Add any text or additional elements for the logo here -->
        </div>
    </header>

    <div class="container">
        <div class="registration-container">
            <h2>Volunteer Registration</h2>
            <form action="process_registration.php" method="post">
                <!-- Personal Information -->
                <label for="fullname">Full Name:</label>
                <input type="text" id="fullname" name="fullname" required>

                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" required>

                <!-- Address Information -->
                <label for="address">Address:</label>
                <textarea id="address" name="address" rows="4" required></textarea>

                <!-- Location Preference -->
                <label for="location">Preferred Location:</label>
                <select id="location" name="location" required>
                    <option value="" disabled selected>Select a location</option>
                    <option value="National Park">National Park</option>
                    <option value="Riverbank">F-9 Park</option>
                    <option value="Community Garden">Ayub Park</option>
                </select>

                <!-- Date Preference -->
                <label for="date">Preferred Date:</label>
                <select id="date" name="date" required>
                    <option value="" disabled selected>Select a date</option>
                    <option value="15-Nov-2023">15-Nov-2023</option>
                    <option value="16-Nov-2023">16-Nov-2023</option>
                    <option value="17-Nov-2023">17-Nov-2023</option>
                    <option value="18-Nov-2023">18-Nov-2023</option>
                </select>

                <!-- Submit Button -->
                <button type="submit">Register</button>
            </form>
        </div>
    </div>

    <x-footer /> 
</body>
</html>


        