<!DOCTYPE html>
<html>
  <head>
    <title>Kaitaia Publishing Collective | Home</title>
    <?php include 'templates/head-meta.html'; ?>
    <?php include 'templates/head-css.html'; ?>

    <!-- required for pages with the login modal form -->
    <link rel="stylesheet" href="login-modal.css">
  
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
  ?>

<!-- Nav Links (sit on top) -->
<?php include 'templates/nav.php'; ?>

<!-- Header with image -->
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-middle w3-center">
    <span class="w3-text-white" style="font-size:75px">Kaitaia Publishing Collective</span>
  </div>
</header>

<!-- Add a background color and large text to the whole page -->
<div class="w3-sand w3-grayscale w3-large">

<!-- Button Container -->
<div class="w3-container w3-padding" id="upload_container">
  <div class="w3-content w3-center" style="max-width:700px">
    <form action="input.php" method="POST" class="center-form">
      <button class="w3-button w3-blue" type="submit">Upload a Manuscript</button>
    </form>
  </div>
</div>

<!-- End page content -->
</div>


<!-- Footer -->
<?php include 'templates/footer.html'; ?>


<!-- Including the Staff Login Modal here, just before the end of the body -->
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
