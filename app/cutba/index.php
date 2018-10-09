<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Clemson University Tiger Band Association</title>
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="description" content="The Band That Shakes the Southland">
    <!--FIX THIS-->
    <meta name="keywords" content="tiger, band, clemson, university, shakes, southland">
</head>

<!--- HEADER --->

<input type='checkbox' id='mobileMenu'>

<div id="mobileHeader">
    <a href="/cutba/"><img id="tbMobileLogo" src="img/logos/CUTBA%20Mobile%20Header.svg" height="30"></a>
    <label for="mobileMenu" id="menuButton"><span>=</span></label>
</div>

<label id='mobileScreenShade' for='mobileMenu'></label>

<!--- NAVIGATION --->

<nav>
    <a href="/cutba/" class="active">Home</a>
    <a href="about/">About</a>
    <a href="music/">Music</a>
    <a href="contact/">Contact</a>
    <!--- MOBILE HEADER SPECIFIC LINKS -->
    <a href="/" class="mobileNav" target="_blank">Tiger Band Website</a>
    <a href="https://secure.touchnet.net/C20569_ustores/web/classic/store_cat.jsp?STOREID=192&CATID=371&SINGLESTORE=true"
        class="mobileNav" target="_blank">CUTBA and Tiger Band Merchandise</a>
    <a href="https://secure.touchnet.net/C20569_ustores/web/classic/store_cat.jsp?STOREID=192&CATID=368" class="mobileNav"
        target="_blank">Registration: Parents Day, Homecoming, &amp; E-Newsletter</a>
    <a href="https://cualumni.clemson.edu/give/cutba" class="mobileNav" target="_blank">Donate to CUTBA</a>
    <a href="http://cutba.org/CUTBAbrickReservationForm.pdf" class="mobileNav" target="_blank">Buy a Brick</a>
</nav>

<!--- PAGE CONTENT --->

