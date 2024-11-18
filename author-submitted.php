<!DOCTYPE html>
<html lang="en">

<head>
  <title>Upload Success | Kaitaia Publishing Collective</title>
  <?php include 'templates/head-meta.html'; ?>
  <?php include 'templates/head-css.html'; ?>

  <!-- Auto-redirect to home.php after 3 seconds -->
  <meta http-equiv="refresh" content="2.5;url=home.php">

  <style>
    /* Center content */
    .success-container {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100vh;
      text-align: center;
    }

    /* Spinner styles */
    .spinner {
      border: 5px solid #f3f3f3;
      border-top: 5px solid #3498db;
      border-radius: 50%;
      width: 50px;
      height: 50px;
      animation: spin 1s linear infinite;
      margin-bottom: 20px;
    }

    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }

    .redirect-message {
      font-size: 1.5rem;
      color: #333;
    }
  </style>
</head>

<body class="w3-light-grey">
  <div class="success-container">
    <div class="spinner"></div>
    <h1 class="w3-text-green">Your Manuscript was Successfully Uploaded!</h1>
    <p class="redirect-message">You will be redirected to the home page...</p>
  </div>

  <p class="w3-center w3-bottom">Click here if not redirected: <a href="home.php">Home</a></p>
</body>

</html>
