@extends('layouts.Header')
@section('content1')
<div style="background-color:#EBEDFA;" class="gtco-section">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-6 animate-box">
					<h3>Get In Touch</h3>
					<form action="#">
						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="name">Name</label>
								<input type="text" name="name" id="name" class="form-control" placeholder="Your name" required>
							</div>
						</div>
				
						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="email">Email</label>
								<input type="text" name="email" id="email" class="form-control" placeholder="Your email address" required>
							</div>
						</div>
						
						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="subject">Subject</label>
								<input type="text" name="subject" id="subject" class="form-control" placeholder="Subject" required>
							</div>
						</div>
						
						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="message">Message</label>
								<textarea name="message" name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Write us something" required></textarea>
							</div>
						</div>
						<div class="form-group">
							<input type="submit" name="send" id="send" value="Send Message" class="btn btn-primary">
						</div>

					</form>	
							<?php
								if(isset($_POST['send']))
								{
									$name     = $_POST['name'];
									$email    = $_POST['email'];
									$subject  = $_POST['subject'];
									$message  = $_POST['message'];
									
									// the email will be sent here
									// make sure to change this to be your e-mail
									$to= "info@ambrosiabd.com";
									$header=$email;
									$header2="From: $email\r\nReply-To: $email\r\nReturn-Path: $email\r\n";

									// the email subject
									// '[Contact Form] :' will appear automatically in the subject.
									// You can change it as you want

									$subject = ' ' . $subject;

									// the mail message ( add any additional information if you want )
									$msg     = "From : $name \r\n E-mail : $email  \r\nSubject : $subject  \r\n\n" . "Message : \r\n$message";
									$email_sent=mail($to, $subject, $msg, $header2 );
									if($email_sent){?>
									<?php
										echo "
											<div class=''>
												<p style='text-align:center; color:black;'><span>Thank you!&nbsp; <b>".$name."</b> <br />&nbsp;your message has sent.</span></p>
											</div>
										";
										
									}
									
								}
								?>							
				</div>
				<div class="col-md-5 col-md-push-1 animate-box">
					
					<div class="gtco-contact-info">
						<h3>Ambrosia Restaurant Ltd</h3>
						<ul>
							<li class="address">Jibon Bima Bhaban, 1053, SK. Mujib Road,<br> Agrabad, Chittagong.</li>
							<li class="phone"><a href="#">+88-02-333313576</a></li>
							<li class="phone"><a href="#">+88-02-333313460</a></li>
							<li class="email"><a href="mailto:info@ambrosiabd.com">info@ambrosia.com.bd</a></li>
						</ul>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
@endsection