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
    <title>Video Audition | Clemson Drumline</title>
    <link rel="stylesheet" href="../css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="The official website of the Clemson University Drumline">
    <meta name="keywords" content="Clemson, University, Drumline, CUD, Marching, Percussion, Band, Drum Line, Yamaha, Drums, Remo, Drumheads, Heads, Sabian, Cymbals, Vic Firth, Drumsticks, Sticks, Sheet Music, Music, mp3, pdf, Technique, Manuals, Articles, Audition, Schedule, Information, Packets, Packet, Photo, Gallery, Members, Instructional, Staff">
    <meta name="copyright" content="2009-2018 Clemson University Drumline">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#f66733">
    <meta name="theme-color" content="#522d80">
</head>

<!--- HEADER --->

<input type='checkbox' id='mobileMenu'>

<div id="mobileHeader">
	<a href="/drumline/"><img id="tbMobileLogo" src="../img/logos/Drumline%20Mobile%20Header.svg" width="120"></a>
	<label for="mobileMenu" id="menuButton"><span>=</span></label>
</div>

<label id='mobileScreenShade' for='mobileMenu'></label>

<!--- NAVIGATION --->

<?php
    include('../header.php');
    echo getHeader('video_auditions');
?>

<!--- PAGE CONTENT --->

<body>
    <div class="heading">
        <h3>Clemson University Drumline</h3>
        <h4>Video Audition Information</h4>
    </div>

    <!--- DEADLINES UI --->

    <div class="deadlines">
        <div class="month num1">
            <div class="boxUIelement sq white" id="text1" onclick="moreInfo(1)">
                <div class="textContainer">
                    <p>December</p>
                    <b>15</b>
                    <p>Music Available</p>
                </div>
            </div>
            <div class="boxUIelement sq white" id="text2" onclick="moreInfo(2)">
                <div class="textContainer">
                    <p>May</p>
                    <b>4</b>
                    <p>Audition Workshop</p>
                </div>
            </div>
            <div class="deadlinesInfo" id="info1">
                <p>Audition materials for VIDEO round will be available on website</p>
            </div>
            <div class="deadlinesInfo" id="info2">
                <p>Clemson University Drumline Pre-Audition Workshop (P.A.W.)
                <br>Saturday, May 4 - 9am to 6pm
                <br>Brooks Center - Room 112
                <br><a href="https://docs.google.com/forms/d/e/1FAIpQLSde61C389qTfQCChtwPz4pcHvOSLQyfJKcaFsnshiJtRLXIWA/viewform">Click here to register!</a></p>
            </div>
        </div>
        <div class="month num2">
            <div class="boxUIelement sq white" id="text3" onclick="moreInfo(3)">
                <div class="textContainer">
                    <p>July</p>
                    <b>1</b>
                    <p>Video Deadline</p>
                </div>
            </div>
            <div class="boxUIelement sq white" id="text4" onclick="moreInfo(4)">
                <div class="textContainer">
                    <p>July</p>
                    <b>8</b>
                    <p>Audition Results</p>
                </div>
            </div>
            <div class="deadlinesInfo" id="info3">
                <p>Deadline for VIDEO round audition submissions<p>
            </div>
            <div class="deadlinesInfo" id="info4">
                <p>Audition results announced<br>
                    Those selected must report to CALL BACK auditions on Monday, August 10</p>
            </div>
        </div>
        <div class="month num3">
            <div class="boxUIelement sq white" id="text6" onclick="moreInfo(6)">
                <div class="textContainer">
                    <p>August</p>
                    <b>10</b>
                    <p>Callback Auditions</p>
                </div>
            </div>
            <div class="boxUIelement sq white" id="text7" onclick="moreInfo(7)">
                <div class="textContainer">
                    <p>August</p>
                    <b>14</b>
                    <p>Band Camp</p>
                </div>
            </div>
            <div class="deadlinesInfo" id="info6">
                <p>CUD CALL BACK Auditions<br>
                8:30AM - 5:30PM<br>
                Brooks and Bellamy Theaters<p>
            </div>
            <div class="deadlinesInfo" id="info7">
                <p>Tiger Band Preseason Camp begins</p>
            </div>
        </div>
    </div>

    <!--- ANNOUCEMENTS/ARTICLES --->

    
    <div id="Col2FlexContent" class="auditions">
        <div id="col1Flex">
            <article class="media">
            <h1 class="purpleText">Audition Tutorial</h1>
            <p>Here’s a video tutorial walking you through the audition and submission process.</p>
            <div class="iframeContainer">
                <div class="iFrameAspectRatio">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/9n2Ulib8CbI" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </article>
        </div>

        <div id="col2Flex">

            <article class="text fullWidth">
                <h1 class="purpleText">2019 Clemson University Drumline Auditions</h1>
                <p>CUD is looking for players who want to be a part of the drumline as an ensemble and not just play a certain instrument. This means understanding and respecting that the Clemson Drumline is made up of 4 sections - snares, quads, basses, and cymbals - and each section is of equal importance to Tiger Band, to the music, and to our success as a unit. At Clemson, there is no hierarchy. Everybody is valued, and everybody contributes. We will accept multiple video submissions for those that are auditioning for multiple sections.
                <a href="https://docs.google.com/document/d/1Okp__K2LMh1i7LlnYH1yi1Yi24QMDZQs22gzKJV-IIE" class="richLink" target="_blank">Video Audition Requirements<br>for Each Section</a>
                </p>
            </article>
        </div>
    </div>

    <!--- SUBMISSION PROCESS UI --->

    <div class="heading">
        <h4>Submission Process</h4>
    </div>

    <div class="process">
        <div class="processItem">
            <div class="date">
                <h7>Practice</h7>
                <h6>1</h6>
            </div>
            <div class="processText">
                <h8>Practice audition material</h8>
                <ul>
                    <li>Practice the <a href="https://docs.google.com/document/d/1Okp__K2LMh1i7LlnYH1yi1Yi24QMDZQs22gzKJV-IIE" target="_blank">audition music</a> until you are completely comfortable performing each requirement at the specified tempo.</li>
                    <li>Play with a metronome. Start slow and work your way up to the specified tempo.</li>
                </ul>
            </div>
        </div>
        <div class="processItem">
            <div class="date">
                <h7>Record</h7>
                <h6>2</h6>
            </div>
            <div class="processText">
                <h8>Record your video</h8>
                <ul>
                    <li>Start with a short introduction of yourself.</li>
                    <li>Cell phone videos are acceptable IF that is the only equipment available.</li>
                    <li>Yes, you can use your music. No, it does not have to be memorized.</li>
                    <li>If you mess up, keep recording! You can only submit ONE link per instrument. If you messed up, you can always use the YouTube editing tools to cut out major errors. See our <a href="https://www.youtube.com/watch?v=rzruW_Y9PT8" target="_blank">tutorial</a> above!</li>
                    <li>Yes, you need to play on a drum or with cymbals. Access to instruments need to be arranged through the student’s high school or CUD.</li>
                    <li>Contact us at <a href="mailto:ClemsonDrumline@gmail.com">ClemsonDrumline@gmail.com</a>, if you have exhausted all possibilities on securing an instrument and are unsuccessful.</li>
                    <li>Make sure we can clearly see your face, hands, and feet in the video. Move any music stands that are blocking our view.</li>
                    <li>Yes, you need to mark time while playing.</li>
                    <li>Yes, you need to play with a metronome. Make sure the metronome is audible on the video.</li>
                    <li>If you have any questions regarding the video requirements, contact us at <a href="mailto:ClemsonDrumline@gmail.com">ClemsonDrumline@gmail.com</a>.</li>
                </ul>
            </div>
        </div>
        <div class="processItem">
            <div class="date">
                <h7>Upload</h7>
                <h6>3</h6>
            </div>
            <div class="processText">
                <h8>Upload your video to YouTube</h8>
                <ul>
                    <li>Upload your video to YouTube as “Unlisted”.</li>
                    <li>Make any cuts and trim your video.</li>
                    <li>Once it has processed, copy the link for submission.</li>
                </ul>
            </div>
        </div>
        <div class="processItem">
            <div class="date">
                <h7>Submit</h7>
                <h6>4</h6>
            </div>
            <div class="processText">
                <h8>Submit your video link and information</h8>
                <ul>
                    <li>Open the <a href="https://docs.google.com/forms/d/e/1FAIpQLSe2yxNaI9Poqo1SrbdcsouUYpgONv68r-FbA9wlfDZfjrQreQ/viewform?c=0&w=1" target="_blank">CUD Video Audition Form</a>.</li>
                    <li>Fill out the information and copy/paste your YouTube video link.</li>
                    <li>To submit a video audition for another section, re-fill out the form and add your additional link(s).</li>
                    <br>
                    <strong><em>***Please double-check that all your information is correct, including your email address, phone number, and your video link.***</em></strong>
                </ul>
            </div>
        </div>
        <div class="processItem">
            <div class="date">
                <h7>Wait</h7>
                <h6>5</h6>
            </div>
            <div class="processText">
                <h8>Wait for our response</h8>
                <p>You will receive an email from us containing your status for call-back auditions by June 8.</p>
            </div>
        </div>
    </div>

<!-- FOOTER-->

<?php
    readfile("../footer.html");
?>

</body>
</html>

<script type="text/javascript">
    // Script for the drop down calender
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
