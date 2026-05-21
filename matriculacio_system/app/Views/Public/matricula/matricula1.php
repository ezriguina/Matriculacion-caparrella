<!DOCTYPE html>
<html lang="ca">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Procés de Matrícula</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>

        body{
            background:#f5f7ff;
        }

        .primary-color{
            color:#5f6ccf;
        }

        .bg-primary-custom{
            background:#5f6ccf;
        }

        .step-circle{
            width:42px;
            height:42px;
            border-radius:50%;
            display:flex;
            align-items:center;
            justify-content:center;
            font-weight:600;
            background:#dbe2ff;
            color:#5f6ccf;
        }

        .step.active .step-circle{
            background:#5f6ccf;
            color:white;
        }

        .step.completed .step-circle{
            background:#39c27f;
            color:white;
        }

        .upload-box{
            border:2px dashed #d6dcff;
            transition:.2s ease;
        }

        .upload-box:hover{
            border-color:#5f6ccf;
            background:#f8f9ff;
        }

        .section-title{
            color:#5f6ccf;
            font-weight:700;
        }

        .form-control,
        .form-select{
            border-radius:14px;
            padding:0.8rem 1rem;
        }

        .btn-primary{
            background:#5f6ccf;
            border-color:#5f6ccf;
        }

        .btn-primary:hover{
            background:#5260c2;
            border-color:#5260c2;
        }

    </style>

</head>

