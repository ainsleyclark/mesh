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
                        <h3>Notation:</h3>
                        <ul class="list">
                            <li>All border classes shown below are prefixed with <code class="inline">b-{side}-{shade}</code> where side is <code class="inline">t, r, b, l</code>, (top, right, bottom or left) and optional and shade being light or dark, which is optional too.</li>
                        </ul>
                    </div>
                    <div class="text-cont">
                        <h3>Properties:</h3>
                        <table class="table-code w-100 t-left">
                            <col width="100">
                            <col width="200">
                            <thead>
                                <tr>
                                    <th>Class</th>
                                    <th>Properties</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>.b</td>
                                    <td>border: 1px solid rgba(0, 0, 0, 0.3);</td>
                                </tr>
                                <tr>
                                    <td>.b-light</td>
                                    <td>border: 1px solid rgba(0, 0, 0, 0.1);</td>
                                </tr>
                                <tr>
                                    <td>.b-dark</td>
                                    <td>border: 1px solid rgba(0, 0, 0, 0.6);</td>
                                </tr>
                                <tr>
                                    <td>.b-t</td>
                                    <td>border-top: 1px solid rgba(0, 0, 0, 0.3);</td>
                                </tr>
                                <tr>
                                    <td>.b-r</td>
                                    <td>border-right: 1px solid rgba(0, 0, 0, 0.3);</td>
                                </tr>
                                <tr>
                                    <td>.b-b</td>
                                    <td>border-bottom: 1px solid rgba(0, 0, 0, 0.3);</td>
                                </tr>
                                <tr>
                                    <td>.b-l</td>
                                    <td>border-left: 1px solid rgba(0, 0, 0, 0.3);</td>
                                </tr>
                                <tr>
                                    <td>.b-t-light</td>
                                    <td>border-top: 1px solid rgba(0, 0, 0, 0.1);</td>
                                </tr>
                                <tr>
                                    <td>.b-r-light</td>
                                    <td>border-right: 1px solid rgba(0, 0, 0, 0.1);</td>
                                </tr>
                                <tr>
                                    <td>.b-b-light</td>
                                    <td>border-bottom: 1px solid rgba(0, 0, 0, 0.1);</td>
                                </tr>
                                <tr>
                                    <td>.b-l-light</td>
                                    <td>border-left: 1px solid rgba(0, 0, 0, 0.1);</td>
                                </tr>
                                <tr>
                                    <td>.b-t-dark</td>
                                    <td>border-top: 1px solid rgba(0, 0, 0, 0.6);</td>
                                </tr>
                                <tr>
                                    <td>.b-r-dark</td>
                                    <td>border-right: 1px solid rgba(0, 0, 0, 0.6);</td>
                                </tr>
                                <tr>
                                    <td>.b-b-dark</td>
                                    <td>border-bottom: 1px solid rgba(0, 0, 0, 0.6);</td>
                                </tr>
                                <tr>
                                    <td>.b-l-dark</td>
                                    <td>border-left: 1px solid rgba(0, 0, 0, 0.6);</td>
                                </tr>
                    
                            </tbody>
                        </table> 
                    </div>
                    <div class="text-cont">
                        <h3>Example:</h3>
                        <div class="column-demo border-radius-demo mb-3">
                            <div class="mb-3 c-black t-center">
                                <div class="d-flex">
                                    <div class="text mr-1 bg-white b">b</div>
                                    <div class="text mx-1 bg-white b-light">b-light</div>
                                    <div class="text mx-1 bg-white b-dark">b-dark</div>
                                    <div class="text mx-1 bg-white b-t">b-t</div>
                                    <div class="text mx-1 bg-white b-r">b-r</div>
                                    <div class="text mx-1 bg-white b-b-light">b-b-light</div>
                                    <div class="text mx-1 bg-white b-l-dark">b-l-dark</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Border Radius -->
                <article class="section-scroll" id="radius">
                    <h2 class="b-b-light hash">Border Radius</h2>
                    <p class="secondary-lead">
                        The border classes help you to create borders on the fly easily. Choose from all different sides (top, right, bottom & left) as well as all sides.
                    </p>
                    <div class="text-cont">
                        <h3>Notation:</h3>
                        <ul class="list">
                            <li>All border radius classes shown below are prefixed with <code class="inline">br-{helper}</code>.</li>
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
                        <h3>Example:</h3>
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

            </div><!-- /Col -->
            <?php include_once('../../partials/smallnav.php') ?>
            <?php include_once('../../partials/sub-footer.php') ?>
        </div><!-- /Row -->
    </div><!-- /Container -->
</section>

<?php include_once('../../partials/footer.php') ?>
