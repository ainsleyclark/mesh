<?php

//Page variables
$pageData = [
    'pageTitle' => 'Spacing',
    'pageDescription' => 'mesh has a wide range of spacing utility classes, which makes it easy to toggle margin and padding responsively in your web builds.',
    'activePage' => 'spacing',
    'parentDirectory' => basename(__DIR__),
];

//Table of contents
$tableOfContents = [
    'usage' => 'Usage',
    'examples' => 'Examples',
];

?>

<?php include_once '../../partials/header.php';?>
<?php include_once '../../partials/sidenav.php';?>

<section class="content spacing-page">
    <div class="container-fullwidth">
        <div class="row justify-content-center mt-4 mt-desk-5">
            <div class="col-12 col-tab-9 col-desk-8 mr-desk-2 px-desk-4">
                <h1 class="mb-2 mt-0"><?php echo $pageData['pageTitle'] ?></h1>
                <div class="lead"><?php echo $pageData['pageDescription'] ?></div>

                <!-- Usage -->
                <article class="section-scroll" id="usage">
                    <h2 class="b-b-light hash">Usage</h2>
                    <p class="secondary-lead">
                        Sometimes it can be a pain writing out padding & margin responsively using CSS, which is why we have included handy utility classes to make things easier.
                    </p>
                    <div class="text-cont">
                        <h3>Notation:</h3>
                        <ul class="list-line">
                            <li>You can target the margin util classes by using <code class="inline">m{side}-{breakpoint}-{number}</code>. The side being optional and either t, b, l, r, x or y. The breakpoint being optional and one of our five breakpoints and the amount ranging from 1 to 5.</li>
                            <li>You can target the padding util classes by using <code class="inline">p{side}-{breakpoint}-{number}</code>.</li>
                        </ul>
                    </div>
                    <div class="text-cont">
                        <h3>Properties:</h3>
                        <div class="table-props">
                            <div class="header d-flex justify-content-between w-100 mt-3">
                                <span>Class</span>
                                <span>Side (optional)</span>
                                <span>Space</span>
                            </div>
                            <div class="body d-flex justify-content-around flex-wrap mt-1">
                                <div class="column">
                                    <div class="item">{p} padding</div>
                                    <div class="item">{m} margin</div>
                                </div>
                                <div class="line"></div>
                                <div class="column">
                                    <div class="item">{} All sides</div>
                                    <div class="item">{t} top</div>
                                    <div class="item">{r} right</div>
                                    <div class="item">{b} bottom</div>
                                    <div class="item">{l} left</div>
                                    <div class="item">{x} horizontal</div>
                                    <div class="item">{y} vertical</div>
                                </div>
                                <div class="line"></div>
                                <div class="column">
                                    <div class="item">{1} 0.5rem</div>
                                    <div class="item">{2} 0.75rem</div>
                                    <div class="item">{3} 1rem</div>
                                    <div class="item">{4} 2rem</div>
                                    <div class="item">{5} 3rem</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                <!-- Examples -->
                <article class="section-scroll" id="examples">
                    <h2 class="b-b-light hash">Examples</h2>
                    <h3 class="mt-3">Responsive padding:</h3>
                    <p>
                        A common usage for these utility classes would be to extend with value of padding when screen size becomes larger. Below is an example of just that:
                    </p>
                    <div class="column-demo c-white mb-3">
                        <div class="br d-flex mb-3 justify-content-center justify-content-desk-between t-center">
                            <div class="text br mx-0 w-100 py-3 py-tab-4 py-desk-5">
                                py-3 py-tab-4 py-desk-5
                            </div>
                        </div>
                    </div>
                    <pre class="highlight"><code class="html py-2">&lt;div class="py-3 py-tab-4 py-desk-5"&gt;py-3 py-tab-4 py-desk-5&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

            </div><!-- /Col -->
            <?php include_once '../../partials/smallnav.php'?>
            <?php include_once '../../partials/sub-footer.php'?>
        </div><!-- /Row -->
    </div><!-- /Container -->
</section>

<?php include_once '../../partials/footer.php'?>