<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">

<style>

body{
    font-family: DejaVu Sans, sans-serif;
    font-size: 12px;
    color:#1f2937;
}

.header{
    text-align:center;
    border-bottom:2px solid #1d4ed8;
    padding-bottom:10px;
    margin-bottom:20px;
}

.logo{
    width:90px;
    margin-bottom:5px;
}

.title{
    font-size:18px;
    font-weight:bold;
    color:#1d4ed8;
}

.subtitle{
    font-size:11px;
    color:#6b7280;
}

.box{
    border:1px solid #e5e7eb;
    border-radius:6px;
    padding:10px;
    margin-bottom:15px;
}

.section-title{
    font-size:13px;
    font-weight:bold;
    color:#111827;
    margin-bottom:8px;
    border-left:4px solid #1d4ed8;
    padding-left:8px;
}

table{
    width:100%;
    border-collapse:collapse;
}

td{
    padding:6px;
    border-bottom:1px solid #f3f4f6;
}

.label{
    font-weight:bold;
    width:40%;
    color:#374151;
}

.total{
    margin-top:20px;
    padding:12px;
    background:#1d4ed8;
    color:white;
    font-size:15px;
    font-weight:bold;
    text-align:right;
    border-radius:6px;
}

.footer{
    margin-top:25px;
    text-align:center;
    font-size:10px;
    color:#6b7280;
    border-top:1px solid #e5e7eb;
    padding-top:10px;
}

.badge{
    display:inline-block;
    padding:4px 8px;
    font-size:10px;
    background:#e0f2fe;
    color:#0369a1;
    border-radius:4px;
    margin-top:5px;
}

</style>

</head>

<body>

<div class="header">

    <img class="logo" src="<?= FCPATH . 'img/logo_cp.png' ?>">

    <div class="title">RECIBO OFICIAL DE MATRÍCULA</div>

    <div class="subtitle">
        Documento generado automáticamente por el sistema académico
    </div>

</div>

<div class="box">

    <div class="section-title">Datos del alumno</div>

    <table>

        <tr>
            <td class="label">Nombre completo</td>
            <td><?= $alumne['Cognom_alumne'] ?> <?= $alumne['Nom_alumne'] ?></td>
        </tr>

        <tr>
            <td class="label">DNI</td>
            <td><?= $alumne['Dni_alumne'] ?></td>
        </tr>

        <tr>
            <td class="label">Email</td>
            <td><?= $alumne['correo_alumne'] ?></td>
        </tr>

        <tr>
            <td class="label">Teléfono</td>
            <td><?= $alumne['tlf_alumne'] ?></td>
        </tr>

    </table>

</div>

<div class="box">

    <div class="section-title">Datos del curso</div>

    <table>

        <tr>
            <td class="label">Curso</td>
            <td><?= $curs['Nom_curs'] ?></td>
        </tr>

        <tr>
            <td class="label">Código</td>
            <td><?= $curs['codigo_curs'] ?></td>
        </tr>

        <tr>
            <td class="label">Fecha emisión</td>
            <td><?= date('d/m/Y') ?></td>
        </tr>

    </table>

</div>

<div class="box">

    <div class="section-title">Descuentos aplicados</div>

    <table>

        <tr>
            <td class="label">Bonificación</td>
            <td>
                <?= !empty($bonificacion)
                    ? $bonificacion['nombre'].' (-'.$bonificacion['precio'].' €)'
                    : 'Sin bonificación' ?>
            </td>
        </tr>

        <tr>
            <td class="label">Reducción</td>
            <td>
                <?= !empty($reduccion)
                    ? $reduccion['nombre'].' (-'.$reduccion['precio'].' €)'
                    : 'Sin reducción' ?>
            </td>
        </tr>

    </table>

</div>

<?php
$total = $curs['precio'];

if(!empty($bonificacion)){
    $total -= $bonificacion['precio'];
}

if(!empty($reduccion)){
    $total -= $reduccion['precio'];
}

if($total < 0){
    $total = 0;
}
?>

<div class="total">

TOTAL PAGADO: <?= number_format($total,2) ?> €

</div>

<div class="footer">

Este recibo confirma la matrícula oficial del alumno en el sistema académico.<br>
Documento válido sin firma física.

</div>

</body>
</html>