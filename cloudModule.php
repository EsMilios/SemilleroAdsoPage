<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Módulo Web Development</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="styleModule.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <section class="main">
        <?php include_once 'assets/phps/navModule.php'; ?>
        <h1>Cloud Computing Module</h1>

        <section class="moduleMain">
            <div class="moduleLeft">
                <ul>
                    <li><a href="#" onclick="showSection('vocabulary')">Vocabulary</a></li>
                    <li><a href="#" onclick="showSection('interactions')">Interactions</a></li>
                    <li><a href="#" onclick="showSection('games')">Games</a></li>
                </ul>
            </div>

            <div class="moduleRight">
                <!-- Sección de vocabulario -->
                <div class="vocabulary" style="display: none;">
                    <h1>Vocabulary</h1>
                    <?php include_once 'assets/phps/cloudVocabulary.php'; ?>
                </div>

                <!-- Sección de interacciones -->
                <div class="interactions" style="display: none;">
                <h1>Interactions</h1>
                <div class="interaction">
    <div class="interaction-header">
        <h2>AWS and Azure</h2>
        <button class="toggle-btn" onclick="toggleSection('section1')">></button>
    </div>
    <div id="section1" class="content" style="display: none;">
        <div class="chat-container">
            <!-- Perfil y mensaje de la primera persona -->
            <div class="chat-message left">
                <div class="profile">
                    <img src="assets/images/developer1.png" alt="Persona 1">
                </div>
                <div class="message-content">
                    <audio controls>
                        <source src="assets/phps/conversaciones2.php?nombre=con1Diag1.wav" type="audio/mp3">
                        Tu navegador no soporta la reproducción de audio.
                    </audio>
                    <p><strong>Person A:</strong> Have you tried using AWS for our new project?</p>
                </div>
            </div>

            <!-- Perfil y mensaje de la segunda persona -->
            <div class="chat-message right">
                <div class="profile">
                    <img src="assets/images/developer2.png" alt="Persona 2">
                </div>
                <div class="message-content">
                    <audio controls>
                        <source src="assets/phps/conversaciones2.php?nombre=con1Diag2.wav" type="audio/mp3">
                        Tu navegador no soporta la reproducción de audio.
                    </audio>
                    <p><strong>Person B:</strong> Yes, I love how easy it is to scale applications with AWS.</p>
                </div>
            </div>
            <div class="chat-message left">
                <div class="profile">
                    <img src="assets/images/developer1.png" alt="Persona 1">
                </div>
                <div class="message-content">
                    <audio controls>
                        <source src="assets/phps/conversaciones2.php?nombre=con1Diag3.wav" type="audio/mp3">
                        Tu navegador no soporta la reproducción de audio.
                    </audio>
                    <p><strong>Person A:</strong> I’m considering Azure for its AI services, though.</p>
                </div>
            </div>

            <!-- Perfil y mensaje de la segunda persona -->
            <div class="chat-message right">
                <div class="profile">
                    <img src="assets/images/developer2.png" alt="Persona 2">
                </div>
                <div class="message-content">
                    <audio controls>
                        <source src="assets/phps/conversaciones2.php?nombre=con1Diag4.wav" type="audio/mp3">
                        Tu navegador no soporta la reproducción de audio.
                    </audio>
                    <p><strong>Person B:</strong> That’s a good idea! Azure has some great tools for integration.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="interaction">
    <div class="interaction-header">
        <h2>Containers and Serverless</h2>
        <button class="toggle-btn" onclick="toggleSection('section2')">></button>
    </div>
    <div id="section2" class="content" style="display: none;">
        <div class="chat-container">
            <!-- Perfil y mensaje de la primera persona -->
            <div class="chat-message left">
                <div class="profile">
                    <img src="assets/images/developer1.png" alt="Persona 1">
                </div>
                <div class="message-content">
                    <audio controls>
                        <source src="assets/phps/conversaciones2.php?nombre=con2Diag1.wav" type="audio/mp3">
                        Tu navegador no soporta la reproducción de audio.
                    </audio>
                    <p><strong>Person A:</strong> I think we should use Docker for our microservices.</p>
                </div>
            </div>

            <!-- Perfil y mensaje de la segunda persona -->
            <div class="chat-message right">
                <div class="profile">
                    <img src="assets/images/developer2.png" alt="Persona 2">
                </div>
                <div class="message-content">
                    <audio controls>
                        <source src="assets/phps/conversaciones2.php?nombre=con2Diag2.wav" type="audio/mp3">
                        Tu navegador no soporta la reproducción de audio.
                    </audio>
                    <p><strong>Person B:</strong> Docker is great! But have you thought about a serverless architecture?</p>
                </div>
            </div>
            <div class="chat-message left">
                <div class="profile">
                    <img src="assets/images/developer1.png" alt="Persona 1">
                </div>
                <div class="message-content">
                    <audio controls>
                        <source src="assets/phps/conversaciones2.php?nombre=con2Diag3.wav" type="audio/mp3">
                        Tu navegador no soporta la reproducción de audio.
                    </audio>
                    <p><strong>Person A:</strong> I’m worried about cold start issues with serverless.</p>
                </div>
            </div>

            <!-- Perfil y mensaje de la segunda persona -->
            <div class="chat-message right">
                <div class="profile">
                    <img src="assets/images/developer2.png" alt="Persona 2">
                </div>
                <div class="message-content">
                    <audio controls>
                        <source src="assets/phps/conversaciones2.php?nombre=con2Diag4.wav" type="audio/mp3">
                        Tu navegador no soporta la reproducción de audio.
                    </audio>
                    <p><strong>Person B:</strong> That’s valid, but it can save a lot of maintenance time if configured well.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="interaction">
    <div class="interaction-header">
        <h2>CI/CD and Load Balancer</h2>
        <button class="toggle-btn" onclick="toggleSection('section3')">></button>
    </div>
    <div id="section3" class="content" style="display: none;">
        <div class="chat-container">
            <!-- Perfil y mensaje de la primera persona -->
            <div class="chat-message left">
                <div class="profile">
                    <img src="assets/images/developer1.png" alt="Persona 1">
                </div>
                <div class="message-content">
                    <audio controls>
                        <source src="assets/phps/conversaciones2.php?nombre=con3Daig1.wav" type="audio/mp3">
                        Tu navegador no soporta la reproducción de audio.
                    </audio>
                    <p><strong>Person A:</strong> IWe need to implement CI/CD for our application.</p>
                </div>
            </div>

            <!-- Perfil y mensaje de la segunda persona -->
            <div class="chat-message right">
                <div class="profile">
                    <img src="assets/images/developer2.png" alt="Persona 2">
                </div>
                <div class="message-content">
                    <audio controls>
                        <source src="assets/phps/conversaciones2.php?nombre=con3Daig2.wav" type="audio/mp3">
                        Tu navegador no soporta la reproducción de audio.
                    </audio>
                    <p><strong>Person B:</strong> Definitely! It speeds up the deployment process significantly.</p>
                </div>
            </div>
            <div class="chat-message left">
                <div class="profile">
                    <img src="assets/images/developer1.png" alt="Persona 1">
                </div>
                <div class="message-content">
                    <audio controls>
                        <source src="assets/phps/conversaciones2.php?nombre=con3Daig3.wav" type="audio/mp3">
                        Tu navegador no soporta la reproducción de audio.
                    </audio>
                    <p><strong>Person A:</strong> Should we also set up a load balancer for better traffic management?</p>
                </div>
            </div>

            <!-- Perfil y mensaje de la segunda persona -->
            <div class="chat-message right">
                <div class="profile">
                    <img src="assets/images/developer2.png" alt="Persona 2">
                </div>
                <div class="message-content">
                    <audio controls>
                        <source src="assets/phps/conversaciones2.php?nombre=con3Daig4.wav" type="audio/mp3">
                        Tu navegador no soporta la reproducción de audio.
                    </audio>
                    <p><strong>Person B:</strong>  Absolutely! It will help distribute the load efficiently.</p>
                </div>
            </div>
        </div>
    </div>
