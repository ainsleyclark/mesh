<?php

//Page variables
$pageData = [
	'pageTitle' => 'Flex',
	'pageDescription' => 'The whole of flexbox is bundled with mesh, meaning you can use them inline in html, making vertical and horizontal cantering a doddle. As a bonus all classes are responsive.',
    'activePage' => 'flex',
    'parentDirectory' => basename(__DIR__)
]; 

//Table of contents
$tableOfContents = [
	'usage' => 'Usage',
	'direction' => 'Direction',
];

?>

<?php include_once('../../partials/header.php'); ?>
<?php include_once('../../partials/sidenav.php'); ?>


<section class="content">
    <div class="container-fullwidth">
        <div class="row justify-content-center mt-4 mt-desk-5">
            <div class="col-12 col-tab-9 col-desk-8 mr-desk-2 px-desk-4">
                <h1 class="mb-2 mt-0"><?php echo $pageData['pageTitle'] ?></h1>
                <div class="lead"><?php echo $pageData['pageDescription'] ?></div>
                
                <!-- Usage -->
                <article class="section-scroll" id="usage">
                    <h2 class="b-b1-light hash">Usage</h2>
                    <p class="secondary-lead mb-1">
                        To start with, the container of parent of the items you want to be flexible needs the <code class="inline">d-flex</code> or <code class="inline">d-inline-flex</code> classes. Inline flex makes the container display inline, which is the only difference between the two.
                        <br>You are able to turn flex on and off at various viewports, this is done by using <code class="inline">d-{breakpoint}-flex</code>, see below.
                    </p>
                    <p class="mb-25"><strong>Note:</strong> If you need help with anything flexboxy related, check out our friends at <a href="https://css-tricks.com/snippets/css/a-guide-to-flexbox/">CSS Tricks</a> for more details.</p>
                    <div class="column-demo c-white mb-25">
                        <div class="br bg-light py-4 mb-25">
                            <div class="text d-flex px-3 br mx-0">
                                d-flex
                            </div>
                        </div>
                        <pre class="highlight"><code class="html py-2">&lt;div class="d-flex"&gt;&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                        <div class="br bg-light py-4 mb-25">
                            <div class="text d-inline-flex px-5 br mx-0">
                                d-inline-flex
                            </div>
                        </div>
                        <pre class="highlight"><code class="html py-2">&lt;div class="d-inline-flex"&gt;&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                    </div>
                    <h3>Responsive variations:</h3>
