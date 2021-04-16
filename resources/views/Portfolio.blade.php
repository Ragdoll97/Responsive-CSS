<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portafolio Personal</title>
    <link rel="stylesheet" href="{{ url('/static/css/portfolio.css?v' . time()) }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
        <div class="toggle" onclick="ToggleMenu();"> </div>
        

        <section class="banner" id="home">
            <div class="imgSidebar">
                <img src="/images/img1.png" alt="">
            </div>
            <div class="contentBox">
                <h5 class="logoText">Mi Portafolio</h5>
                <div>
                    <h4><span>Hola</span>, Mi nombre es</h4>
                    <h2>Danilo Soto</h2>
                    <h4>Soy un desarrollador web Front-End y Back-End</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima tempore nostrum cumque iusto quis maxime voluptates laboriosam quo consequunturlibero, saepe sunt nam ad rerum accusamus vitae architecto officia odit.</p>
                    <a href="#" class="btn">Sobre Mi</a>
                </div>
                <ul class="sci">
                    <li><a href="#"> <i class="fa fa-github" aria-hidden="true"></i></a></li>
                    <li><a href="#"> <i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                    <li><a href="#"> <i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </section>

        <section class="about" id="about">
            <div class="title">
                <h2>Sobre Mi</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem magnam ad illum nam cumque, dolorem alias at fugit libero eaque id odit cum voluptatibus non. Similique itaque officia recusandae aperiam.</p>
            </div>
            <a href=""></a>
        </section>
       
        <div class="sidebar">
            <ul class="menu">
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Sobre Mi</a></li>
                <li><a href="#">Servicios</a></li>
                <li><a href="#">Mis Proyectos</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </div>


        <div class="sidenav">
            <ul>
                <li class="sidelinks sidetele">
                    <a href="#" data-toggle="tooltip" title="Telegram" rel="noopener noreferrer" target="_blank">
                        <i class="fa fa-telegram" aria-hidden="true"></i><span>Telegram</span>
                    </a>
                </li>            
                <li class="sidelinks sidefb">
                    <a href="#" data-toggle="tooltip" title="Telegram" rel="noopener noreferrer" target="_blank">
                        <i class="fa fa-facebook-square" aria-hidden="true"></i><span>Facebook</span>
                    </a>
                </li>
                <li class="sidelinks sidegit">
                    <a href="#" data-toggle="tooltip" title="GitHub" rel="noopener noreferrer" target="_blank">
                        <i class="fa fa-github" aria-hidden="true"></i><span>GitHub</span>
                    </a>
                </li>
                <li class="sidelinks sideln">
                    <a href="#" data-toggle="tooltip" title="Telegram" rel="noopener noreferrer" target="_blank">
                        <i class="fa fa-linkedin-square" aria-hidden="true"></i><span>Linkedin</span>
                    </a>
                </li>
            </ul>
        </div>

    <script>
        function ToggleMenu(){
            const menuToggle = document.querySelector('.toggle');
            const sidebar = document.querySelector('.sidebar');
            menuToggle.classList.toggle('active');
            sidebar.classList.toggle('active');
        }
    </script>
</body>
</html>