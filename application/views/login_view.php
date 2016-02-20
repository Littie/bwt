<?php
extract($data);

if ($login_status === "") {
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-6">
            <form role="form" action="" method="post">
                <h2>Please Sign Up</h2>
                <div class="row">
                    <div class="form-group">
                        <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-4 col-md-4"></div>
                    <div class="col-xs-4 col-md-4">
                        <input type="submit" value="Sign In" class="btn btn-primary btn-block btn-lg">
                    </div>
                    <div class="col-xs-4 col-md-4"></div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php }
elseif ($login_status === "access_granted") {
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-6">
            <h3 class="text-center text-success">Nice to meet you, <?= $name?> </h3>
        </div>
    </div>
</div>
<?php } else { ?>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-6">
        <h3 class="text-center text-danger">Access denied</h3>
        </div>
    </div>
</div>
<?php }