<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Responsive</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <?php include 'navegacion.php'; ?>
    </header>
    <main>
        <section class="contenido">
            <?php include 'contenido_home.php'; ?>
        </section>
        <aside class="sidebar">
            home
            <?php include 'sidebar.php'; ?>
        </aside>
    </main>
    <footer>
        <?php include 'footer.php'; ?>
    </footer>
</body>

</html>