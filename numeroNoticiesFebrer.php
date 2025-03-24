<?php
$db = new SQLite3('diariLocal.db');
    $resultats = $db->query("SELECT COUNT(*) AS C FROM noticies WHERE not_data like '_____02%' ORDER BY not_data DESC");
    while ($fila = $resultats->fetchArray(SQLITE3_ASSOC)) {
        echo "total: ". $fila['C'] ."<br>";
    }
?>