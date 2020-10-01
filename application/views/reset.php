

<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Meta -->
	<meta name="description" content="MMUST Optometry">
	<meta name="author" content="ParkerThemes">
	<link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/fav.png"/>

	<!-- Title -->
	<title>Reset Password</title>

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

<div class="formdiv" >

	<div class="container">
		<div class="row">
			<div class="col-lg-5 col-md-5 col-sm-12 d-flex flex-wrap align-items-center">
					<img class="img-fluid" src="<?php  echo base_url() ?>assets/img/design/reset.png">
			</div>

			<div class="col-lg-7 col-md-7 col-sm-12">

				<form  id="login" method="post" action="<?php echo site_url('index.php/login/forgot')?>" style="padding-bottom: 50px; padding-top: 30px">
					<h4 id="head" style="color: #13baf7; margin-top: 20px" >Forgot your password?</h4>
					<hr>

					<span>Please enter your email address to proceed.</span>
					<div class="form-group" style="margin-top: 10px">
						<?php
						echo form_input(array(
							"type"=>"text",
							"name"=>"emaili",
							"class"=>  "form-control",
							"placeholder"=>"Email Address",
						))?>
						<?php echo form_error("emaili")?>
					</div>

					<div class="form-group">
						<input type="submit" class="btn btn-lg" style="width: 100%; background-color: #13baf7; color: whitesmoke" value="SEND" />
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
