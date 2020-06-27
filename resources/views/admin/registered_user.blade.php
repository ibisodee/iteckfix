@include('inc.adminheader')        
<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="page-header">
            <div class="page-title">
                <h3>Registered User</h3>
                <p>Admin User</p>
            </div>
        </div>
        
        <div class="row layout-top-spacing" id="cancel-row">
        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            <div class="table-responsive mb-4 mt-4">
                                <table id="zero-config" class="table table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Registered</th>
                                            <th>Email</th>                                       
                                            <th>Gender</th>
                                            <th>DOB</th>                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                    @if( ! $users->isEmpty() )
                                        @foreach($users as $user)
                                            <tr>
                                                <th scope="row">{{ $user->name }}</th>
                                                <td>{{ $user->number }}</td>
                                                <td>{{ date('Y-m-d', strtotime($user->created_at)) }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->gender }}</td>
                                                <td>{{ $user->dob }}</td>   
                                            </tr>
                                        @endforeach
                                    @endif
                                        
                                        
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Registered</th>
                                            <th>Email</th>                                       
                                            <th>Gender</th>
                                            <th>DOB</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>

 
        </div>


        </div>
        @include('inc.adminfooter')