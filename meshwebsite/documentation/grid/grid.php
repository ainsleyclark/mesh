<?php

//Page variables
$pageData = [
	'pageTitle' => 'Grid',
	'pageDescription' => 'See how powerful our mobile-first flexbox grid is. With five breakpoints to choose from, its easy sculpting elements to be responsive.',
    'activePage' => 'grid',
    'parentDirectory' => basename(__DIR__)
]; 

//Table of contents
$tableOfContents = [
	'howItWorks' => 'How it works',
	'containers' => 'Containers',
    'rows' => 'Rows',
    'columns' => 'Columns',
	'offset' => 'Offset',
];

?>

<?php include_once('../../partials/header.php'); ?>
<?php include_once('../../partials/sidenav.php'); ?>

<section class="content grid-page">
    <div class="container-fullwidth">
        <div class="row justify-content-center mt-4 mt-desk-5">
            <div class="col-12 col-tab-9 col-desk-8 mr-desk-2 px-desk-4">
                <h1 class="mb-2">Grid</h1>
                <div class="lead"><?php echo $pageData['pageDescription'] ?></div>

                <!-- How it works -->
                <article class="section-scroll py-2" id="howItWorks">
                    <h2 class="pb-2 b-b1-light mt-5 mb-1 hash">How it works</h2>
                    <p>mesh uses the conventional containers, rows and columns to layout and align content, it's built with flex box and is fully responsive. Here's an example:</p>
<pre class="highlight"><code class="html">&lt;div class="container"&gt;
    &lt;div class="row"&gt;
        &lt;div class="col-12 col-tab-6 col-desk-4 col-hd-3"&gt;
            I'm a column, I take up 12 columns at default width, 6 at tablet, 4 at dekstop and 3 in hd screens
        &lt;/div&gt;
        &lt;div class="col-12 col-tab-6 col-desk-4 col-hd-3"&gt;
            I'm a column, I take up 12 columns at default width, 6 at tablet, 4 at dekstop and 3 in hd screens
        &lt;/div&gt;
        &lt;div class="col-12 col-tab-6 col-desk-4 col-hd-3"&gt;
            I'm a column, I take up 12 columns at default width, 6 at tablet, 4 at dekstop and 3 in hd screens
        &lt;div class="col-12 col-tab-6 col-desk-4 col-hd-3"&gt;
            I'm a column, I take up 12 columns at default width, 6 at tablet, 4 at dekstop and 3 in hd screens
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

                <!-- Containers -->
                <article class="section-scroll py-2" id="containers">
                    <h2 class="pb-2 b-b1-light mt-5 mb-1 hash">Containers</h2>
                    <p>A container is the wrapper for a row (more on that later) and defines the width of your content. It can be at fixed size or full width, and will gracefully become smaller as screen size gets smaller. Here are your options:</p>
                    <div class="text-cont my-3">
                        <h4 class="mb-1">Container options:</h4>
                        <ul class="list">
                            <li>A container, by default is at fixed size, by using the <code class="inline">container</code> tag. With maximum widths set at each side, it will gradually get smaller as the viewport does.</li>
                            <li>Or a container can be full width, which will take up 100% of the screen and have slight padding either side. This is acheived by adding the <code class="inline">container-fullwidth</code> class to a div or semantic element.</li>
                        </ul>
                    </div>
                    <button class="btn btn-secondary">Switch to container-fullwidth</button>
                    <div class="browser">
                        <div class="img-cont p-relative my-3">
                            <img class="" src="/assets/svg/browserwindow.svg" alt="Browser window">
                            <div class="container-fullwidth c-white p-absolute br">
                                <div class="row">
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Rows -->
                <article class="section-scroll py-2" id="rows">
                    <h2 class="pb-2 b-b1-light mt-5 mb-1 hash">Rows</h2>
                    <p>A container is the wrapper for a row (more on that later) and defines the width of your content. It can be at fixed size or full width, and will gracefully become smaller as screen size gets smaller. Here are your options:</p>
                    <h4 class="mb-1 mt-3">Container options:</h4>
                    <ul class="list">
                        <li>A container, by default is at fixed size, by using the <code class="inline">container</code> tag. With maximum widths set at each side, it will gradually get smaller as the viewport does.</li>
                        <li>Or a container can be full width, which will take up 100% of the screen and have slight padding either side. This is acheived by adding the <code class="inline">container-fullwidth</code> class to a div or semantic element.</li>
                    </ul>
                </article>

                <!-- Columns -->
                <article class="section-scroll py-2" id="offset">
                    <h2 class="pb-2 b-b1-light mt-5 mb-1 hash">Columns</h2>
                    <p>A container is the wrapper for a row (more on that later) and defines the width of your content. It can be at fixed size or full width, and will gracefully become smaller as screen size gets smaller. Here are your options:</p>
                    <h4 class="mb-1 mt-3">Lorem Ipsum</h4>
                    <ul class="list">
                        <li></li>
                        <li></li>
                    </ul>
                </article>

                <!-- Offset -->
                <article class="section-scroll py-2" id="offset">
                    <h2 class="pb-2 b-b1-light mt-5 mb-1 hash">Offset</h2>
                    <p>A container is the wrapper for a row (more on that later) and defines the width of your content. It can be at fixed size or full width, and will gracefully become smaller as screen size gets smaller. Here are your options:</p>
                    <h4 class="mb-1 mt-3">Lorem Ipsum</h4>
                    <ul class="list">
                        <li></li>
                        <li></li>
                    </ul>
                </article>

                <div class="container-cont">
                    <div class="row c-white t-center">
                        <div class="col-1">
                            <div class="text bg-primary w-100">1</div>
                        </div>
                        <div class="col-1">
                            <div class="text bg-primary w-100">2</div>
                        </div>
                        <div class="col-1">
                            <div class="text bg-primary w-100">3</div>
                        </div>
                        <div class="col-1">
                            <div class="text bg-primary w-100">4</div>
                        </div>
                        <div class="col-1">
                            <div class="text bg-primary w-100">5</div>
                        </div>
                        <div class="col-1">
                            <div class="text bg-primary w-100">6</div>
                        </div>
                        <div class="col-1">
                            <div class="text bg-primary w-100">7</div>
                        </div>
                        <div class="col-1">
                            <div class="text bg-primary w-100">8</div>
                        </div>
                        <div class="col-1">
                            <div class="text bg-primary w-100">9</div>
                        </div>
                        <div class="col-1">
                            <div class="text bg-primary w-100">10</div>
                        </div>
                        <div class="col-1">
                            <div class="text bg-primary w-100">11</div>
                        </div>
                        <div class="col-1">
                            <div class="text bg-primary w-100">12</div>
                        </div>
                    </div>
                </div>
            </div><!-- /Col -->
            <?php include_once('../../partials/smallnav.php'); ?>
            <?php include_once('../../partials/sub-footer.php'); ?>
        </div><!-- /Row -->
    </div><!-- /Container -->
</section>

<?php include_once('../../partials/footer.php') ?>
