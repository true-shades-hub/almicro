<?php
include('left-nav.php');
include('header.php');

$delete = new Delete;

if(isset($_POST['c_delete'])){//to run PHP script on submit
	if(!empty($_POST['check_list'])){
	// Loop to store and display values of individual checked checkbox.
	foreach($_POST['check_list'] as $selected){
	$delete->Category($selected);
	}
	}
	}
 
?>
		<!-- main content start-->
		<br><br><br>

		<div id="page-wrapper">
			<div class="main-page">
			
			</div>
		</div>			

<?php

include('footer.php');
?>