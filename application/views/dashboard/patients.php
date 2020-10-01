
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Page Content -->
<!-- ============================================================== -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row bg-title">

			<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
				<a href="<?php  echo base_url(); ?>index.php/patients/add"
				   class="btn btn-primary pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Add Patient</a>
				<ol class="breadcrumb pull-left">
					<li><a href="<?php  echo base_url(); ?>index.php/patients">Patient</a></li>

				</ol>
			</div>

		<!-- table -->
		<!-- ============================================================== -->
		<div class="row">
			<div class="col-md-12 col-lg-12 col-sm-12">
				<div class="white-box">

					<h3 class="box-title">Patients</h3>
					<div class="table-responsive">
						<table class="table">
							<thead>
							<tr>
								<th>#</th>
								<th>FULL NAME</th>
								<th>NATIONAL ID</th>
								<th>GENDER</th>
								<th>DOB</th>
								<th>AGE</th>
							</tr>
							</thead>
							<tbody>
							<?php

							for ($i = 0; $i < 12; $i++){
								?>
								<tr>
									<td><?php echo $i+1; ?></td>
									<td class="txt-oflo">John Doe</td>
									<td>345678</td>
									<td>Male</td>
									<td class="txt-oflo">April 18, 2002</td>
									<td><span class="text-success">18</span></td>
								</tr>
							<?php
							}

							?>

							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<!-- ============================================================== -->

	</div>

	</div>
	<!-- ============================================================== -->
	<!-- End Page Content -->
