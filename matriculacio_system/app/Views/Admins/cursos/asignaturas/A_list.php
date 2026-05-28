```php
<?= $this->extend('/layout/layout') ?>

<?= $this->section('content') ?>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<div class="container py-4">

    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4 gap-3">
        <div>
            <h2 class="fw-bold mb-1">Asignaturas</h2>
            <p class="text-muted mb-0">Gestión de asignaturas</p>
        </div>
        
<div class="card border-0 shadow-sm mb-3">

    <div class="card-body pb-2">

        <div class="row g-2 align-items-end">

            <div class="col-md-4">

                <form method="get">

                    <div class="input-group input-group-sm">

                        <span class="input-group-text bg-white border-end-0">
                            <i class="fa fa-search text-muted"></i>
                        </span>

                        <input type="text"
                               name="keyword"
                               class="form-control border-start-0 ps-0"
                               placeholder="Buscar asignatura..."
                               value="<?= esc(request()->getGet('keyword')) ?>">

                    </div>

                </form>

            </div>

            <div class="col-md-3">

                <form id="cursoForm" method="get">

                    <select name="curso"
                            class="form-select form-select-sm"
                            onchange="document.getElementById('cursoForm').submit()">

                        <option value="">Todos los cursos</option>

                        <?php foreach($CursModel as $curso): ?>

                            <option value="<?= $curso['id_curs'] ?>"
                                <?= request()->getGet('curso') == $curso['id_curs'] ? 'selected' : '' ?>>

                                <?= esc($curso['Nom_curs']) ?>

                            </option>

                        <?php endforeach; ?>

                    </select>

                </form>

            </div>

            <div class="col-md-3">

                <form id="tipoForm" method="get">

                    <select name="tipo"
                            class="form-select form-select-sm"
                            onchange="document.getElementById('tipoForm').submit()">

                        <option value="">Todos los tipos</option>

                        <option value="Obligatoria"
                            <?= request()->getGet('tipo') == 'Obligatoria' ? 'selected' : '' ?>>

                            Obligatoria

                        </option>

                        <option value="Optativa"
                            <?= request()->getGet('tipo') == 'Optativa' ? 'selected' : '' ?>>

                            Optativa

                        </option>

                    </select>

                </form>

            </div>

            <div class="col-auto">

                <a href="<?= base_url('privat/cursos/asignaturas') ?>"
                   class="btn btn-outline-secondary btn-sm">

                    <i class="fa fa-rotate-left me-1"></i> Limpiar

                </a>

            </div>

        </div>

    </div>

</div>


        <a href="<?= base_url('privat/cursos/asignaturas/create') ?>" class="btn btn-primary shadow-sm">
            <i class="fa fa-plus me-1"></i> Nueva Asignatura
        </a>
    </div>

    <?php if(session()->getFlashdata('succes')): ?>
        <div class="alert alert-success">
            <?= session()->getFlashdata('succes') ?>
        </div>
    <?php endif; ?>

    <div class="card shadow-sm border-0">

        <div class="card-body p-0">

            <div class="table-responsive">

                <table class="table table-hover align-middle mb-0">

                    <thead class="table-light">
                        <tr>
                            <th>Nombre</th>
                            <th>Tipo</th>
                            <th>Precio</th>
                            <th>Curso</th>
                            <th class="text-center">Acciones</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php foreach($Asignaturas as $asig): ?>

                            <tr>

                                <td><?= esc($asig['nombre']) ?></td>
                                <td><?= esc($asig['tipo']) ?></td>
                                <td><?= esc($asig['precio']) ?> €</td>

                                <td>
                                    <?php
                                        foreach($CursModel as $curso){
                                            if($curso['id_curs'] == $asig['id_curs']){
                                                echo esc($curso['Nom_curs']);
                                            }
                                        }
                                    ?>
                                </td>

                                <td class="text-center">

                                    <button
                                        onclick="document.getElementById('modal-<?= esc($asig['id_asig']) ?>').style.display='block'"
                                        class="btn btn-sm btn-outline-primary">
                                        Ver
                                    </button>

                                    <a href="<?= base_url('privat/cursos/asignaturas/edit/'.$asig['id_asig']) ?>"
                                       class="btn btn-sm btn-outline-warning">
                                        Editar
                                    </a>

                                    <form action="<?= base_url('privat/cursos/asignaturas/delete/'.$asig['id_asig']) ?>"
                                          method="post"
                                          class="d-inline">

                                        <button type="submit"
                                                class="btn btn-sm btn-outline-danger"
                                                onclick="return confirm('¿Eliminar asignatura?')">
                                            Eliminar
                                        </button>

                                    </form>

                                </td>

                            </tr>

                            <div id="modal-<?= esc($asig['id_asig']) ?>"
                                 class="w3-modal"
                                 style="display:none; position:fixed; z-index:9999; left:0; top:0; width:100%; height:100%; background-color:rgba(0,0,0,0.5);">

                                <div class="w3-modal-content w3-animate-top w3-card-4"
                                     style="margin:auto; margin-top:10%; width:50%; padding:20px; border-radius:10px; background:#fff;">

                                    <header class="d-flex justify-content-between align-items-center mb-3">

                                        <h4 class="mb-0">Detalle Asignatura</h4>

                                        <button
                                            onclick="document.getElementById('modal-<?= esc($asig['id_asig']) ?>').style.display='none'"
                                            class="btn btn-sm btn-danger">
                                            ✕
                                        </button>

                                    </header>

                                    <hr>

                                    <p><strong>Nombre:</strong> <?= esc($asig['nombre']) ?></p>
                                    <p><strong>Tipo:</strong> <?= esc($asig['tipo']) ?></p>
                                    <p><strong>Precio:</strong> <?= esc($asig['precio']) ?> €</p>

                                </div>

                            </div>

                        <?php endforeach; ?>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

<?= $this->endSection() ?>
```
