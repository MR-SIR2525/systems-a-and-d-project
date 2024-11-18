<!DOCTYPE html>
<html>
<head>
  <title>Kaitaia Publishing Collective | Home</title>
  <?php include 'templates/head-meta.html'; ?>
  <?php include 'templates/head-css.html'; ?>

  <style>
    body, html {
      height: 100%;
      font-family: "Inconsolata", sans-serif;
    }

    .bgimg {
      background-position: center;
      background-size: cover;
      background-image: url("/images/book_road.png");
      min-height: 75%;
    }

    .menu {
      display: none;
    }
  </style>
</head>

<body>
  <?php
    session_start();
    if (isset($_GET['signup_success'])) {
      echo '<p class="w3-text-green w3-center">Signup successful! You can now log in.</p>';
    }
  ?>

  <!-- Nav Links (sit on top) -->
  <?php include 'templates/nav.php'; ?>

  <!-- Header with image -->
  <header class="bgimg w3-display-container w3-grayscale-min" id="home">
    <div class="w3-display-middle w3-center">
      <span class="w3-text-white" style="font-size:75px">Kaitaia Publishing Collective</span>
    </div>
  </header>

  <div class="w3-large w3-sand">
    <!-- Button Container -->
    <section class="w3-container pb-48" id="upload_container">
      <div class="w3-content w3-center" style="max-width:700px">
        <form action="author-upload-manuscript.php" method="POST" class="center-form">
          <p>
            Are you an author looking to get your work published? Upload your manuscript and 
            we'll review it. If we like it, we'll publish it!
          </p>
          <button class="w3-button w3-blue" type="submit">Upload a Manuscript</button>
        </form>
      </div>
    </section>
    
    <hr>

    <!-- About Container -->
    <section class="w3-container pt-24" id="about">
      <div class="w3-content w3-center mb-64" style="max-width:700px">
        <h3 class="w3-left-align">
          <span>About Kaitaia Publishing Collective</span>
        </h3>
        <p class="w3-left-align">
          Kaitaia Publishing Collective is a publishing company based in New Zealand. We publish books, 
          short stories, poetry, and non-fiction.
        </p>
        <p class="w3-left-align">
          Our goal is to provide writers with a platform to publish their work. Our chairwoman,
          Maria, grew up in a small town in New Zealand, surrounded by a community of storytellers. 
          Inspired by the rich tapestry of tales she heard, she dreamed of sharing these voices 
          with the world. Recognizing the challenges faced by emerging authors, Maria founded 
          Kaitaia Publishing Collective to break down barriers and provide a welcoming platform 
          for writers to publish their work. The team at Kaitaia Publishing share a common passion 
          for literature, stories and learning, and want to give authors the path to sharing their
          stories with the world, and to celebrate the narratives of New Zealand.
        </p>
      </div>
    </section>
  </div>
  <!-- End page content -->


  <!-- Footer -->
  <?php include 'templates/footer.php'; ?>


  <!-- Including modals here, just before the end of the body -->
  <?php include 'author-login.html'; ?>
  <?php include 'author-signup.html'; ?>
  <?php include 'staff-login.html'; ?>
  <?php include 'staff-add.html'; ?>


  <script>
    // Tabbed Menu
    function openMenu(evt, menuName) {
      var i, x, tablinks;
      x = document.getElementsByClassName("menu");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablink");
      for (i = 0; i < x.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
      }
      document.getElementById(menuName).style.display = "block";
      evt.currentTarget.firstElementChild.className += " w3-dark-grey";
    }
    document.getElementById("myLink").click();
  </script>

</body>
</html>
