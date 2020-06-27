@include('inc.header')

    <main>
        <section class="section-base">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="title">
                            <h2>Contact us here</h2>
                            <p>Write us</p>
                        </div>
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                                </ul>
                            </div>
                        @endif
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                        </div>
                        @endif
                        <form action="{{url('contact/send')}}" class="form-box form-ajax" method="post">
                            <div class="row">
                                <div class="col-lg-6">
                                    <p>Name</p>
                                    <input id="name" name="name" placeholder="" type="text" class="input-text" required>
                                </div>
                                <div class="col-lg-6">
                                    <p>Email</p>
                                    <input id="email" name="email" placeholder="" type="email" class="input-text" required>
                                </div>
                            </div>
                            <p>Messagge</p>
                            <textarea id="message" name="message" class="input-textarea" placeholder="" required></textarea>
                            
                            <input name="send" class="btn btn-xs btn-info" value="Send" type="submit" />

                            
                        </form>
                    </div>
                    <div class="col-lg-6">
                        <hr class="space visible-md" />
                        <div class="title">
                            <h2>When are we open?</h2>
                            <p>Information</p>
                        </div>
                        
                        <table class="table table-border table-time">
                            <thead>
                                <tr>
                                    <th>Day</th>
                                    <th>Morning</th>
                                    <th>Afternoom</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td>Monday - Friday</td><td>8am - 12am</td><td>5pm - 9pm</td></tr>
                                <tr><td>Saturday</td><td>Closed</td><td>5pm - 9pm</td></tr>
                                <tr><td>Sunday</td><td>Closed</td><td>Closed</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
@include('inc.footer')