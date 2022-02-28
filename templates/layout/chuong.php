<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="http://<?= $_SERVER['SERVER_NAME'] ?>:<?= $_SERVER['SERVER_PORT'] ?>/sachtruyen/webroot/css/bootstrap.css">
    <link rel="stylesheet" href="http://<?= $_SERVER['SERVER_NAME'] ?>:<?= $_SERVER['SERVER_PORT'] ?>/sachtruyen/webroot/css/bootstrap.css.map">
    <link rel="stylesheet" href="http://<?= $_SERVER['SERVER_NAME'] ?>:<?= $_SERVER['SERVER_PORT'] ?>/sachtruyen/webroot/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://<?= $_SERVER['SERVER_NAME'] ?>:<?= $_SERVER['SERVER_PORT'] ?>/sachtruyen/webroot/css/bootstrap.min.css.map">
    <link rel=" stylesheet" href="http://<?= $_SERVER['SERVER_NAME'] ?>:<?= $_SERVER['SERVER_PORT'] ?>/sachtruyen/webroot/font/fontawesome.min.css">
    <script src="http://<?= $_SERVER['SERVER_NAME'] ?>:<?= $_SERVER['SERVER_PORT'] ?>/sachtruyen/webroot/js/jquery.min.js"></script>
    <script src="http://<?= $_SERVER['SERVER_NAME'] ?>:<?= $_SERVER['SERVER_PORT'] ?>/sachtruyen/webroot/js/popper.min.js"></script>
    <script src="http://<?= $_SERVER['SERVER_NAME'] ?>:<?= $_SERVER['SERVER_PORT'] ?>/sachtruyen/webroot/js/popper.min.js.map"></script>
    <script src="http://<?= $_SERVER['SERVER_NAME'] ?>:<?= $_SERVER['SERVER_PORT'] ?>/sachtruyen/webroot/js/bootstrap.min.js"></script>
    <script src="http://<?= $_SERVER['SERVER_NAME'] ?>:<?= $_SERVER['SERVER_PORT'] ?>/sachtruyen/webroot/js/bootstrap.min.js.min"></script>
    <script type="text/javascript" src="http://<?= $_SERVER['SERVER_NAME'] ?>:<?= $_SERVER['SERVER_PORT'] ?>/sachtruyen/webroot/js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="http://<?= $_SERVER['SERVER_NAME'] ?>:<?= $_SERVER['SERVER_PORT'] ?>/sachtruyen/webroot/js/turn.min.js"></script>

    <style type="text/css">
        body {
            overflow: hidden;
        }

        #flipbook .page {
            background: white;
        }

        #flipbook .shadow,
        #flipbook.shadow {
            -webkit-box-shadow: 0 4px 10px #666;
            -moz-box-shadow: 0 4px 10px #666;
            -ms-box-shadow: 0 4px 10px #666;
            -o-box-shadow: 0 4px 10px #666;
            box-shadow: 0 4px 10px #666;
        }
    </style>
    <title>Hello, world!</title>
</head>

<body>

    <?= $this->element('nav'); ?>


    <?php
    $this->Breadcrumbs->setTemplates([
        'wrapper' => '<nav aria-label="breadcrumb"><ol class="breadcrumb" {{attrs}}>{{content}}</ol></nav>',
        'item' => '<li {{attrs}}><a href="{{url}}"{{innerAttrs}}>{{title}}</a></li>{{separator}}',
    ]);
    echo $this->Breadcrumbs->render();
    ?>


    <?= $this->fetch('content'); ?>

    <script type="text/javascript">
        $('#flipbook').turn({
            width: 1100,
            height: 600,
            page: 1,
            autoCenter: true,
            duration: 2000
        })
    </script>

</body>

</html>
