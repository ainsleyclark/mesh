<?php

//Page variables
$pageData = [
    'pageTitle' => 'Flex',
    'pageDescription' => 'The whole of flexbox is bundled with mesh, meaning you can use them inline in html, making vertical and horizontal centering a doddle. As a bonus all classes are responsive.',
    'activePage' => 'flex',
    'parentDirectory' => basename(__DIR__),
];

//Table of contents
$tableOfContents = [
    'usage' => 'Usage',
    'direction' => 'Direction',
    'justifyContent' => 'Justify content',
    'alignItems' => 'Align items',
    'alignSelf' => 'Align self',
    'alignContent' => 'Align content',
    'wrapFill' => 'Wrap & fill',
    'growShrink' => 'Grow & shrink',
];

?>

<?php include_once '../../partials/header.php';?>
<?php include_once '../../partials/sidenav.php';?>

<section class="content flex-page">
    <div class="container-fullwidth">
        <div class="row justify-content-center mt-4 mt-desk-5">
            <div class="col-12 col-tab-9 col-desk-8 mr-desk-2 px-desk-4">
                <h1 class="mb-2 mt-0"><?php echo $pageData['pageTitle'] ?></h1>
                <div class="lead"><?php echo $pageData['pageDescription'] ?></div>

                <!-- Usage -->
                <article class="section-scroll" id="usage">
                    <h2 class="b-b-light hash">Usage</h2>
                    <p class="secondary-lead mb-1">
                        To start with, the container or parent of the items you want to be flexible needs the <code class="inline">d-flex</code> or <code class="inline">d-inline-flex</code> classes. Inline flex makes the flex container display inline, which is the only difference between the two.
                        <br>You are able to turn flex on and off at various viewports, this is done by using <code class="inline">d-{breakpoint}-flex</code>, see below.
                    </p>
                    <p class="mb-3"><strong>Note:</strong> If you need help with anything flexboxy related, check out our friends at <a href="https://css-tricks.com/snippets/css/a-guide-to-flexbox/">CSS Tricks</a> for more details.</p>
                    <div class="column-demo c-white mb-3">
                        <div class="br bg-light py-4 mb-3">
                            <div class="text d-flex px-3 br mx-0">
                                d-flex
                            </div>
                        </div>
                        <pre class="highlight"><code class="html py-2">&lt;div class="d-flex"&gt;&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                        <div class="br bg-light py-4 mb-3">
                            <div class="text d-inline-flex px-5 br mx-0">
                                d-inline-flex
                            </div>
                        </div>
                        <pre class="highlight"><code class="html py-2">&lt;div class="d-inline-flex"&gt;&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                    </div>
                    <h3>Responsive variations:</h3>
                    <pre class="highlight"><code class="html">&lt;!-- Default --&gt;
&lt;div class="d-flex"&gt;&lt;/div&gt;
&lt;div class="d-inline-flex"&gt;&lt;/div&gt;
&lt;!-- Mobile --&gt;
&lt;div class="d-mob-flex"&gt;&lt;/div&gt;
&lt;div class="d-mob-inline-flex"&gt;&lt;/div&gt;
&lt;!-- Tablet --&gt;
&lt;div class="d-tab-flex"&gt;&lt;/div&gt;
&lt;div class="d-tab-inline-flex"&gt;&lt;/div&gt;
&lt;!-- Desktop --&gt;
&lt;div class="d-desk-flex"&gt;&lt;/div&gt;
&lt;div class="d-desk-inline-flex"&gt;&lt;/div&gt;
&lt;!-- HD --&gt;
&lt;div class="d-hd-flex"&gt;&lt;/div&gt;
&lt;div class="d-hd-inline-flex"&gt;&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

                <!-- Direction -->
                <article class="section-scroll" id="direction">
                    <h2 class="b-b-light hash">Direction</h2>
                    <p class="secondary-lead">
                        Flex direction establishes the main axis, which ultimately defines the direction the flex items are placed in the flex container. By default <code class="inline">d-flex</code> establishes a flex direction of row.
                    </p>
                    <div class="text-cont">
                        <h3>Direction options:</h3>
                        <ul class="list-line">
                            <li>You can change this behaviour by using <code class="inline">flex-{breakpoint}-row</code> or <code class="inline">flex-{modifier}-column</code>. The modifier being optional and one of our five breakpoints.</li>
                            <li>Reverse direction is also possible, where <code class="inline">flex-{breakpoint}-row-reverse</code> will change the flex items to become right to left.</li>
                            <li>Or <code class="inline">flex-{breakpoint}-column-reverse</code> will change the flex items to go from bottom to top.</li>
                        </ul>
                    </div>
                    <h3>Row:</h3>
                    <p>Here, the flex direction goes from left to right or right to left.</p>
                    <h4><code class="inline bg-white">d-flex</code></h4>
                    <div class="column-demo mb-3">
                        <div class="br bg-light mb-3 d-flex justify-content-between c-white">
                            <div class="text px-3 px-tab-4 px-desk-5 br mx-0">1</div>
                            <div class="text px-3 px-tab-4 px-desk-5 br mx-0">2</div>
                            <div class="text px-3 px-tab-4 px-desk-5 br mx-0">3</div>
                            <div class="text px-3 px-tab-4 px-desk-5 br mx-0">4</div>
                            <div class="text px-3 px-tab-4 px-desk-5 br mx-0">5</div>
                        </div>
                        <pre class="highlight"><code class="html py-2">&lt;div class="d-flex"&gt;
    &lt;div class="flex-item"&gt;1&lt;/div&gt;
    &lt;div class="flex-item"&gt;2&lt;/div&gt;
    &lt;div class="flex-item"&gt;3&lt;/div&gt;
    &lt;div class="flex-item"&gt;4&lt;/div&gt;
    &lt;div class="flex-item"&gt;5&lt;/div&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                        <h4><code class="inline bg-white">flex-row-reverse</code></h4>
                        <div class="br bg-light mb-3 d-flex flex-row-reverse justify-content-between c-white">
                            <div class="text px-3 px-tab-4 px-desk-5 br mx-0">1</div>
                            <div class="text px-3 px-tab-4 px-desk-5 br mx-0">2</div>
                            <div class="text px-3 px-tab-4 px-desk-5 br mx-0">3</div>
                            <div class="text px-3 px-tab-4 px-desk-5 br mx-0">4</div>
                            <div class="text px-3 px-tab-4 px-desk-5 br mx-0">5</div>
                        </div>
                        <pre class="highlight"><code class="html">&lt;div class="d-flex flex-row-reverse"&gt;
    &lt;div class="flex-item"&gt;1&lt;/div&gt;
    &lt;div class="flex-item"&gt;2&lt;/div&gt;
    &lt;div class="flex-item"&gt;3&lt;/div&gt;
    &lt;div class="flex-item"&gt;4&lt;/div&gt;
    &lt;div class="flex-item"&gt;5&lt;/div&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                        <h3>Column</h3>
                        <p>Here, the flex direction goes from top to bottom or bottom to top.</p>
                        <div class="d-none d-tab-flex justify-content-between t-center w-80 mx-auto">
                            <h4><code class="inline bg-white">flex-column</code></h4>
                            <h4><code class="inline bg-white">flex-column-reverse</code></h4>
                        </div>

                        <div class="br bg-light mb-3 d-flex justify-content-around t-center c-white">
                            <div class="w-30 d-flex flex-column">
                                <div class="text px-5 br mb-2 mx-0">1</div>
                                <div class="text px-5 br my-2 mx-0">2</div>
                                <div class="text px-5 br my-2 mx-0">3</div>
                                <div class="text px-5 br my-2 mx-0">4</div>
                                <div class="text px-5 br mt-2 mx-0">5</div>
                            </div>
                            <div class="w-30 d-flex flex-column flex-column-reverse">
                                <div class="text px-5 br mt-2 mx-0">1</div>
                                <div class="text px-5 br my-2 mx-0">2</div>
                                <div class="text px-5 br my-2 mx-0">3</div>
                                <div class="text px-5 br my-2 mx-0">4</div>
                                <div class="text px-5 br mb-2 mx-0">5</div>
                            </div>

                        </div>
                        <pre class="highlight">
                        <div class="d-flex justify-content-around flex-column flex-tab-row"><code class="html py-2">&lt;div class="d-flex flex-column"&gt;
    &lt;div class="flex-item"&gt;1&lt;/div&gt;
    &lt;div class="flex-item"&gt;2&lt;/div&gt;
    &lt;div class="flex-item"&gt;3&lt;/div&gt;
    &lt;div class="flex-item"&gt;4&lt;/div&gt;
    &lt;div class="flex-item"&gt;5&lt;/div&gt;
