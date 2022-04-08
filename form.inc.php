<form class="form__block" action="">
  <h2 class="form__title">Want to Reach Out?</h2>
  <p class="form__description">Fill out the form below to send me a mesage!</p>
  <div class="form__pair width__controller">
    <label class="form__label" for="name">What is your name?</label>
    <input
      class="form__fillable form__element"
      id="name"
      type="text"
      placeholder="Your Name"
    />
  </div>

  <div class="form__pair width__controller">
    <label class="form__label" for="email">What is your email?</label>
    <input
      class="form__fillable form__element"
      id="email"
      type="email"
      placeholder="Your Email"
    />
  </div>

  <div class="form__pair width__controller">
    <label class="form__label" for="infoText">What can I help with?</label>
    <textarea
      class="form__fillable form__element"
      id="infoText"
      rows="5"
      placeholder="Your message"
    ></textarea>
  </div>

  <button class="button form__element">Submit</button>
</form>