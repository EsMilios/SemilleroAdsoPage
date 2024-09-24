<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flashcards de Desarrollo Web</title>
    <style>
        /* Estilos para las flashcards */
        .flashcard {
            width: 250px;
            height: 150px;
            perspective: 1000px;
            margin: 10px;
        }

        .flashcard-inner {
            position: relative;
            width: 100%;
            height: 100%;
            transition: transform 0.6s;
            transform-style: preserve-3d;
        }

        .flashcard:hover .flashcard-inner {
            transform: rotateY(180deg);
        }

        .flashcard-front, .flashcard-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            text-align: center;
        }

        .flashcard-front {
            background-color: #f1f1f1;
        }

        .flashcard-back {
            background-color: #1a1b41ff;
            color: white;
            transform: rotateY(180deg);
        }

        /* Estilos del contenedor */
        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 50px;
            padding: 20px;
        }
    </style>
</head>
<body>
    <!-- Contenedor de flashcards -->
    <div class="grid-container" id="flashcards-container">
        <!-- Flashcards generadas dinámicamente -->
    </div>

    <script>
        // Diccionario con términos y definiciones solo en inglés
        const completeDictionary = [
            { term: 'HTML', en: 'Markup language used to structure the content of web pages.', icon: 'https://cdn-icons-png.flaticon.com/512/732/732212.png' },
            { term: 'CSS', en: 'Styling language used to define the visual presentation of an HTML document.', icon: 'https://cdn-icons-png.flaticon.com/512/732/732190.png' },
            { term: 'JavaScript', en: 'Programming language used to add interactivity to web pages.', icon: 'https://cdn-icons-png.flaticon.com/512/5968/5968292.png' },
            { term: 'Responsive Design', en: 'Design technique that allows web pages to adapt to different screen sizes and devices.', icon: 'https://cdn-icons-png.flaticon.com/512/2097/2097276.png' },
            { term: 'Bootstrap', en: 'Framework for building responsive and modern websites.', icon: 'https://cdn-icons-png.flaticon.com/512/5968/5968672.png' },
            { term: 'React', en: 'JavaScript library for building interactive user interfaces.', icon: 'https://cdn-icons-png.flaticon.com/512/919/919851.png' },
            { term: 'Angular', en: 'Google-maintained web framework for building scalable applications.', icon: 'https://cdn.iconscout.com/icon/free/png-256/free-angular-logo-icon-download-in-svg-png-gif-file-formats--coding-programming-logos-icons-1720094.png?f=webp' },
            { term: 'Vue.js', en: 'Progressive JavaScript framework focused on simplicity.', icon: 'https://img.icons8.com/?size=512&id=rY6agKizO9eb&format=png' },
            { term: 'API', en: 'Set of rules for different applications to communicate with each other.', icon: 'https://cdn-icons-png.flaticon.com/512/2165/2165004.png' },
            { term: 'REST', en: 'Architecture for communication between distributed systems.', icon: 'https://cdn-icons-png.flaticon.com/512/8654/8654539.png' },
            { term: 'GraphQL', en: 'Query language for APIs that allows requesting only the necessary data.', icon: 'https://static-00.iconduck.com/assets.00/graphql-icon-2048x2048-ivjhldn5.png' },
            { term: 'AJAX', en: 'Technique for updating parts of a web page without reloading the entire page.', icon: 'https://static.thenounproject.com/png/4147235-200.png' },
            { term: 'Node.js', en: 'Server-side JavaScript runtime environment.', icon: 'https://cdn-icons-png.flaticon.com/512/919/919825.png' },
            { term: 'Express.js', en: 'Node.js framework for quickly building web applications and APIs.', icon: 'https://img.icons8.com/fluent/512/express-js.png' },
            { term: 'Django', en: 'Python framework that promotes rapid and clean development.', icon: 'https://cdn.iconscout.com/icon/free/png-256/free-django-11-1175036.png?f=webp' },
            { term: 'Ruby on Rails', en: 'Ruby framework following the convention over configuration principle.', icon: 'https://www.svgrepo.com/show/354252/rails.svg' },
            { term: 'WebSocket', en: 'Protocol for real-time bidirectional communication.', icon: 'https://seeklogo.com/images/W/websocket-logo-91B815D333-seeklogo.com.png' },
            { term: 'CDN', en: 'Network of distributed servers for fast web content delivery.', icon: 'https://cdn-icons-png.flaticon.com/512/10988/10988181.png' },
            { term: 'SEO', en: 'Practices to improve a website\'s visibility in search engines.', icon: 'https://cdn-icons-png.flaticon.com/512/5902/5902216.png' },
            { term: 'SSL/TLS', en: 'Security protocols to encrypt communication between browser and server.', icon: 'https://www.hostarmada.com/blog/wp-content/uploads/2020/11/ssl-certificate.png' }
        ];


        // Función para generar las flashcards
        function generateFlashcards() {
            const container = document.getElementById('flashcards-container');
            container.innerHTML = ''; // Limpiar contenido anterior
            dictionary.forEach(item => {
                const flashcard = document.createElement('div');
                flashcard.classList.add('flashcard');
                flashcard.innerHTML = `
                    <div class="flashcard-inner">
                        <div class="flashcard-front">${item.term}</div>
                        <div class="flashcard-back">${item.en}</div>
                    </div>
                `;
                container.appendChild(flashcard);
            });
        }

        // Generar las flashcards al cargar la página
        window.onload = generateFlashcards;
    </script>
</body>
</html>
