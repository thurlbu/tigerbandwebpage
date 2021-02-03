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

                          <p>March</p>
                          <b>31</b>
                          <p>Deadline for 2021 Feature Twirler Auditions</p>
                      </div>
                  </div>
                  <div class="deadlinesInfo" id="info1">
                      <p>Deadline for 2021 Feature Twirler audition video submissions.</p>

                  </div>


              </div>
          </div>

          <article class="text fullWidth">
                          <h1 class="purpleText">2021 Feature Twirler Auditions</h1>

                          <p>The 2021 Feature Twirler auditions will consist of 4 short video submissions and a resume. This audition submission is for the FEATURE TWIRLER POSITION ONLY. If you'd like to be considered for the twirling line, you must submit a separate audition.</p>
                          <p>Please use the Feature Twirler Application link below to submit your video audition.</p>
                          <p><a href="https://docs.google.com/forms/d/e/1FAIpQLSeJHnSqIsVl_aVFzZSFpgfELboT51KYZJZ5a60gFfXZxgYAoA/viewform?usp=sf_link" class="richLink cta">Feature Twirler Application</a></p>
                          <p>Your 4 audition videos - explained in the next section - will all need to follow these requirements:</p>
                          <ul>
                            <li>Each indvidual video must be one continuous shot. <b>No editing or splicing of different takes together.</b></li>
                            <li>All videos must be filmed outside.</li>
                            <li>All videos must be new footage - <b>videos of past competitions or field performances will not be accepted.</b></li>
                            <li>You may wear whatever you like, but please perform in your gameday hair and makeup (if applicable).</li>
                          </ul>
                          <p>All submissions will be evaluated by a panel of:</p>
                            <ul>
                              <li>4 independent judges - all certified nationally</li>
                              <li>Tiger Band Twirler Instructor</li>
                            </ul>
                            <p>All scores from the panel will be added together to create a composite score for the audition and the process will be overseen by the Tiger Band directors. Returning members will earn 1 bonus point on their audition for every year of participation in Tiger Band.</p>
                            <p><a href="/doc/2021FTScoreSheet.pdf">Click here to view the scoresheet that all judges will use to evaluate the audition.</a></p>

                          <h1 class="purpleText">Video 1</h1>
                          <h5 class="purpleText">Individual Choreography</h5>
                          <p>The first video will be a <b>2:30-3:00</b> individually choreographed routine to any <b>music of your choice.</b></p>
                          <p>Suggested tricks list (not required):</p>
                          <ul>
                            <li>1, 2, 3, & 4 Baton Work</li>
                            <li>Double Illusion</li>
                            <li>Double Front Walkover</li>
                            <li>5 Turn</li>
                            <li>Aerial</li>
                            <li>Variety of Leaps & Body Work</li>
                          </ul>

                          <h1 class="purpleText">Video 2</h1>
                          <h5 class="purpleText">Fire Baton</h5>
                          <p>The second video will be a <b>1 minute</b> individually choreographed routine with a <b>fire baton</b> to any <b>music of your choice</b>.</p>
                          <p>Single fire baton work is acceptable. Multiple is preferred.</p>
                          <p><b>PLEASE OBSERVE ALL PROPER SAFETY PRECAUTIONS!</b> Do not attempt tricks or choreography beyond your ability that may become dangerous.</p>

                          <h1 class="purpleText">Video 3</h1>
                          <h5 class="purpleText">Down the Field Routine</h5>
                          <p>The third video will be a <b>"Down the Field Routine"</b> choreographed to <b>"Tiger Rah"</b> posted below.</p>
                          <p>Judges will be evaluating your <b>use of space and movement skills</b> along with the <b>choreography, performance projection, and accuracy.</b></p>
                          <div id="audioContainer">
                              <div class="auditionAudio">
                                  <p>Tiger Rah</p>
                                  <audio src="/audio/TigerRah.wav" controls></audio>
                              </div>
                                </div>
                              <br>
                              <h1 class="purpleText">Video 4</h1>
                              <h5 class="purpleText">Interview</h5>
                              <p>The fourth video will be an <b>interview video</b> for you to introduce yourself to our staff and directors.</p>
                              <p>Please submit a video of yourself addressing the following information:</p>
                              <ul>
                                <li>Name, hometown, major, twirling experience, and an interesting fact about yourself</li>
                                <li>Why did you choose Clemson University and Tiger Band?</li>
                                <li>As a Feature Twirler at Clemson University, you will be representing Tiger Band and the University on a large stage on and off the field. Describe the importance of understanding this and how you would be successful in this role.</li>
                              </ul>
                          <p><a href="https://docs.google.com/forms/d/e/1FAIpQLSeJHnSqIsVl_aVFzZSFpgfELboT51KYZJZ5a60gFfXZxgYAoA/viewform?usp=sf_link" class="richLink cta">Feature Twirler Application</a></p>
                          <p>The Feature Twirler will receive the Carolyn Creel Scholarship if yearly academic requirements are met.</p>
                          <p>If you have any questions concerning auditions for the Feature Twirler Position, please reach out via email to: <a href="mailto:ClemsonTwirlers@gmail.com?subject=Tiger Feature Twirler Audition Question">ClemsonTwirlers@gmail.com</a></p>
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
                  <div class="boxUIelement sq white" id="text3" onclick="moreInfo(3)">
                      <div class="textContainer">
                          <p>April</p>
                          <b>14</b>
                          <p>Deadline for Tiger Twirler 1st round videos</p>
                      </div>
                  </div>
                  <div class="deadlinesInfo" id="info3">
                      <p>After first round submissions are submitted, all audition candidates will receive the choreography for the round 2 video electronically on April 14. It will also be posted on this website at the same time.</p>


                  </div>
              </div>
          </div>

          <div class="deadlines">
              <div class="month">
                  <div class="boxUIelement sq white" id="text2" onclick="moreInfo(2)">
                      <div class="textContainer">
                          <p>April</p>
                          <b>21</b>
                          <p>Deadline for Tiger Twirler 2nd round videos</p>
                      </div>
                  </div>
                  <div class="deadlinesInfo" id="info2">
                      <p>Deadline to submit a video of your performance of the round 2 choreography sent to you on April 14.</p>


                  </div>
              </div>
          </div>
          <article class="text fullWidth">
              <h1 class="purpleText">2021 Tiger Twirler Auditions</h1>
              <p>The 2021 Tiger Twirler auditions will consist of 4 short video submissions and a resume.</p>
              <p>Please use the Tiger Twirler Application link below to submit your video audition.</p>
              <p><a href="https://docs.google.com/forms/d/e/1FAIpQLSfXEdONMJsG0MymXYhQSmPTf8xwKA_WmFt8UNlrBNnhr-dNJg/viewform?usp=sf_link" class="richLink cta">Tiger Twirler Application</a></p>
              <p>The first 3 audition videos are due on <b>April 14.</b> The last will be due on <b>April 21.</b></p>
              <p><b>YOU MUST SUBMIT THE FIRST 3 VIDEOS BY APRIL 14 IN ORDER TO BE ELIGIBLE TO SUBMIT THE LAST VIDEO ON APRIL 21.</b></p>
              <p>Your 4 audition videos - explained in the next section - will all need to follow these requirements:</p>
              <ul>
                <li>Each indvidual video must be one continuous shot. <b>No editing or splicing of different takes together.</b></li>
                <li>All videos must be filmed outside.</li>
                <li>All videos must be new footage - <b>videos of past competitions or field performances will not be accepted.</b></li>
                <li>Please wear a black top, black pants or leggings, jazz shoes, and please perform in your gameday hair and makeup (if applicable).</li>
              </ul>
              <p>All submissions will be evaluated by a panel of:</p>
                <ul>
                  <li>4 independent judges - all certified nationally</li>
                  <li>Tiger Band Twirler Instructor</li>
                </ul>
                <p>All scores from the panel will be added together to create a composite score for the audition and the process will be overseen by the Tiger Band directors. Returning members will earn 1 bonus point on their audition for every year of participation in Tiger Band.</p>
                <p><a href="/doc/2021TTScoreSheet.pdf">Click here to view the scoresheet that all judges will use to evaluate the audition.</a></p>
              <br>

              <br>
              <h1 class="purpleText">Video 1</h1>
              <h5 class="purpleText">Individual Choreography</h5>
              <p>The first video will be an individually choreographed routine to <b>Don't Stop Me Now</b> performed by Tiger Band in 2018. Please use the audio recording posted below.</p>
              <div id="audioContainer">
                  <div class="auditionAudio">
                      <p>Don't Stop Me Now</p>
                      <audio src="/audio/Don'tStopMeNow.mp3" controls></audio>
                  </div>
                    </div>
              <p>You may show us anything in this routine, but please include the following <b>required tricks</b> in your performance:</p>
              <ul>
                <li>1, 2, & 3 baton work</li>
                <li>Toss Illusion</li>
                <li>Dance Body Work</li>
                <li>3-Turn Catch Right</li>
                <li>3-Turn Catch Left</li>
              </ul>
              <br>
              <h1 class="purpleText">Video 2</h1>
              <h5 class="purpleText">Basic Skills</h5>
              <p>In the second video, please demonstrate the following skills in a single unedited and unspliced video:</p>
              <ul>
                <li>Left Split</li>
                <li>Right Split</li>
                <li>3-turn (3 times)</li>
                <li>Toss Illusion (3 times)</li>
                <li>Any 3-baton trick (3 times)</li>
              </ul>
              <br>
              <h1 class="purpleText">Video 3</h1>
              <h5 class="purpleText">Interview</h5>
              <p>The third video will be an <b>interview video</b> for you to introduce yourself to our staff and directors.</p>
              <p>Please submit a video of yourself addressing the following information:</p>
              <ul>
                <li>Name, hometown, major, twirling experience, and an interesting fact about yourself</li>
                <li>Why did you choose Clemson University?</li>
                <li>Why do you want to be a Tiger Twirler?</li>
              </ul>
                  <br>
                  <h1 class="purpleText">Video 4</h1>
                  <h5 class="purpleText">Learned Choreography</h5>
                  <p>Every candidate who has submitted the first 3 videos will be sent choreography to learn on April 14. The fourth video, <b>due April 21,</b> will be your performance of that choreography.</p>
                  <p>The purpose of this part of the audition process is to gauge how well you can learn new choreography quickly. There will be occasions when Tiger Band has limited time to learn new material due to the NCAA football schedule.</p>
                  <p>This routine will be around 1-and-a-half minutes and will be emailed to every audition applicant and also posted on this website.</p>
                  <br>
              <p><a href="https://docs.google.com/forms/d/e/1FAIpQLSfXEdONMJsG0MymXYhQSmPTf8xwKA_WmFt8UNlrBNnhr-dNJg/viewform?usp=sf_link" class="richLink cta">Tiger Twirler Application</a></p>
              <p>If you have any questions concerning auditions for the Tiger Twirlers, please contact reach out via email to: <a href="mailto:ClemsonTwirlers@gmail.com">ClemsonTwirlers@gmail.com</a></p>
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
