@include('inc.pheader')        
        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="page-header">
                <div class="page-title">
                    <h3>Update Account</h3>
                </div>
            </div>
                
            <div class="account-settings-container layout-top-spacing">

                <div class="account-content">
                    <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                <div id="general-info" class="section general-info">
                                    <div class="info section general-info">
                                        <h6 class="">General Information</h6>                                       
                                        <div class="row">
                                            <div class="col-lg-11 mx-auto">
                                                <div class="row">                                                    
                                                    <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                        <div class="form">
                                                        <small id="sh-text4" class="form-text mt-0"> Your Category is only Allowed to Update Phone Number and City.</small>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="fullName">Number</label>
                                                                        <input name="number" type="text" class="form-control mb-4" id="number" placeholder="{{ Auth::user()->number }}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="city">City</label>
                                                                        <input name="city" id="basicFlatpickr" class="form-control flatpickr flatpickr-input active" type="text" placeholder="{{ Auth::user()->city }}">
                                                                        </div>
                                                                        
                                                                </div>
                                                            </div>
                                                            
                                                            <input type="submit" name="submit" value="Update" class="btn btn-primary">
                                                            
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                
            </div>

            </div>
    </div>
    <!--  END CONTENT AREA  -->
@include('inc.pfooter')