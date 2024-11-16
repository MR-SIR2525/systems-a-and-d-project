<div class="w3-top">
  <div class="w3-row w3-padding w3-black">
    <div class="w3-col s3">
      <?php
        require 'utilities/db.php'; // Database connection
        
        $isEmployee = false;
        if (isset($_SESSION['user_id']) && isset($_SESSION['user_email'])) {
          $stmt = $conn->prepare("SELECT email FROM employee WHERE emp_id = ?");
          $stmt->bind_param("i", $_SESSION['user_id']);
          $stmt->execute();
          $stmt->bind_result($db_email);

          if ($stmt->fetch() && $_SESSION['user_email'] == $db_email) {
            $isEmployee = true;
            print '
              <a href="/employee-home.php" class="w3-button w3-block w3-black" title="Employee Home page">
                KAITAIA PUBLISHING COLLECTIVE
              </a>';
          }
        }
        if (!$isEmployee) {
          print '
            <a href="/home.php" class="w3-button w3-block w3-black" title="Go to Home page">
              KAITAIA PUBLISHING COLLECTIVE
            </a>';
        }
      ?>
    </div>

    <div class="w3-col s3">
      <a href="home.php#about" class="w3-button w3-block w3-black">ABOUT</a>
    </div>

    <div class="w3-col s3">
      <button onclick="document.getElementById('staff-add').style.display='block'" 
        class="w3-button w3-block w3-black" title="Add new Employee">Add Employee</button>
    </div>

    <?php
      if ($isEmployee) {
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
        print '
          <div class="w3-col s3">
            <button onclick="document.getElementById(\'authorLoginModal\').style.display=\'block\'" 
              class="w3-button w3-block w3-black">Author Login/Signup</button>
          </div>';
      }
    ?>
  </div>
</div>