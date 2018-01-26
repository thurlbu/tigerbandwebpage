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
	<a href="/website/"><img id="tbMobileLogo" src="/img/logos/TigerBandMobileLogo.png" width="120"></a>
	<label for="mobileMenu" id="menuButton"><span>=</span></label>
</div>
	
<label id='mobileScreenShade' for='mobileMenu'></label>
	
<!--- NAVIGATION --->
    
<nav class="homepage">
    <a href="/website/" class="active">Home</a>
    <a href="/this_season/">This Season</a>
    <a href="/join/">Join</a>
    <a href="/bands/">Bands</a>
    <a href="/affiliates/">Affiliates</a>
    <a href="/about/">About</a>
    <a href="/members/">Members Only</a>
    <a href="/contact/">Contact</a>
</nav> 
    
<!--- PAGE CONTENT --->
    
<body>
    <!--- FULL SCREEN MAIN VIDEO --->
    
    <div id="homeFullscrContainer">
        <div id="screenShadeHome"></div>
        <video id="homeVideoBkg" autoplay loop muted>
            <source src="/img/WebsiteVideo.mp4" type="video/mp4">
        </video>
    </div>
    
    <div id="homepageTitle">
        <h2>Clemson University</h2>
        <h1>Tiger Band</h1>
    </div>
    
    
    <img id="tbHomeLogo" src="/img/logos/TigerBandWhite.png">
    <img id="clemsonLogo" src="/img/logos/clemsonPaw.svg" width="75">
    
    <!--- BOX UI --->
    
    <div id="boxUI">
        <a href="http://www.tigerbandmedia.com/">
            <div class="boxWrapper">
                <div id="box1" class="boxUIelement rect orange homepage">
                </div>
            </div>
        </a>
        <a href="http://drum.people.clemson.edu/">
            <div class="boxWrapper">
                <div id="box2" class="boxUIelement sq purp homepage">
                    <div class="textContainer hide">
                        <p>Clemson University<br/>Drumline</p>
                    </div>
                </div>
            </div>
        </a>
        <a href="https://www.youtube.com/user/clemsontigerband">
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
                        <a href="https://twitter.com/cutigerband">
							<div id="twitter" class="socialBorder">
								<img class="socialIcon" src="/img/logos/twitter.png" alt="Twitter">
							</div>
						</a>
                        <a href="https://www.instagram.com/cutigerband/">
							<div id="instagram" class="socialBorder">
								<img class="socialIcon" src="/img/logos/instagram.png" alt="Instagram">
							</div>
						</a>
                        <a href="https://www.facebook.com/cutigerband">
							<div id="facebook" class="socialBorder">
								<img class="socialIcon" src="/img/logos/facebook.png" alt="Facebook">
							</div>
						</a>
                        <a href="https://www.snapchat.com/add/cutigerband">
							<div id="snapchat" class="socialBorder">
								<img class="socialIcon" src="/img/logos/snapchat.png" alt="Snapchat">
							</div>
						</a>
                    </div>
                </div>
            </div>
        <a href="http://cutba.org/" class="boxWrapper">
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
        
        <a href="http://www.clemsontigerbandgear.com/" target="_blank" class="boxWrapper">
            <div id="box9" class="boxUIelement sq purp homepage">
                <div class="textContainer hide">
                    <p>Get the Gear</p>
                </div>
            </div>
        </a>
    </div>
    
    <!--- ANNOUNCEMENTS/ARTICLES --->
    
    <div id="headingOrange">
        <h3 class="orangeText">Tiger Band</h3>
        <h4 class="orangeText">Announcements</h4>
    </div>
    
    <section id="content">
        <article class="text">
            <h1>Sample Article</h1>
                <img class="articleImg" src='/img/clemson-tiger-band-louisville-2016-345.jpg'>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut magna tortor. Curabitur vehicula lobortis lacus, id dignissim metus interdum eu. Nam finibus lorem quis nibh pharetra, a facilisis diam mattis. Mauris sed arcu a enim vestibulum sodales. Duis feugiat nisl quam, ac lobortis erat rutrum eget. Nunc ultricies felis consectetur, venenatis risus ac, eleifend quam. Sed eros eros, pulvinar a nisl iaculis, suscipit cursus mi. Duis sodales, justo ut varius blandit, diam nisl vehicula turpis, a viverra nunc ex in enim. Interdum et malesuada fames ac ante ipsum primis in faucibus. </p>
        </article>
        <article class="media">
            <h1>Sample Media Segment</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut magna tortor.</p>
            <div class="iframeContainer">    
                <div class="iFrameAspectRatio">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/sIAt07BUOoo" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </article>
        <article class="media">
            <h1>Sample Media Segment</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut magna tortor.</p>
            <div class="iframeContainer">
                <div class="iFrameAspectRatio">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/7xErM_jNwOI" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </article>
        <article class="text">
            <h1>Sample Article 2</h1>
                <img class="articleImg" src='/img/clemson-tiger-band-louisville-2016-345.jpg'>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut magna tortor. Curabitur vehicula lobortis lacus, id dignissim metus interdum eu. Nam finibus lorem quis nibh pharetra, a facilisis diam mattis. Mauris sed arcu a enim vestibulum sodales. Duis feugiat nisl quam, ac lobortis erat rutrum eget. Nunc ultricies felis consectetur, venenatis risus ac, eleifend quam. Sed eros eros, pulvinar a nisl iaculis, suscipit cursus mi. Duis sodales, justo ut varius blandit, diam nisl vehicula turpis, a viverra nunc ex in enim. Interdum et malesuada fames ac ante ipsum primis in faucibus. </p>
        </article>
        <article class="media">
            <h1>Sample Media Segment</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut magna tortor.</p>
            <div class="iframeContainer">
                <div class="iFrameAspectRatio">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/ROM5CTPXVcI" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </article>
    </section>
    
</body>
    
<!--- FOOTER --->

<?php
    readfile("../footer.html");
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