&lt;/div&gt;</code>
<code class="html py-2">&lt;div class="d-flex flex-column"&gt;
    &lt;div class="flex-item"&gt;1&lt;/div&gt;
    &lt;div class="flex-item"&gt;2&lt;/div&gt;
    &lt;div class="flex-item"&gt;3&lt;/div&gt;
    &lt;div class="flex-item"&gt;4&lt;/div&gt;
    &lt;div class="flex-item"&gt;5&lt;/div&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></div></pre>
                        <h3>Responsive variations:</h3>
                        <pre class="highlight"><code class="html">&lt;!-- Default --&gt;
&lt;div class="flex-row"&gt;&lt;/div&gt;
&lt;div class="flex-row-reverse"&gt;&lt;/div&gt;
&lt;div class="flex-column"&gt;&lt;/div&gt;
&lt;div class="flex-column-reverse"&gt;&lt;/div&gt;
&lt;!-- Mobile --&gt;
&lt;div class="flex-mob-row"&gt;&lt;/div&gt;
&lt;div class="flex-mob-row-reverse"&gt;&lt;/div&gt;
&lt;div class="flex-mob-column"&gt;&lt;/div&gt;
&lt;div class="flex-mob-column-reverse"&gt;&lt;/div&gt;
&lt;!-- Tablet --&gt;
&lt;div class="flex-tab-row"&gt;&lt;/div&gt;
&lt;div class="flex-tab-row-reverse"&gt;&lt;/div&gt;
&lt;div class="flex-tab-column"&gt;&lt;/div&gt;
&lt;div class="flex-tab-column-reverse"&gt;&lt;/div&gt;
&lt;!-- Desktop --&gt;
&lt;div class="flex-desk-row"&gt;&lt;/div&gt;
&lt;div class="flex-desk-row-reverse"&gt;&lt;/div&gt;
&lt;div class="flex-desk-column"&gt;&lt;/div&gt;
&lt;div class="flex-desk-column-reverse"&gt;&lt;/div&gt;
&lt;!-- HD --&gt;
&lt;div class="flex-hd-row"&gt;&lt;/div&gt;
&lt;div class="flex-hd-row-reverse"&gt;&lt;/div&gt;
&lt;div class="flex-hd-column"&gt;&lt;/div&gt;
&lt;div class="flex-hd-column-reverse"&gt;&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

                <!-- Justify content -->
                <article class="section-scroll" id="justifyContent">
                    <h2 class="b-b-light hash">Justify content</h2>
                    <p class="secondary-lead">
                        This defines the alignment across the main axis, it allows us to distribute space between the flex content within the flex container. If the flex direction is row, the alignment will be on the x-axis, if flex direction is column, alignment will be on the y-axis.
                        <br>Target justify content using <code class="inline">justify-content-{breakpoint}-{property}</code> where property is one of five listed below.
                    </p>
                    <div class="text-cont">
                        <h3>Justify content options:</h3>
                        <ul class="list-line">
                            <li><strong class="c-secondary">start</strong> (flex-start) - is the default, all items will be aligned to the beginning of the flex container</li>
                            <li><strong class="c-secondary">end</strong> (flex-end) - means all items will be aligned to the end of the flex container.</li>
                            <li><strong class="c-secondary">center</strong> (center) - aligns all items in the center of the flex container.</li>
                            <li><strong class="c-secondary">between</strong> (space-between) - spaces the items evenly in the flex container, <strong>with no</strong> space on the left side on the first block and right hand side of the last block.</li>
                            <li><strong class="c-secondary">around</strong> (space-around) - spaces the items evenly in the flex container, <strong>with</strong> space on the left side on the first block and right hand side of the last block.</li>
                        </ul>
                    </div>
                    <!-- //! ADD WHITE BORDER HERE WHEN BORDER CLASS IS COMPLETED -->
                    <div class="column-demo mb-3">
                        <h4><code class="inline bg-white">justify-content-start (default)</code></h4>
                        <div class="br bg-light mb-3 c-white">
                            <div class="d-flex justify-content-start mb-3">
                                <div class="text mr-1 px-2 px-tab-4 br">1</div>
                                <div class="text mx-1 px-2 px-tab-4 br">2</div>
                                <div class="text mx-1 px-2 px-tab-4 br">3</div>
                                <div class="text mx-1 px-2 px-tab-4 br">4</div>
                                <div class="text ml-1 px-2 px-tab-4 br">5</div>
                            </div>
                        </div>
                        <h4><code class="inline bg-white">justify-content-end</code></h4>
                        <div class="br bg-light mb-3 c-white">
                            <div class="d-flex justify-content-end mb-3">
                                <div class="text mr-1 px-2 px-tab-4 br">1</div>
                                <div class="text mx-1 px-2 px-tab-4 br">2</div>
                                <div class="text mx-1 px-2 px-tab-4 br">3</div>
                                <div class="text mx-1 px-2 px-tab-4 br">4</div>
                                <div class="text ml-1 px-2 px-tab-4 br">5</div>
                            </div>
                        </div>
                        <h4><code class="inline bg-white">justify-content-center</code></h4>
                        <div class="br bg-light mb-3 c-white">
                            <div class="d-flex justify-content-center mb-3">
                                <div class="text mr-1 px-2 px-tab-4 br">1</div>
                                <div class="text mx-1 px-2 px-tab-4 br">2</div>
                                <div class="text mx-1 px-2 px-tab-4 br">3</div>
                                <div class="text mx-1 px-2 px-tab-4 br">4</div>
                                <div class="text ml-1 px-2 px-tab-4 br">5</div>
                            </div>
                        </div>
                        <h4><code class="inline bg-white">justify-content-between</code></h4>
                        <div class="br bg-light mb-3 c-white">
                            <div class="d-flex justify-content-between mb-3">
                                <div class="text mr-1 px-2 px-tab-4 br">1</div>
                                <div class="text mx-1 px-2 px-tab-4 br">2</div>
                                <div class="text mx-1 px-2 px-tab-4 br">3</div>
                                <div class="text mx-1 px-2 px-tab-4 br">4</div>
                                <div class="text ml-1 px-2 px-tab-4 br">5</div>
                            </div>
                        </div>
                        <h4><code class="inline bg-white">justify-content-around</code></h4>
                        <div class="br bg-light mb-3 c-white">
                            <div class="d-flex justify-content-around mb-3">
                                <div class="text mr-1 px-2 px-tab-4 br">1</div>
                                <div class="text mx-1 px-2 px-tab-4 br">2</div>
                                <div class="text mx-1 px-2 px-tab-4 br">3</div>
                                <div class="text mx-1 px-2 px-tab-4 br">4</div>
                                <div class="text ml-1 px-2 px-tab-4 br">5</div>
                            </div>
                        </div>
                    </div>
                    <h3>Responsive variations:</h3>
                    <pre class="highlight"><code class="html">&lt;!-- Default --&gt;
