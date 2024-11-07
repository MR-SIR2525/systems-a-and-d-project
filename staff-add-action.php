<?php
    session_start(); // Start the session at the beginning

    require 'utilities/db.php'; // Ensure this file sets up the $conn variable for the database connection

    // Collect form data
    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['psw'];
    // $remember = isset($_POST['remember']); // For "Remember Me" if using it

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Prepare SQL statement to insert a new employee record
    $sql = "INSERT INTO Employee (first_name, last_name, email, password) VALUES (?, ?, ?, ?)";
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
        echo "New employee added successfully.";
    } else {
        echo "Error adding employee: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
?>
