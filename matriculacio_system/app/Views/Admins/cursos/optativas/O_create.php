<?= $this->extend('/layout/layout') ?>
<?= $this->section('content') ?>

<div class="container py-4">

    <div class="card shadow-sm border-0">

        <div class="card-header bg-primary text-white">

            <h4 class="mb-0">Nueva Optativa</h4>

        </div>

        <div class="card-body">

            <form method="post"
                  action="<?= base_url('privat/cursos/asignaturas/create_op') ?>">
               
                <?= csrf_field() ?>

                <div class="mb-3">

                    <label class="form-label">Nombre</label>

                    <input type="text"
                           name="Asig"
                           class="form-control"
                           required>

                </div>

                <div class="mb-3">

                    <label class="form-label">Precio</label>

                    <input type="number"
                           step="0.01"
                           name="precio"
                           class="form-control"
                           required>

                </div>

                <div class="mb-3">

                    <label class="form-label">Curso</label>

                    <select name="curs"
                            class="form-select"
                            required>

                        <option value="">Seleccione</option>

                        <?php foreach($CursModel as $curso): ?>

                            <option value="<?= esc($curso['Nom_curs']) ?>">

                                <?= esc($curso['Nom_curs']) ?>

                            </option>

                        <?php endforeach; ?>

                    </select>

                </div>

                <button class="btn btn-success">
                    Guardar
                </button>

                <a href="<?= base_url('privat/cursos/asignaturas_op') ?>"
                   class="btn btn-secondary">

                    Volver

                </a>

            </form>

        </div>

    </div>

</div>

<?= $this->endSection() ?>