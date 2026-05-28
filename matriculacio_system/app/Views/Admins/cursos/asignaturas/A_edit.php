```php
<?= $this->extend('/layout/layout') ?>

<?= $this->section('content') ?>

<div class="container py-4">


    <div class="card shadow-sm border-0">

        <div class="card-header bg-white">
            <h3 class="mb-0">Editar Asignatura</h3>
        </div>

        <div class="card-body">

            <form action="<?= base_url('privat/cursos/asignaturas/edit/'.$Asignaturas['id_asig']) ?>" method="post">

                <div class="mb-3">
                    <label class="form-label">Nombre</label>

                    <input type="text"
                           name="Asig"
                           class="form-control"
                           value="<?= esc($Asignaturas['nombre']) ?>"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tipo</label>

                    <select name="tipo" class="form-select" required>

                        <option value="Obligatoria"
                            <?= $Asignaturas['tipo'] == 'Obligatoria' ? 'selected' : '' ?>>
                            Obligatoria
                        </option>

                        <option value="Optativa"
                            <?= $Asignaturas['tipo'] == 'Optativa' ? 'selected' : '' ?>>
                            Optativa
                        </option>

                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Curso</label>

                    <select name="curs" class="form-select" required>

                        <?php foreach($CursModel as $curso): ?>
                            
                            <option value="<?= esc($curso['Nom_curs']) ?>"
                                <?= $curso['id_curs'] == $Asignaturas['id_curs'] ? 'selected' : '' ?>>
                                
                                <?= esc($curso['Nom_curs']) ?>

                            </option>

                        <?php endforeach; ?>

                    </select>
                </div>

                <div class="mb-4">
                    <label class="form-label">Precio</label>

                    <input type="number"
                           step="0.01"
                           name="precio"
                           class="form-control"
                           value="<?= esc($Asignaturas['precio']) ?>"
                           required>
                </div>

                <div class="d-flex gap-2">

                    <button type="submit" class="btn btn-warning">
                        Actualizar
                    </button>

                    <a href="<?= base_url('privat/cursos/asignaturas') ?>"
                       class="btn btn-secondary">
                        Volver
                    </a>

                </div>

            </form>

        </div>

    </div>

</div>

<?= $this->endSection() ?>
```
