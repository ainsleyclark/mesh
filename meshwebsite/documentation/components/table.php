<?php

//Page variables
$pageData = [
    'pageTitle' => 'Table',
    'pageDescription' => 'Forget boring styled tables and use our table component to bring rows & columns to life.',
    'activePage' => 'table',
    'parentDirectory' => basename(__DIR__),
];

//Table of contents
$tableOfContents = [
    'usage' => 'Usage',
    'striped' => 'Striped',
    'hover' => 'Hover',
    'scroll' => 'Scroll',
    'icon' => 'Icon',
];

?>

<?php include_once '../../partials/header.php';?>
<?php include_once '../../partials/sidenav.php';?>

<section class="content table-page">
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
                    <div class="text-cont">
                        <p>Something</p>
                    </div>
                    <table class="table my-3">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Country</th>
                                <th>City</th>
                                <th>Zip</th>
                                <th>Subscribed</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Tim Davis</td>
                                <td>England</td>
                                <td>London</td>
                                <td>TR4 2YT</td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Chaem Choi</td>
                                <td>Thailand</td>
                                <td>Bangkok</td>
                                <td>10520</td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Jose Mari</td>
                                <td>Philippines</td>
                                <td>Cebu</td>
                                <td>24502</td>
                                <td>No</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Andrea Scott</td>
                                <td>Hungary</td>
                                <td>Budapest</td>
                                <td>423001</td>
                                <td>No</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Stephanie Jones</td>
                                <td>Australia</td>
                                <td>Queensland</td>
                                <td>292125</td>
                                <td>Yes</td>
                            </tr>
                        </tbody>
                    </table>
                    <pre class="highlight"><code class="html">&lt;div class="alert"&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

                <!-- Striped -->
                <article class="section-scroll" id="striped">
                    <h2 class="b-b-light hash">Striped</h2>
                    <p class="secondary-lead">
                        Use the <code class="inline">class</code> for inline code.
                        <br>Another line of something.
                    </p>
                    <div class="text-cont">
                        <p>Something</p>
                    </div>
                    <table class="table table-striped my-3">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Country</th>
                                <th>City</th>
                                <th>Zip</th>
                                <th>Subscribed</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Tim Davis</td>
                                <td>England</td>
                                <td>London</td>
                                <td>TR4 2YT</td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Chaem Choi</td>
                                <td>Thailand</td>
                                <td>Bangkok</td>
                                <td>10520</td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Jose Mari</td>
                                <td>Philippines</td>
                                <td>Cebu</td>
                                <td>24502</td>
                                <td>No</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Andrea Scott</td>
                                <td>Hungary</td>
                                <td>Budapest</td>
                                <td>423001</td>
                                <td>No</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Stephanie Jones</td>
                                <td>Australia</td>
                                <td>Queensland</td>
                                <td>292125</td>
                                <td>Yes</td>
                            </tr>
                        </tbody>
                    </table>
                    <pre class="highlight"><code class="html">&lt;div class="alert"&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

                <!-- Hover -->
                <article class="section-scroll" id="hover">
                    <h2 class="b-b-light hash">Hover</h2>
                    <p class="secondary-lead">
                        Use the <code class="inline">class</code> for inline code.
                        <br>Another line of something.
                    </p>
                    <div class="text-cont">
                        <p>Something</p>
                    </div>
                    <table class="table table-hover my-3">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Country</th>
                                <th>City</th>
                                <th>Zip</th>
                                <th>Subscribed</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Tim Davis</td>
                                <td>England</td>
                                <td>London</td>
                                <td>TR4 2YT</td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Chaem Choi</td>
                                <td>Thailand</td>
                                <td>Bangkok</td>
                                <td>10520</td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Jose Mari</td>
                                <td>Philippines</td>
                                <td>Cebu</td>
                                <td>24502</td>
                                <td>No</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Andrea Scott</td>
                                <td>Hungary</td>
                                <td>Budapest</td>
                                <td>423001</td>
                                <td>No</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Stephanie Jones</td>
                                <td>Australia</td>
                                <td>Queensland</td>
                                <td>292125</td>
                                <td>Yes</td>
                            </tr>
                        </tbody>
                    </table>
                    <pre class="highlight"><code class="html">&lt;div class="alert"&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

                <!-- Scroll -->
                <article class="section-scroll" id="scroll">
                    <h2 class="b-b-light hash">Scroll</h2>
                    <p class="secondary-lead">
                        Use the <code class="inline">class</code> for inline code.
                        <br>Another line of something.
                    </p>
                    <div class="text-cont">
                        <p>Something</p>
                    </div>
                    <div class="table-scroll my-3">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Country</th>
                                    <th>City</th>
                                    <th>Zip</th>
                                    <th>Subscribed</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Tim Davis</td>
                                    <td>England</td>
                                    <td>London</td>
                                    <td>TR4 2YT</td>
                                    <td>Yes</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Chaem Choi</td>
                                    <td>Thailand</td>
                                    <td>Bangkok</td>
                                    <td>10520</td>
                                    <td>Yes</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Jose Mari</td>
                                    <td>Philippines</td>
                                    <td>Cebu</td>
                                    <td>24502</td>
                                    <td>No</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Andrea Scott</td>
                                    <td>Hungary</td>
                                    <td>Budapest</td>
                                    <td>423001</td>
                                    <td>No</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Stephanie Jones</td>
                                    <td>Australia</td>
                                    <td>Queensland</td>
                                    <td>292125</td>
                                    <td>Yes</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <pre class="highlight"><code class="html">&lt;div class="alert"&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

                <!-- Icon -->
                <article class="section-scroll" id="icon">
                    <h2 class="b-b-light hash">Icon</h2>
                    <p class="secondary-lead">
                        Use the <code class="inline">class</code> for inline code.
                        <br>Another line of something.
                    </p>
                    <div class="text-cont">
                        <p>Something</p>
                    </div>
                    <div class="table-scroll my-3">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Country</th>
                                    <th>City</th>
                                    <th>Zip</th>
                                    <th class="center-text">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Tim Davis</td>
                                    <td>England</td>
                                    <td>London</td>
                                    <td>TR4 2YT</td>
                                    <td>
                                        <div class="action-cont d-flex flex-nowrap justify-content-end">
                                            <i class="fas fa-user-cog c-info mr-1"></i>
                                            <i class="fas fa-pencil-alt c-success mr-1"></i>
                                            <i class="fas fa-times c-danger"></i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Chaem Choi</td>
                                    <td>Thailand</td>
                                    <td>Bangkok</td>
                                    <td>10520</td>
                                    <td>
                                        <div class="action-cont d-flex flex-nowrap justify-content-end">
                                            <i class="fas fa-user-cog c-info mr-1"></i>
                                            <i class="fas fa-pencil-alt c-success mr-1"></i>
                                            <i class="fas fa-times c-danger"></i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Jose Mari</td>
                                    <td>Philippines</td>
                                    <td>Cebu</td>
                                    <td>24502</td>
                                    <td>
                                        <div class="action-cont d-flex flex-nowrap justify-content-end">
                                            <i class="fas fa-user-cog c-info mr-1"></i>
                                            <i class="fas fa-pencil-alt c-success mr-1"></i>
                                            <i class="fas fa-times c-danger"></i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Andrea Scott</td>
                                    <td>Hungary</td>
                                    <td>Budapest</td>
                                    <td>423001</td>
                                    <td>
                                        <div class="action-cont d-flex flex-nowrap justify-content-end">
                                            <i class="fas fa-user-cog c-info mr-1"></i>
                                            <i class="fas fa-pencil-alt c-success mr-1"></i>
                                            <i class="fas fa-times c-danger"></i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Stephanie Jones</td>
                                    <td>Australia</td>
                                    <td>Queensland</td>
                                    <td>292125</td>
                                    <td>
                                        <div class="action-cont d-flex flex-nowrap justify-content-end">
                                            <i class="fas fa-user-cog c-info mr-1"></i>
                                            <i class="fas fa-pencil-alt c-success mr-1"></i>
                                            <i class="fas fa-times c-danger"></i>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <pre class="highlight"><code class="html">&lt;div class="alert"&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
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