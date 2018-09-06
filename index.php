<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Clemson University Tiger Band</title>
    <link rel="stylesheet" href="/css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="description" content="The Band That Shakes the Southland">
    <meta name="keywords" content="tiger, band, clemson, university, shakes, southland">
</head>

<!--- HEADER --->

<input type='checkbox' id='mobileMenu'>

<div id="mobileHeader">
	<a href="/"><a href="/website/"><img id="tbMobileLogo" src="/img/logos/TigerBandMobileLogo.png" width="120"></a>
	<label for="mobileMenu" id="menuButton"><span>=</span></label>
</div>

<label id='mobileScreenShade' for='mobileMenu'></label>

<!--- NAVIGATION --->

<nav class="homepage">
    <a href="/" class="active">Home</a>
    <a href="/this_season/">This Season</a>
    <a href="/join/">Join</a>
    <a href="/bands/">Bands</a>
    <a href="/organizations/">Organizations</a>
    <a href="/staff/">Staff</a>
    <a href="/members/">Members Only</a>
    <a href="/contact/">Contact</a>
</nav>

<!--- PAGE CONTENT --->

<body>
    <!--- FULL SCREEN MAIN VIDEO --->
    <div id="homeFullscrContainer">
        <div id="screenShadeHome"></div>
        <video id="homeVideoBkg" autoplay loop muted>
            <source src="https://s3.amazonaws.com/tiger-band-website/WebsiteVideo.mp4" type="video/mp4">
        </video>
    </div>

    <div class="fullpageTitle">
        <h2>Clemson University</h2>
        <h1>Tiger Band</h1>
    </div>


    <img class="tbHomeLogo" src="/img/logos/TigerBandWhite.png">
    <img class="clemsonLogo" src="/img/logos/clemsonPaw.svg" width="75">

    <!--- BOX UI --->

    <div id="boxUI">
        <a href="http://www.tigerbandmedia.com/" target="_blank">
            <div class="boxWrapper">
                <div id="box1" class="boxUIelement rect orange homepage">
                </div>
            </div>
        </a>
        <a href="/drumline/">
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
        <a href="/cutba/" class="boxWrapper">
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

    <!--- ANNOUNCEMENTS/ARTICLES --->

    <div id="heading">
        <h3>Tiger Band</h3>
        <h4>Announcements</h4>
    </div>

    <div id="Col2FlexContent" class="homepage">
        <div id="col1Flex">
          <article class="media">
              <h1>Clemson University Alma Mater</h1>
              <p>One of the great Tiger Band Traditions is when we learn to sing the Alma Mater for the first time.  There's truly somthing in these hills...</p>
              <div class="iframeContainer">
                  <div class="iFrameAspectRatio">
                      <iframe width="560" height="315" src="https://www.youtube.com/embed/BBbSutvDE7o" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                  </div>
              </div>
          </article>

          <article class="media">
              <h1>Go Go Power Rangers</h1>
              <p>We're ready for the Power Rangers on the D-Line to lead our team for another exciting season!</p>
              <div class="iframeContainer">
                  <div class="iFrameAspectRatio">
                      <iframe width="560" height="315" src="https://www.youtube.com/embed/BMXxjykhBaw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                  </div>
              </div>
          </article>

            <article class="media">
                <h1>Lee Greenwood performs with Tiger Band</h1>
                <p>Tiger Band and Lee Greenwood perform God Bless the USA on Military Appreciation Day!</p>
                <div class="iframeContainer">
                    <div class="iFrameAspectRatio">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/IH2GsIbeoDI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                </div>
            </article>


        </div>

        <div id="col2Flex">
          <article class="text">
              <h1>Symphonic Band European Tour</h1>
                  <a href="http://tband.people.clemson.edu/doc/EuropeBrochure.pdf" class="boxWrapper"><img class="articleImg" src='/img/EuropeanTour.jpg'></a>
              <p>In case you needed another reason to get involved with the Clemson Bands...</p>
              <p>The Clemson University Symphonic Band will be touring Europe - Vienna, Salzburg, and Prague - during Spring Break 2019!!</p>
              <p>Click this article for more details and contact Dr. Spede with any questions.</p>
          </article>

            <article class="text">
                <h1>Tiger Band Tours</h1>
                <p>If you are planning a campus visit, don't forget to sign up for a Tiger Band Tour to learn first-hand what it's like to be a member of the "Band that Shakes the Southland!"</p>
                <p>Tour our facilities, learn about the history and traditions of the band, and experience a gameday through the eyes of our Tiger Band Ambassadors.</p>
                <p>Tour dates and a link to registration will be coming soon!</p>
            </article>

            <article class="media">
                <h1>Tiger Band at the 2018 Sugar Bowl</h1>
                <p>Tiger Band performs "The Spy who Saved Me" at the 2018 Sugar Bowl.</p>
                <div class="iframeContainer">
                    <div class="iFrameAspectRatio">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/oMHpLtQUejM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
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
    </div>
</body>

<!--- FOOTER --->

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
