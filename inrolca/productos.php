<?php
/**
 * productos.php - PÁGINA DE PRODUCTOS
 */
$pagina = 'productos';
$titulo = 'Inrolca - Productos';
include 'header.php';
?>

<!-- ===================== ENCABEZADO DE SECCIÓN ===================== -->
<section class="page-hero page-hero--productos">
    <div class="page-hero-overlay"></div>
    <div class="contenedor">
        <h1>Fabricante de Bujes y Bases</h1>
        <p>
            Como fabricante independiente especializado en bujes y bases, desarrollamos y
            fabricamos materiales de fricción y soporte como bujes, bases para caja, bases
            para motor y bases de amortiguador, para distintas marcas del mercado.
        </p>
        <div class="page-hero-botones">
            <a href="contacto.php" class="btn btn-rojo">Contáctanos</a>
            <a href="#" class="btn btn-outline">Descargar catálogo</a>
        </div>
    </div>
</section>

<!-- ===================== CATEGORÍAS DE PRODUCTOS ===================== -->
<section class="seccion">
    <div class="contenedor grid-3">

        <!-- Tarjeta 1: Enlaza a Bujes de Suspensión -->
        <a href="#bujes-suspension" class="tarjeta tarjeta-producto">
            <img src="../img/imagen4.png"
                 alt="Bujes de suspensión de goma y metal" loading="lazy">
            <h2>Bujes de Suspensión</h2>
        </a>

        <!-- Tarjeta 2: Enlaza a Bases de Motor y Caja -->
        <a href="#bases-motor" class="tarjeta tarjeta-producto">
            <img src="../img/imagen5.png"
                 alt="Bases de motor y caja" loading="lazy">
            <h2>Bases de Motor y Caja</h2>
        </a>

        <!-- Tarjeta 3: Enlaza a Bases de Amortiguador -->
        <a href="#bases-amortiguador" class="tarjeta tarjeta-producto">
            <img src="../img/imagen6.png"
                 alt="Bases de amortiguador" loading="lazy">
            <h2>Bases de Amortiguador</h2>
        </a>

    </div>
</section>

<!-- ===================== ¿SABÍAS QUE...? ===================== -->
<section class="franja-gris">
    <div class="contenedor">
        <h2 class="titulo-centro">¿Sabías que...?</h2>
        <p class="texto-centro">
            INROLCA S.A. dispone de una gran variedad de productos como bujes de suspensión,
            bases de caja, bases de motor, bases de amortiguadores y gomas guardapolvos, entre
            otras piezas automotrices, elaborados con una valiosa mano de obra nacional
            enfocada en la innovación y la calidad.
        </p>
    </div>
</section>

<!-- ===================== DETALLE: BUJES DE SUSPENSIÓN ===================== -->
<!-- Se agregó el id="bujes-suspension" -->
<section class="seccion" id="bujes-suspension">
    <div class="contenedor detalle">
        <img src="../img/imagen4.png"
             alt="Detalle de bujes de suspensión cilíndricos" class="detalle-img" loading="lazy">
        <div class="detalle-texto">
            <h2>Bujes de Suspensión</h2>
            <p>
                Los bujes de suspensión de INROLCA suelen ser de formas cilíndricas con material
                de goma, tubo interno y externo, los cuales evitan el aplastamiento de la goma,
                evitando así el uso excesivo de las partes más costosas del sistema de suspensión.
            </p>
            <p>Minimizan vibraciones y ruidos, aportando la flexibilidad y estabilidad que tu vehículo necesita.</p>
            <a href="contacto.php" class="btn btn-rojo">Solicitar Catálogo</a>
        </div>
    </div>
</section>

<!-- ===================== DETALLE: BASES DE MOTOR Y CAJA ===================== -->
<!-- Se agregó el id="bases-motor" -->
<section class="seccion seccion-alt" id="bases-motor">
    <div class="contenedor detalle detalle-invertido">
        <img src="../img/imagen5.png"
             alt="Detalle de bases de motor y caja" class="detalle-img" loading="lazy">
        <div class="detalle-texto">
            <h2>Bases de Motor y Caja</h2>
            <p>
                Las bases de motor y caja de INROLCA son elaboradas con materiales como goma y
                láminas de hierro que mantienen los parámetros establecidos y aportan un buen
                soporte para mantener la caja o el motor siempre en su lugar. De esta forma se
                evita que se muevan cuando ponemos en marcha el vehículo.
            </p>
            <a href="contacto.php" class="btn btn-rojo">Solicitar Catálogo</a>
        </div>
    </div>
</section>

<!-- ===================== DETALLE: BASES DE AMORTIGUADOR ===================== -->
<!-- Se agregó el id="bases-amortiguador" -->
<section class="seccion" id="bases-amortiguador">
    <div class="contenedor detalle">
        <img src="../img/imagen6.png"
             alt="Detalle de bases de amortiguador" class="detalle-img" loading="lazy">
        <div class="detalle-texto">
            <h2>Bases de Amortiguador</h2>
            <p>
                Las bases de amortiguador de INROLCA proporcionan un perfecto desempeño de los
                amortiguadores; en conjunto permiten tener firmeza y estabilidad en la carretera,
                generando seguridad en el camino.
            </p>
            <a href="contacto.php" class="btn btn-rojo">Solicitar Catálogo</a>
        </div>
    </div>
</section>

<!-- ===================== MARCAS COMPATIBLES ===================== -->
<!-- ===================== MARCAS COMPATIBLES ===================== -->
<section class="franja-gris">
    <div class="contenedor">
        <img src="../img/logoscarros.png" 
             alt="Logos de las marcas compatibles con Inrolca" 
             style="width: 100%; height: auto; display: block; border-radius: var(--radio); box-shadow: var(--sombra);">
    </div>
</section>

<?php include 'footer.php'; ?>