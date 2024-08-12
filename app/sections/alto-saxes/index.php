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
  <title>Alto Saxophone Section | Tiger Band</title>
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
      <h1>Alto Saxophones</h1>
      <p>The alto saxophone section cultivates a jovial culture unmatched by any other section in Tiger Band. ‘Less dancing, more dressing!’ Mr. Hurlburt, our assistant band director, said this to our section during a rehearsal!</p>
      <p>&mdash; Lauren &amp; Charlie </p>
    </div>
    <img src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/q_auto/v1551874098/Section%20Pages/Alto%20Saxophones/header.jpg">
  </div>

  <div class="heading">
      <h4>Section Leaders</h4>
  </div>

  <div class="section-leaders-content">
    <div class="section-leader">
      <img class="section-leader-photo" src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/v1617291098/Section%20Pages/Alto%20Saxophones/section-leader-1.png">
      <h3>Jordan Brown</h3>
      <p>Junior | Health Science <br/>Columbia, SC</p>
    </div>
    <div class="section-leader">
      <img class="section-leader-photo" src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/v1587734276/Section%20Pages/Alto%20Saxophones/section-leader-2.jpg">
      <h3>Clara Nichols</h3>
      <p>Senior | Graphic Communications <br/>Asheville, NC</p>
    </div>
  </div>

  <div class="heading section-pages">
      <h4>Traditions</h4>
  </div>

  <div class="media-container">
    <video playsinline autoplay loop muted>
        <source src="https://d3fdmt0abme096.cloudfront.net/section-pages/alto.mp4" type="video/mp4">
    </video>
  </div>

  <div class="section-traditions">
    <div class="tradition">
      <div class="tradition-tile image">
        <img src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/q_auto/v1551874097/Section%20Pages/Alto%20Saxophones/barbara-ann.jpg">
      </div>
      <div class="tradition-tile">
        <div class="tradition-text">
          <h4>Barbara Ann</h4>
          <p>The Altos all group up before home football games and play an all alto arrangement of Barbara Ann by the Beach Boys. We play it in the breezeway of Brooks before we march to the amphitheater for the concert. After we finish playing, a member of the section usually gives a hype speech to get everybody pumped for the football game.</p>
        </div>
      </div>
    </div>

    <div class="tradition">
      <div class="tradition-tile">
        <div class="tradition-text">
          <h4>Jorts</h4>
          <p>The Altos have a tradition of making their own jean shorts (jorts). We go to the Goodwill and buy pairs of jeans and usually have a “Jorts Party” at one of the older members’ apartments. We cut the jeans into shorts and use fabric paint to paint our own designs on them. No two pairs of jorts are alike, just like the people in the section. This is something that the members can choose to do or not; about half the section have jorts. We wear them at home game day practices to show off our Clemson spirit.</p>
        </div>
      </div>
      <div class="tradition-tile image">
        <img src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/q_auto/v1551874098/Section%20Pages/Alto%20Saxophones/jorts.jpg">
      </div>
    </div>

    <div class="tradition">
      <div class="tradition-tile image">
        <img src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/w_1000,ar_16:9,c_fill,g_auto,e_sharpen/v1551874097/Section%20Pages/Alto%20Saxophones/tiger-rag.jpg">
      </div>
      <div class="tradition-tile">
        <div class="tradition-text">
          <h4>Tiger Rag Tradition</h4>
          <p>Every new member who comes into the alto saxophone section gets their own Tiger Band tiger rag to tie around the bell of their saxophone, and it becomes a permanent part of our uniform. Each one of the alto saxophone section members proudly wear their tiger rag and show it off to the world. Sam even has an extra one hanging up in her room.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="media-container">
    <img src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/v1587734381/Section%20Pages/Alto%20Saxophones/section.jpg">
  </div>

  <div class="auditionButton">
      <a href="/join/winds/" class="boxWrapper">
          <div id="auditionToday" class="boxUIelement rect alto">
              <div class="textContainer">
                  <p>Join the culture!</p>
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
