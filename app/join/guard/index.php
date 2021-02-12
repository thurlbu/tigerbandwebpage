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
    <title>Tiger Guard Auditions | Tiger Band</title>
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
        <h4>Tiger Guard</h4>
    </div>

    <div id="Col2FlexContent" class="about">
        <div id="col1Flex">
          <div class="deadlines">
              <div class="month">
                  <div class="boxUIelement sq white" id="text3" onclick="moreInfo(3)">
                      <div class="textContainer">
                          <p>July</p>
                          <b>10</b>
                          <p>Deadline for Tiger Guard 1st round videos</p>
                      </div>
                  </div>
                  <div class="deadlinesInfo" id="info3">
                      <p>After first round videos are submitted, all audition candidates will receive the choreography for the round 2 video electronically on July 10. It will also be posted on this website at the same time.</p>


                  </div>
              </div>
          </div>
            <article class="text fullWidth">
                <h1 class="purpleText">2021 Tiger Guard Auditions</h1>
                <p>All auditions for the Clemson University Tiger Guard will be completed via online video submission.</p>
                <p>This year's audition will consist of 4 separate short videos. Each of the videos must be <b>unedited and shot in one-continuous take.</b> Individual videos that have splices will not be considered.</p>
                <p>The first 3 videos - for all returners and new members - must be submitted by <b>July 10</b>.</p>
                <p>The fourth video - for all returners and new members - must be submitted by <b>July 17</b>. Both deadlines must be met in order to receive full consideration.</p>
                <p>The content of these videos is explained below in detail.</p>
                <p>After you create your videos, please upload them to google drive or another file sharing service. When you're ready to submit, simply fill out the <a href="https://docs.google.com/forms/d/e/1FAIpQLSexqgT6ILCQbdsF2zIpR2CzTWLP15CB1zHev1cTJbihUnv7WA/viewform?usp=sf_link">on-line application</a>.</p>
                <p>Choreography for the 4th video will be emailed to everyone on July 10 who submitted their first 3 videos. Final results will be communicated by July 25.</p>
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSexqgT6ILCQbdsF2zIpR2CzTWLP15CB1zHev1cTJbihUnv7WA/viewform?usp=sf_link" class="richLink cta">Tiger Guard Application</a>
                <p>If you have any questions about auditions or anything else, please contact Terry Kent: <a href="mailto:tkent25646@aol.com?subject=Tiger Guard Audition Question">tkent25646@aol.com</a>.</p>
            </article>

            <!--- DEADLINE CALENDAR UI --->



        </div>

        <div id="col2Flex">



          <div class="deadlines">
              <div class="month">
                  <div class="boxUIelement sq white" id="text2" onclick="moreInfo(2)">
                      <div class="textContainer">
                          <p>July</p>
                          <b>17</b>
                          <p>Deadline for Tiger Guard 2nd round videos</p>
                      </div>
                  </div>
                  <div class="deadlinesInfo" id="info2">
                      <p>Deadline to submit a video of your performance of the round 2 choreography sent to you on July 10.</p>


                  </div>
              </div>
          </div>



            <!--- PHOTO SLIDER --->

            <div id="photoSlider">
                <img class="slider" src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/v1580952920/Join%20Page/Guard/slide-1.jpg">
                <img class="slider" src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/v1580952921/Join%20Page/Guard/slide-2.jpg">
                <img class="slider" src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/v1580952919/Join%20Page/Guard/slide-3.jpg">
                <img class="slider" src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/v1580952917/Join%20Page/Guard/slide-4.jpg">
                <img class="slider" src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/v1580952918/Join%20Page/Guard/slide-5.jpg">
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
            <h4>Audition Information</h4>
        </div>
    </div>

    <div id="Col2FlexContent">
        <div id="col1Flex">

          <article class="text fullWidth">
              <h1>Audition Videos</h1>
              <p>The 2021 Tiger Guard auditions will consist of 4 short video submissions:</p>
              <ul>
              <li>Video 1 will cover choreography that you have lots of time to learn and perfect.</li>
              <li>Video 2 will cover basic skills in body movement and equipment technique.</li>
              <li>Video 3 will be a short interview style video for us to get to know you.</li>
              <li>Video 4 will cover different choreography that you will have a limited time (1 week) to learn.</li>
            </ul>
              <p>Each of these videos will be described in detail below.</p>
              <p>After you have completed the videos, you must submit them via this application form:</p>
              <p><a href="https://docs.google.com/forms/d/e/1FAIpQLSexqgT6ILCQbdsF2zIpR2CzTWLP15CB1zHev1cTJbihUnv7WA/viewform?usp=sf_link" class="richLink cta">Tiger Guard Application</a></p>
              <p>The first 3 audition videos are due on <b>July 10.</b> The last will be due on <b>July 17.</b></p>
              <p><b>YOU MUST SUBMIT THE FIRST 3 VIDEOS BY JULY 10 IN ORDER TO BE ELIGIBLE TO SUBMIT THE LAST VIDEO ON JULY 17.</b></p>
              <p>Your 4 audition videos - explained in the next section - will all need to follow these requirements:</p>
              <ul>
                <li>Each indvidual video must be one continuous shot. <b>No editing or splicing of different takes together.</b></li>
                <li>All videos must be filmed outside.</li>
                <li>All videos must be new footage - <b>returners may not submit audition videos from previous seasons.</b></li>
              </ul>
              <br>
              <p>All submissions will be evaluated by a panel of Tiger Band staff.</p>
                <p>All scores from the panel will be added together to create a composite score for the audition and the process will be overseen by the Tiger Band directors. Returning members will earn 1 bonus point on their audition for every year of participation in Tiger Band.</p>
                <p><a href="/doc/CGScoreSheet2021.pdf">Click here to view the scoresheet that all judges will use to evaluate the audition.</a></p>
              <br>
              <h1 class="purpleText">Video 1</h1>
              <h5 class="purpleText">Choreography</h5>
              <p>The first video will consist of your performance of the Tiger Guard choreography to 2 Clemson school songs: Tiger Fanfare and Orange Bowl March.</p>
              <p>Please refer to following video to learn the choreography for these 2 songs.</p>
              <p>This tutorial video has front and back views for learning purposes only. Your video should only contain the front view. Make sure that we can hear the music on your audition video. You can download the audio tracks below.</p>
              <div class="iframeContainer">
                  <div class="iFrameAspectRatio">
                      <iframe width="560" height="315" src="https://www.youtube.com/embed/Zp1nVLWh9mg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
              </div>
              <br>
              <div id="audioContainer">
                  <div class="auditionAudio">
                      <p>Tiger Fanfare:</p>
                      <audio src="/audio/Tiger Fanfare.mp3" controls></audio>
                  </div>
                  <div class="auditionAudio">
                      <p>Orange Bowl March:</p>
                      <audio src="/audio/Orange Bowl March.mp3" controls></audio>
                  </div>
              </div>
