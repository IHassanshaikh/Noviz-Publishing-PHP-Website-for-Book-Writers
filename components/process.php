<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Services Section</title>
  <style>
    .services-section {
      align-items: center;
      padding-top: 40px;
      padding-bottom: 40px;
      text-align: center;
      background-color: #fdf3dd;
      display: flex;
      flex-direction: column;
      justify-content: center
    }

    .services-section h2 {
      font-size: 2.5em;
      margin-bottom: 70px;
    }

    .services-container {
      display: flex;
      flex-wrap: wrap;
      gap: 8px;
      justify-content: center;
    }

    .service-box {
      width: 240px;
      padding: 20px;
      text-align: center;
      transition: transform 0.3s ease;

    }

    .service-box:hover {
      transform: translateY(-5px);
    }

    .service-box img {
      width: 100%;
      height: 290px;
      object-fit: cover;
      border-top-right-radius: 50px;
      margin-bottom: 15px;
      background-color: white;
      border-radius: 0 60px 0 0
    }

    .service-box h3 {
      margin: 10px 0 5px;
      font-size: 1.2em;
    }

    .service-box p {
      font-size: 0.95em;
      color: #7d2c25;
    }

    .services-button {
      margin-top: 40px;
      display: flex;
      align-items: center;
      gap: 15px;
      margin-left: 10px;
      margin-right: 10px;
    }

    .services-button button {
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: #7d2c25;
      color: rgb(253, 253, 253);
      padding: 14px 30px;
      text-decoration: none;
      font-size: 16px;
      transition: all 0.3s;
      border-radius: 15px;
      gap: 10px;
      transition: background-color 0.3s ease;

    }

    .services-button img {
      width: 20px;
      height: 20px;
      align-items: center;
    }


    @media (max-width: 600px) {
      .services-section h2 {
        font-size: 2em;
        margin-bottom: 30px;
      }


      .services-button button {
        font-size: 0.8em;
      }
    }

    @media (max-width: 400px) {
      .services-section h2 {
        font-size: 1.8em;
        margin-bottom: 20px;
      }


      .services-button button {
        padding: 8px 16px;
        font-size: 0.8em;
        background-color: #7d2c25;
        border-radius: 8px;
      }
    }
  </style>
</head>

<body>

  <div class="services-section">
    <h2>Services Provided</h2>

    <div class="services-container">
      <!-- Service Box 1 -->
      <div class="service-box">
        <img src="./images/service-1.png" alt="Service 1">
        <h3>BOOK EDITING</h3>
        <p>Workouts to increase muscle mass and improve strength</p>
      </div>

      <!-- Service Box 2 -->
      <div class="service-box">
        <img src="./images/service-2.png" alt="Service 2">
        <h3>Service Two</h3>
        <p>Workouts to increase muscle mass and improve strength</p>
      </div>

      <!-- Service Box 3 -->
      <div class="service-box">
        <img src="./images/service-3.jpg" alt="Service 3">
        <h3>Service Three</h3>
        <p>Workouts to increase muscle mass and improve strength</p>
      </div>

      <!-- Service Box 4 -->
      <div class="service-box">
        <img src="./images/service-4.png" alt="Service 4">
        <h3>Service Four</h3>
        <p>Workouts to increase muscle mass and improve strength</p>
      </div>
    </div>

    <div class="services-button">
      <button> Get Free Consultation</button>
      <button><img src="./images/phone-call.png" alt="">+1 922 38343434</button>
    </div>
  </div>

</body>

</html>