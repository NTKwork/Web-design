<?php
    if(isset($_POST["send"])) {
      $from = htmlspecialchars($_POST["from"]);
      $to = "ustinov.nikita.01@gmail.com";
      $subject = htmlspecialchars($_POST["subject"]);
      $messege = htmlspecialchars($_POST["messege"]);

      $subject = "=?utf-8?B?".base64_encode($subject)."?=";
      $headers = "From: $from\r\n Reply-to: $from\r\n Content-type: text/plain: charset=utf-8\r\n";
      mail($to, $subject, $messege, $headers);
    }
?>
