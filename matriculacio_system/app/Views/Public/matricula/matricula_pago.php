<!DOCTYPE html>
<html lang="ca">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Confirmació matrícula</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>
body{
    background:#eef2ff;
}

.app-card{
    border:0;
    border-radius:18px;
    box-shadow:0 10px 30px rgba(0,0,0,0.08);
}

.section-title{
    font-weight:700;
    color:#4f46e5;
}

.step-bar{
    display:flex;
    justify-content:space-between;
    margin-bottom:30px;
}

.step{
    flex:1;
    text-align:center;
}

.step-circle{
    width:42px;
    height:42px;
    border-radius:50%;
    margin:auto;
    display:flex;
    align-items:center;
    justify-content:center;
    font-weight:600;
    background:#dbe2ff;
    color:#4f46e5;
}

.step.active .step-circle{
    background:#4f46e5;
    color:#fff;
}

.step.completed .step-circle{
    background:#22c55e;
    color:#fff;
}

.card-box{
    background:#fff;
    border:1px solid #e5e7eb;
    border-radius:14px;
}

.summary-line{
    display:flex;
    justify-content:space-between;
    padding:10px 0;
    border-bottom:1px solid #f1f1f1;
}

.summary-line:last-child{
    border-bottom:0;
}

.total-box{
    background:#4f46e5;
    color:#fff;
    border-radius:14px;
    padding:16px;
}
</style>

</head>

<body>

<nav class="navbar bg-white shadow-sm">
<div class="container">
<img src="<?= base_url('img/logo-removebg-preview.png') ?>" height="50">
</div>
</nav>

<div class="container py-5">

<div class="app-card card p-4 p-lg-5">

<div class="step-bar mb-4">

<div class="step completed">
<div class="step-circle"><i class="bi bi-check-lg"></i></div>
<small>Alumne dades</small>
</div>

<div class="step completed">
<div class="step-circle"><i class="bi bi-check-lg"></i></div>
<small>Curs dades</small>
</div>

<div class="step active">
<div class="step-circle">3</div>
<small>Pagament </small>
</div>

</div>

<form action="<?= base_url('matricula/pago') ?>" method="post" enctype="multipart/form-data">
<?= csrf_field() ?>
<?= validation_list_errors() ; ?>
<div class="card-box p-4 mb-4">

<h5 class="section-title mb-3"><i class="bi bi-person-vcard me-2"></i> Alumne </h5>

<div class="summary-line">
<span>Nom complet</span>
<strong><?= esc($alumne['Cognom_alumne']) ?>, <?= esc($alumne['Nom_alumne']) ?></strong>
</div>

<div class="summary-line">
<span>DNI</span>
<strong><?= esc($alumne['Dni_alumne']) ?></strong>
</div>

<div class="summary-line">
<span>Targeta sanitaria</span>
<strong><?= esc($alumne['tsi']) ?></strong>
</div>

<div class="summary-line">
<span>Poblacio</span>
<strong><?= esc($alumne['poblacio']) ?></strong>
</div>

<div class="summary-line">
<span>Data de naixement</span>
<strong><?= esc($alumne['data_naixement']) ?></strong>
</div>
<div class="summary-line">
<span>C.P</span>
<strong><?= esc($alumne['codi_postal']) ?></strong>
</div>

<div class="summary-line">
<span>Email</span>
<strong><?= esc($alumne['correo_alumne']) ?></strong>
</div>

<div class="summary-line">
<span>Telèfon</span>
<strong><?= esc($alumne['tlf_alumne']) ?></strong>
</div>
<br>
<hr>

<h5 class="section-title mb-3"><i class="bi bi-person-vcard me-2"></i> Tutor legal del alumne </h5>
<div class="summary-line">
<span>Nom Tutor</span>
<strong><?= esc($alumne['nombre']) ?> , <?= esc($alumne['apellidos']) ?></strong>
</div>
<div class="summary-line">
<span>DNI Tutor</span>
<strong><?= esc($alumne['dni']) ?></strong>
</div>
<div class="summary-line">
<span>Telèfon Tutor</span>
<strong><?= esc($alumne['telefono']) ?></strong>
</div>

<div class="summary-line">
<span>Correo Tutor</span>
<strong><?= esc($alumne['email']) ?></strong>
</div>


</div>

<div class="card-box p-4 mb-4">

<h5 class="section-title mb-3"><i class="bi bi-mortarboard me-2"></i> Curs</h5>

<div class="summary-line">
    
<span>Nom</span>
<strong><?= esc($curs['Nom_curs']) ?></strong>
</div>

<div class="summary-line">
<span>Codi</span>
<strong><?= esc($curs['codigo_curs']) ?></strong>
</div>
<div class="summary-line">
<span>Asignaturas</span> 

<?php foreach ($asignaturas as $a): ?>
    <div class="summary-line">
        <span>Nom</span>
        <strong><?= esc($a['nombre']) ?></strong>
    </div>

    <div class="summary-line">
        <span>Tipo</span>
        <strong><?= esc($a['tipo']) ?></strong>
    </div>
<?php endforeach; ?>
</div>

<div class="summary-line">
<span>Preu base</span>  
<strong><?= esc($curs['precio']) ?> €</strong>
</div>

</div>

<div class="row mb-4">

<?php if(!empty($bonif)): ?>
<div class="col-md-6">
<div class="card border-success h-100">
<div class="card-body">
<h6 class="text-success"><i class="bi bi-gift-fill me-1"></i> Bonificació</h6>
<p class="mb-1"><strong><?= esc($bonif['nombre']) ?></strong></p>
<p class="mb-0">-<?= esc($bonif['precio']) ?> €</p>
</div>
</div>
</div>
<?php endif; ?>

<?php if(!empty($redu)): ?>
<div class="col-md-6">
<div class="card border-info h-100">
<div class="card-body">
<h6 class="text-info"><i class="bi bi-percent me-1"></i> Reducció</h6>
<p class="mb-1"><strong><?= esc($redu['nombre']) ?></strong></p>
<p class="mb-0">-<?= esc($redu['precio']) ?> €</p>
</div>
</div>
</div>
<?php endif; ?>

</div>

<?php
$total = $curs['precio'];
if(!empty($bonif)) $total =$total+ $bonif['precio'];
if(!empty($redu)) $total =$total- $redu['precio'];
if($total < 0) $total = 0; 
?>

<div class="total-box mb-4 d-flex justify-content-between align-items-center">
<h5 class="mb-0">Total a pagar</h5>
<h3 class="mb-0"><?= number_format($total,2) ?> €</h3>
</div>

<div class="card-box p-4 mb-4">

<h5 class="section-title mb-3"><i class="bi bi-bank me-2"></i> Transferència</h5>

<ul class="mb-0">
<li>Codi entitat: <strong>0415876</strong></li>
<li>Concepte: <strong>Matricula</strong></li>
<li>Alumne: <strong><?= esc($alumne['Nom_alumne']) ?></strong></li>
<li>Import: <strong><?= number_format($total,2) ?> €</strong></li>
</ul>

</div>

<div class="card-box p-4 mb-4">

<h5 class="section-title mb-3"><i class="bi bi-upload me-2"></i> Justificant</h5>

<input type="file" class="form-control" name="comprov" accept=".pdf,.jpg,.png">

</div>

<div class="d-flex justify-content-between">

<a href="<?= base_url('matricula/datos_curs') ?>" class="btn btn-outline-secondary px-4">Tornar</a>

<button class="btn btn-primary px-5">Confirmar matrícula</button>

</div>

</form>

</div>

</div>

</body>
</html>