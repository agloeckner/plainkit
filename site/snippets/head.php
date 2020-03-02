
<!doctype html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <title>
        <?= $page->title() ?>
    </title>
    <meta name="description" content="<?= $page->seoDescription() ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="format-detection" content="telephone=no">
	
	<?php echo css('assets/css/style.css') ?>
	<?php echo css('assets/css/swiper.min.css') ?>
	<?php echo css('assets/css/animate.min.css') ?>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:700|Kanit|Raleway&display=swap" rel="stylesheet">
    <link rel="canonical" href="<?= page()->url() ?>">
    
    <?php echo js('assets/js/jquery-1.12.1.min.js') ?>
    <?php echo js('assets/js/swiper.min.js') ?>
    <?php echo js('assets/js/wow.js') ?>

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">


	<script type="text/javascript">	
	// wow js init	    
	new WOW().init();
	</script>

</head>

<body>