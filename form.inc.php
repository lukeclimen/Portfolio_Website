<!-- Followed the tutorial here: https://www.youtube.com/watch?v=h5ghlfvU3S8 -->
<?php

  if(isset($_POST['email']) && $_POST['email'] != '') {
    $contactName = $_POST['name'];
    $contactEmail = $_POST['email'];
    $contactMessage = $_POST['info'];

    $to = "luke.climenhage@gmail.com";
    $subject = "New contact request from Portfolio Website";
    $body = "Form filled out by: ";

    $body += $contactMessage . "\r\n";
    $body += "Email address: " . $contactEmail . "\r\n";
    $body += "Message: \r\n" . $contactMessage;

    mail($to, $subject, $body);
    header("Location: index.php");
    exit();
  }
?>
<form 
    class="form__block" 
    action="form.inc.php" 
    method="POST"
>
  <h2 class="form__title">Want to Reach Out?</h2>
  <p class="form__description">Fill out the form below to send me a mesage!</p>
  <div class="form__pair width__controller">
    <label class="form__label" for="name">What is your name?</label>
    <input
      class="form__fillable form__element"
      id="name"
      name="name"
      placeholder="Your Name"
      type="text"
    />
  </div>

  <div class="form__pair width__controller">
    <label class="form__label" for="email">What is your email?</label>
    <input
      class="form__fillable form__element"
      id="email"
      name="email"
      placeholder="Your Email"
      type="email"
    />
  </div>

  <div class="form__pair width__controller">
    <label class="form__label" for="infoText">What can I help with?</label>
    <textarea
      class="form__fillable form__element"
      id="infoText"
      name="info"
      placeholder="Your message"
      rows="5"
    ></textarea>
  </div>

  <button class="button form__element">Submit</button>
</form>