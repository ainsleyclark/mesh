<?php

$isDownDirectory = $pageData['isDownDirectory'];

?>
</main>

<!-- =====================
    Footer
    ===================== -->

<footer class="home <?php if ($isDownDirectory) echo 'mt-tab-3' ?>">
    <div class="d-flex align-items-center justify-content-center h-100">
        <div class="text-cont mx-3">
            <span>Version 1.0.0</span>
        </div>
        <div class="icon-cont mx-3 d-inline-flex align-items-center">
            <img class="footer-icon" src="/assets/icons/github-logo.svg" alt="Github logo">
            <a class="hover" href="https://github.com/ainsleyclark/mesh" target="_blank">Github</a>
        </div>
        <div class="icon-cont mx-3 d-inline-flex align-items-center">
            <img class="footer-icon" src="/assets/icons/chat.svg" alt="Github logo">
            <a class="hover" href="https://discordapp.com/channels/569873903237857300/569873903237857304" target="_blank">Community</a>
        </div>
        <div class="text-cont mx-3">
            <span>© 2014-2019 mesh, All rights reserved.</span>
        </div>
    </div>
</footer>

</body>
<?php if ($isDownDirectory) echo '<script src="/js/app.js"></script>' ?>
</html>