<?php
/**
 * procesar.php
 * -----------------------------------------------------------------------------
 * Recibe y procesa los datos enviados desde el formulario de contacto.
 * Realiza validación en el servidor (nunca confíes solo en la validación HTML).
 * -----------------------------------------------------------------------------
 */

// 1) Aceptar únicamente peticiones POST.
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: contacto.php');
    exit;
}

// 2) Recoger y limpiar los datos recibidos.
$nombre   = trim($_POST['nombre']   ?? '');
$telefono = trim($_POST['telefono'] ?? '');
$correo   = trim($_POST['correo']   ?? '');
$compania = trim($_POST['compania'] ?? '');
$mensaje  = trim($_POST['mensaje']  ?? '');

// 3) Validación básica en el servidor.
$errores = [];

if ($nombre === '') {
    $errores[] = 'El nombre es obligatorio.';
}
if ($correo === '' || !filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    $errores[] = 'El correo electrónico no es válido.';
}
if ($mensaje === '') {
    $errores[] = 'El mensaje es obligatorio.';
}

// 4) Si hay errores, mostrarlos; si no, procesar el envío.
$exito = false;
if (empty($errores)) {

    /*
     * Aquí podrías:
     *   - Guardar los datos en una base de datos, o
     *   - Enviar un correo con la función mail(), por ejemplo:
     *
     *   $para     = 'Inrolca@gmail.com';
     *   $asunto   = 'Nuevo mensaje de contacto de ' . $nombre;
     *   $cuerpo   = "Nombre: $nombre\nTeléfono: $telefono\nCorreo: $correo\n"
     *             . "Compañía: $compania\n\nMensaje:\n$mensaje";
     *   $cabecera = 'From: ' . $correo;
     *   mail($para, $asunto, $cuerpo, $cabecera);
     */

    $exito = true;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inrolca - Resultado del envío</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="seccion">
        <div class="contenedor resultado">
            <?php if ($exito): ?>
                <div class="alerta alerta-exito">
                    <h1>¡Gracias, <?php echo htmlspecialchars($nombre); ?>!</h1>
                    <p>Tu mensaje ha sido enviado correctamente. Te contactaremos pronto.</p>
                </div>
            <?php else: ?>
                <div class="alerta alerta-error">
                    <h1>No se pudo enviar tu mensaje</h1>
                    <ul>
                        <?php foreach ($errores as $error): ?>
                            <li><?php echo htmlspecialchars($error); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <a href="contacto.php" class="btn btn-rojo">Volver al formulario</a>
            <a href="index.php" class="btn btn-outline">Ir al inicio</a>
        </div>
    </main>
</body>
</html>
