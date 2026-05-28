<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Panel Privado</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <style>

        body{
            background:#f5f7ff;
        }

        .navbar-custom{
            background:white;
            border-bottom:1px solid #e9ecff;
        }

        .brand-color{
            color:#5f6ccf;
        }

        .nav-link{
            color:#4b5563 !important;
            font-weight:500;
            padding:.8rem 1rem !important;
            position:relative;
            transition:.2s ease;
        }

        .nav-link::after{
            content:"";
            position:absolute;
            left:1rem;
            bottom:.45rem;
            width:0;
            height:2px;
            background:#5f6ccf;
            border-radius:10px;
            transition:.2s ease;
        }

        .nav-link:hover,
        .nav-link:focus{
            color:#5f6ccf !important;
        }

        .nav-link:hover::after,
        .nav-link:focus::after{
            width:calc(100% - 2rem);
        }

        .dropdown-menu{
            border:none;
            border-radius:18px;
            box-shadow:0 10px 30px rgba(0,0,0,.08);
            padding:.7rem;
        }

        .dropdown-item{
            border-radius:12px;
            padding:.7rem 1rem;
        }

        .dropdown-item:hover{
            background:#eef1ff;
            color:#5f6ccf;
        }

        .content{
            padding:2rem 1rem;
        }

        @media (max-width:991px){

            .navbar-collapse{
                background:white;
                margin-top:1rem;
                padding:1rem;
                border-radius:20px;
                box-shadow:0 10px 25px rgba(0,0,0,.06);
            }

            .nav-link::after{
                display:none;
            }

        }

    </style>

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-custom sticky-top">

        <div class="container-fluid px-lg-4">

            <a 
                class="navbar-brand d-flex align-items-center gap-3 text-decoration-none"
                href="<?= base_url('privat/Dashboard/Instiut-Caparrella') ?>">

                <img 
                    src="<?= base_url('img/logo-removebg-preview.png') ?>"
                    height="52">

                <div class="fw-bold fs-4 lh-1 brand-color">

                    Institut <br> Caparrella

                </div>

            </a>

            <button 
                class="navbar-toggler border-0 shadow-none"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav">

                <i class="bi bi-list fs-2 brand-color"></i>

            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav mx-auto align-items-lg-center">

                    <li class="nav-item">

                        <a 
                            class="nav-link px-3"
                            href="<?= base_url('privat/Dashboard/Instiut-Caparrella') ?>">

                            <i class="bi bi-speedometer2 me-2"></i>

                            Dashboard

                        </a>

                    </li>

                    <li class="nav-item dropdown">

                        <a 
                            class="nav-link dropdown-toggle px-3"
                            data-bs-toggle="dropdown"
                            href="#">

                            <i class="bi bi-journal-bookmark me-2"></i>

                            Cursos

                        </a>

                        <ul class="dropdown-menu">

                            <li>
                                <a class="dropdown-item"
                                    href="<?= base_url('privat/cursos') ?>">

                                    Cursos

                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item"
                                    href="<?= base_url('privat/cursos/asignaturas') ?>">

                                    Asignaturas

                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item"
                                    href="<?= base_url('privat/Nivelles/listado') ?>">

                                    Niveles

                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item"
                                    href="<?= base_url('privat/optativas') ?>">

                                    Optativas

                                </a>
                            </li>

                        </ul>

                    </li>

                    <li class="nav-item dropdown">

                        <a 
                            class="nav-link dropdown-toggle px-3"
                            data-bs-toggle="dropdown"
                            href="#">

                            <i class="bi bi-mortarboard me-2"></i>

                            Matrículas

                        </a>

                        <ul class="dropdown-menu">

                            <li>
                                <a class="dropdown-item"
                                    href="<?= base_url('privat/Matriculas/listado') ?>">

                                    Listado

                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item"
                                    href="<?= base_url('privat/expedientes') ?>">

                                    Expedientes

                                </a>
                            </li>

                        </ul>

                    </li>

                    <li class="nav-item dropdown">

                        <a 
                            class="nav-link dropdown-toggle px-3"
                            data-bs-toggle="dropdown"
                            href="#">

                            <i class="bi bi-sliders me-2"></i>

                            Gestión

                        </a>

                        <ul class="dropdown-menu">

                            <li>
                                <a class="dropdown-item"
                                    href="<?= base_url('privat/Tandada') ?>">

                                    Tandas

                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item"
                                    href="<?= base_url('privat/Reducciones') ?>">

                                    Reducciones

                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item"
                                    href="<?= base_url('privat/Bonificaciones') ?>">

                                    Bonificaciones

                                </a>
                            </li>

                        </ul>

                    </li>

                    <li class="nav-item">

                        <a 
                            class="nav-link px-3"
                            href="<?= base_url('privat/Users/list') ?>">

                            <i class="bi bi-people me-2"></i>

                            Usuarios

                        </a>

                    </li>

                    <li class="nav-item">

                        <a 
                            class="nav-link px-3"
                            href="<?= base_url('privat/mensatges') ?>">

                            <i class="bi bi-chat-dots me-2"></i>

                            Mensajes

                        </a>

                    </li>

                </ul>

                <ul class="navbar-nav">

                    <li class="nav-item dropdown">

                        <a 
                            class="nav-link dropdown-toggle d-flex align-items-center gap-2"
                            data-bs-toggle="dropdown"
                            href="#">

                            <i class="bi bi-person-circle fs-5"></i>

                            Admin

                        </a>

                        <ul class="dropdown-menu dropdown-menu-end">

                            <li>

                                <a class="dropdown-item" href="#">

                                    <i class="bi bi-person me-2"></i>

                                    Perfil

                                </a>

                            </li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>

                                <a 
                                    class="dropdown-item text-danger"
                                    href="<?= base_url('Admin/Auth/logout') ?>">

                                    <i class="bi bi-box-arrow-right me-2"></i>

                                    Logout

                                </a>

                            </li>

                        </ul>

                    </li>

                </ul>

            </div>

        </div>

    </nav>

    <main class="content container-fluid">

        <?= $this->renderSection('content') ?>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>