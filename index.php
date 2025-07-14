<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Hero Section */
        .hero-section {
            background-color: #eee7d6;
            padding: 150px 20px 60px;
            display: flex;
            justify-content: center;

        }

        .hero-section .container {
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .hero-section h1 {
            font-size: 3.2rem;
            color: black;
            margin-bottom: 14px;
        }

        .hero-section p {
            font-size: 1.2rem;
            margin-bottom: 0px;
            line-height: 1.4;
            padding: 10px;
            max-width: 1009px
        }

        .cta-button {
            display: inline-block;
            background-color: #7d2c25;
            color: rgb(253, 253, 253);
            padding: 14px 30px;
            text-decoration: none;
            font-size: 18px;
            font-weight: bold;
            transition: all 0.3s;
            border-radius: 15px;
        }


        .fixed-width-container {
            margin: 0 auto;
            text-align: center;
        }


        /* 
        .cta-button {
            background: #7d2c25;
            color: white;
            padding: 12px 25px;
            border-radius: 15px;
            text-decoration: none;
            font-weight: bold;
        } */


        /* 5 Boxes Section */
        .boxes-container {
            display: flex;
            justify-content: center;
            align-items: flex-end;
            gap: 20px;
            flex-wrap: wrap;
            background-color: #eee7d6;
            padding: 0px 10px 30px 10px;
            flex-wrap: nowrap;
            margin-top: -80px;
        }

        .box {
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        /* Box Sizes */
        .box-1 {
            width: 224px;
            height: 354px;
            border-radius: 30px;
        }

        .box-2 {
            width: 160px;
            height: 220px;
            padding: 10px 4px;
            text-align: center;
            background: #7d2c25;
            border-radius: 40px;
        }

        .box-2 p {
            color: white;
            font-size: 19px;
            font-weight: 100;
            line-height: 1.5;
            letter-spacing: 1.2px;

        }

        .box-4 p {
            color: white;
            font-size: 19px;
            font-weight: 100;
            line-height: 1.5;
            letter-spacing: 1.2px;
        }

        .box-3 {
            width: 340px;
            height: 200px;
            border-radius: 30px;
            margin: 0 10px
        }

        .box-4 {
            width: 160px;
            height: 220px;
            padding: 10px 4px;
            text-align: center;
            background: #919191;
            border-radius: 40px;
        }

        .box-5 {
            width: 224px;
            height: 354px;
            border-radius: 30px;
        }

        .box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 8px;
        }

        /* Two Column Section */
        .section {
            background-color: #7d2c25;
            color: white;
        }

        .two-column-container {
            display: flex;
            flex-wrap: wrap;
            min-height: 500px;
        }

        .left-container,
        .right-container {
            flex: 1;
            min-width: 300px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .left-container img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            max-height: 680px;
            object-fit: contain;
        }

        .right-container {
            justify-content: center;
            gap: 35px;
            margin-left: -60px;
            margin-top: 20px
        }

        .four-img-heading {
            font-size: 2.4rem;
            font-weight: 700;
            text-align: center;
        }

        .content {
            text-align: center;
            display: flex;
            flex-direction: column;
            gap: 35px;
        }

        .content h2 {
            font-size: 2rem;
            color: #d9d9d9;
            letter-spacing: 4px;
            word-spacing: 4px;
            line-height: 1.4;
        }

        .content button {
            background: white;
            color: rgb(0, 0, 0);
            border: none;
            padding: 14px 28px;
            border-radius: 50px;
            font-weight: bold;
            cursor: pointer;
            font-size: 18px;
        }

        .right-image img {
            width: 100%;
            max-height: 200px;
            object-fit: contain;
            border-radius: 8px;
        }

        /* 4 Image Grid Section */
        .image-grid-section {
            background: white;
        }

        .img-para {
            padding: 30px;
            max-width: 700px;
            width: 61vw;
            margin-top: -161px;
            margin-bottom: 65px;
        }

        @media(max-width:1144px) {
            .img-para {
                padding: 30px 0;
            }
        }

        .intro {
            font-style: italic;
            font-size: 18px;
            line-height: 1.4;
            word-spacing: 1px;
            color: #2c3e50;
        }

        .img-para-ul {
            margin-top: 16px;
            list-style: none;
            padding: 0;
        }

        .img-para-ul li {
            content: "🔶";
            margin-right: 8px;
            font-size: 20px;
            line-height: 1.5;
            word-spacing: 1px;
        }

        .img-para-ul li::before {
            content: "🔶";
            margin-right: 8px;
            font-size: 16px;
        }


        .image-grid {
            display: grid;
            grid-template-columns: repeat(4, 0fr);
            gap: 6px;
            margin: auto;
        }

        .image-container {
            display: flex;
            flex-direction: column;
            max-width: 274px;
            height: 400px;
            width: 21vw;
        }

        .image-container-tall {
            display: flex;
            flex-direction: column;
            max-width: 360px;
            width: 31vw;
        }

        .image-box {
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        @media(max-width:1150px) {
            .image-box {
                height: 84%;
            }
        }

        @media (max-width: 1000px) {
            .image-box {
                height: 70%;
            }

            .img-para {
                max-width: 700px;
                width: auto;
                margin-top: -144px;
                margin-bottom: 65px;
            }
        }

        /* .image-box:not(.tall) {
            aspect-ratio: 1/1.2;
        }

        .tall {
            aspect-ratio: 1/1.5;
        } */

        .image-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .shared-content {
            grid-column: 1 / 4;
            font-family: Arial, sans-serif;
            text-align: left;
        }

        .shared-content p {
            margin-top: -50px;
        }

        /* Awards Section */
        .awards-section {
            background-color: #7d2c25;
            color: white;
            padding: 20px 0;
        }

        .award-container__inner {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 34px;
        }

        .award-container__left {
            flex: 1;
            min-width: 300px;
            padding: 20px;
        }

        .award-container__heading {
            font-size: 1.6rem;
            color: white;
            text-align: left;
            width: 46vw;
            line-height: 1.4;
        }

        .award-container__right {
            flex: 1;
            min-width: 300px;
            padding: 10px 20px;
        }

        .award-container__grid {
            display: grid;
            grid-template-columns: repeat(4, 0.6fr);
            gap: 15px;
        }

        .award-container__image {
            width: 100%;
            border-radius: 8px;
        }

        /* Science Box Section */
        .science-box-section {
            background: white;
        }

        .science-box {
            width: 300px;
            background: #ffffff;
            border-radius: 12px;
            border: 1px solid #e0e0e0;
            padding: 25px;
            text-align: center;
            margin: 0 auto;
        }

        .science-box h1 {
            color: #2c3e50;
            font-size: 24px;
            margin-bottom: 15px;
        }

        .science-box p {
            color: #7f8c8d;
            font-size: 16px;
            line-height: 1.5;
        }

        .science-icon {
            font-size: 40px;
            margin-bottom: 15px;
            color: #3498db;
        }

        .image-row {
            display: flex;
            justify-content: center;
            gap: 10px;
            padding: 40px;
            flex-wrap: wrap;
            background-color: white;
            /* optional: good for smaller screens */
        }

        .image-row img {
            width: 200px;
            border-radius: 8px;
        }


        .why-choose-section {
            background: white;
            padding: 10px 20px 40px 20px;
        }

        .fixed-width-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto;
            flex-direction: column;
            gap: 20px;
            padding: 54px 20px 4px 20px;
        }

        .fixed-width-container2 {
            display: flex;
            justify-content: center;
            margin: 0 auto;
            flex-direction: column;
            gap: 10px;
            padding: 54px 20px 4px 20px;
            max-width: 1250px;
        }

        .fixed-width-container3 {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto;
            flex-direction: column;
            gap: 10px;
            padding: 0px 30px;
        }

        .why-choose-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 110px;
            align-items: center;
            justify-content: space-between;
        }

        /* Left features */
        .features {
            flex: 0.8;
            min-width: 300px;
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-left: -34px;
        }

        .feature-card {
            padding: 20px 25px;
            border-radius: 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            color: #000;
            font-family: sans-serif;
        }

        .feature-card h4 {
            margin: 0;
            font-size: 1.1rem;
            font-weight: 700;
            border-bottom: 2px solid #000;
            display: inline-block;
            margin-bottom: 8px;
        }


        /* Right content */
        .why-choose-content {
            flex: 2;
            min-width: 300px;
            max-width: 630px;
            padding: 10px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .why-choose-content h2 {
            font-size: 1.6rem;
            margin-bottom: 16px;
            font-weight: bold;
        }

        .why-choose-content p {
            font-size: 1rem;
            line-height: 1.6;
        }

        .why-choose-content a {
            color: rgb(40, 37, 125);
            text-decoration: underline;
        }

        .why-choose-content img {
            width: 84%;
            max-width: 570px;
        }

        .custom-card {
            color: #000;
            padding: 58px 76px;
            display: flex;
            align-items: start;
            width: 400px;
            position: relative;
            justify-content: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
            background-position: center;
            gap: 60px;
        }

        .peach {
            background-image: url(./images/box1.png);

        }

        .yellow {
            background-image: url(./images/box2.png);

        }

        .purple {
            background-image: url(./images/box3.png);

        }

        .custom-left {
            font-weight: bold;
            margin-right: 25px;
            position: relative;
            min-width: 100px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
        }

        .custom-left::before {
            content: "";
            display: block;
            width: 64px;
            height: 2px;
            background: #000;
            margin-bottom: 8px;
        }

        .custom-title-line {
            text-align: start;
            font-size: 1.2em;
            line-height: 1.2em;
            font-weight: 700;
        }

        .custom-right {
            font-size: 1.1em;
            line-height: 1.4em;
            text-align: left;
        }

        /* RESPONSIVNESSSS */

        @media (max-width: 1300px) {
            .why-choose-section {
                padding: 10px;
            }

            .why-choose-grid {
                flex-direction: column;
            }

            .why-choose-grid {
                display: flex;
                flex-wrap: wrap;
                gap: 40px;
                align-items: center;
                justify-content: space-between;
            }


            /* Right content */
            .why-choose-content {
                min-width: auto;
                max-width: auto;
                margin-left: 0
            }



            .why-choose-content img {
                width: 100%;
                max-width: 570px;
            }

            .custom-card {
                color: #000;
                padding: 30px 86px 48px 58px;
                display: flex;
                align-items: center;
                width: 80%;
                position: relative;
                justify-content: center;
                background-repeat: no-repeat;
                background-size: cover;
                position: relative;
                background-position: center;
                align-self: center;
                margin: 10px;

            }

        }

        @media (max-width: 1024px) {

            .boxes-container {
                padding: 30px 10px;
                gap: 6px;

            }


            /* Box Sizes */
            .box-1 {
                width: 180px;
                border-radius: 20px;
                height: 290px;
            }

            .box-2 {
                width: 150px;
                padding: 10px;
                border-radius: 20px;
                height: 200px;

            }

            .box-2 p {
                font-size: 16px;
            }

            .box-4 p {
                font-size: 16px;
            }

            .box-3 {
                width: 340px;
                border-radius: 20px;
                height: 166px;

            }

            .box-4 {
                width: 150px;
                padding: 10px;
                border-radius: 20px;
                height: 200px;

            }

            .box-5 {
                width: 180px;
                border-radius: 20px;
                height: 290px;

            }
        }

        @media (max-width: 600px) {

            .boxes-container {
                margin-top: 0;

            }

            .image-container {
                display: flex;
                flex-direction: column;
                max-width: 274px;
                height: 50vw;
                width: auto;
            }

            .image-box {
                height: 100%;
            }

            .img-para {
                padding: 10px;
                max-width: auto;
                width: auto;
                margin-top: -0px;
                margin-bottom: 20px;
            }

            .intro {
                font-size: 14px;
                line-height: 1.3;
            }

            .home-form-left-column img {
                height: auto;
            }

            .section-container {
                padding: 0 !important;
            }

            .home-form-note {
                margin-top: 30px;
                font-size: 12px;
                color: #ffffff;
                width: auto;
            }

            .img-para-ul {
                margin-top: 12px;
                list-style: none;
                padding: 0;
            }

            .img-para-ul li {
                content: "🔶";
                margin-right: 6px;
                font-size: 14px;

            }
        }

        @media (max-width: 768px) {

            .boxes-container {
                padding: 30px 10px;
                gap: 6px;

            }


            /* Box Sizes */
            .box-1 {
                width: 170px;
                border-radius: 20px;
            }

            .box-2 {
                width: 140px;
                padding: 10px;
                border-radius: 20px;
            }

            .box-2 p {
                font-size: 16px;
            }

            .box-4 p {
                font-size: 16px;
            }

            .box-3 {
                display: none;
            }

            .box-4 {
                width: 140px;
                padding: 10px;
                border-radius: 20px;
            }

            .box-5 {
                width: 170px;
                border-radius: 20px;
            }

            .content h2 {
                font-size: 28px !important;
            }

            .award-container__heading {
                font-size: 1.5rem;
                margin-bottom: 0px;
                text-align: center;
                width: 100%;

            }

            .award-container__inner {
                gap: 0px;
            }

            .hero-section p {
                padding: 0 50px
            }
        }

        @media (max-width: 600px) {

            .boxes-container {
                padding: 20px 10px;
                flex-wrap: wrap;
            }

            .hero-section p {
                padding: 0 20px
            }

            /* Box Sizes */
            .box-1 {
                width: 140px;
                height: 200px;
                border-radius: 20px;
            }

            .box-2 {
                width: 120px;
                height: 180px;
                padding: 10px;
                border-radius: 20px;
            }

            .box-2 p {
                font-size: 14px;
            }

            .box-4 p {
                font-size: 14px;
            }

            .box-3 {
                display: block;
            }

            .box-4 {
                width: 120px;
                height: 180px;
                padding: 10px;
                border-radius: 20px;
            }

            .box-5 {
                width: 140px;
                height: 200px;
                border-radius: 20px;
            }

            .hero-section {
                padding: 160px 20px 40px;
            }


            .hero-section h1 {
                font-size: 2rem;
                margin-bottom: 10px;
            }

            .hero-section p {
                font-size: 1rem;
                margin-bottom: 20px;
                line-height: 1.4;
            }

            .cta-button {
                padding: 10px 18px;
                border-radius: 10px;
                font-size: 14px
            }

            .fixed-width-container {
                padding: 40px 10px;
            }

            .fixed-width-container h2 {
                font-size: 20px;
            }

            .shared-content p {
                margin-top: 0px;
                font-size: 14px;
            }

            .image-grid {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                gap: 2px;
            }

            .fixed-width-container2 {
                padding: 54px 10px 4px 10px;
            }


            .image-grid .image-container:nth-child(2) {
                display: none;
            }

            .two-column-container {
                display: flex;
                flex-wrap: wrap;
                min-height: 500px;
                flex-direction: column;
            }

            .right-container {
                margin-left: 0px;
                align-items: center;
            }
        }

        .four-img-heading {
            font-size: 1.8rem;

        }

        .content h2 {
            font-size: 24px !important;
        }

        .award-container__heading {
            font-size: 1.2rem;
        }

        .features {
            width: 100%;
            gap: 0px;
        }

        .why-choose-section {
            padding: 10px;
        }

        .why-choose-grid {
            flex-direction: column;
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
            align-items: center;
            justify-content: center;
        }


        /* Right content */
        .why-choose-content {
            min-width: auto;
            max-width: auto;
        }

        .custom-card {
            padding: 40px 20px;
            margin: 0 auto;
            width: 440px;
            max-width: auto;
        }

        .why-choose-content h2 {
            font-size: 1.2rem;
            margin-bottom: 10px;
        }

        .why-choose-content p {
            font-size: 1rem;
            line-height: 1.4;
            margin-bottom: 10px;
            padding: 10px;

        }

        .why-choose-content img {
            width: 100%;
            max-width: 80%;
        }


        }




        @media(max-width: 655px) {
            .right-container {
                margin-left: 0;
            }
        }

        @media(max-width: 460px) {
            .custom-card {
                padding: 40px 34px;
                margin: 0 auto;
                width: 380px;
                max-width: auto;
            }

            .four-img-heading {
                font-size: 1.5rem;
            }

            .content h2 {
                font-size: 20px !important;
            }
        }

        @media(max-width: 425px) {
            .hero-section {
                padding: 130px 14px 30px;
                margin-top: -8%;

            }


            .hero-section h1 {
                font-size: 1.6rem;
            }

            .hero-section p {
                font-size: 0.9rem;
                margin-bottom: 10px;
            }

            .cta-button {
                padding: 8px 14px;
                font-size: 12px
            }

            .features {
                gap: 0;
            }

            .custom-card {
                padding: 40px 13px;
                width: 100%;
                gap: 20px;
            }

            .hero-section p {
                padding: 0 10px
            }

            .award-container__left {
                flex: 1;
                min-width: 250px;
                padding: 20px 10px;
            }

            .award-container__right {
                flex: 1;
                min-width: 280px;
                padding: 20px 10px;
            }

            .left-container,
            .right-container {
                padding: 10px;
            }

            .why-choose-section {
                padding: 0px;
            }

            .why-choose-content h2 {
                font-size: 1.2rem;
                margin-bottom: 10px;
            }

            .why-choose-content p {
                font-size: 0.8rem;
                line-height: 1.4;
                margin-bottom: 10px;

            }

            .custom-title-line {
                font-size: 0.9rem;
            }

            .custom-right {
                font-size: 0.8em;
                line-height: 1.2em;
            }

            .fixed-width-container {
                padding: 30px 10px;
            }

            .custom-left {
                margin-right: 25px;
                min-width: 70px;
                align-items: center;
            }



        }
    </style>
