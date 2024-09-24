<?php
    $tittle = "Web Development Module";
    $moduleTittle = "Welcome to Web Development Module";
    $aboutText1 = "In this module, you will explore key vocabulary related to web development. You'll learn about HTML, the language for structuring web content, and CSS, which is used to style and layout web pages. The module also covers JavaScript, a programming language for adding interactivity to websites.";
    $aboutText2 = "You'll delve into Responsive Design concepts, ensuring that websites adapt to various devices, and explore frameworks like Bootstrap that offer pre-designed components for efficient web development.";
    $descriptionVocabulary = "Lets start learning vocabulary about web development!";
    

    $img1 = "../images/webModuleImage.png";
?>

<head>
    <link rel="stylesheet" href="../../styles.css">
</head>

<section class="template">

    <div class="modulesTittle">
        <h1><?php echo $tittle; ?></h1>
    </div>

    <section class="templateMain">

        <div class="modulesNav">
            <div>
                <a href="#" data-content="About">About the Module</a>
                <a href="#" data-content="Vocabulary">Vocabulary</a>
                <a href="#" data-content="Interactions">Interactions</a>
                <a href="#" data-content="Games">Games</a>
            </div>
        </div>

        <div class="modulesContent">
            <div id="About" class="active">
                <h2><?php echo $moduleTittle; ?></h2>
                <p><?php echo $aboutText1; ?></p>
                <img src="<?php echo $img1; ?>" alt="" style="width:300px;height:300px;">
                <p><?php echo $aboutText2; ?></p>

                <a href="#" class="goToVocabulary" data-content="Vocabulary">Let's Go to Vocabulary</a>
            </div>
            <div id="Vocabulary">
                <h2>Welcome to <?php echo $tittle;?></h2>
                <p><?php echo $descriptionVocabulary; ?></p>

                
            </div>
            <div id="Interactions">Contenido de interacciones</div>
            <div id="Games">Contenido de juegos</div>
        </div>
    </section>
</section>

<style>
    /* Oculta todo el contenido por defecto */
    .modulesContent div {
        display: none;
    }

    /* Muestra solo el contenido activo */
    .modulesContent .active {
        display: block;
    }

    a {
        margin-right: 10px;
        cursor: pointer;
    }
</style>

<script>
    // Obtener todos los enlaces y los divs de contenido
    const links = document.querySelectorAll('.modulesNav a, .goToVocabulary');
    const contentDivs = document.querySelectorAll('.modulesContent div');

    // Añadir evento de clic a cada enlace
    links.forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault(); // Prevenir la acción predeterminada del enlace

            // Obtener el valor de data-content
            const contentId = this.getAttribute('data-content');

            // Ocultar todos los divs de contenido
            contentDivs.forEach(div => div.classList.remove('active'));

            // Mostrar solo el div correspondiente
            document.getElementById(contentId).classList.add('active');
        });
    });
</script>
