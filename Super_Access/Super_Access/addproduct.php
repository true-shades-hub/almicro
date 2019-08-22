<?php
include('left-nav.php');
include('header.php');


if(isset($_POST['insert']))
{
$obj = new Insert;
$pro_img = $_FILES['url']['name'];
move_uploaded_file($_FILES['url']['tmp_name'],"uploads/products/".$pro_img);
$pro_img = "uploads/products/" . $pro_img ;
$cate_img = $_FILES['clog_url']['name'];
move_uploaded_file($_FILES['clog_url']['tmp_name'],"uploads/products/c_log/".$cate_img);
$cate_img = "uploads/products/c_log/" . $cate_img ;
$obj->Product($_POST['name'],$_POST['Cate_id'],$_POST['subcate_id'],$pro_img,$_POST['meta'],$_POST['key'],$_POST['discr'],$_POST['order'],$cate_img);
}
?>

<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
						<?php if($_GET['check']){
						$upd1 = new Select;	
						$fetch = $upd1->p_were($_GET['check'])->fetch_assoc();
// Update Products Code And Object Create 
							if($_FILES['url']['name']){
								$pro_img = $_FILES['url']['name'];
								move_uploaded_file($_FILES['url']['tmp_name'],"uploads/products/".$pro_img);
								$pro_img = "uploads/products/" . $pro_img ;
							}
							else
							{
								$pro_img =$fetch[path]	;
							}
							if($_FILES['clog_url']['name']){
								
							$cate_img = $_FILES['clog_url']['name'];
							move_uploaded_file($_FILES['clog_url']['tmp_name'],"uploads/products/c_log/".$cate_img);
							$cate_img = "uploads/products/c_log/" . $cate_img ;
							}
							else
							{
								$cate_img = $fetch[clog_path];
							}
							$update = new Update ;
							$update->Product($_GET[check],$_POST['subcate_id'],$_POST['Cate_id'],$_POST['name'],$pro_img,$_POST['orders'],$_POST['meta'],$_POST['key'],$_POST['discr'],$cate_img)


?>
							<div class="form-three widget-shadow">
						<?php if(isset($_POST['insert'])){echo $obj->$display;} ?>
                        <h3 class="hdg" > Update New Product</h3>
                        <hr>
							<div class=" panel-body-inputin">
								<form method="post" enctype="multipart/form-data" class="form-horizontal">
                                <div class="form-group">
										<label class="col-md-2 control-label">Product  Name </label>
										<div class="col-md-8">
											<div class="input-group">							
												<span class="input-group-addon">
													<i class="fa  fa-text-width"></i>
												</span>
												<input value ="<?php echo $fetch[product] ?>" name="name" type="text" required class="form-control1" placeholder="Product  Name">
											</div>
                                        </div>
                                        <div class="col-sm-2">
											<p class="help-block"> * Require Field</p>
                                        </div>    
                                    </div>
									<div class="form-group">
										<label class="col-md-2 control-label">Product Order</label>
										<div class="col-md-8">
											<div class="input-group">							
												<span class="input-group-addon">
													<i class="fa  fa-text-width"></i>
												</span>
												<input value ="<?php echo $fetch[orders] ?>" name="orders" type="text" required class="form-control1" placeholder="Product Order">
											</div>
                                        </div>
                                        <div class="col-sm-2">
											<p class="help-block"> * Require Field</p>
                                        </div>    
                                    </div>
                                    <div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Select Category </label>
									<div class="col-sm-8"><select onchange ="myfun(this.value)" name="Cate_id" id="selector1 dataget" class="form-control1" required="" >
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
									<label for="selector1" class="col-sm-2 control-label">Select Sub Category </label>
									<div class="col-sm-8"><select name="subcate_id" id="dataget" class="form-control1" required="" >
                                        <option>Please Select  Sub Category</option>
										<?php 
                                        $select = new Select;
						            	$res =  $select->Sub_were($fetch[catid]);
						            	 
							            while($row =$res->fetch_assoc())
							            {

						            	echo"	<option "; if($row[s_id]==$fetch[subcatid]){echo "selected";} echo " value ='$row[s_id]' >$row[subc_name]</option>"; 
							}  ?>
										
                                    </select></div>
                                    <div class="col-sm-2">
											<p class="help-block"> * Require Field</p>
                                        </div>
								</div>
								<div class="form-group">
										<label class="col-md-2 control-label">Discripation </label>
										<div class="col-md-8">
											<div class="input-group">							
												<span class="input-group-addon">
													<i class="fa  fa-text-width"></i>
												</span>
												<textarea name="discr" value ="<?php echo $fetch[descr] ?>"  class="" placeholder="Discripation"><?php echo $fetch[descr] ?></textarea>
											</div>
                                        </div>
                                     
                                    </div>
                                    <div class="form-group">
										<label class="col-md-2 control-label">Meta Tags </label>
										<div class="col-md-8">
											<div class="input-group">							
												<span class="input-group-addon">
													<i class="fa  fa-text-width"></i>
												</span>
												<input value ="<?php echo $fetch[titlewords] ?>" name="meta" type="text" class="form-control1" placeholder="Meta Tags">
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
												<input name="key" value ="<?php echo $fetch[keywords] ?>"  type="text" class="form-control1" placeholder="Keywors">
											</div>
										</div>
                                    </div>
                                    
									
                                    <div class="form-group">
										<label class="col-md-2 control-label">Product Image </label>
										<div class="col-md-8">
											<div class="input-group">							
												<span class="input-group-addon">
													<i class="fa  fa-text-width"></i>
												</span>
												<input name="url" onchange="readURL(this);" value ="<?php echo $fetch[path] ?>" class="form-control1" type="file" placeholder="">
												<img id ="pr_img" src="<?php echo $fetch[path] ?>" height ="100px" alt="">

											</div>
                                        </div>
                                     
                                    </div>
									<div class="form-group">
										<label class="col-md-2 control-label">Catelog File </label>
										<div class="col-md-8">
											<div class="input-group">							
												<span class="input-group-addon">
													<i class="fa  fa-text-width"></i>
												</span>
												
												<input onchange="readURL1(this);" name="clog_url" value ="<?php echo $fetch[clog_path] ?>"  class="form-control1" type="file">
												<img id="clog_img" src="<?php  echo $fetch[clog_path] ?>" height ="100px" alt="">
											</div>
                                        </div>
                                     
                                    </div>
                                    <div class="col-sm-offset-2"> <button  name="Update" type="submit" class="btn btn-default">Update</button> </div>
							</div>
						</form>
						</div>
					</div>
<!--- Update Code Ended -->					
							
							<?php
// Product Insert Code Started Here							
						} else {  ?>
						<div class="form-three widget-shadow">
						<?php if(isset($_POST['insert'])){echo $obj->$display;} ?>
                        <h3 class="hdg" > Insert New Product</h3>
                        <hr>
							<div class=" panel-body-inputin">
								<form method="post" enctype="multipart/form-data" class="form-horizontal">
                                <div class="form-group">
										<label class="col-md-2 control-label">Product  Name </label>
										<div class="col-md-8">
											<div class="input-group">							
												<span class="input-group-addon">
													<i class="fa  fa-text-width"></i>
												</span>
												<input name="name" type="text" required class="form-control1" placeholder="Product  Name">
											</div>
                                        </div>
                                        <div class="col-sm-2">
											<p class="help-block"> * Require Field</p>
                                        </div>    
                                    </div>
                                    <div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Select Category </label>
									<div class="col-sm-8"><select onchange ="myfun(this.value)" name="Cate_id" id="selector1 dataget" class="form-control1" required="" >
                                        <option>Please Select Category</option>
                                        <?php 
                                        $select = new Select;
						            	$res =  $select->Category();
						            	 
							            while($row =$res->fetch_assoc())
							            {

						            	echo"	<option value ='$row[catid]' >$row[category]</option>"; 
							}  ?>
										
                                    </select></div>
                                    <div class="col-sm-2">
											<p class="help-block"> * Require Field</p>
                                        </div>
                                </div>
                                <div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Select Sub Category </label>
									<div class="col-sm-8"><select name="subcate_id" id="dataget" class="form-control1" required="" >
                                        <option>Please Select  Sub Category</option>
                                     
										
                                    </select></div>
                                    <div class="col-sm-2">
											<p class="help-block"> * Require Field</p>
                                        </div>
								</div>
								<div class="form-group">
										<label class="col-md-2 control-label">Discripation </label>
										<div class="col-md-8">
											<div class="input-group">							
												<span class="input-group-addon">
													<i class="fa  fa-text-width"></i>
												</span>
												<textarea name="discr"  class="" placeholder="Discripation"></textarea>
											</div>
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
										<label class="col-md-2 control-label">Product Image </label>
										<div class="col-md-8">
											<div class="input-group">							
												<span class="input-group-addon">
													<i class="fa  fa-text-width"></i>
												</span>
												<input name="url"    class="form-control1" type="file" placeholder="">
											</div>
                                        </div>
                                     
                                    </div>
									<div class="form-group">
										<label class="col-md-2 control-label">Catelog File </label>
										<div class="col-md-8">
											<div class="input-group">							
												<span class="input-group-addon">
													<i class="fa  fa-text-width"></i>
												</span>
												<input name="clog_url"  class="form-control1" type="file" placeholder="">
											</div>
                                        </div>
                                     
                                    </div>
                                    <div class="col-sm-offset-2"> <button  name="insert" type="submit" class="btn btn-default">Insert</button> </div>
							</div>
						</form>
						</div>
					</div>
						<?php } ?>
        </div>
    </div>   
</div>      
<script type ="text/javascript" >
    function myfun(datavalue){        
        $.ajax({
            url: 'ajax.php',
            type: 'POST',
            data: { datapost : datavalue },

            success : function(result){
                $('#dataget').html(result);
            }
        });

    } 

</script>

<script>
function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#pr_img')
                    .attr('src', e.target.result)
                    .width(auto)
                    .height(100);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
	function readURL1(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#clog_img')
                    .attr('src', e.target.result)
                    .width(auto)
                    .height(100);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
<?php
include('footer.php');
?>