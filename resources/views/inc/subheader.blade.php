<!-- 
    *******************
      NAV MENU MOBILE  
    *******************
    -->
    <div class="menu-wrap mobile">
      <div class="container">
        <div class="row">
          <div class="col-md-3 no-padding">
            <a href="home"><img src="img/logo.png" alt="logo" class="logo-menu"></a>
          </div>
          <div class="col-md-9 no-padding">
            <nav class="nav-menu">
              <button id="nav-toggle" class="menu-toggle">
              <span class="icon"></span>
              <span class="icon"></span>
              <span class="icon"></span>
              </button>
              <ul class="main-menu">
                <li class="menu-item"><a href="home">Home</a></li>
                <li class="menu-item"><a href="services">Services</a></li>
                 
                
                <li class="menu-item"><a href="about">About Us</a></li>
                <li class="menu-item"><a href="faq">FAQs</a></li>
                <li class="menu-item"><a href="track">Track</a></li>
                <li class="menu-item"><a href="repair">Request</a></li>
                <li class="menu-item menu-last"><a href="contact">Contact</a></li>
                <li class="menu-item"><a href="{{ route('login') }}" class="btn btn-block btn-default-alt-white">{{ __('Login') }}</a></li>
                <li class="menu-item"><a href="{{ route('register') }}" class="btn btn-block btn-default-alt-white">{{ __('Register') }}</a></li>
              </ul>
              
            </nav>
          </div>
        </div>
      </div>
      
    </div>