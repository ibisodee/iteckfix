@include('inc.pheader')        
        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
        <div class="container">
            <div class="container">

                <div class="page-header">
                    <div class="page-title">
                        <h3>Complaint Form</h3>
                    </div>
                </div>
                <div class="row">
                <div class="col-lg-12 col-12 layout-spacing" float="center">
                <div class="statbox widget box box-shadow" >
                     
                    <div class="widget-content widget-content-area">
                        <form>
                            <div class="form-group mb-4">
                                <label for="exampleFormControlInput2">Track ID</label>
                                <input type="text" class="form-control" id="" placeholder="100AG56">
                            </div>
                             
                             
                            <div class="form-group mb-4">
                                <label for="exampleFormControlTextarea1">Message Here.....</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="mt-1">
                                <span class="badge badge-primary w-100">
                                    <small id="sh-text7" class="form-text mt-0 text-left">Please tell Us in Details or SUmmary About Our Services</small>
                                </span>
                            </div>
                            <input type="submit" name="time" class="mt-4 mb-4 btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>

        </div>
                </div>
            </div>
@include('inc.pfooter')