<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>ADSO English</title>
</head>

<body >
    <div class="main">
        <?php include_once 'assets/phps/nav.php'; ?>


        <div class="moduleMain">
            <div class="moduleMainBtn">
                <button  onclick="showContent('content1')">Web Development Module</button>
                <button  onclick="showContent('content2')">Cloud Computing Module</button>
            </div>
            <div class="moduleContent">
                <div id="content1" class="content">
                
                    <h1>Web Development Module</h1>

                    <h2>Vocabulary</h2>

                    <?php
                        include 'assets/phps/flashcardWeb.php';
                    ?>
                    
                </div>

                <div id="content2" class="content">
                    <h1>Web Development Module</h1>

                    <h2>Vocabulary</h2>

                    <?php
                        include 'assets/phps/flashcardCloud.php';
                    ?>
                </div>

            </div>
            
            <script>
                function showContent(contentId) {
                    // Oculta todos los contenidos
                    var contents = document.getElementsByClassName('content');
                    for (var i = 0; i < contents.length; i++) {
                        contents[i].style.display = 'none';
                    }

                    // Muestra el contenido seleccionado
                    document.getElementById(contentId).style.display = 'block';
                }
            </script>
        </div>


        <?php include_once 'assets/phps/footer.php'; ?>
    </div>
</body>