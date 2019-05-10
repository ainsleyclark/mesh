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
    'default' => 'Background Colors',
    'examples' => 'Examples',
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
                    <table class="table w-100 t-left code mt-4">
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
                                <td><div class="w-70 h-100 p-2 bg-white p-relative br"></div></td>
                                <td>#ffffff</td>
                            </tr>
                            <tr>
                                <td class="py-2">.bg-black</td>
                                <td><div class="w-70 h-100 p-2 bg-black p-relative br"></div></td>
                                <td>#000000</td>
                            </tr>
                            <tr>
                                <td class="py-2">.bg-dark</td>
                                <td><div class="w-70 h-100 p-2 bg-dark p-relative br"></div></td>
                                <td>#e8e8e8</td>
                            </tr>
                            <tr>
                                <td class="py-2">.bg-muted</td>
                                <td><div class="w-70 h-100 p-2 bg-muted p-relative br"></div></td>
                                <td>#999999</td>
                            </tr>
                            <tr>
                                <td class="py-2">.bg-light</td>
                                <td><div class="w-70 h-100 p-2 bg-light p-relative br"></div></td>
                                <td>#e8e8e8</td>
                            </tr>
                            <tr>
                                <td class="py-2">.bg-primary</td>
                                <td><div class="w-70 h-100 p-2 bg-primary p-relative br"></div></td>
                                <td>#ff2451</td>
                            </tr>
                            <tr>
                                <td class="py-2">.bg-secondary</td>
                                <td><div class="w-70 h-100 p-2 bg-secondary p-relative br"></div></td>
                                <td>#8270b8</td>
                            </tr>
                            <tr>
                                <td class="py-2">.bg-success</td>
                                <td><div class="w-70 h-100 p-2 bg-success p-relative br"></div></td>
                                <td>#55b559</td>
                            </tr>
                            <tr>
                                <td class="py-2">.bg-info</td>
                                <td><div class="w-70 h-100 p-2 bg-info p-relative br"></div></td>
                                <td>#37abd4</td>
                            </tr>
                            <tr>
                                <td class="py-2">.bg-warning</td>
                                <td><div class="w-70 h-100 p-2 bg-warning p-relative br"></div></td>
                                <td>#ff9e0f</td>
                            </tr>
                            <tr>
                                <td class="py-2">.bg-danger</td>
                                <td><div class="w-70 h-100 p-2 bg-danger p-relative br"></div></td>
                                <td>#f55145</td>
                            </tr>
                            <tr>
                                <td class="py-2">.bg-link</td>
                                <td><div class="w-70 h-100 p-2 bg-link p-relative br"></div></td>
                                <td>#3763d4</td>
                            </tr>
                        </tbody>
                    </table>
                </article>

                <!-- Examples -->
                <article class="section-scroll" id="examples">
                    <h2 class="b-b1-light hash">Examples</h2>
                    <h3 class="mt-3">Responsive Position:</h3>
                    <p>
                        Here, the purple element, the third that sits in the DOM will be positioned absolutley from desktop widths and above, whilst being static at mobile and tablet.
                    </p>
                    <div class="column-demo c-white mb-3">
                        <div class="br d-flex mb-3 height-100 bg-light justify-content-center align-items-center justify-content-desk-between t-center">
                            <div class="text px-3 mx-2 br mx-0 w-30"></div>                            
                            <div class="text px-3 mx-2 br mx-0 w-30"></div>
                            <div class="text px-3 mx-2 br mx-0 w-30 p-desk-absolute bg-secondary" style="opacity: 0.6; left: 20%;"></div>
                        </div>
                    </div>
                    <pre class="highlight"><code class="html">&lt;div class="element"&gt;element&lt;/div&gt;
&lt;div class="element"&gt;element&lt;/div&gt;
&lt;div class="p-desk-absolute"&gt;third-child&lt;/div&gt;
</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

              

            </div><!-- /Col -->
            <?php include_once('../../partials/smallnav.php') ?>
            <?php include_once('../../partials/sub-footer.php') ?>
        </div><!-- /Row -->
    </div><!-- /Container -->
</section>

<?php include_once('../../partials/footer.php') ?>