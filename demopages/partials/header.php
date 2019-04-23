<?php

//Website variables
$websiteData = [
    'siteURL' => 'https://www.meshcsss.com',
    'siteName' => 'mesh'
];

$isDownDirectory = $pageData['isDownDirectory'];

?>

<!DOCTYPE html>
<html class="no-js" lang="en_GB"> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo ($pageData['pageTitle']); ?></title>
    <meta name="description" content="<?php echo ($pageData['pageDescription']); ?>">
    <link rel="canonical" href="<?php echo ($websiteData['siteURL']); ?>" />
    <!-- Open Graph -->
    <meta property="og:locale" content="en_GB">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo ($pageData['pageTitle']); ?>">
    <meta property="og:description" content="<?php echo ($pageData['pageDescription']); ?>">
    <meta property="og:url" content="<?php echo ($websiteData['siteURL']); ?>">
    <meta property="og:site_name" content="<?php echo ($websiteData['siteName']); ?>">
    <meta property="og:image" content="<?php echo ($pageData['ogImage']); ?>">
    <!-- Twitter -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:description" content="<?php echo ($pageData['pageDescription']); ?>">
    <meta name="twitter:title" content="<?php echo ($pageData['pageTitle']); ?>">
    <meta name="twitter:image" content="<?php echo ($pageData['ogImage']); ?>">
    <!-- CSS -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php if ($isDownDirectory) echo '../'; ?>css/mesh.css">
    <link rel="stylesheet" type="text/css" href="<?php if ($isDownDirectory) echo '../'; ?>css/main.css">
    <!-- 
    
    Place favicon here !

    -->
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
    <header class="primary d-flex align-items-center">
        <div class="container-fullwidth">
            <div class="row">
                <div class="col-6">
                    <div class="d-flex align-items-center">
                        <div class="logo-cont">
                            <img class="logo" src="<?php if ($isDownDirectory) echo '../'; ?>assets/icons/meshlogo.svg" alt="mesh Logo">
                        </div>
                        <div class="text-cont ml-tab-3">
                            <h5>meshCSS</h5>
                        </div>
                    </div>
                </div>
                <div class="col-6 d-flex align-items-center justify-content-end">        
                    <nav class="primary">
                        <ul class="d-flex align-items-center my-0 t-uppercase">
                            <li class="mx-3"><a href="/documentation">Documentation</a></li>
                            <li class="mx-3"><a href="documentation.php">Contact</a></li>
                            <li class="download d-flex align-items-center mx-3"><a href="documentation.php">Download</a><img class="ml-1" src="<?php if ($isDownDirectory) echo '../'; ?>assets/icons/download.svg" alt="Downlod Icon"></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div> 
    </header>
    <div class="header-spacer"></div>
    <main>

