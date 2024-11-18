<footer class="w3-center w3-dark-gray w3-padding-48 px-48 w3-large">
  <p class="w3-left-align w3-xlarge mt-0" style="padding-left: 40px;">Kaitaia Publishing Collective</p>

  <ul class="w3-left-align" style="list-style-type:none;">
    <li><a href="/home.php" class="w3-hover-text-black footer-link">Home</a></li>
    <?php
      if ($isEmployee) {
        print 
        '<li><a href="employee-home.php" class="w3-hover-text-black footer-link">Employee Home</a></li>';
      }
      else {
        print 
        '<li>
          <a onclick="document.getElementById(\'staffLoginModal\').style.display=\'block\'" 
          class="w3-hover-text-black footer-link" style="cursor: pointer;">Staff Login</a>
        </li>';
      }
    ?>
    <li><a href="/utilities/phpinfo.php" class="w3-hover-text-black footer-link">php server info</a></li>
  </ul>

</footer>