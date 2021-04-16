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
                <img src="/images/1bg.jpg" alt="">
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
            <div class="title white">
                <h2>Sobre Mi</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem magnam ad illum nam cumque, dolorem alias at fugit libero eaque id odit cum voluptatibus non. Similique itaque officia recusandae aperiam.</p>
            </div>
            <div class="content">
                <div class="textBox">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, amet, dolore unde delectus nisi eos alias dolor soluta autem temporibus, repellat corporis? Commodi totam explicabo saepe quod magnam voluptas unde!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae eos ipsa ab iusto minus. Fugiat ea possimus veniam expedita amet mollitia aperiam minima odio, natus vero consequuntur cum autem quasi.
                        <br><br>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae nihil odio magnam hic rem libero neque autem placeat in molestiae sunt nam, totam quis numquam sit, voluptatum, repellat ipsa exercitationem?
                    </p>
                </div>
                <div class="imgBox">
                    <img src="/images/2bg.jpg" alt="">
                </div>
            </div>
        </section>

        <section class="services" id="services">
            <div class="title ">
                <h2>¿Qué Servícios Ofrezco?</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae quod ullam, dolores aut quaerat at illo esse ipsa id saepe rem molestiae enim. Quam perferendis earum, iure eveniet aut a!</p>
            </div>
            <div class="content">
                <div class="servicesBox">
                    <img src="/images/icon1.png" alt="">
                    <h2>Diseño Web</h2>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem, quam reprehenderit, blanditiis hic quis esse, iusto commodi facilis officia cupiditate tempora perspiciatis. Similique quia illum tempore dolore quod laborum? Obcaecati.
                    </p>
                </div>
                <div class="servicesBox">
                    <img src="/images/icon2.png" alt="">
                    <h2>Programación Back-End</h2>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem, quam reprehenderit, blanditiis hic quis esse, iusto commodi facilis officia cupiditate tempora perspiciatis. Similique quia illum tempore dolore quod laborum? Obcaecati.
                    </p>
                </div>
                <div class="servicesBox">
                    <img src="/images/icon1.png" alt="">
                    <h2>Diseño Web</h2>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem, quam reprehenderit, blanditiis hic quis esse, iusto commodi facilis officia cupiditate tempora perspiciatis. Similique quia illum tempore dolore quod laborum? Obcaecati.
                    </p>
                </div>
                <div class="servicesBox">
                    <img src="/images/icon2.png" alt="">
                    <h2>Programación Back-End</h2>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem, quam reprehenderit, blanditiis hic quis esse, iusto commodi facilis officia cupiditate tempora perspiciatis. Similique quia illum tempore dolore quod laborum? Obcaecati.
                    </p>
                </div>
            </div>
        </section>

        <section class="works" id="works">
            <div class="title">
                <h2>Mis Proyectos</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, saepe at mollitia velit fugiat quas delectus deserunt voluptate asperiores perspiciatis tempore voluptatem perferendis ipsam iste quasi nulla voluptates? Facilis, voluptatem?</p>
            </div>
            <div class="content">
                <div class="workBox">
                    <div class="imgBox">
                        <img src="/images/unnamed.jpg" alt="">
                    </div>
                    <div class="textBox">
                        <h3>Proyecto - Nombre</h3>
                    </div>
                </div>
                <div class="workBox">
                    <div class="imgBox">
                        <img src="/images/unnamed.jpg" alt="">
                    </div>
                    <div class="textBox">
                        <h3>Proyecto - Nombre</h3>
                    </div>
                </div>
                <div class="workBox">
                    <div class="imgBox">
                        <img src="/images/unnamed.jpg" alt="">
                    </div>
                    <div class="textBox">
                        <h3>Proyecto - Nombre</h3>
                    </div>
                </div>
                <div class="workBox">
                    <div class="imgBox">
                        <img src="/images/unnamed.jpg" alt="">
                    </div>
                    <div class="textBox">
                        <h3>Proyecto - Nombre</h3>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact" id="contact">
            <div class="title white">
                <h2>Contactame</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos quam ullam aliquid, ipsum tempore deserunt, rerum voluptate labore ex modi hic, odio saepe voluptas laborum voluptatibus. Magni quaerat praesentium iusto?</p>
            </div>
            <div class="contactForm">
                <div class="row">
                    <div class="col50">
                        <input type="text" name="" placeholder="Nombre">
                    </div>
                    <div class="col50">
                        <input type="text" name="" placeholder="Apellido">
                    </div>
                </div>

                <div class="row">
                    <div class="col50">
                        <input type="text" name="" placeholder="Correo Electronico">
                    </div>
                    <div class="col50">
                        <input type="text" name="" placeholder="Numero Contacto">
                    </div>
                </div>

                <div class="row">
                    <div class="col100">
                       <textarea placeholder="Mensaje"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col100">
                        <input type="submit" value="Enviar">
                    </div>
                </div>

            </div>
        </section>


        <div class="sidebar">
            <ul class="menu">
                <li><a href="#home" onclick="ToggleMenu();">Inicio</a></li>
                <li><a href="#about" onclick="ToggleMenu();">Sobre Mi</a></li>
                <li><a href="#services" onclick="ToggleMenu();">Servicios</a></li>
                <li><a href="#works" onclick="ToggleMenu();">Mis Proyectos</a></li>
                <li><a href="#contact" onclick="ToggleMenu();">Contacto</a></li>
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