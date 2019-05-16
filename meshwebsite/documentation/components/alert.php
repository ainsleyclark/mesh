<?php

//Page variables
$pageData = [
	'pageTitle' => 'Alert',
	'pageDescription' => 'Use mesh alerts to display informaitve information easily with varying colors and styles.',
    'activePage' => 'alert',
    'parentDirectory' => basename(__DIR__)
]; 

//Table of contents
$tableOfContents = [
    'usage' => 'Usage',
    'background' => 'Full background',
    'close' => 'Close',
    'icons' => 'Icon',
    'css' => 'CSS alert dismiss',
    'js' => 'JS alert dismiss',
];

?>

<?php include_once('../../partials/header.php'); ?>
<?php include_once('../../partials/sidenav.php'); ?>

<section class="content alert-page">
    <div class="container-fullwidth">
        <div class="row justify-content-center mt-4 mt-desk-5">
            <div class="col-12 col-tab-9 col-desk-8 mr-desk-2 px-desk-4">
                <h1 class="mb-2 mt-0"><?php echo $pageData['pageTitle'] ?></h1>
                <div class="lead"><?php echo $pageData['pageDescription'] ?></div>

                <!-- Usage -->
                <article class="section-scroll" id="usage">
                    <h2 class="b-b-light hash">Usage</h2>
                    <p class="mt-2">
                        All alerts are prefixed with the <code class="inline">alert</code> class. This gives the element some common properties for the alert such as margin and padding.
                    </p>
                    <p class="mb-3">You can have <strong>any combination</strong> of the classes listed below.</p>
                    <div class="text-cont">
                        <div class="alert">
                            This is a default alert
                        </div>
                        <div class="alert alert-primary">
                            This is a primary alert
                        </div>
                        <div class="alert alert-success">
                            This is a success alert
                        </div>
                        <div class="alert alert-info">
                            This is a info alert
                        </div>
                        <div class="alert alert-warning">
                            This is a warning alert
                        </div>
                        <div class="alert alert-danger">
                            This is a danger alert
                        </div>
                        <div class="alert alert-link">
                            This is a link alert
                        </div>
                    </div>
                    <pre class="highlight"><code class="html">&lt;div class="alert"&gt; 
    This is a default alert
&lt;/div&gt; 
&lt;div class="alert alert-primary"&gt; 
    This is a primary alert
&lt;/div&gt; 
&lt;div class="alert alert-success"&gt; 
    This is a success alert
&lt;/div&gt; 
&lt;div class="alert alert-info"&gt; 
    This is a info alert
&lt;/div&gt; 
&lt;div class="alert alert-warning"&gt; 
    This is a warning alert
&lt;/div&gt; 
&lt;div class="alert alert-danger"&gt; 
    This is a danger alert
&lt;/div&gt; 
&lt;div class="alert alert-link"&gt; 
    This is a link alert
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>


                <!-- Background Alerts -->
                <article class="section-scroll" id="background">
                    <h2 class="b-b-light hash">Full background</h2>
                    <p class="secondary-lead">
                        To acheive a colored background, attach the <code class="inline">alert-background</code> class alongside <code class="inline">alert-{color}</code> to select the color.
                        <br>
                    </p>
                    <div class="text-cont">
                        <div class="alert alert-primary alert-background">
                            This is a primary alert
                        </div>
                        <div class="alert alert-success alert-background">
                            This is a success alert
                        </div>
                        <div class="alert alert-info alert-background">
                            This is a info alert
                        </div>
                        <div class="alert alert-warning alert-background">
                            This is a warning alert
                        </div>
                        <div class="alert alert-danger alert-background">
                            This is a danger alert
                        </div>
                    </div>
                    <pre class="highlight"><code class="html">&lt;div class="alert alert-primary alert-background"&gt; 
    This is a primary alert
&lt;/div&gt; 
&lt;div class="alert alert-success alert-background"&gt; 
    This is a success alert
&lt;/div&gt; 
&lt;div class="alert alert-info alert-background"&gt; 
    This is a info alert
&lt;/div&gt; 
&lt;div class="alert alert-warning alert-background"&gt; 
    This is a warning alert
&lt;/div&gt; 
&lt;div class="alert alert-danger alert-background"&gt; 
    This is a danger alert
