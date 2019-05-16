<?php

//Page variables
$pageData = [
	'pageTitle' => 'Hero',
	'pageDescription' => 'Something about this page',
    'activePage' => 'hero',
    'parentDirectory' => basename(__DIR__)
]; 

//Table of contents
//! DUPLICATE FOR CONTENTS ITEM,
//! If you add an article, make sure the Id matches the first value here.
$tableOfContents = [
    'usage' => 'Usage',
];

?>

<?php include_once('../../partials/header.php'); ?>
<?php include_once('../../partials/sidenav.php'); ?>

<section class="content hero-page">
    <div class="container-fullwidth">
        <div class="row justify-content-center mt-4 mt-desk-5">
            <div class="col-12 col-tab-9 col-desk-8 mr-desk-2 px-desk-4">
                <h1 class="mb-2 mt-0"><?php echo $pageData['pageTitle'] ?></h1>
                <div class="lead"><?php echo $pageData['pageDescription'] ?></div>
                
                <!-- Usage -->
                <article class="section-scroll" id="usage">
                    <h2 class="b-b-light hash">Usage</h2>
                    <p class="secondary-lead">
                        Use the <code class="inline">class</code> for inline code.
                        <br>Another line of something.
                    </p>
                    <div class="text-cont">
                        <div class="alert">
                            Please wrap all your text in a <code class="inline">text-cont</code> class.
                        </div>
                    
                    </div>
                    <pre class="highlight"><code class="html">&lt;div class="alert"&gt; 
    This is a default alert
&lt;/div&gt; 
</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
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