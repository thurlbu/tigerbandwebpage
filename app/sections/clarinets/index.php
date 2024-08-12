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

<?php
    include('../../header.php');
    echo getHeader('sections');
?>

<body>
  <div class="section-heading">
    <div class="section-quote" id="quoteBox">
      <h1>Clarinets</h1>
      <p>We’re quirky and fun. Come join the clarinet family!</p>
      <p>&mdash; Tyrell &amp; Natalie</p>
    </div>
    <img src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/q_auto/v1551892366/Section%20Pages/Clarinets/header.jpg">
  </div>

  <div class="heading">
      <h4>Section Leaders</h4>
  </div>

  <div class="section-leaders-content">
    <div class="section-leader">
      <img class="section-leader-photo" src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/v1617291151/Section%20Pages/Clarinets/section-leader-1.png">
      <h3>Quinnya Burns</h3>
      <p>Junior | Management <br/>Sumter, SC</p>
    </div>

    <div class="section-leader">
      <img class="section-leader-photo" src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/v1587681218/Section%20Pages/Clarinets/section-leader-2.jpg">
      <h3>Ruth Salas-Rodriguez</h3>
      <p>Senior | Mechanical Engineering <br/>Aiken, SC</p>
    </div>
  </div>

  <div class="heading section-pages">
      <h4>Traditions</h4>
  </div>

  <div class="media-container">
    <video playsinline autoplay loop muted>
      <source src="https://d3fdmt0abme096.cloudfront.net/section-pages/Clarinet+Section+Page+Video.mp4" type="video/mp4">
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
          <p>Game Day is fun for all of Tiger Band, and the clarinet section is no exception. On game days we all wear purple short shorts for the morning rehearsal, and we also have Tiger Tails that we hang from the bells of our clarinets. Both these traditions are fun ways to show our hype for Game Days!</p>
        </div>
      </div>
    </div>

    <div class="tradition">
      <div class="tradition-tile">
        <div class="tradition-text">
          <h4>Breezeway Tunnel</h4>
          <p>After Tiger Band gets into uniform, we stand in the Breezeway by the Brooks Center before we leave for pregame performance. When we are in the Breezeway, the clarinet section makes a tunnel and we encourage anyone walking through the area to run past us and we’ll cheer as they go. Tiger Band exists to get Clemson fans excited for games, and little things like this get us excited too. </p>
          <p>The clarinet section also has a Pep Talk in the Breezeway that is given by Grayson to hype us up for the game. The whole point is to get everyone in the section pumped up before performing for all of the fans at the football games.</p>
        </div>
      </div>
      <div class="tradition-tile image">
        <img src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/q_auto/v1551892365/Section%20Pages/Clarinets/breezeway-tunnel-and-pep-talk.jpg">
      </div>
    </div>
  </div>

  <div class="media-container">
    <img src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/v1588080620/Section%20Pages/Clarinets/section.jpg">
  </div>

  <div class="auditionButton">
      <a href="/join/winds/" class="boxWrapper">
          <div id="auditionToday" class="boxUIelement rect clarinets">
              <div class="textContainer">
                  <p>Join the Band that Shakes the Southland!</p>
              </div>
          </div>
      </a>
  </div>

<!--- FOOTER --->

<?php
    readfile("../../footer.html");
?>
</body>
<script src="../handleQuoteBox.js"></script>

</html>