&lt;div class="d-flex justify-content-start"&gt;&lt;/div&gt;
&lt;div class="d-flex justify-content-end"&gt;&lt;/div&gt;
&lt;div class="d-flex justify-content-center"&gt;&lt;/div&gt;
&lt;div class="d-flex justify-content-between"&gt;&lt;/div&gt;
&lt;div class="d-flex justify-content-around"&gt;&lt;/div&gt;
&lt;!-- Mobile --&gt;
&lt;div class="d-flex justify-content-mob-start"&gt;&lt;/div&gt;
&lt;div class="d-flex justify-content-mob-end"&gt;&lt;/div&gt;
&lt;div class="d-flex justify-content-mob-center"&gt;&lt;/div&gt;
&lt;div class="d-flex justify-content-mob-between"&gt;&lt;/div&gt;
&lt;div class="d-flex justify-content-mob-around"&gt;&lt;/div&gt;
&lt;!-- Tablet --&gt;
&lt;div class="d-flex justify-content-tab-start"&gt;&lt;/div&gt;
&lt;div class="d-flex justify-content-tab-end"&gt;&lt;/div&gt;
&lt;div class="d-flex justify-content-tab-center"&gt;&lt;/div&gt;
&lt;div class="d-flex justify-content-tab-between"&gt;&lt;/div&gt;
&lt;div class="d-flex justify-content-tab-around"&gt;&lt;/div&gt;
&lt;!-- Desktop --&gt;
&lt;div class="d-flex justify-content-desk-start"&gt;&lt;/div&gt;
&lt;div class="d-flex justify-content-desk-end"&gt;&lt;/div&gt;
&lt;div class="d-flex justify-content-desk-center"&gt;&lt;/div&gt;
&lt;div class="d-flex justify-content-desk-between"&gt;&lt;/div&gt;
&lt;div class="d-flex justify-content-desk-around"&gt;&lt;/div&gt;
&lt;!-- HD --&gt;
&lt;div class="d-flex justify-content-hd-start"&gt;&lt;/div&gt;
&lt;div class="d-flex justify-content-hd-end"&gt;&lt;/div&gt;
&lt;div class="d-flex justify-content-hd-center"&gt;&lt;/div&gt;
&lt;div class="d-flex justify-content-hd-between"&gt;&lt;/div&gt;
&lt;div class="d-flex justify-content-hd-around"&gt;&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

                <!-- Align items -->
                <article class="section-scroll" id="alignItems">
                    <h2 class="b-b-light hash">Align items</h2>
                    <p class="secondary-lead">
                        This defines the alignment across the cross axis, basically it defines how how the flex items are laid out opposite from the main axis. So if flex direction is set to row, it will be vertically, is set to column, it will be horizontally.
                        <br>Target justify content using <code class="inline">align-items-{breakpoint}-{property}</code> where property is one of five listed below.
                    </p>
                    <div class="text-cont">
                        <h3>Align items options:</h3>
                        <ul class="list-line">
                            <li><strong class="c-secondary">stretch</strong> (stretch) - is the default, all items will stretch to fit the flex container whilst still respecting <code class="inline">min-width</code> and <code class="inline">max-width</code> properties.</li>
                            <li><strong class="c-secondary">start</strong> (flex-start) - means all items will be aligned to the start of the flex container, on the cross axis.</li>
                            <li><strong class="c-secondary">end</strong> (flex-end) - all items will be aligned to the end of the flex container, on the cross axis.</li>
                            <li><strong class="c-secondary">center</strong> (center) - aligns all items in the center of the flex container.</li>
                            <li><strong class="c-secondary">baseline</strong> (baseline) - aligns flex items along their contents baseline.</li>
                        </ul>
                    </div>
                    <!-- //! ADD WHITE BORDER HERE WHEN BORDER CLASS IS COMPLETED -->
                    <div class="column-demo mb-3">
                        <h4><code class="inline bg-white">align-items-stretch (default)</code></h4>
                        <div class="br bg-light mb-3 c-white">
                            <div class="d-flex align-items-stretch mb-3 height-100">
                                <div class="text mr-1 mr-hd-2 px-3 px-tab-4 br line-height-4">1</div>
                                <div class="text mx-1 mx-hd-2 px-3 px-tab-4 br line-height-4">2</div>
                                <div class="text mx-1 mx-hd-2 px-3 px-tab-4 br line-height-4">3</div>
                                <div class="text mx-1 mx-hd-2 px-3 px-tab-4 br line-height-4">4</div>
                                <div class="text ml-1 ml-hd-2 px-3 px-tab-4 br line-height-4">5</div>
                            </div>
                        </div>
                        <h4><code class="inline bg-white">align-items-start</code></h4>
                        <div class="br bg-light mb-3 c-white">
                            <div class="d-flex align-items-start mb-3 height-100">
                                <div class="text mr-1 mr-hd-2 px-3 px-tab-4 br">1</div>
                                <div class="text mx-1 mx-hd-2 px-3 px-tab-4 br">2</div>
                                <div class="text mx-1 mx-hd-2 px-3 px-tab-4 br">3</div>
                                <div class="text mx-1 mx-hd-2 px-3 px-tab-4 br">4</div>
                                <div class="text ml-1 ml-hd-2 px-3 px-tab-4 br">5</div>
                            </div>
                        </div>
                        <h4><code class="inline bg-white">align-items-end</code></h4>
                        <div class="br bg-light mb-3 c-white">
                            <div class="d-flex align-items-end mb-3 height-100">
                                <div class="text mr-1 mr-hd-2 px-3 px-tab-4 br">1</div>
                                <div class="text mx-1 mx-hd-2 px-3 px-tab-4 br">2</div>
                                <div class="text mx-1 mx-hd-2 px-3 px-tab-4 br">3</div>
                                <div class="text mx-1 mx-hd-2 px-3 px-tab-4 br">4</div>
                                <div class="text ml-1 ml-hd-2 px-3 px-tab-4 br">5</div>
                            </div>
                        </div>
                        <h4><code class="inline bg-white">align-items-center</code></h4>
                        <div class="br bg-light mb-3 c-white">
                            <div class="d-flex align-items-center mb-3 height-100">
                                <div class="text mr-1 mr-hd-2 px-3 px-tab-4 br">1</div>
                                <div class="text mx-1 mx-hd-2 px-3 px-tab-4 br">2</div>
                                <div class="text mx-1 mx-hd-2 px-3 px-tab-4 br">3</div>
                                <div class="text mx-1 mx-hd-2 px-3 px-tab-4 br">4</div>
                                <div class="text ml-1 ml-hd-2 px-3 px-tab-4 br">5</div>
                            </div>
                        </div>
                        <h4><code class="inline bg-white">align-items-baseline</code></h4>
                        <div class="br bg-light mb-3 c-white">
                            <div class="d-flex align-items-baseline mb-3 height-100">
                                <div class="text py-0 mr-1 mr-hd-2 px-3 px-tab-4 br">
                                    <h1>1</h1>
                                </div>
                                <div class="text py-0 mx-1 mx-hd-2 px-3 px-tab-4 br">
                                    <h6>2</h6>
                                </div>
                                <div class="text py-0 mx-1 mx-hd-2 px-3 px-tab-4 br">
                                    <h4>3</h4>
                                </div>
                                <div class="text py-0 mx-1 mx-hd-2 px-3 px-tab-4 br">
                                    <h2>4</h2>
                                </div>
                                <div class="text py-0 ml-1 ml-hd-2 px-3 px-tab-4 br">
                                    <h1>5</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3>Responsive variations:</h3>
                    <pre class="highlight"><code class="html">&lt;!-- Default --&gt;
