<?php

//Page variables
$pageData = [
    'pageTitle' => 'List',
    'pageDescription' => 'Something about this page',
    'activePage' => 'list',
    'parentDirectory' => basename(__DIR__),
];

//Table of contents
//! DUPLICATE FOR CONTENTS ITEM,
//! If you add an article, make sure the Id matches the first value here.
$tableOfContents = [
    'usage' => 'Usage',
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
                        Use the <code class="inline">class</code> for inline code.
                        <br>Another line of something.
                    </p>


                    <ul class="list">
                        <li class="list-item">List item</li>
                        <li class="list-item">List item</li>
                        <li class="list-item">List item</li>
                        <li class="list-item">List item</li>
                        <li class="list-item">List item</li>
                    </ul>

                    <ul class="list">
                        <li class="list-item active">List item</li>
                        <li class="list-item">List item</li>
                        <li class="list-item">List item</li>
                        <li class="list-item">List item</li>
                        <li class="list-item">List item</li>
                    </ul>

                    <ul class="list">
                        <li class="list-item disabled">List item</li>
                        <li class="list-item">List item</li>
                        <li class="list-item">List item</li>
                        <li class="list-item">List item</li>
                        <li class="list-item">List item</li>
                    </ul>

                    <ul class="list">
                        <a href="#!" class="list-item">List item</a>
                        <a href="#!" class="list-item active">List item</a>
                        <a href="#!" class="list-item">List item</a>
                        <a href="#!" class="list-item">List item</a>
                        <a href="#!" class="list-item">List item</a>
                    </ul>

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
//!Any page relevant JS scripts to go in here.
</script>
<?php }?>