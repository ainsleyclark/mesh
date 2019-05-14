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
                    <h2 class="pb-1 b-b1-light mb-1 hash">Usage</h2>
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
                    <h2 class="pb-1 b-b1-light mb-1 hash">Colored</h2>
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

                <!-- Rounded Badges -->
                <article class="section-scroll py-2" id="colored">
                    <h2 class="pb-1 b-b1-light mb-1 hash">Rounded</h2>
                    <p>You can make badges rounded with <code class="inline">.badge-rounded</code> class which will make badges rounded.</p>
                    <div class="d-flex justify-content-center justify-content-desk-start align-items-end flex-wrap">
                        <span class="badge badge-rounded badge-primary">Primary</span>
                        <span class="badge badge-rounded badge-success">Success</span>
                        <span class="badge badge-rounded badge-info">Info</span>
                        <span class="badge badge-rounded badge-warning">Warning</span>
                        <span class="badge badge-rounded badge-danger">Danger</span>
                        <span class="badge badge-rounded badge-link">Link</span>
                    </div>
                    <pre class="highlight"><code class="html">&lt;span class="badge badge-rounded badge-primary"&gt;Primary&lt;/span&gt;
&lt;span class="badge badge-rounded badge-success"&gt;Success&lt;/span&gt;
&lt;span class="badge badge-rounded badge-info"&gt;Info&lt;/span&gt;
&lt;span class="badge badge-rounded badge-warning"&gt;Warning&lt;/span&gt;
&lt;span class="badge badge-rounded badge-danger"&gt;Danger&lt;/span&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

                 <!-- Notifications Badges -->
                 <article class="section-scroll py-2" id="sizes">
                    <h2 class="pb-1 b-b1-light mb-1 hash">Notifications</h2>
                    <p>Mesh badges can be added to buttons as notifications without additional classes.</p>
                    <div class="d-flex justify-content-center justify-content-desk-start align-items-end flex-wrap">
                        <button class="btn btn-primary">
                            Notifications
                            <span class="badge badge-light">10</span>
                        </button>
                    </div>
                    <pre class="highlight"><code class="html">&lt;button class="btn btn-primary&gt;
    Notifications
    &lt;span class="badge badge-light"&gt;10&lt;/badge&gt;
&lt;/button&gt;
</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>

            <!-- Rounded Tags -->
            <article class="section-scroll py-2" id="colored">
                    <h2 class="pb-1 b-b1-light mb-1 hash">Rounded Tags</h2>
                    <p>The mesh tags should be prefiex with the <code class="inline">.tag</code> class which will give you access to all of the classes outline below.</p>
                    <p>The mesh tags should also containe <code class="inline">.deletable</code> class which will alow tag to be deleted.</p>
                    <p>You can add color classes to brighten up the tag by prefixing it with <code class="inline">.tag-{color}</code> class which will give you access to all the colors.</p>
                    <div class="d-flex justify-content-center justify-content-desk-start align-items-end flex-wrap">
                        <div class="tag tag-primary deletable">
                            <div>Primary</div>
                            <div class="input">
                                <i>
                                    <svg height="14" viewBox="0 0 24 24" width="14" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z">
                                        </path>
                                        <path d="M0 0h24v24H0z" fill="none"></path>
                                    </svg>
                                </i>
                            </div>
                        </div>
                        <div class="tag tag-success deletable">
                            <div>Success</div>
                            <div class="input">
                                <i>
                                    <svg height="14" viewBox="0 0 24 24" width="14" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z">
                                        </path>
                                        <path d="M0 0h24v24H0z" fill="none"></path>
                                    </svg>
                                </i>
                            </div>
                        </div>
                        <div class="tag tag-info deletable">
                            <div>Info</div>
                            <div class="input">
                                <i>
                                    <svg height="14" viewBox="0 0 24 24" width="14" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z">
                                        </path>
                                        <path d="M0 0h24v24H0z" fill="none"></path>
                                    </svg>
                                </i>
                            </div>
                        </div>
                        <div class="tag tag-warning deletable">
                            <div>Warning</div>
                            <div class="input">
                                <i>
                                    <svg height="14" viewBox="0 0 24 24" width="14" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z">
                                        </path>
                                        <path d="M0 0h24v24H0z" fill="none"></path>
                                    </svg>
                                </i>
                            </div>
                        </div>
                        <div class="tag tag-danger deletable">
                            <div>Danger</div>
                            <div class="input">
                                <i>
                                    <svg height="14" viewBox="0 0 24 24" width="14" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z">
                                        </path>
                                        <path d="M0 0h24v24H0z" fill="none"></path>
                                    </svg>
                                </i>
                            </div>
                        </div>
                        <div class="tag tag-link deletable">
                            <div>Link</div>
                            <div class="input">
                                <i>
                                    <svg height="14" viewBox="0 0 24 24" width="14" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z">
                                        </path>
                                        <path d="M0 0h24v24H0z" fill="none"></path>
                                    </svg>
                                </i>
                            </div>
                        </div>
                    </div>
                    <pre class="highlight"><code class="html">&lt;div class="tag tag-primary deletable"&gt;
    &lt;div&gt;Primary&lt;/div&gt;
    &lt;div class="input"&gt;
        &lt;i&gt;
            &lt;svg height="14" viewBox="0 0 24 24" width="14" xmlns="http://www.w3.org/2000/svg"&gt;
                &lt;path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"&gt;&lt;/path&gt;
                &lt;path d="M0 0h24v24H0z" fill="none"&gt;&lt;/path&gt;
            &lt;/svg&gt;
        &lt;/i&gt;
    &lt;/div&gt;                     
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

            </div><!-- /Col -->
            <?php include_once('../../partials/smallnav.php') ?>
            <?php include_once('../../partials/sub-footer.php') ?>
        </div><!-- /Row -->
    </div><!-- /Container -->
</section>

<?php include_once('../../partials/footer.php') ?>