<?php

//Page variables
$pageData = [
	'pageTitle' => 'Button',
	'pageDescription' => '',
    'activePage' => 'button',
    'parentDirectory' => basename(__DIR__)
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
                    <button class="btn btn-light mx-1">Light</button>
                    <button class="btn btn-dark mx-1">Dark</button>
                    <button class="btn btn-black mx-1">Black</button>
                    <button class="btn btn-simple mx-1">Simple</button>
                </div>
            </div>

            <h5>Coloured Buttons:</h5>
            <div class="d-flex justify-content-center">
                <div class="button-cont mx-auto my-4">
                    <button class="btn btn-primary mx-1">Primary</button>
                    <button class="btn btn-info mx-1">Info</button>
                    <button class="btn btn-success mx-1">Success</button>
                    <button class="btn btn-warning mx-1">Warning</button>
                    <button class="btn btn-danger mx-1">Danger</button>
                    <button class="btn btn-link mx-1">Link</button>
                    <button class="btn btn-disabled mx-1">Disabled</button>
                </div>
            </div>

            <h5>Outlined Buttons:</h5>
            <div class="d-flex justify-content-center">
                <div class="button-cont mx-auto my-4">
                    <button class="btn btn-outline btn-primary mx-1">Primary</button>
                    <button class="btn btn-outline info mx-1">Info</button>
                    <button class="btn btn-outline success mx-1">Success</button>
                    <button class="btn btn-outline warning mx-1">Warning</button>
                    <button class="btn btn-outline danger mx-1">Danger</button>
                    <button class="btn btn-outline link mx-1">Link</button>
                </div>
            </div>

            <h5>Sized Buttons:</h5>
            <div class="d-flex justify-content-center">
                <div class="button-cont mx-auto my-4">
                    <button class="btn btn-small mx-1">Small</button>
                    <button class="btn mx-1">Default</button>
                    <button class="btn btn-large mx-1">Large</button>
                </div>
            </div>

            <h5>Icon Buttons:</h5>
            <div class="d-flex justify-content-center align-items-center">
                <div class="button-cont mx-auto my-4 d-flex align-items-start flex-column flex-desk-row">
                    <button class="btn btn-icon btn-primary mx-1">
                        <i class="far fa-hashtag"></i>
                        <span>With Icon</span>
                    </button>
                    <button class="btn btn-icon btn-primary mx-1">
                        <span>With Icon</span>
                        <i class="far fa-hashtag"></i>
                    </button>
                    <button class="btn btn-icon btn-outline primary mx-1">
                        <span>With Icon</span>
                        <i class="far fa-hashtag"></i>
                    </button>
                    <button class="btn btn-icon btn-primary mx-1">
                        <span>With Icon</span>
                        <i class="far fa-hashtag fa-lg"></i>
                    </button>
                    <button class="btn btn-icon btn-primary mx-1">
                        <span>With Icon</span>
                        <i class="far fa-hashtag fa-2x"></i>
                    </button>
                    <button class="btn btn-justicon btn-primary mx-1"><i class="far fa-hashtag"></i></button>
                    <button class="btn btn-justicon large btn-primary mx-1"><i class="far fa-hashtag"></i></button>
                </div>
            </div>

            <h5>Rounded Buttons:</h5>
            <div class="d-flex justify-content-center align-items-center">
                <div class="button-cont mx-auto my-4">
                    <button class="btn btn-rounded btn-primary mx-1">Primary</button>
                    <button class="btn btn-rounded btn-info mx-1">Info</button>
                    <button class="btn btn-rounded btn-success mx-1">Success</button>
                    <button class="btn btn-rounded btn-warning mx-1">Warning</button>
                    <button class="btn btn-rounded btn-danger mx-1">Danger</button>
                    <button class="btn btn-rounded btn-link mx-1">Link</button>
                </div>
            </div>

            <h5>Loading Buttons:</h5>
            <div class="button-cont mx-auto my-4">
                <button class="btn btn-loading mx-1"></button>
                <button class="btn btn-loading btn-outline btn-primary mx-1"></button>
                <button class="btn btn-loading btn-info mx-1"></button>
                <button class="btn btn-loading btn-success mx-1"></button>
                <button class="btn btn-loading btn-warning mx-1"></button>
                <button class="btn btn-loading btn-danger mx-1"></button>
                <button class="btn btn-loading btn-link mx-1"></button>
                <button class="btn btn-loading btn-small btn-link mx-1"></button>
                <button class="btn btn-loading btn-large btn-link mx-1"></button>
            </div>
        </div>

        <div class="col-5">
            <h5>Block Buttons:</h5>
            <div class="button-cont mx-auto my-2">
                <button class="btn btn-block mx-1 my-2">Block</button>
                <button class="btn btn-block btn-primary mx-1 my-2">Block</button>
                <button class="btn btn-block btn-primary btn-rounded mx-1 my-2">Block</button>
            </div>
        </div>
    </div>
</div>
