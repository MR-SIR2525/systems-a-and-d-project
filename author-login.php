<!-- Author Login Form -->
<div id="authorLoginModal" class="modal">
  <form class="modal-content animate" action="/author-login-secure.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('authorLoginModal').style.display='none'" class="close" title="Close login form">
        <i class="fa fa-close"></i>
      </span>
      <img src="assets/login-avatar.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="username"><b>Username or email</b></label>
      <input type="text" placeholder="Enter your username or email" name="username" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter password" name="psw" required>

      <label>
        <input type="checkbox" name="remember"> Remember me
      </label>
      <br>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="submit" class="w3-button w3-blue loginbtn">Login</button>
      <span class="psw"><a href="#">Forgot password?</a></span>
    </div>
  </form>
</div>

<script>
  // When the user clicks anywhere outside of the modal, close it
  var modal = document.getElementById('authorLoginModal');

  window.onclick = function (event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
</script>
