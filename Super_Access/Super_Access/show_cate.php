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

<div id="page-wrapper">
			<div class="main-page">
					<div class="tables">
					<div class="table-responsive bs-example widget-shadow">
                        <h2>All Category</h2>
						<hr>
						<form method= "post" action ='update.php' >
						
						<table class="table table-bordered"> <thead> <tr> <th><input type="checkbox" name="check_list[]" value="All"></th> <th>Category Name</th> <th>Meta Title</th> <th>Meta Keywords</th> <th>Meta Discripation</th> <th>Update</th> </tr> </thead> <tbody> 
							<?php 
						
							$select = new Select;
							$res =  $select->Category();
							 
							while($row =$res->fetch_assoc())
							{

							echo"<tr> <th scope='row'> <input type='checkbox' name='check_list[]' value='$row[catid]'></th> <td> $row[category]</td> <td>$row[titlewords]</td> <td> $row[keywords]</td> <td>$row[descr]</td> <th>  <button formaction='add_cate.php?check=$row[catid]'  type = 'submit'  class = 'btn btn-info'>Update</button></th> </tr> "; 
							}
						   ?>
							  </tbody> </table>
							  <button type = 'submit' name ='c_delete' class = 'btn btn-danger'>Danger Button</button>
						</form> 
					</div>
</div>
        </div>
    </div>   
</div>      

<?php

include('footer.php');
?>