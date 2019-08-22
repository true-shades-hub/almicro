<?php include_once 'Super_Access/class.php'; 

//Object Created From Select Class
$Select = new Select;
// Fetch Products were pid
$fetch_products = $Select->p_were($_GET['fetch']);
$row_product = $fetch_products->fetch_assoc();

//fetch  products Subcategory 
$fetch_sub = $Select->Sub_were($row_product['subcatid']);
$row_subcate = $fetch_sub->fetch_assoc();
//fetch product Category
$fetch_cate = $Select->Category_were($row_product['catid']);
$row_cate = $fetch_cate->fetch_assoc();
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo  $row_product['product'] ." | " . $row_cate['category'] . " | Almicroinstruments Ambala | India " ;   ?></title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="metatag" content="<?php echo $row_product[titlewords] ?>" >
<meta name="keywords" content="<?php echo $row_product[keywords] ?>" >
<meta name="description" content="<?php echo $row_product[descr] ?>">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/course.css">
<link rel="stylesheet" type="text/css" href="styles/course_responsive.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 


</head>
<body>

<div class="super_container">

	<!-- Menu Header -->

	<?php  include_once('header.php')  ?>

	
	
	<!-- Home -->

	<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="#">Products</a></li>
                                
								<li><a href="products.php?fetch=<?php echo $row_cate[catid] ?>"><?php echo $row_cate[category] ?></a></li>
								<li><a href="products.php?fetchc=<?php echo $row_subcate[s_id] ?>&fetch=<?php echo $row_cate[catid] ?>"> <?php echo $row_subcate[subc_name] ?></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

	<!-- Course -->

	<div class="course">
		<div class="container">
			<div class="row roww1">

				<!-- Course -->
				<div class="col-lg-6">
					
					<div class="course_container">
						


						<!-- Course Image -->
						<div class="course_image" style=" text-align:center; " ><img  height="400px"  src="Super_Access/<?php echo $row_product[path] ?>" alt=""></div>

						<!-- Course Tabs -->
						
					</div>
				</div>

				<!-- Course Sidebar -->
				<div class="col-lg-6">
					<div class="sidebar">

						<!-- Feature -->
						<div class="sidebar_section">
                            <div class="sidebar_section_title"><?php echo $row_product[product] ?></div>
                            <hr>
                            
							<div class="sidebar_feature">
								
                                
                                <!-- Features -->
                                
								<div class="feature_list">

                                <form id="form_ajax"  >
                                <div class="form-group" >
                                        <label for="exampleInputPassword1">Name</label>
                                        <input type="text"  name="name" required class="form-control" id="name" placeholder=" eg: Jone Back">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" name="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="eg: Joneback@gmail.com">
                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Contact No.</label>
                                        <input type="tel"  name="contactno" class="form-control" id="Contact" placeholder=" eg: +1 123457998">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Addres</label>
                                        <input type="text" name="address" class="form-control" id="Addres" placeholder=" eg: Jone Back">
                                       
                                        <small id="emailHelp" class="form-text text-muted">We'll never Shere your personal-Information with anyone else.</small>
                                    </div>
                                 
                                    
                                    <button type="button" id="submit" name='getquote' class="butt">Get Quote</button>
                                    </form> 
                                    <small id="error" class="text-danger"> </small>
                                    <small id="success_message" class="text-success">   </small>
                                    <hr>
                                    <a href="Super_Access/<?php echo $row_product[clog_path] ?>" download><div class="butt1"><i class="fa fa-download"></i> Download Catalogue</div>  </a>             
                                      
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
            
            <div class="row roww2">

