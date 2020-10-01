<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Meta -->
	<meta name="description">
	<meta name="author" content="ParkerThemes">
	<link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/fav.png"/>

	<!-- Title -->
	<title>Appointment booking</title>

	<!-- *************
		************ Common Css Files *************
		************ -->
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/login.css "/>
<!--	<link rel="stylesheet" href="--><?php //echo base_url() ?><!--assets/css/bootstrap.min.css "/>-->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/sweetalert/sweetalert2.css "/>

	<!-- Master CSS -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/main.css"/>
	<style>
		.error {
			color: red;
		}
	</style>
	<!-- ... -->
	<script type="text/javascript" src="<?php echo base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/bower_components/moment/min/moment-with-locales.js"></script>
<!--	-->
	<link crossorigin="anonymous" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
		  rel="stylesheet">
<!--	<script src="./js/jquery.min.js"></script>-->
<!--	<script src="./js/moment-with-locales.js"></script>-->
	<script crossorigin="anonymous" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script crossorigin="anonymous" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/bootstrap-datetimepicker.min.css" type="text/css" media="all" />

	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/bower_components/bootstrap-datetimepicker.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/bower_components/demo.js"></script>
</head>


<body style="background-color: #f5f5f5;">

<div class="formdiv">

	<div class="container">
		<div class="row">
			<div class="col-lg-5 col-md-5 col-sm-12 d-flex flex-wrap align-items-center">
				<img class="img-fluid" src="<?php echo base_url() ?>assets/img/design/book.png">
			</div>

			<div class="col-lg-7 col-md-7 col-sm-12">

				<form id="login" method="post" action="<?php echo site_url('index.php/book/saveBooking') ?>">
					<h4 id="head" style="color: #13baf7; margin-top: 20px">Book your appointment</h4>
					<hr>
					<div class="form-group" style="margin-top: 40px">
						<?php echo form_input(array(
							'type' => 'text',
							'name' => 'fullname',
							'id' => 'fullname',
							'placeholder' => 'Full Name',
							'class' => 'form-control',
							'required'=> 'required',
							'value' => set_value('fullname')
							)
						); ?>
						<?php echo form_error('fullname') ?>
					</div>
					<div class="form-group">
						<?php echo form_input(array(
							'type' => 'text',
							'name' => 'phoneno',
							'id' => 'phoneno',
							'placeholder' => 'Phone Number',
							'class' => 'form-control',
							'required'=> 'required',
							'value' => set_value('phoneno'))); ?>
						<?php echo form_error('phoneno') ?>
					</div>

					<div class="form-group">
						<?php echo form_input(array(
							'type' => 'email',
							'name' => 'email',
							'id' => 'email',
							'placeholder' => 'Email Address',
							'class' => 'form-control',
							'value' => set_value('email'))); ?>
						<?php echo form_error('email') ?>
					</div>
					<div class="form-group">
						<?php echo form_input(array(
							'type' => 'text',
							'name' => 'regno',
							'id' => 'regno',
							'placeholder' => 'Registration Number/Staff Number',
							'class' => 'form-control',
							'required'=> 'required',
							'value' => set_value('regno'))); ?>
						<?php echo form_error('regno') ?>
					</div>
					<div class="form-group">
						<select class="form-control" name="services_requested" required>
							<option value="none" selected disabled hidden>
								Services Requested
							</option>
							<option value='consultation'>Consultation</option>
							<option value='eye Check up'>Eye Checkup</option>
						</select>
					</div>
					<div class="form-group">
						<div class="input-group date" id="date_time">
							<input type="text" class="form-control" name="booking_date_time"  placeholder="Select date and time" required/>
							<div class="input-group-addon input-group-append">
								<div class="input-group-text">
									<i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
								</div>
							</div>
						</div>

					</div>

					<div class="form-group">
						<input type="submit" class="btn btn-primary"
							   style="margin-top : 20px;width: 100%; background-color: #13baf7; color: whitesmoke" value="Book Appointment"/>
					</div>

				</form>
			</div>

		</div>
	</div>

</div>
<script src="<?php echo base_url() ?>assets/sweetalert/sweetalert2.min.js "></script>
<script>

	function errorSwal(type, title, message) {
		Swal.fire({
			type: type,
			title: title,
			text: message
		});
	}

</script>
<?php
if ($this->session->flashdata('error')) {
	$swalType = 'error';
	$swalTitle = "Oops!!";
	$swalMessage = $this->session->flashdata('error');
	echo "<script> errorSwal('$swalType','$swalTitle','$swalMessage')</script>";
} else if ($this->session->flashdata('success')) {

	$swalType = 'success';
	$swalTitle = "Success";
	$swalMessage = $this->session->flashdata('success');
	echo "<script> errorSwal('$swalType','$swalTitle','$swalMessage')</script>";
}
?>
</body>
<script>
	$(function () {

		$('#date_time').datetimepicker({
			"allowInputToggle": true,
			"showClose": true,
			"showClear": true,
			"showTodayButton": true,
			"format": "MM/DD/YYYY hh:mm A",
		});
	});
</script>
</html>
