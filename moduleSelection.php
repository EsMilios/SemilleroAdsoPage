<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>ADSO English</title>
</head>

<body>
    <section class="main">
        <!-- Include the navigation bar -->
        <?php include_once 'assets/phps/nav.php'; ?>

        <!-- Modules Section -->
        <div class="modulesTittle">
            <h1>About the Modules</h1>
        </div>

        <div class="modulesSelection">
            <div class="modulesSelectionMain">

                <!-- Web Development Module -->
                <div class="modulesSelectionMainModules">
                    <div class="modulesPartsTittle">
                        <div>
                            <img src="assets/images/webDevelopmentLogo.png" alt="Web Development Logo" style="width: 50px; height: 50px;">
                        </div>
                        <div>
                            <h2>Web Development Module</h2>
                        </div>
                    </div>
                    <p>This module covers key terms in web development, including HTML for structuring content, CSS for styling, JavaScript for interactivity, Responsive Design for multi-device compatibility, and Bootstrap for quick, responsive layouts.</p>
                    <div class="modulesSelectionButton">
                        <a href="webModule.php">Start Learning!</a>
                    </div>
                </div>

                <!-- Cloud Computing Module -->
                <div class="modulesSelectionMainModules">
                    <div class="modulesPartsTittle">
                        <div>
                            <img src="assets/images/cloudDevelopmentLogo.png" alt="Cloud Computing Logo" style="width: 50px; height: 50px;">
                        </div>
                        <div>
                            <h2>Cloud Computing Module</h2>
                        </div>
                    </div>
                    <p>This module introduces essential cloud computing vocabulary, focusing on service models like IaaS, PaaS, and SaaS, cloud platforms like AWS and Azure, and tools like Docker, Kubernetes, and Serverless computing for scalable, efficient applications.</p>
                    <div class="modulesSelectionButton">
                        <a href="cloudModule.php">Start Learning!</a>
                    </div>
                </div>

            </div>
        </div>

        <!-- Include the footer -->
        <?php include_once 'assets/phps/footer.php'; ?>
    </section>
</body>
