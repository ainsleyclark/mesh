<?php

//Page variables
$pageData = [
    'pageTitle' => 'Visibility',
    'pageDescription' => 'Remove an elements visibility from the DOM with our responsive classes.',
    'activePage' => 'visibility',
    'parentDirectory' => basename(__DIR__),
];

//Table of contents
$tableOfContents = [
    'usage' => 'Usage',
    'example' => 'Example',
    'variations' => 'Variations',
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

                <!-- Usage -->
                <article class="section-scroll" id="usage">
                    <h2 class="b-b-light hash">Usage</h2>
                    <p class="secondary-lead">
                        Our visibility classes help you to remove an elements visibility from the DOM at different breakpoints.
                        <br><strong>Note</strong> that its different from using <code class="inline">display: none;</code>, this will completely remove it from the page but <code class="inline">visibility: hidden;</code> means it's hidden but the space is allocated for it on the page, and the tag is rendered.
                    </p>
                    <div class="text-cont">
                        <h3>Notation:</h3>
                        <ul class="list-line">
                            <li>You can target the visibility classes by using <code class="inline">visible-{breakpoint}</code>. The breakpoint being optional and one of our five breakpoints</li>
                            <li>You can also make an element invisible by using <code class="inline">invisible-{breakpoint}</code>.</li>
                            <li>These classes effect the breakpoint and upwards, for example <code class="inline">invisible-tab</code> will make the element's visibility hidden on tablet, desktop & HD screens but visible at mobile or extra small./li>
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
                                    <td>.visible</td>
                                    <td>visibility: visible;</td>
                                </tr>
                                <tr>
                                    <td>.invisible</td>
                                    <td>visibility: hidden;</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </article>

                <!-- Examples -->
                <article class="section-scroll" id="examples">
                    <h2 class="b-b-light hash">Examples</h2>
                    <h3 class="mt-3">Vanishing act:</h3>
                    <p>
                        Here, the first element is floated to the left, the second to the right on desktop screens, the clearfix class is used on the parent. <span class="d-none d-desk-inline">See the effect it has with it turned off by using the button.</span>
                    </p>
                    <button class="btn btn-rounded btn-secondary d-none d-desk-block mt-3" id="visibleBtn">Switch to display none</button>
                    <div class="column-demo c-white mb-3 d-flex">
                        <div class="text br mr-2 mb-2 p-4 w-30"></div>
                        <div class="text br mx-2 mb-2 p-3 w-30 invisible" id="invisibleDemo"></div>
                        <div class="text br ml-2 mb-2 p-3 w-30"></div>
                    </div>
                    <pre class="highlight"><code class="html" id="invisibleCode">&lt;div class="d-flex"&gt;
    &lt;div class="w-30"&gt;&lt;/div&gt;
    &lt;div class="invisible w-30"&gt;&lt;/div&gt;
    &lt;div class="w-30"&gt;&lt;/div&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

                <!-- Variations -->
                <article class="section-scroll" id="variations">
                    <h2 class="b-b-light hash">Variations</h2>
                    <pre class="highlight mt-3"><code class="html">&lt;!-- Default --&gt;
&lt;div class="visible"&gt;&lt;/div&gt;
&lt;div class="invisible"&gt;&lt;/div&gt;
&lt;!-- Mobile --&gt;
&lt;div class="visible-mob"&gt;&lt;/div&gt;
&lt;div class="invisible-mob"&gt;&lt;/div&gt;
&lt;!-- Tablet --&gt;
&lt;div class="visible-tab"&gt;&lt;/div&gt;
&lt;div class="invisible-tav"&gt;&lt;/div&gt;
&lt;!-- Desktop --&gt;
&lt;div class="visible-desk"&gt;&lt;/div&gt;
&lt;div class="invisible-desk"&gt;&lt;/div&gt;
&lt;!-- HD --&gt;
&lt;div class="visible-hd"&gt;&lt;/div&gt;
&lt;div class="invisible-hd"&gt;&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
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