<?= $this->extend('/layout/layout') ?>
<?= $this->section('content') ?>

<div class="container py-4">

    <div class="card shadow-sm border-0">

        <div class="card-header bg-warning">

            <h4 class="mb-0">Editar Optativa</h4>

        </div>

        <div class="card-body">

            <form method="post"
                  action="<?= base_url('privat/cursos/asignaturas/edit_op/'.$Asignaturas['id_optativa']) ?>">
                  
                <?= csrf_field() ?>
               <?= validation_list_errors();  ?>
                <div class="mb-3">

                    <label class="form-label">Nombre</label>

                    <input type="text"
                           name="Asig"
                           class="form-control"
                           value="<?= esc($Asignaturas['nom_opt']) ?>"
                           required>

                </div>


                <div class="mb-3">

                    <label class="form-label">Precio</label>

                    <input type="number"
                           step="0.01"
                           name="precio"
                           value="<?= esc($Asignaturas['precio_opt']) ?>"
                           class="form-control">

                </div>

                <div class="mb-3">

                    <label class="form-label">Curso</label>

                    <select name="curs"
                            class="form-select">

                        <?php foreach($CursModel as $curso): ?>

                            <option
                                value="<?= esc($curso['Nom_curs']) ?>"
                                <?= $curso['id_curs'] == $Asignaturas['curso_id'] ? 'selected' : '' ?>>

                                <?= esc($curso['Nom_curs']) ?>

                            </option>

                        <?php endforeach; ?>

                    </select>

                </div>

                <button class="btn btn-warning">
                    Actualizar
                </button>

                <a href="<?= base_url('privat/cursos/asignaturas_op') ?>"
                   class="btn btn-secondary">

                    Cancelar

                </a>

            </form>

        </div>

    </div>

</div>

<?= $this->endSection() ?>