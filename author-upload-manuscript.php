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
        <p>Fill out your information and upload your manuscript.</p>
      </header>
  
      <form id="manuscript-upload" action="author-submitted.php" method="POST" class="w3-container w3-padding-large">
        <!-- First Name -->
        <div class="w3-margin-bottom">
          <label for="first_name" class="w3-text-dark-grey"><b>First name</b></label>
          <input type="text" id="first_name" name="first_name" required placeholder="Enter first name"
            class="w3-input w3-border w3-round">
        </div>
  
        <!-- Last Name -->
        <div class="w3-margin-bottom">
          <label for="last_name" class="w3-text-dark-grey"><b>Last name</b></label>
          <input type="text" id="last_name" name="last_name" required placeholder="Enter last name"
            class="w3-input w3-border w3-round">
        </div>
  
        <!-- Email -->
        <div class="w3-margin-bottom">
          <label for="authorEmail" class="w3-text-dark-grey"><b>Email</b></label>
          <input type="text" id="authorEmail" name="authorEmail" required placeholder="Enter email"
            class="w3-input w3-border w3-round">
          <p class="w3-small w3-text-grey mt-0">Be sure to use an email we can reach you at.</p>
        </div>

        <div class="w3-margin-bottom">
          <!-- Auto width -->
          <label for="manuscriptFile" class="w3-text-dark-grey"><b>Manuscript Upload</b></label>
          <p class="w3-text-dark-grey w3-margin-bottom">
            <button class="btn w3-button w3-blue"><i class="fa fa-upload"></i> Upload</button>
            your manuscript document file. PDF or docx (Word) files.
          </p>
        </div>
  
        <!-- Manuscript Title -->
        <div class="w3-margin-bottom">
          <label for="manuscriptTitle" class="w3-text-dark-grey"><b>Manuscript Title</b></label>
          <input type="text" id="manuscriptTitle" name="manuscriptTitle" required placeholder="Enter Manuscript Title"
            class="w3-input w3-border w3-round">
          <p class="w3-small w3-text-grey mt-0">Required. Title of the manuscript being submitted.</p>
        </div>
  
        <!-- Manuscript Description -->
        <div class="w3-margin-bottom">
          <label for="manuscriptDescription" class="w3-text-dark-grey"><b>Manuscript Description</b></label>
          <textarea id="manuscriptDescription" name="manuscriptDescription" rows="4"
            placeholder="Provide a short description of the manuscript" class="w3-input w3-border w3-round"></textarea>
          <p class="w3-small w3-text-grey mt-0">Optional. Brief description of the manuscript.</p>
        </div>
  
        <!-- Submit Button -->
        <button type="submit" class="w3-button w3-red w3-hover-dark-red w3-round-large w3-padding-large w3-block">Submit
          Data</button>
      </form>
  
      <!-- Success/Error Message -->
      <div id="message" class="w3-margin-top w3-padding w3-center w3-round w3-text-white" style="display: none;"></div>
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