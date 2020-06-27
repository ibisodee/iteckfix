@include('inc.pheader')        
        <!--  BEGIN CONTENT AREA  -->
        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="page-header">
                <div class="page-title">
                    <h3>all Request</h3>
                </div>
            </div>

            <div class="row layout-spacing">
                <div class="col-lg-12">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Style 3</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <div class="table-responsive mb-4">
                                <table id="style-3" class="table style-3  table-hover">
                                    <thead>
                                        <tr>
                                        <th>Track ID</th>
                                        <th>Date</th>
                                        <th>Request Name</th>
                                        <th>Phone No.</th>
                                        <th>Email</th>
                                        <th>Amount</th>
                                        <th>Pick Up Address</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    @foreach($repairs as $post)
                                    <tr>
                                       <td>{{ $post->id }}</td>
                                       <td>{{ date('Y-m-d', strtotime($post->created_at)) }}</td>
                                       <td>{{ $post->name }}</td>
                                       <td>{{ $post->number }}</td>
                                       <td>{{ $post->email }}</td>
                                       <td>{{ $post->bill }}</td>
                                       <td>{{ $post->address }}</td>
                                       <td><a href="{{  url('edit/'.$post->id) }}" class="btn btn-primary">Edit</a></td>
                                       <td>
                                       <form action="{{  url('delete/'.$post->id) }}" method="get">
                                        {{ csrf_field() }}
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                      </form>
                                      </td>
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