@include('inc.adminheader')        
<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="page-header">
            <div class="page-title">
            <h3>Payment Reminders</h3>
            <p>Admin User</p>
            </div>
        </div>
        
        <div class="row layout-top-spacing">
        <div class="col-lg-12 col-12  layout-spacing">
                            <div class="statbox widget box box-shadow">
                            <div class="widget-content widget-content-area">
                            <div class="table-responsive mb-4">
                            @if($userData['edit'])
                            
                            <form method='post' action='/admin/payment_reminder/save'>
                            {{ csrf_field() }}
                                        <div class="form-group row  mb-4">
                                            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Track ID</label>
                                            <div class="col-sm-10">
                                            <input class="form-control" name="id" type="text" value='{{ $userData["editData"]->id }}' readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row  mb-4">
                                            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Cost/Bill</label>
                                            <div class="col-sm-10">
                                            <input class="form-control"  name="bill"  type="text"  value='{{ $userData["editData"]->bill }}' >
                                            </div>
                                        </div>  
                                        <div class="form-group row  mb-4">
                                            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Technician</label>
                                            <div class="col-sm-10">
                                            <input class="form-control"  name="repairer"  type="text" value='{{ $userData["editData"]->repairer }}' >
                                            </div>
                                        </div>   

                                        <input type='hidden' value='{{ $userData["edit"] }}' name='editid'>
                                        <input type="submit" name="submit" value="update" class="mb-4 btn btn-primary">
                                   
                               
                                       
                                </form>
                                @endif
                            <form method='post' action='/admin/payment_reminder/save'>
                              <!-- Message -->
                              @if(Session::has('message'))
                              <p >{{ Session::get('message') }}</p>
                              @endif

                                <table id="individual-col-search" class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th>Request on</th>
                                            <th>By</th>
                                            <th>Category</th>
                                            <th>Fault</th>
                                            <th>Model</th>
                                            <th>City</th>
                                            <th>Bill</th>                                            
                                            <th>Engineer</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- List -->
                                        @foreach($userData['data'] as $user)
                                        <tr>
                                            <td class="text-center">{{ $user->id }}</td>
                                            <td>{{ $user->created_at }}</td>
                                            <td>{{ $user->number }}</td>
                                            <td>{{ $user->category }}</td>
                                            <td>{{ $user->fault }}</td>
                                            <td>{{ $user->model }}</td>
                                            <td>{{ $user->city }}</td>
                                            <td>{{ $user->bill }}</td>
                                            <td>{{ $user->repairer }}</td>
                                            <td class="text-center"><a href='/admin/payment_reminder/{{ $user->id }}' class="btn btn-outline-primary">Update</a></td>
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