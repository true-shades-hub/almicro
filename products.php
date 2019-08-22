<?php include_once 'Super_Access/class.php'; 
$Select = new Select;
$fetch_sub = $Select->Sub_were($_GET['fetch']);
$fetch_cate = $Select->Category_were($_GET['fetch']);
$row_cate = $fetch_cate->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $row_cate[titlewords] ?> | <?php echo $row_cate[category] ?> | Almicro Instrument | Ambala Cantt | india.  </title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="meta" content="<?php echo $row_cate[titlewords] ?>" >
<meta name="keywords" content="<?php echo $row_cate[keywords] ?>" >
<meta name="description" content="<?php echo $row_cate[descr] ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>
<?php  include_once('header.php') ;?>
<div class="super_container">

	<!-- Menu Header -->

	<!-- Home -->

	<div class="events">
		<div class="container">			
			<div class="row events_row">
            
				<!-- Categories -->
                <div class="col-lg-3 event_col">
                <h3>Sub-Categories</h3>
                <hr>
                <ul class="catside catlink">
				<?php
				$getfetch =	$_GET['fetch'];
				while($row =$fetch_sub->fetch_assoc())
			    
				{
					echo " <li><a href='products.php?fetch=$getfetch&fetchc=$row[s_id]'>$row[subc_name]</a></li>";
				}
				?>
                
                    
                </ul>
											
                </div>

<?php  
if($_GET['fetchc'])
{
	$fetch_products = $Select->p_subwere($_GET['fetchc'],0,999999);
	while($rowp =$fetch_products->fetch_assoc())
	{ ?>

<div class="col-lg-3 event_col" style="padding:0px 0px 35px 0px;">
					<div class="event event_left1">
						<div class="event_image" style=" text-align:center; " ><img height='300px' width ="auto" src="Super_Access/<?php echo "$rowp[path]"; ?>" alt=""></div>
						<div class="event_body d-flex flex-row align-items-start justify-content-start">
							
							<div class="event_content">
								<div class="pname"><?php echo "$rowp[product]"; ?></div>
								
                            </div>
                            
                        </div>
                        <a href="mainproduct.php?fetch=<?php echo "$rowp[pid]"; ?> " class="event_date1">
                           
								<div class="d-flex flex-column align-items-center justify-content-center trans_200">
									<div class="pview trans_200">view details</div>		
								</div>
                        </a> 
                    </div>
				</div>



<?php
 }}
else{
	$fetch_products = $Select->p_cwere($_GET['fetch']);
	while($rowp =$fetch_products->fetch_assoc())
	{
	?>

<div class="col-lg-3 event_col" style="padding:0px 0px 35px 0px;">
					<div class="event event_left1">
						<div class="event_image" style=" text-align:center; " ><img height='300px' width ="auto" src="Super_Access/<?php echo "$rowp[path]"; ?>" alt=""></div>
						<div class="event_body d-flex flex-row align-items-start justify-content-start">
							
							<div class="event_content">
								<div class="pname"><?php echo "$rowp[product]"; ?></div>
								
                            </div>
                            
                        </div>
                        <a href="mainproduct.php?fetch=<?php echo "$rowp[pid]"; ?> " class="event_date1">
                           
								<div class="d-flex flex-column align-items-center justify-content-center trans_200">
									<div class="pview trans_200">view details</div>		
								</div>
                        </a> 
                    </div>
				</div>
<?php 
}
?>
		
<?php } ?>
<!-- Product -->
	<!-- Latest News 

	<div class="news">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Latest News</h2>
						<div class="section_subtitle"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel gravida arcu. Vestibulum feugiat, sapien ultrices fermentum congue, quam velit venenatis sem</p></div>
					</div>
				</div>
			</div>
			<div class="row news_row">
				<div class="col-lg-7 news_col">
					
					News Post Large 
					<div class="news_post_large_container">
						<div class="news_post_large">
							<div class="news_post_image"><img src="images/news_1.jpg" alt=""></div>
							<div class="news_post_large_title"><a href="blog_single.html">Here’s What You Need to Know About Online Testing for the ACT and SAT</a></div>
							<div class="news_post_meta">
								<ul>
									<li><a href="#">admin</a></li>
									<li><a href="#">november 11, 2017</a></li>
								</ul>
							</div>
							<div class="news_post_text">
								<p>Policy analysts generally agree on a need for reform, but not on which path policymakers should take. Can America learn anything from other nations...</p>
							</div>
							<div class="news_post_link"><a href="blog_single.html">read more</a></div>
						</div>
					</div>
				</div>

				<div class="col-lg-5 news_col">
					<div class="news_posts_small">

						 News Posts Small 
						<div class="news_post_small">
							<div class="news_post_small_title"><a href="blog_single.html">Home-based business insurance issue (Spring 2017 - 2018)</a></div>
							<div class="news_post_meta">
								<ul>
									<li><a href="#">admin</a></li>
									<li><a href="#">november 11, 2017</a></li>
								</ul>
							</div>
						</div>

						 News Posts Small 
						<div class="news_post_small">
							<div class="news_post_small_title"><a href="blog_single.html">2018 Fall Issue: Credit Card Comparison Site Survey (Summer 2018)</a></div>
							<div class="news_post_meta">
								<ul>
									<li><a href="#">admin</a></li>
									<li><a href="#">november 11, 2017</a></li>
								</ul>
							</div>
						</div>

						 News Posts Small 
						<div class="news_post_small">
							<div class="news_post_small_title"><a href="blog_single.html">Cuentas de cheques gratuitas una encuesta de Consumer Action</a></div>
							<div class="news_post_meta">
								<ul>
									<li><a href="#">admin</a></li>
									<li><a href="#">november 11, 2017</a></li>
								</ul>
							</div>
						</div>

						 News Posts Small 
						<div class="news_post_small">
							<div class="news_post_small_title"><a href="blog_single.html">Troubled borrowers have fewer repayment or forgiveness options</a></div>
							<div class="news_post_meta">
								<ul>
									<li><a href="#">admin</a></li>
									<li><a href="#">november 11, 2017</a></li>
								</ul>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>  
	-->
	
	
	</div>
</div>
	<!---- Footer -->

	<?php  include_once('footer.php') ?>



<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>