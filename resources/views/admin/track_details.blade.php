@include('inc.adminheader')        
<!--  BEGIN CONTENT AREA  -->

<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="page-header">
            <div class="page-title">
                <h3>Track Details</h3>
                <p>Admin User</p>
            </div>
        </div>
        
        <div class="row layout-top-spacing">
        @if ($errors->any())
           <div class="alert alert-danger">
               <ul>
                   @foreach ($errors->all() as $error)
                   <li>{{ $error }}</li>
                   @endforeach
               </ul>
           </div><br />
           @endif
        <div class="col-lg-12 col-12  layout-spacing">
        <!-- Button trigger modal -->
         <button type="button" class="btn btn-secondary mb-2 mr-2" data-toggle="modal" data-target="#registerModal">
           Add New Track
         </button>         

         <!-- Modal -->
         <div class="modal fade register-modal" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
           <div class="modal-dialog" role="document">
             <div class="modal-content">
                 

               <div class="modal-header" id="registerModalLabel">
                 <h4 class="modal-title">Tracking Details</h4>
                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
               </div>
               <div class="modal-body">
               
                   <form method="post" action="/track_details/store" class="simple-example">
                      @csrf
                    <div class="form-group">
                     <input name="track_id" type="text" class="form-control mb-2"  placeholder="Track ID" required="required" >
                   </div>
                   <div class="form-group">
                   <select name="status1" class="selectpicker form-control mb-2">
                        <option value="Your Device is Under Repair Process">Your Device is Under Repair Process</option>
                        <option value="Waiting for Spare from Dealers">Waiting for Spare from Dealers</option>
                    </select>
                    </div>
                   <div class="form-group">
                     <input name="s1date" type="text" id="dateTimeFlatpickr" value="" class="form-control flatpickr flatpickr-input active" type="text" placeholder="Select Date.."  required="required">
                    
                    </div>
                    
                   <button type="submit" class="btn btn-primary mt-2 mb-2 btn-block">Submit</button>
                 </form>

               </div>
               
             </div>
           </div>
         </div>        

        <div class="statbox widget box box-shadow">            
        <div class="widget-content widget-content-area">
        @if($userData['edit'])
            <form method='post' action='/admin/track_details/save'>
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
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">New Status</label>
                <div class="col-sm-10">
                <input class="form-control"  name="status2"  type="text" value='{{ $userData["editData"]->status2 }}' >
                </div>
            </div>
            <div class="form-group row  mb-4">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Date</label>
                <div class="col-sm-10">
                <input class="form-control"  name="s2date"  type="text" value='{{ $userData["editData"]->s2date }}' >
                </div>
            </div>
             
            <input type='hidden' value='{{ $userData["edit"] }}' name='editid'>
            <input type="submit" name="submit" value="update" class="mb-4 btn btn-primary">
            
        </form>
     @endif
     <form method='post' action='/admin/track_details/save'>
                              <!-- Message -->
             @if(Session::has('message'))
             <p >{{ Session::get('message') }}</p>
             @endif

               <table id="individual-col-search" class="table table-hover">
                   <thead>
                       <tr>
                           <th class="text-center">#</th>
                           <th>Track</th>
                           <th>Status1</th>
                           <th>Date1</th>
                           <th>Status2</th>
                           <th>Date2</th>
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
                           <td>{{ $user->status1 }}</td>
                           <td>{{ $user->s1date }}</td>
                           <td>{{ $user->status2 }}</td>
                           <td>{{ $user->s2date }}</td>
                           <td>{{ $user->report }}</td>
                           <td>{{ $user->name }}</td>
                           
                           <td class="text-center"><a href='/admin/track_details/{{ $user->id }}' class="btn btn-outline-primary">Update</a></td>
                           <td class="text-center"><a class="btn btn-outline-danger xs" href='/deleteUser/{{ $user->id }}'>Delete</a></td>
                       </tr> 
                       @endforeach                                           
                   </tbody>
                   
                   <!-- Edit -->
            
               </table>
               </form>
                </div>
             </div>
         </div>
     </div>

</div>
</div>

@include('inc.adminfooter')