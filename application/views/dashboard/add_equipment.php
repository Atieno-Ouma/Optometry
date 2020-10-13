<style>
	.form-group {
		display:inline-block;
	}
</style>
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row bg-title">

			<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
				<ol class="breadcrumb pull-left">
					<li><a href="<?php  echo base_url(); ?>index.php/equipments">Equipments</a></li>
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
							<label class="col-md-12">Serial NO</label>
							<div class="col-md-12">
								<input type="text" placeholder="007"
									   class="form-control form-control-line"> </div>
						</div>
						<div class="form-group">
							<label class="col-md-12">Equipment</label>
							<div class="col-md-12">
								<input type="text" placeholder="Slitlamp"
									   class="form-control form-control-line"> </div>
						</div>
						<div class="form-group">
							<label class="col-md-12">Reg Number</label>
							<div class="col-md-12">
								<input type="text" placeholder="086"
									   class="form-control form-control-line"> </div>
						</div>
						<div class="form-group">
							<label class="col-md-12">Quantity</label>
							<div class="col-md-12">
								<input type="text" placeholder="8" class="form-control form-control-line">
							</div>
						</div>

						


						<div class="form-group">
							<label class="col-sm-12">Status</label>
							<div class="col-sm-12">
								<select class="form-control form-control-line">
									<option>functional</option>
									<option>broken</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-12">Remarks</label>
							<div class="col-md-12">
								<textarea rows="2" placeholder="Fixing My Gaze"
										  class="form-control form-control-line"> </textarea>
							</div>
						</div>

						</div>
						
						<div class="form-group">
							<div class="col-sm-12">
								<button class="btn btn-success pull-right" >Add Equipment</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /.row -->
	</div>

</div>
