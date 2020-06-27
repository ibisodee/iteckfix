@include('inc.header')

    <main>
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="plugins/select2/select2.min.css">
    <!--  END CUSTOM STYLE FILE  -->
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link href="plugins/flatpickr/custom-flatpickr.css" rel="stylesheet" type="text/css">
    <link href="plugins/noUiSlider/custom-nouiSlider.css" rel="stylesheet" type="text/css">
    <link href="plugins/bootstrap-range-Slider/bootstrap-slider.css" rel="stylesheet" type="text/css">
    <!--  END CUSTOM STYLE FILE  -->
        <section class="section-base">
            <div class="container">
                <div class="row">
                <div class="col-lg-12 layout-spacing">
                           <div class="col-lg-12 layout-spacing">
                                 <div class="statbox widget box box-shadow">
                                     
                                     <div class="widget-content widget-content-area">
                                     @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div><br />
                                        @endif
                                         <form method="post" action="{{ route('repair.store') }}" class="needs-validation" novalidate>
                                            @csrf
                                             <div class="form-row">
                                                <div class="col-md-12">
                                                <small id="" class="form-controlform-text text-muted">Choose Category that Best Describe Device.</small>

                                                    <select name="category" class="custom-select form-control"  required>
                                                        <option value="">Select Device Category</option>
                                                        <optgroup label="PC & Laptop">
                                                            <option value="Desktop">Desktop</option>
                                                            <option value="Workstation">Workstation</option>
                                                            <option value="Convertible(2 in 1)">Convertible(2 in 1)</option>
                                                            <option value="Macbook">Macbook</option>
                                                            <option value="Notebook">Notebook</option>
                                                        </optgroup>
                                                        <optgroup label="Smart Phone & Tablets">
                                                            <option value="iPhone">iPhone</option>
                                                            <option value="Windows Phone">Windows Phone</option>
                                                            <option value="Andriod Phone">Andriod Phone</option>
                                                            <option value="Apple ipad">Apple ipad</option>
                                                            <option value="Andriod">Andriod</option>
                                                            <option value="Playbook">Playbook</option>
                                                        </optgroup>
                                                    </select>
                                                    <div class="valid-feedback">
                                                         Looks good!
                                                     </div>
                                                     <div class="invalid-feedback">
                                                         Please Choose The Device Group
                                                     </div>
                                                 
                                                 <small id="" class="form-controlform-text text-muted">Choose Exact Device the Fault.</small>

                                                    <select name="fault" class="custom-select form-control"  required>                                                        
                                                        <option value="">Select Device Fault</option>
                                                        <optgroup label="Screen">
                                                            <option value="Screen Fix">Screen Fix</option>
                                                            <option value="Screen Fix">Screen Replacement</option>
                                                            <option value="Screen Fix">Blank Screen</option>                                                            
                                                        </optgroup>
                                                        <optgroup label="Battery">
                                                            <option value="Battery Damage">Battery Replacement</option>
                                                            <option value="Battery Damage">Battery Damage</option>                                                            
                                                        </optgroup>
                                                        <optgroup label="General Damage">
                                                        <option value="Dell Blade Server">Dell Blade Server</option>
                                                        <option value="Routers">Routers</option>
                                                    </select>
                                                     <div class="valid-feedback">
                                                         Looks good!
                                                     </div>
                                                     <div class="invalid-feedback">
                                                         Please Choose The Device Fault
                                                     </div>
                                                 
                                                    <small id="" class="form-controlform-text text-muted">Choose or Input Device Brand</small>
                                                    <select name="brand" class=" custom-select form-control basic"  required>                                                        
                                                        <option value="">Choose Device Brand</option>                                                        
                                                        <option value="iphone">iphone</option>
                                                        <option value="Samsung A5">Samsung A5</option> 
                                                     </select>                                                    
                                                     <div class="valid-feedback">
                                                         Looks good!
                                                     </div>
                                                     <div class="invalid-feedback">
                                                         Please Choose The Device Brand
                                                     </div>
                                                     
                                                    <small  id="" class="form-controlform-text text-muted ">Input Device Model If You Know</small>
                                                    <input name="model" type="text" class="form-control" id="model" placeholder="Device Model">
                                                     
                                                    <small id="" class="form-controlform-text text-muted ">Anything Else? if Yes Share.</small>
                                                    <input name="description" type="textarea"  class="form-control" id="description" placeholder="Describe Device Fault">
                                                    
                                                    <small id="" class="form-controlform-text text-muted ">Upload a Picture of Faulty Device is You Can</small>
                                                    <input name="upload" type="file" class="form-control-file" id="">
                                                    
                                                </div>
                                                
                                                
                                                 <div class="col-md-12">
                                                 <br>
                                                    <small id="" class="form-controlform-text text-muted ">Name as on Purchase Receipt or Valid ID</small>
                                                     <input name="name" type="text" class="form-control" id="fullName" placeholder="Full Name" value="" required>
                                                     <div class="valid-feedback">
                                                         Looks good!
                                                     </div>
                                                     <div class="invalid-feedback">
                                                         Please fill Your Full Name
                                                     </div> 

                                                     <small id="" class="form-controlform-text text-muted">Number will be Linked for Discount</small>                                                                                                   
                                                     <input name="number" type="text" class="form-control" id="number" placeholder="Phone Number" value="" required>
                                                     <div class="valid-feedback">
                                                         Looks good!
                                                     </div>
                                                     <div class="invalid-feedback">
                                                         Please fill Phone Number
                                                     </div>
                                                     
                                                     <small id="" class="form-controlform-text text-muted mb-4">We'll never share your email with anyone </small>
                                                     <input name="email" type="text" class="form-control" id="email" placeholder="Email" value="" required>
                                                     <div class="valid-feedback">
                                                         Looks good!
                                                     </div>
                                                     <div class="invalid-feedback">
                                                         Please fill your Email
                                                     </div>
                                                     
                                                     <small id="" class="form-controlform-text text-muted mb-4">Input the Exact Pickup Address / Location</small>                                                     
                                                     <input name="address" type="textarea" class="form-control" id="address" placeholder="Pick Up Address" value="" required>
                                                     <div class="valid-feedback">
                                                         Looks good!
                                                     </div>
                                                     <div class="invalid-feedback">
                                                         Please fill the Pick Up Address
                                                     </div>

                                                 </div>

                                                 <div class="form-row">
                                                    <div class="col">
                                                        <small id="" class="form-controlform-text text-muted mb-4">Your City.</small>    
                                                        <input name="city" type="text" class="form-control" id="address" placeholder="Your City" value="" required>
                                                    </div>
                                                    <div class="col">
                                                        <small id="" class="form-controlform-text text-muted mb-4">Current State</small>
                                                        <input name="state" type="text" class="form-control" id="address" placeholder="Current State" value="" required>
                                                    </div>  
                                                    
                                                    <div class="form-group">
                                                        <small id="" class="form-controlform-text text-muted mb-4">Prefered Pick Date</small>
                                                        <input name="pickdate" id="basicFlatpickr" value="2020-09-04" class="form-control flatpickr flatpickr-input active" type="text" placeholder="Select Date..">
                                                    </div> 
                                                
                                                                                                     
                                                </div>                                             
                                                
                                                 <div class="form-group col-md-12 mb-4">
                                                    <div class="custom-control custom-checkbox checkbox-info">
                                                        <input type="checkbox" class="custom-control-input" id="invalidCheck2" required>
                                                        <label class="custom-control-label" for="invalidCheck2">Agree to terms and conditions</label>
                                                        <div class="invalid-feedback">
                                                            Agree to terms and conditions
                                                        </div>
                                                    </div>
                                                </div>
                                             </div>
                                             <button class="btn btn-primary submit-fn mt-2" type="submit">Send Request</button>
                                         </form>
                                         
                                     </div>
                                 </div>
                                    </div>
                                    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
                                    <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
                                    <script src="bootstrap/js/popper.min.js"></script>
                                    <script src="bootstrap/js/bootstrap.min.js"></script>
                                    <script src="plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
                                    <script src="assets/js/app.js"></script>
                                    
                                    <script>
                                        $(document).ready(function() {
                                            App.init();
                                        });
                                    </script>
                                    <script src="plugins/highlight/highlight.pack.js"></script>
                                    <script src="assets/js/custom.js"></script>
                                    <!-- END GLOBAL MANDATORY SCRIPTS -->
                                    
                                    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
                                    <script src="assets/js/scrollspyNav.js"></script>
                                    <script src="assets/js/forms/bootstrap_validation/bs_validation_script.js"></script>
                                    <!--  END CUSTOM SCRIPTS FILE  -->
                                    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
                                    <script src="assets/js/scrollspyNav.js"></script>
                                    <script src="plugins/select2/select2.min.js"></script>
                                    <script src="plugins/select2/custom-select2.js"></script>
                                    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
                                    <!-- BEGIN PAGE LEVEL SCRIPTS -->
                                    <script src="assets/js/scrollspyNav.js"></script>
                                    <script src="plugins/flatpickr/flatpickr.js"></script>
                                    <script src="plugins/noUiSlider/nouislider.min.js"></script>

                                    <script src="plugins/flatpickr/custom-flatpickr.js"></script>
                                    <script src="plugins/noUiSlider/custom-nouiSlider.js"></script>
                                    <script src="plugins/bootstrap-range-Slider/bootstrap-rangeSlider.js"></script>
                                    <!-- END PAGE LEVEL SCRIPTS -->

                                    
    
                                    </div>
                                                                           
                                </div>
                                
                            </div>
                           
                        </div> 
                </div>
            </div>
        </section>
    </main>
    
@include('inc.footer')