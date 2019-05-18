<?php

//Page variables
$pageData = [
    'pageTitle' => 'List',
    'pageDescription' => 'Effectively group list items together with our list utility class.',
    'activePage' => 'list',
    'parentDirectory' => basename(__DIR__),
];

//Table of contents
$tableOfContents = [
    'usage' => 'Usage',
    'active' => 'Active',
    'disabled' => 'Disabled',
    'link' => 'Link',
    'icon' => 'Icon',
    'badge' => 'Badge',
    'monty' => 'Full monty',
];

?>

<?php include_once '../../partials/header.php';?>
<?php include_once '../../partials/sidenav.php';?>

<section class="content list-page">
    <div class="container-fullwidth">
        <div class="row justify-content-center mt-4 mt-desk-5">
            <div class="col-12 col-tab-9 col-desk-8 mr-desk-2 px-desk-4">
                <h1 class="mb-2 mt-0"><?php echo $pageData['pageTitle'] ?></h1>
                <div class="lead"><?php echo $pageData['pageDescription'] ?></div>

                <!-- Usage -->
                <article class="section-scroll" id="usage">
                    <h2 class="b-b-light hash">Usage</h2>
                    <p class="secondary-lead">
                        A list is a way of portraying similar data in an orderly fashion. List items should be wrapped in a <code class="inline">&lt;ul&gt;</code> element with a <code class="inline">list</code> class attached to it.
                        <br>Each <code class="inline">&lt;li&gt;</code> or <code class="inline">&lt;a&gt;</code> tag within the list should have a <code class="inline">list-item</code> class attached to it, see below:
                    </p>
                    <ul class="list">
                        <li class="list-item">List item</li>
                        <li class="list-item">List item</li>
                        <li class="list-item">List item</li>
                        <li class="list-item">List item</li>
                        <li class="list-item">List item</li>
                    </ul>
                    <pre class="highlight"><code class="html">&lt;ul class=&quot;list&quot;&gt;
    &lt;li class=&quot;list-item&quot;&gt;List item&lt;/li&gt;
    &lt;li class=&quot;list-item&quot;&gt;List item&lt;/li&gt;
    &lt;li claszs=&quot;list-item&quot;&gt;List item&lt;/li&gt;
    &lt;li class=&quot;list-item&quot;&gt;List item&lt;/li&gt;
    &lt;li class=&quot;list-item&quot;&gt;List item&lt;/li&gt;
&lt;/ul&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

                <!-- Active -->
                <article class="section-scroll" id="active">
                    <h2 class="b-b-light hash">Active</h2>
                    <p class="secondary-lead">
                        In order to display a colored background on one of the list items, simply add the <code class="inline">active</code> class
                    </p>
                    <ul class="list">
                        <li class="list-item active">List item</li>
                        <li class="list-item">List item</li>
                        <li class="list-item">List item</li>
                        <li class="list-item">List item</li>
                        <li class="list-item">List item</li>
                    </ul>
                    <pre class="highlight"><code class="html">&lt;ul class=&quot;list&quot;&gt;
    &lt;li class=&quot;list-item active&quot;&gt;List item&lt;/li&gt;
    &lt;li class=&quot;list-item&quot;&gt;List item&lt;/li&gt;
    &lt;li class=&quot;list-item&quot;&gt;List item&lt;/li&gt;
    &lt;li class=&quot;list-item&quot;&gt;List item&lt;/li&gt;
    &lt;li class=&quot;list-item&quot;&gt;List item&lt;/li&gt;
