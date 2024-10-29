<?php
// Configuración de la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "adsoPage";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta SQL para obtener todos los términos del diccionario
$sql = "SELECT tittle, description, icon, audio FROM webVocabularyAudios";
$result = $conn->query($sql);
?>

<!-- Aquí empieza tu estructura HTML -->
<link rel="stylesheet" href="../../styles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="vocabulary-container">
<?php
if ($result->num_rows > 0) {
    // Iterar sobre los resultados y mostrarlos
    while($row = $result->fetch_assoc()) {
        $tittleVocabularyCard = $row['tittle'];
        $aboutText1 = $row['description'];
        $imgCard = $row['icon'];
        $audioData = base64_encode($row['audio']); // Codificar audio en base64
?>
        <div class="vocabularyModulesMain">
            <div class="vocabularyModulesMainUp">
                <h2><?php echo $tittleVocabularyCard; ?></h2>
                <!-- Botón de reproducción de audio -->
                <button onclick="playAudio('<?php echo $audioData; ?>')"><i class="fa-solid fa-volume-high" style="color: #ffffff;"></i></button>
            </div>
            <div class="vocabularyModulesMainDown">
                <p><?php echo $aboutText1; ?></p>
                <img src="<?php echo $imgCard; ?>" alt="Icon of <?php echo $tittleVocabularyCard; ?>" onerror="this.onerror=null; this.src='path/to/default/image.png';">
            </div>
        </div>
<?php
    }
} else {
    echo "No hay resultados";
}
$conn->close();
?>
</div>

<script>
function playAudio(audioData) {
    const audioBlob = new Blob([Uint8Array.from(atob(audioData), c => c.charCodeAt(0))], { type: 'audio/mpeg' });
    const audioUrl = URL.createObjectURL(audioBlob);
    const audio = new Audio(audioUrl);
    audio.play();
}
</script>

<!-- Tu estilo CSS -->
<style>
.vocabulary-container {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
}

.vocabularyModulesMain {
    display: flex;
    flex-direction: column;
    padding: 10px;
    width: 90%;
    background-color: var(--azul);
    gap: 30px;
    color: white;
    border-radius: 5px;
}

.vocabularyModulesMainDown img {
    width: 30%;
    height: 70%;
}

.vocabularyModulesMainUp {
    display: flex;
    justify-content: space-between;
    padding-left: 10px;
    padding-top: 10px;
    padding-right: 10px;
}

.vocabularyModulesMainUp button {
    background-color: transparent;
    border: 1px transparent;
    padding: 3px;
    font-size: 20px;
}

.vocabularyModulesMainDown {
    padding-left: 10px;
    padding-bottom: 10px;
    padding-right: 10px;
    display: flex;
    align-items: center;
    gap: 30%;
}

.vocabularyModulesMainDown p {
    width: 60%;
}
/* Responsividad */
@media (max-width: 768px) {
    .vocabulary-container {
        grid-template-columns: 1fr; /* Una columna en pantallas pequeñas */
    }

    .vocabularyModulesMainDown img {
        width: 100%; /* Hacer la imagen más grande en pantallas pequeñas */
        height: auto; /* Mantener proporciones */
    }

    .vocabularyModulesMainUp, .vocabularyModulesMainDown {
        flex-direction: column; /* Cambiar a columna */
        align-items: flex-start; /* Alinear a la izquierda */
    }

    .vocabularyModulesMainDown p {
        width: 100%; /* Ancho completo en modo responsivo */
    }
}
</style>
