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
    <title>Contact | Tiger Band</title>
    <link rel="stylesheet" href="../css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
    <link rel="shortcut icon" href="/favicons/favicon.ico">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="description" content="The Band That Shakes the Southland">
    <meta name="keywords" content="tiger, band, clemson, university, shakes, southland">
</head>

<!--- HEADER --->

<input type='checkbox' id='mobileMenu'>

<div id="mobileHeader">
  <a href="../"><img id="tbMobileLogo" src="../img/logos/TigerBandMobileLogo.png" width="120"></a>
	<label for="mobileMenu" id="menuButton"><span>=</span></label>
</div>

<label id='mobileScreenShade' for='mobileMenu'></label>

<!--- NAVIGATION --->

<nav>
    <a href="../">Home</a>
    <a href="../">Home</a>
    <a href="../this_season/">This Season</a>
    <a href="../join/">Join</a>
    <a href="/bands/">Bands</a>
    <a href="../organizations/">Organizations</a>
    <a href="../staff/">Staff</a>
    <a href="../sections/">Sections</a>
    <a href="../contact/" class="active">Contact</a>
</nav>

<!--- PAGE CONTENT --->

<body class="stickyFooter">
    <div class="stickyFooterContent">
        <div class="heading">
            <h3>Contact</h3>
            <h4>Tiger Band</h4>
        </div>

        <center>
            <h4>Thank you for your message!</h4>
            <br>
            <h3><a href="/">Return to the homepage</a></h3>
        </center>
    </div>

<!--- FOOTER --->

<?php
    readfile("../footer.html");
?>
</body>

<script type="text/javascript">
    //Copyright Date
    var startYear = 2017;
    var currentYear = new Date().getFullYear();
    if (startYear == currentYear) {
        document.getElementById("copyright").innerHTML = "COPYRIGHT &copy " + startYear;
    }
    else {
        document.getElementById("copyright").innerHTML = "COPYRIGHT &copy " + startYear + " - " + currentYear;
    }
</script>
</html>