&lt;/ul&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

                <!-- Usage -->
                <article class="section-scroll" id="disabled">
                    <h2 class="b-b-light hash">Disabled</h2>
                    <p class="secondary-lead">
                        To make a list item disabled, add the <code class="inline">disabled</code> class, which will slightly tone the color of the text down.
                    </p>
                    <ul class="list">
                        <li class="list-item disabled">List item</li>
                        <li class="list-item">List item</li>
                        <li class="list-item">List item</li>
                        <li class="list-item">List item</li>
                        <li class="list-item">List item</li>
                    </ul>
                    <pre class="highlight"><code class="html">&lt;ul class=&quot;list&quot;&gt;
    &lt;li class=&quot;list-item disabled&quot;&gt;List item&lt;/li&gt;
    &lt;li class=&quot;list-item&quot;&gt;List item&lt;/li&gt;
    &lt;li class=&quot;list-item&quot;&gt;List item&lt;/li&gt;
    &lt;li class=&quot;list-item&quot;&gt;List item&lt;/li&gt;
    &lt;li class=&quot;list-item&quot;&gt;List item&lt;/li&gt;
&lt;/ul&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

                <!-- Link -->
                <article class="section-scroll" id="link">
                    <h2 class="b-b-light hash">Link</h2>
                    <p class="secondary-lead">
                        Instead of using <code class="inline">&lt;li&gt;</code> tags you can also use <code class="inline">a</code> links. Which will add a <code class="inline">display: block;</code> property to stack them vertically.
                    </p>
                    <ul class="list">
                        <a href="#!" class="list-item">List item</a>
                        <a href="#!" class="list-item active">List item</a>
                        <a href="#!" class="list-item">List item</a>
                        <a href="#!" class="list-item">List item</a>
                        <a href="#!" class="list-item">List item</a>
                    </ul>
                    <pre class="highlight"><code class="html">&lt;ul class=&quot;list&quot;&gt;
    &lt;a href=&quot;#!&quot; class=&quot;list-item&quot;&gt;List item&lt;/a&gt;
    &lt;a href=&quot;#!&quot; class=&quot;list-item active&quot;&gt;List item&lt;/a&gt;
    &lt;a href=&quot;#!&quot; class=&quot;list-item&quot;&gt;List item&lt;/a&gt;
    &lt;a href=&quot;#!&quot; class=&quot;list-item&quot;&gt;List item&lt;/a&gt;
    &lt;a href=&quot;#!&quot; class=&quot;list-item&quot;&gt;List item&lt;/a&gt;
&lt;/ul&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

                <!-- Icon -->
                <article class="section-scroll" id="icon">
                    <h2 class="b-b-light hash">Icon</h2>
                    <p class="secondary-lead">
                        Icons can also be used in conjunction with a <code class="inline">list-item</code> element. Simply add the <code class="inline">list-icon</code> class, which will add the <code class="inline">display: flex;</code> property.
                    </p>
                    <ul class="list">
                        <a href="#!" class="list-item list-icon">
                            List item
                            <i class="fas fa-caret-right fa-lg"></i>
                        </a>                        
                        <a href="#!" class="list-item list-icon active">
                            List item
                            <i class="fas fa-caret-right fa-lg"></i>
                        </a>
                        <a href="#!" class="list-item list-icon">
                            List item
                            <i class="fas fa-caret-right fa-lg"></i>
                        </a>                        
                        <a href="#!" class="list-item list-icon">
                            List item
                            <i class="fas fa-caret-right fa-lg"></i>
                        </a>
                        <a href="#!" class="list-item list-icon">
                            List item
                            <i class="fas fa-caret-right fa-lg"></i>
                        </a>                        
                    </ul>
                    <pre class="highlight"><code class="html">&lt;ul class=&quot;list&quot;&gt;
    &lt;a href=&quot;#!&quot; class=&quot;list-item list-icon&quot;&gt;
        List item
        &lt;i class=&quot;fas fa-caret-right fa-lg&quot;&gt;&lt;/i&gt;
    &lt;/a&gt;                        
    &lt;a href=&quot;#!&quot; class=&quot;list-item list-icon active&quot;&gt;
        List item
        &lt;i class=&quot;fas fa-caret-right fa-lg&quot;&gt;&lt;/i&gt;
    &lt;/a&gt;
    &lt;a href=&quot;#!&quot; class=&quot;list-item list-icon&quot;&gt;
        List item
        &lt;i class=&quot;fas fa-caret-right fa-lg&quot;&gt;&lt;/i&gt;
    &lt;/a&gt;                        
    &lt;a href=&quot;#!&quot; class=&quot;list-item list-icon&quot;&gt;
        List item
        &lt;i class=&quot;fas fa-caret-right fa-lg&quot;&gt;&lt;/i&gt;
    &lt;/a&gt;
    &lt;a href=&quot;#!&quot; class=&quot;list-item list-icon&quot;&gt;
        List item
        &lt;i class=&quot;fas fa-caret-right fa-lg&quot;&gt;&lt;/i&gt;
    &lt;/a&gt;                        
