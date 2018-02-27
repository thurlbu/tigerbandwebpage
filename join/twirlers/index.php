<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Tiger Twirlers Auditions | Tiger Band</title>
    <link rel="stylesheet" href="/css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="description" content="The Band That Shakes the Southland">
    <meta name="keywords" content="tiger, band, clemson, university, shakes, southland">
</head>

<!--- HEADER --->

<input type='checkbox' id='mobileMenu'>

<div id="mobileHeader">
	<a href="/website/"><img id="tbMobileLogo" src="/img/logos/TigerBandMobileLogo.png" width="120"></a>
	<label for="mobileMenu" id="menuButton"><span>=</span></label>
</div>

<label id='mobileScreenShade' for='mobileMenu'></label>

<!--- NAVIGATION --->

<nav>
    <a href="/website/">Home</a>
    <a href="/this_season/">This Season</a>
    <a href="/join/" class="active">Join</a>
    <a href="/bands/">Bands</a>
    <a href="/affiliates/">Affiliates</a>
    <a href="/about/">About</a>
    <a href="/members/">Members Only</a>
    <a href="/contact/">Contact</a>
</nav>

<!--- PAGE CONTENT --->

<body>
    <div id="heading">
        <h3>Audition for</h3>
        <h4>Tiger Twirlers</h4>
    </div>

    <div id="Col2FlexContent" class="about">
        <div id="col1Flex">
            <article class="text fullWidth">
                <h1 class="purpleText">2017 Tiger Twirlers Auditions</h1>
                <p>Auditions for the 2017 Tiger Dancers and Twirlers will be held on Sunday, April 30 in room 112 of the Brooks Center.</p>
                <p>We look forward to meeting and working with each of you! Being a member of the Tiger Twirlers is a life-changing experience that you will never forget. It is an incredible opportunity and we want you to be a part of it!</p>
                <a href="../../doc/2017Twirler.pdf" class="richLink" target="_blank">Tiger Twirler Audition Information</a>
                <p>If you have any questions concerning auditions for the Twirlers, please contact Hazel Cartee: <a href="mailto:Hazel@UpstateDance.com?subject=Tiger Twirlers Audition Question">Hazel@UpstateDance.com</a></p>
            </article>

            <!--- DEADLINE CALENDAR UI --->

            <div class="deadlines">
                <div class="month">
                    <div class="boxUIelement sq white" id="text1" onclick="moreInfo(1)">
                        <div class="textContainer">
                            <p>April</p>
                            <b>30</b>
                            <p>Auditions</p>
                        </div>
                    </div>
                    <div class="deadlinesInfo" id="info1">
                        <p>Tiger Twirlers Auditions<br>
                            Starting at 12:15pm<br>
                            Room 112 (Band Room) Brooks Center</p>
                    </div>
                </div>
            </div>
        </div>

        <div id="col2Flex">

            <!--- PHOTO SLIDER --->

            <div id="photoSlider">
                <img class="slider" src="/img/clemson-tiger-band-bc-2017-236.jpg">
                <img class="slider" src="/img/clemson-tiger-band-kentstate-2017-342.jpg">
                <img class="slider" src="/img/clemson-tiger-band-auburn-2017-298.jpg">
                <div class="controls">
                    <div class="dots" onclick="stopSlider(); currentDiv(1)"></div>
                    <div class="dots" onclick="stopSlider(); currentDiv(2)"></div>
                    <div class="dots" onclick="stopSlider(); currentDiv(3)"></div>
                </div>
            </div>
        </div>
    </div>

    <!--- AUDITION INFORMATION --->

    <div id="itineraries">
        <div id="heading">
            <h4>Audition Information</h4>
        </div>
    </div>

    <div id="Col2FlexContent">
        <div id="col1Flex">
            <article class="text fullWidth">
                <h1>General Information</h1>
                <p>: The Tiger Twirlers are members of Clemson University’s Tiger Band and perform anytime the full-band performs. This includes: pep rallies, parades, pre-game and half-time at all home games, half-time at 1-3 away games during the season, First Friday Parade, Tigerama, bowl game, and other exhibitions. The Tiger Twirlers are an exciting part of all full-band performances.Members of each group receive 2 credit hours during their fall semester! </p>
            </article>

            <article class="text fullWidth">
                <h1>Eligibility</h1>
                <p>Any full-time Clemson student with a minimum of 12 credit hours each semester and acumulative GPA of 2.5 or greater. Also, full-time students at Tri-County Technical College taking transfer courses with a minimum of 12 credit hours each semester and a cumulative GPA of 2.5 or greater are eligible to audition for a position.</p>
                <p>Students may take advantage of the opportunity to participate as a Tiger Twirler at Clemson as a transfer student for up to 2 years after their high school graduation date. After the 2 year transfer period, students must be full time students at Clemson University to participate as a Tiger Twirler.</p>
                <p>Feature Twirler must be a full-time Clemson student.</p>
                <p>Potential members must e-mail a copy of their transcript (current college students) or a copy of their college acceptance letter (incoming freshman only) to the e-mail on the application to verify current student status. </p>
            </article>
        </div>

        <div id="col2Flex">
            <article class="text fullWidth">
                <h1>Schedule During the Season</h1>
                <p>All members are expected to attend practice with Tiger Band on Monday, Wednesday, and Friday of each week from 4:00 - 6:00pm. Each member must also be available for a weekly sectional practice with their instructor Tuesdays 8:00 - 10:00pm.</p>
            </article>

            <article class="text fullWidth">
                <h1>Appearance</h1>
                <p>All members must represent Clemson University with good character and a positive image. Each member will be required to be uniform at all appearances including hair, make-up, costume, etc. Any tattoos must be completely concealed while in uniform. Any additional piercings (other than 1 hole in each ear) must be removed for every performance, pep rally, and game. A Tiger Twirler must maintain a good standing in the community and be a positive role model at all times (at practice, in the stands, at games, pep rallies, online, etc.) </p>
            </article>

            <article class="text fullWidth">
                <h1>Financial Responsibility</h1>
                <p>The average cost for a new member to acquire all of the supplies, warm-up, uniform, etc. is approximately $400-$650. The first deposit is due June 1st and the balance will be due July 15th.</p>
            </article>
        </div>
    </div>

