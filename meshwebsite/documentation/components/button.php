<?php

//Page variables
$pageData = [
    'pageTitle' => 'Button',
    'pageDescription' => 'Discover how to use our buttons in your forms, dialogs and more with our versatile classes - including various sizes, colors and states.',
    'activePage' => 'button',
    'parentDirectory' => basename(__DIR__),
];

//Table of contents
$tableOfContents = [
    'usage' => 'Usage',
    'colored' => 'Colored',
    'disabled' => 'Disabled',
    'outline' => 'Outlined',
    'sizes' => 'Sizes',
    'icons' => 'Icons',
    'rounded' => 'Rounded',
    'loading' => 'Loading',
];

?>

<?php include_once '../../partials/header.php';?>
<?php include_once '../../partials/sidenav.php';?>

<section class="content button-page">
    <div class="container-fullwidth">
        <div class="row justify-content-center mt-4 mt-desk-5">
            <div class="col-12 col-tab-9 col-desk-8 mr-desk-2 px-desk-4">
                <h1 class="mb-2 mt-0">Button</h1>
                <div class="lead"><?php echo $pageData['pageDescription'] ?></div>

                <!-- Usage -->
                <article class="section-scroll" id="usage">
                    <h2 class="pb-1 b-b-light mb-1 hash">Usage</h2>
                    <p>The mesh button should be prefixed with the <code class="inline">.btn</code> class which will give you access to all of the classes outlined below.</p>
                    <p>They are designed to be used with the <code class="inline">&lt;button&gt;</code> element but you can also use them on <code class="inline">&lt;a&gt;</code> tags, <code class="inline">&lt;input type="submit"&gt;</code> and <code class="inline">&lt;input type="reset"&gt;</code> tags for ease of use.</p>
                    <p>You can have <strong>any combination</strong> of the classes listed below.</p>
                    <div class="button-cont d-flex justify-content-center justify-content-desk-start flex-wrap">
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
                </article>

                <!-- Colored Buttons -->
                <article class="section-scroll py-2" id="colored">
                    <h2 class="pb-1 b-b-light mb-1 hash">Colored</h2>
                    <p>You can add color classes to brighten up the buttons by prefixing it with <code class="inline">.btn-{color}</code> class which will give you access to all of the classes outlined below.</p>
                    <div class="button-cont d-flex justify-content-center justify-content-desk-start flex-wrap">
                        <button class="btn btn-primary">Primary</button>
                        <button class="btn btn-success">Success</button>
                        <button class="btn btn-info">Info</button>
                        <button class="btn btn-warning">Warning</button>
                        <button class="btn btn-danger">Danger</button>
                        <button class="btn btn-link">Link</button>
                    </div>
                    <pre class="highlight"><code class="html">&lt;button class="btn btn-primary"&gt;Light&lt;/button&gt;
&lt;button class="btn btn-success"&gt;Dark&lt;/button&gt;
&lt;button class="btn btn-info"&gt;Black&lt;/button&gt;
&lt;button class="btn btn-warning"&gt;Simple&lt;/button&gt;
&lt;button class="btn btn-danger"&gt;Simple&lt;/button&gt;
&lt;button class="btn btn-link"&gt;Simple&lt;/button&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

                <!-- Disabled Buttons -->
                <article class="section-scroll py-2" id="disabled">
                    <h2 class="pb-1 b-b-light mb-1 hash">Disabled</h2>
                    <p>You can make buttons appear inactive by adding the <code class="inline">disabled</code> attribute to the end of the elements tag.</code></p>
                    <div class="button-cont d-flex justify-content-center justify-content-desk-start flex-wrap">
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
                <article class="section-scroll py-2" id="outline">
                    <h2 class="pb-1 b-b-light mb-1 hash">Outlined</h2>
                    <p>For an outlined appearance add the class<code class="inline">btn-outline</code> attribute to the end of the elements tag. This will give the button a transparent background with a 1px border.
                        <br><strong>Note:</strong> Colors <code class="inline">.btn-{color}</code> need to be prefixed with this class in order to achieve the desired effect.</code></p>
                    <div class="button-cont d-flex justify-content-center justify-content-desk-start flex-wrap">
                        <button class="btn btn-primary btn-outline">Primary</button>
                        <button class="btn btn-success btn-outline">Success</button>
                        <button class="btn btn-info btn-outline">Info</button>
                        <button class="btn btn-warning btn-outline">Warning</button>
                        <button class="btn btn-danger btn-outline">Danger</button>
                        <button class="btn btn-link btn-outline">Link</button>
                    </div>
                    <pre class="highlight"><code class="html">&lt;button class="btn btn-primary btn-outline"&gt;Primary&lt;/button&gt;
