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
<?php //$catalog = $viewmodel->resultSet(); //var_dump($catalog[1]['ter_address']);?>
               <select id='country' name='country' class="form-control">
                   <option value='0'>Выберите область</option>
                    <?php
                    $catalog = $viewmodel->resultSet();
//                    var_dump($catalog); die;
                   foreach($catalog as $city)
                   {
//                       var_dump($city['ter_address']); die;
                       $city1 = explode(',', $city['ter_address'] );
                       $value = trim($city1[2]);
                      echo "<option>$value</option>";
                   }

//                           var_dump($viewmodel->single());
//                    while(false) {
//                    $city = explode(',', $catalog['ter_address'] );
//                    ?>
<!--                  <option value="--><?php //$city[2]; ?><!--">--><?php //$city[2]; ?><!--</option>-->
<!--                    --><?php //} ?>
               </select>

            </div>


<!--            <div class="form-group">-->
<!--                <label>Область</label>-->
<!---->
<!--            <textarea name="country" class="form-control"></textarea>-->
<!--            </div>-->
            <div class="form-group">

                <label>Город</label>

                <select id='city' name='city' class="form-control">
                    <option value='0'>Выберите область</option>
                    <?php foreach($catalog as $city)
                    {
                        $city1 = explode(',', $city['ter_address'] );
                        $value = trim($city1[1]);
                        echo "<option>$value</option>";
                    } ?>
                </select>

  <!--                <textarea name="city" class="form-control"></textarea>-->
            </div>

            <div class="form-group">
                <label>Район</label>

                <select id='city' name='district' class="form-control">
                    <option value='0'>Выберите область</option>
                    <?php foreach($catalog as $city)
                    {
                        $city1 = explode(',', $city['ter_address'] );
                        $value = trim($city1[0]);
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
<!--<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>-->
<!--<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>-->

<script>
    // just for the demos, avoids form submit
    jQuery.validator.setDefaults({
        debug: true,
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