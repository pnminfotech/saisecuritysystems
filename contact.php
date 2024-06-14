
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sai Security System</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="icon" href="https://ik.imagekit.io/bbbb375wr/favicon.png">
	<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="assets/js/plugin/slick.css">
	<link rel="stylesheet" type="text/css" href="assets/js/plugin/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="assets/css/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
	<link rel="stylesheet" type="text/css" href="assets/css/color.css">
</head>


<body>


	
	<div class="wrapper">
		
	<?php include 'header.php' ?>
		<section class="pager-sec overlay-dark">
			<div class="container">
				<div class="pager-sec-details">
					<h2>Contact Us</h2>
					<ul class="breadcrumb">
						<li><a href="#" title="">Home</a></li>
						<li><span>Contact Us</span></li>
					</ul>
				</div><!--pager-sec-details end-->
			</div>
		</section><!--pager-sec end-->

		<section class="page-content">
			<div class="container">
				<div class="contact-contt-info">
					<div class="row">
						<div class="col-lg-4 col-md-6 col-sm-12 col-12">
							<div class="cct-info">
								<img src="https://ik.imagekit.io/bbbb375wr/logo.png" alt="">
								<h3>Our Location</h3>
								<p>Sai Security Systems, 
Office No 313, 3rd Floor, Kohinoor Majestic, Thermax Chowk 
Plot No. GP-185 & 186 G Block, 
Chinchwad, Pune - 411 019</p>
							</div><!--cct-info end-->
						</div>
						<div class="col-lg-4 col-md-6 col-sm-12 col-12">
							<div class="cct-jb overlay-2">
								<h2>You Need <br /> Job?</h2>
								<a href="#" title="" class="lnk-default">Contact Us</a>
							</div><!--cct-jb end-->
						</div>
						<div class="col-lg-4 col-md-6 col-sm-12 col-12">
							<div class="primary-contact">
								<h3>Primary Contact information</h3>
								<ul class="cot-links">
									<li>
										<i class="fa fa-envelope"></i>
										<span>	sales@saisecuritysystems.com</span>
									</li>
									<li>
										<i class="fa fa-phone-volume"></i>
										<span>+91 8208492120</span>
									</li>
								</ul>
								<ul class="socio-links">
									<li><a href="#" title=""><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#" title=""><i class="fab fa-linkedin-in"></i></a></li>
									<li><a href="#" title=""><i class="fab fa-twitter"></i></a></li>
									<li><a href="#" title=""><i class="fab fa-pinterest-p"></i></a></li>
									<li><a href="#" title=""><i class="fab fa-instagram"></i></a></li>
								</ul>
							</div><!--primary-contact end-->
						</div>
					</div>
				</div><!--contact-contt-info end-->
				<div class="contact-pg">
					<div class="sec-title">
						<span>Contact With us</span>
						<h2>Get in Touch Now</h2>
					</div><!--sec-title end-->
					<div class="contact-form">
					      <?php
                                        if(isset($_POST['enquiry-submit-one'])){
                                         
                                           $name       = @trim(stripslashes($_POST['name']));
                                           $email      =  @trim(stripslashes($_POST['email']));
                                           $phone      =  @trim(stripslashes($_POST['phone']));
                                           $message1  =  @trim(stripslashes($_POST['message']));
                                         
                                       $to = "sales@saisecuritysystems.com"; // this is your Email address
                                       //     $to = "pratikshabirdawade1996@gmail.com"; // this is your Email address
                                           $subject = @trim(stripslashes($_POST['subject']));
                                        
                                           $headers = "From: Contact Sai security systems <noreply@saisecuritysystems.com>\r\n";
                                           $headers .= "Reply-To: noreply@saisecuritysystems.com\r\n";
                                           $headers .= "MIME-Version: 1.0\r\n";
                                           $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
                                           $returnpath = '-f noreply@saisecuritysystems.com';
                                        
                                           $message = 'Hello Sir <Br> You have received new Contact Enquiry From Sai security systems Website ';
                                           $message .= '<h3>Follwing are the Contact details</h3>';
                                           $message .= '<table><tr><td>Date :</td><td>'.date("d-m-Y").'</td></tr><tr><td>Name :</td><td>'.$name.'</td></tr><tr><td>Phone :</td><td>'.$phone.'</td></tr><tr><td>Mail :</td><td>'.$email.'</td></tr>';
                                           $message .= '<tr><td>Message :</td><td>'.$message1.'</td></tr>';
                                           $message .= '</table><br><br>Thank You <br><b>This is auto Generated Email.Plase do not reply on this mail</b>';
                                           /*$success = @mail($email_to, $name, $body, 'From: <'.$email_from.'>');*/
                                           
                                         if (preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $message1)) {
                                        
                                        echo "<script type='text/javascript'>alert('Sorry. Try Again Letter')</script>";
                                          }
                                          else{
                                           $mail= mail($to,$subject,$message,$headers,$returnpath);
                                           if($mail == 1){
                                            echo "<script type='text/javascript'>alert('Thank You. We will contact you soon')</script>";
                                           
                                        }else{
                                            echo "<script type='text/javascript'>alert('Sorry. Try Again Letter')</script>";
                                        }
                                          }
                                         }
                                        ?>
						<form class="" action="" method="post">
							<div class="form-group no-pt">
                                <div class="missing-message">
                                    Populate Missing Fields
                                </div>
                                <div class="success-message">
                                    <i class="fa fa-check text-primary"></i> Thank you!. Your message is successfully sent...
                                </div>
                                <div class="error-message">Populate Missing Fields</div>
                            </div><!--form-group end-->
							<div class="row">
								<div class="col-lg-6">
									<div class="form-field">
										<input type="text" name="name" placeholder="Name" id="name">
									</div><!--form-field end-->
								</div>
								<div class="col-lg-6">
									<div class="form-field">
										<input type="email" name="email" placeholder="Email" id="email">
									</div><!--form-field end-->
								</div>
								<div class="col-lg-6">
									<div class="form-field">
										<input type="text" name="phone" placeholder="Phone">
									</div><!--form-field end-->
								</div>
								<div class="col-lg-6">
									<div class="form-field">
										<input type="text" name="subject" placeholder="Subject">
									</div><!--form-field end-->
								</div>
								<div class="col-lg-12">
									<div class="form-field">
										<textarea name="message" placeholder="Your Question"></textarea>
									</div><!--form-field end-->
								</div>
								<div class="col-lg-12">
									<div class="form-submit">
										<button type="submit" name="enquiry-submit-one" class="lnk-default submit">Contact Us</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div><!--contact-pg end-->
			</div>
		</section><!--page-content end-->


		<section id="" class="fullwidth-home-map">
            <div >
			<iframe
							src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3780.0413182177804!2d73.7900657751951!3d18.66214178245904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTjCsDM5JzQzLjciTiA3M8KwNDcnMzMuNSJF!5e0!3m2!1sen!2sin!4v1706542781908!5m2!1sen!2sin"
							data-tm-width="100%"
							height="300"
							frameborder="0"
							allowfullscreen="" style="
    width: 100%;"
						></iframe>
			</div>
        </section>

		<?php include 'footer.php'?>

	</div><!--wrapper end-->



<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery-ui.js"></script>
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/plugin/slick.min.js"></script>
<script src="assets/js/jquery.validate.min.js"></script>
<script src="assets/js/validator.js"></script>
<script src="assets/js/script.js"></script>

<!-- Maps -->
<script src="assets/js/map.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD95zDTtfBmAopNLYu3nBKVTLEBanURbM8&callback=initMap"></script>


</body>

</html>