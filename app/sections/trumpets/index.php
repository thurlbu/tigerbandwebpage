<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Trumpet Section | Tiger Band</title>
    <link rel="stylesheet" href="/css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="description" content="The Band That Shakes the Southland">
    <meta name="keywords" content="tiger, band, clemson, university, shakes, southland">
</head>

<input type='checkbox' id='mobileMenu'>

<div id="mobileHeader">
	<a href="/"><img id="tbMobileLogo" src="/img/logos/TigerBandMobileLogo.png" width="120"></a>
	<label for="mobileMenu" id="menuButton"><span>=</span></label>
</div>

<label id='mobileScreenShade' for='mobileMenu'></label>

<!--- NAVIGATION --->

<nav>
    <a href="/">Home</a>
    <a href="/this_season/">This Season</a>
    <a href="/join/">Join</a>
    <a href="/bands/">Bands</a>
    <a href="/organizations/">Organizations</a>
    <a href="/staff/">Staff</a>
    <a href="/sections/" class="active">Sections</a>
    <a href="/contact/">Contact</a>
</nav>

<body>
  <div class="section-heading" id="trumpet-section-heading">
    <h1>Trumpets</h1>
    <img src="/img/sections/trumpets/header.png">
  </div>

  <div class="section-quote" id="trumpet-section-quote">
    <p>Welcome to the Trumpet Section! We are an awesome fun loving group of people that also play trumpet together. Throughout the season we will continually beat the trombones in our battles, have countless unforgettable experiences cheering on our Clemson Tigers, and have a great paper plate ceremony at the end of the season. Here is a little sneak peak of the Clemson University Tiger Town Trumpets. </p>
    <p>&mdash; Alicia, Mac, &amp; Nick</p>
  </div>

  <div class="heading">
      <h4>Section Leaders</h4>
  </div>

  <div class="section-leaders-content">
    <div class="section-leader">
      <img class="section-leader-photo" src="/img/sections/trumpets/alicia-cameron.png">
      <h3>Alicia Cameron</h3>
      <p>Senior | Industrial Engineering <br/>Mt. Pleasant, SC</p>
    </div>
    <div class="section-leader">
      <img class="section-leader-photo" src="/img/sections/trumpets/mac-mccrary.png">
      <h3>Mac McCrary</h3>
      <p>Junior | Performing Arts <br/>Walhalla, SC</p>
    </div>
    <div class="section-leader">
      <img class="section-leader-photo" src="/img/sections/trumpets/nick-gustafson.png">
      <h3>Nick Gustafson</h3>
      <p>Senior | Computer Science <br/>Columbia, SC</p>
    </div>
  </div>

  <div class="heading section-pages">
      <h4>Traditions</h4>
  </div>

  <div class="media-container">
    <video autoplay loop muted>
        <source src="https://s3.amazonaws.com/tiger-band-website/WebsiteVideo.mp4" type="video/mp4">
    </video>
  </div>

  <div class="section-traditions">
    <div class="tradition-tile">
      <img src="/img/sections/trumpets/trumpets.png">
    </div>
    <div class="tradition-tile">
      <div class="tradition-text">
        <h4>Trumpet VS Trombone Battles</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut magna tortor. Curabitur vehicula lobortis lacus, id dignissim metus interdum eu. Nam finibus lorem quis nibh pharetra, a facilisis diam mattis. Mauris sed arcu a enim vestibulum sodales. Duis feugiat nisl quam, ac lobortis erat rutrum eget. Nunc ultricies felis consectetur, venenatis risus ac, eleifend quam. Sed eros eros, pulvinar a nisl iaculis, suscipit cursus mi. Duis sodales, justo ut varius blandit, diam nisl vehicula turpis, a viverra nunc ex in enim.</p>
      </div>
    </div>

    <div class="tradition-tile">
      <div class="tradition-text">
        <h4>Trumpet Thanksgiving</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut magna tortor. Curabitur vehicula lobortis lacus, id dignissim metus interdum eu. Nam finibus lorem quis nibh pharetra, a facilisis diam mattis. Mauris sed arcu a enim vestibulum sodales. Duis feugiat nisl quam, ac lobortis erat rutrum eget. Nunc ultricies felis consectetur, venenatis risus ac, eleifend quam. Sed eros eros, pulvinar a nisl iaculis, suscipit cursus mi. Duis sodales, justo ut varius blandit, diam nisl vehicula turpis, a viverra nunc ex in enim.</p>
      </div>
    </div>
    <div class="tradition-tile">
      <img src="/img/sections/trumpets/trumpets.png">
    </div>

    <div class="tradition-tile">
      <img src="/img/sections/trumpets/trumpets.png">
    </div>
    <div class="tradition-tile">
      <div class="tradition-text">
        <h4>Our Mascot: Herbert</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut magna tortor. Curabitur vehicula lobortis lacus, id dignissim metus interdum eu. Nam finibus lorem quis nibh pharetra, a facilisis diam mattis. Mauris sed arcu a enim vestibulum sodales. Duis feugiat nisl quam, ac lobortis erat rutrum eget. Nunc ultricies felis consectetur, venenatis risus ac, eleifend quam. Sed eros eros, pulvinar a nisl iaculis, suscipit cursus mi. Duis sodales, justo ut varius blandit, diam nisl vehicula turpis, a viverra nunc ex in enim.</p>
      </div>
  </div>

  <div class="media-container" id="trumpet-section-photo">
    <img src="/img/sections/trumpets/section-photo.png">
  </div>

  <div class="auditionButton">
      <a href="/join/winds/" class="boxWrapper">
          <div id="auditionToday" class="boxUIelement rect">
              <div class="textContainer">
                  <p>Are you ready to join the Tiger Town Trumpets?</p>
              </div>
          </div>
      </a>
  </div>

<!--- FOOTER --->

<?php
    readfile("../../footer.html");
?>
</body>

</html>
