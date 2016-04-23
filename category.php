<html lang="en">
<?php
  include('includes/home-header.php');
?>
<body>
  <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper">
        <img src="images/nasa_logo.png" class="brand-logo left">
        <a href="#" class="logo-text"><b>EO</b>NET</a>
        <a href="#" data-activates="side-menu" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right">
          <li><a href="index.php">Home</a></li>
          <li><a href="eonet.php">About Eonet</a></li>
          <li><a href="#">About Us</a></li>
        </ul>
        <ul class="side-nav" id="side-menu">
          <li><a href="#"><b>Mamaya</b></a></li>
        </ul>
      </div>
    </nav>
  </div>
  <div class="row">
    <div class="col m3 l3 hide-on-small-only">
      <div class="collection with-header" id="categories">
        <div class="collection-header">
          <h5>Categories: </h5>
        </div>
      </div>
    </div>
    <div class="col s12 m9 l9" id="head-container-category">
      <b class="hide-on-med-and-up">Latest News</b>
      <h5 class="hide-on-small-only">Latest News</h5>
    </div>
  </div>
  <?php include('includes/scripts.php'); ?>
  <script src="js/ajax/ajax_getEvent.js"></script>
</body>
</html>
