
<!--  Desktop Header   --->
<?php include_once 'Super_Access/class.php'; ?>

<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
	<script src=jQuery.js></script>
<header class="header">
			
		<!-- Top Bar 
		<div class="top_bar">
			<div class="top_bar_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
								<ul class="top_bar_contact_list">
									<li><div class="question">Have any questions?</div></li>
									<li>
										<i class="fa fa-phone" aria-hidden="true"></i>
										<div>001-1234-88888</div>
									</li>
									<li>
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
										<div>info.deercreative@gmail.com</div>
									</li>
								</ul>
								<div class="top_bar_login ml-auto">
									<div class="login_button"><a href="#">Register or Login</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>				
		</div>
-->
		<!-- Header Content -->
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo_container">
								<a href="index.php">
									<div class="logo_text">	<img src="logo.png" alt="" width="200px" ></div>
								
								</a>
							</div>
							<nav class="main_nav_contaner ml-auto">
								<ul class="main_nav">
									<li class="active"><a href="index.php">Home</a></li>
									<li><a href="about.php">About</a></li>
									<li >
										<div  onmouseover="document.getElementById('dropp').style.display='block';" onmouseout="document.getElementById('dropp').style.display='none';">
										<a href="products.php" class="dropdown-toggle" id="downn" >Products</a>
										</div>
										<ul class="dropdown-menu" id="dropp" onmouseover="document.getElementById('dropp').style.display='block';" onmouseout="document.getElementById('dropp').style.display='none';">
										<?php
										$select = new Select;
										$res =  $select->Category();
										 
										while($row =$res->fetch_assoc())
										{
			
										echo"<a class='dropdown-item' href='products.php?fetch=$row[catid]'>$row[category]</a> "; 
										}
										?>
								
										  </ul>
									</li>								
									<li><a href="catalogue.php">Catalogues</a></li>
									<li><a href="gallery.php">Gallery</a></li>
									<li><a href="contact.php">Contact</a></li>
								</ul>
								<div class="search_button"><i class="fa fa-search" aria-hidden="true"></i></div>

								<!-- Hamburger -->

								
								<div class="hamburger menu_mm">
									<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
								</div>
							</nav>

						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Header Search Panel -->
		<div class="header_search_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_search_content d-flex flex-row align-items-center justify-content-end">
							<form action="#" class="header_search_form">
								<input type="search" class="search_input" placeholder="Search" required="required">
								<button class="header_search_button d-flex flex-column align-items-center justify-content-center">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>			
		</div>			
	</header>

<!-- Mobile Menu -->

    <div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="search">
			<form action="#" class="header_search_form menu_mm">
				<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
				<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
					<i class="fa fa-search menu_mm" aria-hidden="true"></i>
				</button>
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="index.php">Home</a></li>
				<li class="menu_mm"><a href="about.php">About</a></li>
				<li class="menu_mm mobdrop" id="dropo">Products >
				<ul class="menu_mm" id="dropsub" style="display:none">
				<li><hr></li>
				<?php
										$select = new Select;
										$res =  $select->Category();
										 
										while($row =$res->fetch_assoc())
										{
			
											echo "<li class='menu_mm' style='margin-bottom:4px'  ><a style='font-size:12px' href='products.php?fetch=$row[catid]'>$row[category]</a></li>"; 
										}
										?>				
				<li><hr></li>
			</ul></li>
				<li class="menu_mm"><a href="catalogue.php">Catalogues</a></li>
				<li class="menu_mm"><a href="gallery.php">Gallery</a></li>
				<li class="menu_mm"><a href="contact.php">Contact</a></li>
			</ul>
		</nav>
	</div>