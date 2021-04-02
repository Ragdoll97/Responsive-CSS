<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ url('/static/css/web.css?v' . time()) }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
    <header>
        <a href="#" class="logo">Tecitos<span><i class="fa fa-coffee" aria-hidden="true"></i></span></a>
        <div class="menuToggle" onclick="menuToggle();"></div>
        <ul class="navigation" >
            <li><a href="#banner" onclick="menuToggle();">Inicio</a></li>
            <li><a href="#about" onclick="menuToggle();">Sobre Nosotros</a></li>
            <li><a href="#menu" onclick="menuToggle();">Menu</a></li>
            <li><a href="#ingredient" onclick="menuToggle();">Nuestros Ingredientes</a></li>
            <li><a href="#testimonial" onclick="menuToggle();">Testimonios</a></li>
            <li><a href="#contact" onclick="menuToggle();">Contactanos</a></li>
        </ul>
    </header>
    <section class="banner" id="banner">
        <div class="content">
            <h2>Tecitos hechos por niña tecito</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet adipisci exercitationem deleniti laudantium, molestias aperiam quam quos deserunt quas mollitia. Libero excepturi deserunt doloribus molestiae enim pariatur, maxime itaque! Sed!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit nesciunt aspernatur laborum porro saepe fugit asperiores provident eius dicta? Vitae, dignissimos rem totam libero accusantium molestias reiciendis perferendis beatae vero.
            </p>
            <a href="#" class="btn">Nuestros productos</a>
        </div>
    </section>

    <section class="about" id="about">
        <div class="row">
            <div class="col51">
                <div class="title"></div>
                <h2 class="titleText"><span>S</span>obre Nosotros</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit, quaerat nulla cum libero corporis magni ratione recusandae officia temporibus voluptates enim minus similique atque ullam, quas dicta! Molestias, consequatur harum.
                <br><br>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam deserunt inventore accusantium, error ab consectetur, in porro id quod earum quisquam. Neque magni praesentium nemo natus, qui dolore! Obcaecati, molestias!
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non, consectetur necessitatibus fuga aperiam culpa a nulla doloribus minus earum? Ab doloremque molestias     nihil, tenetur rem nisi adipisci laudantium magni sint?
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo est illum unde, dolores dolorem magni quod cumque nostrum eligendi! Nulla consequuntur quas      debitis     temporibus tempora aperiam quo labore quasi enim?
                <br><br>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem, nihil, enim nesciunt autem est perferendis quam eveniet eligendi quas atque optio sunt quaerat quis iure, id officia aspernatur ex veniam?</p>
            </div>
            <div class="col51">
                <div class="imgbox">
                    <img src="/images/img-tea2.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="menu" id="menu">
        <div class="title">
            <h2 class="titleText">Nuestro <span>M</span>enu</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="content">
            <div class="box">
                <div class="imgbox">
                    <img src="/images/tea-lemon.jpg" alt="">
                </div>
                <div class="text">
                    <h3>Té de limón y naranja</h3>
                </div>
            </div>

            <div class="box">
                <div class="imgbox">
                    <img src="/images/tea-herbs.jpg" alt="">
                </div>
                <div class="text">
                    <h3>Té de Hierbas Especiales</h3>
                </div>
            </div>
            <div class="box">
                <div class="imgbox">
                    <img src="/images/tea-flower.jpg" alt="">
                </div>
                <div class="text">
                    <h3>Té con distintas variedades de flores</h3>
                </div>
            </div>

            <div class="box">
                <div class="imgbox">
                    <img src="/images/cake.jpg" alt="">
                </div>
                <div class="text">
                    <h3>Pastel de chocolate</h3>
                </div>
            </div>
            <div class="box">
                <div class="imgbox">
                    <img src="/images/berry-cake.jpg" alt="">
                </div>
                <div class="text">
                    <h3>Pastel de frutos rojos</h3>
                </div>
            </div>

            <div class="box">
                <div class="imgbox">
                    <img src="/images/coffe.jpg" alt="">
                </div>
                <div class="text">
                    <h3>Café de moka</h3>
                </div>
            </div>

            <div class="box">
                <div class="imgbox">
                    <img src="/images/cupcake.jpg" alt="">
                </div>
                <div class="text">
                    <h3>Cupcakes deliciosos</h3>
                </div>
            </div>

            <div class="box">
                <div class="imgbox">
                    <img src="/images/macaron.jpg" alt="">
                </div>
                <div class="text">
                    <h3>Ricos macarons para acompañar</h3>
                </div>
            </div>
        </div>
        <div class="title">
            <a href="#" class="btn">Ver Todo</a>
        </div>
    </section>

    <section class="ingredient" id="ingredient">
        <div class="title">
            <h2 class="titleText"><span>N</span>estros Mejores <span>I</span>ngredientes</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="content">
            <div class="box">
                <div class="imgbox">
                    <img src="/images/coffee3.jpg" alt="">
                </div>
                <div class="text">
                    <h3>Tostamos nuestros propios granos</h3>
                </div>
            </div>
            <div class="box">
                <div class="imgbox">
                    <img src="/images/tea2.jpg" alt="">
                </div>
                <div class="text">
                    <h3>Ofrecemos gran variedad de Té</h3>
                </div>
            </div>
            <div class="box">
                <div class="imgbox">
                    <img src="/images/ingredient2.jpg" alt="">
                </div>
                <div class="text">
                    <h3>Los mejores ingredientes para nuestra repostería</h3>
                </div>
            </div>
            <div class="box">
                <div class="imgbox">
                    <img src="/images/coffee4.jpg" alt="">
                </div>
                <div class="text">
                    <h3>Ofrecemos granos de café a granel</h3>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials" id="testimonials">
        <div class="title white">
            <h2 class="titleText"><span>T</span>estimonios de nuestros <span>C</span>lientes</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="content">
            <div class="box">
                <div class="imgbox">
                    <img src="/images/woman.jpg" alt="">
                </div>
                <div class="text">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat iste quam, a recusandae, ut voluptatibus nihil modi repudiandae odio minus obcaecati ad tempore placeat debitis deserunt necessitatibus cum ratione officia?</p>
                    <h3>Algúna Persona</h3>
                </div>
            </div>

            <div class="box">
                <div class="imgbox">
                    <img src="/images/guy.jpg" alt="">
                </div>
                <div class="text">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat iste quam, a recusandae, ut voluptatibus nihil modi repudiandae odio minus obcaecati ad tempore placeat debitis deserunt necessitatibus cum ratione officia?</p>
                    <h3>Algúna Persona</h3>
                </div>
            </div>

            <div class="box">
                <div class="imgbox">
                    <img src="/images/woman2.jpg" alt="">
                </div>
                <div class="text">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat iste quam, a recusandae, ut voluptatibus nihil modi repudiandae odio minus obcaecati ad tempore placeat debitis deserunt necessitatibus cum ratione officia?</p>
                    <h3>Algúna Persona</h3>
                </div>
            </div>
        </div>
    </section>
    
    <section class="contact" id="contact">
        <div class="title">
            <h2 class="titleText"><span>C</span>ontactanos</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.?</p>
        </div>
        <div class="contactForm">
            <h3>Enviar Mensaje</h3>
            <div class="inputBox">
                <input type="text" placeholder="Nombre">
            </div>
            <div class="inputBox">
                <input type="text" placeholder="Correo Electronico">
            </div>
            <div class="inputBox">
                <textarea placeholder="Name"></textarea>
            </div>
            <div class="inputBox">
                <input type="submit" value="Enviar">
            </div>
        </div>
    </section>

    <script type="text/javascript">
    window.addEventListener('scroll', function(){
        const header = document.querySelector('header');
        header.classList.toggle("sticky", window.scrollY > 0);
        
    });
    function menuToggle(){
        const menuToggle = document.querySelector('.menuToggle');
        const navigation = document.querySelector('.navigation');
        menuToggle.classList.toggle('active');
        navigation.classList.toggle('active');
    }
    </script>
</body>
</html>