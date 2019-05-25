<?php

//Page variables
$pageData = [
    'pageTitle' => 'Badges',
    'pageDescription' => 'Create handsome looking badges & tags easily with these classes.',
    'activePage' => 'badges',
    'parentDirectory' => basename(__DIR__),
];

//Table of contents
$tableOfContents = [
    'usage' => 'Usage',
    'colored' => 'Colored',
    'rounded' => 'Rounded',
    'notification' => 'Notification',
    'close' => 'Close',
];

?>

<?php include_once '../../partials/header.php';?>
<?php include_once '../../partials/sidenav.php';?>

<section class="content badges-page">
    <div class="container-fullwidth">
        <div class="row justify-content-center mt-4 mt-desk-5">
            <div class="col-12 col-tab-9 col-desk-8 mr-desk-2 px-desk-4">
                <h1 class="mb-2 mt-0"><?php echo $pageData['pageTitle'] ?></h1>
                <div class="lead"><?php echo $pageData['pageDescription'] ?></div>

                <!-- Usage -->
                <article class="section-scroll" id="usage">
                    <h2 class="b-b-light hash">Usage</h2>
                    <p class="secondary-lead">
                        The mesh badge should be prefixed with the <code class="inline">.badge</code> class which will give you access to all of the classes outlined below.
                        <br>They are designed to be used with the <code class="inline">&lt;span&gt;</code> element.
                        <br><strong>Note:</strong> You can have <strong>any combination</strong> of the classes listed below.
                    </p>
                    <div class="d-flex justify-content-center justify-content-desk-start flex-wrap mb-3">
                        <span class="badge ml-0">Default</span>
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
                    <h2 class="b-b-light hash">Colored</h2>
                    <p class="secondary-lead">You can add color classes to brighten up the badges by prefixing it with <code class="inline">.badge-{color}</code> class which will give you access to all of the classes outlined below.</p>
                    <div class="d-flex justify-content-center justify-content-desk-start flex-wrap mb-3">
                        <span class="badge badge-primary ml-0">Primary</span>
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
                <article class="section-scroll py-2" id="rounded">
                    <h2 class="b-b-light hash">Rounded</h2>
                    <p class="secondary-lead">You can make badges rounded with the <code class="inline">.badge-rounded</code> class.</p>
                    <div class="d-flex justify-content-center justify-content-desk-start align-items-end flex-wrap mb-3">
                        <span class="badge badge-rounded badge-primary ml-0">Primary</span>
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
                <article class="section-scroll py-2" id="notification">
                    <h2 class="b-b-light hash">Notifications</h2>
                    <p class="mb-3">Mesh badges can be added to buttons as notifications without additional markup.</p>
                    <div class="d-flex justify-content-center justify-content-desk-start align-items-end flex-wrap">
                        <button class="btn btn-primary d-flex align-items-center">
                            Notifications
                            <span class="badge badge-light ml-1">10</span>
                        </button>
                    </div>
                    <pre class="highlight"><code class="html">&lt;button class="btn btn-primary d-flex align-items-center"&gt;
    Notifications
    &lt;span class="badge badge-light"&gt;10&lt;/badge&gt;
&lt;/button&gt;
</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>

                    <!-- Close -->
                    <article class="section-scroll py-2" id="close">
                        <h2 class="b-b-light hash">Close</h2>
                        <p class="secondary-lead">
                            To add a closeable button to the badge, simply add <code class="inline">badge-close</code> class to enable a hover effect.
                        </p>
                        <div class="d-flex justify-content-center justify-content-desk-start align-items-end flex-wrap mb-3">
                            <span class="badge badge-close badge-primary ml-0">Primary</span>
                            <span class="badge badge-close badge-success">Success</span>
                            <span class="badge badge-close badge-info">Info</span>
                            <span class="badge badge-close badge-warning">Warning</span>
                            <span class="badge badge-close badge-danger">Danger</span>
                            <span class="badge badge-close badge-link">Link</span>
                        </div>
                        <pre class="highlight"><code class="html">&lt;span class=&quot;badge badge-close badge-primary&quot;&gt;Primary&lt;/span&gt;
&lt;span class=&quot;badge badge-close badge-success&quot;&gt;Success&lt;/span&gt;
&lt;span class=&quot;badge badge-close badge-info&quot;&gt;Info&lt;/span&gt;
&lt;span class=&quot;badge badge-close badge-warning&quot;&gt;Warning&lt;/span&gt;
&lt;span class=&quot;badge badge-close badge-danger&quot;&gt;Danger&lt;/span&gt;
&lt;span class=&quot;badge badge-close badge-link&quot;&gt;Link&lt;/span&gt;</code></code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                    </article>

            </div><!-- /Col -->
            <?php include_once '../../partials/smallnav.php'?>
            <?php include_once '../../partials/sub-footer.php'?>
        </div><!-- /Row -->
    </div><!-- /Container -->
</section>

<?php include_once '../../partials/footer.php'?>