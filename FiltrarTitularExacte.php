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
    <?php
    $contador = 0;
    $seccio = $_GET['seccio'];
    $seccio = str_replace(' ', '%', $seccio);
    $db = new SQLite3('diariLocal.db');
    $resultats = $db->query("SELECT * FROM noticies WHERE not_titular LIKE '%$seccio%' ORDER BY not_data DESC");
    while ($fila = $resultats->fetchArray(SQLITE3_ASSOC)) {
        echo " - Titular: " . $fila['not_titular'] . " " . $fila['not_cos'] . " - Data: " . $fila['not_data'] . " - Secció: " . $fila['not_seccio'] . "<br>";
        $contador ++;
    }
    if($contador == 0){
        echo "ERROR NOTICIA NO TROBADA TORNI A PROVAR ESCRIVINT ALGUNA ALTRE COSA";
    }
?>
</body>
</html>