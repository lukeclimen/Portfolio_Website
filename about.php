<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Me</title>
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/styles.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  </head>
  <body>
    <!-- Navigation Bar -->
    <?php 
        include 'nav.inc.php';
    ?>

    <section class="info">
      <h1>Hi, I'm <em>Luke Climenhage</em></h1>
      <p class="info__body">
        Until going back to school in September of 2022, I was an Engineer
        working an energy consulting role at Canadian Energy Strategies, inc.
      </p>
      <p class="info__body">
        I went to the University of Guelph for my (first) Undergraduate degree.
        My program was Biomedical Engineering, which spanned my passions of
        medicine, creation and math. While at the University, I realized that I
        had a passion for creation, which manifested in 3 created products and 2
        startup enterprises.
      </p>
      <p class="info__body">
        While working on these projects on the side, I graduated and found
        employment in the Energy sector, as there were very few biomedical
        companies outside of Toronto. While I pursued a career in the Energy
        Management sector for 3 years, I ultimately realized it was not where my
        passions lay.
      </p>
      <p class="info__body">
        I made the decision to go back to school for Computer Science. I was
        fortunate enough to find Algomau University's Accelerated degree
        program, which allows me to put many of the overlapping classes that I
        took during my Engineering degree towards this degree. I am currently
        looking for Co-op opportunities for September 2023, with an expected
        graduation date in May 2023.
      </p>
      <a class="button" href="blog.php">Blog</a>

      <a href="https://www.linkedin.com/in/lclimenh/">
        <svg class="icon social__icon">
          <use xlink:href="images/sprite.svg#linkedin"></use>
        </svg>
      </a>
    </section>

    <div class="about__image-container width__controller">
      <picture>
        <source
          type="images/webp"
          srcset="
            images/headshot.webp    1x,
            images/headshot_2x.webp 2x,
            images/headshot_3x.webp 3x
          "
        />
        <source
          type="images/png"
          srcset="
            images/headshot.png    1x,
            images/headshot_2x.png 2x,
            images/headshot_3x.png 3x
          "
        />
        <img class="about__image" src="images/headshot.webp" alt="" />
      </picture>

      <img class="circle" src="images/circle.svg" alt="" />
    </div>

    <script src="/javascript/main.js"></script>
  </body>
</html>