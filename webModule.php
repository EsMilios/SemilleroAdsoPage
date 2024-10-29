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
        <h1>Web Development Module</h1>

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
                    <?php include_once 'assets/phps/webVocabulary.php'; ?>
                </div>

                <!-- Sección de interacciones -->
                <div class="interactions" style="display: none;">
                <h1>Interactions</h1>
                <div class="interaction">
    <div class="interaction-header">
        <h2>Introduction to Web Development</h2>
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
                        <source src="assets/phps/conversaciones.php?nombre=con1Diag1.wav" type="audio/mp3">
                        Tu navegador no soporta la reproducción de audio.
                    </audio>
                    <p><strong>Person A:</strong> I'm starting to learn web development. What technologies should I know?</p>
                </div>
            </div>

            <!-- Perfil y mensaje de la segunda persona -->
            <div class="chat-message right">
                <div class="profile">
                    <img src="assets/images/developer2.png" alt="Persona 2">
                </div>
                <div class="message-content">
                    <audio controls>
                        <source src="assets/phps/conversaciones.php?nombre=con1Diag2.wav" type="audio/mp3">
                        Tu navegador no soporta la reproducción de audio.
                    </audio>
                    <p><strong>Person B:</strong> Definitely start with HTML, CSS, and JavaScript. Those are the basics. Then, you can learn about Responsive Design to make your pages look good on any device.</p>
                </div>
            </div>
            <div class="chat-message left">
                <div class="profile">
                    <img src="assets/images/developer1.png" alt="Persona 1">
                </div>
                <div class="message-content">
                    <audio controls>
                        <source src="assets/phps/conversaciones.php?nombre=con1Diag3.wav" type="audio/mp3">
                        Tu navegador no soporta la reproducción de audio.
                    </audio>
                    <p><strong>Person A:</strong> Great! And what frameworks do you recommend?</p>
                </div>
            </div>

            <!-- Perfil y mensaje de la segunda persona -->
            <div class="chat-message right">
                <div class="profile">
                    <img src="assets/images/developer2.png" alt="Persona 2">
                </div>
                <div class="message-content">
                    <audio controls>
                        <source src="assets/phps/conversaciones.php?nombre=con1Diag4.wav" type="audio/mp3">
                        Tu navegador no soporta la reproducción de audio.
                    </audio>
                    <p><strong>Person B:</strong> I suggest Bootstrap for quick design and React or Vue.js for the front-end. Also, if you want to learn something more advanced, you could explore Angular.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="interaction">
    <div class="interaction-header">
        <h2>Creating an API</h2>
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
                        <source src="assets/phps/conversaciones.php?nombre=con2Diag1.wav" type="audio/mp3">
                        Tu navegador no soporta la reproducción de audio.
                    </audio>
                    <p><strong>Person A:</strong> I'm developing an API for my application. Do you know what type of API is most common nowadays?</p>
                </div>
            </div>

            <!-- Perfil y mensaje de la segunda persona -->
            <div class="chat-message right">
                <div class="profile">
                    <img src="assets/images/developer2.png" alt="Persona 2">
                </div>
                <div class="message-content">
                    <audio controls>
                        <source src="assets/phps/conversaciones.php?nombre=con2Diag2.wav" type="audio/mp3">
                        Tu navegador no soporta la reproducción de audio.
                    </audio>
                    <p><strong>Person B:</strong> The most common is REST, but you could also consider GraphQL if you need more flexibility in your queries.</p>
                </div>
            </div>
            <div class="chat-message left">
                <div class="profile">
                    <img src="assets/images/developer1.png" alt="Persona 1">
                </div>
                <div class="message-content">
                    <audio controls>
                        <source src="assets/phps/conversaciones.php?nombre=con2Diag3.wav" type="audio/mp3">
                        Tu navegador no soporta la reproducción de audio.
                    </audio>
                    <p><strong>Person A:</strong> Interesting, I'll look into GraphQL. How do I connect my API with the front-end?</p>
                </div>
            </div>

            <!-- Perfil y mensaje de la segunda persona -->
            <div class="chat-message right">
                <div class="profile">
                    <img src="assets/images/developer2.png" alt="Persona 2">
                </div>
                <div class="message-content">
                    <audio controls>
                        <source src="assets/phps/conversaciones.php?nombre=con2Diag4.wav" type="audio/mp3">
                        Tu navegador no soporta la reproducción de audio.
                    </audio>
                    <p><strong>Person B:</strong> You can use AJAX or fetch to make requests to the API from the front-end. If your API is more complex, consider using Node.js with Express.js for handling the back-end.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="interaction">
    <div class="interaction-header">
        <h2>Web Security and Performance</h2>
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
                        <source src="assets/phps/conversaciones.php?nombre=con3Daig1.wav" type="audio/mp3">
                        Tu navegador no soporta la reproducción de audio.
                    </audio>
                    <p><strong>Person A:</strong> I'm looking to improve the security and performance of my website. Do you have any advice?</p>
                </div>
            </div>

            <!-- Perfil y mensaje de la segunda persona -->
            <div class="chat-message right">
                <div class="profile">
                    <img src="assets/images/developer2.png" alt="Persona 2">
                </div>
                <div class="message-content">
                    <audio controls>
                        <source src="assets/phps/conversaciones.php?nombre=con3Daig2.wav" type="audio/mp3">
                        Tu navegador no soporta la reproducción de audio.
                    </audio>
                    <p><strong>Person B:</strong> For security, make sure to implement SSL/TLS to encrypt information. And for performance, use a CDN to distribute your website's resources and load it faster.</p>
                </div>
            </div>
            <div class="chat-message left">
                <div class="profile">
                    <img src="assets/images/developer1.png" alt="Persona 1">
                </div>
                <div class="message-content">
                    <audio controls>
                        <source src="assets/phps/conversaciones.php?nombre=con3Daig3.wav" type="audio/mp3">
                        Tu navegador no soporta la reproducción de audio.
                    </audio>
                    <p><strong>Person A:</strong> Thanks, that sounds good. I'm also thinking about optimizing the site for search engines. How can I improve the SEO?</p>
                </div>
            </div>

            <!-- Perfil y mensaje de la segunda persona -->
            <div class="chat-message right">
                <div class="profile">
                    <img src="assets/images/developer2.png" alt="Persona 2">
                </div>
                <div class="message-content">
                    <audio controls>
                        <source src="assets/phps/conversaciones.php?nombre=con3Daig4.wav" type="audio/mp3">
                        Tu navegador no soporta la reproducción de audio.
                    </audio>
                    <p><strong>Person B:</strong> First, make sure your site is fast and responsive. Then, use proper HTML tags and ensure your content is accessible to search engines.</p>
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
                        <li><a href="assets/games/webModule/game1.html" class="game-link"><i class="fas fa-gamepad"></i> Game 1: Word Sorting Game</a></li>
                        <li class="hide-responsive"><a href="assets/games/webModule/game2.html" class="game-link"><i class="fas fa-gamepad"></i> Game 2: Complete the Tech Term</a></li>
                        <li><a href="assets/games/webModule/game3.html" class="game-link"><i class="fas fa-gamepad"></i> Game 3: Memory Game</a></li>
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
