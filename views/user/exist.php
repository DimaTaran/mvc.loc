<h1>Такой Юзер Существует</h1>
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
    <tr>
    <?php
//    var_dump($viewmodel ); die;
    foreach($viewmodel as $item) : ?>

        <td><?php echo $item; ?></td>
<!--            <td>--><?php //echo $item['name']; ?><!--</td>-->
<!--            <td>--><?php //echo $item['email']; ?><!--</td>-->
<!--            <td>--><?php //echo $item['city']; ?><!--</td>-->
<!--            <td>--><?php //echo $item['district']; ?><!--</td>-->
            <!--			<td>--><?php //echo $item['price']; ?><!--</td>-->

<!--            <td>--><?php //echo $item['country']; ?><!--</td>-->

    <?php endforeach; ?>
    </tr>
</table>

