<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Contact | Clemson Drumline</title>
    <link rel="stylesheet" href="../css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="The official website of the Clemson University Drumline">
    <meta name="keywords" content="Clemson, University, Drumline, CUD, Marching, Percussion, Band, Drum Line, Yamaha, Drums, Remo, Drumheads, Heads, Sabian, Cymbals, Vic Firth, Drumsticks, Sticks, Sheet Music, Music, mp3, pdf, Technique, Manuals, Articles, Audition, Schedule, Information, Packets, Packet, Photo, Gallery, Members, Instructional, Staff">
    <meta name="copyright" content="2009-2017 Clemson University Drumline">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#f66733">
    <meta name="theme-color" content="#522d80">
</head>

<input type='checkbox' id='mobileMenu'>

<!--- HEADER --->

<div id="mobileHeader">
	<a href="/drumline/"><img id="tbMobileLogo" src="../img/logos/Drumline%20Mobile%20Header.svg" width="120"></a>
	<label for="mobileMenu" id="menuButton"><span>=</span></label>
</div>

<label id='mobileScreenShade' for='mobileMenu'></label>

<!--- NAVIGATION --->

<nav>
    <a href="../">Home</a>
    <a href="../about">About</a>
    <a href="../auditions/">Auditions</a>
    <a href="../music/">Music</a>
    <a href="../contact/" class="active">Contact</a>
</nav>

<!--- PAGE CONTENT --->

<body class="stickyFooter">
    <div class="stickyFooterContent">
        <div class="heading">
            <h3>Contact</h3>
            <h4>Clemson University Drumline</h4>
        </div>

        <center>
            <h4>Thank you for your message!</h4>
            <br>
            <h3><a href="/drumline/">Return to the homepage</a></h3>
        </center>
    </div>

<!-- FOOTER-->

<?php
    readfile("footer.html");
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
