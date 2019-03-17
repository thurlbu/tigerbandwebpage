<!DOCTYPE html>
<html>
<head>
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
    <div class="section-heading piccolo">
      <h1>Piccolos</h1>
      <img src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/q_auto/v1552829785/Section%20Pages/Piccolos/header.jpg">
    </div>

    <div class="section-quote">
      <p>We are so excited for the 2019 edition of Tiger Band and we hope you are, too! </p>
      <p>&mdash; Maureen &amp; Jillian</p>
    </div>
  </div>

  <div class="heading">
      <h4>Section Leaders</h4>
  </div>

  <div class="section-leaders-content">
    <div class="section-leader">
      <img class="section-leader-photo" src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/q_auto/v1552829785/Section%20Pages/Piccolos/maureen-zabel.jpg">
      <h3>Maureen Zabel</h3>
      <p>Senior | Genetics<br/>Tega Cay, SC</p>
    </div>
    <div class="section-leader">
      <img class="section-leader-photo" src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/q_auto/v1552829787/Section%20Pages/Piccolos/jillian-mcnally.jpg">
      <h3>Jillian McNally</h3>
      <p>Junior | Financial Management<br/>Walhalla, SC</p>
    </div>
  </div>

  <div class="heading section-pages">
      <h4>Traditions</h4>
  </div>

  <div class="media-container">
    <video autoplay loop muted>
        <source src="https://s3.amazonaws.com/tiger-band-website/WebsiteVideo.mp4" type="video/mp4">
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
          <p>Each year right around Thanksgiving, everyone at the section comes together at one house to celebrate. It’s potluck style so everyone makes/ buys some food to share! It’s a lot of fun and it’s especially awesome for those of us who can’t go home for Thanksgiving break.</p>
        </div>
      </div>
    </div>

    <div class="tradition">
      <div class="tradition-tile">
        <div class="tradition-text">
          <h4>Secret Santa</h4>
          <p>Sometime before we get out for Christmas break, everyone picks a name of another piccolo with a description of some of their favorite things. Then, when we get together for the bowl game after Christmas, we all exchange our gifts!</p>
        </div>
      </div>
      <div class="tradition-tile image">
        <img src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/q_auto/v1551909581/Section%20Pages/Piccolos/thumbnail.jpg">
      </div>
    </div>
  </div>

  <div class="media-container">
    <img src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/q_auto/v1551909529/Section%20Pages/Piccolos/section.jpg">
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

</html>
