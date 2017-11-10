<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Appointments</title>
    <!-- <link href="css/normalize.css" rel="stylesheet"> -->
    <link href="css/style_appointments.css" rel="stylesheet">
  </head>
  <body>
    <div class=wrapper>
      <header>
        <nav>
          <ul>
            <a href="index.html"><li>Main</li></a>
            <div><li>Appointments</li></div>
            <a href="contacts.php"><li>Contact</li></a>
            <a href="about.html"> <li>About us</li></a>
            <a href="intresting.html"><li>Interesting</li></a>
          </ul>
        </nav>
      </header>
      <main>
        <section class="choose_lesson_type container">
          <article class="individual_counseling">
            <img src="img/indiv.jpg" alt="Individual counseling" width="200" height="200">
            <!-- <h2>Individual counseling</h2> -->
            <div class="bottom_part">
              <h2>Individual counseling</h2>
              <div class="line"></div>
              <p>1h. 30m. | 1000 kc</p>
              <a class="enroll_button" href="#">Sign up</a>
            </div>
          </article>
          <article class="lesson_with_children">
            <img src="img/withChildren.jpg" alt="Lesson with children">
            <div class="bottom_part">
              <h2>Lesson with children</h2>
              <div class="line"></div>
              <p>1h. | 800 kc</p>
              <a class="enroll_button" href="#">Sign up</a>
            </div>
          </article>
          <article class="diagnostics">
            <img src="img/diagnostics.jpg" alt="Diagnostics" width="200" height="200">
            <div class="bottom_part">
              <h2>Diagnostics</h2>
              <div class="line"></div>
              <p>1h. | 1000 kc</p>
              <a class="enroll_button" href="#">Sign up</a>
            </div>
          </article>
          <article class="online_counseling">
            <img  src="img/skype.jpg" alt="Online counseling">
            <div class="bottom_part">
              <h2>Online counseling</h2>
              <div class="line"></div>
              <p>1h. | 1000 kc</p>
              <a class="enroll_button" href="#">Sign up</a>
            </div>
          </article>
          <div class="over_lay hidden"></div>
          <article class="enroll_form hidden">
            <div class="description">
              <h3>Description</h3>
              <p> It is my description and there aren't here a lot of information!</p>
            </div>
            <form name="feedback" action="" method="post" >
              <button class="close_form"></button>
              <label class="label_from">From: </label><br/>
              <input type="email" name="from" value="" placeholder="Youe mail?" required autofocus/><br/>
              <label>Subject: </label><br/>
              <input type="text" name="subject" class="subject" value=""/><br/>
              <label>Messege </label> <br/>
              <textarea name="messege" cols="21" rows="5" placeholder="Text a lesson time " required></textarea><br/>
              <input class="enroll_button" type="submit" name="send" value="Send request"/>
            </form>
          </article>
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
    </div>
  </body>
   <?php require 'appointments.php'; ?>
  <script src="js/script.js"></script>
</html>
