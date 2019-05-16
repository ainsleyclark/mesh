<?php

//Page variables
$pageData = [
	'pageTitle' => 'Card',
	'pageDescription' => 'Use materialistic cards in various styles & formats with ease with our card component.',
    'activePage' => 'card',
    'parentDirectory' => basename(__DIR__)
]; 

//Table of contents
$tableOfContents = [
    'usage' => 'Usage',
];

?>

<?php include_once('../../partials/header.php'); ?>
<?php include_once('../../partials/sidenav.php'); ?>

<section class="content card-page">
    <div class="container-fullwidth">
        <div class="row justify-content-center mt-4 mt-desk-5">
            <div class="col-12 col-tab-9 col-desk-8 mr-desk-2 px-desk-4">
                <h1 class="mb-2 mt-0"><?php echo $pageData['pageTitle'] ?></h1>
                <div class="lead"><?php echo $pageData['pageDescription'] ?></div>

                <!-- Usage -->
                <article class="section-scroll" id="usage">
                    <h2 class="b-b-light hash">Usage</h2>
                    <p class="mt-2">
                        All alerts are prefixed with the <code class="inline">alert</code> class. This gives the element some common properties for the alert such as margin and padding.
                    </p>
                    <p class="mb-3">You can have <strong>any combination</strong> of the classes listed below.</p>


                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">
                            <h2>Simple Card Header</h2>
                            </div>
                        </div>
                        <div class="card-content">
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
                        </div>
                        <div class="card-footer">
                            <button>Some action</button>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">
                            <h2>Simple Card Header</h2>
                            </div>
                        </div>
                        <div class="card-content">
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
                        </div>
                    </div>

                    <div class="card card-large">
                        <div class="card-header">
                            <div class="card-title">
                            <h2>Simple Card Header</h2>
                            </div>
                        </div>
                        <div class="card-content">
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
                        </div>
                    </div>





                    <pre class="highlight"><code class="html">&lt;div class="alert"&gt; 
    This is a default alert
&lt;/div&gt; 
&lt;div class="alert alert-primary"&gt; 
    This is a primary alert
&lt;/div&gt; 
&lt;div class="alert alert-success"&gt; 
    This is a success alert
&lt;/div&gt; 
&lt;div class="alert alert-info"&gt; 
    This is a info alert
&lt;/div&gt; 
&lt;div class="alert alert-warning"&gt; 
    This is a warning alert
&lt;/div&gt; 
&lt;div class="alert alert-danger"&gt; 
    This is a danger alert
&lt;/div&gt; 
&lt;div class="alert alert-link"&gt; 
    This is a link alert
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

            </div><!-- /Col -->
            <?php include_once('../../partials/smallnav.php') ?>
            <?php include_once('../../partials/sub-footer.php') ?>
        </div><!-- /Row -->
    </div><!-- /Container -->
</section>

<?php include_once('../../partials/footer.php') ?>