<?php

//Page variables
$pageData = [
    'pageTitle' => 'Text',
    'pageDescription' => 'mesh includes a wide range of responsive and helpful utility classes for text. Responsive text is also included, great for decreasing size on smaller viewports.',
    'activePage' => 'text',
    'parentDirectory' => basename(__DIR__),
];

//Table of contents
$tableOfContents = [
    'sizes' => 'Font sizes',
    'sub' => 'Sub headings',
    'examples' => 'Examples',
    'utility' => 'Utility classes',
    'responsive' => 'Responsive text',
    'align' => 'Alignment',
];

?>

<?php include_once '../../partials/header.php';?>
<?php include_once '../../partials/sidenav.php';?>

<section class="content text-page">
    <div class="container-fullwidth">
        <div class="row justify-content-center mt-4 mt-desk-5">
            <div class="col-12 col-tab-9 col-desk-8 mr-desk-2 px-desk-4">
                <h1 class="mb-2 mt-0"><?php echo $pageData['pageTitle'] ?></h1>
                <div class="lead"><?php echo $pageData['pageDescription'] ?></div>

                <!-- Font Sizes -->
                <article class="section-scroll" id="sizes">
                    <h2 class="b-b-light hash">Font sizes</h2>
                    <p class="secondary-lead">
                        Default font sizes are shown below, margin is calculated automatically based on the size.
                    </p>
                    <div class="text-cont">
                        <h1 class="normal-headings">h1 Heading</h1>
                        <h2 class="normal-headings">h2 Heading</h2>
                        <h3 class="normal-headings">h3 Heading</h3>
                        <h4 class="normal-headings">h4 Heading</h4>
                        <h5 class="normal-headings">h5 Heading</h5>
                        <h6 class="normal-headings">h6 Heading</h6>
                    </div>
                </article>

                <!-- Font Sizes -->
                <article class="section-scroll" id="sub">
                    <h2 class="b-b-light hash">Sub headings</h2>
                    <p class="secondary-lead">A lead class is available by apply <code class="inline">.lead</code> to your element, this text is perfect for sub headings on pages and large paragraphs.</p>
                    <div class="text-cont bg-light br p-3">
                        <h1 class="normal-headings">Welcome to mesh</h1>
                        <p class="lead">I'm an example sub heading using the lead class.</p>
                    </div>

                    <pre class="highlight mt-3"><code class="html py-2">&lt;h1&gt;Welcome to mesh&lt;/h1&gt;
