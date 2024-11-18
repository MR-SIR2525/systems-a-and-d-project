<?php
    session_start(); // Start the session

    require 'utilities/db.php'; // Ensure this file sets up the $conn variable for the database connection

    // Collect form data
    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['psw'];

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Prepare SQL statement to insert a new author record
    $sql = "INSERT INTO Author (first_name, last_name, email, password) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    // Check if the statement was prepared successfully
    if ($stmt === false) {
        die("Error preparing the statement: " . $conn->error);
    }

    // Bind the parameters to the SQL statement
    $stmt->bind_param("ssss", $firstName, $lastName, $email, $hashedPassword);

    // Execute the query
    $result = $stmt->execute();

    // Check if the insertion was successful
    if ($result) {
        // Redirect the user to the login page with a success message
        header("Location: home.php?signup_success=1");
        exit();
    } else {
        // Handle duplicate email error
        if ($stmt->errno == 1062) {
            echo "Error: The email you entered is already registered.";
        } else {
            echo "Error adding author: " . $stmt->error;
        }
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
?>
