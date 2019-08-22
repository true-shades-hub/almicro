<?php
include('left-nav.php');
include('header.php');


if(isset($_POST['c_insert']))
{
$obj = new Insert;
$obj->Category($_POST['c_name'],$_POST['c_meta'],$_POST['c_key'],$_POST['c_discr']);
}
if(isset($_POST['Update']))
{
$update = new Update ;
$update->Category($_GET['check'],$_POST['c_name'],$_POST['c_meta'],$_POST['c_key'],$_POST['c_discr']);
echo $update->update;
}
?>

<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<br><br><br>
						<div class="form-three widget-shadow">
						<?php if(isset($_POST['c_insert'])){echo $obj->display;} ?>
                        
						<?php  
						if($_GET['check'])
						{
							$upd = new Select;
							
							$fetch = $upd->Category_were($_GET['check'])->fetch_assoc();	
							?> <h3 class="hdg" >Update Category </h3>
								<hr>
							<div class=" panel-body-inputin">
								<form method="post" class="form-horizontal">
                                <div class="form-group">
										<label class="col-md-2 control-label">Category Name </label>
										<div class="col-md-8">
											<div class="input-group">							
												<span class="input-group-addon">
													<i class="fa  fa-text-width"></i>
												</span>
												<input name="c_name" type="text" required class="form-control1" value ='<?php echo $fetch[category]?>' placeholder="Category Name">
											</div>
                                        </div>
                                        <div class="col-sm-2">
											<p class="help-block"> * Require Field</p>
										</div>
									</div><div class="form-group">
										<label class="col-md-2 control-label">Meta Tags </label>
										<div class="col-md-8">
											<div class="input-group">							
												<span class="input-group-addon">
													<i class="fa  fa-text-width"></i>
												</span>
												<input name="c_meta" value ='<?php echo $fetch[titlewords]  ?>' type="text" class="form-control1" placeholder="Meta Tags">
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
												<input value ='<?php echo $fetch[keywords]  ?>' name="c_key" type="text" class="form-control1" placeholder="Keywors">
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
												<input name="c_discr" value ='<?php echo $fetch[descr]  ?>'   class="form-control1" type="text" placeholder="Discripation">
											</div>
                                        </div>
                                     
                                    </div>
                                    <div class="col-sm-offset-2"> <button   name="Update" type="submit" class="btn btn-default">Update</button> </div>
							</div>
						</form>
						</div>
							
							<?php
						}
						else
						{
							?> <h3 class="hdg" >Add Category </h3>
								<hr>
							<div class=" panel-body-inputin">
								<form method="post" class="form-horizontal">
                                <div class="form-group">
										<label class="col-md-2 control-label">Category Name </label>
										<div class="col-md-8">
											<div class="input-group">							
												<span class="input-group-addon">
													<i class="fa  fa-text-width"></i>
												</span>
												<input name="c_name" type="text" required class="form-control1" placeholder="Category Name">
											</div>
                                        </div>
                                        <div class="col-sm-2">
											<p class="help-block"> * Require Field</p>
										</div>
									</div><div class="form-group">
										<label class="col-md-2 control-label">Meta Tags </label>
										<div class="col-md-8">
											<div class="input-group">							
												<span class="input-group-addon">
													<i class="fa  fa-text-width"></i>
												</span>
												<input name="c_meta" type="text" class="form-control1" placeholder="Meta Tags">
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
												<input name="c_key" type="text" class="form-control1" placeholder="Keywors">
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
												<input name="c_discr"  class="form-control1" type="text" placeholder="Discripation">
											</div>
                                        </div>
                                     
                                    </div>
                                    <div class="col-sm-offset-2"> <button  name="c_insert" type="submit" class="btn btn-default">Insert</button> </div>
							</div>
						</form>
						</div><?php
						}
						?>
						<hr>
												</div>
					
        </div>
    </div>   
</div>      

<?php
include('footer.php');
?>