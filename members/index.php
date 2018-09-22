<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Members Only | Tiger Band</title>
    <link rel="stylesheet" href="/css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
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

<nav>
    <a href="/">Home</a>
    <a href="/this_season/">This Season</a>
    <a href="/join/">Join</a>
    <a href="/bands/">Bands</a>
    <a href="/organizations/">Organizations</a>
    <a href="/staff/">Staff</a>
    <a href="/members/" class="active">Members Only</a>
    <a href="/contact/">Contact</a>
</nav>

<!--- PAGE CONTENT --->

<body>
    <!--- COVER/PASSWORD SCREEN --->
    <?php
      $password = md5($_POST['password']);

      if($password == md5("hurly")) {
        include("/members/secure.php");
      } else {
        if(isset($_POST)) {?>

          <div id="coverScreen">
            <div class="joinFullscrContainer">
              <div id="screenShade"></div>
            </div>

            <div class="fullpageTitle members">
              <h2>Tiger Band</h2>
              <h1>Members Only</h1>
            </div>

            <div id="pwdFlex">
              <form method="POST" action="/members/secure.php">
                <input type="password" name="password" placeholder="Password" id="password" class="" autofocus>
                <input type="submit" name="submit" value="Go"></input>
              </form>
            </div>
          </div>

        <?}
      }
    ?>    
</body>

<script> //JavaScript for Members Only Entry
    function removeShake() {
        pwd.className = "";
    };

    //JavaScript for Collapsible Articles
    function expand(n) {
        n.classList.toggle("clicked");
    };
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
