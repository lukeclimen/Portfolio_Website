<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/styles.css" />
    <script src="http://code.jquery.com/jquery-3.6.0.js"></script>
    <title>Tyler Zemlak</title>
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
            src="images/Tyler_Zemlak_Headshot.jpg"
            alt="Dr. Tyler Zemlak Headshot"
          />
          <h2 class="headshot__heading">Dr. Tyler Zemlak</h2>
          <h3 class="headshot__title">
            Operations Manager, Multiplex Genomics
          </h3>
        </div>
        <div class="block__body">
          <p class="block__content">
            <strong>"</strong>I first met Luke while I was working at the
            University of Guelph's Technology Transfer Office. He was interested
            in learning about the details of patenting an invention he had
            created during his undergradutate career. We discussed the viability
            of his invention, which was a dual roller-walker and cane apparatus.
            I offered him some reading materials for futhering his education on
            inventing and the startup scene.
          </p>
          <p class="block__content">
            From there, we continued to have productive interactions in the
            startup world. I moved onto a position leading the University of
            Guelph's startup incubator. I helped connect Luke with another
            entrepreneurially-minded inventor and mentored Luke during his
            endeavours with A9-Lighting.<strong>"</strong>
          </p>
        </div>
      </grid>
    </section>
  </body>
  <script src="javascript/main.js"></script>
</html>