&lt;div class="d-flex align-items-stretch"&gt;&lt;/div&gt;
&lt;div class="d-flex align-items-start"&gt;&lt;/div&gt;
&lt;div class="d-flex align-items-end"&gt;&lt;/div&gt;
&lt;div class="d-flex align-items-center"&gt;&lt;/div&gt;
&lt;div class="d-flex align-items-baseline"&gt;&lt;/div&gt;
&lt;!-- Mobile --&gt
&lt;div class="d-flex align-items-mob-stretch"&gt;&lt;/div&gt;
&lt;div class="d-flex align-items-mob-start"&gt;&lt;/div&gt;
&lt;div class="d-flex align-items-mob-end"&gt;&lt;/div&gt;
&lt;div class="d-flex align-items-mob-center"&gt;&lt;/div&gt;
&lt;div class="d-flex align-items-mob-baseline"&gt;&lt;/div&gt;
&lt;!-- Tablet --&gt;
&lt;div class="d-flex align-items-tab-stretch"&gt;&lt;/div&gt;
&lt;div class="d-flex align-items-tab-start"&gt;&lt;/div&gt;
&lt;div class="d-flex align-items-tab-end"&gt;&lt;/div&gt;
&lt;div class="d-flex align-items-tab-center"&gt;&lt;/div&gt;
&lt;div class="d-flex align-items-tab-baseline"&gt;&lt;/div&gt;
&lt;!-- Desktop --&gt;
&lt;div class="d-flex align-items-desk-stretch"&gt;&lt;/div&gt;
&lt;div class="d-flex align-items-desk-start"&gt;&lt;/div&gt;
&lt;div class="d-flex align-items-desk-end"&gt;&lt;/div&gt;
&lt;div class="d-flex align-items-desk-center"&gt;&lt;/div&gt;
&lt;div class="d-flex align-items-desk-baseline"&gt;&lt;/div&gt;
&lt;!-- HD --&gt;
&lt;div class="d-flex align-items-hd-stretch"&gt;&lt;/div&gt;
&lt;div class="d-flex align-items-hd-start"&gt;&lt;/div&gt;
&lt;div class="d-flex align-items-hd-end"&gt;&lt;/div&gt;
&lt;div class="d-flex align-items-hd-center"&gt;&lt;/div&gt;
&lt;div class="d-flex align-items-hd-baseline"&gt;&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

                <!-- Align self -->
                <article class="section-scroll" id="alignSelf">
                    <h2 class="b-b-light hash">Align self</h2>
                    <p class="secondary-lead">
                        This allows us to align one flex item on the cross axis - if flex direction is set to row, it will be vertically, is set to column, it will be horizontally.
                        <br>Target justify content using <code class="inline">align-self-{breakpoint}-{property}</code> where property is one of five listed below.
                        <br><strong>All properties are the same as <code class="inline">align-items</code>.</strong>
                    </p>
                    <div class="column-demo mb-3">
                        <h4><code class="inline bg-white">align-self-stretch</code></h4>
                        <div class="br bg-light mb-3 c-white">
                            <div class="d-flex align-items-center mb-3 height-110">
                                <div class="text mr-1 mr-hd-2 px-3 px-tab-4 px-hd-5 br">1</div>
                                <div class="text mx-1 mx-hd-2 px-3 px-tab-4 px-hd-5 br">2</div>
                                <div class="text mx-1 mx-hd-2 px-3 px-tab-4 px-hd-5 br align-self-stretch line-height-4">3</div>
                                <div class="text mx-1 mx-hd-2 px-3 px-tab-4 px-hd-5 br">4</div>
                                <div class="text ml-1 ml-hd-2 px-3 px-tab-4 px-hd-5 br">5</div>
                            </div>
                        </div>
                        <pre class="highlight"><code class="html">&lt;div class="d-flex align-items-center"&gt;
    &lt;div class="flex-item"&gt;1&lt;/div&gt;
    &lt;div class="flex-item"&gt;2&lt;/div&gt;
    &lt;div class="flex-item align-self-stretch"&gt;3&lt;/div&gt;
    &lt;div class="flex-item"&gt;4&lt;/div&gt;
    &lt;div class="flex-item"&gt;5&lt;/div&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                        <h4><code class="inline bg-white">align-self-start</code></h4>
                        <div class="br bg-light mb-3 c-white">
                            <div class="d-flex align-items-end mb-3 height-110">
                                <div class="text mr-1 mr-hd-2 px-3 px-tab-4 px-hd-5 br">1</div>
                                <div class="text mx-1 mx-hd-2 px-3 px-tab-4 px-hd-5 br">2</div>
                                <div class="text mx-1 mx-hd-2 px-3 px-tab-4 px-hd-5 br align-self-start">3</div>
                                <div class="text mx-1 mx-hd-2 px-3 px-tab-4 px-hd-5 br">4</div>
                                <div class="text ml-1 ml-hd-2 px-3 px-tab-4 px-hd-5 br">5</div>
                            </div>
                        </div>
                        <pre class="highlight"><code class="html">&lt;div class="d-flex align-items-end"&gt;
    &lt;div class="flex-item"&gt;1&lt;/div&gt;
    &lt;div class="flex-item"&gt;2&lt;/div&gt;
    &lt;div class="flex-item align-self-start"&gt;3&lt;/div&gt;
    &lt;div class="flex-item"&gt;4&lt;/div&gt;
    &lt;div class="flex-item"&gt;5&lt;/div&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                        <h4><code class="inline bg-white">align-self-end</code></h4>
                        <div class="br bg-light mb-3 c-white">
                            <div class="d-flex align-items-start mb-3 height-110">
                                <div class="text mr-1 mr-hd-2 px-3 px-tab-4 px-hd-5 br">1</div>
                                <div class="text mx-1 mx-hd-2 px-3 px-tab-4 px-hd-5 br">2</div>
                                <div class="text mx-1 mx-hd-2 px-3 px-tab-4 px-hd-5 br align-self-end">3</div>
                                <div class="text mx-1 mx-hd-2 px-3 px-tab-4 px-hd-5 br">4</div>
                                <div class="text ml-1 ml-hd-2 px-3 px-tab-4 px-hd-5 br">5</div>
                            </div>
                        </div>
                        <pre class="highlight"><code class="html">&lt;div class="d-flex align-items-start"&gt;
    &lt;div class="flex-item"&gt;1&lt;/div&gt;
    &lt;div class="flex-item"&gt;2&lt;/div&gt;
    &lt;div class="flex-item align-self-end"&gt;3&lt;/div&gt;
    &lt;div class="flex-item"&gt;4&lt;/div&gt;
    &lt;div class="flex-item"&gt;5&lt;/div&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                        <h4><code class="inline bg-white">align-self-center</code></h4>
                        <div class="br bg-light mb-3 c-white">
                            <div class="d-flex align-items-end mb-3 height-110">
                                <div class="text mr-1 mr-hd-2 px-3 px-tab-4 px-hd-5 br">1</div>
                                <div class="text mx-1 mx-hd-2 px-3 px-tab-4 px-hd-5 br">2</div>
                                <div class="text mx-1 mx-hd-2 px-3 px-tab-4 px-hd-5 br align-self-center">3</div>
                                <div class="text mx-1 mx-hd-2 px-3 px-tab-4 px-hd-5 br">4</div>
                                <div class="text ml-1 ml-hd-2 px-3 px-tab-4 px-hd-5 br">5</div>
                            </div>
                        </div>
                        <pre class="highlight"><code class="html">&lt;div class="d-flex align-items-start"&gt;
    &lt;div class="flex-item"&gt;1&lt;/div&gt;
    &lt;div class="flex-item"&gt;2&lt;/div&gt;
    &lt;div class="flex-item align-self-end"&gt;3&lt;/div&gt;
    &lt;div class="flex-item"&gt;4&lt;/div&gt;
    &lt;div class="flex-item"&gt;5&lt;/div&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                        <h4><code class="inline bg-white">align-self-baseline</code></h4>
                        <div class="br bg-light mb-3 c-white">
                            <div class="d-flex align-items-end mb-3 height-110">
                                <div class="text mr-1 mr-hd-2 px-3 px-tab-4 px-hd-5 br">1</div>
                                <div class="text mx-1 mx-hd-2 px-3 px-tab-4 px-hd-5 br">2</div>
                                <div class="text mx-1 mx-hd-2 px-3 px-tab-4 px-hd-5 br align-self-baseline ">3</div>
                                <div class="text mx-1 mx-hd-2 px-3 px-tab-4 px-hd-5 br">4</div>
                                <div class="text ml-1 ml-hd-2 px-3 px-tab-4 px-hd-5 br">5</div>
                            </div>
                        </div>
                        <pre class="highlight"><code class="html">&lt;div class="d-flex align-items-end"&gt;
    &lt;div class="flex-item"&gt;1&lt;/div&gt;
    &lt;div class="flex-item"&gt;2&lt;/div&gt;
    &lt;div class="flex-item align-self-baseline"&gt;3&lt;/div&gt;
    &lt;div class="flex-item"&gt;4&lt;/div&gt;
    &lt;div class="flex-item"&gt;5&lt;/div&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                    </div>
                    <h3>Responsive variations:</h3>
                    <pre class="highlight"><code class="html">&lt;!-- Default --&gt;
