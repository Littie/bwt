<h2>Feedback list</h2>

<?php

foreach ($data as $elements) {
    ?>

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-6">
                <div class="row">
                    <?= $elements['message'] ?>
                </div>
                <div class="row">
                    <?= $elements['time'] ?>
                </div>
            </div>
        </div>
    </div>

    <?php
}
?>