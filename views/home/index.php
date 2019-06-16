<div class='text-center'>

	<a class='btn btn-primary text-center' href="<?php echo ROOT_PATH;?>user">Зарегистрировать юзера</a>
</div>

<h1>Список юзеров</h1>
<p class='lead'>Получение списка юзеров юзеров из БД</p>
<table class='table-bordered table-responsive table'>
    <tr>
        <th>
            ID User
        </th>
        <th>
            Name User
        </th>
        <th>
            Email
        </th>
        <th>
            City
        </th>
        <th>
            District
        </th>
        <th>
            Country
        </th>
    </tr>

   <?php
    foreach($viewmodel as $item) : ?>

        <tr><td><?php echo $item['id']; ?></td>
            <td><?php echo $item['name']; ?></td>
            <td><?php echo $item['email']; ?></td>
            <td><?php echo $item['city']; ?></td>
            <td><?php echo $item['district']; ?></td>
            <!--			<td>--><?php //echo $item['price']; ?><!--</td>-->

            <td><?php echo $item['country']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>
