<?php
$db = new SQLite3('diariLocal.db');
    $resultats = $db->query("SELECT * FROM noticies ORDER BY not_data DESC");
    while ($fila = $resultats->fetchArray(SQLITE3_ASSOC)) {
        echo "ID: ". $fila['not_id'] ." - Titular: ". $fila['not_titular'] ." - Cos: ". $fila['not_cos'] ." data: ". $fila['not_data'] ." - Seccio: ". $fila['not_seccio'] ."<br>";
    }
?>

