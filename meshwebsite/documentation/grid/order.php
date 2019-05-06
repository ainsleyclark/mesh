<?php

//Page variables
$pageData = [
	'pageTitle' => 'Order',
	'pageDescription' => 'Reorder columns and content with ease with our responsive order utility classes. Making visually challenging designs easy to work with.',
    'activePage' => 'order',
    'parentDirectory' => basename(__DIR__)
]; 

//Table of contents
$tableOfContents = [
    'usage' => 'Usage',
    'examples' => 'Examples',
    'variations' => 'Variations'
];

?>

<?php include_once('../../partials/header.php'); ?>
<?php include_once('../../partials/sidenav.php'); ?>

<section class="content flex-page">
    <div class="container-fullwidth">
        <div class="row justify-content-center mt-4 mt-desk-5">
            <div class="col-12 col-tab-9 col-desk-8 mr-desk-2 px-desk-4">
                <h1 class="mb-2 mt-0"><?php echo $pageData['pageTitle'] ?></h1>
                <div class="lead"><?php echo $pageData['pageDescription'] ?></div>

                <!-- Usage -->
                <article class="section-scroll" id="usage">
                    <h2 class="b-b1-light hash">Usage</h2>
                    <p class="secondary-lead">
                        The flex property order, allows us to change the visual order of content within the DOM, without touching the HTML. This comes in handy when you want to re-order content for different viewports.
                    </p>
                    <div class="text-cont">
                        <h3>Notation:</h3>
                        <ul class="list">
                            <li>You can target the order class by using <code class="inline">flex-{breakpoint}-{amount}</code>. The breakpoint being optional and one of our five breakpoints and the amount being a number <strong>from 1 to 12</strong>.</li>
                            <li>Order first and last classes are also bundled with mesh. <code class="inline">order-{breakpoint}-first</code> and <code class="inline">order-{breakpoint}-last</code> will place the content you target first or last in the container retrospectively.</li>
                        </ul>
                    </div>
                </article>

                <!-- Examples -->
                <article class="section-scroll" id="examples">
                    <h2 class="b-b1-light hash">Examples</h2>
                    <h3 class="mt-3">Using first & last classes:</h3>
                    <p>
                        Here the second item that appears in the DOM (second-child) has the <code class="inline">order-tab-last</code> class which will move it across in the container to the end from tablet screen widths and upwards.
                        <br>The third item that appears in the DOM (third-child) has the <code class="inline">order-desk-first</code> class which will move it to the end of the container from desktop screen and upwards.
                        <br>Go ahead and resize your screen and watch the items.
                    </p>
                    <div class="column-demo c-white mb-3">
                        <div class="br d-flex mb-3 justify-content-between t-center">
                            <div class="text px-3 br mx-0 w-30">
                                first child
                            </div>                            
                            <div class="text px-3 br mx-0 w-30 order-tab-last">
                                second-child
                            </div>
                            <div class="text px-3 br mx-0 w-30 order-desk-first">
                                last-child
                            </div>
                        </div>
                    </div>
                    <pre class="highlight"><code class="html">&lt;div class="d-flex justify-content-between"&gt;
    &lt;div class="flex-item"&gt;first child&lt;/div&gt;
    &lt;div class="flex-item order-tab-last"&gt;second-child&lt;/div&gt;
    &lt;div class="flex-item order-desk-first"&gt;third-child&lt;/div&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                    <h3 class="mt-3">Using number classes & columns:</h3>
                    <p>
                        The second item that appears in the DOM (5) has the <code class="inline">order-2</code> class which will move it to the end of the container for all viewports/breakpoints.
                        <br>Here the third item that appears in the DOM (3) has the <code class="inline">order-desk-6</code> class which will place it fifth in our column sequence <strong>(as the order starts from zero)</strong> for desktop screens and above.
                        <br>Go ahead and resize your screen and watch the items.
                    </p>
                    <div class="column-demo c-white mb-3 t-center">
                        <div class="row justify-content-center">
                            <div class="col-5 mb-1">
                                <div class="text px-3 br">
                                    1
                                </div>
                            </div>
                            <div class="col-5 mb-0 order-5">
                                <div class="text px-3 br">
                                    2
                                </div>
                            </div>
                            <div class="col-5 mb-1 mb-desk-0 order-desk-4">
                                <div class="text px-3 br">
                                    3
                                </div>
                            </div>
                            <div class="col-5 mb-1">
                                <div class="text px-3 br">
                                    4
                                </div>
                            </div>
                            <div class="col-5 mb-1">
                                <div class="text px-3 br">
                                    5
                                </div>
                            </div>
                            <div class="col-5 mb-0 md-desk-1">
                                <div class="text px-3 br">
                                    6
                                </div>
                            </div>
                        </div>
                    </div>
                    <pre class="highlight"><code class="html">&lt;div class="row justify-content-center"&gt;
    &lt;div class="col-5"&gt;1&lt;/div&gt;
    &lt;div class="col-5 order-5"&gt;2&lt;/div&gt;
    &lt;div class="col-5 order-desk-4"&gt;3&lt;/div&gt;
    &lt;div class="col-5"&gt;4&lt;/div&gt;
    &lt;div class="col-5"&gt;5&lt;/div&gt;
    &lt;div class="col-5"&gt;6&lt;/div&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

                <!-- Variations -->
                <article class="section-scroll" id="variations">
                <h2 class="b-b1-light hash">Variations</h2>
