<!DOCTYPE html>
<html lang="ca">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dades del Curs</title>

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
                            Curs
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

                <form action="<?= base_url('matricula/datos_curs') ?>" method="post" enctype="multipart/form-data">

                    <?= csrf_field() ?>
                    <?= validation_list_errors() ?>

                    <div class="card border-0 bg-light rounded-4 mb-4">

                        <div class="card-body p-4">

                            <h4 class="section-title mb-4">

                                <i class="bi bi-book me-2"></i>

                                Dades del curs

                            </h4>

                            <div class="row g-4">

                                <div class="col-md-6">

                                    <label class="form-label fw-semibold">
                                        Cicle formatiu
                                    </label>

                                    <select class="form-select" name="Nom_curs">

                                        <option value="">
                                            Selecciona un curs
                                        </option>

                                        <?php foreach($curso as $curs): ?>

                                        <option value="<?= $curs['Nom_curs']; ?>">

                                            <?= $curs['Nom_curs']; ?>

                                        </option>

                                        <?php endforeach; ?>

                                    </select>

                                </div>

                                <div class="col-md-6">

                                    <label class="form-label fw-semibold">
                                        Tipus de matrícula
                                    </label>

                                    <select class="form-select" name="tipo_matricula">

                                        <option value="normal">
                                            Normal
                                        </option>

                                        <option value="continuidad">
                                            Continuïtat
                                        </option>

                                    </select>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="card border-0 bg-light rounded-4 mb-4">

                        <div class="card-body p-4">

                            <h4 class="section-title mb-4">

                                <i class="bi bi-percent me-2"></i>

                                Bonificacions i reduccions

                            </h4>

                            <div class="row g-4">

                                <div class="col-md-6">

                                    <label class="form-label fw-semibold">
                                        Bonificació
                                    </label>

                                    <select class="form-select" name="bonif">

                                        <option value="">
                                            Selecciona una bonificació
                                        </option>

                                        <?php foreach($bonif as $b): ?>

                                        <option value="<?= $b['nombre']; ?>">

                                            <?= $b['nombre']; ?>

                                        </option>

                                        <?php endforeach; ?>

                                    </select>

                                </div>

                                <div class="col-md-6">

                                    <label class="form-label fw-semibold">
                                        Reducció
                                    </label>

                                    <select 
                                        class="form-select"
                                        name="reduccion"
                                        id="reduccionSelect">

                                        <option value="">
                                            Cap reducció
                                        </option>

                                        <?php foreach($red as $r): ?>

                                        <option value="<?= $r['nombre']; ?>">

                                            <?= $r['nombre']; ?>

                                        </option>

                                        <?php endforeach; ?>


                                        <option value="hermanos">
                                            Descompte per germans
                                        </option>

                                    </select>

                                </div>

                            </div>

                            <div id="archivoContainer" class="mt-4" style="display:none;">

                                <div class="upload-box rounded-4 p-4 bg-white">

                                    <label class="form-label fw-semibold mb-3">

                                        <i class="bi bi-upload me-2"></i>

                                        Document justificatiu

                                    </label>

                                    <input 
                                        type="file"
                                        class="form-control"
                                        name="documento_reduccion"
                                        accept=".pdf,.jpg,.png">

                                    <small class="text-muted d-block mt-2">

                                        Formats permesos: PDF, JPG i PNG

                                    </small>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="d-flex justify-content-center gap-3 mt-5">

                        <button 
                            type="button"
                            class="btn btn-outline-primary px-4 rounded-4">

                            Guardar

                        </button>

                        <button 
                            type="submit"
                            class="btn btn-primary btn-lg px-5 rounded-4">

                            Continuar al pagament

                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

    <script>

        const select = document.getElementById('reduccionSelect');
        const archivo = document.getElementById('archivoContainer');

        select.addEventListener('change', function () {

            if (
                this.value === "familia_numerosa" ||
                this.value === "hermanos"
            ) {

                archivo.style.display = "block";

            } else {

                archivo.style.display = "none";

            }

        });

    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>