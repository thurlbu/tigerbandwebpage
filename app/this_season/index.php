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

    <a href="/mobile_nav/">
        <label id="menuButton">
            <span></span>
        </label>
    </a>
<!--- NAVIGATION --->

<?php
    include('../header.php');
    echo getHeader('this_season');
?>

<!--- PAGE CONTENT --->

<body>
    <div class="heading">
        <h3>This Season</h3>
        <h4>2019</h4>
    </div>

    <div class="articles_container">
        <div class="articles">

            <!--- PHOTO SLIDER --->

            <div class="photoSlider">
                <img class="slider" src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/v1568206225/This%20season/clemson-tiger-band-gatech-2019-520.jpg">
                <img class="slider" src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/v1568206821/This%20season/clemson-tiger-band-natty-2018-427.jpg">
                <img class="slider" src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/v1568206821/This%20season/clemson-tiger-band-gsu-2018-346.jpg">
                <img class="slider" src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/v1568206820/This%20season/clemson-tiger-band-gsu-2018-297.jpg">
                <img class="slider" src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/v1568206825/This%20season/clemson-tiger-band-cotton-bowl-2018-259.jpg">
                <img class="slider" src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/v1568206819/This%20season/clemson-tiger-band-gatech-2019-250.jpg">
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
                <div class="article__content">
                    <h1>2019 Clemson Tiger Band Performance Schedule</h1>
                    <table>
                        <tr>
                            <th>Date</th>
                            <th></th>
                            <th>Event</th>
                            <th>Info/Location</th>
                        </tr>
                        <tr class="orange-row">
                            <td>Aug 29</td>
                            <td>VS</td>
                            <td>Georgia Institute of Technology Yellow Jackets</td>
                            <td>National Championship Celebration</td>
                        </tr>
                        <tr class="orange-row">
                            <td>Sept 6</td>
                            <td></td>
                            <td>First Friday Parade</td>
                            <td>Clemson, SC - 6:00 PM</td>
                        </tr>
                        <tr class="orange-row">
                            <td>Sept 7</td>
                            <td>VS</td>
                            <td>Texas A&M Aggies</td>
                            <td>IPTAY Day</td>
                        </tr>
                        <tr class="carolina-panthers-row">
                            <td>Sept 8</td>
                            <td></td>
                            <td>Carolina Panthers</td>
                            <td>Bank of America Stadium in Charlotte, NC - 1:00pm</td>
                        </tr>
                        <tr>
                            <td>Sept 14</td>
                            <td>@</td>
                            <td>Syracuse University Orange</td>
                            <td></td>
                        </tr>
                        <tr class="orange-row">
                            <td>Sept 21</td>
                            <td>VS</td>
                            <td>Universtiy of North Carolina at Charlotte 49ers</td>
                            <td>Family Weekend</td>
                        </tr>
                        <tr>
                            <td>Sept 28</td>
                            <td>@</td>
                            <td>North Carolina University Tar Heels</td>
                            <td></td>
                        </tr>
                        <tr class="orange-row">
                            <td>Oct 12</td>
                            <td>VS</td>
                            <td>Florida State University Seminoles</td>
                            <td>Solid Orange Day</td>
                        </tr>
                        <tr>
                            <td>Oct 19</td>
                            <td>@</td>
                            <td>University of Louisville Cardinals</td>
                            <td></td>
                        </tr>
                        <tr class="orange-row">
                            <td>Oct 25</td>
                            <td></td>
                            <td>Tigerama</td>
                            <td>Memorial Stadium at 7:00pm</td>
                        </tr>
                        <tr class="orange-row">
                            <td>Oct 26</td>
                            <td>VS</td>
                            <td>Boston College Eagles</td>
                            <td>Homecoming/Football Reunion Day</td>
                        </tr>
                        <tr class="purple-row">
                            <td>Nov 2</td>
                            <td>VS</td>
                            <td>Wofford University Terriers</td>
                            <td>Military Appreciation Day/Purple Out</td>
                        </tr>
                        <tr>
                            <td>Nov 9</td>
                            <td>@</td>
                            <td>North Carolina State University Wolfpack</td>
                            <td></td>
                        </tr>
                        <tr class="orange-row">
                            <td>Nov 16</td>
                            <td>VS</td>
                            <td>Wake Forest University Demon Deacons</td>
                            <td>Senior Day/Hall of Fame Day</td>
                        </tr>
                        <tr>
                            <td>Nov 30</td>
                            <td>@</td>
                            <td>University of South Carolina Gamecocks</td>
                            <td>Palmetto Bowl</td>
                        </tr>
                        <tr>
                            <td>Dec 7</td>
                            <td>@</td>
                            <td>ACC Championship</td>
                            <td>Charlotte, NC</td>
                        </tr>
                    </table>
                </div>
            </article>
        </div>

        <!--- INFORMATION ARTICLES --->

        <div class="articles">
            <article class="text shows">
                <div class="article__content">
                    <h1>2019 Major Shows</h1>
                    <p><a href="https://www.youtube.com/watch?v=r_3efeyUexc">2018 National Championship Celebration</a></p>
                    <p><a href="https://www.youtube.com/watch?v=40Tbj3H1TYk">Southern Rock featuring guitarist Zach Thigpen</a></p>
                    <p>50th Anniversary of the Summer of 1969 and Woodstock</p>
                    <p>Military Appreciation Day</p>
                    <p>Elton John</p>
                </div>
            </article>
            <article class="text officers">
                <div class="article__content">
                    <h1>2019 Officers</h1>
                    <p><b>Commander:</b> Graham Jackson</p>
                    <p><b>Vice-Commander:</b> Alicia Cameron</p>
                    <p><b>Sergeant Major:</b> Samantha Regi</p>
                    <p><b>Drum Majors: </b> Victor Fleifel, Zach Jordan, &amp; Stephanie Linke</p>
                    <h1>Section Leaders: </h1>
                    <p><b>Piccolos:</b> Jillian McNally &amp; Maureen Zabel</p>
                    <p><b>Clarinets:</b> Grayson Davis &amp; Jason Gonzales</p>
                    <p><b>Alto Saxes:</b> Grant Howard &amp; Samantha Regi</p>
                    <p><b>Tenor Saxes:</b> Devin Lane</p>
                    <p><b>Trumpets:</b> Alicia Cameron, Nick Gustafson, &amp; Mac McCrary</p>
                    <p><b>Mellophone:</b> Sarah Razavi</p>
                    <p><b>Trombone:</b> Trevor Kimbrell &amp; Georgia Krendel</p>
                    <p><b>Baritone:</b> Anthony Benware &amp; Christopher Nahum</p>
                    <p><b>Sousaphone:</b> Graham Jackson &amp; Laura Kate Reid</p>
                    <p><b>Drumline:</b> David Cherne &amp; Briana Parcell</p>
                    <p><b>Color Guard:</b> Amber O’Dell, Ericka Pace, &amp; Olivia Papotto</p>
                    <p><b>Twirlers:</b> Reagan King</p>
                    <p><b>Dancers:</b> Catie Demaret, Elizabeth Rola, &amp; Maggie Wentworth</p>
                    <p><b>Head Band Manager:</b> Caroline Webb</p>
                    <p><b>Instrument Manager:</b> Alicia Cameron &amp; Eva Lamar</p>
                    <p><b>Uniform Manager:</b> Arianna Csiszer &amp; Sophie Greenwood</p>
                </div>
            </article>
        </div>
    </div>

    <!--- FOOTBALL ACTIVITIES --->

    <div class="heading">
            <h4>Football Activities</h4>
        </div>

    <div class="articles_container">
        <div class="articles">
            <article class="text">
                <img class="article__image" src='/img/Friday Night Lights.jpg'>
                <div class="article__content">
                    <h1>Friday Night Lights</h1>
                    <p>Tiger Band joins forces with local high school bands to show their support for the high school marching activity.</p>
                    <p>Keep an eye out for some orange in the stands on Friday night because you never know when we might head your way.</p>
                    <p>Watch Tiger Band's social media over the summer to have the chance to suggest possible destinations for the 2018 season!</p>
                    <p>The full 2019 Friday Night Lights schedule will be announced right here early in the fall.</p>
                </div>
            </article>
            <article class="text">
                <img class="article__image" src='/img/90Minutes.jpg'>
                <div class="article__content">
                    <h1>Amphitheater Concert</h1>
                    <p>90-minutes before kick-off, Tiger Band serenades the crowd with Clemson favorites and previews the day's halftime show. See the dancers, twirlers, and color guard and enjoy the sounds of Tiger Band.</p>
                    <p>What better way to prepare for a gameday in Clemson than to listen to Tiger Band in this beautiful setting with thousands of Clemson fans?</p>
                </div>
            </article>
            <article class="text">
                <img class="article__image" src='/img/25Seconds.jpg'>
                <div class="article__content">
                    <h1>The Most Exciting 25 Seconds in College Football</h1>
                    <p>The Clemson football team enters the field after touching Howard's Rock and running down the hill to the sounds of Tiger Rag.</p>
                    <p>In 1985, Brent Musburger dubbed our stadium entrance "the most exciting 25 seconds in college football" and anyone who has seen it is sure to agree.</p>
                    <p>It is truly an experience you will never forget.</p>
                </div>
            </article>
        </div>
        <div class="articles">
            <article class="text">
                <img class="article__image" src='/img/TigerWalk.jpg'>
                <div class="article__content">
                    <h1>Tiger Walk</h1>
                    <p>Two hours and ten minutes before kick-off, Tiger Band welcomes the football team to Death Valley.</p>
                    <p>Get up close and personal with the team as they walk through the fans on their way to the stadium to prepare for the game.</p>
                    <p>Come join Tiger Band at the Oculus and help us cheer on our Clemson Tigers!</p>
                </div>
            </article>
            <article class="text">
                <img class="article__image" src='/img/ParadeHighFive.jpg'>
                <div class="article__content">
                    <h1>Game Day Parade</h1>
                    <p>60-minutes before kickoff, Tiger Band parades down Fort Hill to Death Valley.</p>
                    <p>Join thousands of fans lining the streets of Clemson's campus to welcome Tiger Band into Death Valley.</p>
                    <p>Tiger Band will get you pumped up for gameday with their energy and passion and the sounds of Tiger Rag.</p>
                    <p>If you're lucky, you may even get a high five!</p>
                </div>
            </article>
            <article class="text">
                <img class="article__image" src='/img/PostGameDrums.jpg'>
                <div class="article__content">
                    <h1>Post-Game</h1>
                    <p>After gathering at the paw at every home game, stick around to enjoy a post-game concert from the talented Clemson University Drumline.</p>
                    <p>You never know what you'll get from the CUD.  Upside-down or right-side-up, they're sure to entertain with their music and choreography.</p>
                    <p>One lucky fan even walks away with a special gift.  Come out and support the drumline at midfield after the game!</p>
                </div>
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
        document.getElementById("copyright").innerHTML = "&copy " + startYear;
    }
    else {
        document.getElementById("copyright").innerHTML = "&copy " + startYear + " - " + currentYear;
    }
</script>
</html>
