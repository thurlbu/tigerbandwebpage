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
    <title>Clemson Bands | Tiger Band</title>
    <link rel="stylesheet" href="../css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="description" content="The Band That Shakes the Southland">
    <meta name="keywords" content="tiger, band, clemson, university, shakes, southland">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
    <link rel="shortcut icon" href="/favicons/favicon.ico">
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
    echo getHeader('bands');
?>

<!--- PAGE CONTENT --->

<body>
    <div class="heading">
        <h4>University Bands</h4>
    </div>

    <div id="Col2FlexContent">
        <div id="col1Flex">
            <a href="https://www.clemson.edu/caah/academics/performing-arts/perform/band.html" target="_blank">
              <article class="text">
                <h1>Symphonic Band</h1>
                    <img class="articleImg" src='/img/SymphonicBand.jpg'>
                <p>The Clemson University Symphonic Band is a select wind ensemble that performs contemporary and traditional concert band literature.</p>
                <p>Frequent campus concerts and tour appearances have earned high national praise for this band. Previous tours have included performances at the 2012 London Olympics, Carnegie Hall, Lincoln Center, The SCMEA Conference in Columbia, SC, New Orleans' Jackson Square, and Walt Disney World.</p>
              </article>
            </a>
            <a href="https://www.clemson.edu/caah/academics/performing-arts/perform/band.html" target="_blank">
              <article class="text">
                  <h1>Jazz Ensemble, "The Jungaleers"</h1>
                      <img class="articleImg" src='/img/JazzEnsemble.jpg'>
                  <p>Clemson University's Jazz Ensemble, also know as "The Jungaleers," (MUSIC 3630) is a Big Band with standard instrumentation.</p>
                  <p>The ensemble performs music of many different genres and has a personality and flair all its own.</p>
                  <p>The Jungaleers have a long and storied history on the Clemson University campus. Consider becoming a part of the tradition by auditioning for the jazz band this semester!</p>
              </article>
            </a>

            <a href="https://www.clemson.edu/caah/academics/performing-arts/perform/band.html" target="_blank">
              <article class="text">
                  <h1>Basketball Pep Band</h1>
                  <img class="articleImg" src='/img/PepBand.jpg'>
                  <p>A vital element in promoting Tiger Spirit, the Tiger Pep Bands perform at men's and women's home basketball games and other University functions. These students also earn a grant-in-aid stipend for their dedication.</p>
                  <p>In addition to playing at home games, a smaller portion of the pep band also travels to post season tournaments. In recent years, Pep Band members have had the opportunity to travel to Greensboro, Kansas City, Buffalo, Washington DC, Brooklyn, Manhattan, San Diego, and Omaha.</p>
              </article>
            </a>

            <a href="https://www.clemson.edu/caah/academics/performing-arts/perform/percussion.html" target="_blank">
              <article class="text">
                  <h1>Percussion Ensemble &amp; Steel Band</h1>
                    <img class="articleImg" src='/img/SteelBand.jpg'>
                  <p>The Steel Band includes 18 players and features 4 lead pans, 2 double seconds, 2 cellos, one bass, and engine room. The band performs a variety of musical styles including calypso, soca, pop, classical, and Latin.</p>
                  <p>The Gigging Steel Band, founded in 2003, is a select group of 6 players and is a professional ensemble available for hire. The Gigging Steel Band is active in the fall and spring semesters and performs on campus and in the community.</p>
                  <p>The Clemson Steel Band has recorded 3 CDs: Steelin' the Spotlight, One Small Step for Pan, and Pan Overboard.</p>
                  <p>The Clemson Steel Band performed with steelpan virtuoso Liam Teague in April 2016 and has also performed with Tom Miller, Chris Wabich, and Arthur Lipner among others. </p>
              </article>
            </a>
        </div>

        <div id="col2Flex">
            <a href="https://www.clemson.edu/caah/academics/performing-arts/perform/band.html" target="_blank">
              <article class="text">
                  <h1>Concert Band</h1>
                      <img class="articleImg" src='/img/ConcertBand.jpg'>
                  <p>The Clemson University Concert Band is open to all University students and community members without audition. The band rehearses once a week during the spring semester and presents a popular concert in April.</p>
              </article>
            </a>

            <a href="https://www.clemson.edu/caah/academics/performing-arts/perform/band.html" target="_blank">
              <article class="text">
                  <h1>Jazz Combos</h1>
                      <img class="articleImg" src='/img/Combo.jpg'>
                  <p>The Clemson Jazz Combo is a performance course designed to introduce students to small group literature from Be-Bop to the present.</p>
                  <p>Generally consisting of four to eight members, the ensemble emphasizes improvisation, group interaction, and includes solo transcription and analysis.</p>
                  <p>Special attention is given jazz theory and the application of scalar and modal concepts, harmonic function and substitution, rhythmic development, music reading skills and technical proficiency.</p>
              </article>
            </a>

            <a href="http://tband.people.clemson.edu/contact/">
              <article class="text">
                  <h1>Tiger Town Brass</h1>
                      <img class="articleImg" src='/img/TTB.jpg'>
                  <p>Interested in adding some Clemson Spirit to your event?</p>
                  <p>Tiger Town Brass is made up of 10-members of Tiger Band and is available to hire to play your favorite Clemson songs at your event.</p>
                  <p>Tiger Town Brass also performs at select Clemson Volleyball matches and University events.</p>
                  <p>For information on hiring Tiger Town Brass, please contact the Band Office through the contact form or by calling 864.656.3380.</p>
              </article>
            </a>

            <a href="http://tband.people.clemson.edu/drumline/" target="_blank">
              <article class="text">
                  <h1>Clemson University Drumline (CUD)</h1>
                      <img class="articleImg" src='/img/clemson-tiger-band-fiesta-bowl-2016-726.jpg'>
                  <p>The Clemson University Drumline (CUD) is Clemson's premier marching percussion ensemble  and is a section of the Clemson University Tiger Band - known as "The Band That Shakes The Southland." Being part of the drumline at Clemson not only teaches students how to have confidence and perform to an audience, it also teaches value of teamwork, provides character development, and builds leadership skills. Rich tradition, high standards, and performance excellence are trademarks of both the Clemson University Drumline and Tiger Band.</p>
                  <p>The mission of the Clemson Drumline is to exhibit the core values that define CUD, to demonstrate excellence in everything we do, and to improve from rehearsal to rehearsal, game to game, year to year.</p>
                  <p>The Clemson Drumline is sponsored by Yamaha Marching Percussion, Sabian Cymbals, Remo Drumheads, and Vic Firth Drumsticks. We greatly value the relationships we have with all of our sponsors.</p>
              </article>
            </a>
        </div>
    </div>

<!--- FOOTER --->

<?php
    readfile("../footer.html");
?>
</body>
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
