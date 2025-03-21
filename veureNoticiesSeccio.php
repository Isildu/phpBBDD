<?php
$db = new SQLite3('diariLocal.db');
$seccio = $_GET['seccio']
$resultats = $db->query("SELECT * FROM noticies WHERE not_seccio='$seccio' ORDER BY not_seccio ASC");
while ($fila = $resultats->fetchArray(SQLITE3_ASSOC)) {
    echo "ID: " . $fila['not_id'] . " - Titular: " . $fila['not_titular'] . " - Cos: " . $fila['not_cos'] . " - Data: " . $fila['not_data'] . " - Secció: " . $fila['not_seccio'] . "<br>";
}
?>