<!-- Course -->
<div class="col-lg-12">
    
    <div class="course_container">
        
        <!-- Course Tabs -->
        <div class="course_tabs_container">
            <div class="tabs d-flex flex-row align-items-center justify-content-start">
                <div class="tab active">description</div>
                
            </div>
            <div class="tab_panels">

                <!-- Description -->
                <div class="tab_panel active">
                    <div class="tab_panel_title"><?php echo $row_product[product] ?></div>
                    <div class="tab_panel_content">
                        <div class="tab_panel_text">
                            <p><?php echo $row_product[descr] ?></p>
                        </div>
                        <!--
                        <div class="tab_panel_section">
                            <div class="tab_panel_subtitle">Requirements</div>
                            <ul class="tab_panel_bullets">
                                <li>Lorem Ipsn gravida nibh vel velit auctor aliquet. Class aptent taciti sociosquad litora torquent.</li>
                                <li>Cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a.</li>
                                <li>Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat.</li>
                                <li>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</li>
                            </ul>
                        </div>
                        <div class="tab_panel_section">
                            <div class="tab_panel_subtitle">What is the target audience?</div>
                            <div class="tab_panel_text">
                                <p>This course is intended for anyone interested in learning to master his or her own body.This course is aimed at beginners, so no previous experience with hand balancing skillts is necessary Aenean viverra tincidunt nibh, in imperdiet nunc. Suspendisse eu ante pretium, consectetur leo at, congue quam. Nullam hendrerit porta ante vitae tristique. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
                            </div>
                        </div>
                        <div class="tab_panel_faq">
                            <div class="tab_panel_title">FAQ</div>

                             Accordions 
                            <div class="accordions">
                                
                                <div class="elements_accordions">

                                    <div class="accordion_container">
                                        <div class="accordion d-flex flex-row align-items-center"><div>Can I just enroll in a single course?</div></div>
                                        <div class="accordion_panel">
                                            <p>Lorem ipsun gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a.</p>
                                        </div>
                                    </div>

                                    <div class="accordion_container">
                                        <div class="accordion d-flex flex-row align-items-center active"><div>I'm not interested in the entire Specialization?</div></div>
                                        <div class="accordion_panel">
                                            <p>Lorem ipsun gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a.</p>
                                        </div>
                                    </div>

                                    <div class="accordion_container">
                                        <div class="accordion d-flex flex-row align-items-center"><div>What is the refund policy?</div></div>
                                        <div class="accordion_panel">
                                            <p>Lorem ipsun gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a.</p>
                                        </div>
                                    </div>

                                    <div class="accordion_container">
                                        <div class="accordion d-flex flex-row align-items-center"><div>What background knowledge is necessary?</div></div>
                                        <div class="accordion_panel">
                                            <p>Lorem ipsun gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a.</p>
                                        </div>
                                    </div>

                                    <div class="accordion_container">
                                        <div class="accordion d-flex flex-row align-items-center"><div>Do i need to take the courses in a specific order?</div></div>
                                        <div class="accordion_panel">
                                            <p>Lorem ipsun gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a.</p>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>-->
                    </div>
                </div>

                <!-- Curriculum
                <div class="tab_panel tab_panel_2">
                    <div class="tab_panel_content">
                        <div class="tab_panel_title">Student Microscope</div>
                        <div class="tab_panel_content">
                            <div class="tab_panel_text">
                                <p>Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                            </div>

                            <!-- Dropdowns
                            <ul class="dropdowns">
                                <li class="has_children">
                                    <div class="dropdown_item">
                                        <div class="dropdown_item_title"><span>Lecture 1:</span> Lorem Ipsn gravida nibh vel velit auctor aliquet.</div>
                                        <div class="dropdown_item_text">
                                            <p>Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus.</p>
                                        </div>
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="dropdown_item">
                                                <div class="dropdown_item_title"><span>Lecture 1.1:</span> Lorem Ipsn gravida nibh vel velit auctor aliquet.</div>
                                                <div class="dropdown_item_text">
                                                    <p>Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="dropdown_item">
                                                <div class="dropdown_item_title"><span>Lecture 1.2:</span> Lorem Ipsn gravida nibh vel velit auctor aliquet.</div>
                                                <div class="dropdown_item_text">
                                                    <p>Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus.</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has_children">
                                    <div class="dropdown_item">
                                        <div class="dropdown_item_title"><span>Lecture 2:</span> Lorem Ipsn gravida nibh vel velit auctor aliquet.</div>
                                        <div class="dropdown_item_text">
                                            <p>Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus.</p>
                                        </div>
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="dropdown_item">
                                                <div class="dropdown_item_title"><span>Lecture 2.1:</span> Lorem Ipsn gravida nibh vel velit auctor aliquet.</div>
                                                <div class="dropdown_item_text">
                                                    <p>Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="dropdown_item">
                                                <div class="dropdown_item_title"><span>Lecture 2.2:</span> Lorem Ipsn gravida nibh vel velit auctor aliquet.</div>
                                                <div class="dropdown_item_text">
                                                    <p>Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus.</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="dropdown_item">
                                        <div class="dropdown_item_title"><span>Lecture 3:</span> Lorem Ipsn gravida nibh vel velit auctor aliquet.</div>
                                        <div class="dropdown_item_text">
                                            <p>Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown_item">
                                        <div class="dropdown_item_title"><span>Lecture 4:</span> Lorem Ipsn gravida nibh vel velit auctor aliquet.</div>
                                        <div class="dropdown_item_text">
                                            <p>Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown_item">
                                        <div class="dropdown_item_title"><span>Lecture 5:</span> Lorem Ipsn gravida nibh vel velit auctor aliquet.</div>
                                        <div class="dropdown_item_text">
                                            <p>Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Reviews -
                <div class="tab_panel tab_panel_3">
                    <div class="tab_panel_title">Course Review</div>

                    <!-- Rating 
                    <div class="review_rating_container">
                        <div class="review_rating">
                            <div class="review_rating_num">4.5</div>
                            <div class="review_rating_stars">
                                <div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div>
                            </div>
                            <div class="review_rating_text">(28 Ratings)</div>
                        </div>
                        <div class="review_rating_bars">
                            <ul>
                                <li><span>5 Star</span><div class="review_rating_bar"><div style="width:90%;"></div></div></li>
                                <li><span>4 Star</span><div class="review_rating_bar"><div style="width:75%;"></div></div></li>
                                <li><span>3 Star</span><div class="review_rating_bar"><div style="width:32%;"></div></div></li>
                                <li><span>2 Star</span><div class="review_rating_bar"><div style="width:10%;"></div></div></li>
                                <li><span>1 Star</span><div class="review_rating_bar"><div style="width:3%;"></div></div></li>
                            </ul>
                        </div>
                    </div>
                    
                    <!-- Comments 
                    <div class="comments_container">
                        <ul class="comments_list">
                            <li>
                                <div class="comment_item d-flex flex-row align-items-start jutify-content-start">
                                    <div class="comment_image"><div><img src="images/comment_1.jpg" alt=""></div></div>
                                    <div class="comment_content">
                                        <div class="comment_title_container d-flex flex-row align-items-center justify-content-start">
                                            <div class="comment_author"><a href="#">Milley Cyrus</a></div>
                                            <div class="comment_rating"><div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div></div>
                                            <div class="comment_time ml-auto">1 day ago</div>
                                        </div>
                                        <div class="comment_text">
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have alteration in some form, by injected humour.</p>
                                        </div>
                                        <div class="comment_extras d-flex flex-row align-items-center justify-content-start">
                                            <div class="comment_extra comment_likes"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>15</span></a></div>
                                            <div class="comment_extra comment_reply"><a href="#"><i class="fa fa-reply" aria-hidden="true"></i><span>Reply</span></a></div>
                                        </div>
                                    </div>
                                </div>
                                <ul>
                                    <li>
                                        <div class="comment_item d-flex flex-row align-items-start jutify-content-start">
                                            <div class="comment_image"><div><img src="images/comment_2.jpg" alt=""></div></div>
                                            <div class="comment_content">
                                                <div class="comment_title_container d-flex flex-row align-items-center justify-content-start">
                                                    <div class="comment_author"><a href="#">John Tyler</a></div>
                                                    <div class="comment_rating"><div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div></div>
                                                    <div class="comment_time ml-auto">1 day ago</div>
                                                </div>
                                                <div class="comment_text">
                                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have alteration in some form, by injected humour.</p>
                                                </div>
                                                <div class="comment_extras d-flex flex-row align-items-center justify-content-start">
                                                    <div class="comment_extra comment_likes"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>15</span></a></div>
                                                    <div class="comment_extra comment_reply"><a href="#"><i class="fa fa-reply" aria-hidden="true"></i><span>Reply</span></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <div class="comment_item d-flex flex-row align-items-start jutify-content-start">
                                    <div class="comment_image"><div><img src="images/comment_3.jpg" alt=""></div></div>
                                    <div class="comment_content">
                                        <div class="comment_title_container d-flex flex-row align-items-center justify-content-start">
                                            <div class="comment_author"><a href="#">Milley Cyrus</a></div>
                                            <div class="comment_rating"><div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div></div>
                                            <div class="comment_time ml-auto">1 day ago</div>
                                        </div>
                                        <div class="comment_text">
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have alteration in some form, by injected humour.</p>
                                        </div>
                                        <div class="comment_extras d-flex flex-row align-items-center justify-content-start">
                                            <div class="comment_extra comment_likes"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>15</span></a></div>
                                            <div class="comment_extra comment_reply"><a href="#"><i class="fa fa-reply" aria-hidden="true"></i><span>Reply</span></a></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="add_comment_container">
                            <div class="add_comment_title">Add a review</div>
                            <div class="add_comment_text">You must be <a href="#">logged</a> in to post a comment.</div>
                        </div>
                    </div>
                </div>