</div>


                </div>

                <!-- Sección de juegos -->
                <div class="games" style="display: none;">
                    <h1>Games</h1>
                    <p>Have fun while you learn! Here are some games you can try:</p>
                    <ul class="games-list">
                    <li><a href="assets/games/cloudModule/game1.html" class="game-link"><i class="fas fa-gamepad"></i> Game 1: Word Sorting Game</a></li>
                        <li><a href="assets/games/cloudModule/game2.html" class="game-link"><i class="fas fa-gamepad"></i> Game 2: Complete the Tech Term</a></li>
                        <li><a href="assets/games/cloudModule/game3.html" class="game-link"><i class="fas fa-gamepad"></i> Game 3: Memory Game</a></li>
</ul>
                </div>
            </div>
        </section>

        <?php include_once 'assets/phps/footer.php'; ?>
    </section>

    <script>
        function showSection(section) {
            const sections = document.querySelectorAll('.moduleRight > div');
            sections.forEach(div => div.style.display = 'none');
            document.querySelector('.' + section).style.display = 'block';
        }

        window.onload = function() {
            showSection('vocabulary');
        };

        function toggleSection(sectionId) {
            const section = document.getElementById(sectionId);
            if (section.style.display === "none" || section.style.display === "") {
                section.style.display = "block";
            } else {
                section.style.display = "none";
            }
        }
    </script>
</body>
</html>
