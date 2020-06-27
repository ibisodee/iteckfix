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

        <div class="col-lg-12 col-12  layout-spacing">
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
     
    </div>
        
        
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
                           <th>Name</th>                                            
                           
                           <th>Action</th>
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
                       </tr> 
                       @endforeach                                           
                   </tbody>
                   <tfoot>
                       <tr>
                           <th class="text-center">#</th>              
                       </tr>
                   </tfoot>
                   <!-- Edit -->
            
               </table>
                   
               </form>
        </div>
    </div>

</div>
</div>



        @include('inc.adminfooter')