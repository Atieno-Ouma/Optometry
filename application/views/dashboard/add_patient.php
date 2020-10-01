<!-- Page Content -->
<!-- ============================================================== -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row bg-title">

			<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
				<ol class="breadcrumb pull-left">
					<li><a href="<?php  echo base_url(); ?>index.php/patients">Patients</a></li>
					<li class="active">Add Patient</li>
				</ol>
			</div>
		</div>
		<!-- /.row -->
		<!-- .row -->
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<div class="white-box">
					<form class="form-horizontal form-material">
						<div class="form-group">
							<label class="col-md-12">Full Name</label>
							<div class="col-md-12">
								<input type="text" placeholder="Johnathan Doe"
									   class="form-control form-control-line"> </div>
						</div>
						<div class="form-group">
							<label for="example-email" class="col-md-12">Email</label>
							<div class="col-md-12">
								<input type="email" placeholder="johnathan@admin.com"
									   class="form-control form-control-line" name="example-email"
									   id="example-email"> </div>
						</div>
						<div class="form-group">
							<label class="col-md-12">National ID</label>
							<div class="col-md-12">
								<input type="text" placeholder="National ID" class="form-control form-control-line">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-12">Phone No</label>
							<div class="col-md-12">
								<input type="text" placeholder="123 456 7890"
									   class="form-control form-control-line"> </div>
						</div>

						<div class="form-group">
							<label class="col-sm-12">Sex</label>
							<div class="col-sm-12">
								<select class="form-control form-control-line">
									<option>Male</option>
									<option>Female</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-12">Address</label>
							<div class="col-md-12">
								<textarea rows="2" class="form-control form-control-line" placeholder="P.O BOX 001, Somewhere"></textarea>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-12">
								<button class="btn btn-success">Create Patient</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /.row -->
	</div>

</div>
<!-- ============================================================== -->
<!-- End Page Content -->
