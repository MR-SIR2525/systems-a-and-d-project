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

      /* .bgimg {
        background-position: center;
        background-size: cover;
        background-image: url("/images/book_road.png");
        min-height: 75%;
      } */

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


  <!-- background color and large text to the whole page -->
  <div class="w3-sand w3-grayscale w3-large">
    <header class="w3-container mt-55" id="home">
      <h1>Kaitaia Publishing Collective - Employee Home</h1>
    </header>
    
    <!-- Menu Grid -->
    <div class="w3-container w3-padding-32">
      <div class="w3-row-padding w3-center">

        <!-- First Row -->
        <div class="w3-third w3-margin-bottom">
          <a href="#link1" class="w3-card w3-round-large w3-hover-shadow w3-white w3-padding">
            <h3 class="w3-text-dark-grey">Menu Item 1</h3>
            <p class="w3-text-grey">Description for menu item 1.</p>
          </a>
        </div>
        <div class="w3-third w3-margin-bottom">
          <a href="#link2" class="w3-card w3-round-large w3-hover-shadow w3-white w3-padding">
            <h3 class="w3-text-dark-grey">Menu Item 2</h3>
            <p class="w3-text-grey">Description for menu item 2.</p>
          </a>
        </div>
        <div class="w3-third w3-margin-bottom">
          <a href="#link3" class="w3-card w3-round-large w3-hover-shadow w3-white w3-padding">
            <h3 class="w3-text-dark-grey">Menu Item 3</h3>
            <p class="w3-text-grey">Description for menu item 3.</p>
          </a>
        </div>

        <!-- Second Row -->
        <div class="w3-third w3-margin-bottom">
          <a href="#link4" class="w3-card w3-round-large w3-hover-shadow w3-white w3-padding">
            <h3 class="w3-text-dark-grey">Menu Item 4</h3>
            <p class="w3-text-grey">Description for menu item 4.</p>
          </a>
        </div>
        <div class="w3-third w3-margin-bottom">
          <a href="#link5" class="w3-card w3-round-large w3-hover-shadow w3-white w3-padding">
            <h3 class="w3-text-dark-grey">Menu Item 5</h3>
            <p class="w3-text-grey">Description for menu item 5.</p>
          </a>
        </div>
        <div class="w3-third w3-margin-bottom">
          <a href="#link6" class="w3-card w3-round-large w3-hover-shadow w3-white w3-padding">
            <h3 class="w3-text-dark-grey">Menu Item 6</h3>
            <p class="w3-text-grey">Description for menu item 6.</p>
          </a>
        </div>
        
      </div>
    </div>
  </div>
  <!-- End page content -->


  <!-- Footer -->
  <?php include 'templates/footer.html'; ?>


  <!-- Including the Staff Login Modal here, just before the end of the body -->
  <?php include 'author-login.php'; ?>
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
