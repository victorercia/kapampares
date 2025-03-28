<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            position: relative;
        }
		
		.navbar {
            background-color: #8B4513; /* Brown color */
            overflow: hidden;
            text-align: center;
        }

        .navbar a {
            color: white;
            padding: 14px 16px;
            text-decoration: none;
            display: inline-block;
        }

        .navbar a:hover {
            background-color: #45a049;
            color: white;
        }
		
		.form-container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 20px auto;
            max-width: 400px;
        }


        .background-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            background-image: url('signup_bg.jpg'); /* Replace 'background-image.jpg' with your image file */
            background-size: cover;
            background-position: center;
            overflow: hidden;
        }

        .background-overlay::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(94, 65, 5, 0.8); /* Adjust the opacity (last value) for the darkening effect */
            z-index: 1;
        }

        .signup-container {
            z-index: 2;
            background-color: rgba(78, 60, 26, 0.0);
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            max-width: 600px;
            border: none;
            outline: none;
        }

        form {
            margin: 0 auto;
        }

        h2 {
            text-align: center;
            color: white; /* Set text color to black */
        }

        .form-group {
            position: relative;
            margin-bottom: 15px;
        }

        label {
            display: none; /* Hide labels */
        }

         input {
            width: calc(100% - 30px);
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 25px;
            text-align: left;
            margin-bottom: 10px;
        }

        input::placeholder {
            text-align: left; /* Align placeholder text to the left */
        }

        .toggle-password {
            display: flex;
            align-items: center;
            margin-top: 10px;
            position: relative; /* Added position relative for positioning */
        }

        .toggle-password {
            cursor: pointer;
            position: absolute;
            right: 10px; /* Adjust the right value to control the distance from the right edge */
            top: 50%; /* Center vertically */
            transform: translateY(-50%);
            color: #000000; /* Adjust the color of the eye icon */
        }

        button {
            width: 90%;
            padding: 8px; /* Adjust padding to match the input */
            background-color: #FFFFFF;
            color: black;
            border: none;
            border-radius: 25px; /* Set the border-radius to create an elliptical shape */
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
    <title>Signup Page</title>
</head>
<body>
<img class="Rectangle12" style="width: 313px; height: 148px; left: 111px; top: -13px; position: absolute" src="./img/logo.svg">
    <div class="background-container">
        
        <div class="background-overlay"></div>
    </div>
    <div class="signup-container">
        <form id="signup-form">
            <h2>ADMIN LOGIN</h2>
            <div class="signup-container" style="
            padding-right: 0px;">
                
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" id="username" name="username" placeholder="Username" required="">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" placeholder="Email" required="">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" placeholder="Password" required="">
                        <div class="toggle-password" onclick="togglePassword('password')">👁</div>
                    </div>
                    <div class="form-group">
                        <label for="confirm-password">Confirm Password:</label>
                        <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm Password" required="">
                        <div class="toggle-password" onclick="togglePassword('confirm-password')">👁</div>
                    </div>
                    <button type="button" onclick="validateForm()">LOG-IN</button> <br> </br>

                    <div>
    
                    </div>
            </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js" integrity="sha384-7LywaXszlTOMMTcTBtC3AUNPcPlE6+f8SccsHPGzTi3UZZEwJq7vcC6dIMwFXkZC" crossorigin="anonymous"></script>
    
    <script>
        function togglePassword(elementId) {
            var x = document.getElementById(elementId);
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }

        function validateForm() {
            var username = document.getElementById('username').value;
            var email = document.getElementById('email').value;
            var password = document.getElementById('password').value;
            var confirmPassword = document.getElementById('confirm-password').value;

            if (username === "" || email === "" || password === "" || confirmPassword === "") {
                alert("All fields must be filled out");
            } else if (password !== confirmPassword) {
                alert("Passwords do not match");
            } else if (username === "admin" || email === "admin.email.com" || password === "admin123" || confirmPassword === "admin123") {
                alert("LOG-IN successful!");
                window.open("./admin.php");
            }
            else {
                alert("ADMIN ONLY");
                window.open("./index.php");
                
                // You can add code here to submit the form or perform other actions
            }
			}

        function navigateTo(page) {
            alert("Navigating to " + page);
            // You can add code here to handle navigation
        }
        
    </script>
</body>
</html> 