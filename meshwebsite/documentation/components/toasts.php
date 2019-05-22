<?php

//Page variables
$pageData = [
    'pageTitle' => 'Toasts',
    'pageDescription' => 'Something about this page',
    'activePage' => 'toasts',
    'parentDirectory' => basename(__DIR__),
];

//Table of contents
$tableOfContents = [
    'usage' => 'Usage',
];

?>

<?php include_once '../../partials/header.php';?>
<?php include_once '../../partials/sidenav.php';?>

<section class="content toasts-page">
    <div class="container-fullwidth">
        <div class="row justify-content-center mt-4 mt-desk-5">
            <div class="col-12 col-tab-9 col-desk-8 mr-desk-2 px-desk-4">
                <h1 class="mb-2 mt-0"><?php echo $pageData['pageTitle'] ?></h1>
                <div class="lead"><?php echo $pageData['pageDescription'] ?></div>


                <div class="toast">
                </div>

                <!-- <div class="toast toast-left-corner">
                    <div class="toast-body bg-primary">
                        <span>A wonderful message.</span>
                    </div>
                </div>

                <div class="toast">
                    <div class="toast-body bg-primary">
                        <span>A wonderful message.</span>
                    </div>
                </div>

                <div class="toast-body bg-primary">
                    <div class="toast-control">
                        <i class="close-icon"></i>
                    </div>
                    <span>A wonderful message.</span>
                </div> -->

                <!-- Usage -->
                <article class="section-scroll" id="usage">
                    <h2 class="b-b-light hash">Usage</h2>
                    <p class="secondary-lead">
                        Use the <code class="inline">class</code> for inline code.
                        <br>Another line of something.
                    </p>
                    <div class="text-cont">
                        <div class="alert">
                            Please wrap all your text in a <code class="inline">text-cont</code> class.
                        </div>

                    </div>
                    <pre class="highlight"><code class="html">&lt;div class="alert"&gt;
    This is a default alert
&lt;/div&gt;
</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
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
function meshToast(text, opts = {}) {

    // Create sensible defaults for our toast-bodys.
    const defaults = {
        color: "bg-primary"
    };

    const options = Object.assign(defaults, opts);

    // Select our toast container to insert our new toast-body later.
    const toastContainer = document.getElementsByClassName("toast")[0];

    // Now we create a new toast-body element
    const toastBody = document.createElement("div");
    toastBody.classList.add("toast-body", options.color);

    const toastText = document.createElement("span");
    toastText.innerText = text;
    toastBody.appendChild(toastText);
    toastContainer.appendChild(toastBody);

    // We use the 'animationend' event from a CSS animation to remove the toast after it is finished displaying
    toastBody.addEventListener("animationend", e => {
        toastBody.remove(1);
    });

    // The show CSS class is used to add a fade-in & -out animation. After this is finished the 'animationend' event is triggerd and the toast-body is removed from the DOM.
    toastBody.classList.add("toast-show");
    if (options.displayTime) {
        toastBody.style.animationDuration = options.displayTime;
    }
}

meshToast('Demo Text', { displayTime: '5s' });
meshToast('Secondary Text', { displayTime: '5s', color: "bg-secondary" });
</script>
<?php }?>