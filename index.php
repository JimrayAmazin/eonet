<html lang="en">
<?php
  include('includes/home-header.php');
?>
<body>
  <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper">
        <img src="images/nasa_logo.png" class="brand-logo left hide-on-small-only">
        <a href="#" class="logo-text"><b>EO</b>NET</a>
        <a href="#" data-activates="side-menu" class="button-collapse hide-on-med-only"><i class="material-icons">menu</i></a>
        <ul class="right">
          <li><a href="#">Home</a></li>
          <li><a href="eonet.php">About Eonet</a></li>
          <li class="hide-on-small-only"><a href="#">About Us</a></li>
        </ul>
        <ul class="side-nav" id="side-menu">
          <li><a href="#" class="center-align"><b>CATEGORIES</b></a></li>
          <li><a href="categories.php">Dust and Haze</a></li>
          <li><a href="#!">Floods</a></li>
          <li><a href="#!">Sea and Lake Ice</a></li>
          <li><a href="#!">Severe Storms</a></li>
          <li><a href="#!">Volcanoes</a></li>
          <li><a href="#!">Water Color</a></li>
          <li><a href="#!">Wild Fires</a></li>
        </ul>
      </div>
    </nav>
  </div>
  <div class="row">
    <div class="col m3 l3 hide-on-small-only">
      <div class="collection with-header">
        <div class="collection-header">
          <h5>Categories: </h5>
        </div>
        <a href="categories.php" class="collection-item active">Dust and Haze</a>
        <a href="#!" class="collection-item">Floods</a>
        <a href="#!" class="collection-item">Sea and Lake Ice</a>
        <a href="#!" class="collection-item">Severe Storms</a>
        <a href="#!" class="collection-item">Volcanoes</a>
        <a href="#!" class="collection-item">Water Color</a>
        <a href="#!" class="collection-item">Wild Fires</a>
      </div>
    </div>
    <div class="col s12 m9 l9">
      <h5 class="hide-on-med-and-up">Latest News</h5>
      <h5 class="hide-on-small-only">Latest News</h5>
        <div class="card-panel white news-container">
          <div class="row">
            <div class="col s12 l5">
              <h5><a href="article.php" class="truncate"> Title Name s,mnaks dlksjdlkasjd salkdjlkasjd alskjd </a></h5>
              <p class="time">August 8, 1440</p>
            </div>
            <div class="col l7">
              <p class="time hide"> August 8, 1996 </p>
            </div>
            <div class="col l12">
              <p class="big">The Rocky Mountain Fire in the Shenandoah National Park has resulted in the closure of many sections of the Appalachian Trail and several other trails in the park.</p>
            </div>
          </div>
        </div>
        <div class="card-panel white news-container">
          <div class="row">
            <div class="col s12 l5">
              <h5><a href="article.php" class="truncate"> Title Name </a></h5>
              <p class="time">August 8, 1440</p>
            </div>
            <div class="col l7">
              <p class="time hide"> August 8, 1996 </p>
            </div>
            <div class="col l12">
              <p class="big">The Rocky Mountain Fire in the Shenandoah National Park has resulted in the closure of many sections of the Appalachian Trail and several other trails in the park.</p>
            </div>
          </div>
        </div>
    </div>
  </div>
  <?php include('includes/scripts.php'); ?>
</body>
</html>
