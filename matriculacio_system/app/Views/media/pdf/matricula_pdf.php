<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<style>

body{
    font-family: DejaVu Sans, sans-serif;
    font-size: 11px;
    color:#222;
}

.ticket{
    border:2px solid #2c3e50;
    padding:18px;
}

.header{
    text-align:center;
    border-bottom:2px solid #2c3e50;
    padding-bottom:10px;
    margin-bottom:15px;
}

.title{
    font-size:18px;
    font-weight:bold;
}

.subtitle{
    font-size:11px;
    color:#666;
}

.box{
    border:1px solid #ddd;
    padding:8px;
    margin-bottom:10px;
}

.section-title{
    font-weight:bold;
    margin-top:10px;
    margin-bottom:5px;
    background:#f2f4f7;
    padding:5px;
}

.row{
    display:block;
    margin-bottom:4px;
}

.label{
    font-weight:bold;
}

.total{
    font-size:16px;
    font-weight:bold;
    color:#1e8449;
    text-align:right;
    margin-top:15px;
    border-top:1px solid #ddd;
    padding-top:10px;
}

.bank{
    margin-top:15px;
    border:1px dashed #999;
    padding:10px;
    font-size:10px;
}

.id{
    text-align:right;
    font-size:10px;
    color:#777;
}

</style>
</head>

<body>

<div class="ticket">

    

    <div class="header">
        <div class="title">JUSTIFICANTE OFICIAL DE MATRÍCULA</div>
        <div class="subtitle">Centro educativo - Documento válido como recibo</div>
    </div>

    <div class="section-title">DATOS DEL ALUMNO</div>
    <div class="box">
        <?= $alumne['Nom_alumne'] ?> <?= $alumne['Cognom_alumne'] ?><br>
        DNI: <?= $alumne['Dni_alumne'] ?><br>
        Email: <?= $alumne['correo_alumne'] ?><br>
        Tel: <?= $alumne['tlf_alumne'] ?><br>
        Dirección: <?= $alumne['domicili'] ?>, <?= $alumne['poblacio'] ?>
    </div>

    <div class="section-title">DATOS DEL CURSO</div>
    <div class="box">
        <?= $curs['Nom_curs'] ?><br>
        Código: <?= $curs['codigo_curs'] ?><br>
        Precio base: <?= $curs['precio'] ?> €
    </div>

    <div class="section-title">DESGLOSE ECONÓMICO</div>
    <div class="box">

        <div class="row">Precio base: <?= $curs['precio'] ?> €</div>

        <?php if($bonificacion): ?>
        <div class="row">Bonificación: -<?= $bonificacion['precio'] ?> €</div>
        <?php endif; ?>

        <?php if($reduccion): ?>
        <div class="row">Reducción: -<?= $reduccion['precio'] ?> €</div>
        <?php endif; ?>

        <div class="total">
            TOTAL PAGADO: <?= number_format($total,2) ?> €
        </div>

    </div>

    <div class="bank">
        ENTIDAD: 0415876<br>
        CONCEPTO: MATRÍCULA ALUMNOS<br>
        FECHA: <?= date('d/m/y') ?>
    </div>

</div>

</body>
</html>