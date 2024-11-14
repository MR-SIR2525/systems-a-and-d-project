<!DOCTYPE html>
<html lang="en">

<head>
  <title>Author Upload Manuscript | Kaitaia Publishing Collective</title>
  <?php include 'templates/head-meta.html'; ?>
  <?php include 'templates/head-css.html'; ?>

  <link rel="stylesheet" href="style.css">
</head>


<body class="w3-light-grey">
  <?php include 'templates/nav.php'; ?>

  <section class="w3-content w3-margin-top w3-padding-top-64 flex-center">
    <div class="w3-card-4 w3-white w3-round-large w3-padding form-card">
      <header class="w3-center w3-border-bottom w3-border-red w3-padding-16">
        <h2 class="w3-text-dark-grey">Author Personal Info and Manuscript</h2>
        <p></p>
      </header>

      <?php
        session_start();
        require 'utilities/db.php'; // Make sure this includes your database connection setup

        // Check if the form was submitted
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Collect form data
            $firstName = $_POST['first_name'];
            $lastName = $_POST['last_name'];
            $email = $_POST['authorEmail'];
            $title = $_POST['manuscriptTitle'];
            $description = $_POST['manuscriptDescription'];

            // Prepare SQL to insert the data
            $sql = "INSERT INTO Manuscripts (first_name, last_name, email, title, description) 
            VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);

            if ($stmt === false) {
                die("Error preparing the statement: " . $conn->error);
            }

            // Bind parameters to the statement
            $stmt->bind_param("sssss", $firstName, $lastName, $email, $title, $description);

            // Execute the query
            if ($stmt->execute()) {
                echo "Manuscript uploaded successfully!";
            } else {
                echo "Error: " . $stmt->error;
            }

            // Close the statement and connection
            $stmt->close();
          }
      ?>

  
      <!-- Success/Error Message -->
      <div id="message" class="w3-margin-top w3-padding w3-center w3-round w3-text-white">

      </div>
    </div>
  </section>


  <!-- Footer -->
  <?php include 'templates/footer.html'; ?>

  <!-- 
  <script>
      document.getElementById("dataInputForm").addEventListener("submit", function(event) {
          event.preventDefault();
          let form = event.target;
          let allFieldsValid = form.checkValidity();

          // Get message element
          let message = document.getElementById("message");

          if (allFieldsValid) {
              message.textContent = "Successfully Submitted!";
              message.className = "message success";
          } else {
              message.textContent = "Error: Please fill out all required fields correctly.";
              message.className = "message error";
          }
          
          message.style.display = "block";
      });
  </script> -->

</body>

</html>