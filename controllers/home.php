<?php


class Home extends Controller
{
    protected function Index(){
//        echo 'HOME/INDEX';
//        var_dump(class_exists('HomeModel'));
        $viewmodel = new HomeModel();

        $this->ReturnView($viewmodel->Index(), true);
//        var_dump($viewmodel->Index()); die;

        echo "
         <!DOCTYPE html>
    <html lang='ru'>
    <head>
        <title>Двойной выпадающий список</title>
        <meta charset='utf-8'>
        <script type='text/javascript' src='https://raw.githubusercontent.com/igorsimdyanov/php7/master/ajax/jquery.js' ></script>

        <script src='https://code.jquery.com/jquery-3.4.1.js'
        integrity='sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU='
        crossorigin='anonymous'></script>
    <script type='text/javascript'>
    $(function(){
      $('#fst').on('change', function(){
        // AJAX-запрос
        $.ajax({
          url: 'select.php?id=' + $('#fst').val()
        })
        .done(function(data){
          $('#snd').html(data);
          $('#snd').prop('disabled', false);
        });
      });
    });
  </script>
  </head>
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
//        var_dump($catalog['ter_address']);die;
      echo "<option value='{$catalog['ter_address']}'>{$catalog['ter_address']}</option>";
    }
    echo "</select>
  <select id='snd' disabled='disabled'>
  <option value='0'>Выберите подраздел</option>
  </select>
</body>
</html>";

    }
}