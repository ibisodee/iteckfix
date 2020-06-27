@include('inc.pheader')        
        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="page-header">
                    <div class="page-title">
                        <h3>Dashboard</h3>
                    </div>
                </div>
                <div class="row">
                <div id="flRegistrationForm" class="col-lg-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">                                
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Send Us an Awesome Testimonial</h4>
                                </div>                                                                        
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <form>
                                  
                                <div class="form-group">
                                    <input type="hidden" name="name" class="form-control" id=" " placeholder="Testimony*">
                                    <input type="hidden" name="city" class="form-control" id=" " placeholder="Testimony*">
                                    <input type="textarea" name="testimony" class="form-control" id=" " placeholder="Testimony*" required>
                                </div>
                                <small id="emailHelp2" class="form-text text-muted">Testimony can be shared Just Once, Feel free to Allow others
                                    Get a Feel of Your Experience with Us
                                </small>
                                
                                <button type="submit" class="btn btn-primary mt-3">Submit</button>
                            </form>

                            
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
@include('inc.pfooter')