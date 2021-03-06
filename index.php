<?php
    require "header.php";
?>

  <head>
	  <link rel="icon" href="http://bildungssysteme.eu/favicon.ico">
  </head>

  <header class="w3-container w3-theme w3-center" style="padding:128px 16px">
    <h1 class="w3-margin w3-jumbo">Erasmus+</h1>
    <p class="w3-xlarge">Bildungssystemе in Europa</p>
  </header>

<div class="row">
 <div class="column">
   <a href="country-presentation.php?germany"><img src="img/germany-flag.png" style="width:auto" title="Germany" alt="Germany"></a>
 </div>
 <div class="column">
   <a href="country-presentation.php?croatia"><img src="img/croatia-flag.png" style="width:auto" title="Croatia" alt="Croatia"></a>
 </div>
 <div class="column">
   <a href="country-presentation.php?austria"><img src="img/austria-flag.png" style="width:auto" title="Austria" alt="Austria"></a>
 </div>
 <div class="column">
   <a href="country-presentation.php?greece"><img src="img/greece-flag.png" style="width:auto" title="Greece" alt="Greece"></a>
 </div>
 <div class="column">
   <a href="country-presentation.php?turkey"><img src="img/turkey-flag.png" style="width:auto" title="Turkey" alt="Turkey"></a>
 </div>
 <div class="column">
   <a href="country-photos.php?bulgaria"><img src="img/bulgaria-flag.png" style="width:auto" title="Bulgaria" alt="Bulgaria"></a>
 </div>
</div>

<center><img src="img/erasmus-logo2.png" width="800px" title="Erasmus" alt="Erasmus"></center>
<br>
<embed src="presentations/main-description.pdf" type="application/pdf" width="100%" height="1000px" />';

<!-- First Grid -->
<!-- <div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>Lorem Ipsum</h1>
      <h5 class="w3-padding-32">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h5>

      <p class="w3-text-grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
        laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>

    <div class="w3-third w3-center">
      <i class="fa fa-anchor w3-padding-64 w3-text-red"></i>
    </div>
  </div>
</div> -->

<!-- Second Grid -->
<!-- <div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-third w3-center">
      <i class="fa fa-coffee w3-padding-64 w3-text-red w3-margin-right"></i>
    </div>

    <div class="w3-twothird">
      <h1>Lorem Ipsum</h1>
      <h5 class="w3-padding-32">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h5>

      <p class="w3-text-grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
        laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
  </div>
</div> -->


<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>


<?php
    require "footer.php";
?>
