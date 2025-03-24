<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulari de Cerca</title>
</head>
<body>
    <h1>Formulari per a cercar informació</h1>
    
    <form action="" method="GET">
        <label for="seccio">Introdueix el nom de la noticia que ols trobar:</label>
        <input type="text" id="seccio" name="seccio" required>
        <button type="submit">Cercar</button>
    </form>
</body>
</html>
<?php
$db = new SQLite3('diariLocal.db');
    $resultats = $db->query("SELECT * FROM noticies WHERE not_titular LIKE 'seccio' ORDER BY not_data DESC");
    while ($fila = $resultats->fetchArray(SQLITE3_ASSOC)) {
        echo "ID: " . $fila['not_id'] . " - Titular: " . $fila['not_titular'] . " - Cos: " . $fila['not_cos'] . " - Data: " . $fila['not_data'] . " - Secció: " . $fila['not_seccio'] . "<br>";
    }
?>