 <?php

//Page variables
$pageData = [
    'pageTitle' => 'Modal',
    'pageDescription' => 'mesh includes a pure CSS modal to easily display custom information & content.',
    'activePage' => 'modal',
    'parentDirectory' => basename(__DIR__),
];

//Table of contents
$tableOfContents = [
    'usage' => 'Usage',
    'examples' => 'Examples',
];

?>

<?php include_once '../../partials/header.php';?>
<?php include_once '../../partials/sidenav.php';?>

<section class="content modal-page">
    <div class="container-fullwidth">
        <div class="row justify-content-center mt-4 mt-desk-5">
            <div class="col-12 col-tab-9 col-desk-8 mr-desk-2 px-desk-4">
                <h1 class="mb-2 mt-0"><?php echo $pageData['pageTitle'] ?></h1>
                <div class="lead"><?php echo $pageData['pageDescription'] ?></div>

                <!-- Usage -->
                <article class="section-scroll" id="usage">
                    <h2 class="b-b-light hash">Usage</h2>
                    <p class="secondary-lead">
                        <code class="inline">{property}-{breakpoint}</code>
                    </p>
                    <div class="text-cont">
                        <h3>Notation:</h3>
                        <ul class="list-line">
                            <li>Test</li>
                        </ul>
                    </div>
                </article>

                <!-- <a href="#exampleModal" class="btn btn-secondary nohover">Open Modal</a>

                <div class="modal" id="exampleModal">
                    <div class="modal-container">
                        <div class="modal-header">
                        <h2>Modal in CSS?</h2>
                        <a href="#" class="btn-close" aria-hidden="true">×</a>
                        </div>
                        <div class="modal-body">
                        <p>One modal example here! :D</p>
                        </div>
                        <div class="modal-footer">
                        <a href="#" class="btn">Nice!</a>
                        </div>
                    </div>
                </div> -->

                <!-- <a href="#example1" class="btn btn-secondary nohover c-white">Open example #1</a>

                <div class="modal" id="example1" aria-hidden="true">
                    <div class="modal-container">
                        <div class="modal-header">
                            <h3>Modal Title</h3>
                            <a href="#!" class="close" rel="nofollow"><i class="fas fa-times"></i></a>
                        </div>
                        <div class="modal-body">
                            <p>An old man walked across the beach until he came across a young boy throwing something into the breaking waves. Upon closer inspection, the old man could see that the boy was tossing stranded starfish from the sandy beach, back into the ocean.</p>
                            <p>“What are you doing, young man?” He asked. “If the starfish are still on the beach when the sun rises, they will die,” the boy answered. “That is ridiculous. There are thousands of miles of beach and millions of starfish. It doesn’t matter how many you throw in; you can’t make a difference.”</p>
                            <p>“It matters to this one,” the boy said as he threw another starfish into the waves. “And it matters to this one.”</p>
                        </div>
                        <div class="modal-footer">
                            <button class="btn mr-2 btn-primary">Nice Story!</button>
                            <a href="#!" rel="nofollow"><button class="btn btn-secondary">Close</button></a>
                        </div>
                    </div>
                </div>

                <a href="#example2" class="btn btn-secondary nohover c-white">Open example #2</a>

                <div class="modal modal-centered" id="example2" aria-hidden="true">
                    <div class="modal-container">
                        <div class="modal-header">
                            <h3>Modal Title</h3>
                            <a href="#!" class="close" rel="nofollow"><i class="fas fa-times"></i></a>
                        </div>
                        <div class="modal-body">
                            <p>An old man walked across the beach until he came across a young boy throwing something into the breaking waves. Upon closer inspection, the old man could see that the boy was tossing stranded starfish from the sandy beach, back into the ocean.</p>
                            <p>“What are you doing, young man?” He asked. “If the starfish are still on the beach when the sun rises, they will die,” the boy answered. “That is ridiculous. There are thousands of miles of beach and millions of starfish. It doesn’t matter how many you throw in; you can’t make a difference.”</p>
                            <p>“It matters to this one,” the boy said as he threw another starfish into the waves. “And it matters to this one.”</p>
                        </div>
                        <div class="modal-footer">
                            <button class="btn mr-2 btn-primary">Nice Story!</button>
                            <a href="#!" rel="nofollow"><button class="btn btn-secondary">Close</button></a>
                        </div>
                    </div>
                </div>

                <a href="#example3" class="btn btn-secondary nohover c-white">Open example #3</a>

                <div class="modal" id="example3" aria-hidden="true">
                    <div class="modal-container">
                        <div class="modal-header">
                            <h3>Modal Title</h3>
                            <a href="#!" class="close" rel="nofollow"><i class="fas fa-times"></i></a>
                        </div>
                        <div class="modal-body">
                            <p>An old man walked across the beach until he came across a young boy throwing something into the breaking waves. Upon closer inspection, the old man could see that the boy was tossing stranded starfish from the sandy beach, back into the ocean.</p>
                            <p>“What are you doing, young man?” He asked. “If the starfish are still on the beach when the sun rises, they will die,” the boy answered. “That is ridiculous. There are thousands of miles of beach and millions of starfish. It doesn’t matter how many you throw in; you can’t make a difference.”</p>
                            <p>“It matters to this one,” the boy said as he threw another starfish into the waves. “And it matters to this one.”</p>
                            <p>An old man walked across the beach until he came across a young boy throwing something into the breaking waves. Upon closer inspection, the old man could see that the boy was tossing stranded starfish from the sandy beach, back into the ocean.</p>
                            <p>“What are you doing, young man?” He asked. “If the starfish are still on the beach when the sun rises, they will die,” the boy answered. “That is ridiculous. There are thousands of miles of beach and millions of starfish. It doesn’t matter how many you throw in; you can’t make a difference.”</p>
                            <p>“It matters to this one,” the boy said as he threw another starfish into the waves. “And it matters to this one.”</p>
                            <p>An old man walked across the beach until he came across a young boy throwing something into the breaking waves. Upon closer inspection, the old man could see that the boy was tossing stranded starfish from the sandy beach, back into the ocean.</p>
                            <p>“What are you doing, young man?” He asked. “If the starfish are still on the beach when the sun rises, they will die,” the boy answered. “That is ridiculous. There are thousands of miles of beach and millions of starfish. It doesn’t matter how many you throw in; you can’t make a difference.”</p>
                            <p>“It matters to this one,” the boy said as he threw another starfish into the waves. “And it matters to this one.”</p>
                            <p>An old man walked across the beach until he came across a young boy throwing something into the breaking waves. Upon closer inspection, the old man could see that the boy was tossing stranded starfish from the sandy beach, back into the ocean.</p>
                            <p>“What are you doing, young man?” He asked. “If the starfish are still on the beach when the sun rises, they will die,” the boy answered. “That is ridiculous. There are thousands of miles of beach and millions of starfish. It doesn’t matter how many you throw in; you can’t make a difference.”</p>
                            <p>“It matters to this one,” the boy said as he threw another starfish into the waves. “And it matters to this one.”</p>
                        </div>
                        <div class="modal-footer">
                            <button class="btn mr-2 btn-primary">Nice Story!</button>
                            <a href="#!" rel="nofollow"><button class="btn btn-secondary">Close</button></a>
                        </div>
                    </div>
                </div> -->


                <label for="modal1" class="btn btn-secondary nohover c-white">Open example #4</label>
                <input type="checkbox" class="modal-toggle" id="modal1">

                <div class="modal" aria-hidden="true">
                    <div class="modal-container">
                        <div class="modal-header">
                            <h3>Modal Title</h3>
                            <label class="modal-close" for="modal1">
                                <i class="fas fa-times"></i>
                            </label>
                        </div>
                        <div class="modal-body">
                            <p>An old man walked across the beach until he came across a young boy throwing something into the breaking waves. Upon closer inspection, the old man could see that the boy was tossing stranded starfish from the sandy beach, back into the ocean.</p>
                            <p>“What are you doing, young man?” He asked. “If the starfish are still on the beach when the sun rises, they will die,” the boy answered. “That is ridiculous. There are thousands of miles of beach and millions of starfish. It doesn’t matter how many you throw in; you can’t make a difference.”</p>
                        </div>
                        <div class="modal-footer">
                            <button class="btn mr-2 btn-primary">Nice Story!</button>
                            <label for="modal1" class="btn btn-secondary">Close</label>
                        </div>
                    </div>
                    <label for="modal1"  class="modal-overlay"></label>
                </div>




            </div><!-- /Col -->
            <?php include_once '../../partials/smallnav.php'?>
            <?php include_once '../../partials/sub-footer.php'?>
        </div><!-- /Row -->
    </div><!-- /Container -->
</section>


<?php include_once '../../partials/footer.php'?>