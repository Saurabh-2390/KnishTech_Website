<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Partners</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        /* Main Heading */
        .partners-heading {
            font-size: 30px;
            font-weight: bold;
            color: #0c162d; /* Dark blue */
            margin-bottom: 10px;
            position: relative;
            display: inline-block;
        }

        /* Underline below heading */
        .partners-heading::after {
            content: "";
            display: block;
            width: 50px; /* Adjust width */
            height: 4px; /* Adjust thickness */
            background-color: #ff7f3f; /* Orange color */
            margin: 8px auto 0; /* Adjust spacing */
            border-radius: 2px;
        }

        /* Subtext */
        .partners-subtext {
            font-size: 16px;
            color: #666; /* Light gray */
            max-width: 600px;
            margin: 0 auto 30px;
        }

        /* Logo Container */
        .company-icons {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 15px;
            max-width: 900px;
            margin: 0 auto;
        }

        /* Individual Logo Box */
.company-icon {
    padding: 15px;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 180px; /* Increased width */
    height: 120px; /* Increased height */
}

.company-icon img {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
}

        /* Responsive Design */
        @media (max-width: 768px) {
            .partners-section {
                padding: 30px 10px;
            }

            .partners-heading {
                font-size: 26px;
            }

            .partners-subtext {
                font-size: 14px;
            }

            .company-icons {
                flex-direction: row;
                justify-content: center;
                gap: 10px;
            }

            .company-icon {
                width: 120px;
                height: 80px;
            }
        }
    </style>
</head>
<body>

    <div class="partners-section">
        <h2 class="partners-heading">Our Partners</h2>
        <p class="partners-subtext">
            We partners with world-renowned project management companies to successfully build carefree high-quality projects for owners.
        </p>

        <div class="company-icons">
            <div class="company-icon">
                <img src="assets/images/Ecoserv-Logo.webp" alt="Ecoserv">
            </div>
            <div class="company-icon">
                <img src="assets/images/Aus.jpg" alt="Aus">
            </div>
            <div class="company-icon">
                <img src="assets/images/pointon.png" alt="Pointon">
            </div>
        </div>
    </div>

</body>
</html>
