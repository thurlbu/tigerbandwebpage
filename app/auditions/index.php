<!DOCTYPE html>
<html>
<head>
  
    <meta charset="utf-8">
    <title>Staff | Tiger Band</title>
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
    echo getHeader('staff');
?>

<!--- PAGE CONTENT --->

<body>
    <div class="heading">
        <h3>Auditions</h3>
        <h4>Clemson University Concert Ensembles</h4>
    </div>

    <div id="Col2FlexContent" class="about">
        <div id="col1Flex">
            <article class="text fullWidth">
                <h1>Clemson University Bands</h1>
                <p>The Clemson University Bands are proud to compliment its thriving athletic band program with concert ensembles in the fall and spring semesters.</p> 
                <p>The Symphonic Band, Jazz Ensemble, Concert Band, Jazz Combos, Percussion Ensemble, and Steel Band provide an artistic outlet and an arts education opportunity for students across the campus representing a diverse list of majors. Performing concerts in the beautiful, Brooks Center for the Performing Arts, these ensembles have been bringing music to the upstate community for years.</p>
            </article>
        </div>

        <!--- NAVIGATION BOXES --->

        <div id="col2Flex">
         
            <img class="articleImg" src='/img/CUBands.png'>
                   
            
        </div>
    </div>

    <!--- STAFF --->

    <div class="heading">
        <h4>Ensemble Audition Information</h4>
    </div>

    <div id="Col2FlexContent">
        <div id="col1Flex">
        <article class="text fullWidth expand" onclick="expand(this)">
                <div class="expandButton">
                    <img src="/img/logos/dropdownArrow.svg" width="75">
                </div>
                <h1>Symphonic Band</h1>
                <h2>Fall and Spring Semesters</h2>
                <div class="staffBio">
                     <img class="articleImg" src='/img/SymphonicBand.jpg'>
                    <p></p>
                    </div>
            </article>

            <article class="text fullWidth expand" onclick="expand(this)">
                <div class="expandButton">
                    <img src="/img/logos/dropdownArrow.svg" width="75">
                </div>
                <h1>Concert Band</h1>
                <h2>Spring Semester</h2>
                <div class="staffBio">
                <img class="articleImg" src="/img/ConcertBand.jpg">
                    <p></p>
                </div>
            </article>

            <article class="text fullWidth expand" onclick="expand(this)">
                <div class="expandButton">
                    <img src="/img/logos/dropdownArrow.svg" width="75">
                </div>
                <h1>Steel Band</h1>
                <h2>Fall and Spring Semesters</h2>
                <div class="staffBio">
                <img class="articleImg" src="/img/SteelBand.jpg">
                    <p></p>
                </div>
            </article>

           
        </div>

        <div id="col2Flex">
            <article class="text fullWidth expand" onclick="expand(this)">
                <div class="expandButton">
                    <img src="/img/logos/dropdownArrow.svg" width="75">
                </div>
                <h1>Jazz Ensemble, "The Jungaleers"</h1>
                <h2>Fall and Spring Semesters</h2>
                <div class="staffBio">
                   <img class="articleImg" src='/img/JazzEnsemble.jpg'>
                   <h1>Spring 2026 Auditions</h1>
                   <br> 
                   <p>Wind players <b>(saxes, trumpets, and trombones)</b> will submit their auditions via online video submission.</p>
                   <p>You will perform <b>Groovin' High, Jordu, and Boplicity</b> WITH THE BACKGROUND TRACK. The sheet music and the background tracks can all be found in the same linked <a href="https://drive.google.com/drive/folders/1JdXvgNOe0ot5K3k19V166jgw-j5L7La_?usp=drive_link">Google Drive Folder</a>.</p>
                   <p>The first time through each tune, please play the head (the notated part melody on the music provided with all notated repeats). The second time through, play an improvised solo through at least 1 chorus on all 3 songs.</p>
                   <p>If you're not an experienced improviser, don't worry! The improvisation section will not count against your audition score, it's like extra credit. Give it a try, you might surprise yourself!</p>
                   <p>All links to music and recordings can be found here: <a href="https://drive.google.com/drive/folders/1JdXvgNOe0ot5K3k19V166jgw-j5L7La_?usp=drive_link">AUDITION MATERIALS</a></p>
                   <p>Simply film your video (cell phone video is acceptable) and upload it to a file sharing service (youtube, Google Drive, Dropbox, etc.), then submit the link on the appropriate linked form below.</p>
                   <p><a href="https://docs.google.com/forms/d/e/1FAIpQLSdbF4lyPMXkrLKT4xmH63S2yXxaHDHmrY8-9y0g9Xjsmpvpqw/viewform?usp=sf_link">SUBMISSION FORM</a></p>
                   <p>Your videos must:</p>
                   <ol>
                    <li>Be filmed in one continuous take (including time between selections).</li>
                    <li>Be completely unedited.</li>
                    <li>Have an uninhibited view of your embouchure and your hands on the keys/valves for the entire video.</li>
                    <li>Include playing through the head and soloing on all 3 tunes. Make sure that the background track CAN be heard on the recording too!</li>
                    <li>Be submitted by 3:30pm on Monday, January 12 via <a href="https://docs.google.com/forms/d/e/1FAIpQLSdbF4lyPMXkrLKT4xmH63S2yXxaHDHmrY8-9y0g9Xjsmpvpqw/viewform?usp=sf_link">THIS FORM</a></li>
                   </ol>
                   <br>
                   <p>Rhythm Section players <b>(drum set, guitar, bass, & piano)</b> will audition live on January 8 at 2:00 in Room 112 of the Brooks Center. All people interested in auditioning for the Spring 2025 Rhythm Section MUST sign up on <a href="https://docs.google.com/forms/d/e/1FAIpQLSdbF4lyPMXkrLKT4xmH63S2yXxaHDHmrY8-9y0g9Xjsmpvpqw/viewform?usp=sf_link">THIS FORM</a> by January 7. Guitarists and Bassists should bring an instrument. Amps will be provided. If you need to borrow an instrument, please contact the band office for help.</p>
                   <p>Please be prepared to comp and solo on these 3 tunes from the Real Book: <b>Groovin' High, Jordu, and Boplicity</b>. You can find music and reference recordings to <a href="https://drive.google.com/drive/folders/1JdXvgNOe0ot5K3k19V166jgw-j5L7La_?usp=drive_link">practice with here.</a></p>
                   <p>You should also be ready to comp and solo on a blues progression in Bb, F, C, and Eb in common big band styles like swing, rock, funk, various latin styles, etc.</p>

                </div>
            </article>

            <article class="text fullWidth expand" onclick="expand(this)">
                <div class="expandButton">
                    <img src="/img/logos/dropdownArrow.svg" width="75">
                </div>
                <h1>Percussion Ensemble</h1>
                <h2>Fall and Spring Semesters</h2>
                <div class="staffBio">
                <img class="articleImg" src="/img/SteelBand.jpg">
                    <p></p>
                </div>
            </article>

            <article class="text fullWidth expand" onclick="expand(this)">
                <div class="expandButton">
                    <img src="/img/logos/dropdownArrow.svg" width="75">
                </div>
                <h1>Jazz Combos</h1>
                <h2>Fall and Spring Semesters</h2>
                <div class="staffBio">
                <img class="articleImg" src="/img/Combo.jpg">
                    <p></p>
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
    //JavaScript for Collapsible Articles
    function expand(n) {
        n.classList.toggle("clicked");
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
