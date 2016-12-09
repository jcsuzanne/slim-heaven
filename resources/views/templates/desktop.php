<!doctype html>
<!--[if IE]><![endif]-->
<!--[if lt IE 7 ]> <html class="no-js ie6 oldie" lang="{{lang}}"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7 oldie" lang="{{lang}}"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8 oldie" lang="{{lang}}"> <![endif]-->
<!--[if IE 9 ]>    <html class="no-js ie9" lang="{{lang}}"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js" lang="{{lang}}"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
{{ include('partials/seo.php')}}
{{ include('partials/favicon.php')}}
{{ include('partials/assets.php')}}
<link rel="stylesheet" type="text/css" href="{{assetUrl}}build/front{{isMinify}}.css" media="all" />
{{ include('partials/analytics.php')}}
</head>
<body data-controller="{{jscontroller}}" data-method data-event>
<div id="master">
    <!-- view -->
    <section id="main-content" role="main" data-controller="{{jscontroller}}">{{view|raw}}</section>
</div>
{{ include('partials/desktop/scripts.php')}}
</body>
</html>