<br>
<h1 class="purpleText">Video 2</h1>
<h5 class="purpleText">Basic Skills</h5>
<p>In the second video, a demonstration the following skills is required in a single unedited and unspliced video:</p>
<ul>
  <li>8 to 12 steps of a <b>Jazz Run</b></li>
  <li>at least <b>2 Chasse and 2 Saute maneuvers</b> in combination</li>
  <li>16 counts of <b>Drop Spins</b></li>
  <li>2 <b>Cone-Tosses</b></li>
  <li>2 <b>45-Tosses</b></li>
  <li>2 <b>Tosses-From-The-Flag</b></li>
</ul>
<p>You may also include a rifle demonstration if you feel comfortable. The rifle portion IS NOT REQUIRED. If you would like to include the rifle portion, it should include:</p>
<ul>
  <li>8 counts of right hand spins with a single out</li>
  <li>8 counts of left hand spins with a single out</li>
  <li>2 double tosses</li>
  <li>2 triple tosses</li>
  <li>2 quad tosses</li>
</ul>
<p>Each of these skills is explained in detail in the video below along with some tips of what our judges are looking for.</p>
<p><iframe width="560" height="315" src="https://www.youtube.com/embed/P5K8dSUFIGw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></p>
<br>
<h1 class="purpleText">Video 3</h1>
<h5 class="purpleText">Interview</h5>
<p>The third video will be an <b>interview video</b> for you to introduce yourself to our staff and directors.</p>
<p>Please submit a video of yourself addressing the following information:</p>
<ul>
  <li>Name, hometown, major, current high school, and an interesting fact about yourself</li>
  <li>Why did you choose Clemson University?</li>
  <li>Why do you want to be a member of the Tiger Guard?</li>
</ul>
    <br>
    <h1 class="purpleText">Video 4</h1>
    <h5 class="purpleText">Learned Choreography</h5>
    <p>Every candidate who has submitted the first 3 videos will be sent choreography to learn on July 10. The fourth video, <b>due July 17,</b> will be your performance of that choreography.</p>
    <p>The purpose of this part of the audition process is to gauge how well you can learn new choreography quickly. There will be occasions when Tiger Band has limited time to learn new material due to the NCAA football schedule.</p>
    <p>This routine will be emailed to every audition applicant and also posted on this website.</p>
    <br>
      <p><a href="https://docs.google.com/forms/d/e/1FAIpQLSexqgT6ILCQbdsF2zIpR2CzTWLP15CB1zHev1cTJbihUnv7WA/viewform?usp=sf_link" class="richLink cta">Tiger Guard Application</a></p>
  <br>
              <p>Please direct all questions concerning auditions for the Tiger Guard to Terry Kent: <a href="mailto:tkent25646@aol.com?subject=Tiger_Guard_Audition_Question">tkent25646@aol.com</a>.</p>
          </article>
        </div>

        <div id="col2Flex">
          <article class="text fullWidth">
              <h1>General Information</h1>
              <p>The Tiger Guard is full members of the Clemson University Tiger Band and perform whenever and wherever the full band performs. As a member, you will perform live for over 750,000 each year and be seen by over 25 million more during nationally televised events.</p>
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

          <article class="text fullWidth">
              <h1>Weekly Schedule</h1>
              <ul>
                  <li>As	a	member,	you	will	earn	2	credit	hours	for	your	participation	in	the	fall	semester.	Grading	is	based	mainly	on	attendance.</li>
                  <li>Full	band	rehearsal	4:00pm	– 6:00pm	Mondays,	Wednesdays	and	Fridays.</li>
                  <li>Sectional	Rehearsal	6:00pm	– 8:00pm	Mondays	if	needed.</li>
                  <li>Game	day	Rehearsal times	depend on	game time.</li>
                  <li>All	Full	Band	performances</li>
              </ul>
          </article>
            <article class="text fullWidth">
                <h1>Financial Responsibility</h1>
                <p>The	Guard	members	acquire	a	warm–up	jacket for	cooler weather	and	shoes.	Extra	cost	could	be	gloves,	a	guard	member t-shirt	and	items	similar	to	this	as	a	section.	Approximate	cost	for	shoes	and	warm-up	is	about	$100.00.</p>
            </article>

            <article class="text fullWidth">
                <h1>Appearance</h1>
                <p>Tiger	guard	members	are	a	positive	role	model	and	represent	Clemson	University	and	Tiger	Band at	all	times	with	good	character	and	a	positive	image.</p>
                <p>Each	member	agrees	to remain	in	full	uniform	at	all	appearances	including	hair,	make-up,	uniform	etc.</p>
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
