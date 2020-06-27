@include('inc.adminheader')        
<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="page-header">
            <div class="page-title">
                <h3>Assign Technician</h3>
                <p>Admin User</p>
            </div>
        </div>
        
        <div class="row layout-top-spacing">
        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
        <div class="widget-content widget-content-area br-6">
            <div class="table-responsive mb-4 mt-4">
                <table class="multi-table table table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>Track ID</th>
                            <th>Request Name</th>
                            <th>Phone No.</th>
                            <th>Payment Status</th>
                            <th>Amount Billed</th>
                            <th class="text-center">Assign Engr.</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input class="form-control" type="text" value="ABC1002" readonly></td>
                            <td>Onome Takufia</td>
                            <td>09078694834</td>
                            <td>Paid</td>
                            <td>N 2500</td>
                            <td>
                            <select class="custom-select">
                                <option selected>Assign Engr.</option>
                                <option value="1">Tochi Ochima</option>
                                <option value="2">Morris Bright</option>   
                            </select>
                            </td>
                            <td class="text-center"> <button class="btn btn-outline-primary">Assign</button> </td>
                        </tr>
                        
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Salary</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </tfoot>
                </table>
                
                
            </div>
        </div>
    </div>


                    </div>
                    </div>
 
        
        @include('inc.adminfooter')