&lt;/div&gt; 
&lt;div class="alert alert-link alert-background"&gt; 
    This is a link alert
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>
                
                <!-- Closeable Alerts -->
                <article class="section-scroll" id="close">
                    <h2 class="b-b-light hash">Close</h2>
                    <p class="secondary-lead">
                        Alerts can have a close button placed on the right of the <code class="inline">alert</code>. The close element should be a <code class="inline">button</code> and be prefixed with <code class="inline">close</code>.
                        <br>The <code class="inline">alert-close</code> class must be placed on the alert you intend to have the close button in. This will give padding to the right of the content.
                        <br><strong>Note:</strong> To make an alert dismissable, please see the bottom of this page.
                    </p>
                    <div class="text-cont">
                        <div class="alert alert-success alert-close">
                            This is a success alert with close button
                            <button type="button" class="close" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="alert alert-info alert-close">
                            This is a info alert with close button
                            <button type="button" class="close" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="alert alert-warning alert-close">
                            This is a warning alert with close button
                            <button type="button" class="close" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="alert alert-danger alert-close">
                            This is a danger alert with close button
                            <button type="button" class="close" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    <pre class="highlight"><code class="html">&lt;div class="alert alert-success alert-close"&gt; 
    This is a success alert with close button
    &lt;button type="button" class="close" aria-label="Close"&gt; 
        &lt;span aria-hidden="true"&gt; &times;&lt; /span&gt; 
    &lt;/button&gt; 
&lt;/div&gt; 
&lt;div class="alert alert-info alert-close"&gt; 
    This is a info alert with close button
    &lt;button type="button" class="close" aria-label="Close"&gt; 
        &lt;span aria-hidden="true"&gt; &times;&lt; /span&gt; 
    &lt;/button&gt; 
&lt;/div&gt; 
&lt;div class="alert alert-warning alert-close"&gt; 
    This is a warning alert with close button
    &lt;button type="button" class="close" aria-label="Close"&gt; 
        &lt;span aria-hidden="true"&gt; &times;&lt; /span&gt; 
    &lt;/button&gt; 
