<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Clarinet Section | Tiger Band</title>
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
  <div class="section-fullscreen-container">
    <div class="section-heading clarinets">
      <h1>Clarinets</h1>
      <img src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/q_auto/v1551892366/Section%20Pages/Clarinets/header.jpg">
    </div>

    <div class="section-quote clarinets">
      <p>Welcome to the Clarinets!</p>
      <p>&mdash; Grayson &amp; Jason</p>
    </div>
  </div>

  <div class="heading">
      <h4>Section Leaders</h4>
  </div>

  <div class="section-leaders-content">
    <div class="section-leader">
      <img class="section-leader-photo" src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/q_auto/v1551892365/Section%20Pages/Clarinets/purple-shorts-and-tiger-tails.jpg">
      <h3>Grayson Davis</h3>
      <p>Senior | Mechanical Engineering <br/>Fort Mill, SC</p>
    </div>

    <div class="section-leader">
      <img class="section-leader-photo" src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/q_auto/v1551892365/Section%20Pages/Clarinets/purple-shorts-and-tiger-tails.jpg">
      <h3>Jason Gonzales</h3>
      <p>Senior | Civil Engineering <br/>Summerville, SC</p>
    </div>
  </div>

  <div class="heading section-pages">
      <h4>Traditions</h4>
  </div>

  <div class="media-container">
    <video autoplay loop muted>
      <source src="https://res.cloudinary.com/dnglix0tu/video/upload/v1551267993/WebsiteVideo.mp4" type="video/mp4">
    </video>
  </div>

  <div class="section-traditions">
    <div class="tradition">
      <div class="tradition-tile clarinets image">
        <img src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/q_auto/v1551892365/Section%20Pages/Clarinets/purple-shorts-and-tiger-tails.jpg">
      </div>
      <div class="tradition-tile">
        <div class="tradition-text">
          <h4>Purple Shorts &amp; Tiger Tails</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut magna tortor. Curabitur vehicula lobortis lacus, id dignissim metus interdum eu. Nam finibus lorem quis nibh pharetra, a facilisis diam mattis. Mauris sed arcu a enim vestibulum sodales. Duis feugiat nisl quam, ac lobortis erat rutrum eget. Nunc ultricies felis consectetur, venenatis risus ac, eleifend quam. Sed eros eros, pulvinar a nisl iaculis, suscipit cursus mi. Duis sodales, justo ut varius blandit, diam nisl vehicula turpis, a viverra nunc ex in enim.</p>
        </div>
      </div>
    </div>

    <div class="tradition">
      <div class="tradition-tile">
        <div class="tradition-text">
          <h4>Breezeway Tunnel</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut magna tortor. Curabitur vehicula lobortis lacus, id dignissim metus interdum eu. Nam finibus lorem quis nibh pharetra, a facilisis diam mattis. Mauris sed arcu a enim vestibulum sodales. Duis feugiat nisl quam, ac lobortis erat rutrum eget. Nunc ultricies felis consectetur, venenatis risus ac, eleifend quam. Sed eros eros, pulvinar a nisl iaculis, suscipit cursus mi. Duis sodales, justo ut varius blandit, diam nisl vehicula turpis, a viverra nunc ex in enim.</p>
        </div>
      </div>
      <div class="tradition-tile image">
        <img src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/q_auto/v1551892365/Section%20Pages/Clarinets/breezeway-tunnel-and-pep-talk.jpg">
      </div>
    </div>
  </div>

  <div class="media-container">
    <img src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/q_auto/v1551892365/Section%20Pages/Clarinets/section.jpg">
  </div>

  <div class="auditionButton">
      <a href="/join/winds/" class="boxWrapper">
          <div id="auditionToday" class="boxUIelement rect clarinets">
              <div class="textContainer">
                  <p>Join the Band that Shakes the Southland</p>
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
