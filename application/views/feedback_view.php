<?php
if ($_REQUEST['send']) {
    echo 'Message was sent';
}
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-6">
            <form role="form" action="feedback_view">
                <h2>Please send feedback</h2>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="Name">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="3">
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <textarea name="message" id="message" class="form-control input-lg" placeholder="Message" rows="8"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-2 col-md-2"></div>
                    <div class="col-xs-8 col-md-8">
                        <input type="submit" value="Send" name="send" class="btn btn-primary btn-block btn-lg" tabindex="6">
                    </div>
                    <div class="col-xs-2 col-md-2"></div>
                </div>
            </form>
        </div>
    </div>
</div>
