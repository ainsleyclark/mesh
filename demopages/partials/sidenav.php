<?php 

$activeClass = $pageData['activePage'];

?>

<div class="sidenav">
    <h5>Documentation</h5>
    <ul class="main-list color-black">
        <!-- Getting Started -->
        <li class="my-4">
            <div class="nav-header b-b1-light pb-2">Getting Started</div>
            <ul class="sub-list mt-1">
                <a class="<?php if($activeClass == 'introduction') echo 'active'; ?>" href="/documentation"><li>Introduction</li></a>
                <a class="<?php if($activeClass == 'installation') echo 'active'; ?>" href="/documentation/installation.php"><li>Installation</li></a>
                <a class="<?php if($activeClass == 'contents') echo 'active'; ?>" href="/documentation/contents.php"><li>Contents</li></a>
                <a class="<?php if($activeClass == 'variables') echo 'active'; ?>" href="/documentation/variables.php"><li>Variables</li></a>
            </ul>
        </li>
        <!-- Grid -->
        <li class="my-4">
        <div class="nav-header b-b1-light pb-2">Grid</div>
            <ul class="sub-list mt-1">
                <a class="<?php if($activeClass == 'containers') echo 'active'; ?>" href="/documentation/grid.php"><li>Containers, Rows & Columns</li></a>
                <a class="<?php if($activeClass == 'flex') echo 'active'; ?>" href="/documentation/flex.php"><li>Flex</li></a>
                <a class="<?php if($activeClass == 'order') echo 'active'; ?>" href="/documentation/order.php"><li>Order</li></a>
                <a class="<?php if($activeClass == 'display') echo 'active'; ?>" href="/documentation/display.php"><li>Display</li></a>
            </ul>
        </li>
        <!-- Utility -->
        <li class="my-4">
            <div class="nav-header b-b1-light pb-2">Utility</div>
            <ul class="sub-list mt-1">
                <a class="<?php if($activeClass == 'spacing') echo 'active'; ?>" href="/documentation/spacing.php"><li>Spacing</li></a>
                <a class="<?php if($activeClass == 'position') echo 'active'; ?>" href="/documentation/position.php"><li>Position</li></a>
                <a class="<?php if($activeClass == 'sizing') echo 'active'; ?>" href="/documentation/sizing.php"><li>Sizing</li></a>
                <a class="<?php if($activeClass == 'colors') echo 'active'; ?>" href="/documentation/colors.php"><li>Colors</li></a>
                <a class="<?php if($activeClass == 'text') echo 'active'; ?>" href="/documentation/text.php"><li>Text</li></a>
                <a class="<?php if($activeClass == 'borders') echo 'active'; ?>" href="/documentation/borders.php"><li>Borders</li></a>
                <a class="<?php if($activeClass == 'spacers') echo 'active'; ?>" href="/documentation/spacers.php"><li>Spacers</li></a>
                <a class="<?php if($activeClass == 'float') echo 'active'; ?>" href="/documentation/float.php"><li>Float</li></a>
                <a class="<?php if($activeClass == 'visibility') echo 'active'; ?>" href="/documentation/visibility.php"><li>Visibility</li></a>
                <a class="<?php if($activeClass == 'media') echo 'active'; ?>" href="/documentation/media.php"><li>Media</li></a>
            </ul>
        </li>
    </ul>
</div>