-->
            </div>
        </div>
    </div>
</div>

<!-- Course Sidebar -->

<div class="team">
		<div class="team_background parallax-window" data-parallax="scroll" data-image-src="images/team_background.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Similar Producrs </h2>
						
					</div>
				</div>
			</div>
			<div class="row team_row">
				
				<!-- Team Item -->
                
                <?php
                $sim_p = $select->p_subwere($row_product[subcatid],$row_product[pid],4);
                
                while($row_s_product = $sim_p->fetch_assoc())
                { ?>
            

                <div class="col-lg-3 col-md-6 team_col">
					<div class="team_item">
						<div class="team_image" style="text-align:center;"; ><img height="180px"  src="Super_Access/<?php echo $row_s_product[path] ?>" alt=""></div>
						<div class="team_body">
							<div class="team_title"><a href="mainproduct.php?fetch=<?php echo "$row_s_product[pid]"; ?>"><?php echo $row_s_product[product] ?> </a></div>
							<div class="team_subtitle"></div>
							
						</div>
					</div>
				</div> 
                <?php
                 }
                ?>

			

			</div>
		</div>
	</div>
</div>
</div>
</div>

	<!-- Newsletter

	<div class="newsletter">
		<div class="newsletter_background" style="background-image:url(images/newsletter_background.jpg)"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter_container d-flex flex-lg-row flex-column align-items-center justify-content-start">

						<!-- Newsletter Content 
						<div class="newsletter_content text-lg-left text-center">
							<div class="newsletter_title">sign up for news and offers</div>
							<div class="newsletter_subtitle">Subcribe to lastest smartphones news & great deals we offer</div>
						</div>

						<!-- Newsletter Form 
						<div class="newsletter_form_container ml-lg-auto">
							<form action="#" id="newsletter_form" class="newsletter_form d-flex flex-row align-items-center justify-content-center">
								<input type="email" class="newsletter_input" placeholder="Your Email" required="required">
								<button type="submit" class="newsletter_button">subscribe</button>
							</form>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	-->
	

<!-- Footer -->
<script>  
 $(document).ready(function(){  
      $('#submit').click(function(){  
           var name = $('#name').val();  
           var email = $('#email').val();  
           var contact = $('#contact').val();  
           var address = $('#address').val();
           var submit = $('#submit').val();
           if(name == '' || email == '')  
           {  
                $('#error').html("All Fields are required");  
           }  
           else  
           {  
                $('#error').html('');  
                $.ajax({  
                     url:"Super_Access/ajax.php",  
                     method:"POST",  
                     data:{name:name, email:email,contact:contact,address:address,submit:submit,},  
                     success:function(data){  
                          $("form").trigger("reset");  
                          $('#success_message').fadeIn().html(data);  
                          setTimeout(function(){  
                               $('#success_message').fadeOut("Slow");  
                          }, 10000);  
                     }  
                });  
           }  
      });  
 });  
 </script>  
<?php  include_once('footer.php') ?>


<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="js/course.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
</body>
</html>