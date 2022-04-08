<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="keywords"
      content="lucas climenhage, portfolio, resume, personal"
    />
    <meta
      name="description"
      content="The porfolio website for Lucas Climenhage, outlining his resume and past projects"
    />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/styles.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Home</title>
  </head>
  <body>
    <!-- Navigation Bar -->
    <?php 
        include 'nav.inc.php';
    ?>

    <!-- About Me Block -->
    <section id="about__block" class="block width__controller">
      <grid class="grid grid--cols-2">
        <div class="block__image">
          <img id="self__image" src="images/Desktop_Me.JPG" alt="Me" />
        </div>
        <div class="block__body">
          <h2 class="block__heading">Luke Climenhage</h2>
          <p class="block__content">
            Coming from a background in engineering, I have made the leap to go
            back to school for Computer Science! I was drawn to software because
            it allows the rapid development of ideas into actual products.
          </p>
          <a href="about.php" class="button">More about me</a>
        </div>
      </grid>
    </section>

    <!-- Resume Block -->
    <section id="resume__block" class="block width__controller">
      <grid class="grid grid--cols-2">
        <div class="block__image company__logo">
          <img class="logo__image" src="images/grf.png" alt="Me" />
        </div>
        <div class="block__body">
          <h2 class="block__heading">Past Jobs</h2>
          <p class="block__content">
            I've had the opportunity to get real work experience from past co-op
            placements while in engineering, and from 3 years of working after
            University.
          </p>
          <a href="resume.php" class="button">Resume and References</a>
        </div>
      </grid>
    </section>

    <!-- Portfolio Block -->
    <section id="portfolio__block" class="block width__controller">
      <grid class="grid grid--cols-2">
        <div class="block__image">
          <img class="resizable" src="images/code.jpg" alt="Me" />
        </div>
        <div class="block__body">
          <h2 class="block__heading">Portfolio Snapshot</h2>
          <p class="block__content">
            While still pretty new to this whole "programming" thing, I have had
            the chance to work on a couple of projects! Check them using the
            button below!
          </p>
          <a href="projects.php" class="button">Projects</a>
        </div>
      </grid>
    </section>

    <!-- Form Block -->
    <?php
        include 'form.inc.php';
    ?>

    <script src="javascript/main.js"></script>
    <script src="javascript/homePage.js"></script>
  </body>
</html>