</head>

<body>
    <!-- Navbar at top -->
    <?php include './components/header.php' ?>

    <!-- Hero Section below navbar -->
    <section class="hero-section">
        <div class="container">
            <h1>Your Story, Your Voice <br> Published Digitally</h1>
            <p style="color:#7d2c25;  font-style: italic;">"Our book writing service is dedicated to turning your ideas
                into a published reality.
                Whether you're a visionary storyteller or an aspiring thought leader,
                our expert ghostwriters bring your dreams to life with precision and creativity."</p>
            <div class="services-button">
                <button> Get Free Consultation</button>
                <button><img src="./images/phone-call.png" alt="">+1 922 38343434</button>
            </div>

        </div>

    </section>

    <!-- 5 Boxes Section -->
    <div class="boxes-container">
        <!-- Box 1 (Image) -->
        <div class="box box-1">
            <img src="./images/Image-01.png" alt="Image 1">
        </div>
        <!-- Box 2 (Content) -->
        <div class="box box-2">
            <p>Progressive instruction from written text to digital book format.</p>
        </div>
        <!-- Box 3 (Wider Image) -->
        <div class="box box-3">
            <img src="./images/box-3.webp" alt="Wider Image">
        </div>
        <!-- Box 4 (Content) -->
        <div class="box box-4">
            <p>Progressive instruction from written text to digital book format.</p>
        </div>
        <!-- Box 5 (Image) -->
        <div class="box box-5">
            <img src="./images/Image-01.png" alt="Image 5">
        </div>
    </div>


    <!-- Two Column Section -->
    <div class="section">
        <div class="fixed-width-container">
            <div class="two-column-container">
                <div class="left-container">
                    <img src="./images/home-image.png" alt="Left Image">
                </div>
                <div class="right-container">
                    <div class="content" style="text-align:center">
                        <h2 style="font-size:42px">Form Concept to <br>Bestseller - Professional<br> Book Writers at
                            Your <br>Service!</h2>
                        <p>
                            <button>Book Now</button>
                        </p>
                    </div>
                    <div class="right-image">
                        <img src="./images/Image-2.png" alt="Bottom Right Image">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 4 Image Grid Section -->
    <div class="full-width-section image-grid-section">
        <div class="fixed-width-container2">
            <h2 class="four-img-heading"> Hire The Best Writers in the USA Bring Your Book To Life </h2>
            <div class="image-grid">
                <!-- Image 1 -->
                <div class="image-container">
                    <div class="image-box">
                        <img src="./images/book1.webp" alt="Image 1">
                    </div>
                </div>
                <!-- Image 2 -->
                <div class="image-container">
                    <div class="image-box">
                        <img src="./images/findme.jpg" alt="Image 2">
                    </div>
                </div>
                <!-- Image 3 -->
                <div class="image-container">
                    <div class="image-box">
                        <img src="./images/diaryofceo.jpg" alt="Image 3">
                    </div>
                </div>
                <!-- Image 4 (taller) -->
                <div class="image-container-tall">
                    <div class="image-box tall">
                        <img src="./images/book4.webp" alt="Tall Image 4">
                    </div>
                </div>
            </div>
            <div class="img-para">
                <p class="intro">
                    <em>Great writers never gave up on their passion, and neither should you! With our affordable book
                        writing services, your ideas can become a professionally crafted masterpiece.</em>
                </p>

                <ul class="img-para-ul">
                    <li>Transform your concepts into a compelling book.</li>
                    <li>Work with expert writers to create a potential bestseller.</li>
                    <li>Join our community of satisfied authors.</li>
                </ul>


                <div class="services-button">
                    <button> Get Free Consultation</button>
                    <button><img src="./images/phone-call.png" alt="">+1 922 38343434</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Awards Section -->
    <div class="full-width-section awards-section">
        <div class="fixed-width-container3">
            <div class="award-container__inner">
                <!-- Left Side - Heading -->
                <div class="award-container__left">
                    <h1 class="award-container__heading">AWARD-WINNING BOOK CREATION IS OUR FORTE</h1>
                </div>
                <!-- Right Side - Images -->
                <div class="award-container__right">
                    <div class="award-container__grid">
                        <img class="award-container__image" src="./images/award2.png" alt="Award Winning Book 2">
                        <img class="award-container__image" src="./images/award.png" alt="Award Winning Book 1">
                        <img class="award-container__image" src="./images/award3.png" alt="Award Winning Book 3">
                        <img class="award-container__image" src="./images/award4.png" alt="Award Winning Book 4">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="why-choose-section">
        <div class="fixed-width-container">
            <div class="why-choose-grid">
                <!-- Left Features -->
                <div class="features">
                    <div class="custom-card peach">
                        <div class="custom-left">
                            <div class="custom-title-line">Quality<br>work</div>
                        </div>
                        <div class="custom-right">
                            Try fun and simple<br>
                            science experiments<br>
                            with everyday things
                        </div>
                    </div>
                    <div class="custom-card yellow">
                        <div class="custom-left">
                            <div class="custom-title-line">Customer<br>Satisfaction</div>
                        </div>
                        <div class="custom-right">
                            Explore a selection of<br>
                            engaging books about<br>
                            science
                        </div>
                    </div>
                    <div class="custom-card purple">
                        <div class="custom-left">
                            <div class="custom-title-line">Timely<br>Delivered</div>
                        </div>
                        <div class="custom-right">
                            Discover accesible<br>
                            destinations to see<br>
                            science in the real world
                        </div>
                    </div>

                </div>

                <!-- Right Content -->
                <div class="why-choose-content">
                    <h2>Why Choose Writers Of USA As Your Book Writing Agency?</h2>
                    <p>
                        Our services include everything offered by a book writing agency, from writing and
                        <a href="#">editing</a> to <a href="#">publishing</a>. Don't let your ideas stale on a shelf.
                        Today, get your
                        hands on the top book writing firm based in USA and let us assist you in bringing your book to
                        life.
                        Count on us to make your book a best-seller as one of the best book writing services in the
                        business.
                        Benefits from working with us include:
                    </p>
                    <img src="./images/laptopgirl2.png" alt="Woman on laptop">
                    <div class="services-button">
                        <button> Get Free Consultation</button>
                        <button><img src="./images/phone-call.png" alt="">+1 922 38343434</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <?php include './components/story-section.php' ?>
    <?php include './components/section-four.php' ?>
    <?php include './components/process.php' ?>

    <!-- STEP CONTAINER -->
    <section class="step-container">
        <div class="step">
            <h1 class="step-heading">OUR <BR>BOOK WRITTING<BR> PROCESS</h1>
            <div class="step1">
                <span class="step1-number">1</span>
                <img class="book-img" src="./images/book.png" alt="book">
                <h2 class="title">Report Research <br>and Concept Layout</h2>
                <p class="para">We start with extensive research and drafting according to your provided information
                    before we
                    finally start
                    writing down the very first chapter</p>
            </div>
        </div>
        <div class=" step">
            <div class="step-col2">
                <div class="step2 step-com">
                    <div class="step-header">
                        <h3 class="title-sm">Repetitive Updates<br> For Book writing</h3>
                        <span class="number">2</span>
                    </div>
                    <p class="para">Although our team of ghostwriters will update you throughout-you can preview each
                        chapter
                        after
                        it's done.</p>
                </div>
                <div class="step3 step-com">
                    <div class="step-header">
                        <h3 class="title-sm">Covering a Spectrum<br> Of Publishing Needs</h3>
                        <span class="number">3</span>
                    </div>
                    <p class="para">No matter how imperfect you think your scripts are, we will make them spotless so
                        that you
                        won't
                        stop
                        generating great ideas</p>
                </div>
                <div class="step4 step-com">
                    <div class="step-header">
                        <h3 class="title-sm">Editing & <br>Proofreading</h3>
                        <span class="number">4</span>
                    </div>
                    <p class="para">The manuscript undergoes professional editing to enhance clarity, grammar, and style
                    </p>
                </div>
            </div>

            <div class="step-col2 st ">
                <div class="step5 step-com">
                    <div class="step-header">
                        <h3 class="title-sm">Formatting &<br> Design</h3>
                        <span class="number">5</span>
                    </div>
                    <p class="para">Once the manuscript is complete and polished, the next crucial step is ensuring it
                        looks
                        professional and is
                        ready for publishing</p>
                </div>
                <div class="step6 step-com">
                    <div class="step-header">
                        <h3 class="title-sm">Publishing <br>Assistance</h3>
                        <span class="number">6</span>
                    </div>
                    <p class="para">Once your book is complete, the next step is choosing the best publishing path</p>
                </div>
                <div class="step7 step-com">
                    <div class="step-header">
                        <h3 class="title-sm">Marketing &<br> Promotion</h3>
                        <span class="number">7</span>
                    </div>
                    <p class="para">Once your book is published, marketing is essential to reach your audience and drive
                        sales.
                    </p>
                </div>
            </div>
            <img class="bigarrow" src="./images/bigarrow.png" alt="arrow">
            <img class="arrowright1" src="./images/Arrow-sm.png" alt="arrow">
            <img class="arrowright2" src="./images/Arrow-sm.png" alt="arrow">
            <img class="arrowdown" src="./images/Arrow-sm.png" alt="arrow">
            <img class="arrowleft1" src="./images/Arrow-sm.png" alt="arrow">
            <img class="arrowleft2" src="./images/Arrow-sm.png" alt="arrow">
        </div>

    </section>
    <section class="image-row">
        <img src="images/amazon.jpg" alt="Image 1">
        <img src="images/googlebooks.jpg" alt="Image 2">
        <img src="images/smashwords.jpg" alt="Image 3">
        <img src="images/kitaboo.webp" alt="Image 4">
        <img src="images/ingram.jpg" alt="Image 5">
    </section>
    <?php include './components/testimonals.php' ?>


    <!-- FAQ CONTAINER -->
    <div class="faq-container">
        <div class="faq active">Q: What is ghostwriting?</div>
        <div class="faq-answer"><strong>A:</strong> Ghostwriting is when a writer creates content that is officially
            credited to another person.</div>

        <div class="faq">Q: How does the book writing process work?</div>
        <div class="faq-answer"><strong>A:</strong> We begin with an outline, then write drafts, revise with your
            feedback, and finalize the manuscript.</div>

        <div class="faq">Q: Will I own the rights to my book?</div>
        <div class="faq-answer"><strong>A:</strong> Yes! You will retain full rights and authorship of your book.</div>

        <div class="faq">Q: How do I get started?</div>
        <div class="faq-answer"><strong>A:</strong> Simply contact us through our website to schedule a free
            consultation.</div>

        <div class="faq">Q: Will my information remain confidential?</div>
        <div class="faq-answer"><strong>A:</strong> Yes! We sign NDAs to ensure complete confidentiality.</div>

        <div class="faq">Q: Do you help with publishing too?</div>
        <div class="faq-answer"><strong>A:</strong> Absolutely! We guide you through traditional or self-publishing
            options.</div>
    </div>

    <!-- Form -->
    <section class="home-form-wrapper">
        <div class="home-form-container">
            <div class="home-form-left-column">
                <img src="./images/laptopgirl4.png" alt="Visual Content">
            </div>
            <div class="home-form-right-column">
                <h2>Let’s Get Started!</h2>
                <p>Schedule an appointment with our book writers and start writing your first draft.</p>

                <form class="home-form">
                    <input type="text" placeholder="Name">
                    <input type="email" placeholder="Email">
                    <input type="text" placeholder="Phone">
                    <button type="submit">Submit</button>
                </form>

                <div class="home-form-note">
                    <input type="checkbox"> By providing a telephone number and submitting this form you are consenting
                    to be contacted by SMS text message.<br> Message & data rates may apply. You can reply STOP to
                    opt-out of further messaging.
                </div>
            </div>
        </div>
    </section>
    <section class="image-row">
        <img src="./images/amazon.jpg" alt="Image 1">
        <img src="./images/googlebooks.jpg" alt="Image 2">
        <img src="./images/smashwords.jpg" alt="Image 3">
        <img src="./images/kitaboo.webp" alt="Image 4">
        <img src="./images/ingram.jpg" alt="Image 5">
    </section>
    <?php include './components/footer.php' ?>

    <!-- Website Section  -->
    <script>
        const faqs = document.querySelectorAll('.faq');
        faqs.forEach(faq => {
            faq.addEventListener('click', () => {
                faq.classList.toggle('active');
                faqs.forEach(item => {
                    if (item !== faq) item.classList.remove('active');
                });
            });
        });
    </script>
</body>

</html>