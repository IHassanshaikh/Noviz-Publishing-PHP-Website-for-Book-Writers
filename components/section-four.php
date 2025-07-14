<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Writing Genres</title>
    <style>
        .genre-section {
            padding: 100px 60px;
            margin: 0 auto;
            text-align: center;
        }

        .section-heading {
            font-size: 2.2rem;
            color: #f8fafc;
            margin-bottom: 50px;
            font-weight: 700;
            line-height: 1.3;
            max-width: 1200px;
            text-align: center;
            margin: auto;
        }

        .genre-grid {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 14px;
            max-width: 1100px;
            margin: 20px auto;
        }

        .genre-box {
            background: white;
            border-radius: 40px;
            border: 2px solid rgb(56, 56, 56);
            padding: 20px 12px;
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
            gap: 12px;
            justify-content: start;
            align-items: center;
        }

        .genre-box:hover {
            border-color: #3498db;
        }

        .genre-icon {
            width: 60px;
            margin: 0 auto 15px;
            border-radius: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
        }

        .genre-icon img {
            width: 60px;

        }

        .genre-name {
            font-size: 1rem;
            font-weight: 600;
            margin: 0;
        }

        /* Responsive adjustments */
        @media (max-width: 1024px) {
            .genre-grid {
                grid-template-columns: repeat(4, 1fr);
            }

            .section-heading2 {
                text-align: left;
            }

            .section-description {
                text-align: left;

            }
        }

        @media (max-width: 768px) {
            .genre-grid {
                grid-template-columns: repeat(3, 1fr);
            }

            .section-heading {
                font-size: 1.6rem;

            }

            .genre-section {
                padding: 40px 20px;

            }
        }

        @media (max-width: 480px) {
            .genre-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .genre-icon {
                width: 40px;
                height: 40px;
                font-size: 18px;
            }

            .genre-section {
                padding: 20px 10px;
            }

            .section-heading {
                font-size: 1.2rem;
                margin-bottom: 16px;
            }

            .genre-name {
                font-size: 1rem;
            }
        }

        @media (max-width: 600px) {

            .section-heading2 {
                font-size: 1.6rem;
            }

            .section-description {
                font-size: 0.9rem;
            }
        }

        @media (max-width: 450px) {

            .section-heading2 {
                text-align: left;
                font-size: 1.2rem;
            }

            .section-description {
                text-align: left;
                font-size: 0.8rem;

            }

            .services-button {
                margin-top: 10px;
                gap: 10px;
                margin-left: 0;
                margin-right: 0;
            }

            .book-section {
                padding: 20px 10px;

            }
        }
    </style>
</head>

<body>
    <section class="genre-section">
        <h1 class="section-heading" style="color: black">Our Team Of Incredible Book Writers Can Construct Stories In
            Various Genres!</h1>

        <div class="genre-grid">
            <!-- Action -->
            <div class="genre-box">
                <div class="genre-icon"><img src="./images/movie-clapper-open.png" alt="ACTION"></div>
                <h3 class="genre-name">ACTION</h3>
            </div>

            <!-- Children -->
            <div class="genre-box">
                <div class="genre-icon"><img src="./images/kids.png" alt="CHILDREN"></div>
                <h3 class="genre-name">CHILDREN</h3>
            </div>

            <!-- Fantasy -->
            <div class="genre-box">
                <div class="genre-icon"><img src="./images/fairy.png" alt="FANTASY"></div>
                <h3 class="genre-name">FANTASY</h3>
            </div>

            <!-- Romance -->
            <div class="genre-box">
                <div class="genre-icon"><img src="./images/cupid.png" alt="ROMANCE"></div>
                <h3 class="genre-name">ROMANCE</h3>
            </div>

            <!-- Thrill -->
            <div class="genre-box">
                <div class="genre-icon"><img src="./images/footstep.png" alt="THRILL"></div>
                <h3 class="genre-name">THRILL</h3>
            </div>

            <!-- Fiction -->
            <div class="genre-box">
                <div class="genre-icon"><img src="./images/rocket.png" alt="FICTION"></div>
                <h3 class="genre-name">FICTION</h3>
            </div>

            <!-- Drama -->
            <div class="genre-box">
                <div class="genre-icon"><img src="./images/open-book.png" alt="DRAMA"></div>
                <h3 class="genre-name">DRAMA</h3>
            </div>
        </div>
    </section>
</body>

</html>