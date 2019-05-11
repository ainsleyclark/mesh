<?php

//Page variables
$pageData = [
	'pageTitle' => 'Colors',
	'pageDescription' => 'A small color pallette has been added to mesh to keep things quick, but its totally customisable. Manipulate the elements color and background color quickly.',
    'activePage' => 'colors',
    'parentDirectory' => basename(__DIR__)
]; 

//Table of contents
$tableOfContents = [
    'usage' => 'Usage',
    'background' => 'Background Colors',
    'colors' => 'Colors', 
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
                        All website's colors are different, there's no doubt in that. Which is why we highly reccomend you use the mesh builder to change the default colors in order to create a custom css file. 
                        <br><strong>Color and background color</strong> are able to be manipulated inline with the color utility classes.
                    </p>
                    <div class="text-cont">
                        <h3>Notation:</h3>
                        <ul class="list">
                            <li>You can target the color class by using <code class="inline">c-{color}</code>.</li>
                            <li>The background class can be targeted by using <code class="inline">bg-{color}</code>.</li>
                        </ul>
                    </div>
                </article>

                <!-- Background Colors -->
                <article class="section-scroll" id="background">
                    <h2 class="b-b1-light hash">Background Colors</h2>
                    <p class="secondary-lead">Here you can see the default mesh background colors:</p>
                    <table class="table-code w-100 t-left mt-3">
                        <col width="100">
                        <col width="140">
                        <col width="80">
                        <thead>
                            <tr>
                                <th>Class</th>
                                <th>Background Color</th>
                                <th>Hex</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="py-2">.bg-white</td>
                                <td><div class="w-70 h-100 p-2 bg-white  br"></div></td>
                                <td>#ffffff</td>
                            </tr>
                            <tr>
                                <td class="py-2">.bg-black</td>
                                <td><div class="w-70 h-100 p-2 bg-black  br"></div></td>
                                <td>#000000</td>
                            </tr>
                            <tr>
                                <td class="py-2">.bg-dark</td>
                                <td><div class="w-70 h-100 p-2 bg-dark  br"></div></td>
                                <td>#e8e8e8</td>
                            </tr>
                            <tr>
                                <td class="py-2">.bg-muted</td>
                                <td><div class="w-70 h-100 p-2 bg-muted  br"></div></td>
                                <td>#999999</td>
                            </tr>
                            <tr>
                                <td class="py-2">.bg-light</td>
                                <td><div class="w-70 h-100 p-2 bg-light  br"></div></td>
                                <td>#e8e8e8</td>
                            </tr>
                            <tr>
                                <td class="py-2">.bg-primary</td>
                                <td><div class="w-70 h-100 p-2 bg-primary  br"></div></td>
                                <td>#ff2451</td>
                            </tr>
                            <tr>
                                <td class="py-2">.bg-secondary</td>
                                <td><div class="w-70 h-100 p-2 bg-secondary  br"></div></td>
                                <td>#8270b8</td>
                            </tr>
                            <tr>
                                <td class="py-2">.bg-success</td>
                                <td><div class="w-70 h-100 p-2 bg-success  br"></div></td>
                                <td>#55b559</td>
                            </tr>
                            <tr>
                                <td class="py-2">.bg-info</td>
                                <td><div class="w-70 h-100 p-2 bg-info  br"></div></td>
                                <td>#37abd4</td>
                            </tr>
                            <tr>
                                <td class="py-2">.bg-warning</td>
                                <td><div class="w-70 h-100 p-2 bg-warning  br"></div></td>
                                <td>#ff9e0f</td>
                            </tr>
                            <tr>
                                <td class="py-2">.bg-danger</td>
                                <td><div class="w-70 h-100 p-2 bg-danger  br"></div></td>
                                <td>#f55145</td>
                            </tr>
                            <tr>
                                <td class="py-2">.bg-link</td>
                                <td><div class="w-70 h-100 p-2 bg-link  br"></div></td>
                                <td>#3763d4</td>
                            </tr>
                        </tbody>
                    </table>
                </article>

                <!-- Background Colors -->
                <article class="section-scroll" id="colors">
                    <h2 class="b-b1-light hash">Colors</h2>
                    <p class="secondary-lead">Here you can see the default mesh text colors:</p>
                    <table class="table-code w-100 t-left mt-3">
                        <col width="100">
                        <col width="140">
                        <col width="80">
                        <thead>
                            <tr>
                                <th>Class</th>
                                <th>Color</th>
                                <th>Hex</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="py-2">.c-white</td>
                                <td><div class="w-70 h-100 c-white br bg-muted" style="text-shadow: none;">White</div></td>
                                <td>#ffffff</td>
                            </tr>
                            <tr>
                                <td class="py-2">.c-black</td>
                                <td class="c-black">Black</td>
                                <td>#000000</td>
                            </tr>
                            <tr>
                                <td class="py-2">.c-dark</td>
                                <td class="c-dark">Dark</td>
                                <td>#e8e8e8</td>
                            </tr>
                            <tr>
                                <td class="py-2">.c-muted</td>
                                <td class="c-muted">Muted</td>
                                <td>#999999</td>
                            </tr>
                            <tr>
                                <td class="py-2">.c-light</td>
                                <td class="c-light">Light</td>
                                <td>#e8e8e8</td>
                            </tr>
                            <tr>
                                <td class="py-2">.c-primary</td>
                                <td class="c-primary">Primary</td>
                                <td>#ff2451</td>
                            </tr>
                            <tr>
                                <td class="py-2">.c-secondary</td>
                                <td class="c-secondary">Secondary</td>
                                <td>#8270b8</td>
                            </tr>
                            <tr>
                                <td class="py-2">.c-success</td>
                                <td class="c-success">Success</td>
                                <td>#55b559</td>
                            </tr>
                            <tr>
                                <td class="py-2">.c-info</td>
                                <td class="c-info">Info</td>
                                <td>#37abd4</td>
                            </tr>
                            <tr>
                                <td class="py-2">.c-warning</td>
                                <td class="c-warning">Warning</td>
                                <td>#ff9e0f</td>
                            </tr>
                            <tr>
                                <td class="py-2">.c-danger</td>
                                <td class="c-danger">Danger</td>
                                <td>#f55145</td>
                            </tr>
                            <tr>
                                <td class="py-2">.c-link</td>
                                <td class="c-link">Link</td>
                                <td>#3763d4</td>
                            </tr>
                        </tbody>
                    </table>
                </article>

            </div><!-- /Col -->
            <?php include_once('../../partials/smallnav.php') ?>
            <?php include_once('../../partials/sub-footer.php') ?>
        </div><!-- /Row -->
    </div><!-- /Container -->
</section>

<?php include_once('../../partials/footer.php') ?>