<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <link rel="stylesheet" href="{{ url('/static/css/style.css?v' . time()) }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
    <body class="mtop48">
        <section>
            <div class="containerLogin ">
                <div class="user SignInBox">
                    <div class="imgBox"><img src="/images/img1.png"  alt=""> </div>
                    <div class="formBox">
                        <form>
                            <h2>Iniciar Sesión</h2>
                            <input type="text" placeholder="Nombre Usuario">
                            <input type="number" placeholder="Contraseña">
                            <input type="submit" value="Iniciar Sesión">
                            <p class="signup">¿No tienes una cuenta? Registrate! <a href="#" onclick="toggleForm();">Crear Cuenta</a></p>
                        </form>
                    </div>
                </div>
                <div class="user SignUpBox">
                    
                    <div class="formBox">
                        <form>
                            <h2>Crea una Cuenta</h2>
                            <input type="text" placeholder="Nombre Usuario">
                            <input type="text" placeholder="Correo Electronico">
                            <input type="number" placeholder="Crear Contraseña">
                            <input type="number" placeholder="Confirmar Contraseña">
                            <input type="submit" value="Crear Cuenta">
                            <p class="signup">¿Ya Tienes una cuenta? Inicia Sesión! <a href="#" onclick="toggleForm();">Iniciar Sesión</a></p>
                        </form>
                    </div>
                    <div class="imgBox"><img src="/images/img2.jpg"  alt=""> </div>
                </div>
            </div>
        </section>
        <script>
            function toggleForm(){
                body = document.querySelector('body');
                containerLogin = document.querySelector('.containerLogin');
                containerLogin.classList.toggle('active');
                body.classList.toggle('active');
            }
        </script>
    </body>
</html>