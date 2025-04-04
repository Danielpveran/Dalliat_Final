<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dalliat</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://unpkg.com/@formkit/auto-animate"></script>
</head>
<body>
    <header class="header">
        <div class="menu container">
            <a href="" class="logo">Dalliat</a>
            <input type="checkbox" id="menu" />
            <label for="menu">
                    <img src="img/menu.png" class="menu-icono" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Servicio</a></li>
                    <li><a href="#">productos</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </nav>
            <div>
                <ul>
                    <li class="submenu">
                        <img src="img/car.svg" id="img-carrito" alt="carrito">
                        <div id="carrito">
                            <table id="lista-carrito">
                                <thead>
                                    <tr>
                                        <th>imagen</th>
                                        <th>nombre</th>
                                        <th>precio</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                            <a href="#" id="vaciar-carrito" class="btn-2">Vaciar carrito</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="header-content Container">
            <div class="header-img">
                <img src="img/right.png" alt="">
            </div>
            <div class="header-txt">
                <h1>Ofertas Especiales</h1>
                <p>estrena las mejores prendas</p>
                <a href="" class="btn-1">informacion</a>
            </div>
        </div>
    </header>


    <!-- Fin del header -->


    <section class="ofert">
        <div class="ofert-1">
            <div class="ofert-img">
                <img src="img/f1.png" alt="">
            </div>
            <div class="odert-txt">
                <h3>producto 1</h3>
                <a href="#" class="btn-2">informacion</a>
            </div>
        </div>


        <div class="ofert-1">
            <div class="ofert-img">
                <img src="img/f2.png" alt="">
            </div>
            <div class="odert-txt">
                <h3>producto 2</h3>
                <a href="#" class="btn-2">informacion</a>
            </div>
        </div>


        <div class="ofert-1">
            <div class="ofert-img">
                <img src="img/f3.png" alt="">
            </div>
            <div class="odert-txt">
                <h3>producto 2</h3>
                <a href="#" class="btn-2">informacion</a>
            </div>
        </div>
    </section>


    <main class="products container" id="lista-1">
        <h2>productos</h2>

        <div class="product-content">
            <div class="product">
                <img src="img/1.png" alt="">
                <div class="product-txt">
                    <h3>Shein</h3>
                    <p>calidad premium</p>
                    <p class="precio">$200</p>
                    <a href="#" class="agregar-carrito btn-2" data-id="1">Agregar al carrito</a>
                </div>
            </div>


            <div class="product">
                <img src="img/2.png" alt="">
                <div class="product-txt">
                    <h3>Elysium</h3>
                    <p>calidad premium</p>
                    <p class="precio">$200</p>
                    <a href="#" class="agregar-carrito btn-2" data-id="2">Agregar al carrito</a>
                </div>
            </div>


            <div class="product">
                <img src="img/3.png" alt="">
                <div class="product-txt">
                    <h3>Elysium</h3>
                    <p>calidad premium</p>
                    <p class="precio">$200</p>
                    <a href="#" class="agregar-carrito btn-2" data-id="3">Agregar al carrito</a>
                </div>
            </div>


            <div class="product">
            <img src="img/4.png" alt="">
            <div class="product-txt">
                <h3>Elysium</h3>
                <p>calidad premium</p>
                <p class="precio">$200</p>
                <a href="#" class="agregar-carrito btn-2" data-id="4">Agregar al carrito</a>
            </div>
            </div>


            <div class="product">
            <img src="img/5.png" alt="">
            <div class="product-txt">
                <h3>Elysium</h3>
                <p>calidad premium</p>
                <p class="precio">$200</p>
                <a href="#" class="agregar-carrito btn-2" data-id="5">Agregar al carrito</a>
            </div>
            </div>


            <div class="product">
                <img src="img/6.png" alt="">
                <div class="product-txt">
                    <h3>Elysium</h3>
                    <p>calidad premium</p>
                    <p class="precio">$100</p>
                    <a href="#" class="agregar-carrito btn-2" data-id="6">Agregar al carrito</a>
                </div>
            </div>

        </div>

    </main>

    <!-- fin del main -->

    <section class="icons container">

        <div class="icon-1">
            <div class="icon-img">
                <img src="img/i1.svg" alt="">
            </div>

            <div class="icon-txt">
                <h3>Lo mejor este verano</h3>
            </div>
            <p>
                Promociones en trajes de baño
            </p>
        </div>


        <div class="icon-1">
            <div class="icon-img">
                <img src="img/i2.svg" alt="">
            </div>

            <div class="icon-txt">
                <h3>tendencias</h3>
            </div>
            <p>
                Prueba lo ultimo de la moda
            </p>
        </div>


        <div class="icon-1"> 
            <div class="icon-img">
                <img src="img/i3.svg" alt="">
            </div>

            <div class="icon-txt">
                <h3>En sintonia con el ambiente</h3>
            </div>
            <p>
                Tenemos lo ultimo en telas biodegradables
            </p>
        </div>
    </section>

    <!-- Fin seccion de iconos -->

    <section class="blog container">

        <div class="blog-1">
            <img src="img/b1.jpg" alt="">
            <h3>Blog  1</h3>
            <p>
                Lo ultimo en telas de alta calidad producidas en bogota
            </p>
        </div>

        <div class="blog-1">
            <img src="img/b2.jpg" alt="">
            <h3>Blog  2</h3>
            <p>
                Textiles producidos por emprendedores locales
            </p>
        </div>


        <div class="blog-1">
            <img src="img/b3.jpg" alt="">
            <h3>Blog  3</h3>
            <p>
                Lo mejor solo para ti
            </p>
        </div>
    </section>


    <!-- pie de pagina -->

    <footer class="footer">
        <div class="footer-content container">
                <div class="link">
                    <h3>Lorem</h3>
                    <ul>
                            <li><a href="#">lorem</a></li>
                            <li><a href="#">lorem</a></li>
                            <li><a href="#">lorem</a></li>
                            <li><a href="#">lorem</a></li>
                    </ul>
                </div>
                


                <div class="link">
                    <h3>Lorem</h3>
                    <ul>
                            <li><a href="#">lorem</a></li>
                            <li><a href="#">lorem</a></li>
                            <li><a href="#">lorem</a></li>
                            <li><a href="#">lorem</a></li>
                    </ul>
                </div>


                <div class="link">
                    <h3>Lorem</h3>
                    <ul>
                            <li><a href="#">lorem</a></li>
                            <li><a href="#">lorem</a></li>
                            <li><a href="#">lorem</a></li>
                            <li><a href="#">lorem</a></li>
                    </ul>
                </div>
                <div class="link">
                    <h3>Lorem</h3>
                    <ul>
                            <li><a href="#">lorem</a></li>
                            <li><a href="#">lorem</a></li>
                            <li><a href="#">lorem</a></li>
                            <li><a href="#">lorem</a></li>
                    </ul>
                </div>
        </div>

    </footer>
    <script src="js/script.js"></script>
</body>
</html>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido - Dalliat</title>
    <a href="php/cerrar_sesion.php">Cerrar sesion</a>
</head>
<body>
    <h1>Dalliat</h1>
</body>
</html>