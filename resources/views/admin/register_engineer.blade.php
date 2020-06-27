@include('inc.adminheader')        
<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="page-header">
            <div class="page-title">
                <h3>Engineer Registration</h3>
                <p>Admin User</p>
            </div>
        </div>
        
        <div class="row layout-top-spacing">
        <div class="col-lg-12 col-12  layout-spacing">
                            
                                
                                <div class="widget-content widget-content-area">
                                
                                   <form action="{{ url('admin/register_engineer') }}" method="post" accept-charset="utf-8">@csrf

                                        <div class="form-row mb-4">
                                            <div class="col">
                                                <input type="text" name="name" class="form-control" placeholder="Engineer Name" required="required" >
                                            </div>
                                            <div class="col">
                                            <input type="text"  name="address" class="form-control" placeholder="Contact Address" required="required">
                                        </div>
                                        </div>
                                        <div class="form-row mb-4">
                                            <div class="col">
                                                <input type="text"  name="number" class="form-control" placeholder="Phone Number" required="required">
                                            </div>
                                            <div class="col">
                                                <input type="text"  name="email" class="form-control" placeholder="Email" required="required">
                                            </div>
                                            <div class="col">
                                                <select  name="focus" class="custom-select mb-4" required="required">
                                                    <option selected>Repair Focus</option>
                                                    <option value="Smart Phone and Tablets">Smart Phone and Tablets</option>
                                                    <option value="PC & Laptops">PC & Laptops</option>
                                                    <option value="Servers & Network">Servers & Network</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <select  name="area" class="custom-select mb-4">
                                                    <option selected>Coverage Area</option>
                                                    <option value="Phalga">Phalga</option>
                                                    <option value="Obia Akpo">Obia Akpo</option>
                                                    <option value="Akulga">Akulga</option>
                                                </select>
                                            </div>                                            
                                            
                                            <div class="col">
                                                <select  name="status" class="custom-select mb-4">
                                                    <option selected>Status</option>
                                                    <option value="Active">Active</option>
                                                    <option value="Suspended">Suspended</option>
                                                    <option value="Volunteer">Volunteer</option>
                                                </select>
                                            </div>
                                            <input name="image" type="file" class="form-control-file" id="">
                                            <small id="" class="form-controlform-text text-muted ">Upload a Picture of Logo</small>
                                                    
                                        </div>
                                        <input type="submit" name="submit" class="btn btn-primary">
                                    </form>

                                </div>
                                
                       
                    </div>

                 </div>
            </div>
 
        </div>


        </div>
        @include('inc.adminfooter')