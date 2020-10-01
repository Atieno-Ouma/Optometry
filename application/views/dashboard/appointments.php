
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Page Content -->
<!-- ============================================================== -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row bg-title">

			<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
					<ol class="breadcrumb pull-left">
					<li><a href="<?php  echo base_url(); ?>index.php/patients">Appointments</a></li>

				</ol>
			</div>

		<!-- table -->
		<!-- ============================================================== -->
		<div class="row">
			<div class="col-md-12 col-lg-12 col-sm-12">
				<div class="white-box">

					<h3 class="box-title">List of all appointments</h3>
					<div class="table-responsive">
						<table class="table">
							<thead>
							<tr>
								<th>#</th>
								<th>FULL NAME</th>
								<th>PHONE NUMBER</th>
								<th>REGNO NO</th>
								<th>EMAIL ADDRESS</th>
								<th>SERVICE REQUESTED</th>
								<th>BOOKED DATE</th>
							</tr>
							</thead>
							<tbody>
							<?php

							if (!empty($appointments)) {
								foreach ($appointments as $key=> $appointment) {
									?>
									<tr>
										<td><?php echo $key + 1; ?></td>
										<td class="txt-oflo"><?php echo $appointment->fullname ?></td>
										<td><?php echo $appointment->phoneno ?></td>
										<td><?php echo $appointment->regno?></td>
										<td><?php echo $appointment->email?></td>
										<td><?php echo $appointment->services_requested?></td>
										<td><?php echo $appointment->booking_date_time?></td>
									</tr>
									<?php
								}
							}else{
								?>
							<td>No Appointment found</td>
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
