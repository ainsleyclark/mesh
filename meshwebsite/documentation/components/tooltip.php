<?php

//Page variables
$pageData = [
    'pageTitle' => 'Tooltip',
    'pageDescription' => 'Create tooltips on any element to display extra information on hover with the mesh tooltip component.',
    'activePage' => 'tooltip',
    'parentDirectory' => basename(__DIR__),
];

//Table of contents
$tableOfContents = [
    'usage' => 'Usage',
    'position' => 'Position',
    'dark' => 'Dark mode',
];

?>

<?php include_once '../../partials/header.php';?>
<?php include_once '../../partials/sidenav.php';?>

<section class="content tabs-page">
    <div class="container-fullwidth">
        <div class="row justify-content-center mt-4 mt-desk-5">
            <div class="col-12 col-tab-9 col-desk-8 mr-desk-2 px-desk-4">
                <h1 class="mb-2 mt-0"><?php echo $pageData['pageTitle'] ?></h1>
                <div class="lead"><?php echo $pageData['pageDescription'] ?></div>

                <!-- Usage -->
                <article class="section-scroll" id="usage">
                    <h2 class="b-b-light hash">Usage</h2>
                    <p class="secondary-lead">
                        Using a tooltip with mesh is a piece of cake, you can have the tooltips come in from different directions, as well as a dark mode. See the notation below to get started.
                        <br>The <code class="inline">tooltip</code> attribute should be added which contains the text of the tooltip.
                        <br><strong>Note:</strong> The tooltip can be applied to any semantic element.
                    </p>
                    <button class="btn btn-secondary mb-3" tooltip="I am a tooltip">Default</button>
                    <pre class="highlight"><code class="html py-tab-4">&lt;button class=&quot;btn btn-secondary&quot; tooltip=&quot;I am a tooltip&quot;&gt;Default&lt;/button&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

                <!-- Position -->
                <article class="section-scroll" id="position">
                    <h2 class="b-b-light hash">Position</h2>
                    <p class="secondary-lead mb-1">
                        The default position of the tooltip as at the top, but if you wish to change this, add the <code class="inline">tooltip-position</code> attribute equal to one of four properties:  
                    </p>
                    <ul class="list-line mt-1 mb-3">
                        <li><code class="inline">top</code></li>
                        <li><code class="inline">right</code></li>
                        <li><code class="inline">bottom</code></li>
                        <li><code class="inline">left</code></li>
                    </ul>
                    <button class="btn btn-secondary" tooltip="I am a tooltip" tooltip-position="top">Top</button>
                    <button class="btn btn-secondary" tooltip="I am a tooltip" tooltip-position="right">Right</button>
                    <button class="btn btn-secondary" tooltip="I am a tooltip" tooltip-position="bottom">Bottom</button>
                    <button class="btn btn-secondary" tooltip="I am a tooltip" tooltip-position="left">Left</button>
                    <pre class="highlight"><code class="html py-tab-4">&lt;button class=&quot;btn btn-secondary&quot; tooltip=&quot;I am a tooltip&quot; tooltip-position=&quot;top&quot;&gt;Top&lt;/button&gt;
&lt;button class=&quot;btn btn-secondary&quot; tooltip=&quot;I am a tooltip&quot; tooltip-position=&quot;right&quot;&gt;Right&lt;/button&gt;
&lt;button class=&quot;btn btn-secondary&quot; tooltip=&quot;I am a tooltip&quot; tooltip-position=&quot;bottom&quot;&gt;Bottom&lt;/button&gt;
&lt;button class=&quot;btn btn-secondary&quot; tooltip=&quot;I am a tooltip&quot; tooltip-position=&quot;left&quot;&gt;Left&lt;/button&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

                <!-- Dark -->
                <article class="section-scroll" id="dark">
                    <h2 class="b-b-light hash">Dark mode</h2>
                    <p class="secondary-lead">
                        To inverse the colors of the tooltip to create a dark effect, add the <code class="inline">tooltip-color</code> attribute set equal to <code class="inline">dark</code>, see below.
                    </p>
                    <button class="btn btn-dark" tooltip="I am a dark tooltip" tooltip-color="dark">Dark</button>
                    <pre class="highlight"><code class="html py-tab-4">&lt;button class=&quot;btn btn-dark&quot; tooltip=&quot;I am a dark tooltip&quot; tooltip-color=&quot;dark&quot;&gt;Default&lt;/button&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>


            </div><!-- /Col -->
            <?php include_once '../../partials/smallnav.php'?>
            <?php include_once '../../partials/sub-footer.php'?>
        </div><!-- /Row -->
    </div><!-- /Container -->
</section>

<?php include_once '../../partials/footer.php'?>