<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portafolio Personal</title>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
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
                    <p>Ofrezco un ambiente de confianza y transparencia en todo el desarrollo del proyecto, tomaré importancia a cada petición del cliente, cumpliendo con sus expectativas al máximo.</p>
                    <p>Puedes contactarme por medio de mis redes, incluidas aquí abajo.</p>
                    <a href="#about" class="btn btn-1">Sobre Mi
                        <span></span><span></span><span></span><span></span>
                    </a>
 
                </div>
                <ul class="sci">
                    <li><a href="https://github.com/Ragdoll97"> <i class="fa fa-github" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/danilosoto97/"> <i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.facebook.com/Danilo.Soto97/"> <i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </section>

        <section class="about" id="about">
            <div class="title white">
                <h2>Sobre Mi</h2>
                <p>Soy ex-Alumno titulado de INACAP, estudíe analista programador, actualmente me he inclinado al desarrollo web, ya que me encanta diseñar paginas, de igual forma me gusta otorgar funcionalidades a las mismas.</p>
            </div>
            <div class="content">
                <div class="textBox">
                    <p>
                        <span>°</span> Puedo diseñar desde paginas informativas, hasta paginas complejas que contengan carrito de compras y pasarela de pagos. De igual forma puedo implementar funcionalidades a alguna web que lo requiera, por ejemplo, registro de datos, Inició de sesión, registro de usuarios, entre otras muchas cosas, solo pidelo y lo haré realidad. 
                        <br><br>
                        <span>°</span> Me gusta estar siempre en contacto con mis clientes, con la finalidad de entregar un producto a la altura del mismo e implementar los cambios que sean necesarios
                        <br><br>
                        <span>°</span> Trabajo utilizando <span>HTML</span>, <span>CSS</span>, <span>Bootstrap</span>, <span>Javascript</span>, <span>PHP</span>, <span>Laravel</span>
                        <br>
                        <span>°</span> Tambien cuento con experiencia en <span>Java</span>, <span>C#</span> y <span>Python</span>.
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
                <br><br>
            </div>
            <div class="content">
                <div class="servicesBox">
                    <img src="/images/icon1.png" alt="">
                    <h2>Diseño Web</h2>
                    <p> Diseño tu pagina web desde cero.</p>
                        <br>
                    <p> Tú elijes el diseño.</p>
                        <br>
                    <p> Disponibilidad 24/7 por consultas.</p>
                        <br>
                    <p>Precios Accesibles.</p>
                    
                </div>
                <div class="servicesBox">
                    <img src="/images/icon2.png" alt="">
                    <h2>Programación Back-End</h2>
                    <p>¿Tú pagina necesita registrar usuario? Yo lo puedo implementar.</p>
                    <br>
                    <p>¿Tú pagina necesita agregar nuevas funciones de seguridad? Dejamelo a mi.</p>
                    <br>
                    <p>¿Necesitas filtrar tipos de usuarios? Lo haré posible.</p>
                </div>
                <div class="servicesBox">
                    <img src="/images/icon1.png" alt="">
                    <h2>Programación Front-End</h2>
                    <p>Puedo mejorar el aspecto de tu web.</p>
                    <br>
                    <p>Puedo agregar nuevas animaciones, para que sea mas atractiva.</p>
                    <br>
                    <p>Si lo puedes imaginar, yo lo puedo añadir.</p>
                </div>
            </div>
        </section>

        <section class="works" id="works">
            <div class="title">
                <h2>Mis Proyectos</h2>
                <p>Estos son algunos de los proyectos hechos hasta la fecha.</p>
            </div>
            <div class="content">
                <div class="workBox">
                    <div class="imgBox">
                        <img src="/images/TeaWeb.jpg" alt="">
                    </div>
                    <div class="textBox">
                        
                        <a href="{{url('/ResponsiveWeb')}}"><h3>Web informativa sobre infusiones de té</h3></a>
                    </div>
                </div>
                <div class="workBox">
                    <div class="imgBox">
                        <img src="/images/Login.jpg" alt="">
                    </div>
                    <div class="textBox">
                        <a href="{{url('/Login')}}"><h3>Inicio de sesión funcional</h3></a>
                    </div>
                </div>
                <div class="workBox">
                    <div class="imgBox">
                        <img src="/images/Css.jpg" alt="">
                    </div>
                    <div class="textBox">
                        <a href="{{url('/CssWeb')}}"><h3>Css utilizado para pobrar el modo oscuro</h3></a>
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
                <p>Puedes contactarme siempre que lo requieras, estoy atento a mis redes de forma regular.</p>
                
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
                    <div class="col100 ">
                        <input type="submit" value="Enviar">
                        <span></span><span></span><span></span><span></span>
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