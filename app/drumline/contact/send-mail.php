<?php
  if (isset($_POST['submit'])) {
      $message = $_POST['message'] .
        "\r\n\r\nFrom: " . $_POST['realname'] .
        "\r\nPhone Number: " . $_POST['phone'] .
        "\r\n\r\nDrumline Contact Page form submission";

      $message = wordwrap($message, 70, "\r\n");

      $subject = "Drumline Website Form - " . $_POST['regarding'];

      $headers = 'From: ' . $_POST['email'] . "\r\n" .
        'Reply-To: ' . $_POST['email'] . "\r\n";

      mail('pbuyer@clemson.edu,clemsondrumline@gmail.com', $subject, $message, $headers);
      header("Location: contact.php");
  }
?>