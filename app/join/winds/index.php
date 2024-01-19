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
    <title>Winds Auditions | Tiger Band</title>
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
        <h4>Tiger Band Brass and Woodwinds</h4>
    </div>

    <div id="Col2FlexContent" class="about">
        <div id="col1Flex">
            <article class="text fullWidth">
                <h1 class="purpleText">2024 Tiger Band Brass and Woodwind Auditions</h1>
                <p>All auditions for wind players for the 2024 Tiger Band season will be completed by video submission. Cell phone videos are acceptable if that is the only equipment available. All of the information you need to complete and submit your video, including a video tutorial is posted below. If you still have questions, please contact the band office at 864.656.3380.</p>
                <p><a href="https://docs.google.com/forms/d/e/1FAIpQLSfY3Tys1jm4YIBHpVDHZ_DW9Tuus6bjeaYd7pvQKB8VfoGa4Q/viewform?usp=sf_link" class="richLink cta">Tiger Band Application</a></p>
                <p>The first round of drumline auditions will be via video submission due on June 22. Please see the <a href="http://tband.people.clemson.edu/drumline/">Clemson University Drumline website</a> for more details.</p>
            </article>
        </div>

        <div id="col1Flex">

            <!--- DEADLINE CALENDAR UI --->

            <div class="deadlines">
                <div class="month">
                    <div class="boxUIelement sq white" id="text1" onclick="moreInfo(1)">
                        <div class="textContainer">
                            <p>April</p>
                            <b>12</b>
                            <p>Returners & Early Decision</p>
                        </div>
                    </div>
                    <div class="boxUIelement sq white" id="text2" onclick="moreInfo(2)">
                        <div class="textContainer">
                            <p>April</p>
                            <b>26</b>
                            <p>Returners & Early Decision</p>
                        </div>
                    </div>
                    <div class="boxUIelement sq white" id="text3" onclick="moreInfo(3)">
                        <div class="textContainer">
                            <p>July</p>
                            <b>22</b>
                            <p>Accepted until full</p>
                        </div>
                    </div>
                    <div class="deadlinesInfo" id="info1">
                        <p>Returners & Early Decisions for new members Video Audition Submission Deadline</p>
                        <p><a href="https://docs.google.com/forms/d/e/1FAIpQLSfY3Tys1jm4YIBHpVDHZ_DW9Tuus6bjeaYd7pvQKB8VfoGa4Q/viewform?usp=sf_link" class="richLink cta">Tiger Band Application</a></p>
                    </div>
                    <div class="deadlinesInfo" id="info2">
                        <p>First Year Members Video Audition Submission Deadline</p>
                        <p>Returners & Early Decision applications will be notified of results via email.</p>
                    </div>
                    <div class="deadlinesInfo" id="info3">
                        <p>Rolling auditions will continue for new members only throughout the spring and summer for open positions until all positions are filled.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--- AUDITION INFORMATION --->

    <div>
        <div class="heading">
            <h4>Audition Information</h4>
        </div>
    </div>

    <div id="Col2FlexContent">
        <div id="col1Flex">
            <article class="text fullWidth">
              <h1>Content</h1>
                <p>Your audition video should contain:</p>
                <ul>
                    <li>A short introduction of yourself</li>
                    <li>Tiger Rag (one time through, stop at the end of the first ending)</li>
                    <li>2024 Audition Excerpt</li>
                </ul>
              <h1>Requirements</h1>
                <p>Both portions of the video must be done in <b><u>one,</u> <u>continuous,</u> <u>un-edited</u></b> take. (Do not turn the camera off between songs)</p>
                <p>Your face and fingers/valves/slides must be visible <b>at all times</b> in the video.</p>
                <p>Specialized instruments may use more common instruments for their audition. For example:</p>
                <ul>
                  <li>Piccolos may audition on Flute</li>
                  <li>Mellophones may audition on Horn</li>
                  <li>Baritones may audition on Euphonium or a Concert Baritone</li>
                  <li>Sousaphones may audition on Tuba</li>
                </ul>
                <p>Sheet music for Tiger Rag and the 2024 Audition Excerpt can be viewed and downloaded below.</p>
                <p><b>Returning members must submit a new video for the 2024 season.</b> Videos used in previous seasons will not be accepted.</p>
                <p>Returners: Please use the posted part for your section for the audition regardless of what part you played in previous seasons of Tiger Band.</p>
                <p>The Audition Excerpt is a portion of a selection that Tiger Band has played at halftime in the past. It is our hope that including a piece like this on the audition will give you an opportunity to better show us your musicianship and technical ability relative to a normal Tiger Band performance.</p>
              <h1>Reference Recordings</h1>
                <div id="audioContainer">
                    <div class="auditionAudio">
                        <p>Tiger Rag:</p>
                        <audio src="/audio/TigerRag.mp3" controls></audio>
                    </div>
                    
                </div>

                <p>All submissions will be evaluated by expert educators and the process will be overseen by the Tiger Band directors.</p>
                  <p>Returning members will earn 1 bonus point on their audition for every semester of participation in Tiger Band, other Clemson Bands, and private lessons with Clemson University Instructors.</p>
                  <p><a href="/doc/WindsScoreSheet2024.pdf">Click here to view the scoresheet that all judges will use to evaluate the audition.</a></p>

            </article>

        </div>

        <div id="col2Flex">
          <article class="text fullWidth">
              <h1>Submission</h1>
              <p>Upload your video to YouTube as an “unlisted” video or to another file sharing service like Google Drive, Dropbox, or Box.</p>
              <p>Secure a download link for the file that you can share with us. Please check to make sure that the permissions will allow us to view it!</p>
              <p>Fill out the online application below:</p>
              <a href="https://docs.google.com/forms/d/e/1FAIpQLSfY3Tys1jm4YIBHpVDHZ_DW9Tuus6bjeaYd7pvQKB8VfoGa4Q/viewform?usp=sf_link" class="richLink cta">Tiger Band Application</a>
          </article>
          <article class="text fullWidth">
              <h1>Tutorial</h1>
              <p>Watch this video for a step-by-step explanation of our audition process and how to submit your application.</p>
              <div class="iframeContainer">
                  <div class="iFrameAspectRatio">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/eWJ797nVkPk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
              </div>
          </article>
        </div>
    </div>

    <!--- SHEET MUSIC UI --->

    <div id="music">
        <div class="heading">
            <h4>Sheet Music for the 2024 Audition</h4>
        </div>

        <h4 class="purpleText expand" onclick="expand(this)">Tiger Rag</h4>
        <div class="expandButton">
            <img src="/img/logos/dropdownArrow.svg" width="75">
        </div>

        <div class="fileUIcontainer">
            <a href="/doc/TigerRag/TigerRag_Piccolo.pdf" target="_blank">
                <div class="fileUIfile">
                    <span>Piccolo</span>
                </div>
            </a>
            <a href="/doc/TigerRag/TigerRag_Clarinet.pdf" target="_blank">
                <div class="fileUIfile">
                    <span>Clarinet</span>
                </div>
            </a>
            <a href="/doc/TigerRag/TigerRag_AltoSax.pdf" target="_blank">
                <div class="fileUIfile">
                    <span>Alto Sax</span>
                </div>
            </a>
            <a href="/doc/TigerRag/TigerRag_TenorSax.pdf" target="_blank">
                <div class="fileUIfile">
                    <span>Tenor Sax</span>
                </div>
            </a>
            <a href="/doc/TigerRag/TigerRag_Trumpet.pdf" target="_blank">
                <div class="fileUIfile">
                    <span>Trumpet</span>
                </div>
            </a>
            <a href="/doc/TigerRag/TigerRag_Mello.pdf" target="_blank">
                <div class="fileUIfile">
                    <span>Mellophone</span>
                </div>
            </a>
            <a href="/doc/TigerRag/TigerRag_Trombone.pdf" target="_blank">
                <div class="fileUIfile">
                    <span>Trombone</span>
                </div>
            </a>
            <a href="/doc/TigerRag/TigerRag_Baritone_BC.pdf" target="_blank">
                <div class="fileUIfile">
                    <span>Baritone (BC)</span>
                </div>
            </a>
            <a href="/doc/TigerRag/TigerRag_Baritone_TC.pdf" target="_blank">
                <div class="fileUIfile">
                    <span>Baritone (TC)</span>
                </div>
            </a>
            <a href="/doc/TigerRag/TigerRag_Sousa.pdf" target="_blank">
                <div class="fileUIfile">
                    <span>Sousaphone</span>
                </div>
            </a>
        </div>

        

        <h4 class="purpleText expand" onclick="expand(this)">2024 Audition Excerpt</h4>
        <div class="expandButton">
            <img src="/img/logos/dropdownArrow.svg" width="75">
        </div>

        <div class="fileUIcontainer">
            <a href="/doc/2024AuditionExcerpts/2024Piccolo.pdf" target="_blank">
                <div class="fileUIfile">
                    <span>Piccolo</span>
                </div>
            </a>
            <a href="/doc/2024AuditionExcerpts/2024Clarinet.pdf" target="_blank">
                <div class="fileUIfile">
                    <span>Clarinet</span>
                </div>
            </a>
            <a href="/doc/2024AuditionExcerpts/2024AltoSax.pdf" target="_blank">
                <div class="fileUIfile">
                    <span>Alto Sax</span>
                </div>
            </a>
            <a href="/doc/2024AuditionExcerpts/2024TenorSax.pdf" target="_blank">
                <div class="fileUIfile">
                    <span>Tenor Sax</span>
                </div>
            </a>
            <a href="/doc/2024AuditionExcerpts/2024Trumpet.pdf" target="_blank">
                <div class="fileUIfile">
                    <span>Trumpet</span>
                </div>
            </a>
            <a href="/doc/2024AuditionExcerpts/2024Mello.pdf" target="_blank">
                <div class="fileUIfile">
                    <span>Mellophone</span>
                </div>
            </a>
            <a href="/doc/2024AuditionExcerpts/2024Trombone.pdf" target="_blank">
                <div class="fileUIfile">
                    <span>Trombone</span>
                </div>
            </a>
            <a href="/doc/2024AuditionExcerpts/2024BaritoneBC.pdf" target="_blank">
                <div class="fileUIfile">
                    <span>Baritone (BC)</span>
                </div>
            </a>
            <a href="/doc/2024AuditionExcerpts/2024BaritoneTC.pdf" target="_blank">
                <div class="fileUIfile">
                    <span>Baritone (TC)</span>
                </div>
            </a>
            <a href="/doc/2024AuditionExcerpts/2024Tuba.pdf" target="_blank">
                <div class="fileUIfile">
                    <span>Sousaphone</span>
                </div>
            </a>
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
