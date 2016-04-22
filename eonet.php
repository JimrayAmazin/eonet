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
  <div class="container">
    <h5 class="center-align flow-text">What is <b>EONET</b>?</h5>
    <p class="flow-text">
      More and more NASA imagery is being made available via web services (WMS, WMTS, etc.) and a significant percentage of it is being produced and published in near real time (NRT = within a few hours after acquisition). This ability means that NASA imagery can be used more routinely to examine current natural events as they happen.
    </p>
    <p class="flow-text">
      Using client applications, such as NASA EOSDIS’ Worldview, users can browse the entire globe daily and look for natural events as they occur. Storms are regularly spotted in the tropics, dust storms over deserts, forest fires in the summers. These events are occurring constantly and NASA NRT imagery can represent them all using a variety of different data parameters. However, the user’s experience is tailored, and therefore restricted, by the client application. What if there was an API that provided a curated list of natural events and provided a way to link those events to event-related NRT image layers? Enter EONET.
    </p>
    <p class="flow-text">
      The Earth Observatory Natural Event Tracker (EONET) is a prototype web service with the goal of:
    </p>
    <ol class="number-bullet flow-text">
      <li>Providing a curated source of continuously updated natural event metadata;</li>
      <li>Providing a service that links those natural events to thematically-related web service-enabled image sources (e.g., via WMS, WMTS, etc.).</li>
    </ol>

    <h5 class="center-align flow-text"><b>Curation of Events</b></h5>
    <p class="flow-text">
      The curation of events is a big component of the EONET system and while the technical details are, to an extent, straight forward, the definition of what exactly constitutes an event is fluid and daring us to be constrained. What are the contextual parameters of an event? If one curator defines a specific wildfire in Idaho as a discrete event and another defines the summer wildfire season in the Pacific Northwest as a single event, what does that mean for the end user? If an end user can filter by source/curator does that provide them with ample context for the development of their application?
    </p>
    <p class="flow-text">
      We are still thinking about these issues and how to best represent them within EONET and we encourage you to <a href="http://eonet.sci.gsfc.nasa.gov/contact">get in touch with us</a> if you have ideas or suggestions or use cases that you have developed. To view a list of the sources we are currently tracking for events (both automated and manually) please check out the <a href="http://eonet.sci.gsfc.nasa.gov/api/v2.1/sources">sources feed</a>.
    </p>
  </div>
  <?php include('includes/scripts.php'); ?>
</body>
</html>
