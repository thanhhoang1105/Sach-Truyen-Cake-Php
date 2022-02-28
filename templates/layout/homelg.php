<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="http://<?= $_SERVER['SERVER_NAME'] ?>:<?= $_SERVER['SERVER_PORT'] ?>/sachtruyen/webroot/css/bootstrap.min.css">
    <link rel=" stylesheet" href="http://<?= $_SERVER['SERVER_NAME'] ?>:<?= $_SERVER['SERVER_PORT'] ?>/sachtruyen/webroot/font/fontawesome.min.css">
    <script src="http://<?= $_SERVER['SERVER_NAME'] ?>:<?= $_SERVER['SERVER_PORT'] ?>/sachtruyen/webroot/js/jquery.min.js">
    </script>
    <script src="http://<?= $_SERVER['SERVER_NAME'] ?>:<?= $_SERVER['SERVER_PORT'] ?>/sachtruyen/webroot/js/popper.min.js"></script>
    <script src="http://<?= $_SERVER['SERVER_NAME'] ?>:<?= $_SERVER['SERVER_PORT'] ?>/sachtruyen/webroot/js/bootstrap.min.js"></script>

    <style>
        .active a {
            color: brown;
        }
    </style>
    <title>Hello, world!</title>
</head>

<body>

    <?= $this->element('navlg'); ?>
    <?= $this->element('banner'); ?>


    <?php
    $this->Breadcrumbs->setTemplates([
        'wrapper' => '<nav aria-label="breadcrumb"><ol class="breadcrumb" {{attrs}}>{{content}}</ol></nav>',
        'item' => '<li {{attrs}}><a href="{{url}}"{{innerAttrs}}>{{title}}</a></li>{{separator}}',
    ]);
    echo $this->Breadcrumbs->render();
    ?>


    <?= $this->fetch('content'); ?>

    <?= $this->element('footer'); ?>

</body>

</html>
