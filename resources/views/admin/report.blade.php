@include('inc.adminheader')        
<!--  BEGIN CONTENT AREA  -->
<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
            <div class="layout-px-spacing">

            <div class="page-header">
                <div class="page-title">
                    <h3>Track Details</h3>
                    <p>Admin User</p>
                </div>
            </div>
                
                <div class="row layout-top-spacing" id="cancel-row">                
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                                   
                <div class="row layout-top-spacing">
        @if ($errors->any())
           <div class="aler>t alert-danger">
               <ul>
                   @foreach ($errors->all() as $error)
                   <li>{{ $error }}</li>
                   @endforeach
               </ul>
           </div><br />
        @endif
        <div class="col-lg-12 col-12  layout-spacing">
        
        <div class="statbox widget box box-shadow">            
        <div class="widget-content widget-content-area">
        @if($userData['edit'])
            <form method='post' action='/admin/report/save'>
                {{ csrf_field() }}
            <div class="form-group row  mb-4">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">ID</label>
                <div class="col-sm-10">
                <input class="form-control" name="id" type="text" value='{{ $userData["editData"]->id }}' readonly>
                </div>
            </div>
            
            <div class="form-group row  mb-4">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Track ID</label>
                <div class="col-sm-10">
                <input class="form-control"  name="track_id"  type="text"  value='{{ $userData["editData"]->track_id }}' readonly >
                </div>
            </div>  
            <div class="form-group row  mb-4">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Report</label>
                <div class="col-sm-10">
                <input class="form-control"  name="report"  type="text" value='{{ $userData["editData"]->report }}' >
                </div>
            </div>
            <div class="form-group row  mb-4">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Name</label>
                <div class="col-sm-10">
                <input class="form-control"  name="name"  type="text" value='{{ $userData["editData"]->name }}' >
                </div>
            </div>
             
            <input type='hidden' value='{{ $userData["edit"] }}' name='editid'>
            <input type="submit" name="submit" value="update" class="mb-4 btn btn-primary">
            
        </form>
     @endif
     
</div>
</div>
</div></div>
                        <div class="widget-content widget-content-area br-6">
                            <div class="table-responsive mb-4 mt-4">
                            <form method='post' action='/admin/report/save'>
                                <!-- Message -->
                                @if(Session::has('message'))
                                <p >{{ Session::get('message') }}</p>
                                @endif

                                <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Track</th>                                    
                                        <th>Report</th>
                                        <th>By</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <!-- List -->
                                        @foreach($userData['data'] as $user)
                                        <tr>
                                            <td class="text-center">{{ $user->id }}</td>
                                            <td>{{ $user->track_id }}</td>                                            
                                            
                                            <td>{{ $user->report }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>
                                                <div class="btn-group">
                                                <a href='/admin/report/{{ $user->id }}' class="btn btn-dark btn-sm">Give Report</a>
                                                </div>   
                                            </td>
                                        </tr> 
                                        @endforeach                                           
                                    </tbody>                                    
                                </table>
                            </form>
                            </div>
                        </div>
                    </div>

                </div>

   

@include('inc.adminfooter')
     