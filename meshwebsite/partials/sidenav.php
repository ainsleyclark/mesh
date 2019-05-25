<?php 

$activeClass = $pageData['activePage'];

?>

<aside class="sidenav">
    <h3>Documentation</h3>
    <ul class="main-list color-black">
        <!-- Getting Started -->
        <li class="my-4">
            <div class="nav-header b-b-light pb-2">Getting Started</div>
            <ul class="sub-list mt-1">
                <a class="<?php if($activeClass == 'introduction') echo 'active'; ?>" href="/documentation/getting-started"><li>Introduction</li></a>
                <a class="<?php if($activeClass == 'installation') echo 'active'; ?>" href="/documentation/getting-started/installation.php"><li>Installation</li></a>
                <a class="<?php if($activeClass == 'builder') echo 'active'; ?>" href="/builder.php"><li>meshBuilder</li></a>
                <a class="<?php if($activeClass == 'variables') echo 'active'; ?>" href="/documentation/getting-started/variables.php"><li>Variables</li></a>
            </ul>
        </li>
        <!-- Grid -->
        <li class="my-4">
        <div class="nav-header b-b-light pb-2">Grid</div>
            <ul class="sub-list mt-1">
                <a class="<?php if($activeClass == 'grid') echo 'active'; ?>" href="/documentation/grid/grid.php"><li>Grid</li></a>
                <a class="<?php if($activeClass == 'flex') echo 'active'; ?>" href="/documentation/grid/flex.php"><li>Flex</li></a>
                <a class="<?php if($activeClass == 'order') echo 'active'; ?>" href="/documentation/grid/order.php"><li>Order</li></a>
                <a class="<?php if($activeClass == 'display') echo 'active'; ?>" href="/documentation/grid/display.php"><li>Display</li></a>
            </ul>
        </li>
        <!-- Utility -->
        <li class="my-4">
            <div class="nav-header b-b-light pb-2">Utility</div>
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
            <div class="nav-header b-b-light pb-2">Components</div>
            <ul class="sub-list mt-1">
                <a class="<?php if($activeClass == 'alert') echo 'active'; ?>" href="/documentation/components/alert.php"><li>Alert</li></a>
                <a class="<?php if($activeClass == 'badges') echo 'active'; ?>" href="/documentation/components/badges.php"><li>Badges</li></a>
                <a class="<?php if($activeClass == 'breadcrumb') echo 'active'; ?>" href="/documentation/components/breadcrumb.php"><li>Breadcrumb</li></a>
                <a class="<?php if($activeClass == 'button') echo 'active'; ?>" href="/documentation/components/button.php"><li>Button</li></a>
                <a class="<?php if($activeClass == 'card') echo 'active'; ?>" href="/documentation/components/card.php"><li>Card</li></a>
                <a class="<?php if($activeClass == 'collapse') echo 'active'; ?>" href="/documentation/components/collapse.php"><li>Collapse</li></a>
                <a class="<?php if($activeClass == 'epic') echo 'active'; ?>" href="/documentation/components/epic.php"><li>Epic</li></a>
                <a class="<?php if($activeClass == 'form') echo 'active'; ?>" href="/documentation/components/form.php"><li>Form</li></a>
                <a class="<?php if($activeClass == 'header') echo 'active'; ?>" href="/documentation/components/header.php"><li>Header</li></a>
                <a class="<?php if($activeClass == 'list') echo 'active'; ?>" href="/documentation/components/list.php"><li>List</li></a>
                <a class="<?php if($activeClass == 'modal') echo 'active'; ?>" href="/documentation/components/modal.php"><li>Modal</li></a>
                <a class="<?php if($activeClass == 'nav') echo 'active'; ?>" href="/documentation/components/nav.php"><li>Nav</li></a>
                <a class="<?php if($activeClass == 'pagination') echo 'active'; ?>" href="/documentation/components/pagination.php"><li>Pagination</li></a>
                <a class="<?php if($activeClass == 'table') echo 'active'; ?>" href="/documentation/components/table.php"><li>Table</li></a>
                <a class="<?php if($activeClass == 'tabs') echo 'active'; ?>" href="/documentation/components/tabs.php"><li>Tabs</li></a>
                <a class="<?php if($activeClass == 'toasts') echo 'active'; ?>" href="/documentation/components/toasts.php"><li>Toasts</li></a>
                <a class="<?php if($activeClass == 'tooltip') echo 'active'; ?>" href="/documentation/components/tooltip.php"><li>Tooltip</li></a>
            </ul>
        </li>

    </ul>
</aside>


