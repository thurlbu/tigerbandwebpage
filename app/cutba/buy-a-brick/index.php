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
    <title>Buy A Brick | CUTBA</title>
    <link rel="stylesheet" href="../css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
    <a href="../about/" class="active">About</a>
    <a href="../music/">Music</a>
    <a href="../contact/">Contact</a>
    <!--- MOBILE HEADER SPECIFIC LINKS -->
    <a href="/" class="mobileNav" target="_blank">Tiger Band Website</a>
    <a href="https://secure.touchnet.net/C20569_ustores/web/classic/store_cat.jsp?STOREID=192&CATID=371&SINGLESTORE=true" class="mobileNav" target="_blank">CUTBA Store</a>
    <a href="https://secure.touchnet.net/C20569_ustores/web/classic/store_cat.jsp?STOREID=192&CATID=368&SINGLESTORE=true" class="mobileNav" target="_blank">CUTBA Newsletter</a>
    <a href="https://cualumni.clemson.edu/give/cutba" class="mobileNav" target="_blank">Donate to CUTBA</a>
    <a href="buy-a-brick/" class="mobileNav">Buy a Brick</a>
</nav>

<!--- PAGE CONTENT --->

<body>
    <div class="heading">
        <h4>Buy A Brick</h4>
    </div>

    <img class="centered-image" src="https://res.cloudinary.com/clemson-university-tiger-band/image/upload/v1592160451/cutba/buy%20a%20brick/Artboard_2.png" />

    <div id="Col2FlexContent" class="auditions">
        <div id="col1Flex">
            <article class="text fullWidth">
                <h1 class="purpleText">Alumni and Friends of Tiger Band Bricks</h1>
                <p>Be a part of the Tiger Band family forever! Pave the way to the future by honoring the past and showing your Tiger Pride and Spirit!</p>
                <p>This 4x8 brick allows for three lines of text with a maximum number of 18 characters per line, including spaces.</p>
                <p>Only one name may be engraved on each brick (no "Mr. and Mrs." permitted) and each brick has a cost of <b>$250</b>.</p>
            </article>

        </div>

        <div id="col2Flex">
		        <article class="text fullWidth">
                <h1 class="purpleText">Family/Special Remembrance Bricks</h1>
                <p>Add your family or business to the plaza to show your support for the "Band that Shakes the Southland!" Proceeds from all purchases go to preserving, maintaining, and improving the Bruce Cook and John Butler Tiger Band Plaza.</p>
                <p>This 8x8 brick allows for five lines of text with a maximum number of 18 characters per line, including spaces. Multiple names are allowed on these bricks which cost of <b>$500</b>.</p>
            </article>
		    </div>
    </div>

    <div class="heading">
        <h4>Order A Brick</h4>
    </div>

    <!--- CONTACT FORM --->
    <div class="centered-form">
        <form action="send-mail.php" method="POST" id="contactForm">
            <div class="radio-buttons">
              <div class="radio-button">
                <input type="radio" id="alumni-brick" name="brick" value="Alumni Brick" required>
                <label for="alumni-brick">Alumni/Friend of Tiger Band Brick (4x8)</label><br>
              </div>
              <div class="radio-button">
                <input type="radio" id="remembrance" name="brick" value="Remembrance Brick" required>
                <label for="remembrance">Family/Remembrance Brick (8x8)</label>
              </div>
            </div>

            <h5 class="donation-required"></h5>

            <input type="text" name="realname" placeholder="Your Name" required>
            <input type="text" name="address" placeholder="Address" required>
            <input type="text" name="city" placeholder="City" required>
            <input type="text" name="state" placeholder="State" required>
            <input type="text" name="phone" placeholder="Phone Number" required>
            <input type="email" name="email" placeholder="Email" required>

            <div class="spacer__small"></div>

            <input type="text" name="brick-line-1" placeholder="Brick Line 1" maxlength="18" class="form-input" id="brick-input-1" required>
            <p class="form-length-counter" id="brick-count-1">0/18</p>
            <input type="text" name="brick-line-2" placeholder="Brick Line 2" maxlength="18" class="form-input" id="brick-input-2" required>
            <p class="form-length-counter" id="brick-count-2">0/18</p>
            <input type="text" name="brick-line-3" placeholder="Brick Line 3" maxlength="18" class="form-input" id="brick-input-3" required>
            <p class="form-length-counter" id="brick-count-3">0/18</p>
            <input type="text" name="brick-line-4" placeholder="Brick Line 4" maxlength="18" class="form-input" id="brick-input-4">
            <p class="form-length-counter" id="brick-count-4">0/18</p>
            <input type="text" name="brick-line-5" placeholder="Brick Line 5" maxlength="18" class="form-input" id="brick-input-5">
            <p class="form-length-counter" id="brick-count-5">0/18</p>

            <h5 class="donation-required"></h5>
            <div class="spacer__small"></div>

            <div>
                <input type="submit" name="submit" value="Submit">
                <input type="reset" value="Reset">
            </div>
        </form>
    </div>
    <div class="centered padding-left padding-right">
      <article class="text fullWidth">
          <h1 class="purpleText">How to donate</h1>
          <p>When you click the submit button, you will be directed to the Clemson Forever Giving page designated for Tiger Band Bricks.</p>
          <p>Donate the appropriate amount (either $250 or $500) for the brick you ordered.</p>
          <p>You will be contacted by CUTBA and the Clemson University Foundation with an order confirmation via email.</p>
      </article>

      <img src="../../img/logos/TigerBandFull.png" class="thank-you-image" />

      <h5 class="thank-you-text">Thank you!</h5>
    </div>