<pre class="highlight mt-3"><code class="html">&lt;!-- Default --&gt;
&lt;div class="order-first"&gt;&lt;/div&gt;
&lt;div class="order-last"&gt;&lt;/div&gt;
&lt;div class="order-1"&gt;&lt;/div&gt;
&lt;div class="order-2"&gt;&lt;/div&gt;
&lt;div class="order-3"&gt;&lt;/div&gt;
&lt;div class="order-4"&gt;&lt;/div&gt;
&lt;div class="order-5"&gt;&lt;/div&gt;
&lt;div class="order-6"&gt;&lt;/div&gt;
&lt;div class="order-7"&gt;&lt;/div&gt;
&lt;div class="order-8"&gt;&lt;/div&gt;
&lt;div class="order-9"&gt;&lt;/div&gt;
&lt;div class="order-10"&gt;&lt;/div&gt;
&lt;div class="order-11"&gt;&lt;/div&gt;
&lt;div class="order-12"&gt;&lt;/div&gt;
&lt;!-- Mobile --&gt;
&lt;div class="order-mob-first"&gt;&lt;/div&gt;
&lt;div class="order-mob-last"&gt;&lt;/div&gt;
&lt;div class="order-mob-1"&gt;&lt;/div&gt;
&lt;div class="order-mob-2"&gt;&lt;/div&gt;
&lt;div class="order-mob-3"&gt;&lt;/div&gt;
&lt;div class="order-mob-4"&gt;&lt;/div&gt;
&lt;div class="order-mob-5"&gt;&lt;/div&gt;
&lt;div class="order-mob-6"&gt;&lt;/div&gt;
&lt;div class="order-mob-7"&gt;&lt;/div&gt;
&lt;div class="order-mob-8"&gt;&lt;/div&gt;
&lt;div class="order-mob-9"&gt;&lt;/div&gt;
&lt;div class="order-mob-10"&gt;&lt;/div&gt;
&lt;div class="order-mob-11"&gt;&lt;/div&gt;
&lt;div class="order-mob-12"&gt;&lt;/div&gt;
&lt;!-- Tablet --&gt;
&lt;div class="order-tab-first"&gt;&lt;/div&gt;
&lt;div class="order-tab-last"&gt;&lt;/div&gt;
&lt;div class="order-tab-1"&gt;&lt;/div&gt;
&lt;div class="order-tab-2"&gt;&lt;/div&gt;
&lt;div class="order-tab-3"&gt;&lt;/div&gt;
&lt;div class="order-tab-4"&gt;&lt;/div&gt;
&lt;div class="order-tab-5"&gt;&lt;/div&gt;
&lt;div class="order-tab-6"&gt;&lt;/div&gt;
&lt;div class="order-tab-7"&gt;&lt;/div&gt;
&lt;div class="order-tab-8"&gt;&lt;/div&gt;
&lt;div class="order-tab-9"&gt;&lt;/div&gt;
&lt;div class="order-tab-10"&gt;&lt;/div&gt;
&lt;div class="order-tab-11"&gt;&lt;/div&gt;
&lt;div class="order-tab-12"&gt;&lt;/div&gt;
&lt;!-- Desktop --&gt;
&lt;div class="order-desk-first"&gt;&lt;/div&gt;
&lt;div class="order-desk-last"&gt;&lt;/div&gt;
&lt;div class="order-desk-1"&gt;&lt;/div&gt;
&lt;div class="order-desk-2"&gt;&lt;/div&gt;
&lt;div class="order-desk-3"&gt;&lt;/div&gt;
&lt;div class="order-desk-4"&gt;&lt;/div&gt;
&lt;div class="order-desk-5"&gt;&lt;/div&gt;
&lt;div class="order-desk-6"&gt;&lt;/div&gt;
&lt;div class="order-desk-7"&gt;&lt;/div&gt;
&lt;div class="order-desk-8"&gt;&lt;/div&gt;
&lt;div class="order-desk-9"&gt;&lt;/div&gt;
&lt;div class="order-desk-10"&gt;&lt;/div&gt;
&lt;div class="order-desk-11"&gt;&lt;/div&gt;
&lt;div class="order-desk-12"&gt;&lt;/div&gt;
&lt;!-- HD --&gt;
&lt;div class="order-hd-first"&gt;&lt;/div&gt;
&lt;div class="order-hd-last"&gt;&lt;/div&gt;
&lt;div class="order-hd-1"&gt;&lt;/div&gt;
&lt;div class="order-hd-2"&gt;&lt;/div&gt;
&lt;div class="order-hd-3"&gt;&lt;/div&gt;
&lt;div class="order-hd-4"&gt;&lt;/div&gt;
&lt;div class="order-hd-5"&gt;&lt;/div&gt;
&lt;div class="order-hd-6"&gt;&lt;/div&gt;
&lt;div class="order-hd-7"&gt;&lt;/div&gt;
&lt;div class="order-hd-8"&gt;&lt;/div&gt;
&lt;div class="order-hd-9"&gt;&lt;/div&gt;
&lt;div class="order-hd-10"&gt;&lt;/div&gt;
&lt;div class="order-hd-11"&gt;&lt;/div&gt;
&lt;div class="order-hd-12"&gt;&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

            </div><!-- /Col -->
            <?php include_once('../../partials/smallnav.php') ?>
            <?php include_once('../../partials/sub-footer.php') ?>
        </div><!-- /Row -->
    </div><!-- /Container -->
</section>

<?php include_once('../../partials/footer.php') ?>