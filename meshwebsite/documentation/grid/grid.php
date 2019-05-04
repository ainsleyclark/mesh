<?php

//Page variables
$pageData = [
	'pageTitle' => 'Grid',
	'pageDescription' => 'See how powerful our mobile-first flexbox grid is. With five breakpoints to choose from, its easy sculpting elements to be responsive.',
    'activePage' => 'grid',
    'parentDirectory' => basename(__DIR__)
]; 

//Table of contents
$tableOfContents = [
    'howItWorks' => 'How it works',
    'gridOptions' => 'Grid options',
	'containers' => 'Containers',
    'rows' => 'Rows',
    'columns' => 'Columns',
	'offset' => 'Offset',
];

?>

<?php include_once('../../partials/header.php'); ?>
<?php include_once('../../partials/sidenav.php'); ?>

<section class="content grid-page">
    <div class="container-fullwidth">
        <div class="row justify-content-center mt-4 mt-desk-5">
            <div class="col-12 col-tab-9 col-desk-8 mr-desk-2 px-desk-4">
                <h1 class="mb-2">Grid</h1>
                <div class="lead"><?php echo $pageData['pageDescription'] ?></div>

                <!-- How it works -->
                <article class="section-scroll" id="howItWorks">
                    <h2 class="b-b1-light hash">How it works</h2>
                    <p>mesh uses the conventional containers, rows and columns to layout and align content, it's built with flex box and is fully responsive. Here's an example:</p>
