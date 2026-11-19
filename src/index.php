<?php
$host = "db";
$user = "appuser";
$pass = "apppass";
$db = "appdb";

mysqli_report(MYSQLI_REPORT_OFF);
$conn = @new mysqli($host, $user, $pass, $db);

echo "<h1>Hola Mundo desde PHP</h1>";

if ($conn->connect_error) {
    echo "<p>Error de conexion a MySQL: " . $conn->connect_error . "</p>";
} else {
    echo "<p>Conexion exitosa a la base de datos MySQL (" . $conn->server_info . ")</p>";
}
?>