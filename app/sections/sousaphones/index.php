<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Sousaphone Section | Tiger Band</title>
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
      <h1>Sousaphones</h1>
      <img src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/q_auto/v1551910607/Section%20Pages/Sousaphones/header.jpg">
    </div>

    <div class="section-quote">
      <p>Welcome to the (in our unbiased opinion) BEST section in Tiger Band! We’re loud, we’re proud, and we always move as a crowd.</p>
      <p>&mdash; LK &amp; G</p>
    </div>
  </div>

  <div class="heading">
      <h4>Section Leaders</h4>
  </div>

  <div class="section-leaders-content">
    <div class="section-leader">
      <img class="section-leader-photo" src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/q_auto/v1551910608/Section%20Pages/Sousaphones/laura-kate-reid.jpg">
      <h3>Laura Kate Reid</h3>
      <p>Junior | Mathematical Sciences <br/>Aiken, SC</p>
    </div>
    <div class="section-leader">
      <img class="section-leader-photo" src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/q_auto/v1551910607/Section%20Pages/Sousaphones/graham-jackson.jpg">
      <h3>Graham Jackson</h3>
      <p>Senior | Mechanical Engineering <br/>Lexington, SC</p>
    </div>
  </div>

  <div class="heading section-pages">
      <h4>Traditions</h4>
  </div>

  <div class="media-container">
    <video autoplay loop muted>
        <source src="https://s3.amazonaws.com/tiger-band-website/section-pages/sousaphone.mp4" type="video/mp4">
    </video>
  </div>

  <div class="section-traditions">
    <div class="tradition">
      <div class="tradition-tile image">
        <img src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/q_auto/v1551910607/Section%20Pages/Sousaphones/morning-rag.jpg">
      </div>
      <div class="tradition-tile">
        <div class="tradition-text">
          <h4>Morning Rag</h4>
          <p>As the foundation of the band, it is our solemn duty to christen the beginning of each gameday rehearsal with the glorious sound colloquially known as Tiger Rag.</p>
        </div>
      </div>
    </div>

    <div class="tradition">
      <div class="tradition-tile">
        <div class="tradition-text">
          <h4>High Five</h4>
          <p>The best way to spread Tigertown cheer is high fives and playing loud for all to hear! (Catch us in E-4 after home games for your chance at a one-of-a-kind genuine Sousaphone high five!)</p>
        </div>
      </div>
      <div class="tradition-tile image">
        <img src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/q_auto/v1551910607/Section%20Pages/Sousaphones/high-five.jpg">
      </div>
    </div>

    <div class="tradition">
      <div class="tradition-tile image">
        <img src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/q_auto/v1551910607/Section%20Pages/Sousaphones/camaraderie.jpg">
      </div>
      <div class="tradition-tile">
        <div class="tradition-text">
          <h4>Camaraderie</h4>
          <p>While we’re serious about our performances, we’re also serious about having fun! When we’re not at rehearsal or games, you can likely find us playing games or at a game night or at our favorite local spot: Taco Bell!</p>
        </div>
      </div>
    </div>
  </div>

  <div class="media-container">
    <img src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/q_auto/v1551910860/Section%20Pages/Sousaphones/section.jpg">
  </div>

  <div class="auditionButton">
      <a href="/join/winds/" class="boxWrapper">
          <div id="auditionToday" class="boxUIelement rect sousaphone">
              <div class="textContainer">
                  <p>We’re #ALLIN, are you? (please click)</p>
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
