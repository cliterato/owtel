<?php 
// $body_class = "no-scroll";
require_once('top.php'); 
require_once('nav.php'); 
require_once('mail.php'); 


$valid = "true";
$user_type = "";	
$is_exists = "";
$first_name = "";
$last_name ="";
$comments =  "";
$email =  "";
$contact_number =  "";

if(isset($_POST['submit'])){

		if($_POST['user_type'] == "" || $_POST['is_exists'] == "" || $_POST['first_name'] == "" || $_POST['last_name'] == "" || $_POST['email'] == "" || $_POST['contact_number'] == "" || $_POST['comments'] == ""){
			$valid = "failed";
		}

		$user_type = $_POST['user_type'];	
		$is_exists = $_POST['is_exists'];
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name']; 
		$comments =  $_POST['comments'];
		$email =  $_POST['email'];
		$contact_number =  $_POST['contact_number'];


		if($valid == "true"){

		$config = array(
			'smtp_hostname' => 'smtpauth.owtel.com',
			'smtp_username' => 'owtsmtp',
			'smtp_password' => 'smtp4owtelasia',
			'smtp_port' => 2525,
			'smtp_timeout' => 5,
			'protocol' => 'smtp'
			);

		$html = '<p><b>Type of User</b>: '.$user_type.'</p>
		<p><b>Existing Owtel customer?</b>: '.$is_exists.'</p>
		<p><b>Name</b>: '.$first_name.' '.$last_name.'</p>
		<p><b>Email</b>: '.$email.'</p>
		<p><b>Contact Number</b>: '.$contact_number.'</p>
		<p><b>Comments</b>: '.$comments.'</p>
		';
		$name = $first_name.' '.$last_name;
		$mailer = new Mail($config);
		$mailer->setSender($name);
		$mailer->setSubject('Owtel Customer Support');
		$mailer->setTo('kcalado@compasscallhub.com');
		$mailer->setFrom($email);
		$mailer->setHtml($html);
		$mailer->send();
		$valid = "sent";
		
		}


}

?>
<section class="container-fluid full-height">
	<div class="row full-height">
		<div class="col-md-5 full-height no-padding">
			<div class="left-panel full-height" style="background: url('img/cs-2.png') no-repeat bottom left; background-size: cover;">
				<div id="link">
					<a href="/faq">Look at our FAQ</a>
				</div>
			</div>
		</div>
		<div class="col-md-7 no-padding full-height">
			<div class="right-panel full-height middle-content" style="background: url('img/cs-bg.png') no-repeat center right 0px; background-size: auto 70%;">
				<div class="row">
					<div class="col-md-9 col-md-offset-1">
						<div class="spacer20"></div>
						<div class="spacer20"></div>
						<div class="spacer20"></div>
						<h2>Customer Support</h2>
						<div class="row">
							<div class="col-md-8 col-md-12">
								<p>Have a question or concern? Read through our FAQ for an immediate answer to the mostly commonly asked questions. Still need help? Just complete the form below and we’ll be in touch!</p>
								<!-- <p>866-444-0585</p> -->
							</div>
						</div>
						<?php if($valid == "sent"){?>
						<p style="color:red">Inquiry successfully sent!</p>
						<?php }?>
						<?php if($valid == "failed"){?>
						<p style="color:red">Please check required fields!</p>
						<?php }?>
						<div class="spacer20"></div>
						<form action="customer-service" method="POST">
							<div class="form-group row">
								<label for="user_type" class="col-md-5 col-form-label">Type of User:</label>
								<div class="col-md-7">
									<select class="form-control" id="user_type" name="user_type">
										<option>Select Your Type</option>
										<option value="Residential" <?php if($user_type == "Residential"){ echo "selected='selected'";}?>>Residential</option>
										<option value="Business" <?php if($user_type == "Business"){ echo "selected='selected'";}?>>Business</option>
									</select>
								</div>
							</div>

							<div class="form-group row">
								<label for="is_exists" class="col-md-5 col-form-label">Are you existing Owtel customer? * :</label>
								<div class="col-md-7">
									<select class="form-control" id="is_exists" name="is_exists">
										<option>Select Your Answer</option>
										<option value="Yes"  <?php if($is_exists == "Yes"){ echo "selected='selected'";}?>>Yes</option>
										<option value="No"  <?php if($is_exists == "No"){ echo "selected='selected'";}?>>No</option>
									</select>
								</div>
							</div>

							<div class="form-group row">
								<label for="first_name" class="col-md-5 col-form-label">First Name * :</label>
								<div class="col-md-7">
									<input class="form-control" type="text" id="first_name" name="first_name" value="<?php echo $first_name;?>">
								</div>
							</div>

							<div class="form-group row">
								<label for="last_name" class="col-md-5 col-form-label">Last Name * :</label>
								<div class="col-md-7">
									<input class="form-control" type="text"  id="last_name" name="last_name" value="<?php echo $last_name;?>">
								</div>
							</div>

							<div class="form-group row">
								<label for="email" class="col-md-5 col-form-label">Email * :</label>
								<div class="col-md-7">
									<input class="form-control" type="text" id="email" name="email" value="<?php echo $email;?>">
								</div>
							</div>

							<div class="form-group row">
								<label for="contact_number" class="col-md-5 col-form-label">Contact Number * :</label>
								<div class="col-md-7">
									<input class="form-control" type="text"  id="contact_number" name="contact_number" value="<?php echo $contact_number;?>">
								</div>
							</div>

							<div class="form-group row">
								<label for="comments" class="col-md-5 col-form-label">Comments * :</label>
								<div class="col-md-7">
									<span class="warning"></span>
									<textarea class="form-control" id="comments" name="comments" placeholder="Maximum characters 160"><?php echo $comments;?></textarea>
								</div>
							</div>

							<div class="form-group row text-right">
								<div class="col-md-12">
									<button class="default-btn" type="submit" name="submit">Submit</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php require_once('footer-2.php'); ?>