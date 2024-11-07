<?php
    require 'db.php'; // Database connection

    // Collect login details from form submission
    $login = $_POST['login']; // This could be either an email or a username
    $password = $_POST['password']; // The password entered by the user

    // Query to select the user based on email or username
    $sql = "SELECT emp_id, email, password FROM Employee WHERE email = ? OR username = ?";

    // Prepare the statement
    $stmt = $conn->prepare($sql);

    // Check if the statement was prepared successfully
    if ($stmt === false) {
        die("Error preparing the statement: " . $conn->error);
    }

    // Bind the input variable for both email and username checks
    $stmt->bind_param("ss", $login, $login);

    // Execute the query
    $stmt->execute();

    // Bind the results
    $stmt->bind_result($emp_id, $email, $db_password);

    // Check if a matching user was found
    if ($stmt->fetch()) {
        // Verify the password using password_verify
        if (password_verify($password, $db_password)) {
            echo "Login successful: Welcome, " . $email;
            // Here, you could start a session and set session variables
            // e.g., $_SESSION['user_id'] = $emp_id;
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
