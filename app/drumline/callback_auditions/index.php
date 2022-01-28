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
    <title>Callback Auditions | Clemson Drumline</title>
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
    echo getHeader('callback_auditions');
?>

<!--- PAGE CONTENT --->

<body>
    <div class="heading">
        <h3>Call Back Auditions for</h3>
        <h4>2022 Clemson University Drumline</h4>
    </div>

    <!--- DEADLINES UI --->

    <div class="deadlines">
        <div class="month num1">
            <div class="boxUIelement sq white" id="text1" onclick="moreInfo(1)">
                <div class="textContainer">
                    <p>March</p>
                    <b>6</b>
                    <p>Music Available</p>
                </div>
            </div>
            <div class="boxUIelement sq white" id="text2" onclick="moreInfo(2)">
                <div class="textContainer">
                    <p>May</p>
                    <b>7</b>
                    <p>Pre-Audition Workshop</p>
                </div>
            </div>
            <div class="deadlinesInfo" id="info1">
                <p>Audition materials for VIDEO round will be available on website</p>
            </div>
            <div class="deadlinesInfo" id="info2">
                <p>Clemson University Drumline Pre-Audition Workshop (P.A.W.)
                <br>
                <br>Meet our staff, receive personal feedback, and learn the music for the video audition!
                <br>
                <br><a href="https://docs.google.com/forms/d/e/1FAIpQLSde61C389qTfQCChtwPz4pcHvOSLQyfJKcaFsnshiJtRLXIWA/viewform">CLICK HERE FOR FREE REGISTRATION!</a></p>
            </div>
        </div>
        <div class="month num2">
            <div class="boxUIelement sq white" id="text3" onclick="moreInfo(3)">
                <div class="textContainer">
                    <p>June</p>
                    <b>25</b>
                    <p>Video Audition Deadline</p>

                </div>
            </div>
            <div class="boxUIelement sq white" id="text4" onclick="moreInfo(4)">
                <div class="textContainer">
                    <p>July</p>
                    <b>2</b>
                    <p>Audition Results</p>
                </div>
            </div>
            <div class="deadlinesInfo" id="info3">
                <p>Deadline for VIDEO round audition submissions<p>
                <p><a href="https://docs.google.com/forms/d/e/1FAIpQLSe2yxNaI9Poqo1SrbdcsouUYpgONv68r-FbA9wlfDZfjrQreQ/viewform?c=0&w=1">Click here to submit your video!</a></p>
            </div>
            <div class="deadlinesInfo" id="info4">
                <p>Audition results announced</p>
                  <br>
                <p>Those selected must report to CALL BACK auditions on Monday, August 15</p>
            </div>
        </div>
        <div class="month num3">
            <div class="boxUIelement sq white" id="text6" onclick="moreInfo(6)">
                <div class="textContainer">
                    <p>August</p>
                    <b>15</b>
                    <p>Callback Auditions</p>
                </div>
            </div>
            <div class="boxUIelement sq white" id="text7" onclick="moreInfo(7)">
                <div class="textContainer">
                    <p>August</p>
                    <b>16</b>
                    <p>Pre-season Camp</p>
                </div>
            </div>
            <div class="deadlinesInfo" id="info6">
                <p>CUD CALL BACK Auditions<br>
                8:30AM - 5:30PM<br>
                Brooks and Bellamy Theaters<p>
            </div>
            <div class="deadlinesInfo" id="info7">
                <p>Tiger Band Preseason Camp begins for CUD</p>
            </div>
        </div>
    </div>

    <!--- OVERVIEW ARTICLES --->

    <div id="Col2FlexContent" class="auditions">
        <div id="col1Flex">
            <article class="text fullWidth">
                <h1 class="purpleText">2022 Drumline Auditions</h1>
                <p>Prospective CUD Members:</p>
                <p>Clemson University Drumline auditions take place in 2 rounds. The first round consists of submitting a video audition. Students may (and are encouraged) to submit auditions on multiple instruments - snare drum, bass drum, tenor drum, and cymbals - if they would like to. The deadline for this electronic submission is June 25.</p>
                <p>Auditionees will be notified about video audition results by July 2. Students who earn a call-back audition invitation will move to Clemson on August 15 to participate in the live audition round before Tiger Band's preseason camp begins.</p>
                <!-- <a href="video/" class="richLink cta">Video Audition Information</a> -->

                <div class="linkWrapper">
                    <a href="https://docs.google.com/document/d/1r2P30e5fj0bkUe800gs9fjL0Ut_yr4eZKvlEZrGmqWw/edit" class="richLink" target="_blank">Welcome Letter</a>
                </div>
            </article>
        </div>

        <div id="col2Flex">
            <article class="text fullWidth">
                <h1 class="purpleText">Schedules</h1>
                <p>A detailed band camp schedule will be sent to all prospective members in mid-late July. There will be additional weekend rehearsals up until the first football game.</p>
                <a href="https://docs.google.com/document/d/18B16Zdbj1mQUcjkRoqaJjwECXwv1rQzG-sy277p81Y4/edit?usp=sharing" class="richLink" target="_blank" title="Fall Audition Schedule">2022 Audition Schedule</a>
                <br>
                <a href="" class="richLink" target="_blank" title="Full Preseason Schedule">2022 Full Preseason Schedule</a>
            </article>
        </div>
    </div>

    <!--- AUDITION INFORMATION --->

    <div class="heading">
        <h4>Call Back Audition Information</h4>
    </div>

    <div id="Col1FlexContent">
        <article class="text fullWidth">
            <h1>Fall Audition Process</h1>
