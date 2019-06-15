<?php
require_once("connect.php");
$query = "SELECT ter_name 
            FROM t_koatuu_tree";
$cat = $pdo->prepare($query);
$cat->execute(['id' => $_GET['id']]);
echo "<option value='0'>Выберите подраздел</option>";
while($catalog = $cat->fetch()) {
    echo "<option value='{$catalog['ter_name']}'>{$catalog['ter_name']}</option>";
}
