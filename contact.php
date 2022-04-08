<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/styles.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Contact Me</title>
  </head>
  <body>
    <!-- Navigation Bar -->
    <?php 
        include 'nav.inc.php';
    ?>

    <div class="contact__page width__controller">
      <h1>Contact Me</h1>
      
        <?php
            include 'form.inc.php';
        ?>
    </div>
    <script src="/javascript/main.js"></script>
  </body>
</html>