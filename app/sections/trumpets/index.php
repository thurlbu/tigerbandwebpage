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
    <title>Trumpet Section | Tiger Band</title>
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
  <div class="section-fullscreen-container">
    <div class="section-heading trumpet">
      <h1>Trumpets</h1>
      <img src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/q_auto/v1551836535/Section%20Pages/Trumpets/header.jpg">
    </div>

    <div class="section-quote">
      <p>Welcome to the trumpet section! We are an awesome, fun-loving group that also loves to play trumpet together. Throughout the season we battle the trombones (musically) and enjoy countless, unforgettable experiences cheering on our Clemson Tigers. We even have a great paper-plate awards ceremony to end the season. Here is a sneak-peek of the Clemson University Tiger Town Trumpets.</p>
      <p>&mdash; Alicia, Mac, &amp; Nick</p>
    </div>
  </div>

  <div class="heading">
      <h4>Section Leaders</h4>
  </div>

  <div class="section-leaders-content">
    <div class="section-leader">
      <img class="section-leader-photo" src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/q_auto/v1552257405/Section%20Pages/Trumpets/alicia-cameron.jpg">
      <h3>Alicia Cameron</h3>
      <p>Senior | Industrial Engineering <br/>Mt. Pleasant, SC</p>
    </div>
    <div class="section-leader">
      <img class="section-leader-photo" src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/q_auto/v1551836108/Section%20Pages/Trumpets/mac-mccrary.jpg">
      <h3>Mac McCrary</h3>
      <p>Junior | Performing Arts <br/>Walhalla, SC</p>
    </div>
    <div class="section-leader">
      <img class="section-leader-photo" src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/q_auto/v1551836505/Section%20Pages/Trumpets/nick-gustafson.jpg">
      <h3>Nick Gustafson</h3>
      <p>Senior | Computer Science <br/>Columbia, SC</p>
    </div>
  </div>

  <div class="heading section-pages">
      <h4>Traditions</h4>
  </div>

  <div class="media-container">
    <video playsinline autoplay loop muted>
        <source src="https://d3fdmt0abme096.cloudfront.net/section-pages/trumpet.mp4" type="video/mp4">
    </video>
  </div>

  <div class="section-traditions">
    <div class="tradition">
      <div class="tradition-tile image">
        <img src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/q_auto/v1551835433/Section%20Pages/Trumpets/trumpet-trombone-battles.jpg">
      </div>
      <div class="tradition-tile">
        <div class="tradition-text">
          <h4>Trumpet vs Trombone Battles</h4>
          <p>The morning of every home game starts with a battle unlike any other. It’s the official start of the hype surrounding gameday. We’ll use everything we can to win including a dinosaur suit, a shirtless, painted trumpet player in a hula skirt, dumping water on people, fireworks, Terry (the guard instructor), a manhole, and more! We also use music because we’re musicians and shooting fireworks without the sounds of Sweet Victory blaring through some trumpets is kind of pointless. Are you ready for the battle?</p>
        </div>
      </div>
    </div>

    <div class="tradition">
      <div class="tradition-tile">
        <div class="tradition-text">
          <h4>Trumpet Thanksgiving</h4>
          <p>Every Sunday before the last game of the year, the trumpet section gathers for the longest standing Tiger Town Trumpet tradition – Trumpet Thanksgiving. The section leaders give out paper plate awards, we share all of our best photos, quotes, and memories from the season, and, of course, devour massive amounts of food. It’s a celebration of our accomplishments from the season and look ahead at what is still to come.</p>
        </div>
      </div>
      <div class="tradition-tile image">
        <img src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/q_auto/v1551835428/Section%20Pages/Trumpets/trumpet-thanksgiving.jpg">
      </div>
    </div>

    <div class="tradition">
      <div class="tradition-tile image">
        <img src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/q_auto/v1551836385/Section%20Pages/Trumpets/herbert.jpg">
      </div>
      <div class="tradition-tile">
        <div class="tradition-text">
          <h4>Herbert</h4>
          <p>Meet Herbert! The inspiration for his name came from the name of our assistant band director, Mr. Hurlburt. He found his way into a few football games in 2017 and quickly turned into the Tiger Town Trumpet’s good luck charm. For every appearance in a College Football Playoff game, the flamingo’s back is adorned with a bowl patch. Herbert can be spotted at the 90-minutes-before-kickoff concert in the amphitheater, in the parade to the stadium, and with the trumpet section in the stands cheering on our Tigers!</p>
        </div>
      </div>
    </div>
  </div>

  <div class="media-container trumpet">
    <img src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/q_auto/v1551836105/Section%20Pages/Trumpets/section.jpg">
  </div>

  <div class="auditionButton">
      <a href="/join/winds/" class="boxWrapper">
          <div id="auditionToday" class="boxUIelement rect">
              <div class="textContainer">
                  <p>Are you ready to join the Tiger Town Trumpets?</p>
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
