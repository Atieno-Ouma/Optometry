<style>

	/* Tabs panel */
	.tabbable-panel {
		border: 1px solid #eee;
		padding: 10px;
	}

	/* Default mode */
	.tabbable-line > .nav-tabs {
		border: none;
		margin: 0px;
	}

	.tabbable-line > .nav-tabs > li {
		margin-right: 2px;
	}

	.tabbable-line > .nav-tabs > li > a {
		border: 0;
		margin-right: 0;
		color: #737373;
	}

	.tabbable-line > .nav-tabs > li > a > i {
		color: #a6a6a6;
	}

	.tabbable-line > .nav-tabs > li.open, .tabbable-line > .nav-tabs > li:hover {
		border-bottom: 4px solid rgba(19, 186, 247, 0.38);
	}

	.tabbable-line > .nav-tabs > li.open > a, .tabbable-line > .nav-tabs > li:hover > a {
		border: 0;
		background: none !important;
		color: #333333;
	}

	.tabbable-line > .nav-tabs > li.open > a > i, .tabbable-line > .nav-tabs > li:hover > a > i {
		color: #a6a6a6;
	}

	.tabbable-line > .nav-tabs > li.open .dropdown-menu, .tabbable-line > .nav-tabs > li:hover .dropdown-menu {
		margin-top: 0px;
	}

	.tabbable-line > .nav-tabs > li.active {
		border-bottom: 4px solid #13baf7;
		position: relative;
	}

	.tabbable-line > .nav-tabs > li.active > a {
		border: 0;
		color: #333333;
	}

	.tabbable-line > .nav-tabs > li.active > a > i {
		color: #404040;
	}

	.tabbable-line > .tab-content {
		margin-top: -3px;
		background-color: #fff;
		border: 0;
		border-top: 1px solid #eee;
		padding: 15px 0;
	}

	.portlet .tabbable-line > .tab-content {
		padding-bottom: 0;
	}

	/* Below tabs mode */

	.tabbable-line.tabs-below > .nav-tabs > li {
		border-top: 4px solid transparent;
	}

	.tabbable-line.tabs-below > .nav-tabs > li > a {
		margin-top: 0;
	}

	.tabbable-line.tabs-below > .nav-tabs > li:hover {
		border-bottom: 0;
		border-top: 4px solid #fbcdcf;
	}

	.tabbable-line.tabs-below > .nav-tabs > li.active {
		margin-bottom: -2px;
		border-bottom: 0;
		border-top: 4px solid #13baf7;
	}

	.tabbable-line.tabs-below > .tab-content {
		margin-top: -10px;
		border-top: 0;
		border-bottom: 1px solid #eee;
		padding-bottom: 15px;
	}

	.top-space {
		margin-top: 30px;
	}

	tr.hide-table-padding td {
		padding: 0;
	}

	.panel-title > a {
		display: block;
		position: relative;
	}

	.panel-title > a:after {
		content: "\f078";
		font-family: 'FontAwesome';
		position: absolute;
		right: 0;
	}

	.panel-title > a:before {
		position: absolute;
	}

	.panel-title > a[aria-expanded="true"]:after {
		content: "\f077";
	}

	.table-bordered > tbody > tr > td, .table-bordered > tbody > tr > th, .table-bordered > tfoot > tr > td, .table-bordered > tfoot > tr > th, .table-bordered > thead > tr > td, .table-bordered > thead > tr > th {
		border: 1px solid #13baf7;
	/ / your desired color
	}

