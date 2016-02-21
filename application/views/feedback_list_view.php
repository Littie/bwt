<?php
if (isset($_SESSION['user_login'])) {
    ?>

    <h2>Feedback list</h2>

    <?php

    foreach ($data as $elements) {
        ?>

        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-6">
                    <div class="row">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    Name
                                </h3>
                            </div>
                            <div class="panel-body">
                                <h4><p class="text-muted"><?= $elements['message'] ?></p></h4>
                            </div>
                            <div class="panel-footer">
                                <p class="text-right text-info"><?= $elements['time'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
    }
} else {
    ?>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-6">
                <div class="row">
                    <h2 class="text-danger">Please login or register for view feedback</h2>
                </div>
            </div>
        </div>
    </div>
<?php } ?>