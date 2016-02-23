<?php
if (isset($_SESSION['user_login'])) {
    ?>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-6">
                <h3 class="text-center text-success">Nice to meet you, <?= $_SESSION['user_login'] ?> </h3>
            </div>
        </div>
    </div>
    <?php
} else {
    ?>

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-6">
                <form role="form" action="" method="post">
                    <h2>Please Sign Up</h2>
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name"
                                       pattern="[a-zA-Z]{1,20}" required>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Last Name"
                                       pattern="[a-zA-Z]{1,20}" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password"
                                       pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" required>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="password" name="confirm_password" id="confirm_password" class="form-control input-lg"
                                       placeholder="Confirm password" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address"
                               pattern="^[-\w.]+@([A-z0-9][-A-z0-9]+\.)+[A-z]{2,4}$" required>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <select name="sex" id="sex" class="form-control input-lg">
                                    <option selected value="">Sex</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="date" name="birthday" id="birthday" class="form-control input-lg"
                                       placeholder="YYYY-mm-dd" pattern="[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-md-6"><input type="submit" name="register" value="Register" class="btn btn-primary btn-block btn-lg">
                        </div>
                        <div class="col-xs-6 col-md-6"><a href="login" class="btn btn-success btn-block btn-lg">Sign In</a></div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php }
if (isset($data['error_message'])) {

    ?>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-6">
                <h3 class="text-center text-danger"><?= $data['error_message'] ?> </h3>
            </div>
        </div>
    </div>

<?php } ?>