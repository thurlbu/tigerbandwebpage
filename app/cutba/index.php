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
    <a href="https://secure.touchnet.net:443/C20569_ustores/web/product_detail.jsp?PRODUCTID=3973" class="mobileNav"
        target="_blank">Purchase Tiger Band Parent T-Shirts</a>
    <a href="https://secure.touchnet.net/C20569_ustores/web/store_cat.jsp?STOREID=192&CATID=368&SINGLESTORE=true" class="mobileNav" target="_blank">CUTBA Newsletter</a>
    <a href="https://iamatiger.clemson.edu/giving/cutba?utm_source=digital_website&utm_medium=tdf_link&utm_campaign=dar_online_giving_cutba&utm_term=giving_button_cutba&utm_content=departmental_site_giving_button" class="mobileNav" target="_blank">Donate to CUTBA</a>
    <a href="https://iamatiger.clemson.edu/giving/cutba/buy-a-brick" class="mobileNav">Buy a Brick</a>
    <a href="https://secure.touchnet.net/C20569_ustores/web/product_detail.jsp?PRODUCTID=1973" class="mobileNAV">Register for Alumni Band</a>
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

            <a href="https://secure.touchnet.net:443/C20569_ustores/web/product_detail.jsp?PRODUCTID=3973" target="_blank">
                <div class="boxWrapper">
                    <div id="homepageNav2" class="boxUIelement rect purp">
                        <div class="textContainer">
                            <p>Purchase Tiger Band Parent T-Shirts</p>
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

            <a href="https://iamatiger.clemson.edu/giving/cutba?utm_source=digital_website&utm_medium=tdf_link&utm_campaign=dar_online_giving_cutba&utm_term=giving_button_cutba&utm_content=departmental_site_giving_button" target="_blank">
                <div class="boxWrapper">
                    <div id="homepageNav4" class="boxUIelement rect white">
                        <div class="textContainer">
                            <p>Support Tiger Band<br>through a donation<br>to CUTBA</p>
                        </div>
                    </div>
                </div>
            </a>

             <a href="https://secure.touchnet.net/C20569_ustores/web/product_detail.jsp?PRODUCTID=1973">
                <div class="boxWrapper">
                    <div id="homepageNav5" class="boxUIelement rect orange">
                        <div class="textContainer">
                            <p>Register for Alumni Band</p>
                        </div>
                    </div>
                </div>
            </a>

        </div>
    </div>

    <!--- ARTICLES --->

    <div class="heading">
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
                <h1 class="purpleText">Looking for that perfect Tiger Band and CUTBA Merchandise?</h1>
                <img class="articleImg" src='img/products.jpg'>
                <p>CUTBA is proud to announce that we have an exciting new line-up of shirts and accessories for the 2019 football season. We have new stylish shirts, hats, and accessories.. and prices are very attractive as well!</p>
                <p>Many of your old favorites are still for sale, but new styles and materials have been added for you to take a look at. We also plan to add a few more new shirts in the near future, so please check the web site often for the new items!</p>
                <p>Please <a href="https://secure.touchnet.net/C20569_ustores/web/classic/store_cat.jsp?STOREID=192&CATID=371&SINGLESTORE=true">visit
                        our merchandise website</a> to check out what we have available including pillows, uniforms in shadow boxes, T-Shirts, Hats, and much, much more. Don’t wait to place
                    your order as some quantities are limited.</p>
            </article>
        </div>

        <div id="col2Flex">

          <article class="media">
              <h1>Supporting Tiger Band Through CUTBA</h1>
              <p>CUTBA support is vital to the continued success of Tiger Band. Will you consider a donation to CUTBA to help Tiger Band continue its mission of excellence?</p>
              <div class="iframeContainer">
                  <div class="iFrameAspectRatio">
                      <iframe width="560" height="315" src="https://www.youtube.com/embed/1q_PAUCpoTY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
              </div>
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
