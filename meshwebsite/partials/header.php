<?php

//Website variables
$websiteData = [
    'siteURL' => 'https://www.meshcsss.com',
    'siteName' => 'mesh',
    'ogImage' => ''
];

$isHome = stripos($pageData['activePage'], 'home') === false;

?>

<!DOCTYPE html>
<html class="no-js" lang="en_GB"> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo ($pageData['pageTitle']) . ' | ' ?>meshCSS</title>
    <meta name="description" content="<?php echo ($pageData['pageDescription']); ?>">
    <link rel="canonical" href="<?php echo ($websiteData['siteURL']); ?>" />
    <!-- Open Graph -->
    <meta property="og:locale" content="en_GB">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo ($pageData['pageTitle']); ?>">
    <meta property="og:description" content="<?php echo ($pageData['pageDescription']); ?>">
    <meta property="og:url" content="<?php echo ($websiteData['siteURL']); ?>">
    <meta property="og:site_name" content="<?php echo ($websiteData['siteName']); ?>">
    <meta property="og:image" content="<?php echo ($websiteData['ogImage']); ?>">
    <!-- Twitter -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:description" content="<?php echo ($pageData['pageDescription']); ?>">
    <meta name="twitter:title" content="<?php echo ($pageData['pageTitle']); ?>">
    <meta name="twitter:image" content="<?php echo ($pageData['ogImage']); ?>">
    <!-- CSS -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" type="text/css" href="/css/mesh.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/css/vendor/fontawesome/css/all.css">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="/assets/favicon/site.webmanifest">
    <link rel="mask-icon" href="/assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="/assets/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="/assets/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
</head>
<body>
    <!--[if lte IE 9]>
        <div class="outdated-browser">
            <h2>You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</h2>
        </div>
    <![endif]-->
    <!-- =====================
        Header
        ===================== -->
    <header class="primary d-flex align-items-center b-b1-light <?php if($isHome !== false ) echo 'bg-white' ?>">
        <div class="container-fullwidth px-4">
            <div class="row">
                <div class="col-6">
                    <a class="d-flex align-items-center" href="/">
                        <div class="logo-cont">
                            <img class="logo" src="/assets/svg/meshlogo.svg" alt="mesh Logo">
                        </div>
                        <div class="text-cont">
                            <h3>meshCSS</h3>
                        </div>
                    </a>
                </div>
                <div class="col-6 d-flex align-items-center justify-content-end">        
                    <nav class="primary">
                        <ul class="d-flex align-items-center my-0 t-uppercase">
                            <a class="hover" href="/documentation/getting-started"><li class="mx-3">Documentation</li></a>
                            <a class="hover" href="/documentation/getting-started"><li class="mx-3">Contact</li></a>
                            <a class="ml-3" href="documentation.php">
                                <button class="btn rounded outline primary icon download">Download
                                <svg class="ml-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 471.2 471.2" style="enable-background:new 0 0 471.2 471.2;" xml:space="preserve">
                                    <g>
                                        <path d="M457.7,230.15c-7.5,0-13.5,6-13.5,13.5v122.8c0,33.4-27.2,60.5-60.5,60.5H87.5c-33.4,0-60.5-27.2-60.5-60.5v-124.8    c0-7.5-6-13.5-13.5-13.5s-13.5,6-13.5,13.5v124.8c0,48.3,39.3,87.5,87.5,87.5h296.2c48.3,0,87.5-39.3,87.5-87.5v-122.8    C471.2,236.25,465.2,230.15,457.7,230.15z" data-original="#000000" class="active-path" data-old_color="#ffffff" fill="#ffffff"/>
                                        <path d="M226.1,346.75c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4l85.8-85.8c5.3-5.3,5.3-13.8,0-19.1c-5.3-5.3-13.8-5.3-19.1,0l-62.7,62.8    V30.75c0-7.5-6-13.5-13.5-13.5s-13.5,6-13.5,13.5v273.9l-62.8-62.8c-5.3-5.3-13.8-5.3-19.1,0c-5.3,5.3-5.3,13.8,0,19.1    L226.1,346.75z" data-original="#000000" class="active-path" data-old_color="#ffffff" fill="#ffffff"/>
                                    </g>
                                </svg>
                                <!-- <img class="ml-1" src="/assets/icons/download-pink.svg" alt="Downlod Icon"> -->
                                </button>
                            </a>
                        </ul>
                    </nav>
                </div>
            </div>
        </div> 
    </header>
    <?php if( stripos($pageData['activePage'], 'home') === false) echo '<div class="header-spacer"></div>' ?>
    <main>

