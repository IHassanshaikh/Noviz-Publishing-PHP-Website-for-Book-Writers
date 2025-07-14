<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Footer Design</title>
  <style>
    .footer {
      background: url('./images/footerbackground.webp') no-repeat center center/cover;
      color: white;
      position: relative;
    }

    .footer::before {
      content: "";
      position: absolute;
      inset: 0;
      background: rgba(125, 44, 37, 0.3);
      z-index: 1;
    }

    .footer-content {
      position: relative;
      z-index: 2;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      padding: 60px 40px 20px;
      gap: 40px;
    }

    .footer-left,
    .footer-right {

      min-width: 250px;
    }

    .footer-left h2 {
      font-size: 24px;
      margin-bottom: 10px;
    }

    .policy-links {
      margin-top: 30px;
      font-size: 14px;
    }

    .policy-links a {
      color: #fff;
      margin-right: 15px;
      text-decoration: none;
    }

    .footer-right {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      gap: 20px;
    }

    .footer-column {
      min-width: 120px;
    }

    .footer-column h4 {
      font-size: 16px;
      margin-bottom: 10px;
      font-weight: bold;
    }

    .footer-column ul {
      list-style: none;
      padding: 0;
    }

    .footer-column ul li {
      margin-bottom: 6px;
      font-size: 14px;
    }

    .footer-column ul li a {
      color: #fff;
      text-decoration: none;
    }

    .footer-bottom {
      background: #fff;
      color: #333;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 40px;
      flex-wrap: wrap;
    }

    .footer-logo {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .footer-logo img {
      height: 40px;
    }

    .footer-bottom p {
      margin: 0;
      font-size: 14px;
    }

    .social-icons {
      display: flex;
      gap: 10px;
    }

    .social-icons a {
      text-decoration: none;
      color: #333;
      font-size: 18px;
    }

    @media (max-width: 768px) {
      .footer-content {
        flex-direction: column;
        gap: 30px;
      }

      .footer-right {
        flex-direction: column;
      }

      .footer-bottom {
        flex-direction: column;
        text-align: center;
        gap: 10px;
      }
    }
  </style>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />
</head>

<body>

  <footer class="footer">
    <div class="footer-content">
      <div class="footer-left">
        <h2>Crafting Stories, Now Just a Click<br> Away.</h2>
        <div class="policy-links">
          <a href="#">Privacy Policy</a> |
          <a href="#">Terms & Conditions</a>
        </div>
      </div>

      <div class="footer-right">
        <div class="footer-column">
          <h4>Contact</h4>
          <ul>
            <li>Phone: +1 234 567 890</li>
            <li>Location: 123 Business Street, NY</li>
          </ul>
        </div>
        <div class="footer-column">
          <h4>Home</h4>
          <ul>
            <li><a href="#">Home</a></li>
          </ul>
        </div>
        <div class="footer-column">
          <h4>Services</h4>
          <ul>
            <li><a href="#">Audio Books</a></li>
            <li><a href="#">Author Web Design</a></li>
            <li><a href="#">Book Cover Design</a></li>
            <li><a href="#">Book Editing</a></li>
            <li><a href="#">Book Formatting</a></li>
            <li><a href="#">Ghostwriting</a></li>
          </ul>
        </div>
        <div class="footer-column">
          <h4>Why Us</h4>
          <ul>
            <li><a href="#">Why Us</a></li>
          </ul>
        </div>
        <div class="footer-column">
          <h4>Blog</h4>
          <ul>
            <li><a href="#">Blog</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <div class="footer-bottom">

    <div class="footer-logo">

      <img src="./images/logo.png">
    </div>

    <div class="footer-right-bottom">
    </div>
  </div>

  <!-- ✅ New section with logo and bottom content -->
  <div class="footer-bottom">

    <div class="footer-logo">

      <p>© 2025 NovisPublishing | All Rights Reserved</p>
    </div>

    <div class="footer-right-bottom">

      <div class="social-icons">
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-linkedin-in"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
      </div>
    </div>
  </div>
</body>

</html>