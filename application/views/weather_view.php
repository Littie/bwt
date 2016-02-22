<?php
extract($data);
if ($data['weather'] !== '') {
    ?>

    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-6">
                    <h3><?= $header . ' ' . $city ?></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-6">
                    <h4>Температура: <?= $temp ?></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-6">
                    <h4>Облачность: <?= $cloudness ?></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-6">
                    <h4>Ветер: <?= $wind ?></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-6">
                    <h4>Давление: <?= $bar ?></h4>
                </div>
            </div>
        </div>
    </div>
    </div>

    <?php
} else {

    ?>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-6">
                <h3 class="text-center text-danger">Please login or register for view weather</h3>
            </div>
        </div>
    </div>
<?php } ?>
