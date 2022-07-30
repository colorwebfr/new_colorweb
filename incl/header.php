<?php
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$racine = $_SERVER['DOCUMENT_ROOT'];

$CurrentPath = parse_url($actual_link);
$last_path = str_replace('/', '', end($CurrentPath));
$writeLast_path = $last_path != "colorweb" ? 'Colorweb | '.$last_path : 'Colorweb';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name='keywords' content="site web, Boutique en ligne, e-commerce, création site, site vitrine">
    <meta name='description' content="Conception, conseils, audit, maintenace, référencement naturel. Colorweb s'adapte en vous proposant des formules modulables pour convenir à tous ...">
    <meta name='robots' content="index,follow">
    <meta name='author' content='Kevin Capoccetti, capoccetti@gmail.com'>
    <title><?php echo $writeLast_path; ?> </title>

    <link rel="icon" type="image/x-icon" href="/colorweb/uploads/favicon.ico">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="/colorweb/slick/slick.css"/>
</head>
<body class="<?php echo $last_path; ?>">
    
    <header>
        <div class="container">
            <div class="blockLogoSite">
                <img src="/colorweb/uploads/colorweb-logo.png" alt="Logo Colorweb.fr" class="logoSite">
            </div>
            <nav class="navigationTop">
                <ul class="li"><a href="#">Accueil</a></ul>
                <ul class="li"><a href="#">Site Web</a></ul>
                <ul class="li"><a href="#">Maintenance</a></ul>
                <ul class="li"><a href="#">Contact</a></ul>
                <ul class="li"><a href="#">Audit</a></ul>
            </nav>
        </div>
    </header>