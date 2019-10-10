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
              <h1>2019 - 2020 Pep Band</h1>
                <img class="articleImg" src='/img/Pep Band.jpg'>
              <p>We want YOU to audition for the Basketball Pep Band!</p>
              <p>Wind auditions for the basketball band will be identical to the Tiger Band auditions.  Videos that have edited audio will not be accepted.  For an audition tutorial video and to download the music, please visit the <a href="http://tband.people.clemson.edu/join/winds/">Tiger Band Join Page.</a></p>
              <p>Drumset auditions will take place in person on the evening (exact time TBA) of Thursday, October 17.  Drummers will play Tiger Rag, Eye of the Tiger, and Look What You Made Me Do with a small live band.</p>
              <p>Audition videos for the 2019-2020 pep band must be submitted by noon on October 18 and drummers planning to audition must sign up by noon on October 16.</p>
              <p><a href="https://docs.google.com/forms/d/e/1FAIpQLSdwJQ2YuScQ3WeT-dpGLj9kBn-h_EkIRWvimbE5WCCUV0KvXg/viewform?usp=sf_link">Wind Audition Video Submission Form</a></p>
              <p><a href="https://docs.google.com/forms/d/e/1FAIpQLSdsyy2_-3UImafHiYv1JU7cE2lRNFNPdFyEhk2bWQQNGcVEug/viewform?usp=sf_link">Drum Set Audition Sign Up Form</a></p>
          </article>

            <article class="media">
                <h1>Southern Rock Show</h1>
                <p>Tiger Band welcomes special guest, guitarist Zach Thigpen, to Death Valley to help us perform the music of the Allman Brothers, Marshall Tucker Band, and Lynyrd Skynyrd!</p>
                <div class="iframeContainer">
                    <div class="iFrameAspectRatio">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/40Tbj3H1TYk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </article>

            <article class="media">
                <h1>National Championship Celebration</h1>
                <p>Celebrate Clemson's incredible 15-0 championship season with Tiger Band's halftime presentation from August 29!</p>
                <div class="iframeContainer">
                    <div class="iFrameAspectRatio">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/r_3efeyUexc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </article>


            <article class="media">
                <h1>2019 Tiger Band Pregame Video</h1>
                <p>Check out the video that plays as Tiger Band streams out of the tunnels into Death Valley to begin their Pregame Show!</p>
                <div class="iframeContainer">
                    <div class="iFrameAspectRatio">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/IQ3Z9A1zqkU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </article>


        </div>

        <div id="col2Flex">

          <article class="media">
              <h1>Tiger Band Vlog Season 2, Episode 1</h1>
              <p>Follow the members of Tiger Band through their preseason camp and find out why we are so grateful to call Clemson home!</p>
              <div class="iframeContainer">
                  <div class="iFrameAspectRatio">
                      <iframe width="560" height="315" src="https://www.youtube.com/embed/xsXJtvbAMTM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
              </div>
          </article>

          <article class="text">
              <h1>Scholarships!</h1>
              <img class="articleImg" src='/img/Horns.jpg'>
              <p>Did you know that any Clemson student, regardless of major, who participates in Tiger Band AND one of our auditioned ensembles in the fall AND spring semesters - Symphonic Band or Jazz Ensemble - will automatically receive a scholarship?  Automatic scholarships range from $400 to $500 per semester.</p>
              <p>Students who have paricipated in all-state or region band are encouraged to do an in-person audition in the spring of your senior year of high school to try for a larger scholarship amount.</p>
              <p>To schedule a scholarship audition or for any more questions, contact Lee Maiden, the band administrative assistant, at <a href="mailto:lmaiden@clemson.edu">lmaiden@clemson.edu</a> or call the band office at <a href="tel:864-656-3380">864.656.3380.</a>
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
