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
    <title>This Season | Tiger Band</title>
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
    include('../header.php');
    echo getHeader('this_season');
?>

<!--- PAGE CONTENT --->

<body>
    <div class="heading">
        <h3>This Season</h3>
        <h4>2024</h4>
    </div>

    <div id="Col2FlexContent">
        <div id="col1Flex">

            <!--- PHOTO SLIDER --->

            <div id="photoSlider">
                <img class="slider" src="https://i.imgur.com/xIb1dy6.jpg">
                <img class="slider" src="https://i.imgur.com/MiSxfh5.jpg">
                <img class="slider" src="https://i.imgur.com/IkdDInE.jpg">
                <img class="slider" src="https://i.imgur.com/fLCYkGb.jpg">
                <img class="slider" src="https://i.imgur.com/ri3jG0E.jpg">
                <img class="slider" src="https://i.imgur.com/K27Wc4p.jpg">
                <div class="controls">
                    <div class="dots" onclick="stopSlider(); currentDiv(1)"></div>
                    <div class="dots" onclick="stopSlider(); currentDiv(2)"></div>
                    <div class="dots" onclick="stopSlider(); currentDiv(3)"></div>
                    <div class="dots" onclick="stopSlider(); currentDiv(4)"></div>
                    <div class="dots" onclick="stopSlider(); currentDiv(5)"></div>
                    <div class="dots" onclick="stopSlider(); currentDiv(6)"></div>
                </div>
            </div>

            <!--- FOOTBALL SCHEDULE --->

            <article class="text schedule">
                <h1>2024 Clemson Tiger Band Performance Schedule</h1>
                <table>
                    <tr>
                        <th>Date</th>
                        <th></th>
                        <th>Event</th>
                        <th>Info/Location</th>
                    </tr>
                    <tr class="orange-row">
                        <td>April 6</td>
                        <td></td>
                        <td>Spring Game</td>
                        <td>Clemson, SC</td>
                    </tr>
                    <tr>
                        <td>Aug 31</td>
                        <td>@</td>
                        <td>University of Georgia Bulldogs</td>
                        <td>Atlanta, GA</td>
                    </tr>
                    <tr class="orange-row">
                        <td>Sept 6</td>
                        <td></td>
                        <td>First Friday Parade</td>
                        <td>Clemson, SC</td>
                    </tr>
                    <tr class="orange-row">
                        <td>Sept 7</td>
                        <td>VS</td>
                        <td>Appalachian State University Mountaineers</td>
                        <td>Football Reunion Day & First Responders Day</td>
                    </tr>

                    <tr class="orange-row">
                        <td>Sept 21</td>
                        <td>VS</td>
                        <td>NC State University Wolfpack</td>
                        <td>Family Weekend & Land Grant Day</td>
                    </tr>
                    <tr class="orange-row">
                        <td>Sept 28</td>
                        <td>VS</td>
                        <td>Stanford University Cardinals</td>
                        <td>Homecoming</td>
                    </tr>
                    <tr>
                        <td>Oct 5</td>
                        <td>@</td>
                        <td>Florida State University Seminoles</td>
                        <td>Tallahassee, FL</td>
                    </tr>
                    <tr>
                        <td>Oct 12</td>
                        <td>@</td>
                        <td>Wake Forest University Demon Deacons</td>
                        <td>Winston-Salem, NC</td>
                    </tr>
                    <tr class="orange-row">
                        <td>Oct 19</td>
                        <td>VS</td>
                        <td>University of Virginia Cavaliers</td>
                        <td>Clemson + Day & Breast Cancer Awareness Game</td>
                    </tr>

                    <tr class="orange-row">
                        <td>Nov 2</td>
                        <td>VS</td>
                        <td>University of Louisville Cardinals</td>
                        <td>Hall of Fame Day</td>
                    </tr>
                    <tr>
                        <td>Nov 9</td>
                        <td>@</td>
                        <td>Virginia Tech University Hokies</td>
                        <td>Blacksburg, VA</td>
                    </tr>
                    <tr>
                        <td>Nov 16</td>
                        <td>@</td>
                        <td>University of Pittsurgh Panthers</td>
                        <td>Pittsburgh, PA</td>
                    </tr>
                    <tr class="orange-row">
                        <td>Nov 23</td>
                        <td>VS</td>
                        <td>The Citadel</td>
                        <td>Military Appreciation Day & Senior Day</td>
                    </tr>
                    <tr class="orange-row">
                        <td>Nov 30</td>
                        <td>VS</td>
                        <td>University of South Carolina Gamecocks</td>
                        <td>Palmetto Bowl & IPTAY Day</td>
                    </tr>

                </table>
            </article>
        </div>

        <!--- INFORMATION ARTICLES --->

        <div id="col2Flex">
            <article class="text shows">
                <h1>2024 Major Shows</h1>
                <p><b>Pop Music Show</b></p>
                <p><b>Tiger Band Collab with Dr. Melvin Villaver</b></p>
                <p><b>TBA</b></p>
            </article>
            <article class="text officers">
                <h1>2024 Officers</h1>
                <p>Commander: <b>JC Atieh</b></p>
                <p>Vice-Commander: <b>James Suggs</b></p>
                <p>Sergeant Major: <b>Elise Calixte</b></p>
                <p>Drum Majors: <b>JC Atieh, Anna O'Flaherty, Fritz Rowell, & Dylan Whitman</b></p>
                <h1>Section Leaders: </h1>
                <p>Piccolos: <b>Elise Calixte & Avery Robinson</b></p>
                <p>Clarinets: <b>Quinnya Burns & Ruth Salas-Rodriguez</b></p>
                <p>Saxophones: <b>Jordan Brown & Clara Nichols</b></p>
                <p>Trumpets: <b>Lance Brown, Gunar Sekhon, & Parker Welsh</b></p>
                <p>Mellophone: <b>Eric Mitchell & June Simms</b></p>
                <p>Trombone: <b>Tien Nguyen & James Suggs</b></p>
                <p>Baritone: <b>Chase Snoots & Katie Susol</b></p>
                <p>Sousaphone: <b>Joey Cangelosi & Graham McCrary</b></p>
                <p>Drumline: <b>Jonathan Byers & Luke Manolescu</b></p>
                <p>Color Guard: <b>Alexis Hagedorn & Eva Grace Kirkman</b></p>
                <p>Twirlers: <b>Caitlin Parker</b></p>
                <p>Dancers: <b>Allyson Good & Madison Lombardo</b></p>
                <p>Operations Team Leader: <b>Ellie Autry & Lucia Kirkland</b></p>
            </article>
        </div>
    </div>

    <!--- FOOTBALL ACTIVITIES --->

    <div class="heading">
            <h4>Football Activities</h4>
        </div>

    <div id="Col2FlexContent">
        <div id="col1Flex">
            <article class="text">
                <h1>Friday Night Lights</h1>
                    <img class="articleImg" src='/img/Friday Night Lights.jpg'>
                <p>Tiger Band joins forces with local high school bands to show their support for the high school marching activity.</p>
                <p>Keep an eye out for some orange in the stands on Friday night because you never know when we might head your way.</p>
            </article>
            <article class="text">
                <h1>Amphitheater Concert</h1>
                    <img class="articleImg" src='/img/90Minutes.jpg'>
                <p>90-minutes before kick-off, Tiger Band serenades the crowd with Clemson favorites and previews the day's halftime show. See the dancers, twirlers, and color guard and enjoy the sounds of Tiger Band.</p>
                <p>What better way to prepare for a gameday in Clemson than to listen to Tiger Band in this beautiful setting with thousands of Clemson fans?</p>
            </article>
            <article class="text">
                <h1>The Most Exciting 25 Seconds in College Football</h1>
                    <img class="articleImg" src='/img/25Second.jpg'>
                <p>The Clemson football team enters the field after touching Howard's Rock and running down the hill to the sounds of Tiger Rag.</p>
                <p>In 1985, Brent Musburger dubbed our stadium entrance "the most exciting 25 seconds in college football" and anyone who has seen it is sure to agree.</p>
                <p>It is truly an experience you will never forget.</p>
            </article>
        </div>
        <div id="col2Flex">
            <article class="text">
                <h1>Tiger Walk</h1>
                    <img class="articleImg" src='/img/TigerWalk.jpg'>
                <p>Two hours and ten minutes before kick-off, Tiger Band welcomes the football team to Death Valley.</p>
                <p>Get up close and personal with the team as they walk through the fans on their way to the stadium to prepare for the game.</p>
                <p>Come join Tiger Band at the Oculus and help us cheer on our Clemson Tigers!</p>
            </article>
            <article class="text">
                <h1>Game Day Parade</h1>
                    <img class="articleImg" src='/img/ParadeHighFive.jpg'>
                <p>60-minutes before kickoff, Tiger Band parades down Fort Hill to Death Valley.</p>
                <p>Join thousands of fans lining the streets of Clemson's campus to welcome Tiger Band into Death Valley.</p>
                <p>Tiger Band will get you pumped up for gameday with their energy and passion and the sounds of Tiger Rag.</p>
                <p>If you're lucky, you may even get a high five!</p>
            </article>
            <article class="text">
                <h1>Post-Game</h1>
                    <img class="articleImg" src='/img/PostGameDrums.jpg'>
                <p>After gathering at the paw at every home game, stick around to enjoy a post-game concert from the talented Clemson University Drumline.</p>
                <p>You never know what you'll get from the CUD.  Upside-down or right-side-up, they're sure to entertain with their music and choreography.</p>
                <p>One lucky fan even walks away with a special gift.  Come out and support the drumline at midfield after the game!</p>
            </article>
        </div>
    </div>

<!--- FOOTER --->

<?php
    readfile("../footer.html");
?>
</body>

<script type="text/javascript">
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
</html>
