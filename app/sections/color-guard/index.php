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

<?php
    include('../../header.php');
    echo getHeader('sections');
?>

<body>
  <div class="section-heading">
    <div class="section-quote" id="quoteBox">
      <h1>Color Guard</h1>
      <p>Welcome to the Tiger Guard! We are looking forward to another great season and want to share with you a little about who we are and what we do!</p>
      <p>&mdash; Andra, Elizabeth, Olivia, &amp; Gwyneth</p>
    </div>
    <img src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/v1617291424/Section%20Pages/Color%20Guard/guard-1.png">
  </div>

  <div class="heading">
      <h4>Section Leaders</h4>
  </div>

  <div class="section-leaders-content">
    <div class="section-leader">
      <img class="section-leader-photo" src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/v1587681178/Section%20Pages/Color%20Guard/section-leader-1.jpg">
      <h3>Alexis Hagedorn</h3>
      <p>Junior | Elementary Education <br/>Simpsonville, SC</p>
    </div>

    <div class="section-leader">
      <img class="section-leader-photo" src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/v1617291269/Section%20Pages/Color%20Guard/elizabeth-turner.png">
      <h3>Eva Grace Kirkman</h3>
      <p>Senior | Management <br/>Piedmont, SC</p>
    </div>


  <div class="heading section-pages">
      <h4>Our Section</h4>
  </div>

  <div class="media-container">
    <video playsinline autoplay loop muted>
        <source src="https://d3fdmt0abme096.cloudfront.net/section-pages/guard.mp4" type="video/mp4">
    </video>
  </div>

  <div class="centered-articles">
    <article class="media">
      <h1>I Just Want To Be Happy performance</h1>
      <p></p>

      <div class="iframeContainer">
          <div class="iFrameAspectRatio">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/42qqMbOCzY8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
      </div>
    </article>

  </div>

  <div class="section-traditions">
    <div class="tradition">
      <div class="tradition-tile image">
        <img src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/v1617291423/Section%20Pages/Color%20Guard/guard-2.png">
      </div>
      <div class="tradition-tile">
        <div class="tradition-text">
          <h4>Why Join Tiger Guard?</h4>
          <p>Tiger Guard is not only an opportunity to physically express your talent, but to also express your personality with some of the greatest people, all while cheering on your Clemson Tigers! Tiger Guard takes hard work and dedication, but it is also the most fun and memorable college experience that you will have!</p>
        </div>
      </div>
    </div>

    <div class="tradition">
      <div class="tradition-tile">
        <div class="tradition-text">
          <h4>Opportunity to Travel</h4>
          <p>Tiger Guard offers members the chance to travel to away games! Postseason travel possibilities include the ACC Championship, bowl games, and even the National Championship! Come along with us as we travel from coast to coast with The Band that Shakes the Southland!</p>
        </div>
      </div>
      <div class="tradition-tile image">
        <img src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/v1617291428/Section%20Pages/Color%20Guard/guard-3.png">
      </div>
    </div>

    <div class="tradition">
      <div class="tradition-tile image">
        <img src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/v1617291431/Section%20Pages/Color%20Guard/guard-4.png">
      </div>
      <div class="tradition-tile">
        <div class="tradition-text">
          <h4>How to Join!</h4>
          <p>To join Tiger Guard, follow the link below. All you have to do is watch an instructional video that takes you through the audition process. There are no fees! The deadline for submitting your completed application is July 22! We hope to be spinning with you soon!</p>
          <a href="/join/guard/" class="richLink">Join Tiger Guard</a>
        </div>
      </div>
    </div>
  </div>

  <div class="media-container guard">
    <img src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/v1588024114/Section%20Pages/Color%20Guard/section.jpg">
  </div>

  <div class="auditionButton">
      <a href="/join/guard/" class="boxWrapper">
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
<script src="../handleQuoteBox.js"></script>

</html>
