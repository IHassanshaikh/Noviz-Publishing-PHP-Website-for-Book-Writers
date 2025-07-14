<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Testimonials</title>
  <style>
    .testimonials-section {
      display: flex;
      justify-content: center;
      align-items: start;
      background-color: #f5f5f5;
      margin: auto;
      padding: 70px 10px 70px 70px;
      gap: 40px;
    }

    .section-header {
      display: flex;
      flex-direction: column;
      align-items: flex-start;
    }

    .section-header h1 {
      font-size: 50px;
      line-height: 1.4;
      font-weight: 700;
    }

    @media(max-width: 1040px) {
      .section-header h1 {
        font-size: 34px;
      }

      .testimonials {
        gap: 20px !important;
        margin-top: 50px;
      }

      .testimonials-section {
        padding: 60px 10px 60px 40px;
        gap: 10px;
      }
    }

    .section-header p {
      margin-top: 10px;
      font-size: 16px;
      max-width: 600px;
    }

    .testimonials {
      display: flex;
      gap: 40px;
      margin-top: 70px;
      scroll-behavior: smooth;
      overflow-x: hidden;
    }


    .testimonial {
      border: 2px solid #000;
      border-radius: 20px;
      padding: 20px;
      min-width: 200px;
      max-width: 220px;
      height: 290px;
      text-align: center;
      display: flex;
      flex-direction: column;
      justify-content: space-around;
      align-items: center;
    }

    .testimonal-para {
      font-size: 21px;
      text-align: start;
      margin-left: 20px;
      max-width: 810px;
      line-height: 1.4;
      font-weight: 700;
      width: 59vw;

    }

    .author {
      margin-top: 20px;
      display: flex;
      flex-direction: row-reverse;
      align-items: center;
      justify-content: center;
      margin-left: 18px
    }

    .author img {
      width: 150px;
    }

    .author span {
      font-weight: bold;
      font-size: 12px;
      text-align: start;
      color: #5B4227;
      width: 86px;
      margin-right: -12px;

    }

    .testimonal-right {
      display: flex;
      flex-direction: column;
      overflow: hidden;
    }

    .review {
      font-weight: bold;
      text-align: start;
      width: 90%;
      line-height: 1.4;
      font-size: 18px;
      margin-top: 20px;
    }

    .pagination-dots {
      display: flex;
      justify-content: center;
      gap: 10px;
      margin-top: 30px;
    }

    .pagination-dots .dot {
      width: 12px;
      height: 12px;
      border-radius: 50%;
      background-color: #999;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .pagination-dots .dot.active {
      background-color: #333;
    }


    @media (max-width: 776px) {
      .testimonials-section {
        flex-direction: column;
        align-items: center;
        padding: 40px 30px;
        gap: 20px;
      }

      .section-header {
        align-items: center;
        text-align: center;
      }

      .section-header h1 {
        font-size: 28px;
      }

      .section-header p {
        font-size: 14px;
      }

      .testimonal-right {
        align-items: center;
      }

      .testimonal-para {
        font-size: 14px;
        margin-left: 0;
        text-align: center;
      }

      .testimonials {
        width: 90vw;
        margin-top: 30px;
      }

      .testimonial {
        flex: 1 1 80%;
        max-width: 300px;
        height: auto;
      }

      .review {
        font-size: 14px;
      }

      .author img {
        width: 100px;
        height: auto;
      }

      .author span {
        font-size: 10px;
      }
    }

    /* Mobile Screens - 420px and below */
    @media (max-width: 420px) {
      .testimonials-section {
        padding: 30px 20px;
      }

      .section-header h1 {
        font-size: 24px;
        line-height: 1.1;
      }

      .section-header p {
        font-size: 12px;
        max-width: 100%;
      }

      .testimonal-para {
        font-size: 12px;
        padding: 0 10px;
      }

      .testimonial {
        flex: 1 1 100%;
        max-width: 100%;
        padding: 15px;
        height: auto;
      }

      .review {
        font-size: 12px;
        text-align: center;
      }

      .author img {
        width: 120px;
        height: auto;
        margin-bottom: 5px;
      }

      .author span {
        font-size: 9px;
      }
    }
  </style>
</head>

<body>

  <div class="testimonials-section">

    <div class="section-header">
      <h1>Testimonials<br>From<br>Satisfied<br>Clients</h1>
    </div>

    <div class="testimonal-right">
      <p class="testimonal-para">From small start-ups to multinational corporations, we've helped our clients create
        more inclusive digital
        ecosystems for employees, clients, and audiences alike.</p>


      <div class=" testimonials">
        <div class="testimonial">
          <p class="review">An incredible experience! The team transformed my ideas into a beautifully written
            book. Highly
            recommended!
          </p>
          <div class=" author">
            <img src="./images/testimonal-1.png" alt="Client 1">
            <span>SLANTCOUCH MAGAZINE</span>
          </div>
        </div>

        <div class="testimonial">
          <p class="review">Professional, creative, and detail-oriented. My book became a bestseller thanks to their
            expertise!</p>
          <div class="author">
            <img src="./images/testimonal-1.png" alt="Client 1">
            <span>ISABELE CASAREZ</span>
          </div>
        </div>

        <div class="testimonial">
          <p class="review">Excellent communication and top-notch writing. I'll definitely use their services again!</p>
          <div class="author">
            <img src="./images/testimonal-1.png" alt="Client 1">
            <span>SHOE&TOTE<br>.COM</span>
          </div>
        </div>
        <div class="testimonial">
          <p class="review">Excellent communication and top-notch writing. I'll definitely use their services again!</p>
          <div class="author">
            <img src="./images/testimonal-1.png" alt="Client 1">
            <span>SHOE&TOTE<br>.COM</span>
          </div>
        </div>
        <div class="testimonial">
          <p class="review">Excellent communication and top-notch writing. I'll definitely use their services again!</p>
          <div class="author">
            <img src="./images/testimonal-1.png" alt="Client 1">
            <span>SHOE&TOTE<br>.COM</span>
          </div>
        </div>
        <div class="testimonial">
          <p class="review">Excellent communication and top-notch writing. I'll definitely use their services again!</p>
          <div class="author">
            <img src="./images/testimonal-1.png" alt="Client 1">
            <span>SHOE&TOTE<br>.COM</span>
          </div>
        </div>
      </div>
      <div class="pagination-dots" id="paginationDots"></div>


    </div>
  </div>

</body>
<script>
  const container = document.querySelector('.testimonials');
  const testimonialCards = container.querySelectorAll('.testimonial');
  const paginationDotsContainer = document.getElementById('paginationDots');

  const cardWidth = testimonialCards[0].offsetWidth + 40; // 40px gap
  const totalCards = testimonialCards.length;

  let currentIndex = 0;

  // Create dots
  for (let i = 0; i < totalCards - 2; i++) {
    const dot = document.createElement('div');
    dot.classList.add('dot');
    if (i === 0) dot.classList.add('active');

    dot.addEventListener('click', () => {
      currentIndex = i;
      container.scrollTo({ left: cardWidth * currentIndex, behavior: 'smooth' });
      updateDots();
    });

    paginationDotsContainer.appendChild(dot);
  }

  function updateDots() {
    const dots = document.querySelectorAll('.pagination-dots .dot');
    dots.forEach(dot => dot.classList.remove('active'));
    dots[currentIndex].classList.add('active');

  }

  container.addEventListener('scroll', () => {
    const index = Math.round(container.scrollLeft / cardWidth);
    if (index !== currentIndex) {
      currentIndex = index;
      updateDots();
    }
  });
</script>

</html>