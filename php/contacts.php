<?php
if(isset($_POST["send"])) {
  $from = htmlspecialchars($_POST["name"]);
  if($from == "") {
    $from = "Anonym";
  }
  $mail = htmlspecialchars($_POST["mail"]);
  $to = "ustinov.nikita.01@gmail.com";
  $subject = "Question";
  $messege = htmlspecialchars($_POST["messege"]);
  $subject = "=?utf-8?B?".base64_encode($subject)."?=";
  $headers = "From: $from\r\n Reply-to: $mail\r\n Content-type: text/plain: charset=utf-8\r\n";
  mail($to, $subject, $messege, $headers);
  // exit;
}
?>
