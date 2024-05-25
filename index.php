<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <!-- Agregamos el favicon -->
    <link rel="stylesheet" href="assets/favicon.png" type="image/x-icon">
    <!-- Agregamos la vinculacion con el estilo -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/mquery.css">
    <!-- Agregamos link de lineicons -->
    <link rel="stylesheet" href="https://cdn.lineicons.com/4.0/lineicons.css" />
    

</head>

<body>

    <header>
        <div class="container">
            <a href="#" class="logo">Alex<span>Cody</span>.</a>

            <div id="hamb" class="hamb">
                <span id="top"></span>
                <span id="mid"></span>
                <span id="bottom"></span>
            </div>
        </div>
    </header>

    <nav class="nav">
        <ul id="nav__menu" class="nav__menu">
            <li class="nav__list">
                <a href="#" class="nav__link">Home</a>
            </li>
            <li class="nav__list">
                <a href="#" class="nav__link">About</a>
            </li>
            <li class="nav__list">
                <a href="#" class="nav__link">Skill</a>
            </li>
            <li class="nav__list">
                <a href="#" class="nav__link">Portfolio</a>
            </li>
            <li class="nav__list">
                <a href="#" class="nav__link">Testimonials</a>
            </li>
            <li class="nav__list">
                <a href="#" class="nav__link">Awards</a>
            </li>
            <li class="nav__list">
                <a href="#" class="nav__link">Contact</a>
            </li>
        </ul>
    </nav>

    <main>

    <!-- Seccion hero -->

        <section id="home" class="hero">
            <div class="container">
                <div class="hero__description">
                    <span id="hero__top">👋 Hola Mundo</span>
                    <h1 class="hero__title">Yonatan Alesander <br>     Ordoñez Diego</h1>

                    <p class="hero__text"></p>

                    <div class="action">
                        <a href="#" class="btn btn-round">Currículum<i class="lni lni-arrow-right"></i></a>
                    </div>
                </div>

                <img src="assets/img/pf.jpg" alt="" class="hero__img">
            </div>
        </section>

        

    <!-- seccion de about me -->

    <?php 
    require 'about.php';
    ?>

    <!-- Seccion de skills  -->

    <?php 
    require 'skill.php';
    ?>

    <!-- seccion de Portfolio -->

    <?php 
    require 'portfolio.php';
    ?>

    <!-- seccion de testimonios -->
    
    <?php 
    require 'testimonios.php';
    ?>

    <!-- seccion de footer -->

    <?php 
    require 'footer.php';
    ?>

       

       

    </main>
    <!-- Agregamos el archivo mixitup -->
    <script src="assets/js/mixitup.min.js"></script>
    <!-- Agregamos el scripr -->
    <script src="assets/js/script.js"></script>
    
    
</body>
</html>


<!-- 31 MIN -->
