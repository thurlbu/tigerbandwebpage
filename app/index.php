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
    <title>Clemson University Tiger Band</title>
    <link rel="stylesheet" href="/css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
    <link rel="shortcut icon" href="/favicons/favicon.ico">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="description" content="The Band That Shakes the Southland">
    <meta name="keywords" content="tiger, band, clemson, university, shakes, southland">
</head>

<!-- HEADER -->

<input type='checkbox' id='mobileMenu'>

<div id="mobileHeader">
	<a href="/"><a href="/website/"><img id="tbMobileLogo" src="/img/logos/TigerBandMobileLogo.png" width="120"></a>
	<label for="mobileMenu" id="menuButton"><span>=</span></label>
</div>

<label id='mobileScreenShade' for='mobileMenu'></label>

<!-- NAVIGATION-->

<?php
    include('header.php');
    echo getHeader('home');
?>

<!-- PAGE CONTENT-->

<body>
    <!-- FULL SCREEN MAIN VIDEO-->
    <div id="homeFullscrContainer">
        <div id="screenShadeHome"></div>
        <video id="homeVideoBkg" autoplay loop muted>
            <source src="https://d3fdmt0abme096.cloudfront.net/mainLargeCompressed.mp4" type="video/mp4">
        </video>
    </div>

    <div class="fullpageTitle">
        <h2>Clemson University</h2>
        <h1>Tiger Band</h1>
    </div>


    <img class="tbHomeLogo" src="/img/logos/TigerBandWhite.png">
    <img class="clemsonLogo" src="/img/logos/clemsonPaw.svg" width="75">

    <!-- BOX UI-->

    <div id="boxUI">
        <a href="http://www.tigerbandmedia.com/" target="_blank">
            <div class="boxWrapper">
                <div id="box1" class="boxUIelement rect orange homepage">
                </div>
            </div>
        </a>
        <a href="/drumline/" target="_blank">
            <div class="boxWrapper">
                <div id="box2" class="boxUIelement sq purp homepage">
                    <div class="textContainer hide">
                        <p>Clemson University<br/>Drumline</p>
                    </div>
                </div>
            </div>
        </a>
        <a href="https://www.youtube.com/user/clemsontigerband" target="_blank">
            <div class="boxWrapper">
                <div id="box3" class="boxUIelement sq white homepage">
                    <div class="textContainer hide">
                        <p>Clemson University<br/>Tiger Band<br/>YouTube</p>
                    </div>
                </div>
            </div>
        </a>

        <a href="https://cualumni.clemson.edu/cutba-interest" target="_blank" class="boxWrapper">
            <div id="box4" class="boxUIelement sq purp homepage">
                <div class="textContainer hide">
                    <p>Sign-up for the<br>Clemson<br>Bands<br/>Newsletter</p>
                </div>
            </div>
        </a>
        <a href="https://cualumni.clemson.edu/give/cutba" target="_blank" class="boxWrapper">
            <div id="box5" class="boxUIelement sq white homepage">
                <div class="textContainer hide">
                    <p>Donate to<br/>Clemson<br/>University<br/>Bands</p>
                </div>
            </div>
        </a>
            <div id="box6"class="boxUIelement rect orange homepage">
                <div id="socMedContainer">
                    <p>Tiger Band Social Media</p>
                    <div id="icons">
                        <a href="https://twitter.com/cutigerband" target="_blank">
            							<div id="twitter" class="socialBorder">
            								<img class="socialIcon" src="/img/logos/twitter.png" alt="Twitter">
            							</div>
            						</a>
                                    <a href="https://www.instagram.com/cutigerband/" target="_blank">
            							<div id="instagram" class="socialBorder">
            								<img class="socialIcon" src="/img/logos/instagram.png" alt="Instagram">
            							</div>
            						</a>
                                    <a href="https://www.facebook.com/cutigerband" target="_blank">
            							<div id="facebook" class="socialBorder">
            								<img class="socialIcon" src="/img/logos/facebook.png" alt="Facebook">
            							</div>
            						</a>
                                    <a href="https://www.snapchat.com/add/cutigerband" target="_blank">
            							<div id="snapchat" class="socialBorder">
            								<img class="socialIcon" src="/img/logos/snapchat.png" alt="Snapchat">
            							</div>
            						</a>
                    </div>
                </div>
            </div>
        <a href="/cutba/" class="boxWrapper" target="_blank">
            <div id="box7" class="boxUIelement sq purp homepage">
                <div class="textContainer hide">
                    <p>Clemson University<br/>Tiger Band<br/>Association</p>
                </div>
            </div>
        </a>
        <a href="/join/" class="boxWrapper">
            <div id="box8" class="boxUIelement rect purp homepage">
                <div class="textContainer hide">
                    <p>Join<br>Tiger Band</p>
                </div>
            </div>
        </a>

        <a href="https://secure.touchnet.net/C20569_ustores/web/classic/store_cat.jsp?STOREID=192&CATID=371&SINGLESTORE=true" target="_blank" class="boxWrapper">
            <div id="box9" class="boxUIelement sq purp homepage">
                <div class="textContainer hide">
                    <p>Get the Gear</p>
                </div>
            </div>
        </a>
    </div>

    <!-- ANNOUNCEMENTS/ARTICLES-->

    <div class="heading">
        <h3>Tiger Band</h3>
        <h4>Announcements</h4>
    </div>

    <div id="Col2FlexContent" class="homepage">
        <div id="col1Flex">
            <article class="text">
                <h1>Join the 2019 Clemson University Tiger Band</h1>
                <a href="https://docs.google.com/forms/d/e/1FAIpQLScDPzWqHXcaJXTkyfOJhS4NZgz3peMUSawsBo8IIM3Dufx21g/viewform?usp=sf_link/" class="boxWrapper"><img class="articleImg" src='/img/2017TigerBand.jpg'></a>
                <p>Sign up today to receive information about what it takes to be a member of Tiger Band and get exclusive information and early registration to events BEFORE they're released to the public!</p>
                <p>For audition information visit our <a href="/join/">join page!</a></p>

            </article>

            <article class="text">
                <h1>Tiger Band Tours</h1>
                <p><a href="https://docs.google.com/forms/d/e/1FAIpQLSey6vLaz9zrwRNtBBIR8eyi07bIjCJFOA-MeSogzpKf-OZNRQ/viewform?usp=sf_link" class="boxWrapper"><img class="articleImg" src='/img/Gaffney.jpg'></a>
                <p>Visiting campus this spring? Make sure to sign up for a Tiger Band Tour to round out your Clemson University visit!</p>
                <p>Experience a Clemson Gameday through the eyes of one of our current Tiger Band members!</p>
                <p>Families are welcome to join as one of our Tiger Band Ambassadors walk you through our gameday experience and show you what it's like to be a member of the Band that Shakes the Southland!</p>
                <p><a href="https://docs.google.com/forms/d/e/1FAIpQLSey6vLaz9zrwRNtBBIR8eyi07bIjCJFOA-MeSogzpKf-OZNRQ/viewform?usp=sf_link">Click here to schedule a Tiger Band Tour on select Fridays and Saturdays throughout April!</a></p>
            </article>

            <article class="media">
                <h1>Tiger Band Performs The Greatest Showman</h1>
                <p>Check out Tiger Band's performance of their final show of the 2018 season. The Greatest Showman!</p>
                <p>A special thanks to the Russian Bar Trio for helping us out!</p>
                <div class="iframeContainer">
                    <div class="iFrameAspectRatio">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/LEvXFGXPBAw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </article>

            <article class="media">
                <h1>Tiger Band Vlog - National Championship</h1>
                <p>Follow Tiger Band's season behind the scenes through our weekly Vlog produced by the Tiger Band Media Team!</p>
                <p>Spoiler Alert - THE TIGERS ARE THE CHAMPIONS! Check out Tiger Band's trip to Santa Clara for the National Championship Game!</p>
                <div class="iframeContainer">
                    <div class="iFrameAspectRatio">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/MqgK6uoquuY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </article>

            <article class="media">
                <h1>We are Tiger Band</h1>
                <p>What does it mean to be a member of Tiger Band?</p>
                <div class="iframeContainer">
                    <div class="iFrameAspectRatio">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/ZK1zC3QSIAg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                </div>
            </article>
        </div>

        <div id="col2Flex">
          <article class="text">
              <h1>Scholarships!</h1>
              <img class="articleImg" src='/img/Horns.jpg'>
              <p>Did you know that any Clemson student, regardless of major, who participates in Tiger Band AND one of our auditioned ensembles in the fall AND spring semesters - Symphonic Band or Jazz Ensemble - will automatically receive a scholarship?  Automatic scholarships range from $400 to $500 per semester.</p>
              <p>Students who have paricipated in all-state or region band are encouraged to do an in-person audition in the spring of your senior year of high school to try for a larger scholarship amount.</p>
              <p>To schedule a scholarship audition or for any more questions, contact Lee Maiden, the band administrative assistant, at <a href="mailto:lmaiden@clemson.edu">lmaiden@clemson.edu</a> or call the band office at <a href="tel:864-656-3380">864.656.3380.</a>
          </article>

          <article class="text">
              <h1>2019 Twirler Auditions</h1>
              <img class="articleImg" src='/img/TwirlerSection.jpg'>
              <p>All information about 2019 Tiger Twirler and Feature Twirler auditions are posted on our <a href="http://tband.people.clemson.edu/join/twirlers/">join page.</a></p>
              <p>Applications and video submissions are due on February 28 to be considered for Feature Twirler and April 26 for the Twirling line.  Applications are being accepted now!!<p>
              <p>Don't miss this opportunity to become a member of the Band that Shakes the Southland!</p>
          </article>

            <article class="media">
                <h1>Tiger Band Performs The Avengers</h1>
                <p>Check out Tiger Band's performance of their first show of the 2018 season. The Music from the Avengers!</p>
                <div class="iframeContainer">
                    <div class="iFrameAspectRatio">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/C-vJCUiwNOw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                </div>
            </article>

            <article class="media">
                <h1>Clemson University Alma Mater</h1>
                <p>Traditions are important to Tiger Band. Enjoy Tiger Band singing the Clemson University Alma Mater led by Drum Major, Trey Lockett during our 2018 Preseason Camp.</p>
                <div class="iframeContainer">
                    <div class="iFrameAspectRatio">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/BBbSutvDE7o" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                </div>
            </article>

        </div>
    </div>
</body>

<!-- FOOTER-->

<?php
    readfile("footer.html");
?>

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
</html>
