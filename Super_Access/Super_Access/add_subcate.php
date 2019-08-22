<?php
include('left-nav.php');
include('header.php');


if(isset($_POST['insert']))
{
$obj = new Insert;
$obj->Sub_Category($_POST['name'],$_POST['Cate_id'],$_POST['meta'],$_POST['key'],$_POST['discr']);
}
if(isset($_POST['Update']))
{
$update = new Update ;
$update->Subcategory($_GET['check'],$_POST['Cate_id'],$_POST['name'], $_POST['meta'],$_POST['key'],$_POST['discr']);
echo $update->update;
}
?>


<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
				<br><br>
					 <?php
					 if($_GET[check])
					 {
						
						$upd = new Select;	
						$fetch = $upd->Subc_were($_GET['check'])->fetch_assoc();
						 ?>
						 <div class="form-three widget-shadow">
					
                        <h3 class="hdg" > Update Sub-Category</h3>
                        <hr>
							<div class=" panel-body-inputin">
								<form method="post" class="form-horizontal">
                                <div class="form-group">
										<label class="col-md-2 control-label">Sub Category Name </label>
										<div class="col-md-8">
											<div class="input-group">							
												<span class="input-group-addon">
													<i class="fa  fa-text-width"></i>
												</span>
												
												<input value ="<?php echo $fetch[subc_name] ?>" name="name" type="text" required class="form-control1" placeholder="Sub Category Name">
											</div>
                                        </div>
                                        <div class="col-sm-2">
											<p class="help-block"> * Require Field</p>
                                        </div>    
                                    </div>
                                    <div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Select Category </label>
									<div class="col-sm-8"><select name="Cate_id" value ='<?php echo $fetch[catid] ?>' id="selector1" class="form-control1" required="" >
                                        <option>Please Select Category</option>
                                        <?php 
                                        $select = new Select;
						            	$res =  $select->Category();
						            	 
							            while($row =$res->fetch_assoc())
							            {

						            	echo"	<option "; if($row[catid]==$fetch[catid]){echo "selected";} echo " value ='$row[catid]' >$row[category]</option>"; 
							}  ?>
										
                                    </select></div>
                                    <div class="col-sm-2">
											<p class="help-block"> * Require Field</p>
                                        </div>
								</div>
                                    <div class="form-group">
										<label class="col-md-2 control-label">Meta Tags </label>
										<div class="col-md-8">
											<div class="input-group">							
												<span class="input-group-addon">
													<i class="fa  fa-text-width"></i>
												</span>
												<input value ="<?php echo $fetch[meta] ?>" name="meta" type="text" class="form-control1" placeholder="Meta Tags">
											</div>
										</div>
                                    </div>
                                    <div class="form-group">
										<label class="col-md-2 control-label">Keywords</label>
										<div class="col-md-8">
											<div class="input-group">							
												<span class="input-group-addon">
													<i class="fa  fa-text-width"></i>
												</span>
												<input name="key"  value ="<?php echo $fetch[keywords] ?>"  type="text" class="form-control1" placeholder="Keywors">
											</div>
										</div>
                                    </div>
                                    <div class="form-group">
										<label class="col-md-2 control-label">Discripation </label>
										<div class="col-md-8">
											<div class="input-group">							
												<span class="input-group-addon">
													<i class="fa  fa-text-width"></i>
												</span>
												<input name="discr"  value ="<?php echo $fetch[descr] ?>"    class="form-control1" type="text" placeholder="Discripation">
											</div>
                                        </div>
                                     
                                    </div>
                                    <div class="col-sm-offset-2"> <button  name="Update" type="submit" class="btn btn-primary">Update</button> </div>
							</div>
						</form>
						</div>
					</div>
					
						 
						 <?php
					 }
					 else{
						?>
						<div class="form-three widget-shadow">
						<?php if(isset($_POST['insert'])){echo $obj->display;} ?>
                        <h3 class="hdg" > Insert New Sub Category</h3>
                        <hr>
							<div class=" panel-body-inputin">
								<form method="post" class="form-horizontal">
                                <div class="form-group">
										<label class="col-md-2 control-label">Sub Category Name </label>
										<div class="col-md-8">
											<div class="input-group">							
												<span class="input-group-addon">
													<i class="fa  fa-text-width"></i>
												</span>
												<input name="name" type="text" required class="form-control1" placeholder="Sub Category Name">
											</div>
                                        </div>
                                        <div class="col-sm-2">
											<p class="help-block"> * Require Field</p>
                                        </div>    
                                    </div>
                                    <div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Select Category </label>
									<div class="col-sm-8"><select onload=""; name="Cate_id" id="selector1" class="form-control1" required="" >
                                        <option>Please Select Category</option>
                                        <?php 
                                        $select = new Select;
						            	$res =  $select->Category();
						            	 
							            while($row =$res->fetch_assoc())
							            {

						            	echo"	<option  value ='$row[catid]' >$row[category]</option>"; 
							}  ?>
										
                                    </select></div>
                                    <div class="col-sm-2">
											<p class="help-block"> * Require Field</p>
                                        </div>
								</div>
                                    <div class="form-group">
										<label class="col-md-2 control-label">Meta Tags </label>
										<div class="col-md-8">
											<div class="input-group">							
												<span class="input-group-addon">
													<i class="fa  fa-text-width"></i>
												</span>
												<input name="meta" type="text" class="form-control1" placeholder="Meta Tags">
											</div>
										</div>
                                    </div>
                                    <div class="form-group">
										<label class="col-md-2 control-label">Keywords</label>
										<div class="col-md-8">
											<div class="input-group">							
												<span class="input-group-addon">
													<i class="fa  fa-text-width"></i>
												</span>
												<input name="key" type="text" class="form-control1" placeholder="Keywors">
											</div>
										</div>
                                    </div>
                                    <div class="form-group">
										<label class="col-md-2 control-label">Discripation </label>
										<div class="col-md-8">
											<div class="input-group">							
												<span class="input-group-addon">
													<i class="fa  fa-text-width"></i>
												</span>
												<input name="discr"  class="form-control1" type="text" placeholder="Discripation">
											</div>
                                        </div>
                                     
                                    </div>
                                    <div class="col-sm-offset-2"> <button  name="insert" type="submit" class="btn btn-default">Insert</button> </div>
							</div>
						</form>
						</div>
					</div>
					
						<?php

					 }
					 ?>
        </div>
    </div>   
</div>      
<script  >

</script>
<?php
include('footer.php');
?>