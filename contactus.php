<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact-us Page</title>
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="./css/contactus/banner.css">
  <link rel="stylesheet" href="./css/contactus/contactform.css">
  <link rel="stylesheet" href="./css/contactus/contact.css">
</head>

<body>
  <?php include './components/header.php'; ?>
  <section class="Banner">
    <div class="Banner-content">
      <h1>Witness Excellence by Working <br>with the Top Industry Specialists</h1>
      <p>Connect with Excellence! Welcome to the Business Consultic Contact Us Page <br> — where your business questions
        meet our expert solutions. Reach out,<br> let's start a conversation, and pave the way for your success journey!
        For long-term <br>collaboration inquiries, drop us an email at novispublishing.com We're excited <br>to partner
        with you for a successful journey.</p>
      <div class="banner-btns">
        <button class="cta-button">Get Free Consultations</button>
      </div>
    </div>
  </section>

  <!-- Contact more info -->
  <section class="contact-card">
    <div class="contact-details-container">
      <div class="contact-method">
        <h3 class="contact-label">
          <img src="./images/call.svg" alt="Phone Icon" width="26  "> Call Us
        </h3>
        <p class="contact-value">+110 0987 7616</p>
      </div>

      <div class="contact-method">
        <h3 class="contact-label">
          <img src="./images/envelope.svg" alt="Email Icon" width="26"> Email Us
        </h3>
        <p class="contact-value">hello@novispublishing.com</p>
      </div>

      <div class="contact-method">
        <h3 class="contact-label">
          <img src="./images/location.svg" alt="Location Icon" width="26"> Find Us
        </h3>
        <p class="contact-value">123 NY, business street, United States</p>
      </div>
    </div>
  </section>
  <!-- who are we  -->
  <div class="contact-section">
    <img class="contact-header-image" src="./images/contactus.png" alt="contactus">
    <div class="contact-content-wrapper">
      <div class="contact-info-column">
        <p class="contact-intro-text">Our support team is ever ready to provide answers to all your questions! Let's
          tell
          your story to the world!</p>
        <div class="contact-details-card">
          <h1 class="contact-card-header">Get in Touch</h1>
          <div class="contact-info-container">
            <p><img class="contact-info-icon" src="./images/envelope.svg" alt="envelope"> hello@novispublishing.com</p>
            <p><img class="contact-info-icon" src="./images/call.svg" alt="call"> +1110 0987 7616</p>
            <p>Follow us on all social media platforms</p>
            <div class="social-media-links">
              <a href="#"><img src="./images/instagram.svg" width="24"></a>
              <a href="#"><img src="./images/youtube.svg" width="24"></a>
              <a href="#"><img src="./images/fb.svg" width="24"></a>
              <a href="#"><img src="./images/linkedin.svg" width="24"></a>
              <a href="#"><img src="./images/tweeter.svg" width="24"></a>
            </div>
          </div>
        </div>
      </div>

      <div class="contact-form-column">
        <div class="contact-form2">
          <form class="contactusform" action="submit.php" method="POST">
            <input class="form-input" type="text" name="name" placeholder="Name (required)" required>
            <input class="form-input" type="email" name="email" placeholder="Email (required)" required>
            <input class="form-input" type="text" name="phone" placeholder="Phone (required)" required>
            <textarea class="form-textarea" name="message" placeholder="Message"></textarea>

            <div class="consent-checkbox">
              <input type="checkbox" name="consent" id="consent" required>
              <label for="consent">
                By providing a telephone number and submitting this form you are consenting to be contacted by SMS text
                message. Message & data rates may apply. You can reply STOP to opt-out of further messaging.
              </label>
            </div>

            <button class="submit-button" type="submit">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Websites  -->
  <section class="image-row2">
    <img src="./images/ingrambook.jpg" alt="Image 1">
    <img src="./images/barnes.jpg" alt="Image 2">
    <img src="./images/kobo.jpg" alt="Image 3">
    <img src="./images/kindle.jpg" alt="Image 4">
    <img src="./images/Scribe.jpg" alt="Image 5">
    <img src="./images/authorlab.jpg" alt="Image 6">
  </section>

  <!-- Contact us -->
  <section class="contact-us">
    <div class="contact-banner">
      <h1>Don't Hesitate To Contact Us!<br> We Are Working Round<br> The Clock</h1>
      <p>If you need to contact us at any time of the day, don't hesitate to contact our representatives.</p>
      <div class="contact-buttons">
        <button class="get-started">Get Started</button>
        <button class="live-chat">Live Chat</button>
      </div>
      <img class="conact-spark" src="./images/sense-svg.png" alt="spark">
      <img class="conact-clock" src="./images/wall-clock.png" alt="clock">
      <img class="conact-arrow" src="./images/fly.png" alt="arrow">
    </div>
  </section>
    <?php include './components/footer.php' ?>

</body>

</html>