<?php
  if (isset($_POST['submit'])) {
      $message = "New Brick Order!" .
        "\r\n\r\nBrick: " . $_POST['brick'] .
        "\r\n\r\nFrom: " . $_POST['realname'] .
        "\r\nPhone Number: " . $_POST['phone'] .
        "\r\nEmail: " . $_POST['email'] .
        "\r\nAddress: " . $_POST['address'] .
        "\r\nCity, State: " . $_POST['city'] . ", " . $_POST['state'] .
        "\r\n\r\nBrick Line 1: " . $_POST['brick-line-1'] .
        "\r\nBrick Line 2: " . $_POST['brick-line-2'] .
        "\r\nBrick Line 3: " . $_POST['brick-line-3'] .
        "\r\nBrick Line 4: " . $_POST['brick-line-4'] .
        "\r\nBrick Line 5: " . $_POST['brick-line-5'] .
        "\r\n\r\nBuy A Brick form submission";

      $message = wordwrap($message, 70, "\r\n");

      $subject = "Buy A Brick form submission";

      $headers = 'From: ' . $_POST['email'] . "\r\n" .
        'Reply-To: ' . $_POST['email'] . "\r\n";

      mail('thurlbu@clemson.edu', $subject, $message, $headers);
      header("Location: https://iamatiger.clemson.edu/giving/giving-to-clemson?id=8e33fbe8-f361-4f3c-aa43-4b7f9f24589b"); 
  }
  exit; 
?>