<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>ADSO English</title>
</head>

<body>
    <section class="main">
        <?php include_once 'assets/phps/nav.php'; ?>
        <section class="presentation">
            <div class="tittle">
                <h1 id="title1">Análisis y Desarrollo de Software</h1>
                <h1 id="title2"><span>English Vocabulary Learning!</span></h1>
            </div>
            <div class="presentationMain">
                <div class="presentationParagraph">
                    <h2>About</h2>
                    <p>
                        Welcome to this page dedicated to <b>vocabulary</b> of Software Analysis and Development (ADSO).
                        <br><br> Here, you'll learn key concepts of software analysis and development in English.
                        Discover <b>essential vocabulary</b> that will help you excel in the software world, with
                        interactive resources and content tailored to your level.
                    </p>
                </div>
                <div class="presentationImg">
                    <img src="assets/images/codeHomeImage.jpg" alt="">
                </div>
            </div>
        </section>

        <section class="modules">
            <div class="modulesTittle">
                <h1>About the Modules</h1>
            </div>
            <div class="modulesPresentation">
                <div class="modulesParts">
                    <div class="modulesPartsTittle">
                        <img src="assets/images/webDevelopmentLogo.png" alt="" style="width: 50px; height: 50px;">
                        <h2>Web Development Module</h2>
                    </div>
                    <p>In this module, you'll learn essential vocabulary for web development, covering HTML for structuring content, CSS for styling pages, and JavaScript for adding interactivity. You'll also explore Responsive Design concepts for device adaptability and frameworks like Bootstrap that provide pre-designed components for efficient development.</p>
                    <div class="modulesPartsButton">
                        <a href="webModule.php">Start Learning!</a>
                    </div>
                </div>

                <div class="modulesParts">
                    <div class="modulesPartsTittle">
                        <img src="assets/images/cloudDevelopmentLogo.png" alt="" style="width: 50px; height: 50px;">
                        <h2>Cloud Computing Module</h2>
                    </div>
                    <p>In this module, you'll explore essential vocabulary for cloud computing, including basics and service models like IaaS, PaaS, and SaaS. You'll learn about key platforms such as AWS, Azure, and Google Cloud, along with concepts like containerization using Docker, orchestration with Kubernetes, Serverless computing, CI/CD practices, and Load Balancing for scalable applications.</p>
                    <div class="modulesPartsButton">
                        <a href="cloudModule.php">Start Learning!</a>
                    </div>
                </div>
            </div>
        </section>
        <?php include_once 'assets/phps/footer.php'; ?>
    </section>