<?php

//Website variables
$websiteData = [
    'siteURL' => 'https://www.meshcsss.com',
    'siteName' => 'mesh'
];

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
    <link rel="stylesheet" type="text/css" href="css/vendor/font-awesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/vendor/bootstrap/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/master.css">
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
    <header class="primary">
        <nav>
        </nav>
    </header>
    <main>