<body>

    <nav class="navbar navbar-expand-lg bg-white shadow-sm py-3">

        <div class="container">

            <a class="navbar-brand d-flex align-items-center gap-3 text-decoration-none" href="#">

                <img 
                    src="<?= base_url('img/logo-removebg-preview.png') ?>" 
                    height="55">

                <div class="fw-bold fs-4 lh-1 primary-color">

                    Institut <br> Caparrella

                </div>

            </a>

        </div>

    </nav>

    <div class="container py-5">

        <div class="card border-0 shadow-lg rounded-5 overflow-hidden">

            <div class="card-body p-4 p-lg-5">

                <div class="d-flex justify-content-between align-items-center mb-5 text-center">

                    <div class="step completed flex-fill">

                        <div class="step-circle mx-auto mb-2">
                            <i class="bi bi-check-lg"></i>
                        </div>

                        <small class="fw-semibold">
                            Alumne
                        </small>

                    </div>

                    <div class="step active flex-fill">

                        <div class="step-circle mx-auto mb-2">
                            2
                        </div>

                        <small class="fw-semibold">
                            Dades
                        </small>

                    </div>

                    <div class="step flex-fill">

                        <div class="step-circle mx-auto mb-2">
                            3
                        </div>

                        <small class="fw-semibold text-muted">
                            Pagament
                        </small>

                    </div>

                </div>

                <div class="alert border-0 rounded-4 bg-light d-flex align-items-center gap-3 mb-4">

                    <i class="bi bi-calendar2-week fs-4 primary-color"></i>

                    <div>

                        <strong class="primary-color">
                            Tandada actual:
                        </strong>

                        <?= esc($Tand['nom_tandada']); ?>

                    </div>

                </div>

                <form action="<?= base_url('matricula/datos_alumne') ?>" method="post" enctype="multipart/form-data" id="formMatricula">

                    <?= csrf_field(); ?>
                    <?= validation_list_errors(); ?>

                    <div class="card border-0 bg-light rounded-4 mb-4">

                        <div class="card-body p-4">

                            <h4 class="section-title mb-4">

                                <i class="bi bi-person-vcard me-2"></i>

                                Dades de l'alumne/a

                            </h4>

                            <div class="row g-4">

                                <div class="col-md-6">

                                    <label class="form-label fw-semibold">
                                        Cognoms
                                    </label>

                                    <input 
                                        type="text"
                                        class="form-control"
                                        name="cognom_alumne"
                                        value="<?= old('cognom_alumne'); ?>">

                                </div>

                                <div class="col-md-6">

                                    <label class="form-label fw-semibold">
                                        Nom
                                    </label>

                                    <input 
                                        type="text"
                                        class="form-control"
                                        name="nom_alumne"
                                        value="<?= old('nom_alumne'); ?>">

                                </div>

                                <div class="col-md-6">

                                    <label class="form-label fw-semibold">
                                        DNI / NIE / Passaport
                                    </label>

                                    <input 
                                        type="text"
                                        class="form-control"
                                        name="dni"
                                        value="<?= old('dni'); ?>">

                                </div>

                                <div class="col-md-6">

                                    <label class="form-label fw-semibold">
                                        Data de naixement
                                    </label>

                                    <input 
                                        type="date"
                                        class="form-control"
                                        name="data_nacimiento"
                                        value="<?= old('data_nacimiento'); ?>">

                                </div>

                                <div class="col-md-6">

                                    <label class="form-label fw-semibold">
                                        Població
                                    </label>

                                    <input 
                                        type="text"
                                        class="form-control"
                                        name="Poblacio"
                                        value="<?= old('Poblacio'); ?>">

                                </div>

                                <div class="col-md-6">

                                    <label class="form-label fw-semibold">
                                        Municipi
                                    </label>

                                    <input 
                                        type="text"
                                        class="form-control"
                                        name="municipi"
                                        value="<?= old('municipi'); ?>">

                                </div>

                                <div class="col-md-8">

                                    <label class="form-label fw-semibold">
                                        Direcció
                                    </label>

                                    <input 
                                        type="text"
                                        class="form-control"
                                        name="domicili"
                                        value="<?= old('domicili'); ?>">

                                </div>

                                <div class="col-md-4">

                                    <label class="form-label fw-semibold">
                                        Codi postal
                                    </label>

                                    <input 
                                        type="text"
                                        class="form-control"
                                        name="codi_postal"
                                        value="<?= old('codi_postal'); ?>">

                                </div>

                                <div class="col-md-6">

                                    <label class="form-label fw-semibold">
                                        Telèfon alumne
                                    </label>

                                    <input 
                                        type="number"
                                        class="form-control"
                                        name="tlf_alumne"
                                        value="<?= old('tlf_alumne'); ?>">

                                </div>
                                 <div class="col-md-6">

                                    <label class="form-label fw-semibold">
                                        Telèfon Auxiliar
                                    </label>

                                    <input 
                                        type="tel"
                                        class="form-control"
                                        name="tlf_familiar"
                                        value="<?= old('tlf_familiar'); ?>">

                                </div>

                                <div class="col-md-6">

                                    <label class="form-label fw-semibold">
                                        Email alumne
                                    </label>

                                    <input 
                                        type="email"
                                        class="form-control"
                                        name="email_alumne"
                                        value="<?= old('email_alumne'); ?>">

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="card border-0 bg-light rounded-4 mb-4">

                        <div class="card-body p-4">

                            <h4 class="section-title mb-4">

                                <i class="bi bi-heart-pulse me-2"></i>

                                Sistema sanitari

                            </h4>

                            <div class="row g-4">

                                <div class="col-md-6">

                                    <label class="form-label fw-semibold">
                                        TSI
                                    </label>

                                    <input 
                                        type="text"
                                        class="form-control"
                                        name="TSI"
                                        value="<?= old('TSI'); ?>">

                                </div>

                                <div class="col-md-6 d-flex align-items-end">

                                    <div class="form-check">

                                        <input 
                                            class="form-check-input"
                                            type="checkbox"
                                            name="mutua"
                                            value="Mutua">

                                        <label class="form-check-label">
                                            Té mútua privada
                                        </label>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="card border-0 bg-light rounded-4 mb-4">

                        <div class="card-body p-4">

                            <h4 class="section-title mb-4">

                                <i class="bi bi-card-image me-2"></i>

                                Documents DNI

                            </h4>

                            <div class="row g-4">

                                <div class="col-md-6">

                                    <div class="upload-box rounded-4 p-4 text-center bg-white h-100">

                                        <img 
                                            id="previewFront"
                                            src="<?= base_url('img/1.png') ?>"
                                            class="img-fluid rounded-3 mb-3"
                                            style="max-height:200px; object-fit:cover;">

                                        <label class="form-label fw-semibold">
                                            DNI anvers
                                        </label>

                                        <input 
                                            type="file"
                                            class="form-control"
                                            name="dni_f"
                                            accept="image/*">

                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="upload-box rounded-4 p-4 text-center bg-white h-100">

                                        <img 
                                            id="previewBack"
                                            src="<?= base_url('img/2.png') ?>"
                                            class="img-fluid rounded-3 mb-3"
                                            style="max-height:200px; object-fit:cover;">

                                        <label class="form-label fw-semibold">
                                            DNI revers
                                        </label>

                                        <input 
                                            type="file"
                                            class="form-control"
                                            name="dni_b"
                                            accept="image/*">

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="card border-0 bg-light rounded-4 mb-4">

                        <div class="card-body p-4">

                            <h4 class="section-title mb-4">

                                <i class="bi bi-people me-2"></i>

                                Tutor legal

                            </h4>

                            <div class="row g-4">

                                <div class="col-md-4">

                                    <label class="form-label fw-semibold">
                                        Tipus de tutor
                                    </label>

                                    <select class="form-select" name="tipo_tutor">

                                        <option value="">
                                            Selecciona
                                        </option>

                                        <option value="padre">
                                            Pare
                                        </option>

                                        <option value="madre">
                                            Mare
                                        </option>

                                        <option value="tutor_legal">
                                            Tutor legal
                                        </option>

                                    </select>

                                </div>

                                <div class="col-md-4">

                                    <label class="form-label fw-semibold">
                                        Nom
                                    </label>

                                    <input 
                                        type="text"
                                        class="form-control"
                                        name="tutor_nombre">

                                </div>

                                <div class="col-md-4">

                                    <label class="form-label fw-semibold">
                                        Cognoms
                                    </label>

                                    <input 
                                        type="text"
                                        class="form-control"
                                        name="tutor_apellidos">

                                </div>

                                <div class="col-md-4">

                                    <label class="form-label fw-semibold">
                                        DNI
                                    </label>

                                    <input 
                                        type="text"
                                        class="form-control"
                                        name="tutor_dni">

                                </div>

                                <div class="col-md-4">

                                    <label class="form-label fw-semibold">
                                        Telèfon
                                    </label>

                                    <input 
                                        type="tel"
                                        class="form-control"
                                        name="tutor_telefono">

                                </div>

                                <div class="col-md-4">

                                    <label class="form-label fw-semibold">
                                        Email
                                    </label>
     
                                    <input 
                                        type="email"
                                        class="form-control"
                                        name="tutor_email">

                                </div>

                            </div>
                            

                        </div>
                                            <div class="card border-0 bg-light rounded-4 mb-4">

                        <div class="card-body p-4">

                            <h4 class="section-title mb-4">

                                <i class="bi bi-card-image me-2"></i>

                                Documents DNI

                            </h4>

                            <div class="row g-4">

                                <div class="col-md-6">

                                    <div class="upload-box rounded-4 p-4 text-center bg-white h-100">

                                        <img 
                                            id="previewFront"
                                            src="<?= base_url('img/1.png') ?>"
                                            class="img-fluid rounded-3 mb-3"
                                            style="max-height:200px; object-fit:cover;">

                                        <label class="form-label fw-semibold">
                                            DNI anvers
                                        </label>

                                        <input 
                                            type="file"
                                            class="form-control"
                                            name="dniT_f"
                                            accept="image/*">

                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="upload-box rounded-4 p-4 text-center bg-white h-100">

                                        <img 
                                            id="previewBack"
                                            src="<?= base_url('img/2.png') ?>"
                                            class="img-fluid rounded-3 mb-3"
                                            style="max-height:200px; object-fit:cover;">

                                        <label class="form-label fw-semibold">
                                            DNI revers
                                        </label>

                                        <input 
                                            type="file"
                                            class="form-control"
                                            name="dniT_b"
                                            accept="image/*">

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    </div>

                    <div class="d-flex justify-content-center gap-3 mt-5">

                        <button type="button" class="btn btn-outline-primary px-4 rounded-4"> Guardar</button>

                        <button  type="submit" class="btn btn-primary btn-lg px-5 rounded-4" id="enviar">Continuar</button>

                    </div>

                </form>

            </div>

        </div>

    </div>

    <div class="modal fade" id="confirmModal" tabindex="-1">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content rounded-4 border-0 shadow">

            <div class="modal-header border-0">

                <h5 class="modal-title">
                    Confirmar datos
                </h5>

                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="modal">
                </button>

            </div>

            <div class="modal-body text-center">

                <i class="bi bi-exclamation-circle text-warning fs-1"></i>

                <p class="mt-3 mb-0">
                    Revisa que todos los datos sean correctos antes de enviar.
                </p>
             
            </div>

            <div class="modal-footer border-0">

                <button type="button"
                        class="btn btn-light rounded-3"
                        data-bs-dismiss="modal">
                    Cancelar
                </button>

                <button type="button"
                        id="confirmarEnvio"
                        class="btn btn-primary rounded-3">
                    Sí, enviar
                </button>

            </div>

        </div>

    </div>

</div>
    

    </div>
</div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {

    const modal = new bootstrap.Modal(
    botonEnviar.addEventListener('click', function (e) {

        e.preventDefault();

        modal.show();

    });

    document.getElementById('confirmarEnvio')
        .addEventListener('click', function () {

            formulario.submit();

        });

});
</script>

</html>