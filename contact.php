<?php include_once 'Super_Access/class.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact Almicro Instruments, Supplier and Manufacturer of Scientific Equipments and Instruments Ambala, India</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content=" Contact Almicro  Instruments, Ambala, India for any query and regarding any order. Contact Number - +91-98960-51072, 98961-35226 or sales@almicroinstruments.com">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
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
								<li><a href="index.html">Home</a></li>
								<li>Contact</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

	<!-- Contact -->

	<div class="contact">
		
		<!-- Contact Map -->

		<div class="contact_map">

			<!-- Google Map -->
			
			<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3443.4892118220096!2d76.86345731445097!3d30.337043611646983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fb66389028d35%3A0xb24e0a5d41e781c9!2sMicro+Measures+%26+Instruments!5e0!3m2!1sen!2sin!4v1558331756979!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>

		</div>

		<!-- Contact Info -->

		<div class="contact_info_container">
			<div class="container">
				<div class="row">

					<!-- Contact Form -->
					<div class="col-lg-6">
						<div class="contact_form">
							<div class="contact_info_title">Contact Form</div>
							<form id ="contact_ajax" class="comment_form">
								<div>
									<div class="form_title">Name</div>
									<input id="" type="text" id ="name" class="comment_input" required="required">
								</div>
								<div>
									<div class="form_title">Email</div>
									<input type="email" id ="email" class="comment_input" required="required">
								</div>
								<div>
									<div class="form_title">Message</div>
									<textarea id ="message"  class="comment_input comment_textarea" required="required"></textarea>
								</div>
								<div>
									<button type="button" id="submit" class="comment_button trans_200">submit now</button>
								</div>
								<span class="text-denger" id="error" > </span>
								<span class ="text-success" id="success" ></span>
							</form>
						</div>
					</div>

					<!-- Contact Info -->
					<div class="col-lg-6">
						<div class="contact_info">
							<div class="contact_info_title">Contact Info</div>
							
							<div class="contact_info_location">
								<div class="contact_info_location_title">Registered Office</div>
								<ul class="location_list">
									<li>444, Arya Nagar, Jagadhri Road, Ambala Cantt, Haryana, India</li>
									
								</ul>
							</div>
							<div class="contact_info_location">
								<div class="contact_info_location_title">Contacts</div>
								<ul class="location_list">
									<li>Phone :- 0171-2663258,4005258,2602151</li>
									<li>Customer care :- +91-89293-10310</li>
									<li>Mobile :- +91-98960-51072,98961-35226</li>
								</ul>
							</div>
							<div class="contact_info_location">
								<div class="contact_info_location_title">E-mails</div>
								<ul class="location_list">
									<li>For information regarding Sales :- <p style="font-weight:500;color:#C20114">info@almicroinstruments.com</p> </li>
									<li>For technical information on our Products or for your Specific Requirements <p style="font-weight:500;color:#C20114">sales@almicroinstruments.com</p></li>
									<li>For any other General Information <p style="font-weight:500;color:#C20114">info@almicroinstruments.com</p></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



<!-- Footer -->

<?php  include_once('footer.php') ?>
</div>
<script>
 $(document).ready(function(){  
      $('#submit').click(function(){  
           var name = $('#name').val();  
           var email = $('#email').val();
		   var message =$('#message').val(); 
           var submit = $('#submit').val();
           if(name == '' || email == '' || message == '')  
           {  
                $('#error').html("All Fields are required");  
           }  
           else  
           {  
                $('#error').html('');  
                $.ajax({  
                     url:"Super_Access/ajax.php",  
                     method:"POST",  
                     data:{
						 	contact_name:name,
					  	 	contact_email:email,
						   	contact_message_:message,
						   	contact_submit:submit,
						   },  
                     success:function(data){  
                          $("form").trigger("reset");  
                          $('#success').fadeIn().html(data);  
                          setTimeout(function(){  
                               $('#success').fadeOut("Slow");  
                          }, 10000);  
                     }  
                });  
           }  
      });  
 });  



</script>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="plugins/marker_with_label/marker_with_label.js"></script>
<script src="js/contact.js"></script>
</body>
</html>