<?php


class Home extends Controller
{
// провекрка работы метода
//    protected function User()
//    {
////        echo 'HOME/INDEX';
//    }
    protected function Index()
    {
//        echo 'HOME/INDEX';
//        var_dump(class_exists('HomeModel'));
        $viewmodel = new HomeModel();

        $this->ReturnView($viewmodel->Index(), true);
//        var_dump($viewmodel->Index()); die;

        echo "
         <!DOCTYPE html>
    <html lang='ru'>
   
  <body>"; ?>
  <?php
    // Устанавливаем соединение с базой данных
    require_once('connection.php');
    // Формируем выпадающий список корневых разделов
    $query = 'SELECT ter_address FROM t_koatuu_tree LIMIT 500';
    echo "<select id='fst'>";
    echo "<option value='0'>Выберите область</option>";
    $com = $pdo->query($query);

    while($catalog = $com->fetch()) {
       $city = explode(',', $catalog['ter_address'] );
//       var_dump($city[1]);
      echo "<option value='{$catalog['ter_address']}'>{$city[2]}</option>";
    }
    echo "</select>

<select id='snd' class='select-visible' >
<option value='0'>Выберите город</option>";

$query = "SELECT ter_name FROM t_koatuu_tree LIMIT 100";
$cat = $pdo->query($query);

echo "<option value='0'>Выберите подраздел</option>";
while($catalog = $cat->fetch()) {
    echo "<option value='{$catalog['ter_name']}'>{$catalog['ter_name']}</option>";
}


  echo "
  </select>
</body>
</html>";

    }
}