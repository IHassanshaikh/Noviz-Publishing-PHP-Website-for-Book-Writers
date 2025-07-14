<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Service page Page</title>
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="./components/form.css">
  <link rel="stylesheet" href="./css/service/banner.css">
  <link rel="stylesheet" href="./css/service/consultation.css">
  <link rel="stylesheet" href="./css/service/quote.css">
  <link rel="stylesheet" href="./components/websites.css">
  <link rel="stylesheet" href="./css/service/services.css">
  <link rel="stylesheet" href="./components/contactform.css">

</head>

<body>
  <!-- Banner Section -->
  <?php include './components/header.php'; ?>
  <div class="banner">

    <section class='banner-left'>
      <div class='banner-left-text'>
        <h1>Get Exclusive Audiobook Services and Advance Your Career as a Best-Selling Author</h1>
      </div>
      <div class='banner-left-img'>
        <img src="./images/banner.png" alt="Author recording audiobook">
      </div>
    </section>
    <section class='banner-right'>
      <?php include  './components/form.php'; ?>
    </section>
  </div>

  <!-- Awards Section -->
  <section class="award-container">
    <div class="award-container__inner">
      <!-- Left Side - Heading -->
      <div class="award-container__left">
        <h1 class="award-container__heading">AWARD-WINNING BOOK CREATION IS OUR FORTE</h1>
      </div>

      <!-- Right Side - Images -->
      <div class="award-container__right">
        <div class="award-container__grid">
          <img class="award-container__image" src="./images/award2.jpeg" alt="Award Winning Book 2">
          <img class="award-container__image" src="./images/award.jpeg" alt="Award Winning Book 1">
          <img class="award-container__image" src="./images/award3.jpeg" alt="Award Winning Book 3">
          <img class="award-container__image" src="./images/award4.jpeg" alt="Award Winning Book 4">
        </div>
      </div>
    </div>
  </section>

  <!-- Consultation Section -->
  <section class="dual-column-section">
    <!-- Section 1 -->
    <div class="section-container section-1">
      <div class="text-content">
        <h1>Transform your idea into a well written book</h1>
        <p class="description">Connect with us now to get the best deals!</p>
        <div class="button-group">
          <button type="submit" class="request-btn">
            Request a quote
            <img class='submit-arrow' src="./images/arrow.svg" alt="">
          </button>
          <button class="phone-btn request-btn" onclick="window.location.href='tel:+11008977966'">
            <svg width="24" class="phone-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
              fill="currentColor">
              <path
                d="M20.01 15.38c-1.23 0-2.42-.2-3.53-.56-.35-.12-.74-.03-1.01.24l-1.57 1.97c-2.83-1.35-5.48-3.9-6.89-6.83l1.95-1.66c.27-.28.35-.67.24-1.02-.37-1.11-.56-2.3-.56-3.53 0-.54-.45-.99-.99-.99H4.19C3.65 3 3 3.24 3 3.99 3 13.28 10.73 21 20.01 21c.71 0 .99-.63.99-1.18v-3.45c0-.54-.45-.99-.99-.99z" />
            </svg>
            +110 0897 7966
          </button>
        </div>
      </div>
      <div class="image-content">
        <img src="../images/laptopgirl.png" alt="Book writing process">
      </div>
    </div>

    <!-- Section 2 -->
    <div class="section-container section-2">
      <div class="image-content2">
        <img src="./images/headphone.png" alt="Audiobook recording">
      </div>
      <div class="text-content">
        <h2>Bring Your Book to Life with an Audiobook Version!</h2>
        <p class="consultancy-description">We provide high-quality, informative, and budget-friendly self-published
          audiobooks.
          Click below to explore and get started!</p>
        <button class="secondary-btn">Get Free Consultation</button>
      </div>
      <img class="blob-1" src="./images/blob1.png" alt="blob-1">
    </div>
  </section>

  <!-- Quote Section  -->
  <section class="Quote">
    <div class="Quote-main">
      <div>
        <h1>Score Big Savings</h1>
        <img class="discount-img" src="./images/discount.svg" alt="discount-img">
        <button type="submit" class="quote-btn">
          Request a quote
          <img class='submit-arrow' src="./images/arrow.svg" alt="">
        </button>
      </div>
    </div>
    <img class="Quote-main-img" src="./images/piggybank.png" alt="piggybank">
    <img class="blob2" src="./images/blob2.png" alt="blob2">
  </section>

  <!-- Website Section  -->
  <?php include __DIR__ . '../components/websites.php'; ?>

  <!-- Service Section  -->
  <section class="services-section">
    <h2>We Provide a Plethora of<br><span>Audiobook Writing Services</span></h2>

    <div class="services-content">
      <div class="services-grid">
        <div class="service-box">Industry-Leading<br>Audiobook Experts</div>
        <div class="service-box">Premium Quality,<br>Affordable Audiobook</div>
        <div class="service-box">Tech-Savvy<br>Downloadable Digital Formats</div>
        <div class="service-box">Premium Quality,<br>Affordable Audiobook</div>
        <div class="service-box">Industry-Leading<br>Audiobook Experts</div>
        <div class="service-box">Premium Quality,<br>Affordable Audiobook</div>
      </div>

      <div class="connect-box">
        <h3 class="connect-header">Let's connect! <img class="submit-arrow" src="./images/arrow.svg" alt="arrow"></h3>
        <div class="connect-box-main">
          <p>
            We provide tailored services to<br>accomplish your goals, ensuring<br>your contentment and<br>gratification.
            We do not just write<br>stories; we bring life to them.
          </p>
          <img src="./images/bookgirl.jpeg" alt="Reading Lady">
        </div>
      </div>

    </div>
  </section>

  <!-- Contact form Section  -->
  <?php include __DIR__ . '../components/contactform.php'; ?>

</body>

</html>