@include('inc.adminheader')        
<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="page-header">
            <div class="page-title">
                <h3>Admin Corner</h3>
                <p>Admin Corner</p>
            </div>
        </div>
        
        <div class="row layout-top-spacing">
        <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-one">
                    <div class="widget-heading">
                        <h6 class="">Statistics</h6>
                    </div>
                    <div class="w-chart">
                        <div class="w-chart-section">
                            <div class="w-detail">
                                <p class="w-title">Overall Repairs Request</p>
                                <p class="w-stats">{{ \App\Repairs::all()->count() }}</p>
                            </div>
                            <div class="w-chart-render-one">
                                <div id="total-users"></div>
                            </div>
                        </div>

                        <div class="w-chart-section">
                            <div class="w-detail">
                                <p class="w-title">Total Completed Repair</p>
                                <p class="w-stats">{{ \App\Repairs::all()->whereNotNull('delivered')->count() }}</p>
                            </div>
                            <div class="w-chart-render-one">
                                <div id="paid-visits"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <style>
                .glow {
                    font-size: 80px;
                    color: #fff;
                    text-align: center;
                    -webkit-animation: glow 1s ease-in-out infinite alternate;
                    -moz-animation: glow 1s ease-in-out infinite alternate;
                    animation: glow 1s ease-in-out infinite alternate;
                  }
                  
                  @-webkit-keyframes glow {
                    from {
                      text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
                    }
                    to {
                      text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
                    }
                  }

                
            </style>

            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                <div class="widget widget-account-invoice-two">
                    <div class="widget-content">
                        <div class="w-content">
                        <center>                           
                            <div class="w-info">
                                <h6 class="value glow">{{ \App\User::all()->where('is_admin', 0)->count() }}</h6>
                                <p class="">Total Basic Users Registered</p>
                            </div>
                            <div class="w-info">
                                <h5 class="value glow">{{ \App\User::all()->where('is_admin', 1)->count() }}</h5>
                                <p class="">Total Admin Users</p>
                            </div>
                            
                        </center>    
                        </div>
                    
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                <div class="widget widget-card-four">
                    <div class="widget-content">
                        <div class="w-content">
                            <div class="w-info">
                                <h6 class="value">N {{$sum_amount = \App\Repairs::all()->sum('amount_paid')}}</h6>
                                <p class="">Total Recieved</p>
                            </div>
                            <div class="w-info">
                                <h6 class="value">N {{$sum_bill = \App\Repairs::all()->sum('bill')}}</h6>
                                <p class="">Total Pendng</p>
                            </div>
                            
                            <div class="">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                </div>
                            </div>
                            
                        </div>                        
                        
                        <div class="progress">
                            <div class="progress-bar bg-gradient-secondary" role="progressbar" style="width: {{$balance = $sum_bill - $sum_amount * 0.01}}%" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h6 class="value btn btn-danger">Total Outstanding Amount  N{{$balance = $sum_bill - $sum_amount}}</h6>
                    </div>
                </div>
            </div>

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-table-two">

                    <div class="widget-heading">
                        <h5 class="">Engineers</h5>
                    </div>         

                    <div class="widget-content">
                        <div class="table-responsive">
                        <table class="table">
                        <thead>
                            <tr>
                                <th><div class="th-content">Name</div></th>
                                <th><div class="th-content"></div></th>
                                <th><div class="th-content">Focus</div></th>
                                <th><div class="th-content">Area</div></th>
                                <th><div class="th-content">Address</div></th>
                                <th><div class="th-content">Phone No</div></th>
                                <th><div class="th-content">Since</div></th>
                                <th><div class="th-content">Status</div></th>
                              
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($engineers as $engineer)
                            <tr>
                                <td><div class="td-content customer-name"><img src="{{ asset('assets/img/profile1.png') }}" alt="avatar"><td><div class="td-content">{{ $engineer->name }}</div></td></div></td>
                                <td><div class="td-content">{{ $engineer->focus }}</div></td>
                                <td><div class="td-content">{{ $engineer->area }}</div></td>
                                <td><div class="td-content">{{ $engineer->address }}</div></td>
                                <td><div class="td-content">{{ $engineer->number }}</div></td>
                                <td><div class="td-content">{{ $engineer->created_at }}</div></td>
                                <td><div class="td-content"><span class="badge outline-badge-primary">{{ $engineer->status }}</span></div></td>
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
        @include('inc.adminfooter')