<p>Following the video audition, the live audition process will consist of two parts; an ensemble evaluation and an individual evaluation. In the ensemble evaluation, each section will audition together as a line on a rotating basis trying various player combinations. During the individual evaluation, students will be asked to sight read and may be asked to play <strong>any</strong> of the <a href="/music/">music</a> found on the website.</p>
            <p>Results for the Snare and Quad lines will be posted first. Results for the Bass line will be posted second. The Cymbal line results will be posted third. <strong>Based on your video audition results, you will be given section(s) to prepare for that will give you the best opportunity to make the line.</strong> All returning members (except for the section leaders) are required to re-audition each year — all spots are open and no spots are guaranteed.</p>
        </article>
        <article class="text fullWidth">
            <h1>Audition Mentality</h1>
            <p>CUD is looking for players who want to be a part of the drumline as an ensemble and not just play a certain instrument. This means understanding and respecting that the Clemson Drumline is made up of 4 sections - snares, quads, basses, and cymbals - and each section is of equal importance to Tiger Band, to the music, and to our success as a unit. At Clemson, there is no hierarchy. Everybody is valued, and everybody contributes.</p>
        </article>
        <article class="text fullWidth">
            <h1>Audition Material</h1>
            <p>Instrument assignments will be based on the ensemble audition (using the music found on the <a href="/music/">Music page</a>) and the individual audition (which includes sight reading). <strong>Memorization of the exercises are required for the audition</strong>; cadences, supplemental materials, and pregame music do not have to be memorized for the audition. In addition, <strong>a show excerpt will be posted on the Music page on August 2nd</strong>. This excerpt is expected to be playable with musical expression and memorized for the purpose of emulating mid-season music distribution. Please check the website on August 2nd to download the show excerpt and prepare it for the call-back auditions.</p>
            <p><u>Basses and Cymbals:</u><br/>When practicing split parts, Basses should choose one of the drums and Cymbals should choose one of the Cymbal parts described in the <a href="/doc/CymbalNotationLegend(2010.07.06).pdf" target="_blank">Notation Legend</a>. During the ensemble audition, <strong>you may be moved around</strong>, so being adaptable and having a basic knowledge of the part as a whole would be to your advantage. The cymbal line plays a variety of techniques that are described in the <a href="https://docs.google.com/document/d/1NUsNK8ojJ9HUMhJF1uHkof-qPFbd4pgOF6Sh3er-tUM/edit" target="_blank">Cymbal Technique Manual</a> including crashes, chokes, slides, hi-hats, smashes, sizzles, scrapes, and taps. Cymbals may be asked to play forte crashes and upbeat hi-hats while marking time to demonstrate sound quality and timing/feel. New cymbal players should also refer to the article, <a href="/doc/PBuyer-2001-MotivatingtheCymbalLine.pdf" target="_blank"><i>Motivating the Marching Cymbal Line</i></a> and do your best. We will teach you these techniques in further detail when you arrive at camp.</p>
        </article>
        <article class="text fullWidth">
            <h1>Helpful Tips</h1>
            <p>Your audition will be judged on the qualities described in <a href="https://docs.google.com/document/d/12B-v84rbxQIv7w7eA5s0NggdJR-T73fxU_IJ1ad7p8o/edit" target="_blank">Our Expectations</a>.</p>
            <p><strong>Practicing with a metronome is a must</strong> — if you don’t own one, there are several simulated metronomes available on the internet.</p>
            <p>Auditions will be held in the Brooks and Bellamy Theaters in the Brooks Center for the Performing Arts — an <a href="http://www.clemson.edu/campus-map/" target="_blank">Online Campus Map</a> is available on the Clemson University website.</p>
        </article>
        <article class="text fullWidth">
            <h1>Items Needed for Camp</h1>
            <p>The following items are required for auditions and camp:</p>
            <ul>
                <li>3-ring binder with all <a href="/music/">music</a> for your section in plastic page protectors (for use during auditions, through camp, and into the early season)</li>
                <li>Practice page</li>
                <li>Sticks</li>
                    <ul>
                        <li>Snares need to bring their own sticks to auditions - Vic Firth Mike Jackson signature sticks</li>
                        <li>Quads need to bring their own sticks to auditions - Vic Firth Bill Bachman Billy Clubs</li>
                        <li>Basses will be provided with mallets but should also bring sticks and a practice pad</li>
                    </ul>
                <li>Pencils (everyone) and Highlighters (basses &amp; cymbals only)</li>
                <li>Appropriate clothes and shoes for marching rehearsals</li>
                <li>Ear plugs</li>
                    <ul>
                        <li><a href="http://vicfirth.com/products/accessories/hearing-protection/high-fidelity-earplugs-regular/" target="_blank">Vic Firth ear plugs</a> will be sold at band camp and throughout the year for $10 a pair</li>
                        <li>Or, you can purchase your own - Ear plugs are required for all indoor rehearsals the entire season!</li>
                    </ul>
                <li>Required Purchases at Tiger Band Registration:</li>
                    <ul>
                        <li>Marching Shoes</li>
                        <li>Tiger Band T-shirt</li>
                        <li>Flip Folder</li>
                    </ul>
            </ul>
        </article>
    </div>

    <!--- ADDITIONAL INFORMATION --->

    <div class="heading">
        <h4 id="techniqueManuals">Additional Information</h4>
    </div>

    <div id="Col2FlexContent">
        <div id="col1Flex">
            <article class="text fullWidth">
                <h1>Technique Manuals</h1>
                <p>The Technique Manuals were introduced in 2009 as a way to standardize the CUD Technique. In previous years we had students come in to auditions with completely different playing styles and there just wasn't enough time in the early season to fix habits that caused us to look and sound differently. All students auditioning for the Clemson Drumline are expected to read and work through the Technique Manuals as they prepare for the auditions.</p>
                <p>Download and study the manual for your section before auditions. Even if you aren't coming to Clemson yet, check 'em out and see what you can learn!</p>
                <div class="linkWrapper">
                    <a href="https://docs.google.com/document/d/1Qu_tIxVRQ3GzAQaCHeNRSldaw00Hrr7pAf4j-HVCITw" target="_blank" class="richLink">Snare Manual</a>
                    <a href="https://docs.google.com/document/d/1m_H1f95n0PSOba-4KWag6p4QAhnR-QzcoTj2UigdDnY" target="_blank" class="richLink">Quad Manual</a>
                </div>
                <div class="linkWrapper">
                    <a href="https://docs.google.com/document/d/1WFW4H2aWv_h2sEc2-y3KnMzeMcPi31Lc4Ku83I4-YEU" target="_blank" class="richLink">Bass Manual</a>
                    <a href="https://docs.google.com/document/d/1NUsNK8ojJ9HUMhJF1uHkof-qPFbd4pgOF6Sh3er-tUM" target="_blank" class="richLink">Cymbal Manual</a>
                </div>
            </article>

        </div>

        <div id="col2Flex">
            <article class="text fullWidth">
                <h1>Cymbal Notation Legend</h1>
                <p>The Cymbal Notation Legend is vital to understanding the cymbal notation we utilize in Tiger Band. Keep this legend at hand until you get the hang of reading the Tiger Band cymbal parts.</p>
                <a href="../doc/CymbalNotationLegend(2010.07.06).pdf" target="_blank" class="richLink">Cymbal Notation Legend</a>
            </article>
            <article class="text fullWidth">
                <h1>Mark Time Exercise</h1>
                <p>The animation below demonstrates how we get back and forth between our two main foot positions in the context of an 8-count exercise preceded by an 8-count tap-off. The color red indicates a foot being placed down on the displayed count, and the color black indicates a stationary foot. Please note exactly when the toes come together and exactly when they come back apart.</p>
                <img src="../img/MarkTimeExercise.gif">
            </article>
        </div>
    </div>

<!-- FOOTER-->

<?php
    readfile("../footer.html");
?>

</body>
</html>

<script type="text/javascript">
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
