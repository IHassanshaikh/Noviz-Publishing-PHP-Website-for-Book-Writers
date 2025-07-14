<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Novis Publishing Header</title>
  <style>
    a {
      text-decoration: none;
      color: inherit;
    }

    .navbar-wrapper {
      padding: 10px;
      max-width: 1600px;
      margin: 0 auto;
      margin-bottom: -100px;
    }

    .navbar {
      background-color: #eee7d6;
      display: flex;
      align-items: center;
      padding: 14px 20px;
      border-radius: 10px;
      position: relative;
      z-index: 900;
      background-size: cover;
      background-position: center;
      justify-content: space-between;
    }

    .logo {
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .logo img {
      height: 40px;
    }

    .nav-links {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 16px;
      flex-wrap: wrap;
    }

    .nav-links a {
      font-size: 16px;
      transition: 0.3s;
    }

    .nav-links a:hover {
      color: #9b2c2c;
    }

    .cta-button-header {
      background-color: #7d2c25;
      color: #fff;
      padding: 10px 20px;
      border-radius: 30px;
      font-weight: bold;
      border: none;
      cursor: pointer;
      transition: 0.3s;
      justify-self: end;
    }

    .cta-button-header:hover {
      background-color: #5a1e19;
    }

    .hamburger {
      display: none;
      flex-direction: column;
      gap: 5px;
      cursor: pointer;
    }

    .hamburger div {
      width: 24px;
      height: 3px;
      background-color: #000;
      transition: 0.3s ease;
    }

    .sidebar {
      position: fixed;
      top: 0;
      right: -100%;
      height: 100%;
      width: 260px;
      background-color: #fff;
      box-shadow: -2px 0 10px rgba(0, 0, 0, 0.2);
      padding: 20px;
      display: flex;
      flex-direction: column;
      gap: 20px;
      transition: right 0.3s ease;
      z-index: 1000;
    }

    .sidebar.open {
      right: 0;
    }

    .sidebar a {
      font-size: 18px;
      padding: 10px 0;
      border-bottom: 1px solid #ddd;
      transition: 0.3s;
    }

    .sidebar a:hover {
      color: #7d2c25;
    }

    .sidebar .cta-button-header {
      margin-top: 10px;
    }

    .overlay {
      position: fixed;
      top: 0;
      left: 0;
      height: 100vh;
      width: 100vw;
      background: rgba(0, 0, 0, 0.4);
      display: none;
      z-index: 999;
    }

    .overlay.show {
      display: block;
    }

    .more-dropdown {
      position: relative;
    }

    .more-dropdown a {
      font-size: 16px;
      display: inline-block;
      padding: 10px 0;
      color: #000;
    }

    .more-dropdown .dropdown-content {
      display: none;
      flex-direction: column;
      position: absolute;
      top: 100%;
      left: 0;
      background: #fff;
      box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.15);
      min-width: 160px;
      border-radius: 5px;
      overflow: hidden;
      z-index: 2000;
    }

    .more-dropdown .dropdown-content a {
      padding: 8px;
      background-color: #eee7d6;
      font-size: 15px;
      color: #333;
      border-bottom: 1px solid #eee;
      background-color: white;
      transition: background-color 0.2s;
    }

    .more-dropdown .dropdown-content a:hover {
      color: #7d2c25;
    }

    .more-dropdown:hover .dropdown-content {
      display: flex;
      background-color: #eee7d6;
    }

    /* Sidebar Specific */
    .sidebar .more-dropdown {
      position: relative;
      width: 100%;
    }

    .sidebar .more-dropdown .dropdown-content {
      position: relative;
      top: 0;
      left: 0;
      box-shadow: none;
      background: #fff;
      border: none;
      width: 100%;
      display: none;
      padding-left: 15px;
    }

    .sidebar .more-dropdown.active .dropdown-content {
      display: flex;
    }

    .sidebar .more-dropdown a {
      background-color: #eee7d6;
      font-size: 15px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .sidebar .more-dropdown a::after {
      content: "+";
      font-size: 18px;
    }

    .sidebar .more-dropdown.active a::after {
      content: "-";
    }

    .sidebar .more-dropdown .dropdown-content a {
      background-color: #eee7d6;
      border-bottom: 1px solid #ddd;
      padding: 8px 0;
    }

    @media (max-width: 1024px) {
      .nav-links {
        display: none;
      }

      .hamburger {
        display: flex;
        justify-self: end;
      }

      .cta-button-header {
        display: none;
      }

      .navbar {
        grid-template-columns: 1fr auto auto;
      }

      .sidebar .more-dropdown a {
        background-color: white;
        font-size: 18px;
        background-image: none;

      }

      .sidebar .more-dropdown .dropdown-content a {
        background-image: none;
        background-color: white;
        font-size: 18px;

      }
    }

    @media (max-width: 580px) {
      .navbar-wrapper {
        padding: 10px;
        max-width: 1600px;
        margin: 0 auto;
        margin-bottom: -100px;
      }

      .navbar {
        padding: 6px 10px;
      }

      .logo {
        gap: 4px;
      }

      .logo img {
        height: 30px;
      }
    }
  </style>
</head>

<body>
  <!-- Wrapper with padding and centering -->
  <div class="navbar-wrapper">
    <header class="navbar">
      <!-- Left: Logo -->
      <div class="logo">
        <img src="./images/logo.png" alt="Novis Publishing Logo" />
      </div>

      <!-- Center: Nav Links -->
      <div class="nav-links">
        <a href="./service.php">Ghostwriting</a>
        <a href="./service.php">Fiction Writing</a>
        <a href="./service.php">Book Editing</a>
        <a href="./service.php">Publishing</a>
        <a href="./service.php">Design</a>
        <a href="./service.php">Other Services</a>

        <div class="more-dropdown">
          <a href="#">More ▾</a>
          <div class="dropdown-content">
            <a href="./index.php">Home</a>
            <a href="./aboutus.php">About Us</a>
            <a href="./contactus.php">Contact Us</a>
            <a href="./terms.php">Terms & Conditions</a>
            <a href="./service.php">Services</a>
          </div>
        </div>
      </div>

      <!-- Right: CTA Button & Hamburger -->
      <div style="display: flex; align-items: center; gap: 20px; justify-content: flex-end;">
        <button class="cta-button-header">Get Started</button>
        <div class="hamburger" id="hamburger">
          <div></div>
          <div></div>
          <div></div>
        </div>
      </div>
    </header>
  </div>

  <!-- Sidebar -->
  <div class="sidebar" id="sidebar">
    <a href="#">Ghostwriting</a>
    <a href="#">Fiction Writing</a>
    <a href="#">Book Editing</a>
    <a href="#">Publishing</a>
    <a href="#">Design</a>
    <a href="#">Other Services</a>

    <div class="more-dropdown" id="sidebar-more-dropdown">
      <a href="#">More</a>
      <div class="dropdown-content">
        <a href="/index.php">Home</a>
        <a href="./aboutus.php">About Us</a>
        <a href="./contactus.php">Contact Us</a>
        <a href="./terms.php">Terms & Conditions</a>
        <a href="./services/service.php">Services</a>
      </div>
    </div>

    <button class="cta-button-header">Get Started</button>
  </div>

  <!-- Overlay -->
  <div class="overlay" id="overlay"></div>

  <script>
    const sidebar = document.getElementById("sidebar");
    const overlay = document.getElementById("overlay");
    const hamburger = document.getElementById("hamburger");
    const sidebarMoreDropdown = document.getElementById("sidebar-more-dropdown");

    hamburger.addEventListener("click", () => {
      sidebar.classList.add("open");
      overlay.classList.add("show");
    });

    overlay.addEventListener("click", () => {
      sidebar.classList.remove("open");
      overlay.classList.remove("show");
    });

    // Toggle the dropdown in sidebar
    sidebarMoreDropdown.querySelector("a").addEventListener("click", (e) => {
      e.preventDefault();
      sidebarMoreDropdown.classList.toggle("active");
    });
  </script>
</body>

</html>