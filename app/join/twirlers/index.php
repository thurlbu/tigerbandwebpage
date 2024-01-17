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

    <div id="Col2FlexContent">
        <div id="col1Flex">
          <!--- DEADLINE CALENDAR UI --->

          <div class="deadlines">
              <div class="month">
                  <div class="boxUIelement sq white" id="text1" onclick="moreInfo(1)">
                      <div class="textContainer">

                          <p>March</p>
                          <b>1</b>
                          <p>Deadline for 2024 Feature Twirler Auditions</p>
                      </div>
                  </div>
                  <div class="deadlinesInfo" id="info1">
                      <p>2024 Feature Twirler video auditions will be accepted until 11:59pm on March 1. Please submit via <a href="https://docs.google.com/forms/d/e/1FAIpQLSdOHpqg6512_OlxOlsBHQ_LSF19nBZ6bDmYYr-w-ph_bEE4Sg/viewform?usp=sf_link">THIS LINKED FORM.</a></p>

                  </div>


              </div>
          </div>

          <article class="text fullWidth">
                          <h1 class="purpleText">2024 Feature Twirler Auditions</h1>

                          <p>Clemson University Tiger Band is now accepting audition applications for Feature Twirler for the 2024 season!</p>
                          
                          <p>All auditions for Clemson University Feature Twirler will be via video submission.</p>

                          <p>In order for us to judge all submissions fairly, the requirements for these submissions are specifically detailed below. No substitutions will be accepted.</p>

                            <p>If you have any questions concerning auditions for the Feature Twirler position, you can always reach out via email to: <a href="mailto:ClemsonTwirlers@gmail.com?subject=Tiger Feature Twirler Audition Question">ClemsonTwirlers@gmail.com</a></p>

                            <p>Your audition videos - explained in the next section - will all need to follow these requirements:</p>
                            <ul>
                              <li>Each individual video must be one continuous shot. <b>No editing or splicing of different takes together.</b></li>
                              <li>All twirling videos must be filmed outside. The interview video may be filmed anywhere.</li>
                              <li>All videos must be new footage - <b>videos of past competitions or field performances will not be accepted.</b></li>
                            </ul>
                          <p>All submissions will be evaluated by a panel of:</p>
                            <ul>
                              <li>3-4 independent judges - all certified nationally</li>
                              <li>Tiger Band Twirler Instructor</li>
                            </ul>
                            <p>All scores from the panel will be added together to create a composite score for the audition and the process will be overseen by the Tiger Band directors. Returning members will earn 1 bonus point on their audition for every year of participation in Tiger Band.</p>
                            <p><a href="/doc/FTScoreSheet2024.pdf">Click here to view the scoresheet that all judges will use to evaluate the audition.</a></p>
                            <br>
                            <p><a href="https://docs.google.com/forms/d/e/1FAIpQLSdOHpqg6512_OlxOlsBHQ_LSF19nBZ6bDmYYr-w-ph_bEE4Sg/viewform?usp=sf_link" class="richLink cta">2024 Clemson Feature Twirler Audition Video Submission Form</a></p>
                            <br>
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
                          <p>The Feature Twirler will receive the Carolyn Creel Scholarship if yearly academic requirements are met.</p>
                          <p>If you have any questions concerning auditions for the Feature Twirler Position, please reach out via email to: <a href="mailto:ClemsonTwirlers@gmail.com?subject=Tiger Feature Twirler Audition Question">ClemsonTwirlers@gmail.com</a></p>
                          <p><a href="https://docs.google.com/forms/d/e/1FAIpQLSdOHpqg6512_OlxOlsBHQ_LSF19nBZ6bDmYYr-w-ph_bEE4Sg/viewform?usp=sf_link" class="richLink cta">2024 Clemson Feature Twirler Audition Video Submission Form</a></p>
                      </article>

            <!--- PHOTO SLIDER --->

            <div id="photoSlider">
                <img class="slider" src="https://i.imgur.com/vr2JzmQ.jpg">
                <img class="slider" src="https://i.imgur.com/Q41gp22.jpg">
                <img class="slider" src="https://i.imgur.com/oHEhL1Y.jpg">
                <img class="slider" src="https://i.imgur.com/ykjn5xG.jpg">
                <img class="slider" src="https://i.imgur.com/63FGSnv.jpg">
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
          <div class="deadlines">
              <div class="month">
                  <div class="boxUIelement sq white" id="text3" onclick="moreInfo(3)">
                      <div class="textContainer">
                          <p>March</p>
                          <b>15</b>
                          <p>Deadline for Tiger Twirler 1st Round Videos.</p>
                      </div>
                  </div>
                  <div class="deadlinesInfo" id="info3">
                      <p>2024 Tiger Twirler Auditions must be submitted by 11:59pm via the <a href="https://docs.google.com/forms/d/e/1FAIpQLSdgm1qipvG2zzcygLFMVaXVPR3kXsxFQxmRv_leo0HEsrqnAg/viewform?usp=sf_link">audition form.</a> First round results will be communicated on or before March 20.</p>


                  </div>
              </div>
          </div>

          <div class="deadlines">
              <div class="month">
                  <div class="boxUIelement sq white" id="text2" onclick="moreInfo(2)">
                      <div class="textContainer">
                          <p>April</p>
                          <b>13</b>
                          <p>2nd Round Live Auditions</p>
                      </div>
                  </div>
                  <div class="deadlinesInfo" id="info2">
                      <p>A second round of live auditions will take place on campus for those that have been invited.</p>


                  </div>
              </div>
          </div>
          <article class="text fullWidth">
              <h1 class="purpleText">2024 Tiger Twirler Auditions</h1>
              <p>The 2024 Tiger Twirler auditions will consist of 2 rounds. The first will be 3 short video submissions. A second round of call back auditions will take place live on campus on April 13.</p>
              <p>The first 3 audition videos are due on <b>March 15.</b> The results of the first round will be communicated via email on or before <b>March 20.</b></p>
              <p><b>YOU MUST SUBMIT THE FIRST 3 VIDEOS BY MARCH 15 IN ORDER TO BE ELIGIBLE TO BE CONSIDERED FOR THE LIVE CALL BACKS ON APRIL 13.</b></p>
              <p>Your 3 audition videos - explained in the next section - will all need to follow these requirements (videos with substitutions or omissions will not be considered):</p>
              <ul>
                <li>Each indvidual video must be one continuous shot. <b>No editing or splicing of different takes together.</b></li>
                <li>All twirling videos must be filmed outside. Your interview video may be filmed anywhere.</li>
                <li>All videos must be new footage - <b>videos of past competitions or field performances will not be accepted.</b></li>
                <li>Please wear a black top, black pants or leggings, jazz shoes, and please perform in your gameday hair and makeup. Hair can be up or down for the twirling videos.</li>
              </ul>
              <p>All submissions will be evaluated by a panel of:</p>
                <ul>
                  <li>3-4 independent judges - all certified nationally</li>
                  <li>Tiger Band Twirler Instructor</li>
                </ul>
                <p>All scores from the panel will be added together to create a composite score for the audition and the process will be overseen by the Tiger Band directors. Returning members will earn 1 bonus point on their audition for every year of participation in Tiger Band.</p>
                <p><a href="/doc/TTScoreSheet2024.pdf">Click here to view the scoresheet that all judges will use to evaluate the audition.</a></p>
              <br>
              <p><a href="https://docs.google.com/forms/d/e/1FAIpQLSdgm1qipvG2zzcygLFMVaXVPR3kXsxFQxmRv_leo0HEsrqnAg/viewform?usp=sf_link" class="richLink cta">2024 Tiger Twirler Video Submission Form</a></p>
              <br>
              <h1 class="purpleText">Video 1</h1>
              <h5 class="purpleText">Individual Choreography</h5>
              <p>The first video will be an individually choreographed routine to <b>More than a Feelin'</b> performed in the past by Tiger Band. Please use the audio recording posted below.</p>
              <div id="audioContainer">
                  <div class="auditionAudio">
                      <p>More than a Feelin'</p>
                      <audio src="/audio/More_Than_a_Feeling.mp3" controls></audio>
                  </div>
                    </div>
              <p>You may show us anything in this routine, but please include the following <b>required tricks</b> in your performance:</p>
              <ul>
                <li>1, 2, & 3 baton work</li>
                <li>Toss Illusion (May be substituted with Double Illusion or Toss Spin Illusion)</li>
                <li>Dance Body Work</li>
                <li>Minimum 3-Turn</li>
                <li>At least one trick with the following catches: Left, Right, Backhand, & Blind</li>
              </ul>
              <br>
              <h1 class="purpleText">Video 2</h1>
              <h5 class="purpleText">Basic Skills</h5>
              <p>In the second video, please demonstrate the following skills in a single unedited and unspliced video:</p>
              <ul>
                <li>Right Split</li>
                <li>Left Split</li>
                <li>Toss Illusion (3 times) <b>(May be substituted with double illusion or toss spin illusion)</b></li>
                <li>3-turn (3 times) <b>(May be substituted with a larger number of turns)</b></li>
                <li>3-Baton: 5 juggles with loops into 4 vertical boxes (3 times)</li>
                <li>Toss Walkover (3 times) <b>(Walkover may be substituted with a toss cartwheel for partial credit)</b></li>
                <li>Horizontal 2 Turn (3 times)</li>
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
              <br>
              <h1 class="purpleText">2nd Round Live Callback Audition</h1>
              <h5 class="purpleText">April 13 - Clemson University Campus</h5>
              <p>Results of the first round of video auditions will be communicated via email on or before March 20.</p>
              <p>Students that are invited to campus for the second round of live auditions should plan to arrive on the Clemson University campus by 10:00am on April 13 and can plan to be finished by 1:30pm at the latest.</p>
              <p>Students will receive more specific details on March 20, but the 2nd round live audition will consist of:<p>
              <ul>
                <li>A group warm-up session</li>
                <li>A choreography learning session</li>
                <li>A group performance of the learned choreography</li>
                <li>An individual performance of learned choreography</b></li>
                <li>A performance of individual tricks</li>
              </ul>

            <p>All final audition results will be posted by the end of the day.</p>

                        <br>
              <p><a href="https://docs.google.com/forms/d/e/1FAIpQLSdgm1qipvG2zzcygLFMVaXVPR3kXsxFQxmRv_leo0HEsrqnAg/viewform?usp=sf_link" class="richLink cta">2024 Tiger Twirler Video Submission Form</a></p>
              <p>If you have any questions concerning auditions for the Tiger Twirlers, please reach out via email to: <a href="mailto:ClemsonTwirlers@gmail.com">ClemsonTwirlers@gmail.com</a></p>
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
                <p>The average cost for a member to acquire all of the supplies, warm-up, uniform, etc. is approximately $600.</p>
                <p>Twirlers will be able to keep everything they've purchased (including their uniform) at the conclusion of the season.</p>
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
