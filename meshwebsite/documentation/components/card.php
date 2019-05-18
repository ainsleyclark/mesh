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
    'variants' => 'Variants',
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
                    <div class="text-cont">
                        <h3>Notation:</h3>
                        <ul class="list">
                            <li>Cards compromise of three different sections, all of which are prefixed with <code class="inline">card</code>. The <code class="inline">card-header</code>, <code class="inline">card-body</code> and the <code class="inline">card-action</code>, all of which are optional.</li>
                            <li>All cards (including large) are 100% width at mobile, filling the column or parent in which the card lies. They then become a fixed width at tablet screens & upwards.</li>
                        </ul>
                    </div>
                    <p class="mb-3"><strong>Note:</strong> You can have <strong>any combination</strong> of the classes listed below.</p>
                    <!-- Basic Card -->
                    <div class="card-cont">
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
                    <div class="card-cont">
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
                    <div class="card-cont">
                        <!-- Simple Card with Button-->
                        <div class="card">
                            <div class="card-content">
                                <h3 class="normal-headings card-title">Button card</h3>
                                <h5 class="normal-headings card-subtitle">Card subtitle</h5>
                                <p class="card-text">I am a simple card with a header, subtitle & a button.</p>
                            </div>
                            <div class="card-action">
                                <button class="btn btn-primary mb-0">Button</button>
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
                    <div class="card-cont">
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
        &lt;h3 class=&quot;card-title&quot;&gt;Shadow card&lt;/h3&gt;
        &lt;h5 class=&quot;card-subtitle&quot;&gt;Card subtitle&lt;/h5&gt;
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
                    <div class="card-cont">
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
                    <pre class="highlight"><code class="html">&lt;div class=&quot;card card-shadow&quot;&gt;
    &lt;div class=&quot;card-image&quot;&gt;
        &lt;img src=&quot;...&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;card-content&quot;&gt;
        &lt;h3 class=&quot;card-title&quot;&gt;Image card&lt;/h3&gt;
        &lt;p class=&quot;card-text&quot;&gt;I am an image card with an image, header &amp; links.&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class=&quot;card-action&quot;&gt;
        &lt;a href=&quot;#!&quot; class=&quot;c-primary t-uppercase&quot;&gt;Card link&lt;/a&gt;
        &lt;a href=&quot;#!&quot; class=&quot;c-primary t-uppercase&quot;&gt;Card link&lt;/a&gt;
    &lt;/div&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                    <div class="text-cont d-none d-tab-block">
                        <h3>Large card:</h3>
                        <p>
                            To make the card wider, simply add <code class="inline">card-large</code> class in conjunction with the <code class="inline">card</code> class.
                            <br><strong>Note:</strong> you can add the <code class="inline">card-large</code> class to any card.
                        </p>
                    </div>
                    <div class="card-cont d-none d-tab-block">
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
                    <pre class="highlight d-none d-tab-block"><code class="html">&lt;div class=&quot;card card-large card-shadow&quot;&gt;
    &lt;div class=&quot;card-image&quot;&gt;
        &lt;img src=&quot;...&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;card-content&quot;&gt;
        &lt;h3 class=&quot;card-title&quot;&gt;Image card&lt;/h3&gt;
        &lt;p class=&quot;card-text&quot;&gt;I am an image card with an image, header &amp; links.&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class=&quot;card-action&quot;&gt;
        &lt;a href=&quot;#!&quot; class=&quot;c-primary t-uppercase&quot;&gt;Card link&lt;/a&gt;
        &lt;a href=&quot;#!&quot; class=&quot;c-primary t-uppercase&quot;&gt;Card link&lt;/a&gt;
    &lt;/div&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

                <!-- FAB Card -->
                <article class="section-scroll" id="fab">
                    <h2 class="b-b-light hash t-uppercase">fab</h2>
                    <p class="secondary-lead">
                        FAB stands for floating action button, they are used to add an user interaction to a card effectively. To use the FAB button add the <code class="inline">card-icon</code> class which will make the icon absolutely positioned within the <code class="inline">card-image</code> element.
                        <br><strong>Note:</strong> The following classes need to be used in order for the FAB button to appear like below - <code class="inline">btn btn-{color} btn-justicon br-circle</code>. 
                        <br>You can also use <strong>any font awesome icon</strong>.
                    </p>
                    <div class="card-cont">
                        <!-- Icon Card -->
                        <div class="card card-shadow">
                            <div class="card-image">
                                <img src="/assets/svg/card-background.svg" alt="Circle & triangle background">
                                <a href="#!" class="card-icon btn btn-primary btn-justicon br-circle c-white nohover mb-0">
                                    <i class="fal fa-plus"></i>
                                </a>
                            </div>
                            <div class="card-content">
                                <h3 class="normal-headings card-title">FAB card</h3>
                                <p class="card-text">I am an image card with an action icon in the middle of me.</p>
                            </div>
                        </div>
                    </div>
                    <pre class="highlight"><code class="html">&lt;div class=&quot;card card-shadow&quot;&gt;
    &lt;div class=&quot;card-image&quot;&gt;
        &lt;img src=&quot;..&quot;&gt;
        &lt;a href=&quot;#!&quot; class=&quot;card-icon btn btn-primary btn-justicon br-circle c-white&quot;&gt;
            &lt;i class=&quot;far fa-plus&quot;&gt;&lt;/i&gt;
        &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;card-content&quot;&gt;
        &lt;h3 class=&quot;card-title&quot;&gt;Icon card&lt;/h3&gt;
        &lt;p class=&quot;card-text&quot;&gt;I am an image card with an action icon in the middle of me.&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                    <div class="text-cont">
                        <h3>Large FAB:</h3>
                        <p>
                            To make the FAB a little bigger, simply add <code class="inline">btn-large</code> class to the <code class="inline">a</code> link. Of course you can use a button if you prefer.
                        </p>
                    </div>
                    <div class="card-cont">
                        <!-- Big Icon Card -->
                        <div class="card card-shadow">
                            <div class="card-image">
                                <img src="/assets/svg/card-background.svg" alt="Circle & triangle background">
                                <a href="#!" class="card-icon btn btn-primary btn-justicon btn-large br-circle c-white nohover mb-0">
                                    <i class="fal fa-plus"></i>
                                </a>
                            </div>
                            <div class="card-content">
                                <h3 class="normal-headings card-title">Large FAB card</h3>
                                <p class="card-text">I am an image card with an large action icon in the middle of me.</p>
                            </div>
                        </div>
                    </div>
                    <pre class="highlight"><code class="html">&lt;div class=&quot;card card-shadow&quot;&gt;
    &lt;div class=&quot;card-image&quot;&gt;
        &lt;img src=&quot;..&quot;&gt;
        &lt;a href=&quot;#!&quot; class=&quot;card-icon btn btn-primary btn-large btn-justicon br-circle c-white&quot;&gt;
            &lt;i class=&quot;far fa-plus&quot;&gt;&lt;/i&gt;
        &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;card-content&quot;&gt;
        &lt;h3 class=&quot;card-title&quot;&gt;Icon card&lt;/h3&gt;
        &lt;p class=&quot;card-text&quot;&gt;I am an image card with an large action icon in the middle of me.&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

                <!-- Full Background Card -->
                <article class="section-scroll" id="background">
                    <h2 class="b-b-light hash">Background</h2>
                    <p class="secondary-lead">
                        To add a an image as a full background, place an <code class="inline">&lt;img&gt;</code> tag straight after the enclosing <code class="inline">card</code> element, then add the <code class="inline">card-background-img</code> class to position the image centrally.
                        <br><strong>Note:</strong> You can achieve the following result almost entireley with our utility helpers, such as padding which gives more space on the y axis of these cards.
                    </p>
                    <div class="card-cont">
                        <div class="card card-shadow t-center c-white py-4">
                            <img class="card-background-img" src="/assets/svg/card-background-dark.svg" alt="Circle & triangle background">
                            <div class="card-content">
                                <h6 class="t-uppercase">Background card</h6>
                                <h3 class="normal-headings card-title">A quote about design</h3>
                                <p class="card-text">“If you do good work for good clients, it will lead to other good work for other good clients. If you do bad work for bad clients, it will lead to other bad work for other bad clients." <i>Michael Bierut</i></p>
                                <a href="#!" class="btn btn-secondary c-white mt-2">Card link</a>
                            </div>
                        </div>
                    </div>
                    <pre class="highlight"><code class="html">&lt;div class=&quot;card card-shadow t-center c-white py-4&quot;&gt;
    &lt;img class=&quot;card-background-img&quot; src=&quot;...&quot;&gt;
    &lt;div class=&quot;card-content&quot;&gt;
        &lt;h6 class=&quot;t-uppercase&quot;&gt;Background card&lt;/h6&gt;
        &lt;h3 class=&quot;card-title&quot;&gt;A quote about design&lt;/h3&gt;
        &lt;p class=&quot;card-text&quot;&gt;&ldquo;If you do good work for good clients, it will lead to other good work for other good clients. If you do bad work for bad clients, it will lead to other bad work for other bad clients.&quot; &lt;i&gt;Michael Bierut&lt;/i&gt;&lt;/p&gt;
        &lt;a href=&quot;#!&quot; class=&quot;btn btn-secondary c-white mt-2&quot;&gt;Card link&lt;/a&gt;
    &lt;/div&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                    <div class="text-cont d-none d-tab-block">
                        <h3>Large background card:</h3>
                        <p>
                            To make the background card a little bigger, simply add <code class="inline">card-large</code> class to the <code class="inline">card</code> element.
                        </p>
                    </div>
                    <div class="card-cont d-none d-tab-block">
                        <div class="card card-shadow card-large t-center c-white py-4">
                            <img class="card-background-img" src="/assets/svg/card-background-dark.svg" alt="Circle & triangle background">
                            <div class="card-content">
                                <h6 class="t-uppercase">Background card</h6>
                                <h3 class="normal-headings card-title">A quote about design</h3>
                                <p class="card-text">“To design is much more than simply to assemble, to order, or even to edit: it is to add value and meaning, to illuminate, to simplify, to clarify, to modify, to dignify, to dramatize, to persuade, and perhaps even to amuse. To design is to transform prose into poetry.” <i>Paul Rand</i></p>
                                <a href="#!" class="btn btn-secondary c-white mt-2">Card link</a>
                            </div>
                        </div>
                    </div>
                    <pre class="highlight d-none d-tab-block"><code class="html">&lt;div class=&quot;card card-large card-shadow t-center c-white py-4&quot;&gt;
    &lt;img class=&quot;card-background-img&quot; src=&quot;...&quot;&gt;
    &lt;div class=&quot;card-content&quot;&gt;
        &lt;h6 class=&quot;t-uppercase&quot;&gt;Background card&lt;/h6&gt;
        &lt;h3 class=&quot;card-title&quot;&gt;A quote about design&lt;/h3&gt;
        &lt;p class=&quot;card-text&quot;&gt;&ldquo;If you do good work for good clients, it will lead to other good work for other good clients. If you do bad work for bad clients, it will lead to other bad work for other bad clients.&quot; &lt;i&gt;Michael Bierut&lt;/i&gt;&lt;/p&gt;
        &lt;a href=&quot;#!&quot; class=&quot;btn btn-secondary c-white mt-2&quot;&gt;Card link&lt;/a&gt;
    &lt;/div&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

                <!-- Header -->
                <article class="section-scroll" id="header">
                    <h2 class="b-b-light hash">Header</h2>
                    <p class="secondary-lead">
                        To add a header to a card simply use the <code class="inline">card-header</code> class which will add slight padding to the element. 
                        <br>You can also use our badges/tags within the footer to create a sleek look, see below.
                    </p>
                    <div class="card-cont">
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
                                <p class="card-text">I am an image card with with a header and a footer with badges & icons.</p>
                            </div>
                            <div class="card-action d-flex justify-content-between align-items-center">
                                <div class="d-flex">
                                    <span class="badge badge-rounded badge-secondary">Badge</span>
                                    <span class="badge badge-rounded badge-info">Another badge</span>
                                </div>
                                <i class="fas fa-heart c-primary"></i>
                            </div>
                        </div>
                    </div><pre class="highlight"><code class="html">&lt;div class=&quot;card card-shadow&quot;&gt;
    &lt;div class=&quot;card-header d-flex align-items-center&quot;&gt;
        &lt;div class=&quot;d-block br-circle&quot;&quot;&gt;&lt;/div&gt;
        &lt;div class=&quot;ml-2&quot;&gt;
            &lt;h4 class=&quot;card-title&quot;&gt;Basic card&lt;/h4&gt;
            &lt;h6 class=&quot;card-subtitle&quot;&gt;Card subtitle&lt;/h6&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;card-image&quot;&gt;
        &lt;img src=&quot;...&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;card-content&quot;&gt;
        &lt;p class=&quot;card-text&quot;&gt;I am an image card with with a header and a footer with badges & icons.&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class=&quot;card-action d-flex justify-content-between align-items-center&quot;&gt;
        &lt;div class=&quot;d-flex&quot;&gt;
            &lt;span class=&quot;badge badge-rounded badge-secondary&quot;&gt;Badge&lt;/span&gt;
            &lt;span class=&quot;badge badge-rounded badge-info&quot;&gt;Another badge&lt;/span&gt;
        &lt;/div&gt;
        &lt;i class=&quot;fas fa-heart c-primary&quot;&gt;&lt;/i&gt;
    &lt;/div&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

                <!-- Variants -->
                <article class="section-scroll" id="variant">
                    <h2 class="b-b-light hash">Variants</h2>
                    <p class="secondary-lead">
                        There are endless possibilities with using mesh cards, in different order, sizes, colors and more. Here are a couple of examples: 
                    </p>
                    <div class="text-cont">
                        <h3>100% width</h3>
                        <p>
                            To override the default fixed width of the mesh card simply add the <code class="inline">w-100</code> class to the <code class="inline">card</code> element. 
                            <br>This will fill the width of the parent, great if you want to use it in columns.
                        </p>
                    </div>
                    <div class="card-cont row mb-3">
                        <!-- 100% Width Card -->
                        <div class="col-6 my-0">
                            <div class="card w-100">
                                <div class="card-content">
                                    <h3 class="normal-headings card-title">100% width card</h3>
                                    <h5 class="normal-headings card-subtitle">Card subtitle</h5>
                                    <p class="card-text">I am a card that stretches 100% to fit my parent.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 my-0">
                            <div class="card w-100">
                                <div class="card-content">
                                    <h3 class="normal-headings card-title">100% width card</h3>
                                    <h5 class="normal-headings card-subtitle">Card subtitle</h5>
                                    <p class="card-text">I am a card that stretches 100% to fit my parent.</p>
                                </div>
                            </div>
                        </div>
                    </div><pre class="highlight"><code class="html">&lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;col-6&quot;&gt;
        &lt;div class=&quot;card w-100&quot;&gt;
            &lt;div class=&quot;card-content&quot;&gt;
                &lt;h3 class=&quot;card-title&quot;&gt;100% width card&lt;/h3&gt;
                &lt;h5 class=&quot;card-subtitle&quot;&gt;Card subtitle&lt;/h5&gt;
                &lt;p class=&quot;card-text&quot;&gt;I am a card that stretches 100% to fit my parent.&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6&quot;&gt;
        &lt;div class=&quot;card w-100&quot;&gt;
            &lt;div class=&quot;card-content&quot;&gt;
                &lt;h3 class=&quot;card-title&quot;&gt;100% width card&lt;/h3&gt;
                &lt;h5 class=&quot;card-subtitle&quot;&gt;Card subtitle&lt;/h5&gt;
                &lt;p class=&quot;card-text&quot;&gt;I am a card that stretches 100% to fit my parent.&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                    <div class="text-cont">
                        <h3>Card panel</h3>
                        <p>
                            To have a simple card panel with a text filler, just use the <code class="inline">card-content</code> class with the <code class="inline">card-text</code> class as a child, see below.
                        </p>
                    </div>
                    <div class="card-cont">
                        <!-- Panel Card -->
                        <div class="card card-large">
                            <div class="card-content">
                                <p class="card-text">A 24 year old boy seeing out from the train’s window shouted… “Dad, look the trees are going behind!” Dad smiled and a young couple sitting nearby, looked at the 24 year old’s childish behavior with pity, suddenly he again exclaimed… “Dad, look the clouds are running with us!” The couple couldn’t resist and said to the old man… “Why don’t you take your son to a good doctor?” The old man smiled and said…“I did and we are just coming from the hospital, my son was blind from birth, he just got his eyes today.” Every single person on the planet has a story. Don’t judge people before you truly know them. The truth might surprise you.</p>
                            </div>
                        </div>
                    </div><pre class="highlight"><code class="html">&lt;div class=&quot;card card-large&quot;&gt;
    &lt;div class=&quot;card-content&quot;&gt;
        &lt;p class=&quot;card-text&quot;&gt;A 24 year old boy seeing out from the train&rsquo;s window ...&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

            </div><!-- /Col -->
            <?php include_once '../../partials/smallnav.php'?>
            <?php include_once '../../partials/sub-footer.php'?>
        </div><!-- /Row -->
    </div><!-- /Container -->
</section>

<?php include_once '../../partials/footer.php'?>