<!--- FOOTER --->

<?php
    readfile("../../footer.html");
?>
</body>

<script>
    //JavaScript for Collapsible Articles
    function expand(n) {
        n.classList.toggle("clicked");
    };

    //JavaScript for More Info Under Calendar Deadlines
    var active123 = [1,1,1,1,1,1,1];
    function moreInfo(x) {
        active123[x] = 0;
        document.getElementById("text" + x).classList.toggle("clicked");
        document.getElementById("info" + x).classList.toggle("clicked");
        for(var i = 0; i < active123.length; i++) {
            if(active123[i] == 0 && i != x) {
                document.getElementById("text" + i).classList.remove("clicked");
                document.getElementById("info" + i).classList.remove("clicked");
                active123[i] = 1;
            }
        }
    }

    //JavaScript for Image Slider
    var slideIndex = 0;
    var doChange = true;
    carousel();
    showDivs(slideIndex);

    function currentDiv(n) {
      showDivs(slideIndex = n);
    }
    function stopSlider() {
        doChange = false;
    }
    function carousel() {
        if(doChange) {
            var i;
            var x = document.getElementsByClassName("slider");
            var dots = document.getElementsByClassName("dots");
            for (i = 0; i < x.length; i++) {
              x[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > x.length) {slideIndex = 1}
            x[slideIndex-1].style.display = "block";
            setTimeout(carousel, 2500); // Change image every 2.5 seconds

            for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" dot-white", "");
            }
            dots[slideIndex-1].className += " dot-white";
            }
        }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("slider");
        var dots = document.getElementsByClassName("dots");
        if (n > x.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = x.length
        }
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" dot-white", "");
        }
        x[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " dot-white";
    }

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
