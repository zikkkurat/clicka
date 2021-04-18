<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php \fw\core\base\View::getMeta() ?>
        <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="/css/main.css" rel="stylesheet">
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        
        <div class="container">
            <ul class="nav nav-pills">
                <li><a href="/">Home</a></li>
                <li><a href="/page/about">About</a></li>
                <li><a href="/admin">Admin</a></li>
                <li><a href="/user/signup">Signup</a></li>
                <li><a href="/user/login">Login</a></li>
                <li><a href="/user/logout">Logout</a></li>
            </ul>

            <?php if(isset($_SESSION['error'])): ?>
                <div class="alert alert-danger">
                    <?=$_SESSION['error']; unset($_SESSION['error'])?>
                </div>
            <?php endif; ?>

            <?php if(isset($_SESSION['success'])): ?>
                <div class="alert alert-success">
                    <?=$_SESSION['success']; unset($_SESSION['success'])?>
                </div>
            <?php endif; ?>

            <?= $content ?>

            <?php //debug(vendor\core\Db::$countSql)?>
            <?php //debug(vendor\core\Db::$queries)?>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="/bootstrap/js/bootstrap.min.js"></script>
        <?php
            foreach($scripts as $script){
                echo $script;
            }
        ?>
    </body>
</html>