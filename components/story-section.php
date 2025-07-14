<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Book Writing Service</title>
  <style>
    .book-section {
      padding: 20px;
      color: white;
      position: relative;
      background-color: #7d2c25;
    }

    .section-container {
      position: relative;
      margin: 0 auto;
      display: flex;
      align-items: center;
      position: relative;
      z-index: 1;
      display: flex;
      justify-content: left;
      align-items: center;
      padding: 10px 74px;
      max-width: 1194px;
    }

    .content-container {
      width: 60%;
      padding-right: 40px;
      z-index: 2;
    }

    .section-heading2 {
      font-size: 1.9rem;
      margin-bottom: 4px;
      line-height: 1.3;
    }

    .section-description {
      font-size: 1rem;
      line-height: 1.6;
      margin-bottom: 30px;
      opacity: 0.9;
    }


    .cta-button2 {
      display: inline-block;
      background-color: white !important;
      color: #7d2c25 !important;
      padding: 14px 30px;
      text-decoration: none;
      font-size: 18px;
      font-weight: bold;
      transition: all 0.3s;
      border-radius: 15px;
    }

    .cta-button2:hover {
      background-color: #f0f0f0;
      transform: translateY(-2px);
    }

    .image-container1 {
      position: absolute;
      width: auto;
      height: auto;
      z-index: 1;
      right: 30px;
    }

    .book-image {
      position: absolute;
      width: 380px;
      border-radius: 8px 0 0 8px;
      z-index: 100;
      overflow: visible;
      right: 50px;
      top: -20px;
    }

    /* Responsive */
    @media (max-width: 1024px) {
      .section-container {
        flex-direction: column;
      }

      .content-container {
        width: 100%;
        padding-right: 0;
        text-align: center;
      }

      .image-container1 {
        /* width: 100%; */
        transform: none;
        margin-top: 40px;
      }

      .book-image {
        border-radius: 8px;
        display: none;
      }
    }
  </style>
</head>

<body>
  <section class="book-section">
    <div class="section-container">
      <div class="content-container">
        <h1 class="section-heading2">Bring Your Story to Life With a Book Writer by Your Side!</h1>
        <p class="section-description">
          Hire a book writer now, and start working on your first book. Allow Us To Make You Realize Your Full, Literary
          Potential, and make you stand out in the crowd of millions with your bestseller book!
        </p>
        <div class="services-button">
          <button class="cta-button2">Get Free Consultations</button>
          <button class="cta-button2"><img src="./images/phone-call.png" alt="">+1 922 38343434</button>
        </div>
      </div>
    </div>
    <img src="./images/laptopboy.png" alt="Book Writing" class="book-image">
  </section>
</body>

</html>