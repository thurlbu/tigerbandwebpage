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
    <title>Dancers | Tiger Band</title>
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
      <h1>Dancers</h1>
      <p>The Tiger Dancers bring spirit, energy, and passion to every performance! On game day, we dance during the 90 minutes before kickoff amphitheater performance, the parade into the stadium, during pregame and halftime, and in the stands with all of Tiger Band. We have also been lucky enough to dance around the country during post-season football games to cheer on the Tigers. We are so excited for the 2020 season and can’t wait to get started!</p>
      <p>&mdash; Mikayla &amp; Samantha</p>
    </div>
    
    <img src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/v1587568442/Section%20Pages/Dancers/header.jpg">
  </div>

  <div class="heading">
      <h4>Section Leaders</h4>
  </div>

  <div class="section-leaders-content">
    <div class="section-leader">
      <img class="section-leader-photo" src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/v1617291308/Section%20Pages/Dancers/section-leader-1.png">
      <h3>Allyson Good</h3>
      <p>Senior | Management <br/>Remington, VA</p>
    </div>
    <div class="section-leader">
      <img class="section-leader-photo" src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/v1587657146/Section%20Pages/Dancers/section-leader-2.jpg">
      <h3>Madison Lombardo</h3>
      <p>Senior | Marketing <br/>Ridge, NY</p>
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
        <img src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/v1617291349/Section%20Pages/Dancers/holiday-party.png">
      </div>
      <div class="tradition-tile">
        <div class="tradition-text">
          <h4>Holiday Party</h4>
          <p>The holiday party is something all of the dancers look forward to every year. Spending time together outside of dance practice is very important to us as a team and the holiday party gives us an opportunity to do so. It’s a time for us all to get together to share food and gifts and just have fun! We always participate in secret santa which is a fun way for us all to surprise each other with unique and personal gifts.</p>
        </div>
      </div>
    </div>

    <div class="tradition">
      <div class="tradition-tile">
        <div class="tradition-text">
          <h4>Dancer Families</h4>
          <p>Last year, we paired all the rookie dancers with returning members to create bigs and littles. This helped the new dancers become better acquainted to Tiger Dancers and get to know the returning members. This idea worked so well that this season, we are taking bigs and littles and making them into families! We hope this will allow every member to feel an even closer connection to their fellow dancers.</p>
        </div>
      </div>
      <div class="tradition-tile image">
        <img src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/v1572479350/Section%20Pages/Dancers/big-little.jpg">
      </div>
    </div>
  </div>

  <div class="media-container">
    <img src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/v1587568442/Section%20Pages/Dancers/group.jpg">
  </div>

  <div class="auditionButton">
      <a href="/join/dancers/" class="boxWrapper">
          <div id="auditionToday" class="boxUIelement rect dancer">
              <div class="textContainer">
                  <p>Shake the Southland with the Tiger Dancers!</p>
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
