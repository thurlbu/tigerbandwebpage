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
    <title>Drum Majors | Tiger Band</title>
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

<?php
    include('../../header.php');
    echo getHeader('sections');
?>

<body>
  <div class="section-fullscreen-container">
    <div class="section-heading">
      <h1>Drum Majors</h1>
      <img src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/v1572459896/Section%20Pages/Drum%20Majors/header.jpg">
    </div>

    <div class="section-quote">
      <p>Welcome to the smallest &mdash; and most selective &mdash; section in Tiger Band! As drum majors we are chosen by our peers to be great conductors, leaders, and guardians of the Clemson spirit, both on and off the field. We work as a tight-knit team to solve problems and make Tiger Band a welcoming and exciting place for everyone. Are you ready to see what it takes to wear the white uniform?</p>
      <p>&mdash; Stephanie, Victor, &amp; Zach</p>
    </div>
  </div>

  <div class="section-leaders-content">
    <div class="section-leader">
      <img class="section-leader-photo" src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/v1572460818/Section%20Pages/Drum%20Majors/stephanie-linke.jpg">
      <h3>Stephanie Linke</h3>
      <p>Senior | Mechanical Engineering <br/>Summerville, SC</p>
    </div>
    <div class="section-leader">
      <img class="section-leader-photo" src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/v1572460818/Section%20Pages/Drum%20Majors/victor-fleifel.jpg">
      <h3>Victor Fleifel</h3>
      <p>Junior | Civil Engineering <br/>Spartanburg, SC</p>
    </div>
    <div class="section-leader">
      <img class="section-leader-photo" src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/v1572478321/Section%20Pages/Drum%20Majors/zach-jordan.jpg">
      <h3>Zach Jordan</h3>
      <p>Senior | Electrical Engineering / Performing Arts <br/>Cayce, SC</p>
    </div>
  </div>

  <div class="heading section-pages">
      <h4>Traditions</h4>
  </div>

  <!-- <div class="media-container">
    <video playsinline autoplay loop muted>
        <source src="https://d3fdmt0abme096.cloudfront.net/section-pages/trumpet.mp4" type="video/mp4">
    </video>
  </div> -->

  <div class="section-traditions">
    <div class="tradition">
      <div class="tradition-tile image">
        <img src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/v1572461912/Section%20Pages/Drum%20Majors/brick.jpg">
      </div>
      <div class="tradition-tile">
        <div class="tradition-text">
          <h4>Bruce's Brick</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
    </div>

    <div class="tradition">
      <div class="tradition-tile">
        <div class="tradition-text">
          <h4>Handshakes</h4>
          <p>Before we take the field for the pregame show, we greet each other with a special handshake. Each drum major has their own handshake with each of the other drum majors and the feature twirler, for a total of 6 unique handshakes across the section. From hand clasping and fist bumping to toe-tapping and even rock-paper-scissors, we use a variety of moves to ensure that no two handshakes are alike!</p>
        </div>
      </div>
      <div class="tradition-tile image">
        <img src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/v1572463269/Section%20Pages/Drum%20Majors/handshake.jpg">
      </div>
    </div>


    <div class="tradition">
      <div class="tradition-tile image">
        <img src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/v1572461058/Section%20Pages/Drum%20Majors/dancing.jpg">
      </div>
      <div class="tradition-tile">
        <div class="tradition-text">
          <h4>Dancing</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="media-container drum-major">
    <img src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/v1572462052/Section%20Pages/Drum%20Majors/group.jpg">
  </div>

  <div class="auditionButton">
      <a href="/join/" class="boxWrapper">
          <div id="auditionToday" class="boxUIelement rect drum-major">
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
