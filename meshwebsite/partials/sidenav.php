<?php 

$activeClass = $pageData['activePage'];

?>

<aside class="sidenav">
    <h3>Documentation</h3>
    <ul class="main-list color-black">
        <!-- Getting Started -->
        <li class="my-4">
            <div class="nav-header b-b1-light pb-2">Getting Started</div>
            <ul class="sub-list mt-1">
                <a class="<?php if($activeClass == 'introduction') echo 'active'; ?>" href="/documentation/getting-started"><li>Introduction</li></a>
                <a class="<?php if($activeClass == 'installation') echo 'active'; ?>" href="/documentation/getting-started/installation.php"><li>Installation</li></a>
                <a class="<?php if($activeClass == 'contents') echo 'active'; ?>" href="/documentation/getting-started/contents.php"><li>Contents</li></a>
                <a class="<?php if($activeClass == 'variables') echo 'active'; ?>" href="/documentation/getting-started/variables.php"><li>Variables</li></a>
            </ul>
        </li>
        <!-- Grid -->
        <li class="my-4">
        <div class="nav-header b-b1-light pb-2">Grid</div>
            <ul class="sub-list mt-1">
                <a class="<?php if($activeClass == 'grid') echo 'active'; ?>" href="/documentation/grid/grid.php"><li>Grid</li></a>
                <a class="<?php if($activeClass == 'flex') echo 'active'; ?>" href="/documentation/grid/flex.php"><li>Flex</li></a>
                <a class="<?php if($activeClass == 'order') echo 'active'; ?>" href="/documentation/grid/order.php"><li>Order</li></a>
                <a class="<?php if($activeClass == 'display') echo 'active'; ?>" href="/documentation/grid/display.php"><li>Display</li></a>
            </ul>
        </li>
        <!-- Utility -->
        <li class="my-4">
            <div class="nav-header b-b1-light pb-2">Utility</div>
            <ul class="sub-list mt-1">
                <a class="<?php if($activeClass == 'spacing') echo 'active'; ?>" href="/documentation/utility/spacing.php"><li>Spacing</li></a>
                <a class="<?php if($activeClass == 'position') echo 'active'; ?>" href="/documentation/utility/position.php"><li>Position</li></a>
                <a class="<?php if($activeClass == 'sizing') echo 'active'; ?>" href="/documentation/utility/sizing.php"><li>Sizing</li></a>
                <a class="<?php if($activeClass == 'colors') echo 'active'; ?>" href="/documentation/utility/colors.php"><li>Colors</li></a>
                <a class="<?php if($activeClass == 'text') echo 'active'; ?>" href="/documentation/utility/text.php"><li>Text</li></a>
                <a class="<?php if($activeClass == 'borders') echo 'active'; ?>" href="/documentation/utility/borders.php"><li>Borders</li></a>
                <a class="<?php if($activeClass == 'spacers') echo 'active'; ?>" href="/documentation/utility/spacers.php"><li>Spacers</li></a>
                <a class="<?php if($activeClass == 'float') echo 'active'; ?>" href="/documentation/utility/float.php"><li>Float</li></a>
                <a class="<?php if($activeClass == 'visibility') echo 'active'; ?>" href="/documentation/utility/visibility.php"><li>Visibility</li></a>
                <a class="<?php if($activeClass == 'media') echo 'active'; ?>" href="/documentation/utility/media.php"><li>Media</li></a>
            </ul>
        </li>
        <!-- Components -->
        <li class="my-4">
            <div class="nav-header b-b1-light pb-2">Components</div>
            <ul class="sub-list mt-1">
                <a class="<?php if($activeClass == 'alert') echo 'active'; ?>" href="/documentation/components/alert.php"><li>Alert</li></a>
                <a class="<?php if($activeClass == 'cards') echo 'active'; ?>" href="/documentation/components/badges.php"><li>Badges & Tags</li></a>
                <a class="<?php if($activeClass == 'button') echo 'active'; ?>" href="/documentation/components/button.php"><li>Button</li></a>
                <a class="<?php if($activeClass == 'cards') echo 'active'; ?>" href="/documentation/components/cards.php"><li>Cards</li></a>
                <a class="<?php if($activeClass == 'cards') echo 'active'; ?>" href="/documentation/components/cards.php"><li>Cards</li></a>
                <a class="<?php if($activeClass == 'cards') echo 'active'; ?>" href="/documentation/components/cards.php"><li>Cards</li></a>
            </ul>
        </li>
    </ul>
</aside>


