<?php
    session_start(); // Start the session

    require 'utilities/db.php'; // Database connection

    // Collect login details from form submission
    $username = isset($_POST['username']) ? $_POST['username'] : null;
    $password = isset($_POST['psw']) ? $_POST['psw'] : null;
    $remember = isset($_POST['remember']); // Checkbox for "Remember Me"

    if (!$username || !$password) {
        echo "you entered " . $username . " and " . $password;
        die("Please enter both username/email and password.");
    }

    // Query to select the user based on email or username
    $sql = "SELECT emp_id, first_name, email, password FROM Employee WHERE email = ?";
    $stmt = $conn->prepare($sql);
    
    if ($stmt === false) {
        die("Error preparing the statement: " . $conn->error);
    }

    // Bind parameters for email check
    $stmt->bind_param("s", $username); // Bind single parameter for username/email
    $stmt->execute();
    $stmt->bind_result($emp_id, $first_name, $email, $db_password);

    // Check if the user was found and verify password
    if ($stmt->fetch()) {
        if (password_verify($password, $db_password)) {
            // Login successful
            $_SESSION['user_id'] = $emp_id; // Store user ID in session
            $_SESSION['user_first_name'] = $first_name;
            $_SESSION['user_email'] = $email; // Optionally store email

            // If "Remember Me" is checked, set a cookie
            if ($remember) {
                // Set a cookie valid for 30 days
                setcookie("user_id", $emp_id, time() + (30 * 24 * 60 * 60), "/");
            }

            echo "Login successful: Welcome, " . $email;
        } else {
            echo "Invalid login credentials.";
        }
    } else {
        echo "No user found with those login details.";
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
?>
