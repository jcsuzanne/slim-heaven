<?php
$title = (isset($meta))?strip_tags($meta):'';
$description = (isset($metaDescription))?$metaDescription:'';
$img = (isset($metaImg))?$metaImg:'';
?>
<title><?= $title ?></title>
<meta property="og:title" content="<?= $title ?>">
<meta property="og:site_name" content="site">
<meta property="og:url" content="<?= $currentUrl ?>">
<meta property="og:description" content="<?= $description ?>">
<meta property="og:image" content="<?= $img ?>" />
<meta property="og:type" content="website">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@twitter">
<meta name="twitter:title" content="<?= $title ?>">
<meta name="twitter:description" content="<?= $description ?>">
<meta name="twitter:image:src" content="<?= $img ?>">
<meta name="robots" content="index, follow">
<meta name="description" content="<?= $description ?>" />
<link rel="canonical" href="<?=  $currentUrl ?>" />