<pre class="highlight"><code class="html">&lt;div class="container"&gt;
    &lt;div class="row"&gt;
        &lt;div class="col-12 col-tab-6 col-desk-4 col-hd-3"&gt;
            I'm a column, I take up 12 columns at default width, 6 at tablet, 4 at dekstop and 3 in hd screens
        &lt;/div&gt;
        &lt;div class="col-12 col-tab-6 col-desk-4 col-hd-3"&gt;
            I'm a column, I take up 12 columns at default width, 6 at tablet, 4 at dekstop and 3 in hd screens
        &lt;/div&gt;
        &lt;div class="col-12 col-tab-6 col-desk-4 col-hd-3"&gt;
            I'm a column, I take up 12 columns at default width, 6 at tablet, 4 at dekstop and 3 in hd screens
        &lt;div class="col-12 col-tab-6 col-desk-4 col-hd-3"&gt;
            I'm a column, I take up 12 columns at default width, 6 at tablet, 4 at dekstop and 3 in hd screens
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

                <!-- Grid options -->
                <article class="section-scroll" id="gridOptions">
                    <h2 class="b-b1-light hash">Grid options</h2>
                    <p></p>
                </article>

                <!-- Containers -->
                <article class="section-scroll" id="containers">
                    <h2 class="b-b1-light hash">Containers</h2>
                    <p class="secondary-lead">A container is the wrapper for a row (more on that later) and defines the width of your content. It can be at fixed size or full width, and will gracefully become smaller as screen size gets smaller. Here are your options:</p>
                    <div class="text-cont">
                        <h3>Container options:</h3>
                        <ul class="list">
                            <li>A container, by default is at fixed size, by using the <code class="inline">container</code> tag. With maximum widths set at each side, it will gradually get smaller as the viewport does.</li>
                            <li>Or a container can be full width, which will take up 100% of the screen and have slight padding either side. This is acheived by adding the <code class="inline">container-fullwidth</code> class to a div or semantic element.</li>
                        </ul>
                    </div>
                    <button class="btn btn-secondary" id="btnBrowser">Switch to container-fullwidth</button>
                    <div class="browser-cont">
                        <?php include_once('../../partials/browser-window.php'); ?>
                    </div>
                </article>

                <!-- Rows -->
                <article class="section-scroll" id="rows">
                    <h2 class="b-b1-light hash">Rows</h2>
                    <p class="secondary-lead">
                        A <strong>row is the container for columns</strong>, it lives inside a container. It is 100% width (of container) and uses flexbox to align columns. Naturally it has no padding but has negative margins on the x axis to counteract the gaps set on the columns.
                        <br>Add the <code class="inline">row</code> class to a <code class="inline">div</code> to enable this behaviour.
                    </p>
                    <div class="text-cont">
                        <h3>Row Options:</h3>
                        <ul class="list">
                            <li>To rid of the padding on each side of a column, add the <code class="inline">no-gaps</code> class to a row. See below: </li>
                        </ul>
                    </div>
                    <button class="btn btn-secondary" id="btnNoGaps">Turn gaps off</button>
                    <div class="column-demo">
                        <div class="row c-white t-center">
                            <div class="col-1">
                                <div class="text w-100">1</div>
                            </div>
                            <div class="col-1">
                                <div class="text w-100">2</div>
                            </div>
                            <div class="col-1">
                                <div class="text w-100">3</div>
                            </div>
                            <div class="col-1">
                                <div class="text w-100">4</div>
                            </div>
                            <div class="col-1">
                                <div class="text w-100">5</div>
                            </div>
                            <div class="col-1">
                                <div class="text w-100">6</div>
                            </div>
                            <div class="col-1">
                                <div class="text w-100">7</div>
                            </div>
                            <div class="col-1">
                                <div class="text w-100">8</div>
                            </div>
                            <div class="col-1">
                                <div class="text w-100">9</div>
                            </div>
                            <div class="col-1">
                                <div class="text w-100">10</div>
                            </div>
                            <div class="col-1">
                                <div class="text w-100">11</div>
                            </div>
                            <div class="col-1">
                                <div class="text w-100">12</div>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Columns -->
                <article class="section-scroll" id="columns">
                    <h2 class="b-b1-light hash">Columns</h2>
                    <p class="secondary-lead">
                        A column is where your content lives, <strong>they live inside rows</strong>, there can be a maximum of 12 columns in a row, if there a more they will wrap to the next line. Of course you can overwrite this behaviour by using the <code class="inline">flex-nowrap</code> class.
                        <br>The column prefix is <code class="inline">col-{modifier}-{amount}</code> where the modifer is the class name for a breakpoint (e.g. <code class="inline">mob</code> / <code class="inline">tab</code> / <code class="inline">desk</code> / <code class="inline">hd</code>) and the amount can be 1 to 12. 
                    </p>
                    <div class="text-cont">
                        <h3>Notes:</h3>
                        <ul class="list">
                            <li>The default size of a column is defined with <code class="inline">col-{amount}</code>, for example <code class="inline">col-10</code> will take up 10 columns at all breakpoints.</li>
                            <li>The <code class="inline">col-auto</code> class will fill up all available space within the row, great if you want a column to have a predefined width (in pixels or ems for example).</li>
                            <li>The default width of a column is 100%, meaning you can omit <code class="inline">col-12</code> if you always want to take up 12 columns for mobile.</li>
                        </ul>
                    </div>

                    <!-- Simple Layout -->
                    <div class="example mt-5">
                        <div class="text-cont">
                            <h3>Simple layout:</h3>
                            <p>Here all columns will take up 4 spaces at HD screens, 6 on tablet, and because mesh is built mobile first, they will be 100% width at mobile, even though we didnt specify. The first column will take up 12 columns on tablet. Go ahead and resize the screen to see the effect.</p>
                        </div>
                        <div class="column-demo c-white mb-25">
                            <div class="row">
                                <div class="col-tab-12 col-hd-4 mb-2 mb-hd-0">
                                    <div class="text px-3 br">
                                        col-tab-12 col-hd-4
                                    </div>
                                </div>
                                <div class="col-tab-6 col-hd-4 mb-2 mb-tab-0">
                                    <div class="text px-3 br">
                                        col-tab-6 col-hd-4
                                    </div>
                                </div>
                                <div class="col-tab-6 col-hd-4">
                                    <div class="text px-3 br">
                                        col-tab-6 col-hd-4
                                    </div>
                                </div>
                            </div>
                        </div>
                        <pre class="highlight"><code class="html">&lt;div class="container"&gt;
    &lt;div class="row"&gt;
        &lt;div class="col-tab-12 col-hd-4"&gt;
        &lt;/div&gt;
        &lt;div class="col-tab-6 col-hd-4"&gt;
        &lt;/div&gt;
        &lt;div class="col-tab-6 col-hd-4"&gt;
    &lt;/div&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                    </div>

                    <!-- Auto width -->
                    <div class="example mt-5">
                        <div class="text-cont">
                            <h3>Auto width columns</h3>
                            <p>With the <code class="inline">col-{breakpoint}-auto</code> class, the column will fill based on the content that sites inside it.</p>
                        </div>
                        <div class="column-demo c-white mb-25">
                            <div class="row">
                                <div class="col-desk-3 mb-2 mb-hd-0">
                                    <div class="text px-3 br">
                                        col-desk-3
                                    </div>
                                </div>
                                <div class="col-auto mb-2 mb-hd-0">
                                    <div class="text px-3 br">
                                        I fill based what's inside me - col-auto
                                    </div>
                                </div>
                                <div class="col-desk-3">
                                    <div class="text px-3 br">
                                        col-desk-3
                                    </div>
                                </div>
                            </div>
                        </div>
                        <pre class="highlight"><code class="html">&lt;div class="container"&gt;
    &lt;div class="row"&gt;
        &lt;div class="col-desk-3"&gt;
        &lt;/div&gt;
        &lt;div class="col-auto"&gt;
        &lt;/div&gt;
        &lt;div class="col-desk-3"&gt;
    &lt;/div&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                    </div>

                    <!-- Wrapping -->
                    <div class="example mt-5">
                        <div class="text-cont">
                            <h3>Wrapping</h3>
                            <p>
                                If you require column to wrap to the next line at various viewports, you can use the <code class="inline">w-100</code> class which will effectively create a new line in your grid without using a new <code class="inline">row</code>. Sometimes you may not want this at desktop for example, if so, use our display classes - <code class="inline">d-desk-none</code>.              
                                <br>You can even add margin to the <code class="inline">w-100</code> like below:
                            </p>
                        </div>
                        <div class="column-demo c-white mb-25">
                            <div class="row">
                                <div class="col-6 col-tab-3 mb-1">
                                    <div class="text px-3 br">
                                        col-6 col-tab-3
                                    </div>
                                </div>
                                <div class="col-6 col-tab-3">
                                    <div class="text px-3 br">
                                        col-6 col-tab-3
                                    </div>
                                </div>
                                <div class="col-6 col-tab-3">
                                    <div class="text px-3 br">
                                        col-6 col-tab-3
                                    </div>
                                </div>
                                <div class="w-100 mb-1"></div>
                                <div class="col-6 col-tab-3">
                                    <div class="text px-3 br">
                                        col-6 col-tab-3
                                    </div>
                                </div>
                                <div class="col-6 col-tab-3 col-desk-9">
                                    <div class="text px-3 br">
                                        col-6 col-tab-3 col-desk-9
                                    </div>
                                </div>
                            </div>
                        </div>
                        <pre class="highlight"><code class="html">&lt;div class="container"&gt;
    &lt;div class="row"&gt;
        &lt;div class="col-6 col-tab-3"&gt;
        &lt;/div&gt;
        &lt;div class="col-6 col-tab-3"&gt;
        &lt;/div&gt;
        &lt;div class="col-6 col-tab-3"&gt;
        &lt;/div&gt;
        &lt;div class="w-100 mb-1"&gt;&lt;/div&gt;
        &lt;div class="col-6 col-tab-3"&gt;
        &lt;/div&gt;
        &lt;div class="col-6 col-tab-3 col-desk-9"&gt;
    &lt;/div&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                    </div>

                    <!-- Horizontal alignment -->
                    <div class="example mt-5">
                        <div class="text-cont">
                            <h3>Horizontal alignment</h3>
                            <p>
                                CSS alignment can be a nightmare, we've all been there, trying to align one div for hours. With mesh, as its built with flexbox, alignment is easy. Just add one of our flex classes to the row or container that the content lives in.
                            </p>
                            <ul class="list">
                                <li>To align content centrally add <code class="inline">justify-content-center</code> to the row/container.</li>
                                <li>To align content at the start of the row/container add <code class="inline">justify-content-start</code>.</li>
                                <li>To align content at the end of the row/container add <code class="inline">justify-content-end</code>.</li>
                            </ul>
                        </div>
                        <div class="column-demo c-white mb-25">
                            <div class="row">
                                <div class="col-desk-3 mb-2 mb-hd-0">
                                    <div class="text px-3 br">
                                        col-desk-3
                                    </div>
                                </div>
                                <div class="col-auto mb-2 mb-hd-0">
                                    <div class="text px-3 br">
                                        I fill based what's inside me - col-auto
                                    </div>
                                </div>
                                <div class="col-desk-3">
                                    <div class="text px-3 br">
                                        col-desk-3
                                    </div>
                                </div>
                            </div>
                        </div>
                        <pre class="highlight"><code class="html">&lt;div class="container"&gt;
    &lt;div class="row"&gt;
        &lt;div class="col-desk-3"&gt;
        &lt;/div&gt;
        &lt;div class="col-auto"&gt;
        &lt;/div&gt;
        &lt;div class="col-desk-3"&gt;
    &lt;/div&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                    </div>

                </article>

                <!-- Offset -->
                <article class="section-scroll" id="offset">
                    <h2 class="b-b1-light hash">Offset</h2>
                    <p class="secondary-lead">A container is the wrapper for a row (more on that later) and defines the width of your content. It can be at fixed size or full width, and will gracefully become smaller as screen size gets smaller. Here are your options:</p>
                    <h4 class="mb-1 mt-3">Lorem Ipsum</h4>
                    <ul class="list">
                        <li></li>
                        <li></li>
                    </ul>
                </article>

            </div><!-- /Col -->
            <?php include_once('../../partials/smallnav.php'); ?>
            <?php include_once('../../partials/sub-footer.php'); ?>
        </div><!-- /Row -->
    </div><!-- /Container -->
</section>

<?php include_once('../../partials/footer.php') ?>

<!-- =======================
    Page specific scripts
     ======================= -->
<?php function scripts() { ?>
    <script>
    //Switch to fullwidth 
    document.querySelector('#btnBrowser').addEventListener('click', function() {
        this.innerHTML = this.innerHTML.includes('full') ? "Switch to container" : "Switch to container-fullwidth";
        document.querySelector('#fullwidth').classList.toggle('d-none');
        document.querySelector('#container').classList.toggle('d-none');
    });    
    //Turn gaps on & off
    document.querySelector('#btnNoGaps').addEventListener('click', function() {
        this.innerHTML = this.innerHTML.includes('off') ? "Turn gaps on" : "Turn gaps off";
        document.querySelector('.column-demo .row').classList.toggle('no-gaps');
    });
    </script>
<?php } ?>

.cls-2 {
        fill: #afafaf;
        opacity: 0.5;
      }