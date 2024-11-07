<!DOCTYPE html>
<html lang="en">

<head>
  <title>Author Upload Manuscript | Kaitaia Publishing Collective</title>
  <?php include 'templates/head-meta-and-css.html'; ?>

  <link rel="stylesheet" href="style.css">
</head>


<body>

  <?php include 'templates/nav.php'; ?>
  
  <div class="container" style="margin-top: 55px">
    <header>
      <h1>Author Personal Info and Manuscript</h1>
      <p>Fill out your information and upload your manuscript.</p>
    </header>

    <form id="dataInputForm" action="author_submitted.php" method="POST">

      <!-- Author Information Section -->
      <!-- <div class="input-group">
            <label for="authorName">Author Name</label>
            <input type="text" id="authorName" name="authorName" required placeholder="Enter Author's Full Name">
            <div class="tooltip">Required. Full name of the author submitting the manuscript.</div>
        </div> -->

      <!-- two inputs for first name and last name -->
      <div class="input-group">
        <label for="first_name">First name</label>
        <input type="text" id="first_name" name="first_name" required placeholder="Enter first name">
      </div>

      <div class="input-group">
        <label for="last_name">Last name</label>
        <input type="text" id="last_name" name="last_name" required placeholder="Enter last name">
      </div>

      <div class="input-group">
        <label for="authorEmail">Email</label>
        <input type="text" id="authorEmail" name="authorEmail" required placeholder="Enter email">
        <div class="tooltip">Be sure to use an email we can reach you at.</div>
      </div>

      <!-- Manuscript Information Section -->
      <div class="input-group">
        <label for="manuscriptTitle">Manuscript Title</label>
        <input type="text" id="manuscriptTitle" name="manuscriptTitle" required placeholder="Enter Manuscript Title">
        <div class="tooltip">Required. Title of the manuscript being submitted.</div>
      </div>

      <div class="input-group">
        <label for="manuscriptDescription">Manuscript Description</label>
        <textarea id="manuscriptDescription" name="manuscriptDescription" rows="4"
          placeholder="Provide a short description of the manuscript"></textarea>
        <div class="tooltip">Optional. Brief description of the manuscript.</div>
      </div>

      <button type="submit">Submit Data</button>
    </form>

    <!-- Success/Error Message -->
    <div id="message" class="message"></div>
  </div>


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