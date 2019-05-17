<?php

//Page variables
$pageData = [
    'pageTitle' => 'Media',
    'pageDescription' => 'Quickly add responsive media to your projects by using our easy image utility class.',
    'activePage' => 'media',
    'parentDirectory' => basename(__DIR__),
];

//Table of contents
$tableOfContents = [
    'usage' => 'Usage',
    'image' => 'Responsive image',
    'iframe' => 'Responsive iFrame',
];

?>

<?php include_once '../../partials/header.php';?>
<?php include_once '../../partials/sidenav.php';?>

<section class="content visibility-page">
    <div class="container-fullwidth">
        <div class="row justify-content-center mt-4 mt-desk-5">
            <div class="col-12 col-tab-9 col-desk-8 mr-desk-2 px-desk-4">
                <h1 class="mb-2 mt-0"><?php echo $pageData['pageTitle'] ?></h1>
                <div class="lead"><?php echo $pageData['pageDescription'] ?></div>

                <!-- Responsive Image -->
                <article class="section-scroll" id="image">
                    <h2 class="b-b-light hash">Responsive image</h2>
                    <p class="secondary-lead">
                        To make an image truly responsive, a <code class="inline">max-width</code> needs to be set at <code class="inline">100%</code> and <code class="inline">height</code> needs to be <code class="inline">auto</code>.
                        <br>This makes the image full width of the parent but maintains the aspect ratio as height is at auto.
                    </p>
                    <div class="text-cont">
                        <h3>Notation:</h3>
                        <ul class="list">
                            <li>You can target the responsive image class by using <code class="inline">img-responsive</code>. Which adds the properties to the element that are outlined above.</li>
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
                                    <td>.img-responsive</td>
                                    <td>max-width: 100%;<br>height: auto;</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="text-cont">
                        <h3>Example:</h3>
                        <p class="secondary-lead mb-0">
                            Here the image is using the <code class="inline">img-responsive</code> class to always be 100% of the parent (<code class="inline">image-container</code>). As the height is auto, there wont be any distortion with the aspect ratio.
                            <br>Go ahead a resize the screen to see the effect
                        </p>
                        <div class="img-container p-2 b-light my-4">
                            <img class="img-responsive" src="/assets/svg/mediapage-image.svg" alt="Responsive Design">
                        </div>
                        <pre class="highlight"><code class="html">&lt;div class="img-container b-light p-2"&gt;
    &lt;img class="img-responsive" src="..." alt="Responsive Design"&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                    </div>
                </article>


                <!-- Responsive iFrame -->
                <article class="section-scroll" id="iframe">
                    <h2 class="b-b-light hash">Responsive iFrame</h2>
                    <p class="secondary-lead">
                        iFrame elements can cause an all together different problem when trying to make them responsive and shrink down as the viewport gets smaller. Luckily we have just the thing to help.
                    </p>
                    <div class="text-cont">
                        <h3>Notation:</h3>
                        <ul class="list">
                            <li>You can target the responsive iFrame class by using a container which will apply properties to make it responsive. Add <code class="inline">iframe-container</code> to the parent of the iFrame, shown below.</li>
                            <li>The <code class="inline">iframe-container</code> has a padding of <code class="inline">padding-top: 56.25%</code> setting the padding top to a percentages of height 9 / width 16 which keeps a desirable aspect ratio which matches YouTube height and width ratio.</li>
                            <li>The iFrame is set to be absolutely positioned in the container.</li>
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
                                    <td>.iframe-container</td>
                                    <td>position: relative;<br>overflow: hidden;<br>padding-top: 56.25%;</td>
                                </tr>
                                <tr>
                                    <td>.iframe-container iframe</td>
                                    <td>position: absolute;<br>top: 0;<br>left: 0;<br>width: 100%;<br>height: 100%;<br>border: 0;</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="text-cont">
                        <h3>Example:</h3>
                        <p class="secondary-lead mb-0">
                            Here the iframe is contained in a <code class="inline">iframe-container</code> which means the iFrame becomes responsive without distorting aspect ratio.
                            <br><strong>Note:</strong> the first div which adds border and padding to the container is entirely optional.
                            <br>Go ahead a resize the screen to see the effect.
                        </p>
                        <div class="b-light p-2 my-4">
                            <div class="iframe-container">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/6rxWc-TNIJI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <pre class="highlight"><code class="html">&lt;div class="b-light p-2 my-4"&gt;
    &lt;div class="iframe-container"&gt;
        &lt;iframe width="560" height="315" src="https://www.youtube.com/embed/6rxWc-TNIJI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen&gt;&lt;/iframe&gt;
    &lt;/div&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                    </div>
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
//Turn clearfix text on & off
document.querySelector('#visibleBtn').addEventListener('click', function() {
    let invisibleDemo = document.querySelector('#invisibleDemo');
    let invisibleCode = document.querySelector('#invisibleCode');
    invisibleDemo.classList.toggle('invisible');
    invisibleDemo.classList.toggle('d-none');

    if (this.innerHTML.includes('none')) {
        invisibleCode.innerHTML = invisibleCode.innerHTML.replace('invisible', 'd-none');
        this.innerHTML = "Switch to invisible";
    } else {
        invisibleCode.innerHTML = invisibleCode.innerHTML.replace('d-none', 'invisible');
        this.innerHTML = "Switch to display none";
    }
});
</script>

<?php }?>