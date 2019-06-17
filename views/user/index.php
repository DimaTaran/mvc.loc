<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Add new User</h3>
    </div>
    <div class="panel-body">
        <form id='adduser' method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label>ФИО</label>
                <input type="text" name="name" class="form-control" />
            </div>
            <div class="form-group">
                <label>Email</label>
                <input id='email' type="text" name="email" class="form-control" />
            </div>

            <div class="form-group">
                <label>Область</label>
<?php //$catalog = $viewmodel->resultSet(); //var_dump($viewmodel->query('SELECT ter_address FROM t_koatuu_tree WHERE ter_level=3 LIMIT 1000'));?>
               <select id='country' name='country' class='form-control chosen-select'>
                   <option value='0'>Выберете область</option>
                    <?php
                    $catalog = $viewmodel->resultSet();
//var_dump($catalog); die;
                   foreach($catalog as $city)
                   {
//                       $city1 = explode(',', $city['ter_address'] );
                       $value = trim($city['ter_address']);
                      echo "<option>$value</option>";
                   }
                    ?>
               </select>
            </div>
            <div class="form-group">
                <label>Город</label>
                <?php
//                    $viewmodel->query('SELECT ter_name FROM t_koatuu_tree WHERE ter_level=2 and ter_type_id=1 LIMIT 1000');
//                    $catalog2 = $viewmodel->resultSet();
//                    var_dump($catalog2);
//                    ?>

                <select id='city' name='city' class="form-control chosen-select">
                    <option value='0'>Выберите город</option>
                    <?php
                    $viewmodel->query('SELECT ter_name FROM t_koatuu_tree WHERE ter_level=2 and ter_type_id=1 LIMIT 1000');
                    $catalog = $viewmodel->resultSet();
//                    var_dump($viewmodel->resultSet());
                    foreach($catalog as $city)
                    {
//                        $city1 = explode(',', $city['ter_address'] );
                        $value = trim($city['ter_name']);
                        echo "<option>$value</option>";
                    } ?>
                </select>
            </div>

            <div class="form-group">
                <label>Район</label>
                <select id='city' name='district' class="form-control chosen-select">
                    <option value='0'>Выберите район</option>
                    <?php
                    $viewmodel->query('SELECT ter_name FROM t_koatuu_tree WHERE ter_level=2 and ter_type_id=2 LIMIT 1000');
                    $catalog = $viewmodel->resultSet();
                    foreach($catalog as $city)
                    {
//                        $city1 = explode(',', $city['ter_address'] );
                        $value = trim($city['ter_name']);
                        echo "<option>$value</option>";
                    } ?>
                </select>

            </div>
            <input class="btn btn-primary" name="submit" type="submit" value="Submit" />
            <a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>">Cancel</a>
        </form>
    </div>
</div>
<!--<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>-->
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<!--<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>-->

<script>
    // just for the demos, avoids form submit
    jQuery.validator.setDefaults({
        debug: false,
        success: "valid"
    });
    $( "#adduser" ).validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            name: {
                required: true,
            }

        }
    });
</script>