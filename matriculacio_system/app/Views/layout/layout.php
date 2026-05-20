<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Panel Privado</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body {
      background-color: #f8f9fa;
    }

    .navbar {
      background: #111827;
    }

    .navbar .nav-link,
    .navbar-brand {
      color: #e5e7eb !important;
    }

    .navbar .nav-link:hover {
      color: #fff !important;
    }

    .content {
      padding: 25px;
    }
  </style>
</head>

<body>

<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">

    <a class="navbar-brand d-flex align-items-center gap-2" href="<?= base_url('privat/dashboard') ?>">
      <img src="<?= base_url('img/logo-removebg-preview.png') ?>" height="35">
      Panel
    </a>

    <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">

      <ul class="navbar-nav me-auto">

        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('privat/dashboard') ?>">
            <i class="bi bi-speedometer2"></i> Dashboard
          </a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
            <i class="bi bi-diagram-3"></i> Cursos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= base_url('privat/cursos') ?>">Cursos</a></li>
            <li><a class="dropdown-item" href="<?= base_url('privat/asignaturas') ?>">Asignaturas</a></li>
            <li><a class="dropdown-item" href="<?= base_url('privat/niveles') ?>">Niveles</a></li>
            <li><a class="dropdown-item" href="<?= base_url('privat/optativas') ?>">Optativas</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
            <i class="bi bi-check-circle"></i> Matrículas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= base_url('privat/Matriculas/listado') ?>">Listado</a></li>
            <li><a class="dropdown-item" href="<?= base_url('privat/expedientes') ?>">Expedientes</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
            <i class="bi bi-gear"></i> Gestión
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= base_url('privat/Tandada') ?>">Tandas</a></li>
            <li><a class="dropdown-item" href="<?= base_url('privat/Reducciones') ?>">Reducciones</a></li>
            <li><a class="dropdown-item" href="<?= base_url('privat/Bonificaciones') ?>">Bonificaciones</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('privat/Users/list') ?>">
            <i class="bi bi-people"></i> Usuarios
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('privat/mensatges') ?>">
            <i class="bi bi-chat-dots"></i> Mensajes
          </a>
        </li>

      </ul>

      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
            <i class="bi bi-person-circle"></i> Admin
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="#">Perfil</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item text-danger" href="<?= base_url('Admin/Auth/logout') ?>">Logout</a></li>
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