</body>

<!-- FOOTER-->

<script>
  function counter(brickNumber) {
    const input = document.getElementById('brick-input-' + brickNumber);
    const display = document.getElementById('brick-count-' + brickNumber);
    function changeEvent(evt) { display.innerHTML = evt.target.value.length + '/18'; }
    input.addEventListener('keyup', changeEvent);
  };

  counter(1);
  counter(2);
  counter(3);
  counter(4);
  counter(5);

  $("#brick-input-1").hide();
  $("#brick-count-1").hide();
  $("#brick-input-2").hide();
  $("#brick-count-2").hide();
  $("#brick-input-3").hide();
  $("#brick-count-3").hide();
  $("#brick-input-4").hide();
  $("#brick-count-4").hide();
  $("#brick-input-5").hide();
  $("#brick-count-5").hide();

  $('input[name="brick"]').on('change', function(){
    switch ($(this).val()) {
      case "Alumni Brick":
        $(".donation-required").text("Donation Required: $250");
        $("#brick-input-1").show();
        $("#brick-count-1").show();
        $("#brick-input-2").show();
        $("#brick-count-2").show();
        $("#brick-input-3").show();
        $("#brick-count-3").show();
        $("#brick-input-4").hide();
        $("#brick-count-4").hide();
        $("#brick-input-5").hide();
        $("#brick-count-5").hide();
        break;

      case "Friends of Tiger Band Brick":
        $(".donation-required").text("Donation Required: $250");
        $("#brick-input-1").show();
        $("#brick-count-1").show();
        $("#brick-input-2").show();
        $("#brick-count-2").show();
        $("#brick-input-3").show();
        $("#brick-count-3").show();
        $("#brick-input-4").hide();
        $("#brick-count-4").hide();
        $("#brick-input-5").hide();
        $("#brick-count-5").hide();
        break;

      case "Remembrance Brick":
        $(".donation-required").text("Donation Required: $500");
        $("#brick-input-1").show();
        $("#brick-count-1").show();
        $("#brick-input-2").show();
        $("#brick-count-2").show();
        $("#brick-input-3").show();
        $("#brick-count-3").show();
        $("#brick-input-4").show();
        $("#brick-count-4").show();
        $("#brick-input-5").show();
        $("#brick-count-5").show();
        break;

      default:
        $(".donation-required").text("");
        break;
    }
  });
</script>

<?php
    readfile("../../cutba/footer.html");
?>
