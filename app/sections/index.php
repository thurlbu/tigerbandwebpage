<!DOCTYPE html>
<html>
<head>
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

<nav>
    <a href="/">Home</a>
    <a href="/this_season/" class="active">This Season</a>
    <a href="/join/">Join</a>
    <a href="/bands/">Bands</a>
    <a href="/organizations/">Organizations</a>
    <a href="/staff/">Staff</a>
    <a href="/members/">Members Only</a>
    <a href="/contact/">Contact</a>
</nav>

<!--- PAGE CONTENT  --->

<!-- BOX UI-->

<div id="boxUI" class="sections">
    <a href="piccolos/">
        <div class="boxWrapper">
            <div class="boxUIelement sq section">
                <div class="textContainer hide">
                    <p>Piccolos</p>
                </div>
            </div>
        </div>
    </a>
    <div class="boxWrapper title">
        <div class="boxUIelement rect homepage">
          <div class="textContainer">
              <p>Tiger Band<br/>Sections</p>
          </div>
        </div>
    </div>
    <a href="clarinets/">
        <div class="boxWrapper">
            <div class="boxUIelement sq section">
                <div class="textContainer hide">
                    <p>Clarinets</p>
                </div>
            </div>
        </div>
    </a>
    <a href="alto-saxes/">
        <div class="boxUIelement sq section">
            <div class="textContainer hide">
                <p>Alto<br/>Saxophones</p>
            </div>
        </div>
    </a>
    <a href="tenor-saxes/">
        <div class="boxUIelement sq section">
            <div class="textContainer hide">
                <p>Tenor<br/>Saxophones</p>
            </div>
        </div>
    </a>
    <a href="trumpets/">
        <div class="boxUIelement rect section">
            <div class="textContainer hide">
                <p>Trumpets</p>
            </div>
        </div>
    </a>
    <a href="mellophones/">
        <div class="boxUIelement sq section">
            <div class="textContainer hide">
                <p>Mellophones</p>
            </div>
        </div>
    </a>
    <a href="baritones/">
        <div class="boxUIelement rect section">
            <div class="textContainer hide">
                <p>Baritones</p>
            </div>
        </div>
    </a>
    <a href="trombones/">
        <div class="boxUIelement sq section">
            <div class="textContainer hide">
                <p>Trombones</p>
            </div>
        </div>
    </a>
    <a href="sousaphones/">
        <div class="boxUIelement rect section">
            <div class="textContainer hide">
                <p>Sousaphones</p>
            </div>
        </div>
    </a>
    <a href="managers/">
        <div class="boxWrapper">
            <div class="boxUIelement sq section">
                <div class="textContainer hide">
                    <p>Managers</p>
                </div>
            </div>
        </div>
    </a>
    <a href="drum-majors/">
        <div class="boxUIelement sq section">
            <div class="textContainer hide">
                <p>Drum Majors</p>
            </div>
        </div>
    </a>
    <a href="twirlers/">
        <div class="boxWrapper">
            <div class="boxUIelement sq section">
                <div class="textContainer hide">
                    <p>Twirlers</p>
                </div>
            </div>
        </div>
    </a>
    <a href="dancers/">
      <div class="boxWrapper">
          <div class="boxUIelement sq section">
            <div class="textContainer hide">
                <p>Dancers</p>
            </div>
          </div>
      </div>
    </a>
    <a href="color-guard/">
        <div class="boxUIelement sq section">
            <div class="textContainer hide">
                <p>Color Guard</p>
            </div>
        </div>
    </a>
    <a href="/drumline/" target="_blank">
        <div class="boxUIelement sq section">
            <div class="textContainer hide">
                <p>Drumline</p>
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
