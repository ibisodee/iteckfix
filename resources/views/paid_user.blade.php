@include('inc.adminheader')        
<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="page-header">
            <div class="page-title">
            <h3>All Paid Users</h3>
                <p>Admin User</p>
            </div>
        </div>
        
        <div class="row layout-top-spacing">
        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <div class="table-responsive mb-4 mt-4">
                        <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Track ID</th>
                                    <th>Request Name</th>
                                    <th>Phone No.</th>
                                    <th>Email</th>
                                    <th>Amount Paid</th>
                                    <th>Date Received</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>ABC123</td>
                                    <td>Onome Takufia</td>
                                    <td>08076584938</td>
                                    <td>onome@gmail.com</td>
                                    <td>N2500</td>
                                    <td>11/02/2020</td>
                                    
                                </tr>
                                
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
 
        </div>


        </div>
        @include('inc.adminfooter')