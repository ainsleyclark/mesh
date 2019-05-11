<?php

//Page variables
$pageData = [
	'pageTitle' => 'Text',
	'pageDescription' => 'mesh includes a wide range of responsive and helpful utility classes for text. Responsive text is also included, great for decreasing size on smaller viewports.',
    'activePage' => 'text',
    'parentDirectory' => basename(__DIR__)
]; 

//Table of contents
$tableOfContents = [
    'sizes' => 'Font sizes',
    'examples' => 'Examples',
    'utility' => 'Utility classes',
    'responsive' => 'Responsive text',
    'align' => 'Alignment'
];

?>

<?php include_once('../../partials/header.php'); ?>
<?php include_once('../../partials/sidenav.php'); ?>

<section class="content sizing-page">
    <div class="container-fullwidth">
        <div class="row justify-content-center mt-4 mt-desk-5">
            <div class="col-12 col-tab-9 col-desk-8 mr-desk-2 px-desk-4">
                <h1 class="mb-2 mt-0"><?php echo $pageData['pageTitle'] ?></h1>
                <div class="lead"><?php echo $pageData['pageDescription'] ?></div>

                <!-- Font Sizes -->
                <article class="section-scroll" id="sizes">
                    <h2 class="b-b1-light hash">Font sizes</h2>
                    <p class="secondary-lead">
                        Default font sizes are shown below, is calculated automatically based on the size.
                    </p>
                    <div class="text-cont">
                        <h1 class="normal-headings">h1 Heading</h1>
                        <h2 class="normal-headings">h2 Heading</h2>
                        <h3 class="normal-headings">h3 Heading</h3>
                        <h4 class="normal-headings">h4 Heading</h4>
                        <h5 class="normal-headings">h5 Heading</h5>
                        <h6 class="normal-headings">h6 Heading</h6>
                    </div>
                    
                    <p></p>

                </article>

                <!-- Unresponsive -->
                <article class="section-scroll" id="utility">
                    <h2 class="b-b1-light hash">Unresponsive classes</h2>
                    <p class="secondary-lead">
                        A number of text utility helper classes have been bundled with mesh to help with creating font styles quickly.
                    </p>
                    <div class="text-cont">
                        <h3>Notation:</h3>
                        <ul class="list">
                            <li>All text classes shown below are prefixed with <code class="inline">.t-{helper}</code> for text.</li>
                        </ul>
                    </div>
                    <div class="text-cont">
                        <h3>Properties:</h3>
                        <table class="table w-100 t-left code">
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
                    <h2 class="b-b1-light hash">Responsive text</h2>
                    <button class="btn btn-rounded btn-secondary">Turn responsive text on</button>
                    <div class="text-cont">
                        <p class="t-responsive">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda rerum iste, nobis similique est obcaecati commodi quae quam hic veritatis numquam facere ratione praesentium, nesciunt itaque! Nihil sunt alias quidem molestiae illo excepturi reprehenderit, saepe nesciunt qui, repudiandae voluptatem quibusdam molestias eligendi ducimus, quasi quod sequi beatae incidunt expedita doloremque? Ducimus natus impedit culpa nobis eum voluptates ex necessitatibus aspernatur veritatis vero. Incidunt nobis nesciunt nihil reiciendis optio odit blanditiis quidem quaerat earum, sunt vitae, voluptatibus obcaecati consequuntur fugit minima, minus vel! Commodi rem libero fugiat architecto facere numquam esse deleniti vel officiis aperiam corporis excepturi nam, laudantium voluptates dolorum autem minus quo minima molestiae error ipsum quisquam! Amet modi nemo fugit doloremque officia incidunt accusantium? Eius est sequi fugiat, commodi culpa necessitatibus, non a obcaecati numquam atque architecto dolores quod optio? Dolorem perferendis quod dignissimos earum nesciunt molestiae est blanditiis vitae tempora ullam. Itaque odio quasi nesciunt voluptates voluptas ipsa corrupti quod et sit, laborum deleniti quae facilis assumenda illo iure eius, officia atque. Quas id commodi architecto. Totam nihil aliquid vitae velit vero? Eos vitae pariatur facilis. Dignissimos laudantium similique magnam iusto, pariatur esse vitae illum omnis odio quia, fuga architecto adipisci expedita dolorem impedit minus at nulla?</p>
                    </div>
                </article>

                <!-- Alignment --> 
                <article class="section-scroll" id="align">
                    <h2 class="b-b1-light hash">Alignment</h2>
                    <p class="secondary-lead">
                        Text alignment is simple with mesh, you can adjust it responsively by using <code class="inline">t-{breakpoint}-{property}</code>  The breakpoint being optional and one of our five breakpoints, the properties being outlined below.
                    </p>
                    <div class="text-cont">
                        <table class="table w-100 t-left code mt-3">
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
                    <h3>Responsive variations:</h3>
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