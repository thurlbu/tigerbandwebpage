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
                          <p>March</p>
                          <b>1</b>
                          <p>Deadline for Tiger Dancer 1st Round Videos</p>
                      </div>
                  </div>
                  <div class="deadlinesInfo" id="info1">
                      <p>Submit 1st round audition video <a href="https://docs.google.com/forms/d/e/1FAIpQLSeZhP4prLMub0NQtU9K0gNe0cNMi_RFMS2YrLToPhwgKClRLA/viewform?usp=dialog">HERE</a> by the end of the day on March 1.</p>


                  </div>
              </div>
          </div>


          <article class="text fullWidth">
              <h1 class="purpleText">2025 Tiger Dancer Auditions</h1>    
          <p>The 2025 Tiger Dancer auditions will consist of 2 rounds. The first will be 2 short video submissions. A second round of call back auditions will take place live on campus on April 6.</p>
          <p>The first 2 audition videos are due on <b>March 1.</b> All results will be communicated via email by <b>March 10</b>.</p>
          <p><b>YOU MUST SUBMIT THE FIRST 2 VIDEOS BY MARCH 1 IN ORDER TO BE CONSIDERED FOR THE LIVE CALL BACKS ON APRIL 6.</b></p>
          <p>Your 2 audition videos - explained in the next section - will all need to follow these requirements (videos containing substitutions or omissions will not be considered):</p>
          <ul>
            <li>Each indvidual video must be one continuous shot. <b>No editing or splicing of different takes together.</b></li>
            <li>All videos must be new footage</li>
            <li>Please wear a form-fitting black bra top or tank top, black leggings, dance shoes (jazz, ballet, turners, etc), and please perform in your gameday hair and makeup (you may refer to the our instagram page for examples).</li>
          </ul>
          <p>All submissions will be evaluated by a panel of:</p>
            <ul>
              <li>3-4 independent, expert dance judges</li>
              <li>Tiger Band Dancer Instructor</li>
            </ul>
            <p>All scores from the panel will be added together to create a composite score for the audition and the process will be overseen by the Tiger Band directors. Returning members will earn 1 bonus point on their audition for every year of participation in Tiger Band.</p>
            <p><a href="/doc/2025ScoreSheetTD.pdf">Click here to view the scoresheet that all judges will use to evaluate the audition.</a></p>
            <br>