<body>
    <!--- MAIN PHOTO SLIDER --->
    <div id="homeFullscrContainer">
        <div id="screenShade"></div>
        <div id="photoSlider">
            <img class="slider" src="img/CUTBA1.jpg">
            <img class="slider" src="img/CUTBA2.jpg">
            <img class="slider" src="img/CUTBA3.jpg">
            <img class="slider" src="img/CUTBA4.jpg">
            <img class="slider" src="img/CUTBA5.jpg">
        </div>
        <div class="controls">
            <div class="dots" onclick="stopSlider(); currentDiv(1)"></div>
            <div class="dots" onclick="stopSlider(); currentDiv(2)"></div>
            <div class="dots" onclick="stopSlider(); currentDiv(3)"></div>
            <div class="dots" onclick="stopSlider(); currentDiv(4)"></div>
            <div class="dots" onclick="stopSlider(); currentDiv(5)"></div>
        </div>

        <div id="homepageTitle">
            <h2>Clemson University</h2>
            <h1>Tiger Band</h1>
            <h1>Association</h1>
        </div>

        <!--- HOMEPAGE BOX UI --->

        <div class="homepageNav">
            <a href="https://secure.touchnet.net/C20569_ustores/web/classic/store_cat.jsp?STOREID=192&CATID=371&SINGLESTORE=true"
                target="_blank">
                <div class="boxWrapper">
                    <div id="homepageNav1" class="boxUIelement rect orange">
                        <div class="textContainer">
                            <p>CUTBA and Tiger Band Merchandise</p>
                        </div>
                    </div>
                </div>
            </a>

            <a href="https://secure.touchnet.net/C20569_ustores/web/classic/store_cat.jsp?STOREID=192&CATID=368" target="_blank">
                <div class="boxWrapper">
                    <div id="homepageNav2" class="boxUIelement rect purp">
                        <div class="textContainer">
                            <p>Register: Parents Day, Homecoming, &amp; E-Newsletter</p>
                        </div>
                    </div>
                </div>
            </a>

            <a href="http://tband.people.clemson.edu/" target="_blank">
                <div class="boxWrapper">
                    <div id="homepageNav3" class="boxUIelement rect orange">
                        <div class="textContainer">
                            <p>Clemson University Tiger Band</p>
                        </div>
                    </div>
                </div>
            </a>

            <a href="https://cualumni.clemson.edu/give/cutba" target="_blank">
                <div class="boxWrapper">
                    <div id="homepageNav4" class="boxUIelement rect white">
                        <div class="textContainer">
                            <p>Support Tiger Band<br>through a donation<br>to CUTBA</p>
                        </div>
                    </div>
                </div>
            </a>

            <a href="http://cutba.org/CUTBAbrickReservationForm.pdf" target="_blank">
                <div class="boxWrapper">
                    <div id="homepageNav5" class="boxUIelement rect orange">
                        <div class="textContainer">
                            <p><u>Buy a brick:</u><br>John H Butler<br>&amp; Bruce F Cook<br>Tiger Band Plaza</p>
                        </div>
                    </div>
                </div>
            </a>

        </div>
    </div>

    <!--- ARTICLES --->

    <div id="heading">
        <h4>Articles</h4>
    </div>
    <div id="Col2FlexContent" class="homepage">
        <div id="col1Flex">

            <article class="text">
                <h1 class="purpleText">CUTBA Wants YOU!</h1>
                <img class="articleImg" src='img/logos/CUTBA.png'>
                <p>Clemson University Tiger Band Association (CUTBA) is supported by alumni, parents, and friends of
                    Tiger Band who have a common interest in Tiger Band and Tiger Band students. Much of our support
                    activities are focused on needs beyond those provided by Clemson University and Clemson Athletics.
                    We believe Tiger Band should have first class facilities and Tiger Band Students should feel
                    special and have minimal cost to participate.</p>
                <p><a href="doc/CUTBA_Flyer_2016.pdf">Click here</a> for more information detailing The Clemson
                    University Tiger Band Association’s history, focus, activities, and funding.</p>
            </article>

            <article class="text">
                <h1 class="purpleText">2018 Tiger Band Parents Day!</h1>
                <img class="articleImg" src='img/PD_16.jpg'>
                <p>We're excited to welcome the parents of Tiger Band members to campus on September 29 to celebrate
                    their students' achievements and to say thank you for all of their support!</p>
                <p>Parents will have the opportunity to experience gameday through the eyes of their sons and daughers
                    and share a meal (tickets required) with them at the end of the day. Parents of graduating senior
                    band members will even have the opportunity to be on the field for the "most exciting 25-seconds in
                    college football!"</p>
                <p><a href="http://tband.people.clemson.edu/cutba/img/ParentSchedule.png">Click here for a full
                        schedule of the days' activites.</a></p>
            </article>

            <article class="text">
                <h1 class="purpleText">Looking for a unique gift?</h1>
                <img class="articleImg" src='img/products.jpg'>
                <p>The Clemson University Tiger Band Association is happy to announce that it has partnered with Entire
                    Image Inc. to produce a line of new products made from old Tiger Band uniforms.</p>
                <p>Please <a href="https://secure.touchnet.net/C20569_ustores/web/classic/store_cat.jsp?STOREID=192&CATID=371&SINGLESTORE=true">visit
                        our website</a> to see the pillows, uniforms in shadow boxes, and shakos. Don’t wait to place
                    your order – quantities are limited.</p>
            </article>
        </div>

        <div id="col2Flex">
            <article class="text">
                <h1 class="purpleText">Supporting Tiger Band...</h1>
                <img class="articleImg" src='img/CUTBADonate.jpg'>
                <p>Become a member today by making a 100% tax deductible contribution to CUTBA through The Clemson
                    Foundation/Annual Giving Office. Your membership contribution will give you recognition in three
                    areas: The Clemson Foundation, Friends of The Brooks Center, and CUTBA.</p>
                <p>All funds are used to support Tiger Band and Tiger Band Student with many events throughout the
                    year. Scholarships are also provided through CUTBA’s Endowment.</p>
                <p>There are many ways <b><u>YOU</b></u> can help support Tiger Band financially:</p>
                <ul>
                    <li><a href="https://cualumni.clemson.edu/give/cutba">A one time, immediate, online contribution
                            via credit/debit card</a></li>
                    <li><a href="http://www.clemson.edu/giving/documents/bankdraft.pdf">A recurring contribution via
                            bank draft</a></li>
                    <li><a href="http://www.clemson.edu/giving/documents/creditcarddraft.pdf">A recurring contribution
                            via a debit/credit card</a></li>
                </ul>
            </article>



            <article class="text">
                <h1 class="purpleText">Follow CUTBA on Social Media!</h1>
                <img class="articleImg" src='img/logos/FBIG.png'>
                <p>Stay up to date with the latest information, news, and events by following CUTBA on <a href="https://www.facebook.com/groups/tbalumni">Facebook</a>
                    and <a href="https://www.instagram.com/cutba">Instagram</a>!</p>
                <p>It's a great way to stay connected with the organization and Clemson University and also to
                    reconnect with old friends!</p>
            </article>
        </div>
    </div>
</body>

<!-- FOOTER-->

<?php
    readfile("footer.html");
?>

</html>

<script type="text/javascript"> //JavaScript for Image Slider
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
        if (doChange) {
            var i;
            var x = document.getElementsByClassName("slider");
            var dots = document.getElementsByClassName("dots");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > x.length) { slideIndex = 1 }
            x[slideIndex - 1].style.display = "block";
            setTimeout(carousel, 2500); // Change image every 2.5 seconds

            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" dot-white", "");
            }
            dots[slideIndex - 1].className += " dot-white";
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
        x[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " dot-white";
    }
</script>
