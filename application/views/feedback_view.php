<?php
extract($data);

if (isset($_SESSION['user_login'])) {
    if ($send !== 'feedback_sent') {
        ?>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-6">
                    <form role="form" action="" method="post">
                        <h2>Please send feedback</h2>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="message" id="message" class="form-control input-lg" placeholder="Message" rows="8" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-2 col-md-2"><img src="/util/capcha.php"></div>
                            <div class="col-xs-8 col-md-4"><input type="test" name="capcha" id="capcha" class="form-control input-lg"
                                                                  placeholder="Enter capcha"></div>
                            <div class="col-xs-2 col-md-6"><input type="submit" value="Send" name="send" class="btn btn-primary btn-block btn-lg">
                            </div>
                        </div>
                        <?php if ($data['capcha'] === 'wrong capcha') { ?>
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-8 col-md-6">
                                        <h3 class="text-center text-danger"><?= $data['capcha']?></h3>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <?php if ($data['send'] === 'All fields are required') { ?>
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-8 col-md-6">
                                        <h3 class="text-center text-danger"><?= $data['send']?></h3>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </form>
                </div>
            </div>
        </div>
    <?php } else { ?>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-6">
                    <h3 class="text-center text-success">Message was sent</h3>
                </div>
            </div>
        </div>
    <?php }
} elseif ($send !== 'feedback_sent') { ?>

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-6">
                <form role="form" action="" method="post">
                    <h2>Please send feedback</h2>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="Name" pattern="[a-zA-Z]{1,20}" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" required>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <textarea name="message" id="message" class="form-control input-lg" placeholder="Message" rows="8" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-2 col-md-2"><img src="/util/capcha.php"></div>
                        <div class="col-xs-8 col-md-4"><input type="test" name="capcha" id="capcha" class="form-control input-lg"
                                                              placeholder="Enter capcha"></div>
                        <div class="col-xs-2 col-md-6"><input type="submit" value="Send" name="send" class="btn btn-primary btn-block btn-lg">
                        </div>
                    </div>
                    <?php if ($data['capcha'] === 'wrong capcha') { ?>
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-8 col-md-6">
                                    <h3 class="text-center text-danger"><?= $data['capcha']?></h3>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <?php if ($data['send'] === 'All fields are required') { ?>
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-8 col-md-6">
                                    <h3 class="text-center text-danger"><?= $data['send']?></h3>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </form>
            </div>
        </div>
    </div>

    <?php
} else {
    ?>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-6">
                <h3 class="text-center text-success">Message was sent</h3>
            </div>
        </div>
    </div>
<?php }
?>