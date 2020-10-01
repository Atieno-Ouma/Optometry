<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row bg-title">

			<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
				<ol class="breadcrumb pull-left">
					<li><a href="<?php  echo base_url(); ?>index.php/rooms">Rooms</a></li>
					<li class="active">Add Equipment</li>
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
							<label class="col-md-12">Room Number</label>
							<div class="col-md-12">
								<input type="text" placeholder="1"
									   class="form-control form-control-line"> </div>
						</div>
						<div class="form-group">
							<label class="col-md-12">Description</label>
							<div class="col-md-12">
								<textarea rows="2" placeholder=" room description"
									   class="form-control form-control-line"> </div>
						</div>
						<div class="form-group">
							<label class="col-md-12">Number of Equipents</label>
							<div class="col-md-12">
								<input type="text" placeholder="77" class="form-control form-control-line">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-12">Number of defective equipments</label>
							<div class="col-md-12">
								<input type="text" placeholder="90"
									   class="form-control form-control-line"> </div>
						</div>
						
						<div class="form-group">
							<label class="col-md-12">Number od deployed Equipments</label>
							<div class="col-md-12">
								<input type="text" class="form-control form-control-line" placeholder=" 50 "></textarea>
							</div>
						</div>

						
						</div>
						
						<div class="form-group">
							<div class="col-sm-12">
								<button class="btn btn-success pull-right" >Add</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /.row -->
	</div>

</div>