&lt;/ul&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

                <article class="section-scroll" id="badge">
                    <h2 class="b-b-light hash">Badge</h2>
                    <p class="secondary-lead">
                        Use the mesh badges to create notifications within the list. Use the <code class="inline">list-icon</code> class and add the badge.
                        <br><strong>Note:</strong> you may need to add our color utility classes to achieve the right appearance, see below:
                    </p>
                    <ul class="list">
                        <a href="#!" class="list-item list-icon">
                            List item
                            <div class="badge badge-primary badge-rounded">2</div>
                        </a>                        
                        <a href="#!" class="list-item list-icon active">
                            List item
                            <div class="badge badge-primary badge-rounded bg-white c-primary">4</div>
                        </a>
                        <a href="#!" class="list-item list-icon">
                            List item
                            <div class="badge badge-primary badge-rounded">14</div>
                        </a>                        
                    </ul>
                    <pre class="highlight"><code class="html">&lt;ul class=&quot;list&quot;&gt;
    &lt;a href=&quot;#!&quot; class=&quot;list-item list-icon&quot;&gt;
        List item
        &lt;div class=&quot;badge badge-primary badge-rounded&quot;&gt;2&lt;/div&gt;
    &lt;/a&gt;                        
    &lt;a href=&quot;#!&quot; class=&quot;list-item list-icon active&quot;&gt;
        List item
        &lt;div class=&quot;badge badge-primary badge-rounded bg-white c-primary&quot;&gt;4&lt;/div&gt;
    &lt;/a&gt;
    &lt;a href=&quot;#!&quot; class=&quot;list-item list-icon&quot;&gt;
        List item
        &lt;div class=&quot;badge badge-primary badge-rounded&quot;&gt;14&lt;/div&gt;
    &lt;/a&gt;                        
