@include('inc.header')

    <main>
        <section class="section-base">
            <div class="container">
                <div class="row">
                
                <p>Hi, This is {{ $data['name'] }}</p>
                <p>I have some query like {{ $data['message'] }}.</p>
                <p>It would be appriciative, if you gone through this feedback.</p>

                    
                </div>
            </div>
        </section>
    </main>
    
@include('inc.footer')