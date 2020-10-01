<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Meta -->
	<meta name="author" content="ParkerThemes">
	<link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/fav.png"/>

	<!-- Title -->
	<title>Login</title>

	<!-- *************
		************ Common Css Files *************
		************ -->
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/login.css "/>
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css "/>
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/sweetalert/sweetalert2.css "/>

	<!-- Master CSS -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/main.css"/>
<style>
	.error {
		color: red;
	}
</style>
</head>


<body style="background-color: #f5f5f5;">

<div class="formdiv">

	<div class="container">
		<div class="row">
			<div class="col-lg-5 col-md-5 col-sm-12 d-flex flex-wrap align-items-center">
				<img class="img-fluid" src="<?php echo base_url() ?>assets/img/design/login.png">
			</div>

			<div class="col-lg-7 col-md-7 col-sm-12">

				<form id="login" method="post" action="<?php echo site_url('index.php/login') ?>">
					<h4 id="head" style="color: #13baf7; margin-top: 20px">Login</h4>
					<hr>
					<div class="form-group" style="margin-top: 40px">
						<?php echo form_input(array(
							'type' => 'text',
							'name' => 'usernamei',
							'id' => 'usernamei',
							'placeholder' => 'Username',
							'class' => 'form-control',
							'value' => set_value('usernamei'))); ?>
						<?php echo form_error('usernamei') ?>
					</div>
					<div class="form-group">
						<?php echo form_input(array(
							'type' => 'password',
							'class' => 'form-control',
							'name' => 'password',
							'placeholder' => 'Password',
							'autocomplete' => 'new-password',
							'value' => set_value('password'))); ?>
						<?php echo form_error('password') ?>
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-lg"
							   style="width: 100%; background-color: #13baf7; color: whitesmoke" value="LOGIN"/>
					</div>
					<div class="form-group">
						<p>Forget Password?<a href="<?php echo site_url('index.php/login/reset') ?>"
											  style="color: #13baf7; margin-left: 10px">Reset Here</a></p>
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
if($this->session->flashdata('error'))
{
	$swalType = 'error';
	$swalTitle = "Oops!!";
	$swalMessage =  $this->session->flashdata('error');
	echo "<script> errorSwal('$swalType','$swalTitle','$swalMessage')</script>";
}else if($this->session->flashdata('success'))
{

	$swalType = 'success';
	$swalTitle = "Success";
	$swalMessage =  $this->session->flashdata('success');
	echo "<script> errorSwal('$swalType','$swalTitle','$swalMessage')</script>";
}
?>
</body>

</html>
