<?php
/**
 * header.php
 * -----------------------------------------------------------------------------
 * CABECERA REUTILIZABLE (se incluye en todas las páginas con include).
 *
 * Antes de incluir este archivo, cada página puede definir:
 *   $pagina  -> identificador para resaltar el enlace activo del menú
 *   $titulo  -> título que aparece en la pestaña del navegador
 *
 * Ejemplo de uso al inicio de una página:
 *   <?php $pagina = 'home'; $titulo = 'Inrolca - Inicio'; include 'header.php'; ?>
 * -----------------------------------------------------------------------------
 */

// Valores por defecto por si la página no los define.
if (!isset($pagina)) { $pagina = ''; }
if (!isset($titulo)) { $titulo = 'Inrolca - Innovación y Calidad'; }

// Pequeña función para marcar como "activo" el enlace de la página actual.
function activo($actual, $pagina) {
    return $actual === $pagina ? 'activo' : '';
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($titulo); ?></title>
    <meta name="description" content="Inrolca S.A. - Fabricación, venta y distribución al mayor de autopartes, piezas de goma y metal. Innovación y calidad.">
    <meta name="theme-color" content="#d81f26">
    <!-- Hoja de estilos única para todo el sitio -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- ===================== CABECERA / MENÚ PRINCIPAL ===================== -->
    <header class="site-header">
        <div class="contenedor header-inner">

            <!-- Logotipo (texto estilizado, igual que en el diseño) -->
            <a href="index.php" class="logo" aria-label="Inrolca - Inicio">
           
<img src="../img/logoinrolca.png" alt="Inrolca - Innovación y Calidad">
            </a>
            

            <!-- Casilla oculta: truco CSS para abrir/cerrar el menú en móvil sin JS -->
            <input type="checkbox" id="nav-toggle" class="nav-toggle" hidden>
            <label for="nav-toggle" class="nav-toggle-label" aria-label="Abrir o cerrar menú">
                <span></span><span></span><span></span>
            </label>

            <!-- Navegación: mismos enlaces en todas las páginas -->
            <nav class="nav-principal" aria-label="Menú principal">
                <ul>
                    <li><a href="index.php"     class="<?php echo activo('home', $pagina); ?>">Home</a></li>
                    <li><a href="productos.php" class="<?php echo activo('productos', $pagina); ?>">Productos</a></li>
                    <li><a href="tips.php"      class="<?php echo activo('tips', $pagina); ?>">Tips</a></li>
                    <li><a href="nosotros.php"  class="<?php echo activo('nosotros', $pagina); ?>">Nosotros</a></li>
                    <li><a href="contacto.php"  class="<?php echo activo('contacto', $pagina); ?>">Contacto</a></li>
                </ul>
            </nav>

        </div>
    </header>

    <!-- El contenido propio de cada página comienza aquí -->
    <main>