&lt;div class="d-flex align-self-stretch"&gt;&lt;/div&gt;
&lt;div class="d-flex align-self-start"&gt;&lt;/div&gt;
&lt;div class="d-flex align-self-end"&gt;&lt;/div&gt;
&lt;div class="d-flex align-self-center"&gt;&lt;/div&gt;
&lt;div class="d-flex align-self-baseline"&gt;&lt;/div&gt;
&lt;!-- Mobile --&gt;
&lt;div class="d-flex align-self-mob-stretch"&gt;&lt;/div&gt;
&lt;div class="d-flex align-self-mob-start"&gt;&lt;/div&gt;
&lt;div class="d-flex align-self-mob-end"&gt;&lt;/div&gt;
&lt;div class="d-flex align-self-mob-center"&gt;&lt;/div&gt;
&lt;div class="d-flex align-self-mob-baseline"&gt;&lt;/div&gt;
&lt;!-- Tablet --&gt;
&lt;div class="d-flex align-self-tab-stretch"&gt;&lt;/div&gt;
&lt;div class="d-flex align-self-tab-start"&gt;&lt;/div&gt;
&lt;div class="d-flex align-self-tab-end"&gt;&lt;/div&gt;
&lt;div class="d-flex align-self-tab-center"&gt;&lt;/div&gt;
&lt;div class="d-flex align-self-tab-baseline"&gt;&lt;/div&gt;
&lt;!-- Desktop --&gt;
&lt;div class="d-flex align-self-desk-stretch"&gt;&lt;/div&gt;
&lt;div class="d-flex align-self-desk-start"&gt;&lt;/div&gt;
&lt;div class="d-flex align-self-desk-end"&gt;&lt;/div&gt;
&lt;div class="d-flex align-self-desk-center"&gt;&lt;/div&gt;
&lt;div class="d-flex align-self-desk-baseline"&gt;&lt;/div&gt;
&lt;!-- HD --&gt;
&lt;div class="d-flex align-self-hd-stretch"&gt;&lt;/div&gt;
&lt;div class="d-flex align-self-hd-start"&gt;&lt;/div&gt;
&lt;div class="d-flex align-self-hd-end"&gt;&lt;/div&gt;
&lt;div class="d-flex align-self-hd-center"&gt;&lt;/div&gt;
&lt;div class="d-flex align-self-hd-baseline"&gt;&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

                <!-- Align content -->
                <article class="section-scroll" id="alignContent">
                    <h2 class="b-b-light hash">Align content</h2>
                    <p class="secondary-lead">
                        This allows us to align to line flex items when there is space left over in the cross axis, very similar to <code class="inline">justify-content</code>. If flex direction is set to row, it will be vertically, is set to column, it will be horizontally.
                        <br>Target justify content using <code class="inline">align-content-{breakpoint}-{property}</code> where property is one of five listed below.
                        <br><strong>All properties are the same as <code class="inline">justify-content</code>.</strong>
                    </p>
                    <div class="column-demo mb-3">
                        <h4><code class="inline bg-white">align-content-start</code></h4>
                        <div class="br bg-light mb-3 c-white">
                            <div class="d-flex align-content-start flex-wrap mb-3 t-center height-100">
                                <div class="text mr-1 mr-hd-2 px-3 px-tab-4 px-hd-5 br">1</div>
                                <div class="text mx-1 mx-hd-2 px-3 px-tab-4 px-hd-5 br">2</div>
                                <div class="text mx-1 mx-hd-2 px-3 px-tab-4 px-hd-5 br">3</div>
                                <div class="text mx-1 mx-hd-2 px-3 px-tab-4 px-hd-5 br">4</div>
                                <div class="text ml-1 ml-hd-2 px-3 px-tab-4 px-hd-5 br">5</div>
                            </div>
                        </div>
                        <pre class="highlight"><code class="html">&lt;div class="d-flex align-content-start flex-wrap"&gt;
    &lt;div class="flex-item"&gt;1&lt;/div&gt;
    &lt;div class="flex-item"&gt;2&lt;/div&gt;
    &lt;div class="flex-item"&gt;3&lt;/div&gt;
    &lt;div class="flex-item"&gt;4&lt;/div&gt;
    &lt;div class="flex-item"&gt;5&lt;/div&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                        <h4><code class="inline bg-white">align-content-end</code></h4>
                        <div class="br bg-light mb-3 c-white">
                            <div class="d-flex align-content-end flex-wrap mb-3 t-center height-100">
                                <div class="text mr-1 mr-hd-2 px-3 px-tab-4 px-hd-5 br">1</div>
                                <div class="text mx-1 mx-hd-2 px-3 px-tab-4 px-hd-5 br">2</div>
                                <div class="text mx-1 mx-hd-2 px-3 px-tab-4 px-hd-5 br">3</div>
                                <div class="text mx-1 mx-hd-2 px-3 px-tab-4 px-hd-5 br">4</div>
                                <div class="text ml-1 ml-hd-2 px-3 px-tab-4 px-hd-5 br">5</div>
                            </div>
                        </div>
                        <pre class="highlight"><code class="html">&lt;div class="d-flex align-content-end flex-wrap"&gt;
    &lt;div class="flex-item"&gt;1&lt;/div&gt;
    &lt;div class="flex-item"&gt;2&lt;/div&gt;
    &lt;div class="flex-item"&gt;3&lt;/div&gt;
    &lt;div class="flex-item"&gt;4&lt;/div&gt;
    &lt;div class="flex-item"&gt;5&lt;/div&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                        <h4><code class="inline bg-white">align-content-center</code></h4>
                        <div class="br bg-light mb-3 c-white">
                            <div class="d-flex align-content-center flex-wrap mb-3 t-center height-100">
                                <div class="text mr-1 mr-hd-2 px-3 px-tab-4 px-hd-5 br">1</div>
                                <div class="text mx-1 mx-hd-2 px-3 px-tab-4 px-hd-5 br">2</div>
                                <div class="text mx-1 mx-hd-2 px-3 px-tab-4 px-hd-5 br">3</div>
                                <div class="text mx-1 mx-hd-2 px-3 px-tab-4 px-hd-5 br">4</div>
                                <div class="text ml-1 ml-hd-2 px-3 px-tab-4 px-hd-5 br">5</div>
                            </div>
                        </div>
                        <pre class="highlight"><code class="html">&lt;div class="d-flex align-content-center flex-wrap"&gt;
    &lt;div class="flex-item"&gt;1&lt;/div&gt;
    &lt;div class="flex-item"&gt;2&lt;/div&gt;
    &lt;div class="flex-item"&gt;3&lt;/div&gt;
    &lt;div class="flex-item"&gt;4&lt;/div&gt;
    &lt;div class="flex-item"&gt;5&lt;/div&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                        <h4><code class="inline bg-white">align-content-between</code></h4>
                        <div class="br bg-light mb-3 c-white">
                            <div class="d-flex align-content-between flex-wrap mb-3 t-center height-100">
                                <div class="text mr-1 mr-hd-2 px-3 px-tab-4 px-hd-5 br">1</div>
                                <div class="text mx-1 mx-hd-2 px-3 px-tab-4 px-hd-5 br">2</div>
                                <div class="text mx-1 mx-hd-2 px-3 px-tab-4 px-hd-5 br">3</div>
                                <div class="text mx-1 mx-hd-2 px-3 px-tab-4 px-hd-5 br">4</div>
                                <div class="text ml-1 ml-hd-2 px-3 px-tab-4 px-hd-5 br">5</div>
                            </div>
                        </div>
                        <pre class="highlight"><code class="html">&lt;div class="d-flex align-content-between flex-wrap"&gt;
    &lt;div class="flex-item"&gt;1&lt;/div&gt;
    &lt;div class="flex-item"&gt;2&lt;/div&gt;
    &lt;div class="flex-item"&gt;3&lt;/div&gt;
    &lt;div class="flex-item"&gt;4&lt;/div&gt;
    &lt;div class="flex-item"&gt;5&lt;/div&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                        <h4><code class="inline bg-white">align-content-around</code></h4>
                        <div class="br bg-light mb-3 c-white">
                            <div class="d-flex align-content-around flex-wrap mb-3 t-center height-100">
                                <div class="text mr-1 mr-hd-2 px-3 px-tab-4 px-hd-5 br">1</div>
                                <div class="text mx-1 mx-hd-2 px-3 px-tab-4 px-hd-5 br">2</div>
                                <div class="text mx-1 mx-hd-2 px-3 px-tab-4 px-hd-5 br">3</div>
                                <div class="text mx-1 mx-hd-2 px-3 px-tab-4 px-hd-5 br">4</div>
                                <div class="text ml-1 ml-hd-2 px-3 px-tab-4 px-hd-5 br">5</div>
                            </div>
                        </div>
                        <pre class="highlight"><code class="html">&lt;div class="d-flex align-content-around flex-wrap"&gt;
    &lt;div class="flex-item"&gt;1&lt;/div&gt;
    &lt;div class="flex-item"&gt;2&lt;/div&gt;
    &lt;div class="flex-item"&gt;3&lt;/div&gt;
    &lt;div class="flex-item"&gt;4&lt;/div&gt;
    &lt;div class="flex-item"&gt;5&lt;/div&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                        <h4><code class="inline bg-white">align-content-stretch</code></h4>
                        <div class="br bg-light mb-3 c-white">
                            <div class="d-flex align-content-stretch flex-wrap mb-3 t-center height-100">
                                <div class="text mr-1 mr-hd-2 px-3 px-tab-4 px-hd-5 br line-height-4">1</div>
                                <div class="text mx-1 mx-hd-2 px-3 px-tab-4 px-hd-5 br line-height-4">2</div>
                                <div class="text mx-1 mx-hd-2 px-3 px-tab-4 px-hd-5 br line-height-4">3</div>
                                <div class="text mx-1 mx-hd-2 px-3 px-tab-4 px-hd-5 br line-height-4">4</div>
                                <div class="text ml-1 ml-hd-2 px-3 px-tab-4 px-hd-5 br line-height-4">5</div>
                            </div>
                        </div>
                        <pre class="highlight"><code class="html">&lt;div class="d-flex align-content-stretch flex-wrap"&gt;
    &lt;div class="flex-item"&gt;1&lt;/div&gt;
    &lt;div class="flex-item"&gt;2&lt;/div&gt;
    &lt;div class="flex-item"&gt;3&lt;/div&gt;
    &lt;div class="flex-item"&gt;4&lt;/div&gt;
    &lt;div class="flex-item"&gt;5&lt;/div&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                    </div>
                    <h3>Responsive variations:</h3>&lt;!-- Default --&gt;
                    <pre class="highlight"><code class="html">&lt;div class="d-flex align-content-start"&gt;&lt;/div&gt;
