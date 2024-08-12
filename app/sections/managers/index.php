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
    <title>Operations Team | Tiger Band</title>
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
      <h1>Operations Team</h1>
      <p>Welcome to the Tiger Band Operations Team! We support all of the logisitcal needs of Tiger Band. We also get to ride a golf cart.</p>
      <p>&mdash; Caroline</p>
    </div>
    <img src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/q_auto/v1551894929/Section%20Pages/Managers/header.jpg">
  </div>

  <div class="heading">
      <h4>Section Leaders</h4>
  </div>

  <div class="section-leaders-content">
    <div class="section-leader">
      <img class="section-leader-photo" src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/q_auto/v1551894757/Section%20Pages/Managers/caroline-web.jpg">
      <h3>Ellie Autry</h3>
      <p>Sophomore | History, Secondary Education<br/>West Columbia, SC</p>
    </div>

  <div class="section-leader">
      <img class="section-leader-photo" src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/q_auto/v1551894757/Section%20Pages/Managers/caroline-web.jpg">
      <h3>Lucia Kirland</h3>
      <p>Sophomore | Criminal Justice, Political Science<br/>Columbia, SC</p>
    </div>
</div>

  <div class="heading section-pages">
      <h4>Traditions</h4>
  </div>

  <div class="section-traditions">
    <div class="tradition">
      <div class="tradition-tile image">
        <img src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/q_auto/v1552828871/Section%20Pages/Managers/the-mule.jpg">
      </div>
      <div class="tradition-tile">
        <div class="tradition-text">
          <h4>The Mule</h4>
          <p>Also known as La Mule, the Mule is the golf-cart-like vehicle that is often seen swooping around the band field and it is what we use to get from the equipment room, to the practice field, and to Death Valley. It is a lot of fun to drive around and beats having to walk everywhere! This is something only managers really get to do.</p>
        </div>
      </div>
    </div>

    <div class="tradition">
      <div class="tradition-tile">
        <div class="tradition-text">
          <h4>Culture</h4>
          <p>Every section in Tiger Band is a family in their own way. This is also true for the managers. We are often working together for extended periods of time and since we are one of the smallest sections of the band, we get to know each other very well. It’s a truly unique experience and culture that you can’t get anywhere else on Clemson’s campus.</p>
        </div>
      </div>
      <div class="tradition-tile">
        <img src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/q_auto/v1552828099/Section%20Pages/Managers/culture.jpg">
      </div>
    </div>
  </div>

  <div class="media-container">
    <img src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/q_auto/v1551894757/Section%20Pages/Managers/section.jpg">
  </div>

  <div class="auditionButton">
      <a href="/join/winds/" class="boxWrapper">
          <div id="auditionToday" class="boxUIelement rect managers">
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
