<!DOCTYPE html>
<html>
<head>
  <title>Kaitaia Publishing Collective | Review Cost/Schedule Estimates</title>
  <?php include 'templates/head-meta.html'; ?>
  <?php include 'templates/head-css.html'; ?>

  <!-- required for pages with the login modal form -->
  <link rel="stylesheet" href="login-modal.css">

  <style>
    body, html {
      height: 100%;
      font-family: "Inconsolata", sans-serif;
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

  <!-- Header and Table section -->
  <section class="w3-white w3-large px-48 pb-48">
    <header class="w3-container mt-55" id="home">
      <h1 class="w3-center">Approve or Reject Cost and Schedule Estimates</h1>
      <p class="w3-center w3-text-grey">Select a manuscript to view an estimate for:</p>
    </header>

    <!-- Manuscripts Table -->
    <div class="w3-responsive w3-margin-top w3-padding-bottom">
      <table class="w3-table-all w3-hoverable">
        <thead>
          <tr class="w3-light-grey">
            <th>...</th>
            <th>Title</th>
            <th>Author</th>
            <th>Email</th>
            <th>Date Received</th>
            <th>Download</th>
          </tr>
        </thead>

        <tbody>
          <?php include 'templates/dummy-table-rows.php'; ?>
        </tbody>
      </table>
    </div>
  </section>

  <!-- Approve/Deny Estimates Printout -->
  <section class="w3-light-grey w3-large px-64 pt-24 pb-48">
    <div>
      <h3>Selected: <b>The Great Adventure by John Doe</b></h3>

      <div class="w3-container w3-card w3-white w3-round py-48 px-48">
        <table class="w3-table w3-border-0">
          <tr>
            <td><b>Cost Estimation ($)</b></td>
            <td>$ 10,000</td>
          </tr>
          <tr>
            <td><b>Time to Print Estimate (weeks)</b></td>
            <td>4</td>
          </tr>
          <tr>
            <td><b>Estimated Printing Completion Date</b></td>
            <td>2024-12-15</td>
          </tr>
          <tr>
            <td><b>Estimated Book Launch Date</b></td>
            <td>2024-01-20</td>
          </tr>
          <tr>
            <td><b>Comments</b></td>
            <td>I really like this one. Hope you approve. -Alan Bradley.<br>Give the author a 5% discount (he's a friend).  -Maria</td>
          </tr>
        </table>
        <br>

        <!-- Approval Section -->
        <div class="w3-row w3-margin-top">
          <div class="w3-left">
            <button type="submit" name="approval" value="approve" class="w3-button w3-green w3-round w3-block">Approve</button>
          </div>
          <div class="w3-right">
            <button type="submit" name="approval" value="deny" class="w3-button w3-red w3-round w3-block">Deny</button>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Footer -->
  <?php include 'templates/footer.php'; ?>


  <!-- Including the Staff Login Modal here, just before the end of the body -->
  <?php include 'author-login.html'; ?>
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
