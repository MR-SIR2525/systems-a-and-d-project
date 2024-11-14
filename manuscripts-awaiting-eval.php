<!DOCTYPE html>
<html>
<head>
  <title>Kaitaia Publishing Collective | Manuscripts Awaiting Evaluation</title>
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


  <!-- Background color and large text to the whole section -->
  <section class="w3-white w3-large px-48 pb-48">
    <header class="w3-container mt-55" id="home">
      <h1 class="w3-center">Manuscripts Awaiting Evaluation</h1>
      <p class="w3-center w3-text-grey">Select a manuscript to evaluate/update from the list below:</p>
    </header>

    <!-- Manuscript Table -->
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
          <?php
            $titles = array("The Great Adventure", "Mystery of the Old House", "Journey to the Unknown", "Secrets of the Jungle");
            $authors = array("John Doe", "Jane Smith", "Robert Brown", "Emily Davis");
            $emails = array("john.doe@example.com", "jane.smith@example.com", "robert.brown@example.com", "emily.davis@example.com");
            $dates = array("2023-11-10", "2023-11-11", "2023-11-12", "2023-11-13");

            for ($i = 0; $i < count($titles); $i++) {
              // simulate that we selected this row.
              if ($titles[$i] == "The Great Adventure") {
                print '<tr class="w3-grey w3-hover-grey">';
              }
              else {
                print '<tr>';
              }

              print '
                <td><input type="checkbox" class="w3-check" ' . ($titles[$i] == "The Great Adventure" ? 'checked' : '') . '/></td>
                <td>' . $titles[$i] . '</td>
                <td>' . $authors[$i] . '</td>
                <td>' . $emails[$i] . '</td>
                <td>' . $dates[$i] . '</td>
                <td>
                  <a href="#" class="w3-button w3-small w3-blue w3-round w3-margin-left">
                    <i class="fa fa-download"></i>
                  </a>
                </td>
              </tr>';
            }
          ?>
        </tbody>
      </table>
    </div>
  </section>

  <section class="w3-light-grey w3-large px-64 pt-24 pb-48">
    <!-- Manuscript Evaluation Form -->
    <div>
      <h3>Selected: <b>The Great Adventure by John Doe</b></h3>
      <form action="#" method="POST" class="w3-container w3-card w3-white w3-round w3-padding">
        <label for="comments" class="w3-text-dark-grey"><b>Comments</b></label>
        <textarea id="comments" name="comments" rows="4" class="w3-input w3-border w3-round" 
          placeholder="(optional) Enter your comments here..."></textarea>
        
        <div class="w3-row w3-margin-top">
          <div class="w3-half">
            <input class="w3-check" type="radio" name="evaluation" id="approve" value="approve" required>
            <label for="approve">Approve</label>
          </div>
          <div class="w3-half">
            <input class="w3-check" type="radio" name="evaluation" id="deny" value="deny">
            <label for="deny">Deny</label>
          </div>
        </div>

        <button type="submit" class="w3-button w3-blue w3-round w3-margin-top">Submit</button>
      </form>
    </div>
  </section>
  

  


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
