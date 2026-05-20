<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Requisitos de Matrícula</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>

        body{
            min-height:100vh;
            background:#f5f7ff;
        }

        .hero-side{
            background:linear-gradient(135deg,#5f6ccf,#6f7de0);
        }

        .check-card{
            border:1px solid #e4e7f5;
            transition:.2s ease;
        }

        .check-card:hover{
            border-color:#6f7de0;
            background:#f8f9ff;
            transform:translateY(-2px);
        }

        .logo-text{
            color:#5f6ccf;
        }

        .btn-primary{
            background:#5f6ccf;
            border-color:#5f6ccf;
        }

        .btn-primary:hover{
            background:#5260c2;
            border-color:#5260c2;
        }

        .text-primary{
            color:#5f6ccf !important;
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

                <div class="fw-bold fs-4 logo-text lh-1">

                    Institut <br> Caparrella

                </div>

            </a>

        </div>

    </nav>

    <div class="container py-5">

        <div class="card border-0 shadow-lg rounded-5 overflow-hidden">

            <div class="row g-0">

                <div class="col-lg-5 hero-side text-white d-flex flex-column justify-content-center p-5">

                    <img 
                        src="<?= base_url('img/logo-removebg-preview.png') ?>"
                        class="img-fluid mx-auto mb-4"
                        style="max-width:120px;">

                    <h2 class="fw-bold text-center mb-3">
                        Requisitos de matrícula
                    </h2>

                    <p class="text-center opacity-75 mb-0">
                        Antes de iniciar el proceso, asegúrate de tener preparada toda la documentación necesaria.
                    </p>

                </div>

                <div class="col-lg-7 bg-white p-4 p-lg-5">

                    <div class="d-flex align-items-center gap-3 mb-4">

                        <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                            style="width:50px;height:50px;">

                            <i class="bi bi-check2-square"></i>

                        </div>

                        <div>

                            <h4 class="fw-bold mb-0">
                                Verificación de documentos
                            </h4>

                            <small class="text-muted">
                                Marca las opciones disponibles
                            </small>

                        </div>

                    </div>

                    <form action="<?= base_url('matricula') ?>" method="post">

                        <?= csrf_field(); ?>
                        <?= validation_list_errors(); ?>

                        <div class="vstack gap-3">

                            <label class="check-card rounded-4 p-3 d-flex gap-3 align-items-start">

                                <input class="form-check-input mt-1" type="checkbox" name="check1">

                                <span>
                                    2 fotografías del DNI, NIE o pasaporte (anverso y reverso)
                                </span>

                            </label>

                            <label class="check-card rounded-4 p-3 d-flex gap-3 align-items-start">

                                <input class="form-check-input mt-1" type="checkbox" name="check2">

                                <span>
                                    Documentación de familia numerosa
                                </span>

                            </label>

                            <label class="check-card rounded-4 p-3 d-flex gap-3 align-items-start">

                                <input class="form-check-input mt-1" type="checkbox" name="check3">

                                <span>
                                    Certificado de discapacidad (si aplica)
                                </span>

                            </label>

                            <label class="check-card rounded-4 p-3 d-flex gap-3 align-items-start">

                                <input class="form-check-input mt-1" type="checkbox" name="check4">

                                <span>
                                    Documentación académica requerida
                                </span>

                            </label>

                        </div>

                        <div class="d-grid mt-4">

                            <button type="submit" class="btn btn-primary btn-lg rounded-4 py-3">

                                <i class="bi bi-arrow-right-circle me-2"></i>

                                Empezar matriculación

                            </button>

                        </div>

                    </form>

                    <div class="text-center mt-4">

                        <a 
                            href="<?= base_url('privat/Dashboard/Instiut-Caparrella') ?>"
                            class="text-decoration-none fw-semibold text-primary">

                            <i class="bi bi-lock-fill me-1"></i>

                            Acceder a zona privada

                        </a>

                    </div>

                    <div class="text-center text-muted small mt-4">

                        <i class="bi bi-shield-lock-fill me-1"></i>

                        © <?= date('Y') ?> Institut Caparrella

                    </div>

                </div>

            </div>

        </div>

    </div>

</body>

</html>