&lt;p class="lead"&gtI'm an example sub heading using the lead class.&lt;/p&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

                <!-- Unresponsive -->
                <article class="section-scroll" id="utility">
                    <h2 class="b-b-light hash">Utility classes</h2>
                    <p class="secondary-lead">
                        A number of text utility helper classes have been bundled with mesh to help with creating font styles quickly.
                    </p>
                    <div class="text-cont">
                        <h3>Notation:</h3>
                        <ul class="list-line">
                            <li>All text classes shown below are prefixed with <code class="inline">t-{helper}</code> for text.</li>
                        </ul>
                    </div>
                    <div class="text-cont">
                        <h3>Properties:</h3>
                        <table class="table-code w-100 t-left">
                            <col width="100">
                            <col width="100">
                            <thead>
                                <tr>
                                    <th>Class</th>
                                    <th>Properties</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>.t-decoration-none</td>
                                    <td>text-decoration: none;</td>
                                </tr>
                                <tr>
                                    <td>.t-normal</td>
                                    <td>font-weight: normal;</td>
                                </tr>
                                <tr>
                                    <td>.t-bold</td>
                                    <td>font-weight: bold;</td>
                                </tr>
                                <tr>
                                    <td>.t-light</td>
                                    <td>font-weight: light;</td>
                                </tr>
                                <tr>
                                    <td>.t-uppercase</td>
                                    <td>text-transform: uppercase;</td>
                                </tr>
                                <tr>
                                    <td>.t-lowercase</td>
                                    <td>text-transform: lowercase;</td>
                                </tr>
                                <tr>
                                    <td>.t-initial</td>
                                    <td>text-transform: initial;</td>
                                </tr>
                                <tr>
                                    <td>.t-nowrap</td>
                                    <td>white-space: nowrap;</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </article>

                <!-- Responsive Text -->
                <article class="section-scroll" id="responsive">
                    <h2 class="b-b-light hash">Responsive text</h2>
                    <p class="secondary-lead">Below is a demo of our responsive text class, you can target it by using the <code class="inline">t-responsive</code> class.</p>
                    <button class="btn btn-rounded btn-secondary" id="responsiveTextBtn">Turn responsive text off</button>
                    <div class="text-cont">
                        <p class="t-responsive" id="responsiveText">With responsive text, the font size gradually gets smaller on different viewports. Its totally customizable, you can adjust the base font size and how many points you would like. Go ahead and resize the screen to watch me get smaller!</p>
                    </div>
                </article>

                <!-- Alignment -->
                <article class="section-scroll" id="align">
                    <h2 class="b-b-light hash">Alignment</h2>
                    <p class="secondary-lead">
                        Text alignment is simple with mesh, you can adjust it responsively by using <code class="inline">t-{breakpoint}-{property}</code> The breakpoint being optional and one of our five breakpoints, the properties being outlined below.
                    </p>
                    <div class="text-cont">
                        <table class="table-code w-100 t-left mt-3">
                            <col width="100">
                            <col width="100">
                            <thead>
                                <tr>
                                    <th>Class</th>
                                    <th>Properties</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>.t-center</td>
                                    <td>text-align: center;</td>
                                </tr>
                                <tr>
                                    <td>.t-left</td>
                                    <td>text-align: left;</td>
                                </tr>
                                <tr>
                                    <td>.t-right</td>
                                    <td>text-align: right;</td>
                                </tr>
                                <tr>
                                    <td>.t-justify</td>
                                    <td>text-align: center;</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <h3 class="mt-3">Responsive variations:</h3>
                    <pre class="highlight"><code class="html">&lt;!-- Default --&gt;
&lt;div class="t-center"&gt;&lt;/div&gt;
&lt;div class="t-left"&gt;&lt;/div&gt;
&lt;div class="t-right"&gt;&lt;/div&gt;
&lt;div class="t-justify"&gt;&lt;/div&gt;
&lt;!-- Mobile --&gt;
&lt;div class="t-mob-center"&gt;&lt;/div&gt;
&lt;div class="t-mob-left"&gt;&lt;/div&gt;
&lt;div class="t-mob-right"&gt;&lt;/div&gt;
&lt;div class="t-mob-justify"&gt;&lt;/div&gt;
&lt;!-- Tablet --&gt;
&lt;div class="t-tab-center"&gt;&lt;/div&gt;
&lt;div class="t-tab-left"&gt;&lt;/div&gt;
&lt;div class="t-tab-right"&gt;&lt;/div&gt;
&lt;div class="t-tab-justify"&gt;&lt;/div&gt;
&lt;!-- Desktop --&gt;
&lt;div class="t-desk-center"&gt;&lt;/div&gt;
&lt;div class="t-desk-left"&gt;&lt;/div&gt;
&lt;div class="t-desk-right"&gt;&lt;/div&gt;
&lt;div class="t-desk-justify"&gt;&lt;/div&gt;
&lt;!-- HD --&gt;
&lt;div class="t-hd-center"&gt;&lt;/div&gt;
&lt;div class="t-hd-left"&gt;&lt;/div&gt;
&lt;div class="t-hd-right"&gt;&lt;/div&gt;
&lt;div class="t-hd-justify"&gt;&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

            </div><!-- /Col -->
            <?php include_once '../../partials/smallnav.php'?>
            <?php include_once '../../partials/sub-footer.php'?>
        </div><!-- /Row -->
    </div><!-- /Container -->
</section>

<?php include_once '../../partials/footer.php'?>

<?php function scripts()
{?>

<script>
//Turn responsive text on & off
document.querySelector('#responsiveTextBtn').addEventListener('click', function() {
    this.innerHTML = this.innerHTML.includes('off') ? "Turn responsive text on" : "Turn responsive text off";
    let responsiveText = document.querySelector('#responsiveText');
    responsiveText.classList.toggle('t-responsive');
    responsiveText.classList.toggle('font-size-2');
});
</script>

<?php }?>