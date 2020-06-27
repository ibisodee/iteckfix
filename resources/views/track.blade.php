@include('inc.header')

    <main>
        <section class="section-base">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="title">
                            <h2>Track Your Repair</h2>
                            <p>In a Step</p>
                        </div>
                        <form action="track" class="form-box" method="get" data-email="">
                            <div class="row">
                                <div class="col-lg-10">
                                    <p>Input Your Track ID</p>
                                    <input id="id" name="track_id" placeholder="" type="text" class="input-text" required>
                                </div>
                                
                            </div>
                            <button class="btn btn-xs" type="submit">Track Repair</button>
                        </form>
                    </div>
                    <div class="col-lg-6">
                    @foreach($userData['data'] as $user)
                        <hr class="space visible-md" />
                        <div class="title">
                            <h2>Track ID: {{ $user->track_id }}</h2>
                            <p>Tracking Report</p>
                        </div>
                       
                        <table class="table table-border table-time">
                        
                            <thead>
                            
                                <tr>
                                    <th>Status</th>
                                    <th>Date</th>                                    
                                </tr>
                            </thead>
                            <tbody>            
                                <tr><td>{{ $user->status1 }}</td><td>{{ $user->s1date }}</td></tr>                                
                                <tr><td>{{ $user->status2 }}</td><td>{{ $user->s2date }}</td></tr>
                                <tr><td>{{ $user->report }} - {{ $user->name }}</td></tr>                               
                            </tbody>
                                
                        </table>
                        @endforeach  
                    </div>
                </div>
            </div>
        </section>
    </main>
    
@include('inc.footer')