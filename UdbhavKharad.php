<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/styles.css" />
    <script src="http://code.jquery.com/jquery-3.6.0.js"></script>
    <title>Udbhav Kharad</title>
  </head>
  <body>
    <!-- Navigation Bar -->
    <?php 
        include 'nav.inc.php';
    ?>

    <section id="about__block" class="block width__controller">
      <grid class="grid grid--cols-2">
        <div>
          <img
            class="headshot__image"
            src="images/Udbhav_Kharad_Headshot.jpg"
            alt="Dr. Udbhav Kharad Headshot"
          />
          <h2 class="headshot__heading">Dr. Udbhav Kharad, MD</h2>
          <h3 class="headshot__title">
            Resident Physician, McMaster University Hospital
          </h3>
        </div>

        <div class="block__body">
          <p class="block__content">
            <strong>"</strong>I've know Luke from when we did biomedical
            engineering together at the University of Guelph. In our time there,
            we worked together on multiple projects and he was always a
            reliable, analytical, and hardworking colleague.
          </p>
          <p class="block__content">
            Currently, I'm working on a project to develop teaching resources to
            educate residents on how to use point-of-case ultrasound (POCUS) in
            diagnosing medical emergincies.
          </p>
          <p class="block__content">
            I reached out to Luke with an idea to create a website with several
            interactive case-based modules that will allow residents to simulate
            using an ultrasound probe to scan patients. He's been working on
            programming the website while also providing practical insight on
            how to make a user-friendly and effective product.<strong>"</strong>
          </p>
        </div>
      </grid>
    </section>
  </body>
      <script src="javascript/main.js"></script>
</html>