&lt;/div&gt; 
&lt;div class="alert alert-danger alert-close"&gt; 
    This is a danger alert with close button
    &lt;button type="button" class="close" aria-label="Close"&gt; 
        &lt;span aria-hidden="true"&gt; &times;&lt; /span&gt; 
    &lt;/button&gt; 
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

                <!-- Icon Alerts -->
                <article class="section-scroll" id="icons">
                    <h2 class="b-b-light hash">Icon:</h2>
                    <p class="secondary-lead">
                        Adding any icons to alerts is easily, you can do it nativley with slight margin added to seperate the content. See below for an example:
                    </p>
                    <div class="text-cont">
                        <div class="alert alert-success alert-close alert-background">
                            <i class="fas fa-check mr-2"></i>
                            <strong>Success alert:</strong>
                            Wow, you've just won a free holiday, congratulations.
                            <button type="button" class="close" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="alert alert-info alert-close alert-background">
                            <i class="fas fa-info-circle mr-2"></i>
                            <strong>Info alert:</strong>
                            There are some peanuts in the cabinet.
                            <button type="button" class="close" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="alert alert-warning alert-close alert-background">
                            <i class="fas fa-exclamation-triangle mr-2"></i>
                            <strong>Warning alert:</strong>
                            Please update your preferences on your account.
                            <button type="button" class="close" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="alert alert-danger alert-close alert-background">
                            <i class="far fa-angry mr-2"></i>
                            <strong>Danger alert:</strong>
                            We're sorry, but all the cake has gone.
                            <button type="button" class="close" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    <pre class="highlight"><code class="html">&lt;div class="alert alert-danger alert-close alert-background"&gt;
    &lt;i class="far fa-angry mr-2"&gt;&lt;/i&gt;
    &lt;strong&gt;Danger alert:&lt;/strong&gt;
    We're sorry, but all the cake has gone.
    &lt;button type="button" class="close" aria-label="Close"&gt;
        &lt;span aria-hidden="true"&gt;&times;&lt;/span&gt;
    &lt;/button&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

                <!-- CSS Alert -->
                <article class="section-scroll" id="css">
                    <h2 class="b-b-light hash">CSS alert dismiss</h2>
                    <p class="secondary-lead">
                        You can use a the pure CSS way to dismiss an alert, the markup is slightly different but its easily to implement. This also means your build becomes lighter.
                    </p>
                    <div class="text-cont">
                        <h3>Notation:</h3>
                        <ul class="list">
                            <li>The <code class="inline">alert-container</code> element must be the parent for both the alert and the and checkbox.</li>
                            <li>The <code class="inline">checkbox</code> should be placed before the alert in the DOM</li>
                            <li>The id for the <code class="inline">checkbox</code> and the name of the label must match.</li>
                        </ul>
                    </div>
                    <div class="text-cont js-alert">
                        <h3>Example:</h3>
                        <p>Go ahead and click the close button to dismiss the alerts.</p>
                    </div>
                    <div class="text-cont">
                        <div class="alert-container">
                            <input type="checkbox" class="alert-toggle" id="alertdismiss1">
                            <div class="alert alert-success alert-background alert-close">
                                This is a success alert with close button functionality 
                                <label for="alertdismiss1" class="close" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </label>
                            </div>
                        </div>
                        <div class="alert-container">
                            <input type="checkbox" class="alert-toggle" id="alertdismiss2">
                            <div class="alert alert-info alert-background alert-close">
                                This is a info alert with close button functionality 
                                <label for="alertdismiss2" class="close" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </label>
                            </div>
                        </div>
                        <div class="alert-container">
                            <input type="checkbox" class="alert-toggle" id="alertdismiss3">
                            <div class="alert alert-warning alert-background alert-close">
                                This is a warning alert with close button functionality 
                                <label for="alertdismiss3" class="close" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </label>
                            </div>
                        </div>
                        <div class="alert-container">
                            <input type="checkbox" class="alert-toggle" id="alertdismiss4">
                            <div class="alert alert-danger alert-background alert-close">
                                This is a danger alert with close button functionality 
                                <label for="alertdismiss4" class="close" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <pre class="highlight"><code class="html">&lt;div class="alert-container"&gt;
    &lt;input type="checkbox" class="alert-toggle" id="alertdismiss1"&gt;
    &lt;div class="alert alert-success alert-background alert-close"&gt;
        This is a success alert with close button functionality 
        &lt;label for="alertdismiss1" class="close" aria-label="Close"&gt;
            &lt;span aria-hidden="true"&gt;&times;&lt;/span&gt;
        &lt;/label&gt;
    &lt;/div&gt;
&lt;/div&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

                <!-- JS Alert -->
                <article class="section-scroll" id="js">
                    <h2 class="b-b-light hash">JS alert dismiss</h2>
                    <p class="secondary-lead">
                        mesh doesnt ship with any JS, but you can use the following function to add functionality to dismiss the close buttons. This script adds an event listener to all the <code class="inline">close</code> buttons.
                    </p>
                    <pre class="highlight"><code class="javascript">document.addEventListener('DOMContentLoaded', () => {
    (document.querySelectorAll('.js-alert .alert .close') || []).forEach(($delete) => {
        $delete.addEventListener('click', () => {
            $delete.parentNode.remove();
        });
    });
});</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                    <div class="text-cont">
                        <h3>Example:</h3>
                        <p>Go ahead and click the close button to dismiss the alerts.</p>
                    </div>
                    <div class="text-cont js-alert">
                        <div class="alert alert-success alert-background alert-close">
                            This is a success alert with close button functionality 
                            <button type="button" class="close" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="alert alert-info alert-background alert-close">
                            This is a info alert with close button functionality
                            <button type="button" class="close" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="alert alert-warning alert-background alert-close">
                            This is a warning alert with close button functionality
                            <button type="button" class="close" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="alert alert-danger alert-background alert-close">
                            This is a danger alert with close button functionality
                            <button type="button" class="close" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </article>

            </div><!-- /Col -->
            <?php include_once('../../partials/smallnav.php') ?>
            <?php include_once('../../partials/sub-footer.php') ?>
        </div><!-- /Row -->
    </div><!-- /Container -->
</section>

<?php include_once('../../partials/footer.php') ?>

<?php function scripts() { ?>
<script>
document.addEventListener('DOMContentLoaded', () => {
    (document.querySelectorAll('.js-alert .alert .close') || []).forEach(($delete) => {
        $delete.addEventListener('click', () => {
            $delete.parentNode.remove();
        });
    });
});
</script>
<?php } ?>