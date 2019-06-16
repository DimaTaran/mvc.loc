<?php
require_once("connection.php");
$query = "SELECT ter_name FROM t_koatuu_tree LIMIT 100";
$cat = $pdo->query($query);

echo "<option value='0'>Выберите подраздел</option>";
while($catalog = $cat->fetch()) {
    echo "<option value='{$catalog['ter_name']}'>{$catalog['ter_name']}</option>";
}
