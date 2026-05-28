
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Portal de Acceso</title>

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

        .text-primary-custom{
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

        .custom-input{
            border-radius:16px;
            padding:.9rem 1rem .9rem 3rem;
            border:1px solid #dfe3f5;
            transition:.2s ease;
        }

        .custom-input:focus{
            border-color:#5f6ccf;
            box-shadow:0 0 0 .2rem rgba(95,108,207,.15);
        }

        .input-group-custom{
            position:relative;
        }

        .input-group-custom i{
            position:absolute;
            left:1rem;
            top:50%;
            transform:translateY(-50%);
            color:#7b88d1;
            z-index:10;
        }

        .glass-box{
            background:#ffffff;
            border:1px solid #edf0fb;
        }

        .footer-note{
            color:#98a0c0;
            font-size:.85rem;
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
                        Bienvenido de nuevo
                    </h2>

                    <p class="text-center opacity-75 mb-0">
                        Accede al sistema de matrícula con tus credenciales para continuar el proceso de forma segura.
                    </p>

                    <div class="d-flex justify-content-center gap-2 mt-4">

                        <span class="badge bg-white text-primary rounded-pill px-3 py-2">
                            Seguro
                        </span>

                        <span class="badge bg-white text-primary rounded-pill px-3 py-2">
                            Rápido
                        </span>

                        <span class="badge bg-white text-primary rounded-pill px-3 py-2">
                            Online
                        </span>

                    </div>

                </div>

                <div class="col-lg-7 bg-white p-4 p-lg-5">

                    <div class="d-flex align-items-center gap-3 mb-4">

                        <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                            style="width:50px;height:50px;">

                            <i class="bi bi-person-lock"></i>

                        </div>

                        <div>

                            <h4 class="fw-bold mb-0">
                                Inicio de sesión
                            </h4>

                            <small class="text-muted">
                                Introduce tus datos de acceso
                            </small>

                        </div>

                    </div>

                    <form action="<?= base_url('public/login') ?>" method="post">

                        <?= csrf_field(); ?>
                        <?= validation_list_errors(); ?>

                        <div class="glass-box rounded-4 p-4">

                            <div class="mb-4">

                                <label class="form-label fw-semibold">
                                    Correo electrónico
                                </label>

                                <div class="input-group-custom">

                                    <i class="bi bi-envelope-fill"></i>

                                    <input 
                                        type="email"
                                        class="form-control custom-input"
                                        name="email"
                                        id="email"
                                        placeholder="nombre@correo.com">

                                </div>

                                <div class="form-text">
                                    Usa tu correo registrado.
                                </div>

                            </div>

                            <div class="mb-4">

                                <label class="form-label fw-semibold">
                                    DNI / NIE / PASSPORT
                                </label>

                                <div class="input-group-custom">

                                    <i class="bi bi-person-badge-fill"></i>

                                    <input 
                                        type="text"
                                        class="form-control custom-input"
                                        name="code_pass"
                                        id="code_pass"
                                        placeholder="12345678A">

                                </div>

                                <div class="form-text">
                                    Documento de identidad oficial.
                                </div>

                            </div>

                            <div class="d-grid mt-4">

                                <button type="submit"
                                        class="btn btn-primary btn-lg rounded-4 py-3">

                                    <i class="bi bi-box-arrow-in-right me-2"></i>

                                    Acceder al sistema

                                </button>

                            </div>

                        </div>

                    </form>

                    <div class="text-center mt-4">

                        <a 
                            href="<?= base_url('privat/Dashboard/Instiut-Caparrella') ?>"
                            class="text-decoration-none fw-semibold text-primary-custom">

                            <i class="bi bi-lock-fill me-1"></i>

                            Acceder a zona privada

                        </a>

                    </div>

                    <div class="text-center footer-note mt-4">

                        <i class="bi bi-shield-lock-fill me-1"></i>

                        © <?= date('Y') ?> Institut Caparrella

                    </div>

                </div>

            </div>

        </div>

    </div>

</body>

</html>
```
