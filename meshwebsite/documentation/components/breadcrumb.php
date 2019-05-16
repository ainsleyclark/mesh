<?php

//Page variables
$pageData = [
	'pageTitle' => 'Breadcrumb',
	'pageDescription' => 'Easily indicate the current location of a user within a websites hierarchy with our breadcrumb component.',
    'activePage' => 'breadcrumb',
    'parentDirectory' => basename(__DIR__)
]; 

//Table of contents
$tableOfContents = [
    'usage' => 'Usage',
    'arrows' => 'Arrows',
];

?>

<?php include_once('../../partials/header.php'); ?>
<?php include_once('../../partials/sidenav.php'); ?>

<section class="content modal-page">
    <div class="container-fullwidth">
        <div class="row justify-content-center mt-4 mt-desk-5">
            <div class="col-12 col-tab-9 col-desk-8 mr-desk-2 px-desk-4">
                <h1 class="mb-2 mt-0"><?php echo $pageData['pageTitle'] ?></h1>
                <div class="lead"><?php echo $pageData['pageDescription'] ?></div>
                
                <!-- Usage -->
                <article class="section-scroll" id="usage">
                    <h2 class="b-b-light hash">Usage</h2>
                    <p class="secondary-lead">
                        Breadcrumbs are almost a secondary navigation screen which allows users to see clearly where they are in the website heirarchy. 
                    </p>
                    <div class="text-cont">
                        <h3>Notation:</h3>
                        <ul class="list">
                            <li>In order to use breadcrumbs with mesh you need to wrap the parent with a <code class="inline">breadcrumb</code> class, and child (breadcrumb items) to have the <code class="inline">breadcrumbs-item</code> class.</li>
                            <li>Be sure to add the <code class="inline">active</code> class to the page where the user currently is. This will give the link a color of <code class="inline">rgba(0, 0, 0, 0.5);</code></li>
                            <li><strong>Note:</strong> It is reccomended you use the <code class="inline">&lt;/ul&gt;</code> and <code class="inline">&lt;/li&gt;</code> semantic tags with breadcrumbs.</li>
                        </ul>
                    </div>
                    <div class="text-cont">
                        <h3>Example:</h3>
                        <p>The default breadcrumb class uses forward slashes as it's seperator. You can attach colors to the breadcrumb container by using our <a href="/documentation/utility/colors.php">color utility classes</a>.</p>
                    </div>
                    <ul class="breadcrumb bg-light c-primary">
                        <li class="breadcrumb-item"><a href="#">Nav item</a></li>
                        <li class="breadcrumb-item"><a href="#">Nav item</a></li>
                        <li class="breadcrumb-item active"><a href="#">Active nav item</a></li>
                    </ul>
                    <pre class="highlight"><code class="html">&lt;ul class="breadcrumb bg-light c-primary"&gt;
    &lt;li class="breadcrumb-item"&gt;&lt;a href="#"&gt;Nav item&lt;/a&gt;&lt;/li&gt;
    &lt;li class="breadcrumb-item"&gt;&lt;a href="#"&gt;Nav item&lt;/a&gt;&lt;/li&gt;
    &lt;li class="breadcrumb-item active"&gt;&lt;a href="#"&gt;Active nav item&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

                <article class="section-scroll" id="arrows">
                    <h2 class="b-b-light hash">Arrows</h2>
                    <p class="secondary-lead">
                       You can also change the default slashes to arrows by adding the <code class="inline">breadcrumb-arrow</code> class to the parent, in conjunction with <code class="inline">breadcrumb</code>.
                    </p>
                    <ul class="breadcrumb breadcrumb-arrow bg-secondary c-white mb-3">
                        <li class="breadcrumb-item"><a href="#">Nav item</a></li>
                        <li class="breadcrumb-item"><a href="#">Nav item</a></li>
                        <li class="breadcrumb-item active"><a href="#">Active nav item</a></li>
                    </ul>
                    <pre class="highlight"><code class="html">&lt;ul class="breadcrumb breadcrumb-arrow bg-primary c-white"&gt;
    &lt;li class="breadcrumb-item"&gt;&lt;a href="#"&gt;Nav item&lt;/a&gt;&lt;/li&gt;
    &lt;li class="breadcrumb-item"&gt;&lt;a href="#"&gt;Nav item&lt;/a&gt;&lt;/li&gt;
    &lt;li class="breadcrumb-item active"&gt;&lt;a href="#"&gt;Active nav item&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

                </div><!-- /Col -->
            <?php include_once('../../partials/smallnav.php') ?>
            <?php include_once('../../partials/sub-footer.php') ?>
        </div><!-- /Row -->
    </div><!-- /Container -->
</section>

<?php include_once('../../partials/footer.php') ?>

<?php function scripts() { ?>
<script>
    //!Any page relevant JS scripts to go in here.
</script>
<?php } ?>