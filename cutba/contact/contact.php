<!DOCTYPE html>
<html>
<head>
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
    <a href="/" class"mobileNav" target="_blank">Tiger Band Website</a>
    <a href="https://secure.touchnet.net/C20569_ustores/web/classic/store_cat.jsp?STOREID=192&CATID=371&SINGLESTORE=true" class="mobileNav" target="_blank">CUTBA Store</a>
    <a href="https://secure.touchnet.net/C20569_ustores/web/classic/store_cat.jsp?STOREID=192&CATID=368&SINGLESTORE=true" class="mobileNav" target="_blank">CUTBA Newsletter</a>
    <a href="https://cualumni.clemson.edu/give/cutba" class="mobileNav" target="_blank">Donate to CUTBA</a>
    <a href="http://cutba.org/CUTBAbrickReservationForm.pdf" class="mobileNav" target="_blank">Buy a Brick</a>
</nav>

<!--- PAGE CONTENT --->

<body class="stickyFooter">
    <div class="stickyFooterContent">
        <div id="heading">
            <h3>Contact</h3>
            <h4>Clemson University Tiger Band Association</h4>
        </div>

        <center>
            <h4>Thank you for your message!</h4>
            <br>
            <h3><a href="../website/">Return to the homepage</a></h3>
        </center>
    </div>
</body>

<!--- FOOTER --->

<footer>
    <div id="footerColsLayout">
        <table>
            <tr>
                <td>INFORMATION</td>
            </tr>
            <tr>
                <td><a href="../about/">About</a></td>
            </tr>
            <tr>
                <td><a href="../music/">Music</a></td>
            </tr>

            <tr>
                <td><a href="../contact/">Contact</a></td>
            </tr>
        </table>
         <table>
            <tr>
                <td>CONTRIBUTE TO TIGER BAND</td>
            </tr>
            <tr>
                <td><a href="https://qnet.e-quantum2k.com/~prtspecialty/Custom/32245/RETAIL/cgi-bin/nph-your-catalog.cgi" target="_blank">CUTBA Store</a></td>
            </tr>
            <tr>
                <td><a href="https://cualumni.clemson.edu/give/cutba" target="_blank">Donate</a></td>
            </tr>
            <tr>
                <td><a href="http://cutba.org/CUTBAbrickReservationForm.pdf" target="_blank">Buy a Brick</a></td>
            </tr>
        </table>
        <table>
            <td>
                <a href="/cutba/"><img id="footerLogo" src="../img/logos/CUTBA.png"></a>
            </td>
        </table>
        <table>
            <tr>
                <td>DEVELOPERS</td>
            </tr>
            <tr>
                <td><a href="https://www.linkedin.com/in/alyssa-collado" target="_blank">Alyssa Collado</a></td>
            </tr>
            <tr>
                <td><a href="https://www.linkedin.com/in/nicholas-gustafson/" target="_blank">Nicholas Gustafson</a></td>
            </tr>
            <tr>
                <td><a href="http://adampatyk.io" target="_blank">Adam Patyk</a></td>
            </tr>
        </table>
         <table>
            <tr>
                <td>COPYRIGHT &copy; 2017</td>
            </tr>
            <tr>
                <td>Clemson University</td>
            </tr>
            <tr>
                <td>Tiger Band Association</td>
            </tr>
            <tr>
                <td> </td>
            </tr>
            <tr>
                <td><a href="../contact/">Contact CUTBA</a></td>
            </tr>
        </table>
    </div>
</footer>

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
