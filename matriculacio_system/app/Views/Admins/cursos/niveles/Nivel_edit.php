<?= $this->extend('/layout/layout') ?>

<?= $this->section('content') ?>

<div class="container py-4">

    <div class="mb-4">
        <h2 class="fw-bold mb-1">Editar Nivel</h2>
        <p class="text-muted mb-0">Modifica los datos del nivel</p>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body">

            <form method="post" action="<?= base_url('privat/Nivel/edit_nivel/'.$nivel['id_nivel']) ?>">

                <?= csrf_field() ?>

                <div class="mb-3">
                    <label class="form-label">Nombre</label>
                    <input 
                        type="text" 
                        name="nombre" 
                        class="form-control"
                        value="<?= esc($nivel['nombre']) ?>"
                        required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Descripción</label>
                    <textarea 
                        name="descripcion"
                        class="form-control"
                        rows="4"><?= esc($nivel['descripcion']) ?></textarea>
                </div>

                <div class="d-flex justify-content-between mt-4">

                    <a href="<?= base_url('privat/niveles') ?>" class="btn btn-secondary">
                        Volver
                    </a>

                    <button type="submit" class="btn btn-primary">
                        Actualizar Nivel
                    </button>

                </div>

            </form>

        </div>
    </div>

</div>

<?= $this->endSection() ?>