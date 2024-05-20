<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <div class="nav">
        <div class="nav__title">
            <img src="img/Logo_standar.png" alt="" class="nav__title--logo">
            <a href="" class="nav__title--link">Zubare</a>
        </div>
        <ul class="nav__menu">
            <div class="nav__menu--item">
                <li class="nav__menu--button">
                    <a href="#" class="nav__menu--link">Inicio</a>
                </li>
            </div>
            <div class="nav__menu--item nav__menu--item__click" id="servicios">
                <li class="nav__menu--button" id="button__servicios">
                    <a href="#" class="nav__menu--link">Servicios</a>
                    <img src="img/arrow.svg" alt="" class="nav__menu--arrow">
                </li>
                <ul class="submenu" id="submenu__servicios" >
                    <li class="submenu__item">
                        <a href="#" class="submenu__item--link">Servicio</a>
                    </li>
                    <li class="submenu__item">
                        <a href="#" class="submenu__item--link">Servicio</a>
                    </li>
                    <li class="submenu__item">
                        <a href="#" class="submenu__item--link">Servicio</a>
                    </li>
                </ul>
            </div>
            <div class="nav__menu--item">
                <li class="nav__menu--button">
                    <a href="#" class="nav__menu--link">Nosotros</a>
                </li>
            </div>
            <div class="nav__menu--item nav__menu--item__click" id="contacto">
                <li class="nav__menu--button" id="button__contacto">
                    <a href="#" class="nav__menu--link">Contacto</a>
                    <img src="img/arrow.svg" alt="" class="nav__menu--arrow">
                </li>
                <ul class="submenu" id="submenu__contacto">
                    <li class="submenu__item">
                        <a href="#" class="submenu__item--link">Servicio</a>
                    </li>
                    <li class="submenu__item">
                        <a href="#" class="submenu__item--link">Servicio</a>
                    </li>
                    
                </ul>
            </div>
        </ul>
    </div>
    <script src="efectos.js"></script>
</body>

</html>