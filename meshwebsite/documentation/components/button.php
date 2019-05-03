<?php

//Page variables
$pageData = [
	'pageTitle' => 'Button',
	'pageDescription' => 'Discover how to use our buttons in your forms, dialogs and more with our versatile classes - including various sizes, colors and states.',
    'activePage' => 'button',
    'parentDirectory' => basename(__DIR__)
]; 

//Table of contents
$tableOfContents = [
	'usage' => 'Usage',
	'colored' => 'Colored buttons',
	'disabled' => 'Disabled buttons',
    'npm' => 'npm'
];

?>

<?php include_once('../../partials/header.php'); ?>
<?php include_once('../../partials/sidenav.php'); ?>


<section class="content">
    <div class="container-fullwidth">
        <div class="row justify-content-center mt-4 mt-desk-5">
            <div class="col-12 col-tab-9 col-desk-8 mr-desk-2 px-desk-4">
                <h1 class="mb-2 mt-0">Button</h1>
                <div class="lead">Discover how to use our buttons in your forms, dialogs and more with our versatile classes - including various sizes, colors and states.</div>
                <!-- Usage -->
                <div class="section-scroll" id="usage">
                    <h2 class="pb-2 b-b1-light mt-5 mb-1 hash">Usage</h2>
                    <p>The mesh button should be prefixed with the <code class="inline">.btn</code> class desiredhich will give you access to all of the classes outlined below.</p>
                    <p>They are designed to be used with the <code class="inline">&lt;button&gt;</code>  element but you can also use them on <code class="inline">&lt;a&gt;</code> tags, <code class="inline">&lt;input type="submit"&gt;</code> and <code class="inline">&lt;input type="reset"&gt;</code> tags for ease of use.</p>
                    <p>You can have <strong>any combination</strong> of the classes listed below</p>
                    <div class="button-cont d-flex justify-content-center justify-content-desk-start flex-wrap my-3">
                        <button class="btn">Default</button>
                        <button class="btn btn-light">Light</button>
                        <button class="btn btn-dark">Dark</button>
                        <button class="btn btn-black">Black</button>
                        <button class="btn btn-simple">Simple</button>
                    </div>
<pre class="highlight"><code class="html">&lt;button class="btn"&gt;Default&lt;/button&gt;
&lt;button class="btn btn-light"&gt;Light&lt;/button&gt;
&lt;button class="btn btn-dark"&gt;Dark&lt;/button&gt;
&lt;button class="btn btn-black"&gt;Black&lt;/button&gt;
&lt;button class="btn btn-simple"&gt;Simple&lt;/button&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </div>

                <!-- Colored Buttons -->
                <article class="section-scroll py-2" id="colored">
                    <h2 class="pb-2 b-b1-light mt-5 mb-1 hash">Colored Buttons</h2>
                    <p>You can add color classes to brighten up the buttons by prefixing it with <code class="inline">.btn-{color}</code> class which will give you access to all of the classes outlined below.</p>
                    <div class="button-cont d-flex justify-content-center justify-content-desk-start flex-wrap my-3">
                        <button class="btn btn-primary">Primary</button>
                        <button class="btn btn-success">Success</button>
                        <button class="btn btn-info">Info</button>
                        <button class="btn btn-warning">Warning</button>
                        <button class="btn btn-danger">Danger</button>
                        <button class="btn btn-link">Link</button>
                    </div>
                    <pre class="highlight"><code class="html">&lt;button class="btn"&gt;Default&lt;/button&gt;
&lt;button class="btn btn-light"&gt;Light&lt;/button&gt;
&lt;button class="btn btn-dark"&gt;Dark&lt;/button&gt;
&lt;button class="btn btn-black"&gt;Black&lt;/button&gt;
&lt;button class="btn btn-simple"&gt;Simple&lt;/button&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

                <!-- Disabled Buttons -->
                <article class="section-scroll py-2" id="disabled">
                    <h2 class="pb-2 b-b1-light mt-5 mb-1 hash">Disabled Buttons</h2>
                    <p>You can make buttons appear inactive by adding the <code class="inline">disabled</code> attribute to the end of the elements tag.</code></p>
                    <div class="button-cont d-flex justify-content-center justify-content-desk-start flex-wrap my-3">
                        <button class="btn btn-primary" disabled>Primary</button>
                        <button class="btn btn-success" disabled>Success</button>
                        <button class="btn btn-info" disabled>Info</button>
                        <button class="btn btn-warning" disabled>Warning</button>
                        <button class="btn btn-danger" disabled>Danger</button>
                        <button class="btn btn-link" disabled>Link</button>
                    </div>
                    <pre class="highlight"><code class="html">&lt;button class="btn btn-primary" disabled&gt;Primary&lt;/button&gt;