&lt;button class="btn btn-light btn-outline"&gt;Success&lt;/button&gt;
&lt;button class="btn btn-dark btn-outline"&gt;Info&lt;/button&gt;
&lt;button class="btn btn-black btn-outline"&gt;Warning&lt;/button&gt;
&lt;button class="btn btn-danger btn-outline"&gt;Danger&lt;/button&gt;
&lt;button class="btn btn-link btn-outline"&gt;Link&lt;/button&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

                <!-- Sized Buttons -->
                <article class="section-scroll py-2" id="sizes">
                    <h2 class="pb-1 b-b-light mb-1 hash">Sizes</h2>
                    <p>mesh Buttons come in three different sizes - small, default & large, simply add <code class="inline">btn-small</code> or <code class="inline">btn-large</code> classes to achieve the desired effect.</p>
                    <div class="button-cont d-flex justify-content-center justify-content-desk-start align-items-end flex-wrap">
                        <button class="btn btn-small">Small</button>
                        <button class="btn">Default</button>
                        <button class="btn btn-large">Large</button>
                    </div>
                    <pre class="highlight"><code class="html">&lt;button class="btn btn-small"&gt;Small&lt;/button&gt;
&lt;button class="btn"&gt;Default&lt;/button&gt;
&lt;button class="btn btn-large"&gt;Large&lt;/button&gt;
</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                    <!-- Just Icons -->
                    <h3 class="mt-4">Blocks</h3>
                    <p>Button blocks extend the full width of the container that they are in. Add them by using the <code class="inline">btn-block</code> class. If multiple block buttons are present, slight margin bottom will separate them.</p>
                    <div class="button-cont w-50 mx-auto mx-desk-0">
                        <button class="btn btn-block">Default Block</button>
                        <button class="btn btn-block btn-primary">Primary Block</button>
                        <button class="btn btn-block btn-primary btn-rounded">Rounded Block</button>
                    </div>
                    <pre class="highlight"><code class="html">&lt;button class="btn btn-block"&gt;Default Block&lt;/button&gt;
&lt;button class="btn btn-block btn-primary"&gt;Primary Block&lt;/button&gt;
&lt;button class="btn btn-block btn-primary btn-rounded"&gt;Rounded Block&lt;/button&gt;
</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

                <!-- Icon Buttons -->
                <article class="section-scroll py-2" id="icons">
                    <h2 class="pb-1 b-b-light mb-1 hash">Icons</h2>
                    <p>You are able to add font-awesome icons to any button by adding the <code class="inline">&lt;i&gt;</code> tag inside the <code class="inline">&lt;button&gt;</code>.
                        <br>A <code class="inline">&lt;span&gt;</code> tag <strong>is required</strong> for the text inside the button. This will give slight margin around the icon.
                        <br>Icon buttons are available in large, </p>
                    <div class="button-cont d-flex justify-content-center justify-content-desk-start align-items-end flex-wrap">
                        <button class="btn btn-icon btn-primary">
                            <i class="fas fa-hashtag"></i>
                            <span>With Icon</span>
                        </button>
                        <button class="btn btn-icon btn-primary">
                            <span>With Icon</span>
                            <i class="fas fa-hashtag"></i>
                        </button>
                        <button class="btn btn-icon btn-outline primary">
                            <span>With Icon</span>
                            <i class="fas fa-hashtag"></i>
                        </button>
                        <div class="w-100"></div>
                        <button class="btn btn-icon btn-primary btn-large">
                            <span>With Icon</span>
                            <i class="fas fa-hashtag"></i>
                        </button>
                        <button class="btn btn-icon btn-primary btn-small">
                            <span>With Icon</span>
                            <i class="fas fa-hashtag"></i>
                        </button>
                    </div>
                    <pre class="highlight"><code class="html">&lt;button class="btn btn-icon btn-primary"&gt;
    &lt;i class="far fa-hashtag"&gt;&lt;/i&gt;
    &lt;span&gt;With Icon&lt;/span&gt;
&lt;/button&gt;
&lt;button class="btn btn-icon btn-primary"&gt;
    &lt;span&gt;With Icon&lt;/span&gt;
    &lt;i class="far fa-hashtag"&gt;&lt;/i&gt;
&lt;/button&gt;
&lt;button class="btn btn-icon btn-outline primary"&gt;
    &lt;span&gt;With Icon&lt;/span&gt;
    &lt;i class="far fa-hashtag"&gt;&lt;/i&gt;
&lt;/button&gt;
&lt;button class="btn btn-icon btn-primary btn-large"&gt;
    &lt;span&gt;With Icon&lt;/span&gt;
    &lt;i class="far fa-hashtag"&gt;&lt;/i&gt;
&lt;/button&gt;
&lt;button class="btn btn-icon btn-primary btn-small"&gt;
    &lt;span&gt;With Icon&lt;/span&gt;
    &lt;i class="far fa-hashtag"&gt;&lt;/i&gt;
