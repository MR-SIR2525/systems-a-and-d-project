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