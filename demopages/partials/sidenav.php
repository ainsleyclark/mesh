<?php 

$activeClass = $pageData['sideNavActive'];

?>

<div class="sidenav">
    <h5>Documentation</h5>
    <ul class="main-list color-black">
        <!-- Getting Started -->
        <li class="my-4">
            <div class="nav-header b-b1-light pb-2">Getting Started</div>
            <ul class="sub-list mt-1">
                <a class="<?php if($activeClass == 'intro') echo 'active'; ?>" href=""><li>Introduction</li></a>
                <a class="<?php if($activeClass == 'install') echo 'active'; ?>" href=""><li>Installation</li></a>
                <a class="<?php if($activeClass == 'contents') echo 'active'; ?>" href=""><li>Contents</li></a>
                <a class="<?php if($activeClass == 'variables') echo 'active'; ?>" href=""><li>Variables</li></a>
            </ul>
        </li>
        <!-- Grid -->
        <li class="my-4">
        <div class="nav-header b-b1-light pb-2">Grid</div>
            <ul class="sub-list mt-1">
                <a class="<?php if($activeClass == 'containers') echo 'active'; ?>" href="grid.php"><li>Containers, Rows & Columns</li></a>
                <a class="<?php if($activeClass == 'flex') echo 'active'; ?>" href=""><li>Flex</li></a>
                <a class="<?php if($activeClass == 'order') echo 'active'; ?>" href=""><li>Order</li></a>
                <a class="<?php if($activeClass == 'display') echo 'active'; ?>" href=""><li>Display</li></a>
            </ul>
        </li>
        <!-- Utility -->
        <li class="my-4">
            <div class="nav-header b-b1-light pb-2">Utility</div>
            <ul class="sub-list mt-1">
                <a class="<?php if($activeClass == 'spacing') echo 'active'; ?>" href=""><li>Spacing</li></a>
                <a class="<?php if($activeClass == 'position') echo 'active'; ?>" href=""><li>Position</li></a>
                <a class="<?php if($activeClass == 'sizing') echo 'active'; ?>" href=""><li>Sizing</li></a>
                <a class="<?php if($activeClass == 'colors') echo 'active'; ?>" href=""><li>Colors</li></a>
                <a class="<?php if($activeClass == 'text') echo 'active'; ?>" href=""><li>Text</li></a>
                <a class="<?php if($activeClass == 'borders') echo 'active'; ?>" href=""><li>Borders</li></a>
                <a class="<?php if($activeClass == 'spacers') echo 'active'; ?>" href=""><li>Spacers</li></a>
                <a class="<?php if($activeClass == 'float') echo 'active'; ?>" href=""><li>Float</li></a>
                <a class="<?php if($activeClass == 'visibility') echo 'active'; ?>" href=""><li>Visibility</li></a>
                <a class="<?php if($activeClass == 'media') echo 'active'; ?>" href=""><li>Media</li></a>
            </ul>
        </li>
    </ul>
</div>


