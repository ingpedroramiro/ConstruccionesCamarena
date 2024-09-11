
<?php
// Directorio donde se subirán las imágenes
$target_dir = "src/img/uploads/";

// Obtener la extensión del archivo original
$imageFileType = strtolower(pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION));

//nombre del archivo
$nombre = "_" . basename($_FILES["fileToUpload"]["name"]);
// Generar un nombre único para el archivo utilizando la función uniqid()
// $newFileName = 'imagen_' . date("j-n-Y_") . $nombre;
$newFileName = 'imagen_' . uniqid(true) . "_" . date("j-n-Y_") . $nombre;

// Ruta completa del archivo de destino con el nuevo nombre
$target_file = $target_dir . $newFileName;

// Verifica si es una imagen real o un archivo falso
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        //checa si es imagen pero no hace nada en caso de que sea real
        echo "El archivo es una imagen: " . $check["mime"] . ".";
    } else {
        // e<cho "El archivo no es una imagen.";
        echo "<script>alert('El archivo no es una imagen.');
            window.location.href = 'pg_servicios.php'; // Redirigir a la página de bienvenida
            </script>";
        exit;
    }
}

// Verifica si el archivo ya existe
if (file_exists($target_file)) {
    echo "<script>
    alert('Lo siento, el archivo ya existe.');
    window.location.href = 'pg_servicios.php'; // Redirigir a la página de bienvenida
    </script>";
    echo "Lo siento, el archivo ya existe.";
    exit;
}

// Verifica el tamaño del archivo (por ejemplo, máximo 2MB)
if ($_FILES["fileToUpload"]["size"] > 2000000) {
    echo "<script>
    alert('Lo siento, el archivo es demasiado grande.');
    window.location.href = 'pg_servicios.php'; // Redirigir a la página de bienvenida
    </script>";
    // echo "Lo siento, el archivo es demasiado grande.";
    exit;
}

// Permitir solo ciertos formatos de imagen
if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
    echo "<script>
            alert('Lo siento, solo se permiten archivos JPG, JPEG, PNG y GIF.');
            window.location.href = 'pg_servicios.php'; // Redirigir a la página de bienvenida
        </script>";
    // echo "Lo siento, solo se permiten archivos JPG, JPEG, PNG y GIF.";
    exit;
}

// Si todo está bien, intenta subir el archivo
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    // echo "El archivo ha sido subido con el nombre: ". htmlspecialchars($newFileName);
    echo "<script>
            alert('El archivo ha sido subido: $newFileName');
            window.location.href = 'pg_servicios.php'; // Redirigir a la página de bienvenida
        </script>";
} else {
    // echo "Lo siento, hubo un error al subir tu archivo.";
    echo "<script>
            alert('El archivo NO ha sido subido.');
            window.location.href = 'pg_servicios.php'; // Redirigir a la página de bienvenida
        </script>";
}
?>
