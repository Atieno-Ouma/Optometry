<style>
	.row latestStuffs {
		border-spacing: 10em;
		margin: 5rem auto;
		width: 100%;
		float:left;
		text-align-last:justify;
		display:flex;
		justify-content: space-evenly;
		flex-direction: row;



	}
	.col-sm-4 {
		height:150px;
		width:20%;

		border-radius: 10px;
		border: 1px solid ;
	}
	.row {
		margin-right: -10px;
		margin-left: -10px
	}
	.latestStuffsText{
		color:#FFFFFF;
	}
	.container > div {
		justify-content: space-evenly;
	}
	</style>
        <!-- page content -->
        <div id="page-wrapper">
    <div class="container-fluid">
    <div class="row bg-title">
       
          <div class="">




			  <div class="col-sm-4" style="background-color: #0F92C2">
				  <div class="panel panel-info">
					  <div class="pull-left"><i class="fa fa-tools"></i></div>
					  <div class="pull-right">
						  <div id="totalSpare"></div>
						  <div class="latestStuffsText">ALL Fixed Equipments</div>
					  </div>


				  </div>
			  </div>

			  <div class="col-sm-4" style="background-color: #151B54">
				  <div class="panel panel-info">
					  <div class="pull-left"><i class="fa fa-medkit"></i></div>
					  <div class="pull-right">
						  <div id="totalSpare"></div>
						  <div class="latestStuffsText">ALL CONSUMABLE SUPPLIES</div>
					  </div>


				  </div>
			  </div>


			  <div class="col-sm-4" style="background-color: #F08080">
				  <div class="panel panel-info">
					  <div class="pull-left"><i class="fa fa-books-medical"></i></div>
					  <div class="pull-right">
						  <div id="totalDefected"></div>
						  <div class="latestStuffsText pull-right">BOOKS</div>
					  </div>
				  </div>
			  </div>
			  <div class="col-sm-4" style="background-color:#3cb371 ">
				  <div class="panel panel-info">
					  <div class="pull-left"><i class="fa fa-room"></i></div>
					  <div class="pull-right">
						  <div id="totalDeployed"></div>
						  <div class="latestStuffsText pull-right">ALL ROOMS</div>
					  </div>
				  </div>
			  </div>




			  <div class="clearfix"></div>

			  <div class="table table-responsive">
				  <table id="tbl_computers" class="table table-striped bulk_action" style= "width:100%">
					  <thead style="background-color:#E0FFFF">
					  <tr>
						  <th>SN/NO</th>
						  <th>EQUIPMENT/MATERIALS</th>
						  <th>S-No</th>
						  <th>QUANTITY </th>
						  <th>STATUS</th>
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

