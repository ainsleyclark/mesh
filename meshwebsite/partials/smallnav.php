<?php 

$contentsData = $tableOfContents;
if ($pageData['parentDirectory']) {
    $githubDocs = $pageData['parentDirectory'] . '/' . $pageData['activePage'] . '.md';
}

?>

<div class="col-2 pr-0">
    <aside class="smallnav h-100 d-none d-tab-block">
        <div class="smallnav-cont p-sticky">
            <ul class="table-of-contents b-b-light">
                <?php 
                    foreach ($contentsData as $key => $value) {
                        echo '<a href="#' . $key . '"><li class="contents-item" data-contentitem="' . $key . '">' . $value . '</li></a>';
                    } 
                ?>
            </ul>
            <ul class="community">
                <li class="d-flex align-items-center">
                    <img class="icon" src="/assets/icons/edit.svg" alt="Edit icon">
                    <a href="https://github.com/ainsleyclark/mesh/tree/master/documentation/<?php echo $githubDocs ?>" target="_blank" class="hover ml-1">Edit this page</a>
                </li>
                <li class="d-flex align-items-center">
                    <img class="icon" src="/assets/icons/danger.svg" alt="Warning icon">
                    <a href="https://github.com/ainsleyclark/mesh/issues" class="hover ml-1">Report a problem</a>
                </li>
                <li class="d-flex align-items-center">
                    <img class="icon" src="/assets/icons/chat-grey.svg" alt="Community icon">
                    <a href="https://discord.gg/geBW7CN" target="_blank" class="hover ml-1">Ask the commnity</a>
                </li>
            </ul>
        </div>
    </aside>
</div><!-- /Col -->

