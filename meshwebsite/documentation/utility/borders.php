<?php

//Page variables
$pageData = [
	'pageTitle' => 'Borders',
	'pageDescription' => 'Use our border utility classes to quickly style an elements border with color classes & shape their border radius.',
    'activePage' => 'borders',
    'parentDirectory' => basename(__DIR__)
]; 

//Table of contents
$tableOfContents = [
    'borders' => 'Borders',
    'radius' => 'Border radius',
];

?>

<?php include_once('../../partials/header.php'); ?>
<?php include_once('../../partials/sidenav.php'); ?>

<section class="content borders-page">
    <div class="container-fullwidth">
        <div class="row justify-content-center mt-4 mt-desk-5">
            <div class="col-12 col-tab-9 col-desk-8 mr-desk-2 px-desk-4">
                <h1 class="mb-2 mt-0"><?php echo $pageData['pageTitle'] ?></h1>
                <div class="lead"><?php echo $pageData['pageDescription'] ?></div>

                <!-- Borders -->
                <article class="section-scroll" id="borders">
                    <h2 class="b-b-light hash">Borders</h2>
                    <p class="secondary-lead">
                        The border classes help you to create borders on the fly easily. Choose from all different sides (top, right, bottom & left) as well as all sides.
                    </p>
                    <div class="text-cont">

                    </div>
                </article>

                <!-- Border Radius -->
                <article class="section-scroll" id="radius">
                    <h2 class="b-b-light hash">Border Radius</h2>
                    <p class="secondary-lead">
                        The border classes help you to create borders on the fly easily. Choose from all different sides (top, right, bottom & left) as well as all sides.
                    </p>
                    <div class="text-cont">

                    </div>
                    <div class="text-cont">
                        <h3>Notation:</h3>
                        <ul class="list">
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
                                    <td>.br</td>
                                    <td>border-radius: 0.25em;</td>
                                </tr>
                                <tr>
                                    <td>.br-sm</td>
                                    <td>border-radius: 0.5em;</td>
                                </tr>
                                <tr>
                                    <td>.br-lg</td>
                                    <td>border-radius: 1em;</td>
                                </tr>
                                <tr>
                                    <td>.br-circle</td>
                                    <td>border-radius: 100%;</td>
                                </tr>
                                <tr>
                                    <td>.br-none</td>
                                    <td>border-radius: none;</td>
                                </tr>
                                <tr>
                                    <td>.br-top-left</td>
                                    <td>border-top-left-radius: 0.5em;</td>
                                </tr>
                                <tr>
                                    <td>.br-top-right</td>
                                    <td>border-top-right-radius: 0.5em;</td>
                                </tr>
                                <tr>
                                    <td>.br-bottom-left</td>
                                    <td>border-bottom-left-radius: 0.5em;</td>
                                </tr>
                                <tr>
                                    <td>.br-bottom-right</td>
                                    <td>border-bottom-right-radius: 0.5em;</td>
                                </tr>
                                <tr>
                                    <td>.br-top</td>
                                    <td>border-top-left-radius: 0.5em;<br>border-top-right-radius: 0.5em;</td>
                                </tr>
                                <tr>
                                    <td>.br-bottom</td>
                                    <td>border-bottom-left-radius: 0.5em;<br>border-bottom-right-radius: 0.5em;</td>
                                </tr>
                            </tbody>
                        </table> 
                    </div>
                    <div class="text-cont">
                        <h3>Examples:</h3>
                        <div class="column-demo border-radius-demo mb-3">
                            <div class="mb-3 c-white t-center">
                                <div class="d-flex justify-content-center align-items-center mb-3 flex-wrap">
                                    <div class="text mr-1 br">br</div>
                                    <div class="text mx-1 br-sm">br-sm</div>
                                    <div class="text mx-1 br-lg">br-lg</div>
                                    <div class="text mx-1 br-circle">br-circle</div>
                                    <div class="text mx-1 br-none">br-none</div>
                                    <div class="text mx-1 br-top">br-top</div>
                                    <div class="text mx-1 br-bottom">br-bottom</div>
                                    <div class="text mx-1 w-20 br-top-left">br-top-left</div>
                                    <div class="text mx-1 w-20 br-top-right">br-top-right</div>
                                    <div class="text mx-1 w-20 br-bottom-left">br-bottom-left</div>
                                    <div class="text ml-1 w-20 br-bottom-right">br-bottom-right</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Alignment --> 
                <article class="section-scroll" id="align">
                    <h2 class="b-b-light hash">Alignment</h2>
                    <p class="secondary-lead">
                        Text alignment is simple with mesh, you can adjust it responsively by using <code class="inline">t-{breakpoint}-{property}</code>  The breakpoint being optional and one of our five breakpoints, the properties being outlined below.
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
            <?php include_once('../../partials/smallnav.php') ?>
            <?php include_once('../../partials/sub-footer.php') ?>
        </div><!-- /Row -->
    </div><!-- /Container -->
</section>

<?php include_once('../../partials/footer.php') ?>
