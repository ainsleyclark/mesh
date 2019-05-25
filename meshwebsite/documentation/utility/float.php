<?php

//Page variables
$pageData = [
    'pageTitle' => 'Float',
    'pageDescription' => 'Toggle between floats at different breakpoints using our float utility classes.',
    'activePage' => 'float',
    'parentDirectory' => basename(__DIR__),
];

//Table of contents
$tableOfContents = [
    'usage' => 'Usage',
    'clearfix' => 'Clearfix',
    'example' => 'Example',
    'variations' => 'Variations',
];

?>

<?php include_once '../../partials/header.php';?>
<?php include_once '../../partials/sidenav.php';?>

<section class="content float-page">
    <div class="container-fullwidth">
        <div class="row justify-content-center mt-4 mt-desk-5">
            <div class="col-12 col-tab-9 col-desk-8 mr-desk-2 px-desk-4">
                <h1 class="mb-2 mt-0"><?php echo $pageData['pageTitle'] ?></h1>
                <div class="lead"><?php echo $pageData['pageDescription'] ?></div>

                <!-- Usage -->
                <article class="section-scroll" id="usage">
                    <h2 class="b-b-light hash">Usage</h2>
                    <p class="secondary-lead">
                        Our float utility classes help you to float elements to the left, right or none at all. You can use these at different breakpoints helping you to stack items at smaller viewports.
                    </p>
                    <div class="text-cont">
                        <h3>Notation:</h3>
                        <ul class="list-line">
                            <li>You can target the float classes by using <code class="inline">f-{property}</code>. he breakpoint being optional and one of our five breakpoints, the properties being outlined below.</li>
                            <li>These classes effect the breakpoint and upwards, for example - <code class="inline">f-tab-right</code> will make the element float right on tablet, desktop & HD screens but none at mobile or extra small.</li>
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
                                    <td>.f-left</td>
                                    <td>float: left;</td>
                                </tr>
                                <tr>
                                    <td>.f-right</td>
                                    <td>float: right;</td>
                                </tr>
                                <tr>
                                    <td>.f-none</td>
                                    <td>float: none;</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </article>

                <!-- Clearfix -->
                <article class="section-scroll" id="usage">
                    <h2 class="b-b-light hash">Clearfix</h2>
                    <p class="secondary-lead">
                        Clearfix is a way for an element to clear or 'fix' its elements so no additional markup is needed. Most of the time, it is used in conjunction with floats. For more information, head over to <a href="https://www.geeksforgeeks.org/what-is-a-clearfix/" target="_blank" rel="noopener nofollow">Geeks for Geeks</a>
                    </p>
                    <div class="text-cont">
                        <h3>Notation:</h3>
                        <ul class="list-line">
                            <li>You can target the clearfix class by adding <code class="inline">clearfix</code> to the element you want to be fixed. </li>
                            <li>Generally speaking you would want to use the <code class="inline">clearfix</code> to the parent of the items that are being floated.</li>
                        </ul>
                    </div>
                </article>

                <!-- Examples -->
                <article class="section-scroll" id="examples">
                    <h2 class="b-b-light hash">Examples</h2>
                    <h3 class="mt-3">Responsive floats:</h3>
                    <p>
                        Here, the first element is floated to the left, the second to the right on desktop screens, the clearfix class is used on the parent. <span class="d-none d-desk-inline">See the effect it has with it turned off by using the button.</span>
                        <button class="btn btn-rounded btn-secondary d-none d-desk-block mt-3" id="clearfixBtn">Turn clearfix off</button>
                        <div class="column-demo c-white mb-3">
                            <div class="br t-center clearfix" id="clearfixDemo">
                                <div class="text br mb-2 f-desk-left w-40"></div>
                                <div class="text br f-desk-right w-40"></div>
                            </div>
                        </div>
                        <pre class="highlight"><code class="html">&lt;div class="clearfix"&gt;
    &lt;div class="f-desk-left w-40"&gt;&lt;/div&gt;
    &lt;div class="f-desk-right w-40"&gt;&lt;/div&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

                <!-- Variations -->
                <article class="section-scroll" id="variations">
                    <h2 class="b-b-light hash">Variations</h2>
                    <pre class="highlight mt-3"><code class="html">&lt;!-- Default --&gt;
&lt;div class="f-left"&gt;&lt;/div&gt;
&lt;div class="f-right"&gt;&lt;/div&gt;
&lt;div class="f-none"&gt;&lt;/div&gt;
&lt;!-- Mobile --&gt;
&lt;div class="f-mob-left"&gt;&lt;/div&gt;
&lt;div class="f-mob-right"&gt;&lt;/div&gt;
&lt;div class="f-mob-none"&gt;&lt;/div&gt;
&lt;!-- Tablet --&gt;
&lt;div class="f-tab-left"&gt;&lt;/div&gt;
&lt;div class="f-tab-right"&gt;&lt;/div&gt;
&lt;div class="f-tab-none"&gt;&lt;/div&gt;
&lt;!-- Desktop --&gt;
&lt;div class="f-desk-left"&gt;&lt;/div&gt;
&lt;div class="f-desk-right"&gt;&lt;/div&gt;
&lt;div class="f-desk-none"&gt;&lt;/div&gt;
&lt;!-- HD --&gt;
&lt;div class="f-hd-left"&gt;&lt;/div&gt;
&lt;div class="f-hd-right"&gt;&lt;/div&gt;
&lt;div class="f-hd-none"&gt;&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
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
document.querySelector('#clearfixBtn').addEventListener('click', function() {
    this.innerHTML = this.innerHTML.indexOf('off') ? "Turn clearfix on" : "Turn clearfix off";
    document.querySelector('#clearfixDemo').classList.toggle('clearfix');
});
</script>

<?php }?>