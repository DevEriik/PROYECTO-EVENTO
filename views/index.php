<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Ivana Decoraciones</title>
</head>
<body id="voler-navbar">
    <!-- Navbar  -->
    <?php require '../views/includes/navbar.php'; ?>
    <!-- Fin Navbar -->

    
    <main>
        <!-- Carrousel de imagenes -->
        <?php require 'carrusel.php';?>
        <!-- Fin Carrousel de imagenes -->

        <!-- Seccion quienes somos -->
        <section class="container my-5" id="info">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="mb-4">Transformamos tus Ideas en Celebraciones Inolvidables</h2>
                    <p class="lead">
                        En Ivana Decoraciones, nos especializamos en la creación de ambientes mágicos y personalizados para cada evento. Desde bodas íntimas hasta grandes celebraciones corporativas, nuestro equipo de expertos en decoración se encarga de cada detalle para que tú solo te preocupes por disfrutar. Usamos las mejores flores, luces y elementos decorativos para dar vida a tus sueños. ¡Déjanos ser parte de tu historia!
                    </p>
                    <p>
                        Si quieres saber más sobre nuestros servicios o ver ejemplos de nuestros proyectos, <a href="#galeria">visita nuestra galería</a> o <a href="#whatsapp-form">contáctanos</a>.
                    </p>
                </div>
            </div>
        </section>
        <!-- Fin Seccion quienes somos -->

        <!-- Galeria -->
         <?php require 'galeria.php'; ?>
        <!-- Fin Galeria -->

         <!-- Formulario -->
        <?php require '../views/formulario.php';?>
        <!-- Fin Formulario -->
    </main>


    <!-- Footer -->
    <?php require '../views/includes/footer.php';?>
    <!-- Fin Footer -->

    <!-- Link Boostrap JS -->
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <!-- Fin Link Boostrap JS -->
</body>
</html>
