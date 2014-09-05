<?php
$nombre = $_GET['txt_sdds'];
require_once './db.php';

$sql = new db();
$sql->ejecute("call sp_pepe('$nombre')");

$pepe2 = $sql->gettable("call sp_getpepe();");

echo "<select name=\"cb_op\" id=\"cb_op\">";

foreach ($pepe2 as $row )
    echo "<option value='$row[0]'>$row[1]</option>";

echo '</select>';