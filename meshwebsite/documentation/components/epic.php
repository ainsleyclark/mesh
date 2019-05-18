<?php

//Page variables
$pageData = [
    'pageTitle' => 'Epic',
    'pageDescription' => 'An epic is an effective way of displaying meaningful content on a page easily with this utility class.',
    'activePage' => 'epic',
    'parentDirectory' => basename(__DIR__),
];

//Table of contents
//! DUPLICATE FOR CONTENTS ITEM,
//! If you add an article, make sure the Id matches the first value here.
$tableOfContents = [
    'usage' => 'Usage',
];

?>

<?php include_once '../../partials/header.php';?>
<?php include_once '../../partials/sidenav.php';?>

<section class="content hero-page">
    <div class="container-fullwidth">
        <div class="row justify-content-center mt-4 mt-desk-5">
            <div class="col-12 col-tab-9 col-desk-8 mr-desk-2 px-desk-4">
                <h1 class="mb-2 mt-0"><?php echo $pageData['pageTitle'] ?></h1>
                <div class="lead"><?php echo $pageData['pageDescription'] ?></div>

                <!-- Usage -->
                <article class="section-scroll" id="usage">
                    <h2 class="b-b-light hash">Usage</h2>
                    <p class="secondary-lead">
                        Use of the epic component is simple, just add the <code class="inline">epic</code> class to the parent of the content you wish to wrap. This will add padding on the x and y axis of the container.
                        <br><strong>Note:</strong> Be sure to add the <code class="inline">bg-{color}</code> class to display the appropriate background. 
                    </p>
                    <div class="epic bg-primary c-white br">
                        <h1 class="normal-headings">Epic section</h1>
                        <p class="lead mb-3">This section is pretty epic, you can put all sorts inside of me, headings, leads & CTA's.</p>
                        <button class="btn btn-white btn-outline">Call to action!</button>
                    </div>
                    <pre class="highlight"><code class="html">&lt;div class=&quot;epic bg-primary c-white br&quot;&gt;
    &lt;h1&gt;Epic section&lt;/h1&gt;
    &lt;p class=&quot;lead&quot;&gt;This section is pretty epic...&lt;/p&gt;
    &lt;button class=&quot;btn btn-white btn-outline&quot;&gt;Call to action!&lt;/button&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
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
//!Any page relevant JS scripts to go in here.
</script>
<?php }?>