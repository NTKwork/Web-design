<?php
  session_start();
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

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Find us</title>
    <link href="css/normalize.css" rel="stylesheet">
    <link href="css/style_container.css" rel="stylesheet">
    <link href="https://necolas.github.io/normalize.css/7.0.0/normalize.css" rel="stylesheet">
  </head>
  <body>
    <header>
      <nav >
        <ul>
          <a href="index.html"><li>Main</li></a>
          <a href="appointments.php"><li>Appointments</li></a>
          <li>Contact</li>
          <a href="about.html"> <li>About us</li></a>
          <a href="#"><li>Interesting</li></a>
        </ul>
      </nav>
    </header>
    <main>
      <section class="container">
        <!-- <div class="map"> -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2559.1314369490146!2d14.391060453173381!3d50.
        102546748189134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470b953a5a7be311%3A0xa16f4b91c064185e!2sBrit
        ish+Council+(in+National+Technical+Library)!5e0!3m2!1sru!2sru!4v1507466155906"
         frameborder="0" style="border:0" allowfullscreen></iframe>
        <!-- </div> -->
        <div class="address_and_feedback">
          <div class="contact_information">
            <p>You can find me here: Praha praha praha</p>
            <p>mon.-fr. : 8:00 - 16:00</p>
            <p>Also you can phone me in the same time on 335 569 770</p>
          </div>
          <form class="feedback" action="" method="post">
            <h3>We defenetly answer you!</h3>
            <div class="your_name">
              <input type="text" name="name" placeholder="What is your name?">
              <label for="your_name_input">What is your name?</label>
            </div>
            <div class="your_mail">
              <input type="email" name="mail" placeholder="Youe mail?" required>
              <label class="hidden">What is your email?</label>
            </div>
            <textarea name="messege" rows="10" cols="41" placeholder="Your question" required></textarea><br/>
            <input type="submit" name="send"  value="Send" class="btn"></input>
          </form>
        </div>
      </section>
    </main>
    <footer>
      <section class="social contanier">
        <a href="#" class="tw"></a>
        <a href="#" class="inst"></a>
        <a href="#" class="fb"></a>
        <!-- <a href="#" class="vk"></a> -->
      </section>
    </footer>
  </body>
</html>
