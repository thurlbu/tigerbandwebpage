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
          <div class="deadlines">
              <div class="month">
                  <div class="boxUIelement sq white" id="text1" onclick="moreInfo(1)">
                      <div class="textContainer">
                          <p>April</p>
                          <b>14</b>
                          <p>Videos of first 2 routines due</p>
                      </div>
                  </div>
                  <div class="deadlinesInfo" id="info1">
                      <p>After first round submissions are submitted, all audition candidates will receive the choreography for the round 2 video electronically on April 14. It will also be posted on this website at the same time.</p>
                      <p><a href="https://docs.google.com/forms/d/e/1FAIpQLSf-rYxVeh9_2xC_J4thsSiFPRGeOv9QlbzqIk-tUQ7QOb0q6A/viewform?usp=sf_link" class="richLink cta">Tiger Dancer Application</a></p>

                  </div>
              </div>
          </div>

          <div class="deadlines">
              <div class="month">
                  <div class="boxUIelement sq white" id="text2" onclick="moreInfo(2)">
                      <div class="textContainer">
                          <p>April</p>
                          <b>21</b>
                          <p>Deadline for video of final routine</p>
                      </div>
                  </div>
                  <div class="deadlinesInfo" id="info2">
                      <p>Deadline to submit a video of your performance of the round 2 choreography sent to you on April 14.</p>


                  </div>
              </div>
          </div>
          <article class="text fullWidth">
              <h1 class="purpleText">2021 Tiger Dancer Auditions</h1>
          <p>The 2021 Tiger Dancer auditions will consist of 3 short video submissions.</p>
          <p>The audition deadline for 2021 has passed.</p>
          <p>The first 2 audition videos are due on <b>April 14.</b> The last will be due on <b>April 21.</b></p>
          <p><b>YOU MUST SUBMIT THE FIRST 2 VIDEOS BY APRIL 14 IN ORDER TO BE ELIGIBLE TO SUBMIT THE LAST VIDEO ON APRIL 21.</b></p>
          <p>Your 3 audition videos - explained in the next section - will all need to follow these requirements:</p>
          <ul>
            <li>Each indvidual video must be one continuous shot. <b>No editing or splicing of different takes together.</b></li>
            <li>All videos must be new footage</li>
            <li>Please wear a form-fitting black top, black pants or leggings, jazz shoes, and please perform in your gameday hair and makeup (if applicable).</li>
          </ul>
          <p>All submissions will be evaluated by a panel of:</p>
            <ul>
              <li>4 independent, expert dance judges</li>
              <li>Tiger Band Dancer Instructor</li>
            </ul>
            <p>All scores from the panel will be added together to create a composite score for the audition and the process will be overseen by the Tiger Band directors. Returning members will earn 1 bonus point on their audition for every year of participation in Tiger Band.</p>
            <p><a href="/doc/DancerScoreSheet2021.pdf">Click here to view the scoresheet that all judges will use to evaluate the audition.</a></p>
          <br>


              </article>
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

        <div id="col2Flex">

          <!--- DEADLINE CALENDAR UI --->
          <article class="text fullWidth">
            <h1 class="purpleText">Video 1</h1>
            <h5 class="purpleText">Choreography - Yeah!</h5>
            <p>The first video will be a choreographed routine to <b>Yeah! by Usher</b> performed by Tiger Band.</p>
            <p>You can learn the choreography from the video below:</p>
            <p><iframe width="560" height="315" src="https://www.youtube.com/embed/n-IETgoVYWs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></p>
            <p>Please use the audio recording posted below to make your video and please be sure that we can hear the music on your video.</p>
            <div id="audioContainer">
                <div class="auditionAudio">
                    <p>Yeah!</p>
                    <audio src="/audio/Yeah.mp3" controls></audio>
                </div>
                  </div>

                  <br>

                  <br>
                  <h1 class="purpleText">Video 2</h1>
                  <h5 class="purpleText">Choreography - Tiger Rag</h5>
                  <p>The second video will be a choreographed routine to <b>Tiger Rag</b> performed by Tiger Band.</p>
                  <p>You can learn the choreography from the video below:</p>
                  <p><iframe width="560" height="315" src="https://www.youtube.com/embed/sFj-XCLKq3c" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></p>
                  <p>Please use the audio recording posted below to make your video and please be sure that we can hear the music on your video.</p>
                  <div id="audioContainer">
                      <div class="auditionAudio">
                          <p>Tiger Rag</p>
                          <audio src="/audio/TigerRag.mp3" controls></audio>
                      </div>
                        </div>
                        <br>
                        <h1 class="purpleText">Video 3</h1>
                        <h5 class="purpleText">Learned Choreography - Don't Start Now</h5>
                        <p>Every candidate who has submitted the first 2 videos will be sent choreography to learn on April 14. The third video, <b>due April 21,</b> will be your performance of that choreography.</p>
                        <p>The purpose of this part of the audition process is to gauge how well you can learn new choreography quickly. There will be occasions when Tiger Band has limited time to learn new material due to the NCAA football schedule.</p>
                        <p>Your video should only include the front view. The rear view is for learning purposes only.</p>
                        <p>You can learn the choreography from the video below:</p>
                        <p><iframe width="560" height="315" src="https://www.youtube.com/embed/cAjuvWhlBJc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></p>
                        <p>Please use the audio recording posted below to make your video and please be sure that we can hear the music on your video.</p>
                        <div id="audioContainer">
                            <div class="auditionAudio">
                                <p>Don't Start Now</p>
                                <audio src="/audio/Don'tStartNow.mp3" controls></audio>
                            </div>
                              </div>
                              <br>
                    <p><a href="https://docs.google.com/forms/d/e/1FAIpQLSfU-EhuPwF3tD0Un7u0kfG0U-XVAFrT36yN-FKgAobAquuTSw/viewform?usp=sf_linkk" class="richLink cta">Final Video Submission Form</a></p>
                    <p>If you have any questions concerning auditions for the Tiger Dancers, please reach out via email to Marilla Riggs at: <a href="MarillaRiggs@gmail.com">MarillaRiggs@gmail.com</a></p>
                  </article>





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
