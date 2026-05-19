<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>pagos de la matricula 

     <div class="card mb-4 border-0 bg-light">

                <div class="card-body">

                    <h5 class="mb-3">
                        Resumen de matrícula
                    </h5>

                    <ul class="list-group">

                        <li class="list-group-item d-flex justify-content-between">
                            <span>Alumno</span>
                            <strong><?= esc($alumne['Nom_alumne']) ?></strong>
                        </li>

                        <li class="list-group-item d-flex justify-content-between">
                            <span>Email</span>
                            <strong><?= esc($alumne['correo_alumne']) ?></strong>
                        </li>

                        <li class="list-group-item d-flex justify-content-between">
                            <span>Curso</span>
                            <strong><?= esc($curs['Nom_curs']) ?></strong>
                        </li>

                        <li class="list-group-item d-flex justify-content-between">
                            <span>Código curso</span>
                            <strong><?= esc($curs['codigo_curs']) ?></strong>
                        </li>

    </h1>
</body>
</html>