&lt;div class="d-flex align-content-end"&gt;&lt;/div&gt;
&lt;div class="d-flex align-content-center"&gt;&lt;/div&gt;
&lt;div class="d-flex align-content-between"&gt;&lt;/div&gt;
&lt;div class="d-flex align-content-around"&gt;&lt;/div&gt;
&lt;div class="d-flex align-content-stretch"&gt;&lt;/div&gt;
&lt;!-- Mobile --&gt;
&lt;div class="d-flex align-content-mob-start"&gt;&lt;/div&gt;
&lt;div class="d-flex align-content-mob-end"&gt;&lt;/div&gt;
&lt;div class="d-flex align-content-mob-center"&gt;&lt;/div&gt;
&lt;div class="d-flex align-content-mob-between"&gt;&lt;/div&gt;
&lt;div class="d-flex align-content-mob-around"&gt;&lt;/div&gt;
&lt;div class="d-flex align-content-mob-stretch"&gt;&lt;/div&gt;
&lt;div class="d-flex align-content-tab-start"&gt;&lt;/div&gt;
&lt;!-- Tablet --&gt;
&lt;div class="d-flex align-content-tab-end"&gt;&lt;/div&gt;
&lt;div class="d-flex align-content-tab-center"&gt;&lt;/div&gt;
&lt;div class="d-flex align-content-tab-between"&gt;&lt;/div&gt;
&lt;div class="d-flex align-content-tab-around"&gt;&lt;/div&gt;
&lt;div class="d-flex align-content-tab-stretch"&gt;&lt;/div&gt;
&lt;!-- Desktop --&gt;
&lt;div class="d-flex align-content-desk-start"&gt;&lt;/div&gt;
&lt;div class="d-flex align-content-desk-end"&gt;&lt;/div&gt;
&lt;div class="d-flex align-content-desk-center"&gt;&lt;/div&gt;
&lt;div class="d-flex align-content-desk-between"&gt;&lt;/div&gt;
&lt;div class="d-flex align-content-desk-around"&gt;&lt;/div&gt;
&lt;div class="d-flex align-content-desk-stretch"&gt;&lt;/div&gt;
&lt;!-- HD --&gt;
&lt;div class="d-flex align-content-hd-start"&gt;&lt;/div&gt;
&lt;div class="d-flex align-content-hd-end"&gt;&lt;/div&gt;
&lt;div class="d-flex align-content-hd-center"&gt;&lt;/div&gt;
&lt;div class="d-flex align-content-hd-between"&gt;&lt;/div&gt;
&lt;div class="d-flex align-content-hd-around"&gt;&lt;/div&gt;
&lt;div class="d-flex align-content-hd-stretch"&gt;&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

                <!-- Wrap & fill -->
                <article class="section-scroll" id="wrapFill">
                    <h2 class="b-b-light hash mb-3">Wrap & fill</h2>
                    <h3>Wrap</h3>
                    <p class="secondary-lead mt-0">
                        By default, flex items will always fit on one line, but you can change this property with flex-wrap, which allows flex items to 'wrap' to the next line.
                    </p>
                    <div class="text-cont">
                        <h3>Wrap options:</h3>
                        <ul class="list-line">
                            <li>Add <code class="inline">flex-{breakpoint}-wrap</code> for flex items to wrap to the next line, the breakpoint is optional.</li>
                            <li>Add <code class="inline">flex-{breakpoint}-nowrap</code> to prevent flex items from wrapping, the breakpoint is optional but you would usually use this with a responsive class.</li>
                            <li>Add <code class="inline">flex-{breakpoint}-wrap-reverse</code> in order for the flex items to wrap on multiple lines from <strong>top to bottom</strong>.</li>
                        </ul>
                    </div>
                    <div class="column-demo mb-3">
                        <h4><code class="inline bg-white">flex-wrap</code></h4>
                        <div class="br bg-light mb-3 d-flex justify-content-center flex-wrap c-white t-center">
                            <div class="text br mx-2 mb-2 w-30">1</div>
                            <div class="text br mx-2 mb-2 w-30">2</div>
                            <div class="text br mx-2 mb-2 w-30">3</div>
                            <div class="text br mx-2 mb-2 mb-hd-0 w-30">4</div>
                            <div class="text br mx-2 w-30">5</div>
                        </div>
                        <pre class="highlight"><code class="html">&lt;div class="d-flex justify-content-center flex-wrap"&gt;
    &lt;div class="flex-item"&gt;1&lt;/div&gt;
    &lt;div class="flex-item"&gt;2&lt;/div&gt;
    &lt;div class="flex-item"&gt;3&lt;/div&gt;
    &lt;div class="flex-item"&gt;4&lt;/div&gt;
    &lt;div class="flex-item"&gt;5&lt;/div&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                        <h4><code class="inline bg-white">flex-nowrap</code></h4>
                        <div class="br bg-light mb-3 d-flex flex-nowrap c-white t-center">
                            <div class="text br mr-2 w-30">1</div>
                            <div class="text br mx-2 w-30">2</div>
                            <div class="text br mx-2 w-30">3</div>
                            <div class="text br mx-2 w-30">4</div>
                            <div class="text br ml-2 w-30">5</div>
                        </div>
                        <pre class="highlight"><code class="html">&lt;div class="d-flex flex-nowrap"&gt;
    &lt;div class="flex-item"&gt;1&lt;/div&gt;
    &lt;div class="flex-item"&gt;2&lt;/div&gt;
    &lt;div class="flex-item"&gt;3&lt;/div&gt;
    &lt;div class="flex-item"&gt;4&lt;/div&gt;
    &lt;div class="flex-item"&gt;5&lt;/div&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                        <h4><code class="inline bg-white">flex-wrap-reverse</code></h4>
                        <div class="br bg-light mb-3 d-flex justify-content-center flex-wrap-reverse c-white t-center">
                            <div class="text br mx-2 mt-2 w-30">1</div>
                            <div class="text br mx-2 mt-2 w-30">2</div>
                            <div class="text br mx-2 mt-hd-2 w-30">3</div>
                            <div class="text br mx-2 mb-hd-2 w-30">4</div>
                            <div class="text br mx-2 mb-2 w-30">5</div>
                        </div>
                        <pre class="highlight"><code class="html">&lt;div class="d-flex justify-content-center flex-wrap-reverse"&gt;
    &lt;div class="flex-item"&gt;1&lt;/div&gt;
    &lt;div class="flex-item"&gt;2&lt;/div&gt;
    &lt;div class="flex-item"&gt;3&lt;/div&gt;
    &lt;div class="flex-item"&gt;4&lt;/div&gt;
    &lt;div class="flex-item"&gt;5&lt;/div&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                    </div>
                    <h3>Responsive variations:</h3>
                    <pre class="highlight"><code class="html">&lt;!-- Default --&gt;
