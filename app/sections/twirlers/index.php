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
    <title>Twirler Section | Tiger Band</title>
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
      <h1>Twirlers</h1>
      <p>"Go Tigers, Beat Everyone!" &mdash; Tiger Twirlers <br /> Take a look at why we love twirling for this university and we hope that one day you will, too!</p>
      <p>&mdash; Reagan</p>
    </div>
    <img src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/v1574653657/Section%20Pages/Twirlers/header-2.jpg">
  </div>

  <div class="heading">
      <h4>Section Leader</h4>
  </div>

  <div class="section-leaders-content">
    <div class="section-leader">
      <img class="section-leader-photo" src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/v1574453644/Section%20Pages/Twirlers/reagan-king.jpg">
      <h3>Reagan King</h3>
      <p>Senior | Nursing <br/>Townville, SC</p>
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
        <img src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/v1574453646/Section%20Pages/Twirlers/FIRE.jpg">
      </div>
      <div class="tradition-tile">
        <div class="tradition-text">
          <h4>FIRE</h4>
          <p>The Clemson Tiger Twirlers have a long-standing tradition of having talented twirlers who can twirl fire. We usually reserve this excitement for night games when the sun is down and the crowd is hype. It feels natural to us, but we love to hear the fans go crazy when we BRING THE HEAT. </p>
        </div>
      </div>
    </div>

    <div class="tradition">
      <div class="tradition-tile">
        <div class="tradition-text">
        <h4>Toe POP!</h4>
        <p>We are always ready with our toe POPPED for a performance or a picture.  Every performance begins and ends with a toe pop. It’s our go-to pose in every picture and we love teaching fans to do it too! Which Clemson celeb do you think has the best toe pop?</p>
        </div>
      </div>
      <div class="tradition-tile image">
        <img src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/v1574453647/Section%20Pages/Twirlers/toe-POP.jpg">
      </div>
    </div>

    <div class="tradition">
      <div class="tradition-tile image">
        <img src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/v1574453648/Section%20Pages/Twirlers/tiger-twirlers-in-training.jpg">
      </div>
      <div class="tradition-tile">
        <div class="tradition-text">
          <h4>Tiger Twirlers in Training</h4>
          <p>We are so grateful that being a Tiger Twirler allows us to be ambassadors for Clemson University and better engage in our community. We often do performances at different events in the Clemson area. Getting to meet young tiger fans at practice and on gameday is one of the most rewarding parts of the position. Catch us on the field after each game taking pictures and signing autographs--a truly humbling experience!</p>
        </div>
      </div>
    </div>
  </div>

  <div class="media-container">
    <img src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/v1574453824/Section%20Pages/Twirlers/section.jpg">
  </div>

  <div class="auditionButton">
      <a href="/join/twirlers/" class="boxWrapper">
          <div id="auditionToday" class="boxUIelement rect twirlers">
              <div class="textContainer">
                  <p>Join the Tiger Twirlers!</p>
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
