<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Color Guard | Tiger Band</title>
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
  <div class="section-heading guard">
    <h1>Color Guard</h1>
    <img src="/img/sections/guard/header.jpg">
  </div>

  <div class="section-quote">
    <p>Welcome to the Tiger Guard section page! We are your section leaders, Amber, Ericka, and Olivia! We are looking forward to another great season this year and want to share with you a little about who we are and what we do! </p>
    <p>&mdash; Amber, Ericka, &amp; Olivia</p>
  </div>

  <div class="heading">
      <h4>Section Leaders</h4>
  </div>

  <div class="section-leaders-content">
    <div class="section-leader">
      <img class="section-leader-photo" src="/img/sections/guard/amber-o-dell.jpg">
      <h3>Amber O’Dell</h3>
      <p>Sophomore | Communications <br/>Piedmont, SC</p>
    </div>

    <div class="section-leader">
      <img class="section-leader-photo" src="/img/sections/guard/ericka-pace.jpg">
      <h3>Ericka Pace</h3>
      <p>Senior | Agricultural Mechanization and Business<br/>Polk City, FL</p>
    </div>

    <div class="section-leader">
      <img class="section-leader-photo" src="/img/sections/guard/olivia-papotto.jpg">
      <h3>Olivia Papotto</h3>
      <p>Junior | Computer Information Systems<br/>Pelzer, SC</p>
    </div>
  </div>

  <div class="heading section-pages">
      <h4>Cool Aspects</h4>
  </div>

  <div class="media-container">
    <video autoplay loop muted>
        <source src="https://s3.amazonaws.com/tiger-band-website/Baritone+Section+Hype+Video.mp4" type="video/mp4">
    </video>
  </div>

  <div class="section-traditions">
    <div class="tradition-tile">
      <img src="/img/sections/guard/why-join.jpg">
    </div>
    <div class="tradition-tile">
      <div class="tradition-text">
        <h4>Why join Tiger Guard?</h4>
        <p>Tiger Guard is not only an opportunity to physically express your talent, but to also express your personality with some of the greatest people, all while cheering on your Clemson Tigers! Tiger Guard takes hard work and dedication, but is also the most fun and memorable college experience that you will have!</p>
      </div>
    </div>

    <div class="tradition-tile">
      <div class="tradition-text">
        <h4>Opportunity To Travel</h4>
        <p>Tiger Guard offers members the chance to travel to away games such as Georgia Tech, FSU, USC and postseason games! Postseason travels include the possibility of the ACC Championship, Bowl games, and even the National Championship! Come along with us as we travel from East Coast to West Coast with The Band that Shakes the Southland!</p>
      </div>
    </div>
    <div class="tradition-tile">
      <img src="/img/sections/guard/travel.jpg">
    </div>

    <div class="tradition-tile">
      <img src="/img/sections/guard/how-to-join.jpg">
    </div>
    <div class="tradition-tile">
      <div class="tradition-text">
        <h4>How to join!</h4>
        <p>To join Tiger Guard, follow the link below. All you have to do is watch an instructional video that takes you through the audition process. There are no fees! The deadline for submitting your completed application is July 22! We hope to be spinning with you soon!</p>
        <!-- TODO: Add a button to the guard audition page -->
      </div>
  </div>

  <div class="media-container" id="baritone-section-photo">
    <img src="/img/sections/guard/guard.jpg">
  </div>

  <div class="auditionButton">
      <a href="/join/winds/" class="boxWrapper">
          <div id="auditionToday" class="boxUIelement rect guard">
              <div class="textContainer">
                  <p>Come Spin With Tiger Guard!</p>
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
