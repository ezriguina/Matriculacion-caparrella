<?= $this->extend('/layout/layout') ?>
<?= $this->section('content') ?>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<div class="container py-4">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h2 class="fw-bold">Asignaturas Optativas</h2>
            <p class="text-muted">Gestión de asignaturas optativas</p>
        </div>

        <a href="<?= base_url('privat/cursos/asignaturas/create_op') ?>"
           class="btn btn-primary">
            <i class="fa fa-plus"></i> Nueva Optativa
        </a>

    </div>

    <?php if(session()->getFlashdata('succes')): ?>
        <div class="alert alert-success">
            <?= session()->getFlashdata('succes') ?>
        </div>
    <?php endif; ?>

    <div class="card shadow-sm border-0">

        <div class="card-body p-0">

            <table class="table table-hover mb-0">

                <thead class="table-light">

                    <tr>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Curso</th>
                        <th class="text-center">Acciones</th>
                    </tr>

                </thead>

                <tbody>

                    <?php foreach($Asignaturas as $asig): ?>

                        <tr>

                            <td><?= esc($asig['nom_opt']) ?></td>
                            <td><?= esc($asig['precio_opt']) ?> €</td>

                            <td>

                                <?php foreach($CursModel as $curso): ?>

                                    <?php if($curso['id_curs'] == $asig['curso_id']): ?>

                                        <?= esc($curso['Nom_curs']) ?>

                                    <?php endif; ?>

                                <?php endforeach; ?>

                            </td>

                            <td class="text-center">

                                <button
                                    onclick="document.getElementById('modal<?= $asig['id_optativa'] ?>').style.display='block'"
                                    class="btn btn-outline-primary btn-sm">

                                    Ver

                                </button>

                                <a href="<?= base_url('privat/cursos/asignaturas/edit_op/'.$asig['id_optativa']) ?>"
                                   class="btn btn-outline-warning btn-sm">

                                    Editar

                                </a>

                                <form method="post"
                                      action="<?= base_url('privat/cursos/asignaturas_op/delete/'.$asig['id_optativa']) ?>"
                                      class="d-inline">

                                    <?= csrf_field() ?>

                                    <button
                                        type="submit"
                                        class="btn btn-outline-danger btn-sm"
                                        onclick="return confirm('¿Eliminar optativa?')">

                                        Eliminar

                                    </button>

                                </form>

                            </td>

                        </tr>

                        <div id="modal<?= $asig['id_optativa'] ?>" class="w3-modal">

                            <div class="w3-modal-content w3-card-4 p-4">

                                <header class="d-flex justify-content-between">

                                    <h4>Detalle Optativa</h4>

                                    <button
                                        onclick="document.getElementById('modal<?= $asig['id_optativa'] ?>').style.display='none'"
                                        class="btn btn-danger btn-sm">

                                        X

                                    </button>

                                </header>

                                <hr>

                                <p><strong>Nombre:</strong> <?= esc($asig['nom_opt']) ?></p>
                                <p><strong>Tipo:</strong> Asignatura Optativa</p>
                                <p><strong>Precio:</strong> <?= esc($asig['precio_opt']) ?> €</p>

                            </div>

                        </div>

                    <?php endforeach; ?>

                </tbody>

            </table>

        </div>

    </div>

</div>

<?= $this->endSection() ?>