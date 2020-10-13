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
					<li><a href="<?php echo base_url(); ?>index.php/fixed">Fixed Assets</a></li>
					<li class="active">Rooms</li>
				</ol>
			</div>
		</div>
		<!-- /.row -->
		<!-- .row -->
		<div class="row">


			<div class="tabbable-panel">
				<div class="tabbable-line">
					<ul class="nav nav-tabs ">
						<li>
							<a href="#Room1" data-toggle="tab">
								Room 1 </a>
						</li>
						<li>
							<a href="#Room2" data-toggle="tab">
								Room 2 </a>
						</li>
						<li>
							<a href="#Room3" data-toggle="tab">
								Room 3 </a>
						</li>
						<li>
							<a href="#Room4" data-toggle="tab">
								Room 4 </a>
						</li>
						<li class="active">
							<a href="#Room5" data-toggle="tab">
								Room 5</a>
						</li>
						<li>
							<a href="#Room6" data-toggle="tab">
								Room 6 </a>
						</li>
						<li>
							<a href="#Room7" data-toggle="tab">
								Room 7 </a>
						</li>
						<li>
							<a href="#Room8" data-toggle="tab">
								Room 8 </a>
						</li>
					</ul>
					<div class="tab-content">
						<div class="page-title">
							<div class="title_left">
								<h3>Equipments</h3>
							</div>
						</div>

						<div class="clearfix"></div>

						<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
							<a href="<?php  echo base_url(); ?>index.php/equipments/add"
							   class="btn btn-primary pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Add Equipment</a>
							<ol class="breadcrumb float:left">
								<div class="form-inline ">

									<input type="search" id="itemSearch" class="form-control float:left" placeholder="Search">
									<label for='itemSearch'><i class="fa fa-search"></i></label>
								</div>

								<div class="clearfix"></div>
						</div>

						<div class="table table-responsive">
							<table id="tbl_computers" class="table table-striped bulk_action" style= "width:100%">
								<thead style="background-color:#E0FFFF">
								<tr>
									<th>SN/NO</th>
									<th>EQUIPMENT/MATERIALS</th>
									<th>Reg No</th>
									<th>QUANTITY </th>
									<th>STATUS</th>
									<th>Remarks</th>
									<th>Action</th>
								</tr>
								</thead>
								<tbody>
								</tbody>
							</table>
						</div>
					</div>
					</div>
				</div>
			</div>



			<!-- /page content -->

							</div>

						</div>
					</div>

		<!-- /.row -->

<!-- ============================================================== -->
<!-- End Page Content -->
