
        <!-- page content -->
        <div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">

        <div class="right_col" role="main">
            <div class="page-title">
                <div class="title_left">
                    <h3>Optometry Library Inventory</h3>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                <a href="<?php  echo base_url(); ?>index.php/books/add"
                   class="btn btn-primary pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Add book</a>
                <ol class="breadcrumb float:left">
                            
                            <div class="form-inline ">
                                
                                <input type="search" id="itemSearch" class="form-control float:left" placeholder="Search">
                                <label for='itemSearch'><i class="fa fa-search"></i></label>
                            </div> 
                            <div class="clearfix"></div>
                        </div>

                        <!-- Items List Table -->
                        <div class="table table-responsive">
                            <table id= "tbl_peripherals" class="table table-striped bulk_action" style= "width:100%">
                                <thead style="background-color:#E0FFFF">
                                    <tr >
                                        <th>SN/NO</th>
                                        <th>DESCRIPTION</th>
                                        <th>EDITION</th>
                                        <th>AUTHORS/EDITORS</th>
                                        <th>PUBLISHER</th>
                                        <th>YEAR OF PUBLICATION</th>
                                        <th>REMARKS</th>
                                        <th>QUANTITY</th>
                                        
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

<!-- MODAL INFO -->

<div id="frmPeripheralInfo" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title">Book Info</h1>
            </div>

            <div class="modal-body">
                <form id="frm" class="form-horizontal" autocomplete="on">
                
                    

                    <label class="control-label">BOOK INFORMATION</label>
                    <div class="peripheral-line">
                        <div class="form-group">
                            <label class="control-label col-md-2">SN/N0:</label>
                                <div class="col-md-4">
                                    <input required="required" autocomplete="on" type="text" id="sn/noo" placeholder="sn/no" name="sn/no" class="form-control" value="">
                                </div>  </div> 
                                <div class="form-group">
                            <label class="control-label">Description (Optional):</label>
                            <textarea rows="3" name="description" id=" description" placeholder="DESCRIPTION" class="form-control"></textarea>
                        </div>
                        <div class="form-group">

                            <label class="control-label col-md-2">Edition:</label>
                                <div class="col-md-4">
                                    <input required="required" autocomplete="on" type="text" id="edition" name="edition" placeholder="EDITION"class="form-control">
                                </div>
                                <label class="control-label col-md-2">Authors/Editors:</label>
                                <div class="col-md-4">
                                    <input required="required" autocomplete="on" type="text" id="authors" name="author" placeholder="AUTHORS/EDITORS"class="form-control">
                                </div>
                        </div>//
                        <div class="form-group">
                            <label class="control-label col-md-2">Publisher:</label>
                                <div class="col-md-4">
                                    <input required="required" autocomplete="on" type="text" id="publisher" placeholder="PUBLISHER" name="publisher" class="form-control">
                                </div>
                            <label class="control-label col-md-2">YEAR OF PUBLICATION:</label>
                                <div class="col-md-4">
                                    <input required="required" autocomplete="on" type="text" id="year" placeholder="YEAR OF PUBLICATION" name="year" class="form-control">
                                </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2">Remarks:</label>
                                <div class="col-md-4">
                                    <input required="required" autocomplete="on" type="text" id="remarks" placeholder="REMARKS" name="remarks" class="form-control">
                                </div>
                            <label class="control-label col-md-2">Quantity:</label>
                                <div class="col-md-4">
                                    <input required="required" autocomplete="on" type="text" id="quantity" placeholder="QUANTITY" name="quantitY" class="form-control">
                                </div>
                        </div>
                        
                    </div> 
            </div>

            <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success id="btnSubmit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
 </div>
    </div>
</div>


<!-- /MODAL -->