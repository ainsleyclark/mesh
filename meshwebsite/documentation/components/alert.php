<?php

//Page variables
$pageData = [
	'pageTitle' => 'Alert',
	'pageDescription' => '',
	'activePage' => 'alert',
]; 

?>

<?php include_once('../../partials/header.php'); ?>
<?php include_once('../../partials/sidenav.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-8">
            <div class="spacer-100"></div>
            <div class="alert success d-flex justify-content-between align-items-center">
                <div class="alert-cont">
                    <i class="fas fa-check mr-2"></i>
                    <span class="">Success Alert:</span>
                    <span class="t-light"> Congratulations you just won a free holiday!</span>
                </div>
                <i class="fas fa-times"></i>
            </div>
        </div>
    </div>
</div>



<?php include_once('../../partials/smallnav.php'); ?>
<?php include_once('../../partials/footer.php'); ?>
