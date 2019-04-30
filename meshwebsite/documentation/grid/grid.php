<?php

//Page variables
$pageData = [
	'pageTitle' => 'Grid',
	'pageDescription' => '',
    'activePage' => 'grid',
    'parentDirectory' => basename(__DIR__)
]; 

//Table of contents
$tableOfContents = [
	'howItWorks' => 'How it works',
	'containers' => 'Containers',
	'startusing' => 'Start using mesh'
];

?>

<?php include_once('../../partials/header.php'); ?>
<?php include_once('../../partials/sidenav.php'); ?>

<section class="content">
    <div class="container-fullwidth">
        <div class="row justify-content-center mt-4 mt-desk-5">
            <div class="col-12 col-tab-9 col-desk-7 mr-desk-2">
                <h1 class="mb-2">The grid system</h1>
                <div class="lead">See how powerful our mobile-first flexbox grid is.</div>
                <!-- How it works -->
                <div class="section-scroll" id="howItWorks">
                    <h2 class="pb-2 b-b1-light mt-5 mb-1 hash">How it works</h2>
                    <p>mesh uses the conventional containers, rows and columns to layout and align content, it's built with flex box and is fully responsive. Here's an example:</p>
<pre class="highlight"><code class="html">&lt;<span class="tag">div</span> <span class="attr">class=</span><span class="name">"container"</span>&gt;
    &lt;<span class="tag">div </span><span class="attr">class=</span><span class="name">"row"</span>&gt;
        &lt;<span class="tag">div </span><span class="attr">class=</span><span class="name">"col-12 col-tab-6 col-desk-4 col-hd-3"</span>&gt;
            I'm a column, I take up 12 columns at default width, 6 at tablet, 4 at dekstop and 3 in hd screens
        &lt;<span class="tag">/div</span>&gt;
        &lt;<span class="tag">div </span><span class="attr">class=</span><span class="name">"col-12 col-tab-6 col-desk-4 col-hd-3"</span>&gt;
            I'm a column, I take up 12 columns at default width, 6 at tablet, 4 at dekstop and 3 in hd screens
        &lt;<span class="tag">/div</span>&gt;
        &lt;<span class="tag">div </span><span class="attr">class=</span><span class="name">"col-12 col-tab-6 col-desk-4 col-hd-3"</span>&gt;
            I'm a column, I take up 12 columns at default width, 6 at tablet, 4 at dekstop and 3 in hd screens
        &lt;<span class="tag">div </span><span class="attr">class=</span><span class="name">"col-12 col-tab-6 col-desk-4 col-hd-3"</span>&gt;
            I'm a column, I take up 12 columns at default width, 6 at tablet, 4 at dekstop and 3 in hd screens
        &lt;<span class="tag">/div</span>&gt;
    &lt;<span class="tag">/div</span>&gt;
&lt;<span class="tag">/div</span>&gt;</code></pre>
                </div>
                <!-- Containers -->
                <h2 class="pb-2 b-b1-light mt-5 mb-1 hash">Containers</h2>
                <p>A container can be at fixed size, and will gracefully become smaller as screen size gets smaller.</p>
                <div class="browser">
                    <div class="img-cont p-relative my-3">
                        <img class="p-absolute" src="../assets/svg/browserwindow.svg" alt="Browser window">
                    </div>
                </div>
            </div><!-- /Col -->
            <?php include_once('../../partials/smallnav.php'); ?>
            <?php include_once('../../partials/footer.php'); ?>
        </div><!-- /Row -->
    </div><!-- /Container -->
</section>