&lt;/ul&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

                <article class="section-scroll" id="monty">
                    <h2 class="b-b-light hash">Full monty</h2>
                    <p class="secondary-lead">
                        The possibilities are endless, here is taster of what you can achieve with our list component.
                    </p>
                    <ul class="list w-100 w-tab-60">
                        <a href="#!" class="list-item w-100 c-dark">
                            <div class="d-flex justify-content-between align-items-center my-2">
                                <h3 class="mb-0">List item heading</h3>
                                <div class="badge badge-primary">Posted 2 days ago</div>
                            </div>
                            <p>Kogi single-origin coffee farm-to-table letterpress keffiyeh heirloom. Helvetica cold-pressed readymade meggings, echo park retro sartorial. +1 wolf subway tile, quinoa heirloom live-edge ethical letterpress blog kale chips vape pok pok butcher. Everyday carry kombucha gochujang VHS, poke man braid copper mug asymmetrical cronut. Man braid viral fashion axe thundercats try-hard church-key literally quinoa.</p>
                            <h6>Posted by Tiger Woods</h6>
                        </a>                        
                        <a href="#!" class="list-item active">
                            <div class="d-flex justify-content-between align-items-center my-2">
                                <h3 class="mb-0">List item heading</h3>
                                <div class="badge badge-white">Posted 5 days ago</div>
                            </div>
                            <p>Kogi single-origin coffee farm-to-table letterpress keffiyeh heirloom. Helvetica cold-pressed readymade meggings, echo park retro sartorial. +1 wolf subway tile, quinoa heirloom live-edge ethical letterpress blog kale chips vape pok pok butcher. Everyday carry kombucha gochujang VHS, poke man braid copper mug asymmetrical cronut. Man braid viral fashion axe thundercats try-hard church-key literally quinoa.</p>
                            <h6>Posted by Gordon Ramsey</h6>
                        </a> 
                        <a href="#!" class="list-item w-100 c-dark">
                            <div class="d-flex justify-content-between align-items-center my-2">
                                <h3 class="mb-0">List item heading</h3>
                                <div class="badge badge-primary">Posted 10 days ago</div>
                            </div>
                            <p>Kogi single-origin coffee farm-to-table letterpress keffiyeh heirloom. Helvetica cold-pressed readymade meggings, echo park retro sartorial. +1 wolf subway tile, quinoa heirloom live-edge ethical letterpress blog kale chips vape pok pok butcher. Everyday carry kombucha gochujang VHS, poke man braid copper mug asymmetrical cronut. Man braid viral fashion axe thundercats try-hard church-key literally quinoa.</p>
                            <h6>Posted by Above & Beyond</h6>
                        </a>                       
                    </ul>
                    <pre class="highlight"><code class="html">&lt;ul class=&quot;list w-100 w-tab-60&quot;&gt;
    &lt;a href=&quot;#!&quot; class=&quot;list-item w-100 c-dark&quot;&gt;
        &lt;div class=&quot;d-flex justify-content-between align-items-center my-2&quot;&gt;
            &lt;h3 class=&quot;mb-0&quot;&gt;List item heading&lt;/h3&gt;
            &lt;div class=&quot;badge badge-primary&quot;&gt;Posted 2 days ago&lt;/div&gt;
        &lt;/div&gt;
        &lt;p&gt;Kogi single-origin coffee farm-to-table...&lt;/p&gt;
        &lt;h6&gt;Posted by Tiger Woods&lt;/h6&gt;
    &lt;/a&gt;                        
    &lt;a href=&quot;#!&quot; class=&quot;list-item active&quot;&gt;
        &lt;div class=&quot;d-flex justify-content-between align-items-center my-2&quot;&gt;
            &lt;h3 class=&quot;mb-0&quot;&gt;List item heading&lt;/h3&gt;
            &lt;div class=&quot;badge badge-white&quot;&gt;Posted 5 days ago&lt;/div&gt;
        &lt;/div&gt;
        &lt;p&gt;Kogi single-origin coffee farm-to-table...&lt;/p&gt;
        &lt;h6&gt;Posted by Gordon Ramsey&lt;/h6&gt;
    &lt;/a&gt; 
    &lt;a href=&quot;#!&quot; class=&quot;list-item w-100 c-dark&quot;&gt;
        &lt;div class=&quot;d-flex justify-content-between align-items-center my-2&quot;&gt;
            &lt;h3 class=&quot;mb-0&quot;&gt;List item heading&lt;/h3&gt;
            &lt;div class=&quot;badge badge-primary&quot;&gt;Posted 10 days ago&lt;/div&gt;
        &lt;/div&gt;
        &lt;p&gt;Kogi single-origin coffee farm-to-table...&lt;/p&gt;
        &lt;h6&gt;Posted by Above &amp; Beyond&lt;/h6&gt;
    &lt;/a&gt;                       
&lt;/ul&gt;
</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

            </div><!-- /Col -->
            <?php include_once '../../partials/smallnav.php'?>
            <?php include_once '../../partials/sub-footer.php'?>
        </div><!-- /Row -->
    </div><!-- /Container -->
</section>

<?php include_once '../../partials/footer.php'?>