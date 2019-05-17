<?php

//Page variables
$pageData = [
    'pageTitle' => 'Card',
    'pageDescription' => 'Use styled materialistic cards in various styles & formats with ease with our card component.',
    'activePage' => 'card',
    'parentDirectory' => basename(__DIR__),
];

//Table of contents
$tableOfContents = [
    'usage' => 'Usage',
    'action' => 'Action',
    'shadow' => 'Shadow',
    'image' => 'Image',
    'fab' => 'FAB',
    'background' => 'Background',
    'header' => 'Header',
];

?>


<?php include_once '../../partials/header.php';?>
<?php include_once '../../partials/sidenav.php';?>

<section class="content card-page">
    <div class="container-fullwidth">
        <div class="row justify-content-center mt-4 mt-desk-5">
            <div class="col-12 col-tab-9 col-desk-8 mr-desk-2 px-desk-4">
                <h1 class="mb-2 mt-0"><?php echo $pageData['pageTitle'] ?></h1>
                <div class="lead"><?php echo $pageData['pageDescription'] ?></div>

                <!-- Usage -->
                <article class="section-scroll" id="usage">
                    <h2 class="b-b-light hash">Usage</h2>
                    <p class="mt-2">
                        Cards contain content and actions about a single subject. They are useful for displaying similar content in a well versed fashion. The parent of the content must have the <code class="inline">card</code> class attached to give access to the properties outlined below.
                    </p>
                    <p class="mb-3">You can have <strong>any combination</strong> of the classes listed below.</p>
                    <!-- Basic Card -->
                    <div class="text-cont">
                        <div class="card">
                            <div class="card-content">
                                <h3 class="normal-headings card-title">Basic card</h3>
                                <h5 class="normal-headings card-subtitle">Card subtitle</h5>
                                <p class="card-text">I am a basic card with a header, subtitle & content. You can use me to display basic content.</p>
                            </div>
                        </div>
                    </div>
                    <pre class="highlight"><code class="html">&lt;div class=&quot;card&quot;&gt;
    &lt;div class=&quot;card-content&quot;&gt;
        &lt;h3 class=&quot;card-title&quot;&gt;Basic card&lt;/h3&gt;
        &lt;h5 class=&quot;card-subtitle&quot;&gt;Card subtitle&lt;/h5&gt;
        &lt;p class=&quot;card-text&quot;&gt;I am a basic card with a header, subtitle &amp; content.&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

                <!-- Action Card -->
                <article class="section-scroll" id="action">
                    <h2 class="b-b-light hash">Action</h2>
                    <p class="secondary-lead">
                        You can use actions within the card to use in conjunction with links & buttons. Add the <code class="inline">card-action</code> as a wrapper for any buttons or links.
                    </p>
                    <div class="text-cont">
                        <!-- Simple card with action -->
                        <div class="card">
                            <div class="card-content">
                                <h3 class="normal-headings card-title">Action card</h3>
                                <h5 class="normal-headings card-subtitle">Card subtitle</h5>
                                <p class="card-text">I am a simple card with a header, subtitle & basic card links.</p>
                            </div>
                            <div class="card-action">
                                <a href="#!" class="c-primary t-uppercase">Card link</a>
                                <a href="#!" class="c-primary t-uppercase">Card link</a>
                            </div>
                        </div>
                    </div>
                    <pre class="highlight"><code class="html">&lt;div class=&quot;card&quot;&gt;
    &lt;div class=&quot;card-content&quot;&gt;
        &lt;h3 class=&quot;card-title&quot;&gt;Action card&lt;/h3&gt;
        &lt;h5 class=&quot;card-subtitle&quot;&gt;Card subtitle&lt;/h5&gt;
        &lt;p class=&quot;card-text&quot;&gt;I am a simple card with a header, subtitle &amp; basic card links.&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class=&quot;card-action&quot;&gt;
        &lt;a href=&quot;#!&quot; class=&quot;c-primary t-uppercase&quot;&gt;Card link&lt;/a&gt;
        &lt;a href=&quot;#!&quot; class=&quot;c-primary t-uppercase&quot;&gt;Card link&lt;/a&gt;
    &lt;/div&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                    <div class="text-cont">
                        <!-- Simple Card with Button-->
                        <div class="card">
                            <div class="card-content">
                                <h3 class="normal-headings card-title">Button card</h3>
                                <h5 class="normal-headings card-subtitle">Card subtitle</h5>
                                <p class="card-text">I am a simple card with a header, subtitle & a button.</p>
                            </div>
                            <div class="card-action">
                                <button class="btn btn-primary">Button</button>
                            </div>
                        </div>
                    </div>
                    <pre class="highlight"><code class="html">&lt;div class=&quot;card&quot;&gt;
    &lt;div class=&quot;card-content&quot;&gt;
        &lt;h3 class=&quot;card-title&quot;&gt;Simple card&lt;/h3&gt;
        &lt;h5 class=&quot;card-subtitle&quot;&gt;Card subtitle&lt;/h5&gt;
        &lt;p class=&quot;card-text&quot;&gt;I am a simple card with a header, subtitle &amp; basic card links.&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class=&quot;card-action&quot;&gt;
        &lt;button class="btn btn-primary"&gt;Button&lt;/button&gt;
    &lt;/div&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

                <!-- Shadow Card -->
                <article class="section-scroll" id="shadow">
                    <h2 class="b-b-light hash">Shadow</h2>
                    <p class="secondary-lead">
                        mesh automatically adds border to the cards, but if you fancy using shadow instead, go ahead! Just use the <code class="inline">card-shadow</code> class in conjunction with the <code class="inline">card class</code>.
                        <br>This will get rid of any borders and add a materialistic box shadow.
                    </p>
                    <div class="text-cont">
                        <div class="card card-shadow">
                            <div class="card-content">
                                <h3 class="normal-headings card-title">Shadow card</h3>
                                <h5 class="normal-headings card-subtitle">Card subtitle</h5>
                                <p class="card-text">I am a simple card with a header, subtitle & basic card links.</p>
                            </div>
                            <div class="card-action">
                                <a href="#!" class="c-primary t-uppercase">Card link</a>
                                <a href="#!" class="c-primary t-uppercase">Card link</a>
                            </div>
                        </div>
                    </div>
                    <pre class="highlight"><code class="html">&lt;div class=&quot;card card-shadow&quot;&gt;
    &lt;div class=&quot;card-content&quot;&gt;
        &lt;h3 class=&quot;normal-headings card-title&quot;&gt;Shadow card&lt;/h3&gt;
        &lt;h5 class=&quot;normal-headings card-subtitle&quot;&gt;Card subtitle&lt;/h5&gt;
        &lt;p class=&quot;card-text&quot;&gt;I am a simple card with a header, subtitle &amp; basic card links.&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class=&quot;card-action&quot;&gt;
        &lt;a href=&quot;#!&quot; class=&quot;c-primary t-uppercase&quot;&gt;Card link&lt;/a&gt;
        &lt;a href=&quot;#!&quot; class=&quot;c-primary t-uppercase&quot;&gt;Card link&lt;/a&gt;
    &lt;/div&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

                <!-- Image Card -->
                <article class="section-scroll" id="image">
                    <h2 class="b-b-light hash">Image</h2>
                    <p class="secondary-lead">
                        To use images within the card component, add the <code class="inline">card-image</code> class to contain the image.
                        <br><strong>Note:</strong> mesh does not calculate heights of the image, the width will always be the size of the card. If a set height is required, the <code class="inline">object-fit: cover;</code> property is recommended, whilst setting a width & height on the <code class="inline">card-image</code> element.
                    </p>
                    <div class="text-cont">
                        <!-- Image Card -->
                        <div class="card card-shadow">
                            <div class="card-image">
                                <img src="/assets/svg/card-background.svg" alt="Circle & triangle background">
                            </div>
                            <div class="card-content">
                                <h3 class="normal-headings card-title">Image card</h3>
                                <p class="card-text">I am an image card with an image, header & links.</p>
                            </div>
                            <div class="card-action">
                                <a href="#!" class="c-primary t-uppercase">Card link</a>
                                <a href="#!" class="c-primary t-uppercase">Card link</a>
                            </div>
                        </div>
                    </div>
                    <div class="text-cont">
                        <!-- Large Card -->
                        <div class="card card-large card-shadow">
                            <div class="card-image">
                                <img src="/assets/svg/card-background.svg" alt="Circle & triangle background">
                            </div>
                            <div class="card-content">
                                <h3 class="normal-headings card-title">Large Image card</h3>
                                <p class="card-text">I am a large image card with an image, header & links.</p>
                            </div>
                            <div class="card-action">
                                <a href="#!" class="c-primary t-uppercase">Card link</a>
                                <a href="#!" class="c-primary t-uppercase">Card link</a>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- FAB Card -->
                <article class="section-scroll" id="fab">
                    <h2 class="b-b-light hash t-uppercase">fab</h2>
                    <p class="secondary-lead">
                        FAB
                    </p>
                    <div class="text-cont">
                        <!-- Icon Card -->
                        <div class="card card-shadow">
                            <div class="card-image">
                                <img src="/assets/svg/card-background.svg" alt="Circle & triangle background">
                                <a href="#!" class="card-icon btn btn-primary btn-justicon br-circle c-white nohover mb-0">
                                    <i class="fal fa-plus"></i>
                                </a>
                            </div>
                            <div class="card-content">
                                <h3 class="normal-headings card-title">Icon card</h3>
                                <p class="card-text">I am an image card with an action icon in the middle of me.</p>
                            </div>
                        </div>
                    </div>

                    <div class="text-cont">
                        <!-- Big Icon Card -->
                        <div class="card card-shadow">
                            <div class="card-image">
                                <img src="/assets/svg/card-background.svg" alt="Circle & triangle background">
                                <a href="#!" class="card-icon btn btn-primary btn-justicon btn-large br-circle c-white nohover mb-0">
                                    <i class="fal fa-plus"></i>
                                </a>
                            </div>
                            <div class="card-content">
                                <h3 class="normal-headings card-title">Large Icon card</h3>
                                <p class="card-text">I am an image card with an action icon in the middle of me.</p>
                            </div>
                        </div>
                    </div>
                </article>



                <!-- Full Background Card -->
                <article class="section-scroll" id="background">
                    <h2 class="b-b-light hash">Background</h2>
                    <p class="secondary-lead">
                        FAB
                    </p>
                    <!-- Full Background Card -->
                    <div class="card card-background card-shadow t-center bg-dark c-white py-4">
                        <div class="card-image">
                            <!-- <img class="card-background-img" src="/assets/svg/card-background.svg" alt="Circle & triangle background"> -->
                        </div>
                        <div class="card-content">
                            <h6 class="t-uppercase">Background card</h6>
                            <h3 class="normal-headings card-title">Header card</h3>
                            <p class="card-text">I am an image card with an action icon in the middle of me.</p>
                            <a href="#!" class="btn btn-secondary c-white">Card link</a>
                        </div>
                    </div>
                </article>



                <!-- Full Background Card -->
                <article class="section-scroll" id="variant">
                    <h2 class="b-b-light hash">Variants</h2>
                    <p class="secondary-lead">
                        FAB
                    </p>

                    <div class="text-cont">
                        <!-- 100% Width Card -->
                        <div class="card w-100">
                            <div class="card-content">
                                <h3 class="normal-headings card-title">100% width card</h3>
                                <h5 class="normal-headings card-subtitle">Card subtitle</h5>
                                <p class="card-text">I am a basic card with a header, subtitle & content, I also stretch 100% to fit my parent.</p>
                            </div>
                        </div>
                    </div>

                    <div class="text-cont">
                        <!-- Panel Card -->
                        <div class="card">
                            <div class="card-content">
                                <p class="card-text">Sometimes, a few words can sum up the wisdom of a thousand. Sometimes, the lesser one speaks, the more one gets across. Short meaningful quotes by people who have made their mark in the world is something that anyone can benefit from, at any time and any place. Here's our treasure of some of the best ones for you.</p>
                            </div>
                        </div>
                    </div>

                </article>

                <!-- Header -->
                <article class="section-scroll" id="header">
                    <h2 class="b-b-light hash">Header</h2>
                    <p class="secondary-lead">

                    </p>
                    <div class="text-cont">
                        <!-- Header Card -->
                        <div class="card card-shadow">
                            <div class="card-header d-flex align-items-center">
                                <div class="bg-light d-block br-circle" style="height: 35px; width: 35px;"></div>
                                <div class="ml-2">
                                    <h4 class="normal-headings card-title">Basic card</h4>
                                    <h6 class="normal-headings card-subtitle">Card subtitle</h6>
                                </div>
                            </div>
                            <div class="card-image">
                                <img src="/assets/svg/card-background.svg" alt="Circle & triangle background">
                            </div>
                            <div class="card-content">
                                <p class="card-text">I am an image card with an action icon in the middle of me.</p>
                            </div>
                            <div class="card-action d-flex justify-content-between align-items-center">
                                <div class="d-flex">
                                    <span class="badge badge-rounded badge-secondary">Badge</span>
                                    <span class="badge badge-rounded badge-info">Another badge</span>
                                </div>
                                <i class="fas fa-heart c-primary"></i>
                            </div>
                        </div>
                    </div>
                </article>

            </div><!-- /Col -->
            <?php include_once '../../partials/smallnav.php'?>
            <?php include_once '../../partials/sub-footer.php'?>
        </div><!-- /Row -->
    </div><!-- /Container -->
</section>

<?php include_once '../../partials/footer.php'?>