@include('inc.pheader')        
        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
        <div class="container">
            <div class="container">

                <div class="page-header">
                    <div class="page-title">
                        <h3>Profile Upload</h3>
                    </div>
                </div>

                <div class="row layout-top-spacing">

                    <div id="fuSingleFile" class="col-lg-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Single File Upload</h4>
                                    </div>      
                                </div>
                            </div>
                            <form action="{{ route('addimage') }}" method="Post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="widget-content widget-content-area">
                                    <div class="custom-file-container" data-upload-id="myFirstImage">
                                        <label>Upload Profile Pic<a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image"></a></label>
                                            <label class="custom-file-container__custom-file" >
                                                <input type="file" name="avatar" class="" accept="image/*" onchange="readURL(this);">
                                                <input type="hidden" name="userid" value="{{ Auth::user()->id }}" />
                                                <span class="custom-file-container__custom-file__custom-file-control"></span>
                                            </label>
                                    
                                        <div class="custom-file-container__image-preview"></div>
                                    </div>
                                <button class="btn btn-primary submit-fn mt-2" name="submit" type="submit">Save</button>
                            </form>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            </div>
@include('inc.pfooter')