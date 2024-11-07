<!-- Modal Login Form -->
<div id="id01" class="w3-modal" style="cursor: pointer; display: block;">
  <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px;cursor:auto">
  
    <div class="w3-center"><br>
   <span onclick="document.getElementById('id01').style.display='none'" title="Close Modal" class="w3-button w3-hover-text-grey w3-container w3-display-topright w3-xxlarge">×</span>
     <img src="img_avatar2.png" alt="Avatar" style="width:40%" class="w3-circle w3-margin-top">
    </div>

    <div class="w3-container">
      <div class="w3-section">
        <label><b>Username</b></label>

        <input autocomplete="off" class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username">

        <label><b>Password</b></label>
        <input autocomplete="new-password" class="w3-input w3-border" type="password" placeholder="Enter Password">
        
        <button class="w3-button w3-block w3-green w3-section w3-padding" onclick="document.getElementById('id01').style.display='none'">Login</button>
        <label><input type="checkbox" checked="checked"> Remember me</label>

      </div>
    </div>

    <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
      <button onclick="document.getElementById('id01').style.display='none'" type="button" class="ws-btn w3-red">Cancel</button>
      <span class="w3-right w3-padding w3-hide-small">Forgot <a href="javascript:void(0)" onclick="document.getElementById('id01').style.display='none'">password?</a></span>
    </div>

  </div>
</div>

<script>
    // When the user clicks anywhere outside of the modal, close it
    var modal = document.getElementById('id01');

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
