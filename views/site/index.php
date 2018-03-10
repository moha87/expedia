<?php

/* @var $this yii\web\View */

$this->title = 'My Web Application';
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">
            <table id="example" class="display" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>id</th>
                    <th>travelStartDate</th>
                    <th>travelEndDate</th>
                    <th>destination</th>
                    <th>hotelName</th>
                    <th>hotelStarRating</th>
                    <th>totalPriceValue</th>
                    <th>currency</th>
                    <th>hotel Url</th>
                    <th>View</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($offers as $key=>$value): ?>
                    <tr>
                        <td><?= $key+1 ?></td>
                        <td><?= $value['travelStartDate'] ?></td>
                        <td><?= $value['travelEndDate'] ?></td>
                        <td><?= $value['destination_name'] ?></td>
                        <td><?= $value['hotelName'] ?></td>
                        <td><?= $value['hotelStarRating'] ?></td>
                        <td><?= $value['totalPriceValue'] ?></td>
                        <td><?= $value['currency'] ?></td>
                        <td><a href="<?= utf8_decode(urldecode($value['hotelInfositeUrl'])) ?>">Visit</a></td>
                        <td><a class="btn btn-primary" href="/site/view?id=<?= $key ?>">View</a></td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>
        </div>

    </div>
</div>
<?php $this->registerJs("$(document).ready(function() {
        $('#example').DataTable();
    } );");?>