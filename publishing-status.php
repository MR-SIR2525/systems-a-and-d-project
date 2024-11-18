<!DOCTYPE html>
<html>
<head>
  <title>Publishing Status | Kaitaia Publishing Collective</title>
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


  <section class="w3-white w3-large px-48 pb-48">
    <header class="w3-container mt-55" id="home">
      <h1 class="w3-center">Publishing Status</h1>
      <p class="w3-center w3-text-grey">Select a manuscript from the list to manage its publishing status:</p>
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

  <!-- Publishing Status Update Form -->
  <section class="w3-light-grey w3-large px-64 pt-24 pb-48">
    <div>
      <form action="#" method="POST" class="w3-container w3-card w3-white w3-round w3-padding">
        <h3>Selected: <b>The Great Adventure by John Doe</b></h3>

        <!-- Update Publishing Status -->
        <label for="publishing_status" class="w3-text-dark-grey"><b>Update Publishing Status</b></label>
        <select id="publishing_status" name="publishing_status" class="w3-select w3-border w3-round w3-margin-bottom">
          <option value="" disabled selected>Choose a status</option>
          <option value="not_sent">Not sent to printer</option>
          <option value="printer_has_it">Printer has it</option>
          <option value="being_printed">Being printed</option>
          <option value="ready_to_publish">Ready to publish</option>
        </select>

        <!-- Save Button -->
        <button type="submit" class="w3-button w3-blue w3-round w3-block">Save Status</button>
      </form>
    </div>
  </section>


  <!-- Footer -->
  <?php include 'templates/footer.php'; ?>


  <!-- Including modals here, just before the end of the body -->
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
