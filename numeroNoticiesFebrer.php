<?php
$db = new SQLite3('diariLocal.db');
$resultats = $db->query("SELECT COUNT(*) AS total FROM noticies WHERE not_data LIKE '2025-02%' ORDER BY not_data DESC");
while ($fila = $resultats->fetchArray(SQLITE3_ASSOC)) {
    echo "ID: " . $fila['total'] . "<br>";
}
?>