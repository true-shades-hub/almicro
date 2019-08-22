<?php
include('left-nav.php');
include('header.php');
$delete = new Delete;

if(isset($_POST['c_delete'])){//to run PHP script on submit
	if(!empty($_POST['check_list'])){
	// Loop to store and display values of individual checked checkbox.
	foreach($_POST['check_list'] as $selected){
	$delete->Product($selected);
	}
	}
	}
 
?>

<div id="page-wrapper">
			<div class="main-page">
					<div class="tables">
					<div class="bs-example widget-shadow" data-example-id ="hoverable-table"  >
                        <h2>Products</h2>
                        <hr><form method= "post" >
						<table class="table table-bordered table-hover"> <thead> <tr> <th><input type="checkbox" name="check_list[]" value="All"><th> Name</th> <th>Category</th> <th>sub Category</th> <th>Product Image</th> <th>Cata-log image</th><th>Update</th></tr> </thead> <tbody> 
							<?php 
							$select = new Select;
							$res =  $select->Product(); 
							while($row =$res->fetch_assoc())
							{
							
							echo"<tr> <th scope='row'> <input type='checkbox' name='check_list[]' value='$row[pid]'> </th><th> $row[product]</th><td>";
							$fetch = $select->Category_were($row[catid])->fetch_assoc();	
							echo $fetch[category]; 
							echo "</td> <td>";
							 $fetch_sub =  $select->Subc_were($row[subcatid])->fetch_assoc();
							echo $fetch_sub[subc_name];
                             echo "</td> <td><img width ='auto' height= '50px'  src ='$row[path]'></td> <td> <img width ='auto'  height= '50px'src ='$row[clog_path]'></td> <td> <button formaction='addproduct.php?check=$row[pid]'  type = 'submit'  class = 'btn btn-info'>Update</button></td> </tr> "; 
							}
						   ?>
							  </tbody> </table> 
							  <button type = 'submit' name ='c_delete' class = 'btn btn-danger'>Danger Button</button>
					</div>
</div>
        </div>
    </div>   
</div>      

<?php
include('footer.php');
?>