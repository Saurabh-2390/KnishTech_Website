<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Showcase</title>
    <style>
        body { 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
            margin: 0; 
            padding: 0;
            background-color: #ffffff;
            color: #333;
            text-align: center;
        }
        .container { 
            max-width: 1000px; 
            margin: auto; 
            padding: 20px;
        }
        .achievement-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-top: 15px;
            padding: 12px 24px;
            background: white; 
            color: #111;
            text-decoration: none;
            font-size: 18px;
            font-weight: bold;
            border-radius: 8px;
            border: 1px solid #d61a3c;
            transition: all 0.3s ease-in-out;
            cursor: pointer;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
        }
        .achievement-btn:hover {
            background: #d61a3c;
            color: white;
            box-shadow: 4px 4px 15px rgba(214, 26, 60, 0.5);
        }
        .achievement-btn img {
            width: 20px;
            height: 20px;
            margin-right: 8px;
        }
        
        /* Company Icons Wrapper */
        .company-icons-wrapper {
            width: 100%;
            margin-top: 10px;
            display: none; /* Initially hidden */
            align-items: center;
            justify-content: flex-start; /* Moves icons to the left */
            position: relative;
        }

        /* Scrollable Carousel */
        .carousel-container {
            width: 650px; /* 6 icons x 70px */
            overflow: hidden;
            position: relative;
            display: flex;
            justify-content: flex-start; /* Aligns icons to the left */
            margin-left: 100px;  /* Moves entire carousel slightly right */
            align-items: center;
        }

        /* Company Icons */
        .company-icons {
            display: flex;
            justify-content: flex-start; /* Align icons to the left */
            transition: transform 0.5s ease-in-out;
            margin-left: 100px; /* Moves icons to the right */
        }

        /* Individual Company Icon */
        .company-icon {
            width: 80px;
            height: 50px;
            cursor: pointer;
            filter: grayscale(100%);
            transition: filter 0.3s ease-in-out;
            margin: 15px;
        }

        .company-icon:hover {
            filter: grayscale(0%);
        }

        /* Slider Buttons */
        .slider-btn {
            background: rgba(255, 255, 255, 0.3); /* Semi-transparent glass effect */
            color: #333;
            border: 2px solid rgba(255, 255, 255, 0.5);
            padding: 15px;
            font-size: 22px;
            cursor: pointer;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 10;
            border-radius: 50%;
            backdrop-filter: blur(10px); /* Glass effect */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease-in-out;
            width: 55px;
            height: 55px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Hover Effect */
        .slider-btn:hover {
            background: linear-gradient(45deg, #ff416c, #ff4b2b);
            color: white;
            border-color: rgba(255, 255, 255, 0.8);
            box-shadow: 0 8px 16px rgba(255, 75, 43, 0.5);
            transform: translateY(-50%) scale(1.15) rotate(5deg); /* Slight rotation for a unique touch */
        }

        /* Left and Right Button Positioning */
        .left-btn { 
            left: 40px; 
        } 

        .right-btn { 
            right: 150px;
        }

        /* Add a subtle pulse animation when hovering */
        @keyframes pulse {
            0% { box-shadow: 0 0 10px rgba(255, 75, 43, 0.4); }
            50% { box-shadow: 0 0 20px rgba(255, 75, 43, 0.6); }
            100% { box-shadow: 0 0 10px rgba(255, 75, 43, 0.4); }
        }

        .slider-btn:hover {
            animation: pulse 1.5s infinite;
        }

        /* Show All Button */
        #showAllBtn {
            font-size: 14px;
            padding: 6px 12px;
            background: #e0e0e0;
            color: #333;
            border-radius: 5px;
            border: 1px solid #aaa;
            cursor: pointer;
            transition: 0.3s ease-in-out;
            display: none;
            margin-left: auto;
        }

        #showAllBtn:hover {
            background: #d6d6d6;
            border-color: #888;
        }

        .projects { 
            display: none;
            text-align: left;
            margin-top: 10px;
        }
        .project-item { 
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px;
            background: #ffffff;
            margin: 10px auto;
            border-radius: 5px;
            border: 1px solid #ddd;
            max-width: 1000px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
            display: none;
            position: relative;
        }
        .project-content {
            flex-grow: 1;
        }
        .project-title {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
        }
        .date { 
            font-size: 14px; 
            color: #666;
            margin-top: 5px;
        }

        /* Right-aligned icons in project items */
        .project-icon {
            width: 80px;
            height: 50px;
            margin-left: 15px;
            align-self: flex-start; /* Align flag to the top */
        }
    </style>
