
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Find us</title>
    <link href="https://necolas.github.io/normalize.css/7.0.0/normalize.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style_contacts.css" rel="stylesheet">
  </head>
  <body>
  <header>
      <input type="checkbox" id="hmt" class="hidden-menu-ticker">
      <label class="btn-menu" for="hmt">
          <span class="first"></span>
          <span class="second"></span>
          <span class="third"></span>
      </label>
      <nav>
          <ul>
          <a href="index.html"><li>Main</li></a>
          <a href="appointments.php"><li>Appointments</li></a>
          <div><li>Contact</li></div>
          <a href="about.html"> <li>About us</li></a>
          <a href="intresting.html"><li>Interesting</li></a>
        </ul>
      </nav>
    </header>
    <main>
      <h1>Contacts</h1>
      <div class=wrapper>
        <section class="container">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2559.1314369490146!2d14.391060453173381!3d50.
          102546748189134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470b953a5a7be311%3A0xa16f4b91c064185e!2sBrit
          ish+Council+(in+National+Technical+Library)!5e0!3m2!1sru!2sru!4v1507466155906"
          frameborder="0" allowfullscreen></iframe>
          <div class="address_and_feedback">
            <div class="contact_information">
              <p>You can find me here: Technická 2710/6, 160 00 Praha 6-Dejvice,</p>
              <p>mon.-fr. : 8:00 - 16:00</p>
              <p>Also you can phone me in the same time on 335 569 770</p>
            </div>
            <form class="feedback" action="" method="post">
              <h3>We defenetly answer you!</h3>
              <div class="your_name">
                <input type="text" name="name" placeholder="What is your name?">
                <label for="your_name_input"> What is your name?</label>
              </div>
              <div class="your_mail">
                <input type="email" name="mail" placeholder="Your mail?" required>
                <label class="hidden">What is your email?</label>
              </div>
              <textarea name="messege" rows="10" cols="41" placeholder="Your question" required></textarea><br/>
              <input type="submit" name="send"  value="Send" class="btn">
            </form>
          </div>
        </section>
      </div>
    </main>
    <footer>
      <section class="soc">
        <a href="https://twitter.com/hightower_01" class="tw"></a>
        <a href="https://www.instagram.com/irinachibis/" class="inst"></a>
        <a href="https://www.facebook.com/ekaterina.valkovskaya.7" class="fb"></a>
        <a href="https://vk.com/id143216691" class="vk"></a>
      </section>
    </footer>
  </body>
  <?php require 'php/contacts.php'; ?>
</html>
