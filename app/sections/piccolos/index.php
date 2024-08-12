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
    <title>Piccolo Section | Tiger Band</title>
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
      <h1>Piccolos</h1>
      <p>We may be the highest pitched instruments, but our section is still down to earth! We are so excited for this next season and we hope you are too!</p>
      <p>&mdash; Megan &amp; Hannah</p>
    </div>
    
    <img src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/q_auto/v1554168042/Section%20Pages/Piccolos/header.jpg">
  </div>

  <div class="heading">
      <h4>Section Leaders</h4>
  </div>

  <div class="section-leaders-content">
    <div class="section-leader">
      <img class="section-leader-photo" src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/v1617291450/Section%20Pages/Piccolos/section-leader-1.png">
      <h3>Elise Calixte</h3>
      <p>Senior | Chemistry<br/>Greer, SC</p>
    </div>
    <div class="section-leader">
      <img class="section-leader-photo" src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/v1588041518/Section%20Pages/Piccolos/section-leader-2.jpg">
      <h3>Avery Robinson</h3>
      <p>Senior | Modern Languages & Women's Leadership<br/>Mount Pleasant, SC</p>
    </div>
  </div>

  <div class="heading section-pages">
      <h4>Traditions</h4>
  </div>

  <div class="media-container">
    <video playsinline autoplay loop muted>
        <source src="https://d3fdmt0abme096.cloudfront.net/section-pages/Piccolo+page.mp4" type="video/mp4">
    </video>
  </div>

  <div class="section-traditions">
    <div class="tradition">
      <div class="tradition-tile image">
        <img src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/q_auto/v1552829785/Section%20Pages/Piccolos/piccsgiving.jpg">
      </div>
      <div class="tradition-tile">
        <div class="tradition-text">
          <h4>Piccsgiving</h4>
          <p>Each year, around Thanksgiving, everyone in the section comes together to celebrate - potluck style so everyone brings some food to share! It’s a lot of fun and especially awesome for those of us who can’t go home for Thanksgiving break.</p>
        </div>
      </div>
    </div>

    <div class="tradition">
      <div class="tradition-tile">
        <div class="tradition-text">
          <h4>Secret Santa</h4>
          <p>Before we depart for winter break, everyone picks a name of another piccolo with a description of some of their favorite things. When we return for the bowl game we have a fun gift exchange!</p>
        </div>
      </div>
      <div class="tradition-tile image">
        <img src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/q_auto/v1553371764/Section%20Pages/Piccolos/secret-santa.jpg">
      </div>
    </div>
  </div>

  <div class="media-container">
    <img src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/v1588031109/Section%20Pages/Piccolos/section.jpg">
  </div>

  <div class="auditionButton">
      <a href="/join/winds/" class="boxWrapper">
          <div id="auditionToday" class="boxUIelement rect piccolo">
              <div class="textContainer">
                  <p>Come join our piccolo family!</p>
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
