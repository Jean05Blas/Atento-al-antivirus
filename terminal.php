<?php
if (isset($_GET['access_code'])) {
    $access_code = $_GET['access_code'];
    
    if ($access_code === "resistencia2077") {
        echo "Flag encontrada: CSU{n0_d3sc4rgues_s1n_s4b3r_qu3_3s}";
    } else {
        echo "Código incorrecto. Sigue intentándolo.";
    }
} else {
    echo "<h1>Acceso Restringido</h1>";
    echo "<p>Introduce el código de acceso para continuar.</p>";
}
?>
