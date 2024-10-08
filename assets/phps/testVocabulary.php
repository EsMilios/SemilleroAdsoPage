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
$sql = "SELECT tittle, description, icon FROM webVocabulary";
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
?>
        <div class="vocabularyModulesMain">
            <div class="vocabularyModulesMainUp">
                <h2><?php echo $tittleVocabularyCard; ?></h2>
                <button><i class="fa-solid fa-volume-high" style="color: #ffffff;"></i></button>
            </div>
            <div class="vocabularyModulesMainDown">
                <p><?php echo $aboutText1; ?></p>
                <img src="<?php echo $imgCard; ?>" alt="Icon of <?php echo $tittleVocabularyCard; ?>">    
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

<!-- Tu estilo CSS -->
<style>

.vocabulary-container {
    display: grid;
    grid-template-columns: 1fr 1fr; /* Esto crea dos columnas de igual tamaño */
    gap: 20px;
}

.vocabularyModulesMain {
    display: flex;
    flex-direction: column;
    padding: 10px;
    width: 450px;
    background-color: var(--azul);
    gap: 30px;
    color: white;
    border-radius: 5px;
}

.vocabularyModulesMainDown img {
    width: 80px;
    height: 80px;
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
    gap: 40px;
    align-items: center;
}

.vocabularyModulesMainDown p {
    width: 60%;
}
</style>
