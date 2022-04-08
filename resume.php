<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/styles.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Resume</title>
  </head>
  <body>
    <!-- Navigation Bar -->
    <?php 
        include 'nav.inc.php';
    ?>

    <div class="width__controller">
      <h1>Resume</h1>
      <a
        id="resume__downloader"
        href="documents/Resume.pdf"
        download="LucasClimenhage.pdf"
        class="button"
        >Download my Resume</a
      >
      <h2>References</h2>
      <section class="block">
        <grid class="grid grid--cols-2 grid--resume">
          <div class="block__image">
            <img
              src="images/Udbhav_Kharad_Headshot.jpg"
              alt="Image of reference #1: Udbhav Kharad"
            />
          </div>
          <div class="block__body">
            <a
              href="https://doctors.cpso.on.ca/DoctorDetails/Kharad-Udbhav-Nachiket/0333997-130920"
            >
              <h2 class="block__heading">Dr. Udbhav Kharad, MD</h2>
            </a>
            <h3 class="block__sub-heading">McMaster University Hospital</h3>
            <p class="block__content info__blurb">
              I've known Luke from when we were in Biomedical Engineering
              together at the University of Guelph. In our time there, we worked
              together on multple projects and he was always a reliable,
              analytical, and hardworking colleague. We are currently working on
              a new website-based project.
            </p>
            <a href="UdbhavKharad.php" class="button reference__button"
              >More</a
            >
          </div>
        </grid>
      </section>

      <section class="block">
        <grid class="grid grid--cols-2 grid--resume">
          <div class="block__image">
            <img
              src="images/Tyler_Zemlak_Headshot.jpg"
              alt="Image of reference #2: Tyler Zemlak"
            />
          </div>
          <div class="block__body">
            <a href="https://www.linkedin.com/in/tylerzemlak/">
              <h2 class="block__heading">Dr. Tyler Zemlak</h2>
            </a>
            <p class="block__content info__blurb">
              I first met Luke while I was working at the University of Guelph's
              Technology Transfer Office. He was interested in learning about
              the details of patenting an invention he had created during his
              undergradutate career. From there, we continued to have productive
              interactions in the startup world.
            </p>
            <a href="TylerZemlak.php" class="button reference__button">More</a>
          </div>
        </grid>
      </section>

      <section class="block">
        <grid class="grid grid--cols-2 grid--resume">
          <div class="block__image">
            <img
              src="images/business_man.png"
              alt="Image of reference #1: Vince Yee"
            />
          </div>
          <div class="block__body">
            <a href="https://www.linkedin.com/in/vinceyee/">
              <h2 class="block__heading">Vince Yee</h2>
            </a>
            <h3 class="block__sub-heading">Canadian Energy Strategies</h3>
            <p class="block__conten info__blurb">
              Luke was hired directly out of school to our energy management
              firm in Kitchener, Ontario. Over the course of 3 years with the
              company, I helped Luke to develop professional skills in the
              energy management sector. He is a fast learner, and was a very
              intelligent colleague. During his time at the company, he led
              directives to expand company offerings to more technical services
              with Environmental Engineering focusses. He also pursued
              consulting opportunities in the expanding carbon-market space.
            </p>
            <a href="VinceYee.php" class="button reference__button">More</a>
          </div>
        </grid>
      </section>
    </div>

    <script src="/javascript/main.js"></script>
  </body>
</html>