<?= $this->extend('/layout/layout') ?>

<?= $this->section('content') ?>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<div class="container py-4">

    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4 gap-3">
        <div>
            <h2 class="fw-bold mb-1">Niveles</h2>
            <p class="text-muted mb-0">Gestión de Niveles</p>
        </div>

        <a href="<?= base_url('privat/Nivel/crear_nivel') ?>" class="btn btn-primary shadow-sm">
            <i class="fa fa-plus me-1"></i> Nuevo Nivel
        </a>
    </div>

    <?php if(session()->getFlashdata('success')): ?>
        <div class="alert alert-success">
            <?= session()->getFlashdata('success') ?>
        </div>
    <?php endif; ?>

    <div class="card shadow-sm border-0">
        <div class="card-body p-0">

            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                            <th class="text-center">Acciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach($Niveles as $Nivel): ?>
                        <tr>
                            <td><?= esc($Nivel['nombre']) ?></td>
                            <td><?= esc($Nivel['descripcion']) ?> €</td>

                            <td class="text-center">

                                <button 
                                    onclick="document.getElementById('modal-<?= esc($Nivel['id_nivel']) ?>').style.display='block'" 
                                    class="btn btn-sm btn-outline-primary">
                                    Ver
                                </button>

                                <a href="<?= base_url('privat/Nivel/edit_nivel/'.$Nivel['id_nivel']) ?>" 
                                   class="btn btn-sm btn-outline-warning">
                                    Editar
                                </a>

                                <a href="<?= base_url('privat/Nivel/delete_Nivel/'.$Nivel['id_nivel']) ?>" 
                                   class="btn btn-sm btn-outline-danger"
                                   onclick="return confirm('¿Eliminar curso?');">
                                    Eliminar
                                </a>

                            </td>
                        </tr>

                        <div id="modal-<?= esc($Nivel['id_nivel']) ?>" 
                            class="w3-modal" 
                            style="display:none; position:fixed; z-index:9999; left:0; top:0; width:100%; height:100%; background-color:rgba(0,0,0,0.5);">

                            <div class="w3-modal-content w3-animate-top w3-card-4" 
                                style="margin:auto; margin-top:10%; width:50%; padding:20px; border-radius:10px; background:#fff;">

                                <header class="d-flex justify-content-between align-items-center mb-3">
                                    <h4 class="mb-0">Detalle Curso</h4>

                                    <button 
                                        onclick="document.getElementById('modal-<?= esc($Nivel['id_nivel']) ?>').style.display='none'" 
                                        class="btn btn-sm btn-danger">
                                        ✕
                                    </button>
                                </header>

                                <hr>

                                <p><strong>Nombre :</strong> <?= esc($Nivel['nombre']) ?></p>
                                <p><strong>descripcion :</strong> <?= esc($Nivel['descripcion']) ?> €</p>

                            </div>
                        </div>

                        <?php endforeach; ?>
                    </tbody>

                </table>
            </div>

        </div>
    </div>

    <div class="d-flex justify-content-center mb-5">
        <?= $pager->links() ?>
    </div>

</div>

<?= $this->endSection() ?>