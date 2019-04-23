<?php 

$contentsData = $tableOfContents;

?>

<!--
//! TODO - Change Links here to point to github docs
-->

<div class="smallnav d-none d-desk-block">
    <ul class="table-of-contents b-b1-light">
        <?php 
            foreach ($contentsData as $key => $value) {
                echo '<li class="contents-item" data-contentitem="' . $key . '">' . $value . '</li>';
            } 
        ?>
    </ul>
    <ul class="community">
        <li class="d-flex align-items-center">
            <img class="icon" src="../assets/icons/edit.svg" alt="Edit icon">
            <a href="" class="hover ml-1">Edit this page</a>
        </li>
        <li class="d-flex align-items-center">
            <img class="icon" src="../assets/icons/danger.svg" alt="Warning icon">
            <a href="" class="hover ml-1">Report a problem</a>
        </li>
        <li class="d-flex align-items-center">
            <img class="icon" src="../assets/icons/chat-grey.svg" alt="Community icon">
            <a href="https://discordapp.com/channels/569873903237857300/569873903237857304" target="_blank" class="hover ml-1">Ask the commnity</a>
        </li>
    </ul>
</div>

