<?php

//Page variables
$pageData = [
	'pageTitle' => 'Button',
	'pageDescription' => '',
	'activePage' => 'button',
]; 

?>

<?php include_once('../../partials/header.php'); ?>
<?php include_once('../../partials/sidenav.php'); ?>

<div class="container">
    <div class="row justify-content-center t-center">
        <div class="col-12">
            <div class="spacer-100"></div>

            <h5>Default Buttons:</h5>
            <div class="d-flex justify-content-center">
                <div class="button-cont mx-auto my-4">
                    <button class="btn mx-1">Default</button>
                    <button class="btn light mx-1">Light</button>
                    <button class="btn dark mx-1">Dark</button>
                    <button class="btn black mx-1">Black</button>
                    <button class="btn simple mx-1">Simple</button>
                </div>
            </div>

            <h5>Coloured Buttons:</h5>
            <div class="d-flex justify-content-center">
                <div class="button-cont mx-auto my-4">
                    <button class="btn primary c-black mx-1">Primary</button>
                    <button class="btn info mx-1">Info</button>
                    <button class="btn success mx-1">Success</button>
                    <button class="btn warning mx-1">Warning</button>
                    <button class="btn danger mx-1">Danger</button>
                    <button class="btn link mx-1">Link</button>
                    <button class="btn disabled mx-1">Disabled</button>
                </div>
            </div>

            <h5>Outlined Buttons:</h5>
            <div class="d-flex justify-content-center">
                <div class="button-cont mx-auto my-4">
                    <button class="btn outline primary mx-1">Primary</button>
                    <button class="btn outline info mx-1">Info</button>
                    <button class="btn outline success mx-1">Success</button>
                    <button class="btn outline warning mx-1">Warning</button>
                    <button class="btn outline danger mx-1">Danger</button>
                    <button class="btn outline link mx-1">Link</button>
                </div>
            </div>

            <h5>Sized Buttons:</h5>
            <div class="d-flex justify-content-center">
                <div class="button-cont mx-auto my-4">
                    <button class="btn small mx-1">Small</button>
                    <button class="btn mx-1">Default</button>
                    <button class="btn large mx-1">Large</button>
                </div>
            </div>

            <h5>Icon Buttons:</h5>
            <div class="d-flex justify-content-center align-items-center">
                <div class="button-cont mx-auto my-4 d-flex align-items-start flex-column flex-desk-row">
                    <button class="btn icon primary mx-1">
                        <i class="far fa-hashtag"></i>
                        <span>With Icon</span>
                    </button>
                    <button class="btn icon primary mx-1">
                        <span>With Icon</span>
                        <i class="far fa-hashtag"></i>
                    </button>
                    <button class="btn icon outline primary mx-1">
                        <span>With Icon</span>
                        <i class="far fa-hashtag"></i>
                    </button>
                    <button class="btn icon primary mx-1">
                        <span>With Icon</span>
                        <i class="far fa-hashtag fa-lg"></i>
                    </button>
                    <button class="btn icon primary mx-1">
                        <span>With Icon</span>
                        <i class="far fa-hashtag fa-2x"></i>
                    </button>
                    <button class="btn just-icon primary mx-1"><i class="far fa-hashtag"></i></button>
                    <button class="btn just-icon large primary mx-1"><i class="far fa-hashtag"></i></button>
                </div>
            </div>

            <h5>Rounded Buttons:</h5>
            <div class="d-flex justify-content-center align-items-center">
                <div class="button-cont mx-auto my-4">
                    <button class="btn rounded primary mx-1">Primary</button>
                    <button class="btn rounded info mx-1">Info</button>
                    <button class="btn rounded success mx-1">Success</button>
                    <button class="btn rounded warning mx-1">Warning</button>
                    <button class="btn rounded line danger mx-1">Danger</button>
                    <button class="btn rounded link mx-1">Link</button>
                </div>
            </div>

            <h5>Loading Buttons:</h5>
            <div class="button-cont mx-auto my-4">
                <button class="btn loading mx-1"></button>
                <button class="btn loading primary mx-1"></button>
                <button class="btn loading info mx-1"></button>
                <button class="btn loading success mx-1"></button>
                <button class="btn loading warning mx-1"></button>
                <button class="btn loading danger mx-1"></button>
                <button class="btn loading link mx-1"></button>
                <button class="btn loading small link mx-1"></button>
                <button class="btn loading large link mx-1"></button>
            </div>
        </div>

        <div class="col-5">
            <h5>Block Buttons:</h5>
            <div class="button-cont mx-auto my-2">
                <button class="btn block mx-1 my-2">Block</button>
                <button class="btn primary block mx-1 my-2">Block</button>
                <button class="btn rounded primary block mx-1 my-2">Block</button>
            </div>
        </div>
    </div>
</div>