<pre class="highlight"><code class="html">&lt;div class="d-flex"&gt;&lt;/div&gt;
&lt;div class="d-inline-flex"&gt;&lt;/div&gt;
&lt;div class="d-mob-flex"&gt;&lt;/div&gt;
&lt;div class="d-mob-inline-flex"&gt;&lt;/div&gt;
&lt;div class="d-tab-flex"&gt;&lt;/div&gt;
&lt;div class="d-tab-inline-flex"&gt;&lt;/div&gt;
&lt;div class="d-desk-flex"&gt;&lt;/div&gt;
&lt;div class="d-desk-inline-flex"&gt;&lt;/div&gt;
&lt;div class="d-hd-flex"&gt;&lt;/div&gt;
&lt;div class="d-hd-inline-flex"&gt;&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

                <!-- Direction -->
                <article class="section-scroll" id="direction">
                    <h2 class="b-b1-light hash">Direction</h2>
                    <p class="secondary-lead">
                        Flex direction establishes the main axis, which ultimately defines the direction the flex items are placed in the container. By default <code class="inline">d-flex</code> establishes a flex direction of row.
                    </p>
                    <div class="text-cont">
                        <h3>Direction Options:</h3>
                        <ul class="list">
                            <li>You can change this behaviour by using <code class="inline">flex-{breakpoint}-row</code> or <code class="inline">flex-{modifier}-column</code>. The modifier being optional and one of our five breakpoints.</li>
                            <li>Reverse direction is also possible, where <code class="inline">flex-{breakpoint}-row-reverse</code> will change the flex items to become right to left.</li>
                            <li>Or <code class="inline">flex-{breakpoint}-column-reverse</code> will change the flex items to go from bottom to top.</li>
                        </ul>
                    </div>
                    <h3>Row:</h3>
                    <div class="column-demo c-white mb-25">
                        <div class="br bg-light mb-25 d-flex justify-content-between">
                            <div class="text px-5 br mx-0">1</div>
                            <div class="text px-5 br mx-0">2</div>
                            <div class="text px-5 br mx-0">3</div>
                            <div class="text px-5 br mx-0">4</div>
                            <div class="text px-5 br mx-0">5</div>
                        </div>
                        <pre class="highlight"><code class="html py-2">&lt;div class="d-flex"&gt;
    &lt;div class="flex-item"&gt;1&lt;/div&gt;
    &lt;div class="flex-item"&gt;2&lt;/div&gt;
    &lt;div class="flex-item"&gt;3&lt;/div&gt;
    &lt;div class="flex-item"&gt;4&lt;/div&gt;
    &lt;div class="flex-item"&gt;5&lt;/div&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                        <div class="br bg-light mb-25 d-flex flex-row-reverse justify-content-between">
                            <div class="text px-5 br mx-0">1</div>
                            <div class="text px-5 br mx-0">2</div>
                            <div class="text px-5 br mx-0">3</div>
                            <div class="text px-5 br mx-0">4</div>
                            <div class="text px-5 br mx-0">5</div>
                        </div>
                        <pre class="highlight"><code class="html py-2">&lt;div class="d-flex flex-row-reverse"&gt;
    &lt;div class="flex-item"&gt;1&lt;/div&gt;
    &lt;div class="flex-item"&gt;2&lt;/div&gt;
    &lt;div class="flex-item"&gt;3&lt;/div&gt;
    &lt;div class="flex-item"&gt;4&lt;/div&gt;
    &lt;div class="flex-item"&gt;5&lt;/div&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
<div class="br bg-light mb-25 d-flex flex-column t-center">
                            <div class="text w-30 px-5 br mx-0">1</div>
                            <div class="text px-5 br mx-0">2</div>
                            <div class="text px-5 br mx-0">3</div>
                            <div class="text px-5 br mx-0">4</div>
                            <div class="text px-5 br mx-0">5</div>
                        </div>
                        <pre class="highlight"><code class="html py-2">&lt;div class="d-flex flex-row-reverse"&gt;
    &lt;div class="flex-item"&gt;1&lt;/div&gt;
    &lt;div class="flex-item"&gt;2&lt;/div&gt;
    &lt;div class="flex-item"&gt;3&lt;/div&gt;
    &lt;div class="flex-item"&gt;4&lt;/div&gt;
    &lt;div class="flex-item"&gt;5&lt;/div&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                    </div>
                    <h3>Responsive variations:</h3>
<pre class="highlight"><code class="html">&lt;div class="d-flex"&gt;&lt;/div&gt;
&lt;div class="d-inline-flex"&gt;&lt;/div&gt;
&lt;div class="d-mob-flex"&gt;&lt;/div&gt;
&lt;div class="d-mob-inline-flex"&gt;&lt;/div&gt;
&lt;div class="d-tab-flex"&gt;&lt;/div&gt;
&lt;div class="d-tab-inline-flex"&gt;&lt;/div&gt;
&lt;div class="d-desk-flex"&gt;&lt;/div&gt;
&lt;div class="d-desk-inline-flex"&gt;&lt;/div&gt;
&lt;div class="d-hd-flex"&gt;&lt;/div&gt;
&lt;div class="d-hd-inline-flex"&gt;&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>


            </div><!-- /Col -->
            <?php include_once('../../partials/smallnav.php') ?>
            <?php include_once('../../partials/sub-footer.php') ?>
        </div><!-- /Row -->
    </div><!-- /Container -->
</section>

<?php include_once('../../partials/footer.php') ?>