<p><a href="https://docs.google.com/forms/d/e/1FAIpQLSeZhP4prLMub0NQtU9K0gNe0cNMi_RFMS2YrLToPhwgKClRLA/viewform?usp=dialog" class="richLink cta">2025 Tiger Dancer Audition Video Submission Form</a></p>
          <br>
          <h1 class="purpleText">2nd Round Live Callback Audition</h1>
          <h5 class="purpleText">April 6 - Clemson University Campus</h5>
          <p>Results of the first round of video auditions will be communicated via email on or before March 10.</p>
          <p>Students that are invited to campus for the second round of live auditions should plan to arrive on the Clemson University campus by 9:00am on April 6 and can plan to be finished by 3:00pm at the latest.</p>
          <p>Students will receive more specific details on March 10, but the invitees should be ready for:<p>
          <ul>
            <li>A group warm-up session</li>
            <li>A choreography learning session</li>
            <li>A group performance of the learned choreography</li>
            <li>An individual performance of learned choreography</b></li>
            <li>A performance of individual tricks</li>
          </ul>

        <p>All final audition results will be posted by the end of the day.</p>
        <p>Please be aware that accomodations for the on-campus call back auditions will be made only for students doing official Clemson University Study Abroad programs or required internships.</p>

          <p><a href="https://docs.google.com/forms/d/e/1FAIpQLSeZhP4prLMub0NQtU9K0gNe0cNMi_RFMS2YrLToPhwgKClRLA/viewform?usp=dialog" class="richLink cta">2025 Tiger Dancer Audition Video Submission Form</a></p>

              </article>
          <!--- PHOTO SLIDER --->

          <div id="photoSlider">
              <img class="slider" src="https://i.imgur.com/zfP682h.jpg">
              <img class="slider" src="https://i.imgur.com/LI6ecfs.jpg">
              <img class="slider" src="https://i.imgur.com/Xpk099p.jpg">
              <img class="slider" src="https://i.imgur.com/f4P01rO.jpg">
              <img class="slider" src="https://i.imgur.com/8LwA4wl.jpg">
              <div class="controls">
                  <div class="dots" onclick="stopSlider(); currentDiv(1)"></div>
                  <div class="dots" onclick="stopSlider(); currentDiv(2)"></div>
                  <div class="dots" onclick="stopSlider(); currentDiv(3)"></div>
                  <div class="dots" onclick="stopSlider(); currentDiv(4)"></div>
                  <div class="dots" onclick="stopSlider(); currentDiv(5)"></div>
              </div>
          </div>

        </div>



          <!--- DEADLINE CALENDAR UI --->
              <div id="col2Flex">
          <div class="deadlines">
              <div class="month">
                  <div class="boxUIelement sq white" id="text2" onclick="moreInfo(2)">
                      <div class="textContainer">
                          <p>April</p>
                          <b>6</b>
                          <p>2nd Round Live Auditions</p>
                      </div>
                  </div>
                  <div class="deadlinesInfo" id="info2">
                      <p>A second round of live auditions will take place on campus for those that have been invited.</p>
                  </div>
              </div>
          </div>


          <article class="text fullWidth">
            <h1 class="purpleText">Video 1</h1>
            <h5 class="purpleText">Choreography - Obsessed</h5>
            <p>The first video will be a choreographed routine to <b>Obsessed</b> performed by Tiger Band.</p>
            <p><b>Your video should only include the front view.</b> The rear view is for learning purposes only.</p>
            <p>You can learn the choreography from the video below:</p>
            <p><iframe width="560" height="315" src="https://www.youtube.com/embed/3HLEWs53N2o?si=8TrLjm7XQWC67yUU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></p>
            <p>Please use the audio recording posted below to make your video and please be sure that we can hear the music on your video.</p>
            <div id="audioContainer">
                <div class="auditionAudio">
                    <p>Obsessed</p>
                    <audio src="/audio/Obsessed.mp3" controls></audio>

                </div>
                  </div>
<br>
                  <br>
<br>
                  <br>
                  <h1 class="purpleText">Video 2</h1>
                  <h5 class="purpleText">Choreography - Tiger Rag</h5>
                  <p>The second video will be a choreographed routine to <b>Tiger Rag</b> performed by Tiger Band.</p>
                  <p><b>Your video should only include the front view.</b> The rear view is for learning purposes only.</p>
                  <p>You can learn the choreography from the video below:</p>
                  <p><iframe width="560" height="315" src="https://www.youtube.com/embed/hi1KQaZ6Tf4?si=5F5m8vrWUy2cljpq" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></p>
                  <p>Please use the audio recording posted below to make your video and please be sure that we can hear the music on your video.</p>
                  <div id="audioContainer">
                      <div class="auditionAudio">
                          <p>Tiger Rag</p>
                          <audio src="/audio/TigerRag.mp3" controls></audio>

                      </div>
                        </div>

                              <br>
                    <p><a href="https://docs.google.com/forms/d/e/1FAIpQLSeZhP4prLMub0NQtU9K0gNe0cNMi_RFMS2YrLToPhwgKClRLA/viewform?usp=dialog" class="richLink cta">2025 Tiger Dancer Audition Video Submission Form</a></p>
                    <p>If you have any questions concerning auditions for the Tiger Dancers, please reach out via email to Marilla Riggs at: <a href="mailto:clemsontigerdancers@gmail.com">clemsontigerdancers@gmail.com</a></p>
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
