<html lang="en">
<?php
  include('includes/home-header.php');
?>
<style media="screen">
html, body {
  height: 100%;
  margin: 0;
  padding: 0;
}
#map {
  height: 100%;
}
</style>
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

      </div>
    </nav>
  </div>
  <div class="row">
    <div class="col m3 l3 hide-on-small-only">
      <div class="collection with-header">
        <div class="collection-header" id="categories">
          <h5>Categories: </h5>
        </div>

      </div>
    </div>
    <div class="col s12 m9 l9">
        <div class="card-panel white news-container" >
          <div class="row" id="full">
            <div class="col s12 m12 l5">
              <h5 id="titles"></h5>
              <p id="date"></p>
            </div>
            <div class="col l7">
            </div>
            <div class="col s12 m12 l12">
              <p class="big" id="description"></p>
              <div id="map"></div>
            </div>
          </div>
        </div>
    </div>
  </div>
  <?php include('includes/scripts.php'); ?>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3dfJUXO8cA8Hfi69sX8o6RciG13N7pnc&callback=initMap"  async defer></script>
  <script type="text/javascript">
  var map;
  function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
      center: {lat: -34.397, lng: 150.644},
      zoom: 8
    });
  }
  </script>
  <script src="js/gmaps.js"></script>
  <script src="js/ajax/ajax_getEvent.js"></script>

</body>
</html>
