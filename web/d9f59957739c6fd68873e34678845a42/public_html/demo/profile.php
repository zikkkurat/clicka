<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/override.css" />
    <link rel="stylesheet" href="/style.css" />

    <title>click~a</title>
</head>
<?php 
    $page = $_GET['page'] ?? 'profile';
?>
<body>
    <?php include ('_navbar.php'); ?>

    <div class="d-flex">
        <?php include ('_sidebar.php'); ?>

        <div id="content">
            <div class="row">
                <?php include ('pages/'.$page.'.php'); ?>
            </div>

            <div class="overlay"></div>
        </div>

    </div>

    <script src="/js/jquery-3.5.1.slim.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<script></script>
