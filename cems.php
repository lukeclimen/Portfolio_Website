<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/styles.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>CEMS Application</title>
  </head>
  <body class="background1">
    <!-- Navigation Bar -->
    <?php 
        include 'nav.inc.php';
    ?>

    <div class="width__controller">
      <h1>Club Event Management System</h1>
      <h2>3rd Year School Project</h2>
      <img
        class="display__image"
        src="images/CEMS_Homepage.jpg"
        alt="Picture of the homepage of the CEMS application"
      />
      <h2>Project Overview</h2>
      <p>
        The Club Event Management System was chosen between 4 projects to make
        into a Java application. Our project task was to design an application
        to help a ficticious student government manage its clubs and events. We
        ultimately decided to add functionality for 3 levels of administrators:
      </p>
      <ol>
        <li class="ordered__item">
          <strong>Admin</strong><br />General administrators of individual clubs
        </li>
        <li class="ordered__item">
          <strong>Admin+</strong><br />
          Club presidents and treasurers, who would have greater access to
          financial details
        </li>
        <li class="ordered__item">
          <strong>SuperAdmin</strong><br />Members of the student government
          overseeing all of the clubs
        </li>
      </ol>
      <p>
        The application that we created used Java for the programming language,
        fxml for the user interface pages, and MySQL for the database.
      </p>
      <p>
        We were able to create, store and edit users, clubs and events. The
        application was password protected, with recovery questions and password
        hashing incorporated. Field validation was implemented for any forms
        that would send information to the database, or that needed to follow a
        specific format. Events, after being created, showed up as a dot on the
        day of the month (see image above). Clicking on a date would show a
        pop-up with the ability to edit an event, assuming the user has the
        correct permission.
      </p>
      <p>
        The application was also able to produce real objects based on what the
        user needed. Reports on over 10 different financial aspects of a club
        were able to be generated, and then produced as either a PDF or Excel
        spreadsheet. Events that were created, updated or deleted could then
        send out email notifications to a specified email group, to notify them
        of the event.
      </p>
      <h2>My Contributions</h2>
      <ol>
        <li class="ordered__item">
          <strong>User Interface</strong>
          <p>
            I was responsible for creating the majority of the user interface,
            including the FXML documents, and their individual controller
            classes that provided functionality and navigation.
          </p>
        </li>
        <li class="ordered__item">
          <strong>Calendar System</strong>
          <p>
            The calendar was created using JavaFX, as we wanted it to be a bit
            more dynamic than FXML documents were allowing for. After the dust
            settled, I think it would have been a better idea to continue with
            FXML and create several classes to control the Calendar. Hindsight
            is always 20/20!
          </p>
          <p>
            The calendar was the most challenging part of the project for me,
            but also the most rewarding. Having a newly created event populate
            in the calendar, and to be able to click on it and edit the
            pre-populated update screen was very satisfying.
          </p>
        </li>
        <li class="ordered__item">
          <strong>Email System</strong>
          <p>
            This section definitely gave me the most headaches. From chasing
            around the libraries, to having Gmail not wanting to connect to an
            unsecure access point, the email system was very tricky. Getting a
            java program that I created to send out emails automatically was
            worth it though. Seeing a professional-looking email on Gmail was
            very cool!
          </p>
        </li>
      </ol>
      <h3>
        To check out the project on GitHub, click on the GitHub logo below!
      </h3>
      <a href="https://github.com/lukeclimen/CEMS">
        <img
          class="icon__large round"
          src="images/github_logo (2).png"
          alt="Github logo"
      /></a>
    </div>
  </body>
  <script src="javascript/main.js"></script>
</html>