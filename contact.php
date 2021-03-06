<?php include 'header.php'?>
	<div class="site wrapper-content">
		<div class="top_site_main" style="background-image:url(images/banner/top-heading.jpg);">
			<div class="banner-wrapper container article_heading">
				<div class="breadcrumbs-wrapper">
					<ul class="phys-breadcrumb">
						<li><a href="index.php" class="home">Home</a></li>
						<li>Contact</li>
					</ul>
				</div>
				<h1 class="heading_primary">Contact</h1></div>
		</div>
		<section class="content-area">
			<div class="container">
				<div class="row">
					<div class="site-main col-sm-9 alignleft">
						<div class="video-container">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3493.513248652066!2d76.62003501484865!3d28.88309267944768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d84dee1290973%3A0x131b8ad61ff80398!2sAgro%20Mall!5e0!3m2!1sen!2sin!4v1584698300367!5m2!1sen!2sin" width="600" height="450" style="border: 0; pointer-events: none;" allowfullscreen=""></iframe>
						</div>
						<div class="pages_content padding-top-4x">
							<h4>CONTACT INFORMATION</h4>
							<div class="contact_infor">
								<ul>
									<li><label><i class="fa fa-map-marker"></i>ADDRESS</label>
										<div class="des"> Office no 303, 3rd floor Agro mall sector 14, opposite gate no 2 mdu Rohtak</div>
									</li>
									<li><label><i class="fa fa-phone"></i>TEL NO</label>
										<div class="des"> +91 76009 56434</div>
									</li>
									
									<li><label><i class="fa fa-envelope"></i>EMAIL</label>
										<div class="des">info@whitefalcontravels.com (tour) </div>
									</li>
									<li>
										<label><i class="fa fa-clock-o"></i>WORKING HOURS</label>
										<div class="des">Mon – Fri 9:00 am – 5:30 pm, Sat 9:00 am – 1:00 pm
											<br>
											We are closed on 1st &amp; 3rd Sat of every month, Sundays &amp; public holidays
										</div>
									</li>
									
								</ul>
							</div>
						</div>
						<div class="wpb_wrapper pages_content">
							<h4>Have a question?</h4>
							<div role="form" class="wpcf7">
								<div class="screen-reader-response"></div>
								<form action="#" id="contact" method="post" class="wpcf7-form" >
									<div class="form-contact">
										<div class="row-1x">
											<div class="col-sm-6">
													<span class="wpcf7-form-control-wrap your-name">
														<input type="text" name="name" value="" size="40" class="wpcf7-form-control" placeholder="Your name*" required>
													</span>
											</div>
											<div class="col-sm-6">
													<span class="wpcf7-form-control-wrap your-email">
														<input type="email" name="email" value="" size="40" class="wpcf7-form-control" placeholder="Email*" required>
													</span>
											</div>
										</div>
										<div class="form-contact-fields">
												<span class="wpcf7-form-control-wrap your-subject">
													<input type="text" name="phone" value="" size="40" class="wpcf7-form-control" placeholder="phone">
												</span>
										</div>
										<div class="form-contact-fields">
											<span class="wpcf7-form-control-wrap your-message">
												<textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" placeholder="Message" required></textarea>
												 </span><br>
												 <p style="display:none;" class="alert alert-success shows">Success! </p>
											<input type="submit" value="Submit" class="wpcf7-form-control wpcf7-submit">
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="widget-area col-sm-3 align-left">
						<aside class="widget widget_text">
							<img src="images/tour/430x305/tour-1.jpg" alt="">
						</aside>
						<aside class="widget widget_text">
							<img src="images/tour/430x305/tour-2.jpg" alt="">
						</aside>
						<aside class="widget widget_text">
							<img src="images/tour/430x305/tour-3.jpg" alt="">
						</aside>
					</div>
				</div>
			</div>
		</section>
	</div>
	<?php include 'footer.php'?>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
	<script>
$('form#contact').submit(function(e){
e.preventDefault();
var form = $(this);
$.ajax({
type: 'post',	
url: 'send_form_email.php',
dataType: 'html',

data: form.serialize(),
success : function(data){    
alert(data);
	$(".shows").show();
  $(".shows").fadeOut(6000);
},
error : function(){ alert("Somthing Went wrong");  }


});


});

	</script>