&lt;div class="d-flex flex-wrap"&gt;&lt;/div&gt;
&lt;div class="d-flex flex-nowrap"&gt;&lt;/div&gt;
&lt;div class="d-flex flex-wrap-reverse"&gt;&lt;/div&gt;
&lt;!-- Mobile --&gt;
&lt;div class="d-flex flex-mob-wrap"&gt;&lt;/div&gt;
&lt;div class="d-flex flex-mob-nowrap"&gt;&lt;/div&gt;
&lt;div class="d-flex flex-mob-wrap-reverse"&gt;&lt;/div&gt;
&lt;!-- Tablet --&gt;
&lt;div class="d-flex flex-tab-wrap"&gt;&lt;/div&gt;
&lt;div class="d-flex flex-tab-nowrap"&gt;&lt;/div&gt;
&lt;div class="d-flex flex-tab-wrap-reverse"&gt;&lt;/div&gt;
&lt;!-- Desktop --&gt;
&lt;div class="d-flex flex-desk-wrap"&gt;&lt;/div&gt;
&lt;div class="d-flex flex-desk-nowrap"&gt;&lt;/div&gt;
&lt;div class="d-flex flex-desk-wrap-reverse"&gt;&lt;/div&gt;
&lt;!-- HD --&gt;
&lt;div class="d-flex flex-hd-wrap"&gt;&lt;/div&gt;
&lt;div class="d-flex flex-hd-nowrap"&gt;&lt;/div&gt;
&lt;div class="d-flex flex-hd-wrap-reverse"&gt;&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>

                    <!-- Fill -->
                    <h3 class="mt-5">Fill</h3>
                    <p class="secondary-lead mt-0">
                        The flex fill class is set to fill the remaining space of the container. Its used by adding the <code class="inline">flex-{breakpoint}-fill</code> class to the <strong>flexible child</strong>.
                    </p>
                    <div class="column-demo mb-3">
                        <div class="br bg-light mb-3 d-flex c-white t-center">
                            <div class="flex-fill text br px-3 px-tab-4 px-hd-4 mr-1 mr-hd-2">1</div>
                            <div class="text br px-3 px-tab-4 px-hd-4 mx-1 mx-hd-2">2</div>
                            <div class="text br px-3 px-tab-4 px-hd-4 mx-1 mx-hd-2">3</div>
                            <div class="text br px-3 px-tab-4 px-hd-4 mx-1 mx-hd-2">4</div>
                            <div class="text br px-3 px-tab-4 px-hd-4 ml-1 ml-hd-2">5</div>
                        </div>
                    </div>
                    <pre class="highlight"><code class="html">&lt;div class="d-flex"&gt;
    &lt;div class="flex-item flex-fill"&gt;1&lt;/div&gt;
    &lt;div class="flex-item"&gt;2&lt;/div&gt;
    &lt;div class="flex-item"&gt;3&lt;/div&gt;
    &lt;div class="flex-item"&gt;4&lt;/div&gt;
    &lt;div class="flex-item"&gt;5&lt;/div&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                    <h3>Responsive variations:</h3>
                    <pre class="highlight"><code class="html">&lt;div class="flex-fill"&gt;&lt;/div&gt;
