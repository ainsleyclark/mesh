<?php

//Page variables
$pageData = [
    'pageTitle' => '',
    'pageDescription' => '',
    'activePage' => '',
    'ogImage' => '',
    'isDownDirectory' => true,
    'sideNavActive' => 'containers'
];

?>

<?php include_once('../partials/header.php'); ?>
<?php include_once('../partials/sidenav.php'); ?>


<section class="content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <h1 class="mb-2">The grid system</h1>
                <div class="lead">See how powerful our mobile-first flexbox grid is.</div>
                <!-- What is mesh? -->
                <h2 class="pb-2 b-b1-light mt-5 mb-1 hash">How it works</h2>
                <p>mesh uses the conventional containers, rows and columns to layout and align content, it's built with flex box and is fully responsive. Here's an example:</p>
<pre class="highlight"><code class="html">&lt;<span class="tag">div</span> <span class="attr">class=</span><span class="name">"container"</span>&gt;
    &lt;<span class="tag">div </span><span class="attr">class=</span><span class="name">"row"</span>&gt;
        &lt;<span class="tag">div </span><span class="attr">class=</span><span class="name">"col-12 col-tab-6 col-desk-4 col-hd-3"</span>&gt;
            I'm a column, I take up 12 columns at default width, 6 at tablet, 4 at dekstop and 3 in hd screens
        <span class="tag">&lt;/div&gt;</span>
        &lt;<span class="tag">div </span><span class="attr">class=</span><span class="name">"col-10 col-tab-6 col-desk-4 col-hd-3"</span>&gt;
            I'm a column, I take up 10 columns at mobile, 6 at tablet, 4 at dekstop and 3 in hd screens
        <span class="tag">&lt;/div&gt;</span>
        &lt;<span class="tag">div </span><span class="attr">class=</span><span class="name">"col-12 col-tab-6 col-desk-4 col-hd-3"</span>&gt;
            I'm a column, I take up 12 columns at mobile, 6 at tablet, 4 at dekstop and 3 in hd screens
        <span class="tag">&lt;/div&gt;</span>
        &lt;<span class="tag">div </span><span class="attr">class=</span><span class="name">"col-12 col-tab-6 col-desk-4 col-hd-3"</span>&gt;
            I'm a column, I take up 12 columns at mobile, 6 at tablet, 4 at dekstop and 3 in hd screens
        <span class="tag">&lt;/div&gt;</span>
    <span class="tag">&lt;/div&gt;</span>
<span class="tag">&lt;/div&gt;</span></code></pre>
                <!-- Containers -->
                <h2 class="pb-2 b-b1-light mt-5 mb-1 hash">Containers</h2>
                <p>A container can be at fixed size, and will gracefully become smaller as screen size gets smaller.</p>
                <div class="browser">
                    <div class="img-cont p-relative my-3">
                        <img class="p-absolute" src="../assets/svg/browserwindow.svg" alt="Browser window">
                    </div>
                    <div class="row">
                        <div class="col-6 bg-red"></div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>
<?php //include_once('../partials/smallnav.php'); ?>
<?php //include_once('../partials/footer.php'); ?>