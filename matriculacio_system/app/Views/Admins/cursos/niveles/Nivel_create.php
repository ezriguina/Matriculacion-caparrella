<?= $this->extend('/layout/layout') ?>

<?= $this->section('content') ?>

<div class="container py-4">

    <div class="mb-4">
        <h2 class="fw-bold mb-1">Crear Nivel</h2>
        <p class="text-muted mb-0">Añade un nuevo nivel al sistema</p>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body">

            <form action="<?= base_url('privat/Nivel/crear_nivel') ?>" method="post" >

                <?= csrf_field() ?>
                <?= validation_list_errors();  ?>
                <div class="mb-3">
                    <label class="form-label">Nombre</label>
                    <input 
                        type="text" 
                        name="nombre" 
                        class="form-control"
                        placeholder="Ej: Bachillerato"
                        required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Descripción</label>
                    <textarea 
                        name="descripcion"
                        class="form-control"
                        rows="4"
                        placeholder="Descripción del nivel"></textarea>
                </div>

                <div class="d-flex justify-content-between mt-4">

                    <a href="<?= base_url('privat/Nivelles/listado') ?>" class="btn btn-secondary">
                        Volver
                    </a>

                    <button type="submit" class="btn btn-primary">
                        Guardar Nivel
                    </button>

                </div>

            </form>

        </div>
    </div>

</div>

<?= $this->endSection() ?>