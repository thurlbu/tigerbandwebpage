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
    <title>Tiger Twirlers Auditions | Tiger Band</title>
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
        <h4>Tiger Twirlers</h4>
    </div>

    <div id="Col2FlexContent" class="about">
        <div id="col1Flex">
          <!--- DEADLINE CALENDAR UI --->

          <div class="deadlines">
              <div class="month">
                  <div class="boxUIelement sq white" id="text1" onclick="moreInfo(1)">
                      <div class="textContainer">

                          <p>Date</p>
                          <b>TBD</b>
                          <p>Deadline for 2021 Feature Twirler Auditions</p>
                      </div>
                  </div>
                  <div class="deadlinesInfo" id="info1">
                      <p>Deadline for 2021 Feature Twirler auditions will be announced in early 2021.</p>

                  </div>


              </div>
          </div>

          <article class="text fullWidth">
                          <h1 class="purpleText">2020 Feature Twirler Auditions</h1>
                          <br>
                          <p>Auditions for the 2020 Feature Twirler position are now complete. To learn about our audition process for future seasons, please review the information from our 2020 auditions below.</p>
                          <br>
                          <p>Your video must include performances with 1, 2, and 3 batons outside. The video can include performances with a marching band but is not required.</p>
                          <p>You may wear whatever you like, but <b>only videos shot outdoors will receive full consideration</b>. All feature twirler applicants will also be automatically considered for a position on the Tiger Twirler Team.</p>
                          <p>The Feature Twirler will receive the Carolyn Creel Scholarship if yearly academic requirements are met.</p>
                          <p>If you have any questions concerning auditions for the Feature Twirler Position, please contact Hazel Cartee: <a href="mailto:Hazel@carolinasuperstars.com?subject=Tiger Feature Twirler Audition Question">Hazel@carolinasuperstars.com</a></p>
                      </article>

            <!--- PHOTO SLIDER --->

            <div id="photoSlider">
                <img class="slider" src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/v1580952991/Join%20Page/Twirlers/slide-1.jpg">
                <img class="slider" src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/v1594934026/Join%20Page/Twirlers/Photo_Slider_1.jpg">
                <img class="slider" src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/v1594933984/Join%20Page/Twirlers/Photo_Slider_2.jpg">
                <img class="slider" src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/v1594933983/Join%20Page/Twirlers/Photo_Slider_3.jpg">
                <div class="controls">
                    <div class="dots" onclick="stopSlider(); currentDiv(1)"></div>
                    <div class="dots" onclick="stopSlider(); currentDiv(2)"></div>
                    <div class="dots" onclick="stopSlider(); currentDiv(3)"></div>
                    <div class="dots" onclick="stopSlider(); currentDiv(4)"></div>
                </div>
            </div>

        </div>

        <div id="col2Flex">

          <!--- DEADLINE CALENDAR UI --->
          <div class="deadlines">
              <div class="month">
                  <div class="boxUIelement sq white" id="text2" onclick="moreInfo(2)">
                      <div class="textContainer">

                          <p>Date</p>
                          <b>TBD</b>
                          <p>Deadline for 2021 Tiger Twirler Auditions</p>
                      </div>
                  </div>
                  <div class="deadlinesInfo" id="info2">
                      <p>Deadline for 2021 Tiger Twirler auditions will be announced in early 2021.</p>

                  </div>


              </div>
          </div>

          <article class="text fullWidth">
              <h1 class="purpleText">2020 Tiger Twirler Auditions</h1>
              <p>Auditions for the 2020 Tiger Twirlers are now complete.</p>
              <p>Audition submission information for the 2021 season will be posted here in early 2021.</p>
              <p>If you'd like to see an example of what the audition might entail, please watch last year's audition tutorial video below.</p>

              <p><iframe width="560" height="315" src="https://www.youtube.com/embed/xSwLtyVq2pQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></p>
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
              <p>If you have any questions concerning auditions for the Tiger Twirlers, please contact Hazel Cartee: <a href="mailto:Hazel@carolinasuperstars.com">Hazel@carolinasuperstars.com</a></p>
          </article>


        </div>
    </div>

    <!--- AUDITION INFORMATION --->

    <div id="itineraries">
        <div class="heading">
            <h4>What is it like to be a Tiger Twirler?</h4>
        </div>
    </div>

    <div id="Col2FlexContent">
        <div id="col1Flex">
            <article class="text fullWidth">
                <h1>General Information</h1>
                <p>The Tiger Twirlers are members of Clemson University’s Tiger Band and perform anytime the full-band performs. This includes: pep rallies, parades, pre-game and half-time at all home games, half-time at 1-3 away games during the season, First Friday Parade, Tigerama, bowl game, and other exhibitions. The Tiger Twirlers are an exciting part of all full-band performances.Members of each group receive 2 credit hours during their fall semester! </p>
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
                <p>All members must represent Clemson University with good character and a positive image. Each member will be required to be uniform at all appearances including hair, make-up, costume, etc.  A Tiger Twirler must maintain a good standing in the community and be a positive role model at all times (at practice, in the stands, at games, pep rallies, online, etc.) </p>
            </article>

            <article class="text fullWidth">
                <h1>Financial Responsibility</h1>
                <p>The average cost for a new member to acquire all of the supplies, warm-up, uniform, etc. is approximately $100 for returners and $600 for new members.</p>
                <p>Twirlers will be able to keep everything they've purchased (including their uniform) at the conclusion of the season.</p>
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
