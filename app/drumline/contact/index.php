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

<!--- HEADER --->

<input type='checkbox' id='mobileMenu'>

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
        <div id="heading">
            <h3>Contact</h3>
            <h4>Clemson University Drumline</h4>
        </div>

        <div id="contactWrapper">

            <!--- CONTACT FORM --->

            <form action="http://www.clemson.edu/cgi-bin/formail.cgi" method="POST" id="contactForm">
                <input type="hidden" name="recipient" value="pbuyer@clemson.edu"> <!--clemsondrumline@gmail.com-->
                <input type="hidden" name="subject" value="Clemson Drumline Website Form Results">
                <input type="hidden" name="sort" value="order:regarding,realname,email,phone,message">
                <input type="hidden" name="print_config" value="realname, email">
                <input type="hidden" name="redirect" value="http://tband.people.clemson.edu/drumline/contact/contact.php">

                <input type="text" name="realname" placeholder="Name*" required>
                <input type="text" name="phone" placeholder="Phone Number*" required>
                <input type="email" name="email" placeholder="Email*" required>
                <input type="text" name="regarding" placeholder="Subject*" required>
                <textarea name="message" placeholder="Your Message*" required></textarea>
                <div>
                    <input type="submit" value="Send">
                    <input type="reset" value="Reset">
                </div>
            </form>

            <!--- CONTACT ADDRESS --->

            <div id="contactAddress">
                <img id="contactTBlogo" src="../img/logos/TigerBandFull.png">
                <div id="contactInfo">
                    <h5>Address:</h5>
                        <p>119 Brooks Center for the Performing Arts</p>
                        <p>Clemson University Bands</p>
                        <p>Clemson, SC 29634-0525</p>
                    <h5>Phone:</h5>
                        <p>(864) 656-3380</p>
                    <h5>Hours:</h5>
                        <p>8:00am - 4:30pm</p>
                        <p>Monday - Friday</p>
                        <p>During regular university sessions</p>
                </div>
            </div>
        </div>
    </div>
    
<!-- FOOTER-->

<?php
    readfile("footer.html");
?>

</body>

</html>
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
