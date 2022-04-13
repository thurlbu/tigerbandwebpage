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
                                    <a href="https://www.youtube.com/user/clemsontigerband" target="_blank">
            							<div id="youtube" class="socialBorder">
            								<img class="socialIcon" src="/img/logos/youtubeWhite.png" alt="Youtube">
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

         <a href="https://clemsontigerband.shopwindow.io/content/render/cms_landing_page/122e0ebb-5281-4cd6-919d-d9fc9e072904?presentation=web" class="boxWrapper" target="_blank">
             <article class="text">
                 <h1>Sign Up Today</h1>
                 <img class="articleImg" src='/img/CuseAmp.jpg'>
                 <p>Click here to register with Tiger Band and receive information about what it takes to be a member of Tiger Band.</p>
                 <p>You'll get <u><b>EXCLUSIVE</u></b> information and become eligible for <u><b>EARLY REGISTRATION</u></b> to events BEFORE they're released to the public!</p>
             </article>
         </a>



        </div>

        <div id="col2Flex">


          <article class="media">
              <h1>Tri-County Tech</h1>
              <p>Did you know that students at Tri-County Tech can also participate in Tiger Band? Visit the join page for audition details!!</p>
              <div class="iframeContainer">
                  <div class="iFrameAspectRatio">
                     <iframe width="560" height="315" src="https://www.youtube.com/embed/NQH7In_Kmq0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
