
<?php

$enlace = mysqli_connect("localhost", "root", "", "ejemplo");

if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

/*echo "conectado" . PHP_EOL;*/
mysqli_close($enlace);
?>