&lt;button class="btn btn-light" disabled&gt;Success&lt;/button&gt;
&lt;button class="btn btn-dark" disabled&gt;Info&lt;/button&gt;
&lt;button class="btn btn-black" disabled&gt;Warning&lt;/button&gt;
&lt;button class="btn btn-danger" disabled&gt;Danger&lt;/button&gt;
&lt;button class="btn btn-link" disabled&gt;Link&lt;/button&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

                 <!-- Outlined Buttons -->
                 <article class="section-scroll py-2" id="disabled">
                    <h2 class="pb-2 b-b1-light mt-5 mb-1 hash">Outlined Buttons</h2>
                    <p>For an outlined appearance add the class<code class="inline">btn-outline</code> attribute to the end of the elements tag. This will give the button a transparent background with a 1px border.
                    <br><strong>Note:</strong> Colors <code class="inline">.btn-{color}</code> need to be prefixed with this class in order to achieve the desired effect.</code></p>
                    <div class="button-cont d-flex justify-content-center justify-content-desk-start flex-wrap my-3">
                        <button class="btn btn-primary btn-outline">Primary</button>
                        <button class="btn btn-success btn-outline">Success</button>
                        <button class="btn btn-info btn-outline">Info</button>
                        <button class="btn btn-warning btn-outline">Warning</button>
                        <button class="btn btn-danger btn-outline">Danger</button>
                        <button class="btn btn-link btn-outline">Link</button>
                    </div>
                    <pre class="highlight"><code class="html">&lt;button class="btn btn-primary btn-outline" disabled&gt;Primary&lt;/button&gt;
&lt;button class="btn btn-light btn-outline"&gt;Success&lt;/button&gt;
&lt;button class="btn btn-dark btn-outline"&gt;Info&lt;/button&gt;
&lt;button class="btn btn-black btn-outline"&gt;Warning&lt;/button&gt;
&lt;button class="btn btn-danger btn-outline"&gt;Danger&lt;/button&gt;
&lt;button class="btn btn-link btn-outline"&gt;Link&lt;/button&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>


                <h5>Sized Buttons:</h5>
                <div class="d-flex justify-content-center">
                    <div class="button-cont mx-auto my-4">
                        <button class="btn btn-small">Small</button>
                        <button class="btn">Default</button>
                        <button class="btn btn-large">Large</button>
                    </div>
                </div>

                <h5>Icon Buttons:</h5>
                <div class="d-flex justify-content-center align-items-center flex-wrap">
                    <div class="button-cont mx-auto my-4 d-flex align-items-start flex-column flex-desk-row">
                        <button class="btn btn-icon btn-primary">
                            <i class="far fa-hashtag"></i>
                            <span>With Icon Tes Test test</span>
                        </button>
                        <button class="btn btn-icon btn-primary">
                            <span>With Icon</span>
                            <i class="far fa-hashtag"></i>
                        </button>
                        <button class="btn btn-icon btn-outline primary">
                            <span>With Icon</span>
                            <i class="far fa-hashtag"></i>
                        </button>
                        <button class="btn btn-icon btn-primary">
                            <span>With Icon</span>
                            <i class="far fa-hashtag fa-lg"></i>
                        </button>
                        <button class="btn btn-icon btn-primary">
                            <span>With Icon</span>
                            <i class="far fa-hashtag fa-2x"></i>
                        </button>
                        <!-- <button class="btn btn-justicon btn-primary mx-1"><i class="far fa-hashtag"></i></button>
                        <button class="btn btn-justicon large btn-primary mx-1"><i class="far fa-hashtag"></i></button> -->
                    </div>
                </div>

                <h5>Rounded Buttons:</h5>
                <div class="d-flex justify-content-center align-items-center">
                    <div class="button-cont mx-auto my-4">
                        <button class="btn btn-rounded btn-primary mx-1">Primary</button>
                        <button class="btn btn-rounded btn-info mx-1">Info</button>
                        <button class="btn btn-rounded btn-success mx-1">Success</button>
                        <button class="btn btn-rounded btn-warning mx-1">Warning</button>
                        <button class="btn btn-rounded btn-danger mx-1">Danger</button>
                        <button class="btn btn-rounded btn-link mx-1">Link</button>
                    </div>
                </div>

                <h5>Loading Buttons:</h5>
                <div class="button-cont mx-auto my-4">
                    <button class="btn btn-loading mx-1">Loading</button>
                    <button class="btn btn-loading btn-outline btn-primary mx-1">Loading</button>
                    <button class="btn btn-loading btn-info mx-1">Loading</button>
                    <button class="btn btn-loading btn-success mx-1">Loading</button>
                    <button class="btn btn-loading btn-warning mx-1">Loading</button>
                    <button class="btn btn-loading btn-danger mx-1">Loading</button>
                    <button class="btn btn-loading btn-link mx-1">Loading</button>
                    <button class="btn btn-loading btn-small btn-link mx-1">Loading</button>
                    <button class="btn btn-loading btn-large btn-link mx-1">Loading</button>
                </div>

                <div class="col-5">
                    <h5>Block Buttons:</h5>
                    <div class="button-cont mx-auto my-2">
                        <button class="btn btn-block mx-1 my-2">Block</button>
                        <button class="btn btn-block btn-primary mx-1 my-2">Block</button>
                        <button class="btn btn-block btn-primary btn-rounded mx-1 my-2">Block</button>
                    </div>
                </div>

            </div><!-- /Col -->
            <?php include_once('../../partials/smallnav.php') ?>
            <?php include_once('../../partials/sub-footer.php') ?>
        </div><!-- /Row -->
    </div><!-- /Container -->
</section>

<?php include_once('../../partials/footer.php') ?>