</style>
<!-- Page Content -->
<!-- ============================================================== -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row bg-title">

			<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
				<ol class="breadcrumb pull-left">
					<li><a href="<?php echo base_url(); ?>index.php/patients">Patients</a></li>
					<li class="active">Patient Name Here</li>
				</ol>
			</div>
		</div>
		<!-- /.row -->
		<!-- .row -->
		<div class="row">

			<div class="col-md-12">

				<div class="tabbable-panel">
					<div class="tabbable-line">
						<ul class="nav nav-tabs ">
							<li>
								<a href="#tab_bio_data" data-toggle="tab">
									Bio Data </a>
							</li>
							<li>
								<a href="#tab_patient_history" data-toggle="tab">
									Patient History </a>
							</li>
							<li>
								<a href="#tab_patient_test" data-toggle="tab">
									Tests </a>
							</li>
							<li>
								<a href="#tab_findings" data-toggle="tab">
									Findings/Clinical Records </a>
							</li>
							<li class="active">
								<a href="#tab_diagnosis" data-toggle="tab">
									Diagnosis </a>
							</li>
							<li>
								<a href="#tab_default_6" data-toggle="tab">
									Medication </a>
							</li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane" id="tab_bio_data">

								<div class="row ">
									<div class="col-lg-4  col-md-4 col-sm-6 col-xs-12 top-space">
										<div class="form-group">
											<label class="col-md-12">Patient Name</label>
											<div class="col-md-12">
												<input type="text"
													   class="form-control form-control-line" value="John Doe">
											</div>
										</div>
									</div>

									<div class="col-lg-4  col-md-4 col-sm-6 col-xs-12  top-space">
										<div class="form-group">
											<label class="col-md-12">Patient ID</label>
											<div class="col-md-12">
												<input type="text"
													   class="form-control form-control-line" value="34633222">
											</div>
										</div>
									</div>

									<div class="col-lg-4  col-md-4 col-sm-6 col-xs-12  top-space">
										<div class="form-group">
											<label class="col-md-12">Age</label>
											<div class="col-md-12">
												<input type="text"
													   class="form-control form-control-line" value="23"></div>
										</div>
									</div>
									<div class="col-lg-4  col-md-4 col-sm-6 col-xs-12 top-space">
										<div class="form-group">
											<label class="col-md-12">Sex</label>
											<div class="col-md-12">
												<input type="text"
													   class="form-control form-control-line" value="Male">
											</div>
										</div>
									</div>
									<div class="col-lg-4  col-md-4 col-sm-6 col-xs-12 top-space">
										<div class="form-group">
											<label class="col-md-12">Examination</label>
											<div class="col-md-12">
												<input type="text" placeholder="Johnathan Doe"
													   class="form-control form-control-line" value="Suppression Test">
											</div>
										</div>
									</div>
									<div class="col-lg-4  col-md-4 col-sm-6 col-xs-12 top-space">
										<div class="form-group">
											<label class="col-md-12">Date of Last Visit</label>
											<div class="col-md-12">
												<input type="text"
													   class="form-control form-control-line" value="9/2/2020">
											</div>
										</div>
									</div>


									<div class="col-lg-4  col-md-4 col-sm-6 col-xs-12 top-space">
										<div class="form-group">
											<label class="col-md-12">Address</label>
											<div class="col-md-12">
												<input type="text"
													   class="form-control form-control-line"
													   value="Kilifi, Classic Estate">
											</div>
										</div>
									</div>


									<div class="col-lg-4  col-md-4 col-sm-6 col-xs-12  top-space">
										<div class="form-group">
											<label class="col-md-12">Phone Number</label>
											<div class="col-md-12">
												<input type="text"
													   class="form-control form-control-line" value="079876543">
											</div>
										</div>
									</div>


									<div class="col-lg-4  col-md-4 col-sm-6 col-xs-12  top-space">
										<div class="form-group">
											<label class="col-md-12">Occupation</label>
											<div class="col-md-12">
												<input type="text"
													   class="form-control form-control-line" value="Teacher">
											</div>
										</div>
									</div>


									<div class="col-lg-4  col-md-4 col-sm-6 col-xs-12  top-space">
										<div class="form-group">
											<label class="col-md-12">Former Eye Specialist Contact</label>
											<div class="col-md-12">
												<input type="text"
													   class="form-control form-control-line"
													   value="Dr. George, 0713456765">
											</div>
										</div>
									</div>


								</div>

								<div class="row">
									<button class="btn btn-primary pull-right" style="margin-right: 50px">EDIT</button>
								</div>
							</div>
							<div class="tab-pane" id="tab_patient_history">

								<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
									<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="heading-1">
											<h4 class="panel-title">

												<a role="buttono" data-toggle="collapse" data-parent="#accordion"
												   href="#collapse-1" aria-expanded="false" aria-controls="collapse-1">
													Chief Complaints/ Oculo-Visual compaints
												</a>
											</h4>
										</div>
										<div id="collapse-1" class="panel-collapse collapse" role="tabpanel"
											 aria-labelledby="heading-1">
											<div class="panel-body">
												Should appear here
											</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="heading-2">
											<h4 class="panel-title">
												<a class="collapsed" role="button" data-toggle="collapse"
												   data-parent="#accordion" href="#collapse-2" aria-expanded="false"
												   aria-controls="collapse-2">
													Previous self and family ocular history
												</a>
											</h4>
										</div>
										<div id="collapse-2" class="panel-collapse collapse" role="tabpanel"
											 aria-labelledby="heading-2">
											<div class="panel-body">
												Text 2
											</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="heading-3">
											<h4 class="panel-title">
												<a class="collapsed" role="button" data-toggle="collapse"
												   data-parent="#accordion" href="#collapse-3" aria-expanded="false"
												   aria-controls="collapse-3">
													Previous Medical History
												</a>
											</h4>
										</div>

										<div id="collapse-3" class="panel-collapse collapse" role="tabpanel"
											 aria-labelledby="heading-3">
											<div class="panel-body">
												<div class="panel-group" id="accordion-1" role="tablist"
													 aria-multiselectable="true">
													<div class="panel panel-default">
														<div class="panel-heading" role="tab" id="heading-1-1">
															<h4 class="panel-title">
																<a role="button" data-toggle="collapse"
																   data-parent="#accordion-1" href="#collapse-3-1"
																   aria-expanded="false" aria-controls="collapse-1-1">
																	Allergies
																</a>
															</h4>
														</div>
														<div id="collapse-3-1" class="panel-collapse collapse"
															 role="tabpanel" aria-labelledby="heading-1-1">
															<div class="panel-body">


																<div class="list-group">
																	<a href="#" class="list-group-item disabled">
																		Food
																	</a>
																	<a href="#" class="list-group-item">Food 1</a>
																	<a href="#" class="list-group-item">Food 2</a>
																</div>


																<div class="list-group">
																	<a href="#" class="list-group-item disabled">
																		Eye Medication
																	</a>
																	<a href="#" class="list-group-item">Med 1 alergy</a>
																	<a href="#" class="list-group-item">Med 2 Alergy</a>
																</div>

																<div class="list-group">
																	<a href="#" class="list-group-item disabled">
																		General Systematic Medication
																	</a>
																	<a href="#" class="list-group-item">No Alergy found
																		under this category</a>
																</div>


															</div>
														</div>
													</div>
													<div class="panel panel-default">
														<div class="panel-heading" role="tab" id="heading-1-2">
															<h4 class="panel-title">
																<a class="collapsed" role="button"
																   data-toggle="collapse" data-parent="#accordion-1"
																   href="#collapse-3-2" aria-expanded="false"
																   aria-controls="collapse-1-2">
																	Visual Aids
																</a>
															</h4>
														</div>
														<div id="collapse-3-2" class="panel-collapse collapse"
															 role="tabpanel" aria-labelledby="heading-1-2">
															<div class="panel-body">
																Visual Aids Alergies will appear here
															</div>
														</div>
													</div>
												</div>

											</div>
										</div>

									</div>
								</div>

							</div>
							<div class="tab-pane " id="tab_patient_test">

								<div class="panel-group" id="accordion_test" role="tablist" aria-multiselectable="true">
									<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="heading-test-1">
											<h4 class="panel-title">

												<a role="button" data-toggle="collapse" data-parent="#accordion_test"
												   href="#collapse-test-1" aria-expanded="false"
												   aria-controls="collapse-test-1">
													Amplitude of Accommodation in Diopters
												</a>
											</h4>
										</div>
										<div id="collapse-test-1" class="panel-collapse collapse in" role="tabpanel"
											 aria-labelledby="heading-test-1">
											<div class="panel-body">
												<div class="table-responsive" style="background-color: #e7f8ff; ">
													<table class="table table-bordered" style=" color: #000000">

														<tr style=" color: #000000">
															<th rowspan="1" class="text-center">Method Used</th>
															<th colspan="2" class="text-center">Binocular</th>
															<th class="text-center">Minocular</th>
														</tr>
														<tr style=" color: #000000">
															<th></th>
															<th class="text-center">OD</th>
															<th class="text-center">OS</th>
															<th></th>
														</tr>

														<tr style=" color: #000000">
															<td>Near Card</td>
															<td>
																<div class="checkbox checkbox-success"><input
																		class="styled styled-primary" name="chkQ3"
																		value="option1" aria-label="Single checkbox One"
																		type="checkbox"><label></label></div>
															</td>
															<td>
																<div class="checkbox checkbox-success"><input
																		class="styled styled-danger" name="chkQ3"
																		id="chkQ3" value="option2"
																		aria-label="Single checkbox One"
																		type="checkbox"><label></label></div>
															</td>
															<td>
																<div class="checkbox checkbox-primary"><input
																		class="styled styled-default" name="chkQ3"
																		value="option3" aria-label="Single checkbox One"
																		type="checkbox"><label></label></div>
															</td>
														</tr>

														<tr style=" color: #000000">
															<td>Minus Lens Blur</td>
															<td>
																<div class="checkbox checkbox-success"><input
																		class="styled styled-primary" name="chkQ3"
																		value="option1" aria-label="Single checkbox One"
																		type="checkbox"><label></label></div>
															</td>
															<td>
																<div class="checkbox checkbox-success"><input
																		class="styled styled-danger" name="chkQ3"
																		id="chkQ3" value="option2"
																		aria-label="Single checkbox One"
																		type="checkbox"><label></label></div>
															</td>
															<td>
																<div class="checkbox checkbox-primary"><input
																		class="styled styled-default" name="chkQ3"
																		value="option3" aria-label="Single checkbox One"
																		type="checkbox"><label></label></div>
															</td>
														</tr>

														<tr style=" color: #000000">
															<td>Push Up(Donder's method)</td>
															<td>
																<div class="checkbox checkbox-success"><input
																		class="styled styled-primary" name="chkQ3"
																		value="option1" aria-label="Single checkbox One"
																		type="checkbox"><label></label></div>
															</td>
															<td>
																<div class="checkbox checkbox-success"><input
																		class="styled styled-danger" name="chkQ3"
																		id="chkQ3" value="option2"
																		aria-label="Single checkbox One"
																		type="checkbox"><label></label></div>
															</td>
															<td>
																<div class="checkbox checkbox-primary"><input
																		class="styled styled-default" name="chkQ3"
																		value="option3" aria-label="Single checkbox One"
																		type="checkbox"><label></label></div>
															</td>
														</tr>

													</table>

												</div>

												<div class="row" style="padding: 20px">
													<button class="btn btn-primary pull-right">Save</button>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
							<div class="tab-pane" id="tab_findings">

								<div style="background-color: #f3f3f3; height: 700px; margin: 10px;">
									<div
										style="height: 600px;   display: flex ; align-items: center;  text-align: center;">

										<h4 style="margin: auto; color: #13baf7"> To start taking notes, tap + at the
											bottom of the screen.</h4>


									</div>
									<button class="btn btn-rounded pull-right"
											style="margin: 20px; background-color: #13baf7; color: white; font-size: 25px; width: 50px; height: 50px;">
										+
									</button>
								</div>
							</div>
							<div class="tab-pane active" id="tab_diagnosis">

								<div style="padding-left: 20px;">
									<form>
									<?php

									for ($i = 0; $i < 10; $i++) {
										?>
										<div class="form-check" style="margin-top: 20px;">

											<input type="checkbox" class="form-check-input"  style="width: 20px; height: 20px">
											<label style="font-weight: lighter; color: #000000; font-size: 16px;">Color Blind</label>
										</div>
										<?php
									}
									?>

										<button class="btn " style="background-color: #13baf7; color: white">SUBMIT</button>
									</form>

								</div>
							</div>

						</div>
					</div>
				</div>

			</div>
		</div>
		<!-- /.row -->
	</div>

</div>
<!-- ============================================================== -->
<!-- End Page Content -->
