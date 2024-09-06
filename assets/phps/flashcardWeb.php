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
        const dictionary = [
            { term: 'HTML', en: 'Markup language used to structure the content of web pages.' },
            { term: 'CSS', en: 'Styling language used to define the visual presentation of an HTML document.' },
            { term: 'JavaScript', en: 'Programming language used to add interactivity to web pages.' },
            { term: 'Responsive Design', en: 'Design technique that allows web pages to adapt to different screen sizes and devices.' },
            { term: 'Bootstrap', en: 'Framework for building responsive and modern websites.' },
            { term: 'React', en: 'JavaScript library for building interactive user interfaces.' },
            { term: 'Angular', en: 'Google-maintained web framework for building scalable applications.' },
            { term: 'Vue.js', en: 'Progressive JavaScript framework focused on simplicity.' },
            { term: 'API', en: 'Set of rules for different applications to communicate with each other.' },
            { term: 'REST', en: 'Architecture for communication between distributed systems.' },
            { term: 'GraphQL', en: 'Query language for APIs that allows requesting only the necessary data.' },
            { term: 'AJAX', en: 'Technique for updating parts of a web page without reloading the entire page.' },
            { term: 'Node.js', en: 'Server-side JavaScript runtime environment.' },
            { term: 'Express.js', en: 'Node.js framework for quickly building web applications and APIs.' },
            { term: 'Django', en: 'Python framework that promotes rapid and clean development.' },
            { term: 'Ruby on Rails', en: 'Ruby framework following the convention over configuration principle.' },
            { term: 'WebSocket', en: 'Protocol for real-time bidirectional communication.' },
            { term: 'CDN', en: 'Network of distributed servers for fast web content delivery.' },
            { term: 'SEO', en: 'Practices to improve a website\'s visibility in search engines.' },
            { term: 'SSL/TLS', en: 'Security protocols to encrypt communication between browser and server.' },
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
