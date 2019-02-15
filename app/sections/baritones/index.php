<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Baritone Section | Tiger Band</title>
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
  <div class="section-heading">
    <h1>Baritones</h1>
    <img src="/img/action-cover.jpg"> <!--- FORMAT THIS --->
  </div>

  <div class="section-quote">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut magna tortor. Curabitur vehicula lobortis lacus, id dignissim metus interdum eu. Nam finibus lorem quis nibh pharetra, a facilisis diam mattis. Mauris sed arcu a enim vestibulum sodales. Duis feugiat nisl quam, ac lobortis erat rutrum eget. Nunc ultricies felis consectetur, venenatis risus ac, eleifend quam. Sed eros eros, pulvinar a nisl iaculis, suscipit cursus mi. Duis sodales, justo ut varius blandit, diam nisl vehicula turpis, a viverra nunc ex in enim. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
    <p>&mdash; Chandler &amp; Alyssa</p>
  </div>

  <div class="heading">
      <h4>Section Leaders</h4>
  </div>

  <div class="section-leaders-content">
    <div class="section-leader">
      <img class="section-leader-photo" src="/img/section-leaders/alyssa.jpg">
      <h3>Lee Maiden</h3>
      <p>Year | Major <br/>Hometown</p>
    </div>
    <div class="section-leader">
      <img class="section-leader-photo" src="/img/section-leaders/chandler.jpg">
      <h3>Lee Maiden</h3>
      <p>Year | Major <br/>Hometown</p>
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
      <img src="/img/baritones.jpg">
    </div>
    <div class="tradition-tile">
      <div class="tradition-text">
        <h4>Pedialyte</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut magna tortor. Curabitur vehicula lobortis lacus, id dignissim metus interdum eu. Nam finibus lorem quis nibh pharetra, a facilisis diam mattis. Mauris sed arcu a enim vestibulum sodales. Duis feugiat nisl quam, ac lobortis erat rutrum eget. Nunc ultricies felis consectetur, venenatis risus ac, eleifend quam. Sed eros eros, pulvinar a nisl iaculis, suscipit cursus mi. Duis sodales, justo ut varius blandit, diam nisl vehicula turpis, a viverra nunc ex in enim.</p>
      </div>
    </div>

    <div class="tradition-tile">
      <div class="tradition-text">
        <h4>Diversity</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut magna tortor. Curabitur vehicula lobortis lacus, id dignissim metus interdum eu. Nam finibus lorem quis nibh pharetra, a facilisis diam mattis. Mauris sed arcu a enim vestibulum sodales. Duis feugiat nisl quam, ac lobortis erat rutrum eget. Nunc ultricies felis consectetur, venenatis risus ac, eleifend quam. Sed eros eros, pulvinar a nisl iaculis, suscipit cursus mi. Duis sodales, justo ut varius blandit, diam nisl vehicula turpis, a viverra nunc ex in enim.</p>
      </div>
    </div>
    <div class="tradition-tile">
      <img src="/img/baritones.jpg">
    </div>
  </div>

  <div class="media-container">
    <img src="/img/section-photo-smiling.jpg">
  </div>

  <div class="auditionButton">
      <a href="/join/winds/" class="boxWrapper">
          <div id="auditionToday" class="boxUIelement rect">
              <div class="textContainer">
                  <p>Join the Band that Shakes the Soundland!</p>
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
