<?php

//Page variables
$pageData = [
	'pageTitle' => 'Badges',
	'pageDescription' => 'Create handsome looking badges & tags easily with these classes.',
    'activePage' => 'badges',
    'parentDirectory' => basename(__DIR__)
]; 

//Table of contents
$tableOfContents = [
    'usage' => 'Usage',
    'examples' => 'Examples',
    'variations' => 'Variations'
];

?>

<?php include_once('../../partials/header.php'); ?>
<?php include_once('../../partials/sidenav.php'); ?>

<section class="content badges-page">
    <div class="container-fullwidth">
        <div class="row justify-content-center mt-4 mt-desk-5">
            <div class="col-12 col-tab-9 col-desk-8 mr-desk-2 px-desk-4">
                <h1 class="mb-2 mt-0"><?php echo $pageData['pageTitle'] ?></h1>
                <div class="lead"><?php echo $pageData['pageDescription'] ?></div>

               <!-- Usage -->
               <article class="section-scroll" id="usage">
                    <h2 class="pb-1 b-b-light mb-1 hash">Usage</h2>
                    <p>The mesh badge should be prefixed with the <code class="inline">.badge</code> class which will give you access to all of the classes outlined below.</p>
                    <p>They are designed to be used with the <code class="inline">&lt;span&gt;</code>  element.</p>
                    <p>You can have <strong>any combination</strong> of the classes listed below.</p>
                    <div class="d-flex justify-content-center justify-content-desk-start flex-wrap">
                        <span class="badge">Default</span>
                        <span class="badge badge-light">Light</span>
                        <span class="badge badge-dark">Dark</span>
                        <span class="badge badge-black">Black</span>
                    </div>
<pre class="highlight"><code class="html">&lt;span class="badge"&gt;Default&lt;/span&gt;
&lt;span class="badge badge-light"&gt;Light&lt;/span&gt;
&lt;span class="badge badge-dark"&gt;Dark&lt;/span&gt;
&lt;span class="badge badge-black"&gt;Black&lt;/span&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

                <!-- Colored Badges -->
                <article class="section-scroll py-2" id="colored">
                    <h2 class="pb-1 b-b-light mb-1 hash">Colored</h2>
                    <p>You can add color classes to brighten up the badges by prefixing it with <code class="inline">.badge-{color}</code> class which will give you access to all of the classes outlined below.</p>
                    <div class="d-flex justify-content-center justify-content-desk-start flex-wrap">
                        <span class="badge badge-primary">Primary</span>
                        <span class="badge badge-success">Success</span>
                        <span class="badge badge-info">Info</span>
                        <span class="badge badge-warning">Warning</span>
                        <span class="badge badge-danger">Danger</span>
                        <span class="badge badge-link">Link</span>
                    </div>
                    <pre class="highlight"><code class="html">&lt;span class="badge badge-primary"&gt;Primary&lt;/span&gt;
&lt;span class="badge badge-success"&gt;Success&lt;/span&gt;
&lt;span class="badge badge-info"&gt;Info&lt;/span&gt;
&lt;span class="badge badge-warning"&gt;Warning&lt;/span&gt;
&lt;span class="badge badge-danger"&gt;Danger&lt;/span&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

                 <!-- Sized Buttons -->
                 <article class="section-scroll py-2" id="sizes">
                    <h2 class="pb-1 b-b-light mb-1 hash">Sizes</h2>
                    <p>mesh Buttons come in three different sizes - small, default & large, simply add <code class="inline">btn-small</code> or <code class="inline">btn-large</code> classes to achieve the desired effect.</p>
                    <div class="d-flex justify-content-center justify-content-desk-start align-items-end flex-wrap">
                        <button class="btn btn-primary">hello<span class="badge badge-small">4</span></button>
                        <!-- <span class="badge">Default</span>
                        <span class="badge badge-large">Large</span> -->
                    </div>
                    <pre class="highlight"><code class="html">&lt;button class="btn btn-small"&gt;Small&lt;/button&gt;
&lt;button class="btn"&gt;Default&lt;/button&gt;
&lt;button class="btn btn-large"&gt;Large&lt;/button&gt;
</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                    <!-- Just Icons -->
                    <h3 class="mt-4">Blocks</h3>
                    <p>Button blocks extend the full width of the container that they are in. Add them by using the <code class="inline">btn-block</code> class. If multiple block buttons are present, slight margin bottom will seperate them.</p>
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
                    <p>A loading class can be added to any button to add an animated spinner to the button using the <code class="inline">:after</code> pseudo selector. Typically this class will be used with Javascript, just simply add the <code class="inline">btn-loading</code> class, which will in turn, make the text transparen and add the spinner. The size of the button will remained the same.<br>
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
            <?php include_once('../../partials/smallnav.php') ?>
            <?php include_once('../../partials/sub-footer.php') ?>
        </div><!-- /Row -->
    </div><!-- /Container -->
</section>

<?php include_once('../../partials/footer.php') ?>