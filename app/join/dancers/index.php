<!DOCTYPE html>
<html>
<head>  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-8965430-3"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-8965430-3');
  </script>

    <meta charset="utf-8">
    <title>Tiger Dancers Auditions | Tiger Band</title>
    <link rel="stylesheet" href="/css/main.css">
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
	<a href="/"><img id="tbMobileLogo" src="/img/logos/TigerBandMobileLogo.png" width="120"></a>
	<label for="mobileMenu" id="menuButton"><span>=</span></label>
</div>

<label id='mobileScreenShade' for='mobileMenu'></label>

<!--- NAVIGATION --->

<?php
    include('../../header.php');
    echo getHeader('join');
?>

<!--- PAGE CONTENT --->

<body>
    <div class="heading">
        <h3>Audition for</h3>
        <h4>Tiger Dancers</h4>
    </div>

    <div id="Col2FlexContent" class="about">
        <div id="col1Flex">
          <article class="text fullWidth">
              <h1 class="purpleText">2020 Tiger Dancer Auditions</h1>
              <p>Auditions for the 2020 Tiger Dancers will be completed via video submission.</p>
              <p>Videos are due by <b>May 8, 2020 at 11:59pm </b>and results will be communicated by <b>May 15, 2020</b>.</p>
              <p>For your video, please wear a <b><u>white tank top</b></u>, <b><u>black leggings</b></u>, and <b><u>jazz shoes</b></u>.</p>
              <p>All returning members must submit a new audition video each year.</p>
              <p>Your audition video must include:</p>
              <ol>
                  <li>Posted routines to Eye of the Tiger AND Tiger Rag</li>
                  <li>Right and Left Splits</li>
                  <li>Right and Left Double Pirouettes</li>
                  <li>8-counts of Second Turns to the Right</li>
                  <li>Kick Combination</li>
              </ol>

              <p>To submit your video, upload it to youtube, google drive, or another file sharing service and submit your application. There will be a place on the form to include a link to your video.</p>
              <p><a href="https://docs.google.com/forms/d/e/1FAIpQLSdqqzF3c60vu6ze61oj7ZwoCQL5kiL5R01cnOGRN706dDwAKg/viewform?usp=sf_link">2020 TIGER DANCER APPLICATION</a></p>
              <p>Please watch the video below for routines and explanations of the skills.</p>
              <p><iframe width="560" height="315" src="https://www.youtube.com/embed/jj54t3TY6i4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></p>
              <div id="audioContainer">
                  <div class="auditionAudio">
                      <p>Tiger Rag:</p>
                      <audio src="/audio/TigerRag.mp3" controls></audio>
                  </div>
                  <div class="auditionAudio">
                      <p>Eye of the Tiger:</p>
                      <audio src="/audio/EyeoftheTiger.mp3" controls></audio>
                  </div>
              </div>
              <p>If you have any questions concerning auditions for the Tiger Dancers, please contact Marilla Riggs: <a href="mailto:marillaburnham@gmail.com">marillaburnham@gmail.com</a></p>
          </article>


        </div>

        <div id="col2Flex">

          <!--- DEADLINE CALENDAR UI --->

          <div class="deadlines">
              <div class="month">
                  <div class="boxUIelement sq white" id="text1" onclick="moreInfo(1)">
                      <div class="textContainer">
                          <p>May</p>
                          <b>8</b>
                          <p>Deadline for Audition Video Submissions</p>
                      </div>
                  </div>
                  <div class="deadlinesInfo" id="info1">
                      <p>Extended deadline for Audition Videos and Application materials is <b>11:59pm on May 8</b><br>
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSdqqzF3c60vu6ze61oj7ZwoCQL5kiL5R01cnOGRN706dDwAKg/viewform?usp=sf_link">Submit video via online application</a><br>
                        Results will be communicated by May 15th</p>

                  </div>
              </div>
          </div>
            <!--- PHOTO SLIDER --->

            <div id="photoSlider">
                <img class="slider" src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/v1580952845/Join%20Page/Dancer/slide-1.jpg">
                <img class="slider" src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/v1580952849/Join%20Page/Dancer/slide-2.jpg">
                <img class="slider" src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/v1580952849/Join%20Page/Dancer/slide-3.jpg">
                <img class="slider" src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/v1580952846/Join%20Page/Dancer/slide-4.jpg">
                <img class="slider" src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/v1580952845/Join%20Page/Dancer/slide-5.jpg">
                <div class="controls">
                    <div class="dots" onclick="stopSlider(); currentDiv(1)"></div>
                    <div class="dots" onclick="stopSlider(); currentDiv(2)"></div>
                    <div class="dots" onclick="stopSlider(); currentDiv(3)"></div>
                    <div class="dots" onclick="stopSlider(); currentDiv(4)"></div>
                    <div class="dots" onclick="stopSlider(); currentDiv(5)"></div>
                </div>
            </div>
        </div>
    </div>

    <!--- AUDITION INFORMATION --->

    <div id="itineraries">
        <div class="heading">
            <h4>What is it like to be a Tiger Dancer?</h4>
        </div>
    </div>

    <div id="Col2FlexContent">
        <div id="col1Flex">
            <article class="text fullWidth">
                <h1>General Information</h1>
                <p>The Tiger Dancers are members of Clemson University’s Tiger Band and perform anytime the full-band performs. This includes: pep rallies, parades, pre-game and half-time at all home games, half-time at 1-3 away games during the season, First Friday Parade, Tigerama, bowl game, and other exhibitions. The Tiger Dancers are an exciting part of all full-band performances. Members of the group receive 2 credit hours during their fall semester!</p>
            </article>

            <article class="text fullWidth">
              <h1>Eligibility Requirements</h1>
              <ul>
                  <li>Full time Clemson student</li>
                  <li>Full time Tri County Technical College student</li>
                  <li>Bridge student</li>
                  <li>Some exceptions can be made for full time students at other up-state institutions</li>
              </ul>
            </article>
        </div>

        <div id="col2Flex">
            <article class="text fullWidth">
                <h1>Schedule During the Season</h1>
                <p>All members are expected to attend practice with Tiger Band on Monday, Wednesday, and Friday of each week from 4:00 - 6:00pm. Each member must also be available for a weekly sectional practice with their instructor for a two-hour sectional at a time to be determined when the season begins.</p>
            </article>

            <article class="text fullWidth">
                <h1>Appearance</h1>
                <p>All members must represent Clemson University with good character and a positive image. Each member will be required to be uniform at all appearances including hair, make-up, costume, etc. A Tiger Dancer must maintain a good standing in the community and be a positive role model at all times (at practice, in the stands, at games, pep rallies, online, etc.) </p>
            </article>

            <article class="text fullWidth">
                <h1>Financial Responsibility</h1>
                <p>The average cost for a new member to acquire all of the supplies, warm-up, uniform, etc. is approximately $200 for returners and $450 for new members.</p>
                <p>Dancers will be able to keep everything they've purchased (including their uniform) at the conclusion of the season.</p>
                <p>The first deposit is due June 1st and the balance will be due July 15th.</p>
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
