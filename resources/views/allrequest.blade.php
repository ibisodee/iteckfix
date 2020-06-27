@include('inc.pheader')        
        <!--  BEGIN CONTENT AREA  -->
        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="page-header">
                <div class="page-title">
                    <h3>All Request</h3>
                </div>
            </div>

            <div class="row layout-spacing">
                <div class="col-lg-12">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <form action="allrequest" class="form-box" method="get" data-email="">                                
                                <br>All Request Report are Attached with Only One Phone Number. So we encourage you to Always attach your request with Your Real Phone Numbers to attract Bonus on Multiple Repair Request. Here is Your Official Repair Number is <strong>{{ $user = Auth::user()->number}}  </strong>
                                        <input type='hidden' value='{{ $user = Auth::user()->number}}' name='number' readonly>
                                        <br><input type="submit" class="btn btn-success xs" name="submit" value="Click to View">
                                </form>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <div class="table-responsive mb-4">
                           
                                <table id="style-3" class="table style-3  table-hover">
                                    <thead>
                                        <tr>
                                            <th>Track ID </th>
                                            <th>category</th>
                                            <th>Fault</th>
                                            <th>Brand</th>
                                            <th>Requested</th>
                                            <th>Picked On</th>
                                            <th>Status</th>
                                            <th>Delivered</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($repairs as $user)    
                                        <tr>
                                            <td >{{ $user->id }}</td>
                                            <td >{{ $user->category }}</td>
                                            <td >{{ $user->fault }}</td>
                                            <td >{{ $user->brand }}</td>
                                            <td >{{ $user->created_at }}</td>
                                            <td >{{ $user->pickdate }}</td>
                                            <td >{{ $user->status }}</td>
                                            <td >{{ $user->delivered }}</td>
                                        </tr>
                                    @endforeach      
                                    </tbody>
                                </table>
                                 
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            </div>
@include('inc.pfooter')