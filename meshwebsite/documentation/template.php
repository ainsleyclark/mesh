<?php

//Page variables
$pageData = [
	'pageTitle' => '',
	'pageDescription' => '',
    'activePage' => '',
    'parentDirectory' => basename(__DIR__)
]; 

//Table of contents
$tableOfContents = [
	'usage' => 'Usage',
];

?>

<section class="content button-page">
    <div class="container-fullwidth">
        <div class="row justify-content-center mt-4 mt-desk-5">
            <div class="col-12 col-tab-9 col-desk-8 mr-desk-2 px-desk-4">
                <h1 class="mb-2 mt-0">Button</h1>
                <div class="lead"><?php echo $pageData['pageDescription'] ?></div>

                <p>This is a template file</p>

                <!-- Rounded Buttons -->
                <article class="section-scroll py-2" id="usage">
                    <h2 class="pb-2 b-b1-light mt-5 mb-1 hash">Template</h2>
                    <p>Buttons can also look rounded with the <code class="inline">&lt;btn-rounded&gt;</code></p>
                    <pre class="highlight"><code class="html">&lt;button class="btn btn-primary btn-rounded"&gt;Rounded&lt;/button&gt;
&lt;button class="btn btn-primary btn-rounded btn-outline"&gt;Outline&lt;/button&gt;
&lt;button class="btn btn-primary btn-rounded" disabled&gt;Disabled&lt;/button&gt;
</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

                </div><!-- /Col -->
            <?php include_once('../../partials/smallnav.php') ?>
            <?php include_once('../../partials/sub-footer.php') ?>
        </div><!-- /Row -->
    </div><!-- /Container -->
</section>

<?php include_once('../../partials/footer.php') ?>