<?php

//Page variables
$pageData = [
	'pageTitle' => 'Pagination',
	'pageDescription' => 'Add pagination to posts or extended elements to help break up your content with the mesh pagination component.',
    'activePage' => 'pagination',
    'parentDirectory' => basename(__DIR__)
]; 

//Table of contents
$tableOfContents = [
    'usage' => 'Usage',
    'prevnext' => 'Prev/Next',
    'arrow' => 'Arrow',
];

?>

<?php include_once('../../partials/header.php'); ?>
<?php include_once('../../partials/sidenav.php'); ?>

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
                        Pagination is an ordinal numbering of pages, which is usually located at the top or bottom of the site pages. It makes it easier for the user to navigate through your website. mesh's pagination comes with prev/next buttons or arrows.
                    </p>
                    <div class="text-cont">
                        <h3>Notation:</h3>
                        <ul class="list">
                            <li>In order to use pagination with mesh you need to wrap the parent with a <code class="inline">pagination</code> class, and child (pagination items) to have the <code class="inline">page-item</code> class.</li>
                            <li>Be sure to add the <code class="inline">active</code> class to the page where the user currently is. This will give the current active page item a background color and box shadow.</li>
                            <li><strong>Note:</strong> It is reccomended you use the <code class="inline">&lt;/ul&gt;</code> and <code class="inline">&lt;/li&gt;</code> semantic tags with breadcrumbs.</li>
                        </ul>
                    </div>
                    <div class="text-cont">
                        <h3>Example:</h3>
                        <ul class="pagination my-3">
                            <li class="page-item active"><a href="#!">1</a></li>
                            <li class="page-item"><a href="#!">2</a></li>
                            <li class="page-item"><a href="#!">3</a></li>
                            <li class="page-item"><a href="#!">4</a></li>
                            <li class="page-item"><a href="#!">5</a></li>
                        </ul>  
                    </div>  
                    <pre class="highlight"><code class="html">&lt;ul class="pagination"&gt;
    &lt;li class="page-item active"&gt;&lt;a href="#!"&gt;1&lt;/a&gt;&lt;/li&gt;
    &lt;li class="page-item"&gt;&lt;a href="#!"&gt;2&lt;/a&gt;&lt;/li&gt;
    &lt;li class="page-item"&gt;&lt;a href="#!"&gt;3&lt;/a&gt;&lt;/li&gt;
    &lt;li class="page-item"&gt;&lt;a href="#!"&gt;4&lt;/a&gt;&lt;/li&gt;
    &lt;li class="page-item"&gt;&lt;a href="#!"&gt;5&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                    
                <!-- Prev Next -->
                <article class="section-scroll" id="prevnext">
                    <h2 class="b-b-light hash">Prev/Next</h2>
                    <p class="secondary-lead">
                        To add previous and next buttons to the pagination, add the <code class="inline">prev-btn</code> class on the first <code class="inline">page-item</code> and the <code class="inline">next-btn</code> class on the last <code class="inline">page-item.</code>
                    </p>
                    <ul class="pagination my-3">
                        <li class="page-item prev-btn">Prev</li>
                        <li class="page-item active"><a href="#!">1</a></li>
                        <li class="page-item"><a href="#!">2</a></li>
                        <li class="page-item"><a href="#!">3</a></li>
                        <li class="page-item"><a href="#!">4</a></li>
                        <li class="page-item"><a href="#!">5</a></li>
                        <li class="page-item next-btn">Next</li>
                    </ul>
                    <pre class="highlight"><code class="html">&lt;ul class="pagination"&gt;
    &lt;li class="page-item prev-btn"&gt;&lt;a href="#!"&gt;Prev&lt;/a&gt;&lt;/li&gt;
    &lt;li class="page-item active"&gt;&lt;a href="#!"&gt;1&lt;/a&gt;&lt;/li&gt;
    &lt;li class="page-item"&gt;&lt;a href="#!"&gt;2&lt;/a&gt;&lt;/li&gt;
    &lt;li class="page-item"&gt;&lt;a href="#!"&gt;3&lt;/a&gt;&lt;/li&gt;
    &lt;li class="page-item"&gt;&lt;a href="#!"&gt;4&lt;/a&gt;&lt;/li&gt;
    &lt;li class="page-item"&gt;&lt;a href="#!"&gt;5&lt;/a&gt;&lt;/li&gt;
    &lt;li class="page-item next-btn"&gt;&lt;a href="#!"&gt;Next&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

                <!-- Arrow -->
                <article class="section-scroll" id="arrow">
                    <h2 class="b-b-light hash">Arrow</h2>
                    <p class="secondary-lead">
                       If you don't like the prev/next buttons and prefer to use arrows instead, use the <code class="inline">prev-arrow</code> class on the first <code class="inline">page-item</code> and the <code class="inline">next-arrow</code> class on the last <code class="inline">page-item</code>.
                       <br>Ensure to add the HTML code <code class="inline">&amp;#8249;</code>in the <code class="inline">&lt;a&gt; tag</code>.
                    </p>
                    <ul class="pagination my-3">
                        <li class="page-item prev-arrow">&#8249;</li>
                        <li class="page-item active"><a href="#!">1</a></li>
                        <li class="page-item"><a href="#!">2</a></li>
                        <li class="page-item"><a href="#!">3</a></li>
                        <li class="page-item"><a href="#!">4</a></li>
                        <li class="page-item"><a href="#!">5</a></li>
                        <li class="page-item next-arrow">&#8250; </li>
                    </ul>  
                    <pre class="highlight"><code class="html">&lt;ul class="pagination"&gt;
    &lt;li class="page-item prev-arrow"&gt;&lt;a href="#!"&gt;&amp;#8249;&lt;/a&gt;&lt;/li&gt;
    &lt;li class="page-item active"&gt;&lt;a href="#!"&gt;1&lt;/a&gt;&lt;/li&gt;
    &lt;li class="page-item"&gt;&lt;a href="#!"&gt;2&lt;/a&gt;&lt;/li&gt;
    &lt;li class="page-item"&gt;&lt;a href="#!"&gt;3&lt;/a&gt;&lt;/li&gt;
    &lt;li class="page-item"&gt;&lt;a href="#!"&gt;4&lt;/a&gt;&lt;/li&gt;
    &lt;li class="page-item"&gt;&lt;a href="#!"&gt;5&lt;/a&gt;&lt;/li&gt;
    &lt;li class="page-item next-arrow"&gt;&lt;a href="#!"&gt;&amp;#8250;&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>  
                </article>

            </div><!-- /Col -->
            <?php include_once('../../partials/smallnav.php') ?>
            <?php include_once('../../partials/sub-footer.php') ?>
        </div><!-- /Row -->
    </div><!-- /Container -->
</section>

<?php include_once('../../partials/footer.php') ?>