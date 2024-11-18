<?php
  session_start(); // Start the session

  require 'utilities/db.php'; // Database connection

  // Collect login details from form submission
  $email = isset($_POST['username']) ? $_POST['username'] : null;
  $password = isset($_POST['psw']) ? $_POST['psw'] : null;
  $remember = isset($_POST['remember']); // Checkbox for "Remember Me"

  if (!$email || !$password) {
    echo "Error: Please enter both email and password.";
    die();
  }

  // Query to select the user based on email
  $sql = "SELECT author_id, first_name, last_name, email, password FROM Author WHERE email = ?";
  $stmt = $conn->prepare($sql);

  if ($stmt === false) {
    die("Error preparing the statement: " . $conn->error);
  }

  // Bind parameters for email check
  $stmt->bind_param("s", $email); // Bind single parameter for email
  $stmt->execute();
  $stmt->bind_result($author_id, $first_name, $last_name, $db_email, $db_password);

  // Check if the user was found and verify password
  if ($stmt->fetch()) {
    if (password_verify($password, $db_password)) {
      // Login successful
      $_SESSION['author_id'] = $author_id; // Store author ID in session
      $_SESSION['author_first_name'] = $first_name;
      $_SESSION['author_last_name'] = $last_name;
      $_SESSION['author_email'] = $db_email; // Optionally store email

      // If "Remember Me" is checked, set a cookie
      if ($remember) {
        // Set a cookie valid for 30 days
        setcookie("author_id", $author_id, time() + (30 * 24 * 60 * 60), "/");
      }

      echo "Login successful: Welcome, " . $first_name;

      // Redirect to the author dashboard or home page
      header("Location: home.php");
      exit;
    } 
    else {
      echo "Invalid login credentials.";
    }
  } 
  else {
    echo "No user found with those login details.";
  }

  // Close statement and connection
  $stmt->close();
  $conn->close();

  // Redirect back to the login page on failure
  header("Location: author-login.php?error=1");

?>