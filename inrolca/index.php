<?php
/**
 * index.php - PÁGINA DE INICIO (HOME)
 * Define el identificador de página y el título, luego incluye la cabecera.
 */
$pagina = 'home';
$titulo = 'Inrolca - Piezas Automotrices e Industriales';
include 'header.php';
?>

<!-- ============================ HERO / PORTADA ============================ -->
<section class="hero" style="background-image: url('../img/IMAGEN 1.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; position: relative;">
    <div class="hero-overlay"></div>
    <div class="contenedor hero-content">
        <h1>Piezas Automotrices e Industriales</h1>
        <p>
            <span class="resaltado">Nos especializamos en la producción de autopartes, piezas de goma y metal,</span><br>
            <span class="resaltado">su venta y distribucion al mayor, proporcionando un servicio de innovacion y calidad.</span>
        </p>
        <a href="contacto.php" class="btn btn-rojo">
            Contáctanos <span aria-hidden="true">&#9654;</span>
        </a>
    </div>
</section>

<!-- ===================== TARJETAS DE CARACTERÍSTICAS ===================== -->
<section class="seccion">
    <div class="contenedor grid-3">

        <!-- Tarjeta 1 -->
        <article class="tarjeta">
            <div class="tarjeta-icono" aria-hidden="true">&#9881;</div>
            <h2>Calidad e Innovación</h2>
            <p>
                Todos nuestros productos están elaborados con la mayor dedicación
                y calidad por profesionales, maquinaria y procesos de punta.
            </p>
        </article>

        <!-- Tarjeta 2 -->
        <article class="tarjeta">
            <div class="tarjeta-icono" aria-hidden="true">&#127970;</div>
            <h2>Instalaciones</h2>
            <p>
                Nuestra unidad de fabricación tiene una enorme capacidad que nos
                permite producir una gama de autopartes de calidad.
            </p>
        </article>

        <!-- Tarjeta 3 -->
        <article class="tarjeta">
            <div class="tarjeta-icono" aria-hidden="true">&#128737;</div>
            <h2>Garantía</h2>
            <p>
                Todas las piezas de automóviles están protegidas con una garantía de
                la compañía para compras más seguras y sin complicaciones.
            </p>
        </article>

    </div>
</section>



<?php
// Incluye el pie de página común a todas las páginas.
include 'footer.php';
?>
