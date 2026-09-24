<?php

echo "<h1>Hola món!</h1>";

$conn = mysqli_connect(
    "db",
    "usuari",
    "contrasenya",
    "exemple"
);

if ($conn) {
    echo "<p>Connexió a la base de dades correcta</p>";
} else {
    echo "<p>Error de connexió: " . mysqli_connect_error() . "</p>";
}

?>
