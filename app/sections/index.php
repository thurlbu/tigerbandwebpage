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
    <title>Sections | Tiger Band</title>
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
    include('../header.php');
    echo getHeader('sections');
?>

<!--- PAGE CONTENT  --->

<!-- BOX UI-->

<div id="boxUI" class="sections">
    <div class="boxWrapper title mobile-box">
        <div class="boxUIelement rect homepage">
          <div class="textContainer">
              <p>Tiger Band<br/>Sections</p>
          </div>
        </div>
    </div>
    <a href="alto-saxes/">
        <div id="altos" class="boxWrapper">
          <div class="boxUIelement sq section">
              <div class="textContainer hide">
                  <p>Alto<br/>Saxophones</p>
              </div>
          </div>
        </div>
    </a>
    <a href="tenor-saxes/">
      <div id="tenors" class="boxWrapper">
        <div class="boxUIelement sq section">
            <div class="textContainer hide">
                <p>Tenor<br/>Saxophones</p>
            </div>
        </div>
      </div>
    </a>
    <a href="trumpets/">
      <div id="trumpets" class="boxWrapper">
        <div class="boxUIelement rect section">
            <div class="textContainer hide">
                <p>Trumpets</p>
            </div>
        </div>
      </div>
    </a>
    <a href="piccolos/">
        <div id="piccolos" class="boxWrapper">
            <div class="boxUIelement sq section">
                <div class="textContainer hide">
                    <p>Piccolos</p>
                </div>
            </div>
        </div>
    </a>
    <div class="boxWrapper title main-box">
        <div class="boxUIelement rect homepage">
          <div class="textContainer">
              <p>Tiger Band<br/>Sections</p>
          </div>
        </div>
    </div>
    <a href="clarinets/">
        <div id="clarinets" class="boxWrapper">
            <div class="boxUIelement sq section">
                <div class="textContainer hide">
                    <p>Clarinets</p>
                </div>
            </div>
        </div>
    </a>
    <a href="mellophones/">
      <div id="mellophones" class="boxWrapper">
        <div class="boxUIelement sq section">
            <div class="textContainer hide">
                <p>Mellophones</p>
            </div>
        </div>
      </div>
    </a>
    <a href="baritones/">
      <div id="baritones" class="boxWrapper">
        <div class="boxUIelement rect section">
            <div class="textContainer hide">
                <p>Baritones</p>
            </div>
        </div>
      </div>
    </a>
    <a class="main-box" href="trombones/">
      <div id="trombones" class="boxWrapper">
        <div class="boxUIelement sq section">
            <div class="textContainer hide">
                <p>Trombones</p>
            </div>
        </div>
      </div>
    </a>
    <a href="sousaphones/">
      <div id="sousaphones" class="boxWrapper">
        <div class="boxUIelement rect section">
            <div class="textContainer hide">
                <p>Sousaphones</p>
            </div>
        </div>
      </div>
    </a>
    <a class="mobile-box" href="trombones/">
      <div id="trombones" class="boxWrapper">
        <div class="boxUIelement sq section">
            <div class="textContainer hide">
                <p>Trombones</p>
            </div>
        </div>
      </div>
    </a>
    <a href="managers/">
        <div id="managers" class="boxWrapper">
            <div class="boxUIelement sq section">
                <div class="textContainer hide">
                    <p>Managers</p>
                </div>
            </div>
        </div>
    </a>
    <a href="">
      <div id="drum-majors" class="boxWrapper">
        <div class="boxUIelement sq section">
            <div class="textContainer hide">
                <p>Coming Soon</p>
            </div>
        </div>
      </div>
    </a>
    <a href="">
        <div id="twirlers" class="boxWrapper">
            <div class="boxUIelement sq section">
                <div class="textContainer hide">
                  <p>Coming Soon</p>
                </div>
            </div>
        </div>
    </a>
    <a href="">
      <div id="dancers" class="boxWrapper">
          <div class="boxUIelement sq section">
            <div class="textContainer hide">
              <p>Coming Soon</p>
            </div>
          </div>
      </div>
    </a>
    <a href="color-guard/">
      <div id="guard" class="boxWrapper">
        <div class="boxUIelement sq section">
            <div class="textContainer hide">
                <p>Color Guard</p>
            </div>
        </div>
      </div>
    </a>
    <a href="/drumline/" target="_blank">
      <div id="drumline" class="boxWrapper">
        <div class="boxUIelement sq section">
            <div class="textContainer hide">
                <p>Drumline</p>
            </div>
        </div>
      </div>
    </a>
</div>

<!--- FOOTER --->

<?php
    readfile("../footer.html");
?>
</body>

</html>
