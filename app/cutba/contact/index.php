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
    <title>Contact | CUTBA</title>
    <link rel="stylesheet" href="../css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="description" content="The Band That Shakes the Southland">
    <meta name="keywords" content="tiger, band, clemson, university, shakes, southland">
</head>

<!--- HEADER --->

<input type='checkbox' id='mobileMenu'>

<div id="mobileHeader">
	<a href="../"><img id="tbMobileLogo" src="../img/logos/CUTBA%20Mobile%20Header.svg" height="30"></a>
	<label for="mobileMenu" id="menuButton"><span>=</span></label>
</div>

<label id='mobileScreenShade' for='mobileMenu'></label>

<!--- NAVIGATION --->

<nav>
    <a href="../">Home</a>
    <a href="../about/">About</a>
    <a href="../music/">Music</a>
    <a href="../contact/" class="active">Contact</a>
    <!--- MOBILE HEADER SPECIFIC LINKS -->
    <a href="/" class="mobileNav" target="_blank">Tiger Band Website</a>
    <a href="https://secure.touchnet.net/C20569_ustores/web/classic/store_cat.jsp?STOREID=192&CATID=371&SINGLESTORE=true" class="mobileNav" target="_blank">CUTBA Store</a>
    <a href="https://secure.touchnet.net/C20569_ustores/web/classic/store_cat.jsp?STOREID=192&CATID=368&SINGLESTORE=true" class="mobileNav" target="_blank">CUTBA Newsletter</a>
    <a href="https://cualumni.clemson.edu/give/cutba" class="mobileNav" target="_blank">Donate to CUTBA</a>
    <a href="../buy-a-brick/" class="mobileNav">Buy a Brick</a>
</nav>

<!--- PAGE CONTENT --->

<body class="stickyFooter">
    <div class="stickyFooterContent">
        <div class="heading">
            <h3>Contact</h3>
            <h4>Clemson University Tiger Band Association</h4>
        </div>

        <div id="contactWrapper">

            <!--- CONTACT FORM --->

            <form action="http://www.clemson.edu/cgi-bin/formail.cgi" method="POST" id="contactForm">
                <input type="hidden" name="recipient" value="tony.stapleton@alumni.clemson.edu">
                <input type="hidden" name="subject" value="CUTBA Website Form Results">
                <input type="hidden" name="sort" value="order:regarding,realname,email,phone,message">
                <input type="hidden" name="print_config" value="realname, email">
                <input type="hidden" name="redirect" value="http://www.clemson.edu/tigerband/cutba/contact/contact.php">

                <input type="text" name="realname" placeholder="Name*" required>
                <input type="text" name="phone" placeholder="Phone Number*" required>
                <input type="email" name="email" placeholder="Email*" required>
                <input type="text" name="regarding" placeholder="Subject*" required>
                <textarea name="message" placeholder="Your Message*" required></textarea>
                <div>
                    <input type="submit" value="Send">
                    <input type="reset" value="Reset">
                </div>
            </form>

            <div id="contactAddress">
                <img id="contactTBlogo" src="../img/logos/CUTBA.png">
                <div id="contactInfo">
                    <h5>Address:</h5>
                        <p>P.O. Box 1348</p>
                        <p>Clemson, SC 29633</p>
                    <h5>Phone:</h5>
                        <p>(864) 508-2209</p>

                </div>
            </div>
        </div>
    </div>
</body>

<!-- FOOTER-->

<?php
    readfile("../footer.html");
?>

</html>
