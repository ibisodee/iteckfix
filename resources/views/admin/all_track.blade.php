@include('inc.adminheader')        
<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="page-header">
            <div class="page-title">
                <h3>Completed Track Report</h3>
                <p>Admin User</p>
            </div>
        </div>
        
        <div class="row layout-top-spacing" id="cancel-row">
        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            <div class="table-responsive mb-4 mt-4">
                            @if(Session::has('message'))
                            <p >{{ Session::get('message') }}</p>
                            @endif   
                            <table id="zero-config" class="table table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Track ID</th>
                                            <th>1Status - Date</th>
                                            <th>2Status - Date</th>
                                            <th>Report</th>                                       
                                            <th>By</th>
                                                                               
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                    @foreach($userData['data'] as $user)
                                            <tr>
                                            <td class="text-center">{{ $user->id }}</td>
                                            <td>{{ $user->track_id }}</td>                                            
                                            <td>{{ $user->status1 }} - {{ $user->s1date }}</td>
                                            <td>{{ $user->status2 }} - {{ $user->s2date }}</td>                                           
                                            <td>{{ $user->report }}</td>
                                            <td>{{ $user->name }}</td>
                                            </tr>
                                    @endforeach      
                                   
                                        
                                        
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Track ID</th>
                                        <th>1Status - Date</th>
                                        <th>2Status - Date</th>
                                        <th>Report</th>                                       
                                        <th>By</th>
                                                                        
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>

 
        </div>


        </div>
        @include('inc.adminfooter')