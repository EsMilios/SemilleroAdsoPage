<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flashcards de Cloud Computing</title>
    <style>
        /* Estilos para las flashcards */
        .flashcard {
            width: 300px;
            height: 200px;
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
            background-color: #4CAF50;
            color: white;
            transform: rotateY(180deg);
        }

        /* Estilos del contenedor */
        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
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
        // Diccionario con términos y definiciones en inglés
        const dictionary = [
            { term: 'Cloud Computing', en: 'Provision of computing services (servers, storage, databases, networking, software, etc.) over the internet, allowing access to resources on demand.' },
            { term: 'AWS (Amazon Web Services)', en: 'Amazon\'s cloud computing platform that offers a wide range of services such as storage, databases, analytics, artificial intelligence, and more.' },
            { term: 'Azure', en: 'Microsoft\'s cloud computing platform that provides solutions for application development, storage, databases, networking, and more.' },
            { term: 'Google Cloud', en: 'Google\'s cloud service platform that includes tools for development, data analysis, artificial intelligence, and more.' },
            { term: 'SaaS (Software as a Service)', en: 'Cloud service model where software is hosted by a provider and accessible to users over the internet, without the need for local installation.' },
            { term: 'PaaS (Platform as a Service)', en: 'Cloud service model that offers a platform for developing, running, and managing applications without worrying about the underlying infrastructure.' },
            { term: 'IaaS (Infrastructure as a Service)', en: 'Cloud service model that provides computing infrastructure (servers, storage, networking) on-demand, allowing companies to scale according to their needs.' },
            { term: 'Kubernetes', en: 'Container orchestration system that automates the deployment, scaling, and management of containerized applications in the cloud.' },
            { term: 'Docker', en: 'Platform that allows developers to build, test, and deploy applications in containers, ensuring consistency across different environments.' },
            { term: 'Serverless', en: 'Cloud execution model where the provider manages the infrastructure and code execution, allowing developers to focus on application logic.' },
            { term: 'CI/CD (Continuous Integration/Continuous Deployment)', en: 'Development practices that automate the process of code integration and deployment, improving the speed and quality of software development.' },
            { term: 'Load Balancer', en: 'Device or service that distributes incoming network traffic across multiple servers to ensure high availability and reliability of the application.' }
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