&lt;div class="flex-mob-fill"&gt;&lt;/div&gt;
&lt;div class="flex-tab-fill"&gt;&lt;/div&gt;
&lt;div class="flex-desk-fill"&gt;&lt;/div&gt;
&lt;div class="flex-hd-fill"&gt;&lt;/div&gt;
</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

                <!-- Grow & shrink -->
                <article class="section-scroll" id="growShrink">
                    <h2 class="b-b-light hash mb-3">Grow & shrink</h2>
                    <h3>Grow</h3>
                    <p class="secondary-lead mt-0">
                        The grow property defines the ability for an a flex child to grow within the flex container, the default is set to 0. You can target the flex grow properties by using the <code class="inline">flex-{breakpoint}-grow-{amount}</code> class where the breakpoint is optional and the <strong>amount is either 0 or 1.</strong>
                    </p>
                    <div class="column-demo mb-3">
                        <div class="br bg-light mb-3 d-flex c-white t-center">
                            <div class="text br px-3 px-tab-4 px-hd-4 mr-1 mr-hd-2">1</div>
                            <div class="text br px-3 px-tab-4 px-hd-4 mx-1 mx-hd-2 flex-grow-1">2</div>
                            <div class="text br px-3 px-tab-4 px-hd-4 mx-1 mx-hd-2">3</div>
                            <div class="text br px-3 px-tab-4 px-hd-4 mx-1 mx-hd-2">4</div>
                            <div class="text br px-3 px-tab-4 px-hd-4 ml-1 ml-hd-2">5</div>
                        </div>
                    </div>
                    <pre class="highlight"><code class="html">&lt;div class="d-flex"&gt;
    &lt;div class="flex-item"&gt;1&lt;/div&gt;
    &lt;div class="flex-item flex-grow-1"&gt;2&lt;/div&gt;
    &lt;div class="flex-item"&gt;3&lt;/div&gt;
    &lt;div class="flex-item"&gt;4&lt;/div&gt;
    &lt;div class="flex-item"&gt;5&lt;/div&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>

                    <!-- Shrink -->
                    <h3 class="mt-5">Shrink</h3>
                    <p class="secondary-lead mt-0">
                        The shrink property define the ability for an a flex child to shrink within the flex container, the default is set to 0. You can target the flex shrink properties by using the <code class="inline">flex-{breakpoint}-shrink-{amount}</code> class where the breakpoint is optional and the <strong>amount is either 0 or 1.</strong>
                    </p>
                    <div class="column-demo mb-3">
                        <div class="br bg-light mb-3 d-flex c-white t-center">
                            <div class="text br px-3 px-tab-4 px-hd-4 mr-1 mr-hd-2 flex-grow-1">1</div>
                            <div class="text br px-3 px-tab-4 px-hd-4 mx-1 mx-hd-2 flex-shrink-1">2</div>
                            <div class="text br px-3 px-tab-4 px-hd-4 mx-1 mx-hd-2 flex-grow-1">3</div>
                            <div class="text br px-3 px-tab-4 px-hd-4 mx-1 mx-hd-2 flex-grow-1">4</div>
                            <div class="text br px-3 px-tab-4 px-hd-4 ml-1 ml-hd-2 flex-grow-1">5</div>
                        </div>
                    </div>
                    <pre class="highlight"><code class="html">&lt;div class="d-flex"&gt;
    &lt;div class="flex-item flex-grow-1"&gt;1&lt;/div&gt;
    &lt;div class="flex-item flex-shrink-1"&gt;2&lt;/div&gt;
    &lt;div class="flex-item flex-grow-1"&gt;3&lt;/div&gt;
    &lt;div class="flex-item flex-grow-1"&gt;4&lt;/div&gt;
    &lt;div class="flex-item flex-grow-1"&gt;5&lt;/div&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                    <h3>Responsive variations:</h3>
                    <pre class="highlight"><code class="html">&lt;!-- Default --&gt;
&lt;div class="d-flex flex-grow-0"&gt;&lt;/div&gt;
&lt;div class="d-flex flex-grow-1"&gt;&lt;/div&gt;
&lt;div class="d-flex flex-shrink-0"&gt;&lt;/div&gt;
&lt;div class="d-flex flex-shrink-1"&gt;&lt;/div&gt;
&lt;!-- Mobile --&gt;
&lt;div class="d-flex flex-mob-grow-0"&gt;&lt;/div&gt;
&lt;div class="d-flex flex-mob-grow-1"&gt;&lt;/div&gt;
&lt;div class="d-flex flex-mob-shrink-0"&gt;&lt;/div&gt;
&lt;div class="d-flex flex-mob-shrink-1"&gt;&lt;/div&gt;
&lt;!-- Tablet --&gt;
&lt;div class="d-flex flex-tab-grow-0"&gt;&lt;/div&gt;
&lt;div class="d-flex flex-tab-grow-1"&gt;&lt;/div&gt;
&lt;div class="d-flex flex-tab-shrink-0"&gt;&lt;/div&gt;
&lt;div class="d-flex flex-tab-shrink-1"&gt;&lt;/div&gt;
&lt;!-- Desktop --&gt;
&lt;div class="d-flex flex-desk-grow-0"&gt;&lt;/div&gt;
&lt;div class="d-flex flex-desk-grow-1"&gt;&lt;/div&gt;
&lt;div class="d-flex flex-desk-shrink-0"&gt;&lt;/div&gt;
&lt;div class="d-flex flex-desk-shrink-1"&gt;&lt;/div&gt;
&lt;!-- HD --&gt;
&lt;div class="d-flex flex-hd-grow-0"&gt;&lt;/div&gt;
&lt;div class="d-flex flex-hd-grow-1"&gt;&lt;/div&gt;
&lt;div class="d-flex flex-hd-shrink-0"&gt;&lt;/div&gt;
&lt;div class="d-flex flex-hd-shrink-1"&gt;&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>


            </div><!-- /Col -->
            <?php include_once '../../partials/smallnav.php'?>
            <?php include_once '../../partials/sub-footer.php'?>
        </div><!-- /Row -->
    </div><!-- /Container -->
</section>

<?php include_once '../../partials/footer.php'?>