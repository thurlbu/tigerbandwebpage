<?php
session_start();

if(isset($_POST['submit_pass']) && $_POST['pass']) {
  $pass = $_POST['pass'];
  if($pass == "hurly") {
    $_SESSION['password'] = $pass;
  } else {
    $error="Incorrect Password";
  }
}

if(isset($_POST['page_logout'])) {
  unset($_SESSION['password']);
}
?>
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
  <?php
    if($_SESSION['password'] == "hurly") {
      include("./secure.php");
    } else {
  ?>
  <div id="coverScreen">
    <div class="joinFullscrContainer">
      <div id="screenShade"></div>
    </div>

    <div class="fullpageTitle members">
      <h2>Tiger Band</h2>
      <h1>Members Only</h1>
    </div>

    <div class="pwdFlex">
      <form method="post" action="" id="login_form">
        <input type="password" name="pass" placeholder="Password" autofocus>
        <input type="submit" name="submit_pass" value="" class="hide">
      </form>
    </div>
  </div>
  <?php
  }
  ?>
  </body>
</html>
