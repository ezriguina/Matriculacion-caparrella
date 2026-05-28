<!DOCTYPE html>
<html lang="ca">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Matrícula registrada</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>

        body{
            background:#f5f7ff;
            min-height:100vh;
            display:flex;
            align-items:center;
            justify-content:center;
        }

        .success-card{
            max-width:700px;
            width:100%;
            border-radius:32px;
            overflow:hidden;
        }

        .success-icon{
            width:110px;
            height:110px;
            border-radius:50%;
            background:#e8fff3;
            display:flex;
            align-items:center;
            justify-content:center;
            margin:auto;
        }

        .success-icon i{
            font-size:4rem;
            color:#39c27f;
        }

        .primary-color{
            color:#5f6ccf;
        }

        .btn-primary-custom{
            background:#5f6ccf;
            border:none;
            border-radius:14px;
            padding:0.9rem 2.2rem;
            color:white;
            transition:.2s ease;
        }

        .btn-primary-custom:hover{
            background:#4f5dc0;
            color:white;
        }

    </style>

</head>

<body>

    <div class="container py-5">

        <div class="card border-0 shadow-lg success-card mx-auto">

            <div class="card-body p-5 text-center">

                <div class="success-icon mb-4">

                    <i class="bi bi-check-circle-fill"></i>

                </div>

                <h1 class="fw-bold primary-color mb-3">
                    Matrícula registrada correctament
                </h1>

                <p class="fs-5 text-muted mb-4">

                    La teva sol·licitud de matrícula s'ha enviat amb èxit.

                </p>

                <div class="bg-light rounded-4 p-4 mb-4">

                    <p class="mb-2 fw-semibold primary-color">

                        Què passarà ara?

                    </p>

                    <p class="text-muted mb-0">

                        La secretaria revisarà i validarà la documentació enviada.
                        Quan el procés estigui complet, rebràs una notificació
                        amb els següents passos de la matrícula.

                    </p>
          
                </div>

                <a href="<?= base_url('public/login'); ?>" class="btn btn-primary-custom">
                
                    Tornar a l'inici

                </a>

            </div>

        </div>

    </div>

</body>

</html>