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
  <div class="w3-light-grey w3-grayscale w3-large">
    <header class="w3-container mt-55" id="home">
      <h1>Kaitaia Publishing Collective - Employee Home</h1>
    </header>

    <!-- Menu Grid -->
    <div class="w3-container w3-padding-32">
      <div class="w3-row-padding w3-center">

        <?php
          $menu_items = array(
            "Manuscripts Awaiting Evaluation",
            "Cost and Schedule Estimation",
            "Approve/Deny Estimates",
            "Draft and Send Contracts",
            "Publishing Status"
          );

          for ($i = 0; $i < count($menu_items); $i++) {
            print '
              <div class="w3-third w3-margin-bottom" style="padding:0px">
                <a href="#link' . $i . '" class="w3-card br-10 w3-hover-grey w3-white w3-block">
                  <h3 class="w3-text-dark-grey">' . $menu_items[$i] . '</h3>
                </a>
              </div>
            ';
          }

        ?>
        
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
