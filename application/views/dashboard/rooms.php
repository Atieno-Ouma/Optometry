
        <!-- page content -->
        <div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">

        <div class="right_col" role="main">
            <div class="page-title">
                <div class="title_left">
                    <h3> ROOM EQUIPMENTS</h3>
                </div>
            </div>

            <div class="clearfix"></div>

             <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
        <a href="<?php  echo base_url(); ?>index.php/rooms/add"
           class="btn btn-primary pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Add Room</a>
        <ol class="breadcrumb float:left">
            <div class="form-inline ">
                                
              <input type="search" id="itemSearch" class="form-control float:left" placeholder="Search">
              <label for='itemSearch'><i class="fa fa-search"></i></label>
          </div> 

           
                            
                        
                            <!-- <div class="form-inline pull-right">
                                <label for='itemSearch'><i class="fa fa-search"></i></label>
                                <input type="search" id="itemSearch" class="form-control" placeholder="Search Items">
                            </div> -->
                            <div class="clearfix"></div>
                        </div>

                        <!-- Items List Table -->
                        <div class="table table-responsive">
                            <table id= "tb2_peripherals" class="table table-striped bulk_action" style= "width:100%">
                                <thead style="background-color:#E0FFFF">
                                    <tr >
                                        <th>ROOM NUMBER</th>
                                        <th>DESCRIPTION </th>
                                        <th>NUMBER OF EQUIPMENTS</th>
                                        <th>DEFECTIVE</th>
                                        <th>DEPLOYED</th>
                                        <th>ACTION</th>
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
        
<!-- MODAL PERIPHERAL -->
<div id="frmPeripheral" class="modal fade">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title">ADD ROOM</h1>
            </div>

            <div class="modal-body">
                <form id="frmAdd" class="form-horizontal form-label-left" autocomplete="on">
                    <label class="control-label">ROOM NO:</label>

                    <div class="col-md-12 form-group has-feedback">
                        <input required="required" autocomplete="on" type="text" id="room_no" placeholder="ROOM NUMBER" name="room_no" class="form-control" value="">
                        
                    </div>
                    <label class="control-label">Description (Optional):</label>
                    <div class="col-md-12 form-group has-feedback">
                        <input required="required" autocomplete="on" type="text" id="description" placeholder="DESCRIPTION" name="description" class="form-control" value="">
                        
                    </div>
                    <label class="control-label">NUMBER OF EQUIPMENTS:</label>
                    <div class="col-md-12 form-group has-feedback">
                        <input required="required" autocomplete="on" type="text" id="no_equipments" placeholder="NUMBER OF EQUIPMENTS" name="no_equipments" class="form-control" value="">
                        
                    </div>
                    <label class="control-label">DEFECTIVE:</label>

                    <div class="col-md-12 form-group has-feedback">
                        <input required="required" autocomplete="on" type="text" id="defective" placeholder="DEFECTIVE" name="defective" class="form-control" value="">
                        
                    </div>
                    <label class="control-label">DEPLOYED:</label>
                    <div class="col-md-12 form-group has-feedback">
                        <input required="required" autocomplete="on" type="text" id="deployed" placeholder="DEPLOYED" name="deployed" class="form-control" value="">
                        
                    </div>



                    

            <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success" id="btnSubmit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<!-- //MODAL PERIPHERAL -->