<?php

//Website variables
$websiteData = [
    'siteURL' => 'https://www.meshcsss.com',
    'siteName' => 'mesh',
    'ogImage' => ''
];

$isDownDirectory = $pageData['isDownDirectory'];
$isHome = stripos($pageData['activePage'], 'home') === false;

?>

<!DOCTYPE html>
<html class="no-js" lang="en_GB"> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>meshCSS | <?php echo ($pageData['pageTitle']); ?></title>
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
    <link rel="stylesheet" type="text/css" href="/css/mesh.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
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
                    <a class="d-flex align-items-center" href="http://www.meshcss.com">
                        <div class="logo-cont">
                            <img class="logo" src="/assets/svg/meshlogo.svg" alt="mesh Logo">
                        </div>
                        <div class="text-cont">
                            <h5>meshCSS</h5>
                        </div>
                    </a>
                </div>
                <div class="col-6 d-flex align-items-center justify-content-end">        
                    <nav class="primary">
                        <ul class="d-flex align-items-center my-0 t-uppercase">
                            <a class="hover" href="/documentation"><li class="mx-3">Documentation</li></a>
                            <a class="hover" href="/documentation"><li class="mx-3">Contact</li></a>
                            <li class="download d-flex align-items-center mx-3"><a href="documentation.php">Download</a><img class="ml-1" src="/assets/icons/download-pink.svg" alt="Downlod Icon"></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div> 
    </header>
    <?php if( stripos($pageData['activePage'], 'home') === false) echo '<div class="header-spacer"></div>' ?>
    <main>

