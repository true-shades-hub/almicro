<?php
include('left-nav.php');
include('header.php');


if(isset($_POST['insert']))
{
$img = $_FILES['address']['name'];
move_uploaded_file($_FILES['address']['tmp_name'],"uploads/banner/".$img);
$img = "uploads/banner/" . $img ;
$obj = new Insert;
$obj->Banner($_POST['b_name'],$img);

}
if(isset($_POST['delete'])){//to run PHP script on submit
	if(!empty($_POST['check_list'])){
    // Loop to store and display values of individual checked checkbox.
    $delete = new Delete;
	foreach($_POST['check_list'] as $selected){
        echo $selected;
	$delete->Banner($selected);
	}
	}
	}
 

?>

<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
						<div class="form-three widget-shadow">
						<?php if(isset($_POST['insert'])){echo $obj->display;} ?>
                        <h3 class="hdg" > Insert New Banner</h3>
                        <hr>
							<div class=" panel-body-inputin">
								<form method="post" enctype="multipart/form-data" class="form-horizontal">
                                <div class="form-group">
										<label class="col-md-2 control-label">Banner Tittle</label>
										<div class="col-md-8">
											<div class="input-group">							
												<span class="input-group-addon">
													<i class="fa  fa-text-width"></i>
												</span>
												<input name="b_name" type="text" required class="form-control1" placeholder="Category Name">
											</div>
                                        </div>
                                        <div class="col-sm-2">
											<p class="help-block"> * Require Field</p>
										</div>
                                    </div>
                                    <div class="form-group">
										<label class="col-md-2 control-label">Banner Image</label>
										<div class="col-md-3">
											<div class="input-group">							
												<span class="input-group-addon">
													<i class="fa   fa-paperclip"></i>
												</span>
												<input name="address" type="file" required class="form-control1" placeholder="Category Name">
											</div>
                                        </div>
                                        <div class="col-sm-2">
											<p class="help-block"> * Require Field</p>
										</div>
									</div>
                                    <div class="col-sm-offset-2"> <button  name="insert" type="submit" class="btn btn-default">Insert</button> </div>
                            </div>
                            
						</form>
						</div>
					</div>
					
        </div>
        <div class="tables">
					<div class="table-responsive bs-example widget-shadow">
                        <h2>Banners</h2>
						<hr>
						<form method= "post" >
						
						<table class="table table-bordered"> <thead> <tr> <th><input type="checkbox" name="check_list[]" value="All"></th> <th>Banner Title</th> <th> Image </th></tr> </thead> <tbody> 
							<?php 
						
							$select = new Select;
							$res =  $select->Banner();
							 echo $res->num_rows;
							while($row =$res->fetch_assoc())
							{

							echo"<tr> <th scope='row'> <input type='checkbox' name='check_list[]' value='$row[b_id]'></th> <td> $row[b_titile]</td> <td> 
                            <img src ='$row[b_url]' alt = '$row[b_titile]' height = 'auto' width ='100px' >
                                </td> </tr> "; 
							}
                           ?></tbody> </table>
							  <button type = 'submit' name ='delete' class = 'btn btn-danger'>Danger Button</button>
						</form> 
					</div>
</div>
        </div>


    </div>   
</div>      

<?php
include('footer.php');
?>