<?php
$db = new SQLite3('diariLocal.db');
$resultats = $db->query("SELECT DISTINCT not_seccio FROM noticies ORDER BY not_seccio ASC");
while ($fila = $resultats->fetchArray(SQLITE3_ASSOC)) {
    echo "Seccio: " . $fila['not_seccio'] ."<br>";
}
?>