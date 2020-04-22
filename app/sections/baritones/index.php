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

<?php
    include('../../header.php');
    echo getHeader('sections');
?>

<body>
  <div class="section-heading">
    <div class="section-quote">
      <h1>Baritones</h1>
      <p>Welcome to the baritone section! We’re looking forward to another great season and want to give a sneak-peek into what it’s like to be a member of the baritone section.</p>
      <p>&mdash; Lorenzo &amp; Chris</p>
    </div>
    <img src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/q_auto/v1551961176/Section%20Pages/Baritones/header.jpg">
  </div>

  <div class="heading">
      <h4>Section Leaders</h4>
  </div>

  <div class="section-leaders-content">
    <div class="section-leader">
      <img class="section-leader-photo" src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/q_auto/v1551833778/Section%20Pages/Baritones/chris-nahum.jpg">
      <h3>Chris Nahum</h3>
      <p>Senior | Mechanical Engineering <br/>Indian Land, SC</p>
    </div>
    <div class="section-leader">
      <img class="section-leader-photo" src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/v1574176190/Section%20Pages/Baritones/anthony-b.jpg">
      <h3>Anthony Benware</h3>
      <p>Senior | Marketing <br/>Charleston, SC</p>
    </div>
  </div>

  <div class="heading section-pages">
      <h4>Traditions</h4>
  </div>

  <div class="media-container">
    <video playsinline autoplay loop muted>
        <source src="https://d3fdmt0abme096.cloudfront.net/section-pages/baritone.mp4" type="video/mp4">
    </video>
  </div>

  <div class="section-traditions">
    <div class="tradition">
      <div class="tradition-tile image">
        <img src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/w_1000,ar_16:9,c_fill,g_auto,e_sharpen/v1552827318/Section%20Pages/Baritones/pedialite.jpg">
      </div>
      <div class="tradition-tile">
        <div class="tradition-text">
          <h4>Pedialyte</h4>
          <p>On gamedays, the baritone section starts the day off by sharing in celebratory cups of Pedialyte after a motivating speech by one of the older members. This tradition not only hydrates the section but also gets the section pumped for the exciting gameday ahead.</p>
        </div>
      </div>
    </div>

    <div class="tradition">
      <div class="tradition-tile">
        <div class="tradition-text">
          <h4>Amphitheater Pep Talk</h4>
          <p>Before every game, there is a 90 minutes before kickoff concert at the Clemson Amphitheater that Tiger Band does. Before that starts, the baritone section lines up for our Pep Talk. One of our older members excitedly pumps up the section with motivational talk , while getting the section energized for the big game.</p>
        </div>
      </div>
      <div class="tradition-tile image">
        <img src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/w_1000,ar_16:9,c_fill,g_auto,e_sharpen/v1551833779/Section%20Pages/Baritones/amphitheater-pep-talk.jpg">
      </div>
    </div>

    <div class="tradition">
      <div class="tradition-tile image">
        <img src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/q_auto/v1551834756/Section%20Pages/Baritones/thumbnail.jpg">
      </div>
      <div class="tradition-tile">
        <div class="tradition-text">
          <h4>Diversity</h4>
          <p>The baritone section is a very welcoming and diverse section. It is filled with a wide variety of people from different backgrounds and majors including Engineering, Education, Landscape Architecture, and numerous others.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="media-container baritone">
    <img src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/q_auto/v1551833779/Section%20Pages/Baritones/section.jpg">
  </div>

  <div class="auditionButton">
      <a href="/join/winds/" class="boxWrapper">
          <div id="auditionToday" class="boxUIelement rect baritone">
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

</html>
