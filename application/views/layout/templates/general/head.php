<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">

<?php
Declaration::addStyle('main');
?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
      integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

<link rel="icon" type="image/png" href="/public/favicon.ico"/>

<meta name="msvalidate.01" content="DF72F56D34097D7124A378E22B43CF63"/>
<meta property="og:type" content="website">
<meta property="og:site_name" content="Scantrigger">
<meta property="og:title" content="Scantrigger">
<meta property="og:description" content="Scantrigger">
<meta property="og:url" content="<?= SITE_URL ?>">
<meta property="og:locale" content="<?= Lang::code() ?>_<?= strtoupper(Lang::code()) ?>">
<meta property="og:image" content="<?= SITE_URL ?>/public/images/ScantriggerLogo-desktop.svg">
<meta property="og:image:width" content="968">
<meta property="og:image:height" content="504">

<title><?= isset($vars->title) ? $vars->title : 'Kide Store' ?></title>

<?php Declaration::addScript('jquery-3.1.1.min', 'head'); ?>
<?= Declaration::$ExternalStyle ?>
<?= Declaration::$ExternalTagToHead ?>

<?= Declaration::$ExternalScriptToHead ?>
