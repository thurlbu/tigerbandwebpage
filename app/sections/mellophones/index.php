<!DOCTYPE html>
<html>
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-8965430-3"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-8965430-3');
  </script>
    <meta charset="utf-8">
    <title>Mellophones Section | Tiger Band</title>
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
    <div class="section-heading">
      <h1>Mellophones</h1>
      <img src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/q_auto/v1551895644/Section%20Pages/Mellophones/thumbnail.jpg">
    </div>

    <div class="section-quote">
      <p></p>
      <p>&mdash; Chris &amp; Raz</p>
    </div>
  </div>

  <div class="heading">
      <h4>Section Leaders</h4>
  </div>

  <div class="section-leaders-content">
    <div class="section-leader">
      <img class="section-leader-photo" src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/q_auto/v1551895554/Section%20Pages/Mellophones/chris-haigh.jpg">
      <h3>Chris Haigh</h3>
      <p>Senior | Computer Science<br/>Mount Pleasant, SC</p>
    </div>
    <div class="section-leader">
      <img class="section-leader-photo" src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/q_auto/v1551895554/Section%20Pages/Mellophones/sarah-raz.jpg">
      <h3>Sarah “Raz” Razavi</h3>
      <p>Senior | American Sign Language<br/>Atlanta, GA</p>
    </div>
  </div>

  <div class="heading section-pages">
      <h4>Traditions</h4>
  </div>

  <div class="media-container">
    <video playsinline autoplay loop muted>
        <source src="https://s3.amazonaws.com/tiger-band-website/section-pages/Mellophone+page.mp4" type="video/mp4">
    </video>
  </div>

  <div class="section-traditions">
    <div class="tradition">
      <div class="tradition-tile image">
        <img src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/q_auto/v1553466017/Section%20Pages/Mellophones/yoga.jpg">
      </div>
      <div class="tradition-tile">
        <div class="tradition-text">
          <h4>Yoga</h4>
          <p>Before big games, we like to warm up as a section by doing a quick yoga routine. It’s a great way to stretch and also just have fun as a group!</p>
        </div>
      </div>
    </div>

    <div class="tradition">
      <div class="tradition-tile">
        <div class="tradition-text">
          <h4>Mello Stack</h4>
          <p>If you’re in our section, you’d better know your Mello’s serial number; our favorite picture tradition is stacking up all our instruments. Why? No clue. It looks cool and it’s fun to put together! Taking it apart, however...</p>
        </div>
      </div>
      <div class="tradition-tile image">
        <img src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/q_auto/v1551895549/Section%20Pages/Mellophones/section.jpg">
      </div>
    </div>

    <div class="tradition">
      <div class="tradition-tile image">
        <img src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/q_auto/v1553650425/Section%20Pages/Mellophones/man-of-steel.jpg">
      </div>
      <div class="tradition-tile">
        <div class="tradition-text">
          <h4>Man of Steel</h4>
          <p>Before each home game, we all gather together in a circle and play Man of Steel. It’s a great way to “warm up” and get super hype for the upcoming game!</p>
        </div>
      </div>
    </div>
  </div>

  <div class="media-container">
    <img src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/q_auto/v1551895549/Section%20Pages/Mellophones/section.jpg">
  </div>

  <div class="auditionButton">
      <a href="/join/winds/" class="boxWrapper">
          <div id="auditionToday" class="boxUIelement rect mellophone">
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
