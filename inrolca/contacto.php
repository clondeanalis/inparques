<?php
/**
 * contacto.php - PÁGINA DE CONTACTO
 * Contiene los datos de contacto y el formulario que envía por POST a procesar.php
 */
$pagina = 'contacto';
$titulo = 'Inrolca - Contacto';
include 'header.php';
?>

<!-- ===================== ENCABEZADO DE SECCIÓN ===================== -->
<section class="page-hero page-hero--contacto">
    <div class="page-hero-overlay"></div>
    <div class="contenedor">
        <h1>Contáctanos</h1>
        <p>Obtén tu cotización ahora</p>
    </div>
</section>

<!-- ===================== CONTENIDO DE CONTACTO ===================== -->
<section class="seccion">
    <div class="contenedor contacto-grid">

        <!-- Columna izquierda: detalles de contacto -->
        <aside class="contacto-detalles">
            <h2>Detalles de contacto</h2>

            <div class="contacto-item">
                <span class="contacto-ico" aria-hidden="true">&#9742;</span>
                <div>
                    <h3>Llámanos</h3>
                    <a href="tel:02512376103">0251-237.61.03</a>
                </div>
            </div>

            <div class="contacto-item">
                <span class="contacto-ico" aria-hidden="true">&#64;</span>
                <div>
                    <h3>Redes</h3>
                    <a href="#">@InrolcaSA</a>
                </div>
            </div>

            <div class="contacto-item">
                <span class="contacto-ico" aria-hidden="true">&#9993;</span>
                <div>
                    <h3>Mail</h3>
                    <a href="mailto:Inrolca@gmail.com">Inrolca@gmail.com</a>
                </div>
            </div>

            <div class="contacto-item">
                <span class="contacto-ico" aria-hidden="true">&#9679;</span>
                <div>
                    <h3>Ubícanos</h3>
                    <p>Barquisimeto - Venezuela</p>
                </div>
            </div>
        </aside>

        <!-- Columna derecha: formulario -->
        <div class="contacto-form-wrap">
            <h2>Envíanos un Mensaje</h2>

            <!--
                El formulario envía los datos por método POST al archivo procesar.php.
                Los campos obligatorios usan el atributo "required" (validación básica HTML5).
                El campo de correo usa type="email" para validar el formato.
            -->
            <form action="procesar.php" method="POST" class="form-contacto">

                <div class="form-fila">
                    <div class="form-grupo">
                        <label for="nombre">Nombre</label>
                        <input type="text" id="nombre" name="nombre"
                               placeholder="Tu nombre" required>
                    </div>
                    <div class="form-grupo">
                        <label for="telefono">Teléfono</label>
                        <input type="tel" id="telefono" name="telefono"
                               placeholder="Tu teléfono">
                    </div>
                </div>

                <div class="form-fila">
                    <div class="form-grupo">
                        <label for="correo">Correo</label>
                        <input type="email" id="correo" name="correo"
                               placeholder="tucorreo@ejemplo.com" required>
                    </div>
                    <div class="form-grupo">
                        <label for="compania">Compañía</label>
                        <input type="text" id="compania" name="compania"
                               placeholder="Nombre de tu empresa">
                    </div>
                </div>

                <div class="form-grupo">
                    <label for="mensaje">Mensaje</label>
                    <textarea id="mensaje" name="mensaje" rows="6"
                              placeholder="Escribe tu mensaje..." required></textarea>
                </div>

                <button type="submit" class="btn btn-rojo btn-block">Enviar Mensaje</button>
            </form>
        </div>

    </div>
</section>

<?php include 'footer.php'; ?>