&lt;/button&gt;
</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                    <!-- Just Icons -->
                    <h3 class="mt-4">Just Icons</h3>
                    <p>You can also use just icons within a button by adding the<code class="inline">&lt;btn-justicon&gt;</code> class. To make the button circular, add one of our border radius classes <code class="inline">&lt;br-circle&gt;</code>.</p>
                    <div class="button-cont d-flex justify-content-center justify-content-desk-start align-items-end flex-wrap">
                        <button class="btn btn-primary btn-justicon">
                            <i class="fas fa-hashtag"></i>
                        </button>
                        <button class="btn btn-primary btn-justicon btn-large">
                            <i class="fas fa-hashtag"></i>
                        </button>
                        <button class="btn btn-primary btn-justicon br-circle">
                            <i class="fas fa-hashtag"></i>
                        </button>
                        <button class="btn btn-primary btn-justicon btn-large br-circle">
                            <i class="fas fa-hashtag"></i>
                        </button>
                        <button class="btn btn-primary btn-justicon br-circle btn-outline">
                            <i class="fas fa-hashtag"></i>
                        </button>
                        <button class="btn btn-primary btn-justicon btn-large br-circle btn-outline">
                            <i class="fas fa-hashtag"></i>
                        </button>
                    </div>
                    <pre class="highlight"><code class="html">&lt;button class="btn btn-primary btn-justicon"&gt;
    &lt;i class="far fa-hashtag"&gt;&lt;/i&gt;
&lt;/button&gt;
&lt;button class="btn btn-primary btn-justicon btn-large"&gt;
    &lt;i class="far fa-hashtag"&gt;&lt;/i&gt;
&lt;/button&gt;
&lt;button class="btn btn-primary btn-justicon br-circle"&gt;
    &lt;i class="far fa-hashtag"&gt;&lt;/i&gt;
&lt;/button&gt;
&lt;button class="btn btn-primary btn-justicon btn-large br-circle"&gt;
    &lt;i class="far fa-hashtag"&gt;&lt;/i&gt;
&lt;/button&gt;
&lt;button class="btn btn-primary btn-justicon br-circle btn-outline"&gt;
    &lt;i class="far fa-hashtag"&gt;&lt;/i&gt;
&lt;/button&gt;
&lt;button class="btn btn-primary btn-justicon btn-large br-circle btn-outline"&gt;
    &lt;i class="far fa-hashtag"&gt;&lt;/i>
&lt;/button></code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

                <!-- Rounded Buttons -->
                <article class="section-scroll py-2" id="rounded">
                    <h2 class="pb-1 b-b-light mb-1 hash">Rounded</h2>
                    <p>Buttons can also look rounded with the <code class="inline">&lt;btn-rounded&gt;</code></p>
                    <div class="button-cont d-flex justify-content-center justify-content-desk-start align-items-end flex-wrap">
                        <button class="btn btn-rounded btn-primary">Rounded</button>
                        <button class="btn btn-rounded btn-primary btn-outline">Outline</button>
                        <button class="btn btn-rounded btn-primary" disabled>Disabled</button>
                    </div>
                    <pre class="highlight"><code class="html">&lt;button class="btn btn-primary btn-rounded"&gt;Rounded&lt;/button&gt;
&lt;button class="btn btn-primary btn-rounded btn-outline"&gt;Outline&lt;/button&gt;
&lt;button class="btn btn-primary btn-rounded" disabled&gt;Disabled&lt;/button&gt;
</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

                <!-- Loading Buttons -->
                <article class="section-scroll py-2" id="loading">
                    <h2 class="pb-1 b-b-light mb-1 hash">Loading</h2>
                    <p>A loading class can be added to any button to add an animated spinner to the button using the <code class="inline">:after</code> pseudo selector. Typically this class will be used with Javascript, just simply add the <code class="inline">btn-loading</code> class, which will in turn, make the text transparen and add the spinner. The size of the button will remained the
                        same.<br>
                        <strong>Note:</strong> Any color classes can be added to the loading buttons.</p>
                    <div class="button-cont d-flex justify-content-center justify-content-desk-start align-items-end flex-wrap">
                        <button class="btn btn-primary btn-loading">Loading</button>
                        <button class="btn btn-primary btn-loading btn-outline">Loading</button>
                        <button class="btn btn-primary btn-loading btn-small">Loading</button>
                        <button class="btn btn-primary btn-loading btn-large">Loading</button>
                    </div>
                    <pre class="highlight"><code class="html">&lt;button class="btn btn-primary btn-loading"&gt;Loading&lt;/button&gt;
&lt;button class="btn btn-primary btn-loading btn-outline"&gt;Loading&lt;/button&gt;
&lt;button class="btn btn-primary btn-loading btn-small"&gt;Loading&lt;/button&gt;
&lt;button class="btn btn-primary btn-loading btn-large"&gt;Loading&lt;/button&gt;
</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

            </div><!-- /Col -->
            <?php include_once '../../partials/smallnav.php'?>
            <?php include_once '../../partials/sub-footer.php'?>
        </div><!-- /Row -->
    </div><!-- /Container -->
</section>

<?php include_once '../../partials/footer.php'?>