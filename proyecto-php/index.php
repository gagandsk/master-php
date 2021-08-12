<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Blog de One Piece</title>
</head>

<body>
    <!--CABECERA-->
    <header id="cabecera">
        <!--LOGO-->
        <div id="logo">
            <a href="index.php">
                One Piece
            </a>
        </div>

        <!--MENU-->
        <nav id="menu">
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="">Categoria 1</a></li>
                <li><a href="">Categoria 2</a></li>
                <li><a href="">Categoria 3</a></li>
                <li><a href="">Categoria 4</a></li>
                <li><a href="">Sobre mi</a></li>
                <li><a href="">Contacto</a></li>
            </ul>
        </nav>
        <div class="clearfix"></div>
    </header>

    <div id="contenedor">
        <!--BARRA LATERAL-->
        <aside id="sidebar">
            <div id="login" class="bloque">
                <h3>Identificate</h3>
                <form action="login.php" method="POST">
                    <label for="email">Email</label>
                    <input type="email" name="email" />

                    <label for="password">Contraseña</label>
                    <input type="password" name="password" />

                    <input type="submit" value="Entrar">
                </form>
            </div>

            <div id="register" class="bloque">
                <h3>Registrate</h3>
                <form action="registro.php" method="POST">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" />

                    <label for="apellidos">Apellidos</label>
                    <input type="text" name="apellidos" />

                    <label for="email">Email</label>
                    <input type="email" name="email" />

                    <label for="password">Contraseña</label>
                    <input type="password" name="password" />

                    <input type="submit" value="Registrar">
                </form>
            </div>
        </aside>

        <!--CAJA PRINCIPAL-->
        <div id="principal">
            <h1>Ultimas entradas</h1>
            <article class="entrada">
                <a href="">
                    <h2>Titulo de mi entrada</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate fugiat, quam eum sed blanditiis, reprehenderit magnam temporibus laborum pariatur, accusamus perferendis illo nulla! Blanditiis quae accusamus possimus. Fugiat, sint molestiae?</p>
                </a>
            </article>
            <article class="entrada">
                <a href="">
                    <h2>Titulo de mi entrada</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate fugiat, quam eum sed blanditiis, reprehenderit magnam temporibus laborum pariatur, accusamus perferendis illo nulla! Blanditiis quae accusamus possimus. Fugiat, sint molestiae?</p>
                </a>
            </article>
            <article class="entrada">
                <a href="">
                    <h2>Titulo de mi entrada</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate fugiat, quam eum sed blanditiis, reprehenderit magnam temporibus laborum pariatur, accusamus perferendis illo nulla! Blanditiis quae accusamus possimus. Fugiat, sint molestiae?</p>
                </a>
            </article>
            <article class="entrada">
                <a href="">
                    <h2>Titulo de mi entrada</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate fugiat, quam eum sed blanditiis, reprehenderit magnam temporibus laborum pariatur, accusamus perferendis illo nulla! Blanditiis quae accusamus possimus. Fugiat, sint molestiae?</p>
                </a>
            </article>
            <article class="entrada">
                <a href="">
                    <h2>Titulo de mi entrada</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate fugiat, quam eum sed blanditiis, reprehenderit magnam temporibus laborum pariatur, accusamus perferendis illo nulla! Blanditiis quae accusamus possimus. Fugiat, sint molestiae?</p>
                </a>
            </article>
            <article class="entrada">
                <a href="">
                    <h2>Titulo de mi entrada</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate fugiat, quam eum sed blanditiis, reprehenderit magnam temporibus laborum pariatur, accusamus perferendis illo nulla! Blanditiis quae accusamus possimus. Fugiat, sint molestiae?</p>
                </a>
            </article>
            <div id="ver-todas"><a href="">Ver todas las entradas</a></div>
        </div>
        <div class="clearfix"></div>
    </div>


    <!--PIE DE PÁGINA-->
    <footer id="pie">
        <p>Desarollado por Gagandeep Dass &copy; 2021</p>
    </footer>
</body>

</html>