</head>
<body>
    <div class="container">
    <h2>Project Showcase</h2>

    <button class="achievement-btn" onclick="window.location.href='success-stories.html';">
        <img src="assets/images/bg-image/map-bgimg.png" alt="Achievement Icon">
        Success Stories
    </button>

    <!-- Company Icons and Show All Button Wrapper -->
    <div class="company-icons-wrapper" id="companyIcons">
        <button class="slider-btn left-btn" onclick="scrollIcons(-1)">&#8249;</button>
        
        <div class="carousel-container">
            <div class="company-icons" id="iconsCarousel">
                <!-- 15 Company Icons -->
                <img src="assets/images/Ecoserv-Logo.webp" class="company-icon" onclick="filterProjects('USA')" alt="USA">
                <img src="assets/images/Aus.jpg" class="company-icon" onclick="filterProjects('Australia')" alt="Australia">
                <img src="assets/images/pointon.png" class="company-icon" onclick="filterProjects('Norway')" alt="Norway">
            </div>
        </div>

        <button class="slider-btn right-btn" onclick="scrollIcons(1)">&#8250;</button>
        <button class="achievement-btn" id="showAllBtn" onclick="filterProjects('all')">Show All</button>
    </div>
</div>

        <!-- Project List -->
        <div class="projects" id="projectList">
            <div class="project-item" data-company="USA">
                <div class="project-content">
                    <div class="project-title">
                        <b>USA Oil and Gas Integration</b>
                        <img src="assets/images/NationalFlag/USA.jpg" class="project-icon" alt="USA Icon">
                    </div>
                    <div class="date">Date: May 15, 2023</div>
                    <br>
                    <div class="image-container">
                        <img src="<?=base_url()?>assets/images/logic1.png" width="230" height="330" style="margin-right: 20px;">
                        <img src="<?=base_url()?>assets/images/logic.png" width="230" height="330" style="margin-right: 20px;">
                        <img src="<?=base_url()?>assets/images/logic2.png" width="230" height="330">
                    </div>
                    <br>
                    <p>We are thrilled to announce the successful completion of the <b>USA Oil & Gas Integration Project</b>, delivering a robust and scalable solution tailored for the oil & gas industry in the USA. Our team leveraged cutting-edge cloud technologies to streamline operations and enhance efficiency.</p>
                    <p><b>🔹 Key Technologies That Powered This Project:</b></p>
                    <ul>
                        <li>✅ <b>Azure Logic Apps</b> for seamless workflow automation and integration</li>
                        <li>✅ <b>Azure Functions</b> for serverless compute operations</li>
                        <li>✅ <b>Azure SQL Server</b> for robust data storage and management</li>
                        <li>✅ <b>Azure Key Vault</b> for secure management of secrets and credentials</li>
                        <li>✅ <b>Azure Storage Account (ADLS)</b> for optimized data storage solutions</li>
                        <li>✅ <b>RosettaNet</b> for B2B messaging and integration</li>
                        <li>✅ <b>XML, XSLT, and XSD</b> for transforming, validating, and mapping data</li>
                    </ul>
                    <p>This solution is designed to <b>streamline operations, boost productivity, and provide agility</b> needed for the USA’s oil & gas sector to thrive in today’s fast-paced digital landscape. 🌍💡</p>
                    <p>We’re incredibly proud of our <b>team’s innovation-driven approach</b>. Looking forward to more projects that redefine possibilities with Azure! 🔗</p>
                </div>
            </div>

            <div class="project-item" data-company="Australia">
                <div class="project-content">
                    <div class="project-title">
                        <b>Migration Project</b>
                        <img src="assets/images/NationalFlag/Aus.jpg" class="project-icon" alt="Australia Icon">
                    </div>
                    <div class="date">Date: July 10, 2024</div>
                    <br>
                    <div class="image-container">
                        <img src="<?=base_url()?>assets/images/fabric1.png" width="380" height="200" style="margin-right: 10px;">
                        <img src="<?=base_url()?>assets/images/fabric2.png" width="380" height="200">
                        <img src="<?=base_url()?>assets/images/fabric3.png" width="400" height="200" style="display: block; margin: 0 auto;">
                    </div>
                    <br>
                    <p>We are excited to announce the successful completion of our <b>Migration Project</b> for an Australian-based company, enabling a seamless transition to a modern cloud-based infrastructure with enhanced scalability, performance, and efficiency. This project harnessed the power of <b>Microsoft Fabric</b> alongside cutting-edge technologies to optimize data migration, integration, and analytics workflows.</p>
                    <p><b>🔹 Key Highlights of the Project:</b></p>
                    <ul>
                        <li>✅ <b>Microsoft Fabric</b> for unified data integration, transformation, governance, and security</li>
                        <li>✅ <b>Lakehouse Architecture</b> to enable scalable and structured data storage</li>
                        <li>✅ <b>Spark Clusters</b> for high-performance big data processing and analytics</li>
                        <li>✅ <b>Data Factory in Fabric</b> for orchestrating seamless ETL pipelines</li>
                        <li>✅ <b>Power BI</b> for real-time data visualization, analytics, and business intelligence</li>
                        <li>✅ <b>Power Apps</b> for workflow automation and seamless data integration into SSMS</li>
                        <li>✅ <b>SQL Server Management Studio (SSMS)</b> for efficient data management and querying</li>
                        <li>✅ <b>End-to-End Data Migration</b> to a modern, future-ready cloud-based infrastructure</li>
                    </ul>
                    <p>This project has significantly enhanced <b>data processing, reporting capabilities, and analytics workflows</b>, empowering the company with deeper insights and agile decision-making. 🎯</p>
                    <p>Kudos to our <b>dedicated team</b> for their commitment to innovation! Looking forward to more groundbreaking cloud transformation projects. 🌐💡</p>
					</p>
					
				<div class="project-item" data-company="Norway">
                <div class="project-content">
                    <div class="project-title">
                        <b>API Integration</b>
                        <img src="assets/images/NationalFlag/Norway.jpg" class="project-icon" alt="Norway Icon">
                    </div>
                    <div class="date">Date: Feb 20, 2025</div>
                    <p>We are excited to announce the successful completion of our <b>API Integration Project</b> for a leading Norwegian company! This project seamlessly connected two businesses with a robust, scalable .NET-based solution powered by Azure. 🎉</p>
                    <p><b>Project Highlights:</b></p>
                    <ul>
                        <li>✅ <b>Scalable API Integration</b> built using <b>.NET and C#</b></li>
                        <li>✅ <b>Azure API Management</b> for secure and efficient API communication</li>
                        <li>✅ <b>Azure Function Apps</b> for real-time serverless computing</li>
                        <li>✅ <b>Advanced security measures</b> for authentication and authorization</li>
                    </ul>
                    <p>This integration <b>automates workflows, reduces manual effort, and enhances business efficiency</b>, ensuring seamless and reliable data exchange between both companies. 🚀</p>
                    <p>A huge shout-out to our <b>incredible team</b> for their expertise and dedication in making this project a success! We look forward to more innovation-driven collaborations in the API integration space. 🌍💡</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        let currentIndex = 0;
        const itemsPerSlide = 6;
        const iconsCarousel = document.getElementById("iconsCarousel");
        const totalItems = iconsCarousel.children.length;

        function scrollIcons(direction) {
            let maxIndex = Math.ceil(totalItems / itemsPerSlide) - 1;
            currentIndex = Math.max(0, Math.min(currentIndex + direction, maxIndex));
            iconsCarousel.style.transform = `translateX(-${currentIndex * 550}px)`;
        }

        function toggleAchievements() {
            var projects = document.getElementById("projectList");
            var projectItems = document.querySelectorAll(".project-item");
            var companyIcons = document.getElementById("companyIcons");

            if (projects.style.display === "none" || projects.style.display === "") {
                projects.style.display = "block";
                companyIcons.style.display = "flex"; // Show company icons
                projectItems.forEach(item => item.style.display = "flex");
                currentIndex = 0; // Reset to first set of icons
                iconsCarousel.style.transform = `translateX(0)`;
                sortProjectsByDate(); // Sort projects by date
            } else {
                projects.style.display = "none";
                companyIcons.style.display = "none"; // Hide company icons
                projectItems.forEach(item => item.style.display = "none");
            }
        }

        function sortProjectsByDate() {
            const projectList = document.getElementById("projectList");
            const projects = Array.from(projectList.querySelectorAll(".project-item"));

            projects.sort((a, b) => {
                const dateA = new Date(a.querySelector(".date").textContent.replace("Date: ", ""));
                const dateB = new Date(b.querySelector(".date").textContent.replace("Date: ", ""));
                return dateB - dateA; // Sort in descending order
            });

            // Clear the project list and re-append sorted projects
            projectList.innerHTML = "";
            projects.forEach(project => projectList.appendChild(project));
        }

        function filterProjects(company) {
            let projects = document.querySelectorAll(".project-item");
            let showAllBtn = document.getElementById("showAllBtn");

            if (company === "all") {
                projects.forEach(item => item.style.display = "flex");
                showAllBtn.style.display = "none"; // Hide 'Show All' button
            } else {
                projects.forEach(item => {
                    if (item.getAttribute("data-company") === company) {
                        item.style.display = "flex";
                    } else {
                        item.style.display = "none";
                    }
                });
                showAllBtn.style.display = "inline-block"; // Show 'Show All' button
            }
        }
    </script>
</body>
</html>