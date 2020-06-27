@include('inc.adminheader')        
<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="page-header">
            <div class="page-title">
                <h3>Accredited Engineer</h3>
                <p>Admin User</p>
            </div>
        </div>
        
        <div class="row layout-top-spacing">
            <div id="card_5" class="col-lg-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    
                    @foreach($engineers as $engineer)
                    <div class="widget-content widget-content-area ">               
                                
                        <div class="card component-card_5" width="100%" >
                            <div class="card-body ">
                                <p class="card-text">{{ $engineer->focus }}</p>
                                <p class="card-text"> {{ $engineer->area}}</p>
                                <p class="card-text"> {{ $engineer->address }}</p>
                                <p class="card-text"> {{ $engineer->number }}</p>
                                <p class="card-text"> {{ $engineer->email }}</p>

                                <div class="user-info">
                                    <img src="assets/img/profile-7.jpg" class="card-img-top" alt="...">
                                    <div class="media-body">
                                        <h5 class="card-user_name">{{ $engineer->name }}</h5>
                                        <p class="card-user_occupation">{{ $engineer->status }}</p>
                                    </div>
                                </div>
                                <p class="card-text">Below 50 Repairs</p>
                            </div>              
                        </div>                                   
                    </div>
                    @endforeach  
                </div>
            </div>
        @include('inc.adminfooter')