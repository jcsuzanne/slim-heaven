<!doctype html>
<!--[if IE]><![endif]-->
<!--[if lt IE 7 ]> <html class="no-js ie6 oldie" lang="<?= $lang ?>"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7 oldie" lang="<?= $lang ?>"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8 oldie" lang="<?= $lang ?>"> <![endif]-->
<!--[if IE 9 ]>    <html class="no-js ie9" lang="<?= $lang ?>"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js" lang="<?= $lang ?>"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <?php require $app->views_path.'seo.php'; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= $viewController->getAsset('favicon.ico') ?>">
    <!-- Styles -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,600italic,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?= $viewController->getAsset('assets/build/top'.$isMinify.'.css') ?>" media="all" />
    <link rel="stylesheet" type="text/css" href="<?= $viewController->getAsset('assets/build/front'.$isMinify.'.css') ?>" media="all" />
    <!-- Javascript -->
    <script type="text/javascript" src="<?= $viewController->getAsset('assets/build/top'.$isMinify.'.js') ?>"></script>
    <script type="text/javascript">
    // <![CDATA[
    var config = {
        lang : "<?= $lang ?>",
        pathAssets : "<?= $viewController->getAsset('assets') ?>"
    }
    // ]]>
    </script>
</head>
<body role="document" data-controller="<?= $jscontroller ?>" data-method data-event>
<div id="master">
    <section id="main-content" role="main" data-controller="<?= $jscontroller ?>"><?= $view ?></section>
</div>
<script type="text/javascript" src="<?= $viewController->getAsset('assets/build/front'.$isMinify.'.js') ?>"></script>
</body>
</html>