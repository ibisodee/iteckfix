@include('inc.adminheader')     


<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
   <div class="layout-px-spacing">

       <div class="page-header">
           <div class="page-title">
               <h3>All Completed Request</h3>
               <p>Admin User</p>
           </div>
       </div>
       
       <div class="row layout-top-spacing">
       <div class="row layout-top-spacing" id="cancel-row">
       
           <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
               <div class="widget-content widget-content-area br-6">
                   <div class="table-responsive mb-4 mt-4">
                  
                       <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                           <thead>
                               <tr>
                                   <th>Track ID</th>
                                   <th>Request Name</th>
                                   <th>Phone Number.</th>
                                   <th>Request Date</th>
                                   <th>Paid Amount</th>
                                   <th>Serviced By?</th>
                                   <th>Address</th>
                                   <th>Status</th>
                               </tr>
                           </thead>
                           <tbody>
                                @foreach($repairs as $post)
                                <tr>
                                    <td>{{ $post->id }}</td>
                                    <td>{{ $post->name }}</td>
                                    <td>{{ $post->number }}</td>
                                    <td>{{ date('Y-m-d', strtotime($post->created_at)) }}</td>
                                    <td>{{ $post->amount_paid }}</td>
                                    <td>{{ $post->repairer }}</td>
                                    <td>{{ $post->address }}</td>
                                    <td>{{ $post->status }}</td>
                                    
                                </tr>
                                @endforeach                                                             
                           </tbody>
                       </table>
                      
                   </div>
               </div>
           </div>
           
       @include('inc.adminfooter')