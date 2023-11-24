<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 1</title>
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

<nav>
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
            <a href="librosvirtuales2.php">
                <button class="btn btn-warning">
                    PÁGINA 2
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
            <h2>Estantería 1: Ciencias</h2>
            <div class="libro" onclick="abrirPDF('Fisica1.pdf')">
                <img style="filter: brightness(85%);" src="../assets/img/Fisica1.jpg" alt="Física 1">
                <h3 class="titulo-libro">Física 1</h3>
                <div class="libro-info">
                    <h4>Física 1</h4>
                    <p>Autor: Serway, Raymond</p>
                    <p>Categoría: Ciencias</p>
                    <p>Código: 001</p>
                </div>
            </div>
            <div class="libro" onclick="abrirPDF('Fisica2.pdf')">
                <img style="filter: brightness(85%);" src="../assets/img/Fisica2.jpg" alt="Física 2">
                <h3 class="titulo-libro">Física 2</h3>
                <div class="libro-info">
                    <h4>Física 2</h4>
                    <p>Autor: Serway, Raymond</p>
                    <p>Categoría: Ciencias</p>
                    <p>Código: 002</p>
                </div>
            </div>
            <div class="libro" onclick="abrirPDF('Quimica1.pdf')">
                <img style="filter: brightness(85%);" src="../assets/img/Quimica1.jpg" alt="Química 1">
                <h3 class="titulo-libro">Química 1</h3>
                <div class="libro-info">
                    <h4>Química 1</h4>
                    <p>Autor: Brown, Lemay, Bursten</p>
                    <p>Categoría: Ciencias</p>
                    <p>Código: 003</p>
                </div>
            </div>
        </div>
        <div class="estanteria">
            <h2>Estantería 2: Sistemas</h2>
            <div class="libro" onclick="abrirPDF('Analisis.pdf')">
                <img style="filter: brightness(85%);" src="../assets/img/Analisis.jpg" alt="Análisis">
                <h3 class="titulo-libro">Análisis y diseño de sistemas<br>&nbsp;</h3>
                <div class="libro-info">
                    <h4>Análisis y diseño de sistemas</h4>
                    <p>Autor: Kenneth E. Kendall, Julie E Kendall</p>
                    <p>Categoría: Sistemas</p>
                    <p>Código: 004</p>
                </div>
            </div>
            <div class="libro" onclick="abrirPDF('SisOrg.pdf')">
                <img style="filter: brightness(85%);" src="../assets/img/SisOrg.jpg" alt="Sistemas y organizaciones">
                <h3 class="titulo-libro">Sistemas y organizaciones<br>&nbsp;</h3>
                <div class="libro-info">
                    <h4>Sistemas y organizaciones</h4>
                    <p>Autor: Emilio Lorenzo</p>
                    <p>Categoría: Sistemas</p>
                    <p>Código: 005</p>
                </div>
            </div>
            <div class="libro" onclick="abrirPDF('Sistemas.pdf')">
                <img style="filter: brightness(85%);" src="../assets/img/Sistemas.jpg" alt="Análisis de sistemas">
                <h3 class="titulo-libro">Análisis de sistemas, diseños y metodos</h3>
                <div class="libro-info">
                    <h4>Análisis de sistemas, diseños y metodos</h4>
                    <p>Autor: Whitten</p>
                    <p>Categoría: Sistemas</p>
                    <p>Código: 006</p>
                </div>
            </div>
        </div>
        <div class="estanteria">
            <h2>Estantería 3: Cálculo</h2>
            <div class="libro" onclick="abrirPDF('ElementosCalculo.pdf')">
                <img style="filter: brightness(85%);" src="../assets/img/ElementosCalculo.JPG"
                    alt="Elementos de Cálculo Diferencial">
                <h3 class="titulo-libro">Elementos de Cálculo Diferencial<br>&nbsp;</h3>
                <div class="libro-info">
                    <h4>Elementos de Cálculo Diferencial lineal</h4>
                    <p>Autor: Ángel Ruiz Hugo Barrantes</p>
                    <p>Categoría: Cálculo</p>
                    <p>Código: 007</p>
                </div>
            </div>
            <div class="libro" onclick="abrirPDF('Calculo2.pdf')">
                <img style="filter: brightness(85%);" src="../assets/img/Calculo2.jpg"
                    alt="Geometría analítica y cálculo 2">
                <h3 class="titulo-libro">Geometría analítica y cálculo 2</h3>
                <div class="libro-info">
                    <h4>Geometría analítica y cálculo 2</h4>
                    <p>Autor: Dpto de ciencias fisico-matematicas</p>
                    <p>Categoría: Cálculo</p>
                    <p>Código: 008</p>
                </div>
            </div>
            <div class="libro" onclick="abrirPDF('CalculoApp.pdf')">
                <img style="filter: brightness(85%);" src="../assets/img/CalculoApp.jpg"
                    alt="Cálculo diferencial e integral, con aplicaciones">
                <h3 class="titulo-libro">Cálculo diferencial e integral<br>&nbsp;</h3>
                <div class="libro-info">
                    <h4>Cálculo diferencial e integral, con aplicaciones</h4>
                    <p>Autor: Elsie Hernández S</p>
                    <p>Categoría: Cálculo</p>
                    <p>Código: 009</p>
                </div>
            </div>
        </div>
        <div class="estanteria">
            <h2>Estantería 4: Java</h2>
            <div class="libro" onclick="abrirPDF('Java.pdf')">
                <img style="filter: brightness(85%);" src="../assets/img/Java.jpg" alt="Cómo programar en Java">
                <h3 class="titulo-libro">Cómo programar en Java<br>&nbsp;</h3>
                <div class="libro-info">
                    <h4>Cómo programar en Java</h4>
                    <p>Autor: Deitel</p>
                    <p>Categoría: Java</p>
                    <p>Código: 010</p>
                </div>
            </div>
            <div class="libro" onclick="abrirPDF('Java2.pdf')">
                <img style="filter: brightness(85%);" src="../assets/img/Java2.JPG" alt="Java 2">
                <h3 class="titulo-libro">Java 2<br>&nbsp;<br>&nbsp;</h3>
                <div class="libro-info">
                    <h4>Java 2</h4>
                    <p>Autor: Jorge Sánchez</p>
                    <p>Categoría: Java</p>
                    <p>Código: 011</p>
                </div>
            </div>
            <div class="libro" onclick="abrirPDF('IntroJava.pdf')">
                <img style="filter: brightness(85%);" src="../assets/img/IntroJava.JPG"
                    alt="Introduccion a la Programacion con Java">
                <h3 class="titulo-libro">Introduccion a la Programacion con Java</h3>
                <div class="libro-info">
                    <h4>Introduccion a la Programacion con Java</h4>
                    <p>Autor: John S. Dean, Raymond H. Dean</p>
                    <p>Categoría: Java</p>
                    <p>Código: 012</p>
                </div>
            </div>
        </div>
    </div>
    <!-- JavaScript -->
        <script src="../assets/js/script.js"></script>
</body>

<footer></footer>

</html>
