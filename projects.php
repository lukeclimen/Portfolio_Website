<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/styles.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Projects</title>
  </head>
  <body>
    <!-- Navigation Bar -->
    <?php 
        include 'nav.inc.php';
    ?>

    <div class="width__controller">
      <h1>Projects</h1>
      <grid class="grid grid--2x2">
        <div data-backdrop="background1" class="one grid__item">
          <h2 class="grid__text">CEMS Application</h2>
          <a href="cems.php" class="button hidden__button">More</a>
        </div>
        <div data-backdrop="background2" class="two grid__item popup">
          <h2 class="grid__text">Portfolio Website</h2>
          <a href="portfolio.php" class="button hidden__button">More</a>
        </div>
        <div data-backdrop="background3" class="three grid__item">
          <h2 class="grid__text">POCUS Training App</h2>
          <a href="pocus.php" class="button hidden__button">More</a>
        </div>
        <div data-backdrop="background4" class="four grid__item">
          <h2 class="grid__text">TBD</h2>
          <a href="tbd.php" class="button hidden__button">More</a>
        </div>
      </grid>
    </div>
  </body>
  <script src="javascript/main.js"></script>
</html>