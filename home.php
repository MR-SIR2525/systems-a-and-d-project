<!DOCTYPE html>
<html>
  <head>
    <title>Kaitaia Publishing Collective | Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">

    <!-- required for pages with the login modal form -->
    <link rel="stylesheet" href="login-modal.css">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

<!-- Links (sit on top) -->
<div class="w3-top">
  <div class="w3-row w3-padding w3-black">
    <div class="w3-col s3">
      <a href="/home.php" class="w3-button w3-block w3-black">HOME</a>
    </div>

    <div class="w3-col s3">
      <a href="#about" class="w3-button w3-block w3-black">ABOUT</a>
    </div>

    <div class="w3-col s3">
      <button onclick="document.getElementById('staff-add').style.display='block'" 
        class="w3-button w3-block w3-black" title="Add new Employee">Add Employee</button>
    </div>

    <?php
      if (isset($_SESSION['user_id'])) {
        print
          '<div class="w3-col s3">
            <div class="w3-dropdown-hover w3-block">
              <button class="w3-button w3-block w3-black">Welcome, ' . $_SESSION['user_first_name'] . '</button>
              <div class="w3-dropdown-content w3-bar-block w3-card-4">
                <a href="profile.php" class="w3-bar-item w3-button">Profile</a>
                <a href="logout.php" class="w3-bar-item w3-button">Logout</a>
              </div>
            </div>
          </div>';
      }
      else {
        print
          '<div class="w3-col s3">
            <button onclick="document.getElementById(\'id01\').style.display=\'block\'" 
              class="w3-button w3-block w3-black">Staff Login</button>
          </div>';
      }
    ?>
  </div>
</div>

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
<?php include 'footer.html'; ?>


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
