<!DOCTYPE html>
<html>
  <head>
    <title>Kaitaia Publishing Collective | Staff Home</title>
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


  <!-- background color and large text to the whole section -->
  <section class="w3-light-grey w3-grayscale w3-large px-48 w3-container">
    <header class="w3-container mt-55" id="home">
      <h1 class="w3-center">Employee Home</h1>
      <p class="w3-center w3-text-grey">Select a menu card to get started:</p>
    </header>

    <!-- Custom Flexbox Menu Grid -->
    <div class="menu-grid">
      <?php
        $menu_links = array(
          "manuscripts-awaiting-eval.php",
          "cost-schedule-estimation.php",
          "review-estimates.php",
          "contracts.php",
          "publishing-status.php"
        );

        $menu_items = array(
          "Manuscripts Awaiting Evaluation",
          "Cost and Schedule Estimation",
          "Approve/Deny Estimates",
          "Draft and Send Contracts",
          "Publishing Status"
        );

        $item_desc = array( //parallel array to menu_items
          "Manuscripts for Maria to pass or reject",
          "to pass on to Management for another evaluation",
          "Management approves or rejects the estimates",
          "Legal team uploads drafts/final version for send off",
          "View or update the printing/publishing status"
        );

        foreach ($menu_items as $index => $item) {
          print '
            <div class="menu-card w3-card w3-round-large w3-white w3-hover-shadow w3-hover-light-grey">
              <a href="' . $menu_links[$index] . '" class="menu-card-link">
                <h3 class="w3-text-dark-grey">' . $item . '</h3>
                <p class="w3-text-grey w3-medium">' . $item_desc[$index] . '</p>
              </a>
            </div>
          ';
        }
      ?>
    </div>
  </section>
  <!-- End page content -->


  <!-- Footer -->
  <?php include 'templates/footer.php'; ?>


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
