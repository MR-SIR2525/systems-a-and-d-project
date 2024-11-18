<!DOCTYPE html>
<html lang="en">

<head>
  <title>Author Upload Manuscript | Kaitaia Publishing Collective</title>
  <?php include 'templates/head-meta.html'; ?>
  <?php include 'templates/head-css.html'; ?>

  <link rel="stylesheet" href="style.css">
</head>


<body class="w3-light-grey">
  <?php
    session_start();
    include 'templates/nav.php'; 
  ?>

  <section class="w3-content mb-64 flex-center" style="margin-top: 75px;">
    <div class="w3-card-4 w3-white w3-round-large w3-padding form-card">
      <header class="w3-center w3-border-bottom w3-border-red w3-padding-16">
        <h2 class="w3-text-dark-grey">Author Personal Info and Manuscript</h2>
        <p>Fill out your information and upload your manuscript.</p>
      </header>
  
      <?php
        // isAuthor should be initialized in nav.php, so we check it
        if ($isAuthor) {
          print '
            <div class="w3-margin-bottom w3-center">
              <p class="w3-text-dark-grey"><b>' . $_SESSION['author_first_name'] . ' ' . $_SESSION['author_last_name'] . '</b></p>
              <p class="w3-text-dark-grey"><b>' . $_SESSION['author_email'] . '</b></p>
            </div>';
        }
        else {
          print '
            <div class="w3-margin-bottom w3-center w3-red w3-round w3-padding">
              <b>You need to be logged in to upload a manuscript</b>
            </div>
            
            <div class="w3-center w3-margin-bottom">
              <button onclick="document.getElementById(\'authorLoginModal\').style.display=\'block\'" 
                class="w3-button w3-blue w3-card w3-underline" title="Sign in as Author">Author Login/Signup</button>
            </div>';
        }
      ?>

      <form id="manuscript-upload" action="author-submitted.php" method="POST" class="w3-container w3-padding-large">
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
        <?php 
          if ($isAuthor) {
            print '
            <button type="submit" class="w3-button w3-green w3-hover-dark-red w3-round-large w3-padding-large w3-block">
              Submit Data
            </button>';
          }
        ?>
      </form>
  
      <!-- Success/Error Message -->
      <div id="message" class="w3-margin-top w3-padding w3-center w3-round w3-text-white" style="display: none;"></div>
    </div>
  </section>


  <!-- Footer -->
  <?php include 'templates/footer.php'; ?>
  <?php include 'author-login.html'; ?>
  <?php include 'author-signup.html'; ?>


</body>

</html>