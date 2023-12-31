<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 2</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!--icono-->
    <script src="https://kit.fontawesome.com/41690c9fd1.js" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</head>

<nav id="nav1">
    <div class="container">
        <br>
        <div class="d-flex justify-content-between">
            <a href="menuLibros.php">
                <button class="btn btn-warning">
                    VOLVER
                </button>
            </a>
            <div id="ctn-icon-search">
            <i class="fa-solid fa-magnifying-glass fa-xl" id="icon" style="color: #dddd00;"></i>
            </div>
            <a href="librosvirtuales1.php">
                <button class="btn btn-warning">
                    PÁGINA 1
                </button>
            </a>
        </div>
    </div>
</nav>

<body>
    <div id="ctn-bars-search">
        <input type="text" id="inputSearch" placeholder="Busca por título">
    </div>

    <ul id="box-search">
        <li><a href="librosvirtuales1.php">Física 1</a></li>
        <li><a href="librosvirtuales1.php">Física 2</a></li>
        <li><a href="librosvirtuales1.php">Química 1</a></li>
        <li><a href="librosvirtuales1.php">Análisis y diseño de sistemas</a></li>
        <li><a href="librosvirtuales1.php">Sistemas y organizaciones</a></li>
        <li><a href="librosvirtuales1.php">Analisis de sistemas, diseños y metodos</a></li>
        <li><a href="librosvirtuales1.php">Geometría analítica y calculo 2</a></li>
        <li><a href="librosvirtuales1.php">Elementos de Cálculo Diferencial</a></li>
        <li><a href="librosvirtuales1.php">Cálculo diferencial e integral</a></li>
        <li><a href="librosvirtuales1.php">Cómo programar en Java</a></li>
        <li><a href="librosvirtuales1.php">Java 2</a></li>
        <li><a href="librosvirtuales1.php">Introduccion a la programación con Java</a></li>
        <li><a href="librosvirtuales2.php">Introducción a la programación con Python 3</a></li>
        <li><a href="librosvirtuales2.php">Python para todos</a></li>
        <li><a href="librosvirtuales2.php">Algoritmos y estructuras de datos en Python</a></li>
        <li><a href="librosvirtuales2.php">Bases de datos</a></li>
        <li><a href="librosvirtuales2.php">Bases de datos 1</a></li>
        <li><a href="librosvirtuales2.php">Gestion de bases de datos</a></li>
        <li><a href="librosvirtuales2.php">Desarrollo de aplicaciones web</a></li>
        <li><a href="librosvirtuales2.php">El gran libro de HMTL, CSS3 y JavaScript</a></li>
        <li><a href="librosvirtuales2.php">Diseño y desarrollo web, Análisis de casos</a></li>
        <li><a href="librosvirtuales2.php">El lengujae de programación C</a></li>
        <li><a href="librosvirtuales2.php">Caminando junto al lenguaje C</a></li>
        <li><a href="librosvirtuales2.php">Fundamentos de programación. Piensa en C</a></li>
    </ul>

    <div id="cover"></div>
    
    <div class="container mt-4 mb-4 text-center">
        <p class="title">LIBROS VIRTUALES</p>
        <br>
        <div class="estanteria">
            <h2>Estantería 5: Python</h2>
            <div class="libro" onclick="abrirPDF('IntroPy.pdf')">
                <img style="filter: brightness(85%);" src="../assets/img/IntroPy.jpg"
                    alt="Introducción a la programación con Python 3">
                <h3 class="titulo-libro">Introducción a la programación con Python 3</h3>
                <div class="libro-info">
                    <h4>Introducción a la programación con Python 3</h4>
                    <p>Autor: Andrés Marzal, Isabel Gracia</p>
                    <p>Categoría: Python</p>
                    <p>Código: 013</p>
                </div>
            </div>
            <div class="libro" onclick="abrirPDF('TodoPy.pdf')">
                <img style="filter: brightness(85%);" src="../assets/img/TodoPy.jpg" alt="Python para todos">
                <h3 class="titulo-libro">Python para todos<br>&nbsp;<br>&nbsp;</h3>
                <div class="libro-info">
                    <h4>Python para todos</h4>
                    <p>Autor: Raúl González Duque</p>
                    <p>Categoría: Python</p>
                    <p>Código: 014</p>
                </div>
            </div>
            <div class="libro" onclick="abrirPDF('AlgoPy.pdf')">
                <img style="filter: brightness(85%);" src="../assets/img/AlgoPy.jpg"
                    alt="Algoritmos y estructuras de datos en Python">
                <h3 class="titulo-libro">Algoritmos y estructuras de datos en Python</h3>
                <div class="libro-info">
                    <h4>Algoritmos y estructuras de datos en Python</h4>
                    <p>Autor: Brown, Lemay, Bursten</p>
                    <p>Categoría: Python</p>
                    <p>Código: 015</p>
                </div>
            </div>
        </div>
        <div class="estanteria">
            <h2>Estantería 6: Bases de datos</h2>
            <div class="libro" onclick="abrirPDF('BD1.pdf')">
                <img style="filter: brightness(85%);" src="../assets/img/BD1.jpg" alt="Bases de datos">
                <h3 class="titulo-libro">Bases de datos<br>&nbsp;</h3>
                <div class="libro-info">
                    <h4>Bases de datos</h4>
                    <p>Autor: Alejandro Gutiérrez Díaz</p>
                    <p>Categoría: Bases de datos</p>
                    <p>Código: 016</p>
                </div>
            </div>
            <div class="libro" onclick="abrirPDF('BD2.pdf')">
                <img style="filter: brightness(85%);" src="../assets/img/BD2.jpg" alt="Bases de datos 1">
                <h3 class="titulo-libro">Bases de datos 1<br>&nbsp;</h3>
                <div class="libro-info">
                    <h4>Bases de datos 1</h4>
                    <p>Autor: Eva Gómez Ballester, Patricio Martínez Barco</p>
                    <p>Categoría: Bases de datos</p>
                    <p>Código: 017</p>
                </div>
            </div>
            <div class="libro" onclick="abrirPDF('BD3.pdf')">
                <img style="filter: brightness(85%);" src="../assets/img/BD3.jpg" alt="Gestión de bases de datos">
                <h3 class="titulo-libro">Gestión de bases de datos</h3>
                <div class="libro-info">
                    <h4>Gestión de bases de datos</h4>
                    <p>Autor: Luis Vélez de Guevara</p>
                    <p>Categoría: Bases de datos</p>
                    <p>Código: 018</p>
                </div>
            </div>
        </div>
        <div class="estanteria">
            <h2>Estantería 7: Sitios web</h2>
            <div class="libro" onclick="abrirPDF('DesAW.pdf')">
                <img style="filter: brightness(85%);" src="../assets/img/DesAW.jpg"
                    alt="Desarrollo de aplicaciones web">
                <h3 class="titulo-libro">Desarrollo de aplicaciones web<br>&nbsp;</h3>
                <div class="libro-info">
                    <h4>Desarrollo de aplicaciones web</h4>
                    <p>Autor: Carles Mateu</p>
                    <p>Categoría: Sitios web</p>
                    <p>Código: 019</p>
                </div>
            </div>
            <div class="libro" onclick="abrirPDF('HTML.pdf')">
                <img style="filter: brightness(85%);" src="../assets/img/HTML.jpg"
                    alt="El gran libro de HTML5, CSS3 y JavaScript">
                <h3 class="titulo-libro">El gran libro de HTML5, CSS3 y JavaScript</h3>
                <div class="libro-info">
                    <h4>El gran libro de HTML5, CSS3 y JavaScript</h4>
                    <p>Autor: Juan Diego Gauchat</p>
                    <p>Categoría: Sitios web</p>
                    <p>Código: 020</p>
                </div>
            </div>
            <div class="libro" onclick="abrirPDF('DyDW.pdf')">
                <img style="filter: brightness(85%);" src="../assets/img/DyDW.jpg"
                    alt="Diseño y desarrollo web. Análisis de casos">
                <h3 class="titulo-libro">Diseño y desarrollo web. Análisis de casos</h3>
                <div class="libro-info">
                    <h4>Diseño y desarrollo web. Análisis de casos</h4>
                    <p>Autor: Juan Pedro Barba Soler</p>
                    <p>Categoría: Sitios web</p>
                    <p>Código: 021</p>
                </div>
            </div>
        </div>
        <div class="estanteria">
            <h2>Estantería 8: Lenguaje C</h2>
            <div class="libro" onclick="abrirPDF('C1.pdf')">
                <img style="filter: brightness(85%);" src="../assets/img/C1.jpg" alt="El lenguaje de programación C">
                <h3 class="titulo-libro">El lenguaje de programación C<br>&nbsp;</h3>
                <div class="libro-info">
                    <h4>El lenguaje de programación C</h4>
                    <p>Autor: Brian Kernighan, Dennis Ritchie</p>
                    <p>Categoría: Lenguaje C</p>
                    <p>Código: 022</p>
                </div>
            </div>
            <div class="libro" onclick="abrirPDF('C2.pdf')">
                <img style="filter: brightness(85%);" src="../assets/img/C2.jpg" alt="Caminando junto al lenguaje C">
                <h3 class="titulo-libro">Caminando junto al lenguaje C<br>&nbsp;</h3>
                <div class="libro-info">
                    <h4>Caminando junto al lenguaje C</h4>
                    <p>Autor: Martín Goin</p>
                    <p>Categoría: Lenguaje C</p>
                    <p>Código: 023</p>
                </div>
            </div>
            <div class="libro" onclick="abrirPDF('C.pdf')">
                <img style="filter: brightness(85%);" src="../assets/img/C.jpg"
                    alt="Fundamentos de programación. Piensa en C">
                <h3 class="titulo-libro">Fundamentos de programación. Piensa en C</h3>
                <div class="libro-info">
                    <h4>Fundamentos de programación. Piensa en C</h4>
                    <p>Autor: Osvaldo Cairó Battistutti</p>
                    <p>Categoría: Lenguaje C</p>
                    <p>Código: 024</p>
                </div>
            </div>
        </div>
    </div>
    <!-- JavaScript -->
    <script src="../assets/js/script.js"></script>
</body>

<footer></footer>

</html>
