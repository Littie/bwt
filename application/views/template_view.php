<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <title>Hello BWT</title>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css"/>
</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <ul class="nav nav-pills">
                <li><a href="/">Main</a></li>
                <li><a href="/login">Sign in</a></li>
                <li><a href="/weather">Wether</a></li>
                <li><a href="/feedback">Feedback</a></li>
                <li><a href="/feedback_list">Feedback list</a></li>
            </ul>
        </div>
        <div class="col-md-2"></div>
    </div>

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <?php include 'application/views/' . $content_view; ?>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
</body>
</html>
