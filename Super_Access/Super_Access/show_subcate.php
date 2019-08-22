<?php
include('left-nav.php');
include('header.php');
$delete = new Delete;

if(isset($_POST['c_delete'])){//to run PHP script on submit
	if(!empty($_POST['check_list'])){
	// Loop to store and display values of individual checked checkbox.
	foreach($_POST['check_list'] as $selected){
	$delete->Subcategory($selected);
	}
	}
	}
 
?>

<div id="page-wrapper">
			<div class="main-page">
					<div class="tables">
					<div class="bs-example widget-shadow" data-example-id ="hoverable-table"  >
                        <h2>All Sub Category</h2>
                        <hr><form method= "post" >
						<table class="table table-bordered table-hover"> <thead> <tr> <th><input type="checkbox" onClick="toggle(this)"  value="All"><th>Sub Category Name</th> <th>Category Name</th> <th>Meta Title</th> <th>Meta Keywords</th> <th>Meta Discripation</th><th>Update</th></tr> </thead> <tbody> 
							<?php 
							$select = new Select;
							$res =  $select->Subcategory(); 
							while($row =$res->fetch_assoc())
							{
							
							echo"<tr> <th scope='row'> <input type='checkbox' name='check_list[]' value='$row[s_id]'> </th><th> $row[subc_name]</th><td>";
							 $fetch = $select->Category_were($row[catid])->fetch_assoc();	
							echo $fetch[category];
							 echo "</td> <td>$row[meta]</td> <td> $row[keywords]</td> <td>$row[descr]</td><th>  <button formaction='add_subcate.php?check=$row[s_id]'  type = 'submit'  class = 'btn btn-info'>Update</button></th> </tr> "; 
							}
						   ?>
							  </tbody> </table> 
							  <button type = 'submit' name ='c_delete' class = 'btn btn-danger'>Delete</button>
					</div>
</div>
        </div>
    </div>   
</div>      


<?php
include('footer.php');
?>