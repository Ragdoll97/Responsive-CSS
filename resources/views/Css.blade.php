<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>Document</title>
    <link rel="stylesheet" href="{{ url('/static/css/style.css?v' . time()) }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
    <div class="toggle"></div>
    <div class="container">
        <div class="card">
            <div class="box">
                <div class="content">
                    <div class="icon"><i class="fa fa-paper-plane" aria-hidden="true"></i></div>
                        <h3>Plan Basico</h3>
                        <h4><sup>$</sup>10000</h4>
                        <ul>
                            <li><i class="fa fa-check" aria-hidden="true"></i>
                                10 GB de Espacio</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>
                                3 Nombres para Dominios</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>
                                10 direcciones de Email</li>
                            <li><i class="fa fa-times" aria-hidden="true"></i>
                                Soporte 24/7</li>
                        </ul>
                        <a href="#">Contrar Ahora</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="box">
                <div class="content">
                    <div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
                        <h3>Estandart</h3>
                        <h4><sup>$</sup>25000</h4>
                        <ul>
                            <li><i class="fa fa-check" aria-hidden="true"></i>
                                50 GB de Espacio</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>
                                6 Nombres para Dominios</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>
                                20 direcciones de Email</li>
                            <li><i class="fa fa-times" aria-hidden="true"></i>
                                Soporte 24/7</li>
                        </ul>
                        <a href="#">Contrar Ahora</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="box">
                <div class="content">
                    <div class="icon"><i class="fa fa-rocket" aria-hidden="true"></i></div>
                        <h3>Profesional</h3>
                        <h4><sup>$</sup>50000</h4>
                        <ul>
                            <li><i class="fa fa-check" aria-hidden="true"></i>
                                100 GB de Espacio</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>
                                10 Nombres para Dominios</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>
                                50 direcciones de Email</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>
                                Soporte 24/7</li>
                        </ul>
                        <a href="#">Contrar Ahora</a>
                </div>
            </div>
        </div>
    </div>
    <script>
        const body = document.querySelector('body');
        document.querySelector('.toggle').onclick = function(){
            body.classList.toggle('light')
        }
    </script>
</body>
</html>