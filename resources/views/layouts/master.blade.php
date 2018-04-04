<link href="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css')}}" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet prefetch" href="{{asset('http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/user.css')}}">
<!-- Fonts -->
<link rel="dns-prefetch" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
<!-- Styles -->

<!-- Include the above in your HEAD tag -->

<div class="container">
    <div class="mail-box">
        <aside class="sm-side">
            <div class="user-head">
                <!-- Authentication Links -->
                @guest
                <ul class="navbar-nav ml-auto">
                    <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                    <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                </ul>
                @else
                <a class="inbox-avatar" href="{{url('ticket/'.Auth::user()->id.'/profile')}}">
                    <img  width="64" hieght="60" src="{{Storage::disk('local')->url(Auth::user()->fileimage)}}">
                </a>
                <div class="user-name">
                    <h5><a href="{{url('ticket/'.Auth::user()->id.'/profile')}}">{{ Auth::user()->name }}</a></h5>
                </div>
                <a class="mail-dropdown pull-right" data-toggle="dropdown" href="">
                             	    <i class="fa fa-chevron-down"></i>			
                          	    </a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>

            <ul class="inbox-nav inbox-divider">
                <li class="active">
                    <a href="{{url('ticket')}}"><i class="fa fa-ticket"></i> Mes Tickets </a>
                </li>
                <li>
                    <a href="{{url('ticket/'.Auth::user()->id.'/profile')}}"><i class="fa fa-user"></i> User Profile</a>
                </li>
                <li>
                    <a href="{{url('ticket/Codebarre')}}"><i class=" fa fa-barcode"></i> Mon Code Barre</a>
                </li>
                <li>
                    <a href="{{url('ticket/delete')}}"><i class=" fa fa-trash-o"></i> Tickets Supprimer</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-envelope-o"></i> Sent Mail</a>
                </li>
            </ul>
            <ul class="nav nav-pills nav-stacked labels-info inbox-divider">
                <li>
                    <h4>Labels</h4>
                </li>
                <li> <a href="#"> <i class=" fa fa-sign-blank text-danger"></i> Work </a> </li>
                <li> <a href="#"> <i class=" fa fa-sign-blank text-success"></i> Design </a> </li>
                <li> <a href="#"> <i class=" fa fa-sign-blank text-info "></i> Family </a>
                </li>
                <li> <a href="#"> <i class=" fa fa-sign-blank text-warning "></i> Friends </a>
                </li>
            </ul>

        </aside>
        <aside class="lg-side">
            <div class="inbox-head">
                <form action="{{url('ticket/search')}}" method="post" class="pull-right position">
                    {{csrf_field()}}
                    <div class="input-append">
                        <input type="text" name="search" class="sr-input" placeholder="Search">
                        <button class="btn sr-btn" type="submit"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </div>
            <div class="inbox-body">
       
                @yield('dynamique')
            </div>
        </aside>
        @endguest
    </div>
    <!--<div class="container-fluid footer">
      <div class="container">
          <div class="col-md-2 pad10">
            <img src="logo.png" alt="footer" width="120" class="img-responsive">
          </div>
          <div class="col-md-8 pad10">
            © easyreceipt - 2018-2019 - by easyreceipt
          </div>
      </div>
  </div>-->
</div>
<!-- Scripts -->
<script src="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js')}}"></script>
<script src="{{asset('https://code.jquery.com/jquery-1.11.1.min.js')}}"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
<SCRIPT LANGUAGE='javascript' src="{{asset('assets/js/code128.js')}}"></SCRIPT>
