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
              <h1 class="purpleText">2021 Tiger Dancer Online Audition Clinics</h1>
              <p>We will be hosting 3 online audition clinics to help anyone interested in becoming a Tiger Dancer prepare for their audition.</p>
              <p>These clinics will be held on:</p>
              <ul>
                <li>Saturday, February 20 - 1:00pm-3:00pm</li>
                <li>Sunday, March 7 - 2:00pm-4:00pm</li>
                <li>Saturday, April 10 - 1:00pm-3:00pm</li>
              </ul>
              <p>During these free online clinics you'll get:</p>
              <ul>
              <li>exclusive instruction and feedback from our staff on the <b>choreography for this year's audition</b></li>
              <li>a chance to talk to and <b>ask questions of current students</b> about what it's like to be a Tiger Dancer</li>
              <li>to <b>meet some of our directors and staff.</b></li>
              </ul>
              <p>Anyone interested in becoming a Tiger Dancer is eligible to participate in a clinic, but you must fill out the registration form below!</p>
              <p><a href="https://docs.google.com/forms/d/e/1FAIpQLSfFy8kFyfvZ3Wx6w046KDA9YEtPiaYa9Ja2CiPxOsXpHJaHXw/viewform?usp=sf_link" class="richLink cta">2021 Dancer Audition Clinic Registration</a></p>
              <p>If you have any questions concerning auditions for the Tiger Dancers, please contact Marilla Riggs: <a href="mailto:marillariggs@gmail.com">marillariggs@gmail.com</a></p>
          </article>


        </div>

        <div id="col2Flex">

          <!--- DEADLINE CALENDAR UI --->

          <div class="deadlines">
              <div class="month">
                  <div class="boxUIelement sq white" id="text1" onclick="moreInfo(1)">
                      <div class="textContainer">
                          <p>February</p>
                          <b>21</b>
                          <p>Audition Details posted on this website</p>
                      </div>
                  </div>
                  <div class="deadlinesInfo" id="info1">
                      <p>Choreography and all of the audition details will be posted on this website on February 21.</p>


                  </div>
              </div>
          </div>

          <div class="deadlines">
              <div class="month">
                  <div class="boxUIelement sq white" id="text2" onclick="moreInfo(2)">
                      <div class="textContainer">
                          <p>April</p>
                          <b>21</b>
                          <p>Deadline for 2021 Audition Video Submissions</p>
                      </div>
                  </div>
                  <div class="deadlinesInfo" id="info2">
                      <p>Visit this website on or after February 21 for all audition details including submission instructions.</p>


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
