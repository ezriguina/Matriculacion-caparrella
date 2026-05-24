<!DOCTYPE html>
<html lang="ca">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pagament matrícula</title>

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

        .section-title{
            color:#5f6ccf;
            font-weight:700;
        }

        .card-custom{
            border:none;
            border-radius:24px;
            background:#f8f9ff;
        }

        .upload-box{
            border:2px dashed #d6dcff;
            transition:.2s ease;
        }

        .upload-box:hover{
            border-color:#5f6ccf;
            background:#ffffff;
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

                <div class="step completed flex-fill">

                    <div class="step-circle mx-auto mb-2">

                        <i class="bi bi-check-lg"></i>

                    </div>

                    <small class="fw-semibold">
                        Curs
                    </small>

                </div>

                <div class="step active flex-fill">

                    <div class="step-circle mx-auto mb-2">
                        3
                    </div>

                    <small class="fw-semibold">
                        Pagament
                    </small>

                </div>

            </div>

            <form 
                action="<?= base_url('matricula/pago') ?>" 
                method="post"
                enctype="multipart/form-data">

                <?= csrf_field() ?>

                <?= validation_list_errors() ?>
                
                <div class="card card-custom mb-4">

                    <div class="card-body p-4">

                        <h4 class="section-title mb-4">

                            <i class="bi bi-receipt me-2"></i>

                            Resum de matrícula

                        </h4>

                        <ul class="list-group">

                            <li class="list-group-item d-flex justify-content-between">

                                <span>Alumne</span>

                                <strong>
                                    <?= esc($alumne['Nom_alumne']) ?>
                                </strong>

                            </li>

                            <li class="list-group-item d-flex justify-content-between">

                                <span>Email</span>

                                <strong>
                                    <?= esc($alumne['correo_alumne']) ?>
                                </strong>

                            </li>

                            <li class="list-group-item d-flex justify-content-between">

                                <span>Curs</span>

                                <strong>
                                    <?= esc($curs['Nom_curs']) ?>
                                </strong>

                            </li>

                            <li class="list-group-item d-flex justify-content-between">

                                <span>Codi curs</span>

                                <strong>
                                    <?= esc($curs['codigo_curs']) ?>
                                </strong>

                            </li>

                            <li class="list-group-item d-flex justify-content-between">

                                <span>Total a pagar</span>

                                <strong class="text-success fs-5">

                                    <?= esc($curs['precio']) ?> €

                                </strong>

                            </li>

                        </ul>

                    </div>

                </div>

                <div class="card card-custom mb-4">

                    <div class="card-body p-4">

                        <h4 class="section-title mb-4">

                            <i class="bi bi-bank me-2"></i>

                            Dades bancàries

                        </h4>

                        <ul class="list-group mb-4">

                            <li class="list-group-item d-flex justify-content-between">

                                <span>Codi entitat</span>

                                <strong>0415876</strong>

                            </li>

                            <li class="list-group-item d-flex justify-content-between">

                                <span>Concepte</span>

                                <strong>INGRESSOS ALUMNES</strong>

                            </li>

                            <li class="list-group-item d-flex justify-content-between">

                                <span>Alumne</span>

                                <strong>
                                    <?= esc($alumne['Nom_alumne']) ?>
                                </strong>

                            </li>

                            <li class="list-group-item d-flex justify-content-between">

                                <span>Import</span>

                                <strong class="text-success">

                                    <?= esc($curs['precio']) ?> €

                                </strong>

                            </li>

                        </ul>

                        <div class="alert alert-primary border-0 rounded-4 mb-0">

                            <ol class="mb-0">

                                <li>Accedeix a la banca online.</li>

                                <li>Realitza la transferència.</li>

                                <li>Introdueix el codi 0415876.</li>

                                <li>Indica el nom de l'alumne i el curs.</li>

                                <li>Guarda el justificant.</li>

                                <li>Puja el comprovant abans de confirmar.</li>

                            </ol>

                        </div>

                    </div>

                </div>

                <div class="card card-custom mb-4">

                    <div class="card-body p-4">

                        <h4 class="section-title mb-4">

                            <i class="bi bi-upload me-2"></i>

                            Justificant de pagament

                        </h4>

                        <div class="upload-box rounded-4 p-4 bg-white">

                            <label class="form-label fw-semibold mb-3">

                                Pujar comprovant

                            </label>

                            <input 
                                type="file"
                                class="form-control"
                                name="comprov_pago"
                                accept=".pdf,.jpg,.jpeg,.png">

                            <small class="text-muted d-block mt-2">

                                Formats admesos: PDF, JPG, JPEG i PNG

                            </small>

                        </div>

                    </div>

                </div>

                <div class="d-flex justify-content-center gap-3 mt-5">

                    <a 
                        href="<?= base_url('matricula/datos_curs') ?>"
                        class="btn btn-outline-primary px-4 rounded-4">

                        Tornar

                    </a>

                    <button 
                        type="submit"
                        class="btn btn-primary btn-lg px-5 rounded-4">

                        Confirmar matrícula

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
