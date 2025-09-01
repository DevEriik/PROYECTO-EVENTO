<?php require_once '../models/galeria_data.php'; ?>

<link rel="stylesheet" href="../assets/css/style.css">

<section class="container my-5">
    <div class="row text-center">
        <h2 class="mb-4">Nuestra Galería de Eventos</h2>
    </div>
    <div class="row d-flex align-items-stretch">
        <?php foreach ($galeria_images as $image): ?>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card shadow-sm h-100">
                    <img src="<?php echo $image['url']; ?>" class="card-img-top object-fit-cover" style="height: 200px;" alt="<?php echo $image['alt']; ?>">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><?php echo $image['title']; ?></h5>
                        <p class="card-text text-muted"><?php echo $image['description']; ?></p>
                        <button type="button" class="btn btn-personalizado mt-auto" data-bs-toggle="modal" data-bs-target="#imageModal_<?php echo $image['id']; ?>">
                            Ver detalles
                        </button>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="imageModal_<?php echo $image['id']; ?>" tabindex="-1" aria-labelledby="imageModalLabel_<?php echo $image['id']; ?>" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="imageModalLabel_<?php echo $image['id']; ?>"><?php echo $image['title']; ?></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="<?php echo $image['url']; ?>" class="img-fluid" alt="<?php echo $image['alt']; ?>">
                            <p class="mt-3"><?php echo $image['description']; ?></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>