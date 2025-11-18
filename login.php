<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Document metadata -->
    <meta charset="UTF-8"> <!-- Character encoding for proper text display -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Responsive design viewport -->
    <title>Login | Medical Site</title> <!-- Page title shown in browser tab -->
    
    <!-- External CSS stylesheet for login page styling -->
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
<!-- Include header section from external PHP file -->
<!-- This typically contains navigation, site header, etc. -->
<?php include 'header.php'; ?>

<!-- Main content container -->
<div class="container">
    <!-- Login section wrapper -->
    <div class="login-section">
        <!-- Form container section -->
        <div class="form-section">
            <!-- Fieldset for grouping form elements semantically -->
            <fieldset>  
                <!-- Website/company logo -->
                <img src="images/logo.jpg" id="logo" name="logo" alt="Logo" class="logo">
                
                <!-- Page heading -->
                <h2>Login to Your Account</h2>
                
                <!-- Login form that submits data to logindetails.php for processing -->
                <!-- method="post" hides form data in HTTP request -->
                <form method="post" action="logindetails.php">
                    
                    <!-- Email input group -->
                    <div class="input-group">
                        <!-- Email input field with type="email" for validation -->
                        <!-- required attribute makes this field mandatory -->
                        <input type="email" id="email" name="email" placeholder="Email" required>
                    </div>
                    
                    <!-- Password input group -->
                    <div class="input-group">
                        <!-- Password input field (masked input) -->
                        <!-- minlength="6" enforces minimum password length -->
                        <input type="password" id="pass" name="pass" placeholder="Password" required minlength="6">
                    </div>
                    
                    <!-- Submit button for form -->
                    <button class="login-button" type="submit" id="btn" name="submit">Login</button><br>
                    
                    <!-- Registration link for new users -->
                    <div class="links">
                        <span>Don't have an account? </span><a href="register.php">Create one</a>
                    </div>
                    
                    <!-- Password recovery link -->
                    <div class="links">
                        <a href="loginUpdate.php">Forgot Password?</a>
                    </div>
                </form>
            </fieldset>  
        </div>
    </div>
</div>

<!-- Include footer section from external PHP file -->
<!-- This typically contains copyright, links, contact info, etc. -->
<?php include 'footer.php'; ?>   
</body>
</html>