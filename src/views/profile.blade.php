<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="The Ultimate blog, create your own story and publish it, like comment and view others stories">
    <meta name="author" content="Jerbi Firas fjerbi">
    <title>{{Auth::user()->name}}</title>
    <link href="{{asset('vendor/fjerbi/ultimateblog/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/fjerbi/ultimateblog/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/fjerbi/ultimateblog/css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/fjerbi/ultimateblog/css/lightbox.css')}}" rel="stylesheet">
	<link href="{{asset('vendor/fjerbi/ultimateblog/css/main.css')}}" rel="stylesheet">
	<link href="{{asset('vendor/fjerbi/ultimateblog/css/responsive.css')}}" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css" rel="stylesheet" />
    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('vendor/fjerbi/ultimateblog/images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('vendor/fjerbi/ultimateblog/images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('vendor/fjerbi/ultimateblog/images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('vendor/fjerbi/ultimateblog/images/ico/apple-touch-icon-57-precomposed.png')}}">
</head><!--/head-->


<body id="main">
	<header id="header">      
        
        <div class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="#">
                        <h1>Ultimate Blog</h1>
                    </a>
                    
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href={{route('ultimateblog.index')}}>Home</a></li>
                        
                        @guest
                      <li> <div class="alert alert-danger" role="alert">
                           You need to be logged in in order to create a story
                          </div></li> 
            @else
                        <li><a href={{route('ultimateblog.create')}}>Create A post</a></li>
                        @endguest
                        <li class="dropdown"><a href="#">Account <i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                @guest
                            
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a  class="dropdown-item" href="{{route('profile')}}">
                                        {{ Auth::user()->name }}
                                    </a>
    
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
    
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                   
                                </li>
                            @endguest
                            </ul>
                          
                        </li>                            
                        <li style="margin-top: 16px;">                           
                            <label class="switch">
                              <input type="checkbox" onclick="darkLight()" id="checkBox" >
                              <span class="slider"></span>
                            </label>
                        </li>
                    </ul>
                </div>
                
            </div>
        </div>
    </header>
    <!--/#header-->
         
   
        </ul>
      </div>
    </div>
  </nav>
    <!-- End Navbar -->
    <div class="wrapper">
      <div class="page-header page-header-xs settings-background" style="background-image: url('{{asset('front/assets/img/sections/joshua-earles.jpg')}}');">
        <div class="filter"></div>
      </div>
      <div class="profile-content section">
        <div class="container">
          <div class="row">
            <div class="profile-picture">
              <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-new img-no-padding">
                  <img src="{{asset('https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?f=y')}}" alt="...">
                </div>
                <div class="fileinput-preview fileinput-exists img-no-padding"></div>
                <div>
                  <span class="btn btn-outline-default btn-file btn-round">
                  

                    <span class="fileinput-exists">Change</span>
                    <input type="file" name="...">
                  </span>
                  <br />
                  <a href="#" class="btn btn-link btn-danger fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                </div>
                <h1>{{ Auth::user()->name }}</h1>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 ml-auto mr-auto">
              <form class="settings-form">
                <div class="row">
                  <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                      <label>First Name</label>
                      <input type="text" class="form-control border-input" name="name" value = "{{ Auth::user()->name }}" placeholder="Full Name">
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                      <label>Email</label>
                      <input type="text" class="form-control border-input"  value = "{{ Auth::user()->email }}" placeholder="Email">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Job Title</label>
                  <input type="text" class="form-control border-input" placeholder="Job Title">
                </div>
                <div class="form-group">
                  <label>Description</label>
                  <textarea class="form-control textarea-limited" placeholder="This is a textarea limited to 150 characters." rows="3" maxlength="150"></textarea>
                  <h5>
                    <small>
                      <span id="textarea-limited-message" class="pull-right">150 characters left</span>
                    </small>
                  </h5>
                </div>

                <div class="text-center">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                  <button type="submit" class="btn btn-wd btn-info btn-round">Save</button>
                </div>
              </form>
             
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer id="footer">
      <div class="container">
          <div class="row">
              <div class="col-sm-12 text-center bottom-separator">
                  <img src="{{asset('vendor/fjerbi/ultimateblog/images/home/under.png')}}" class="img-responsive inline" alt="">
              </div>
           
       
              <div class="col-sm-12">
                  <div class="copyright-text text-center">
          
                      <p>Ultimate blog by <a target="_blank" href="https://fjerbi.github.io">Firas Jerbi</a></p>
                  </div>
              </div>
          </div>
      </div>
  </footer>
  <!--/#footer-->

  <script type="text/javascript" src="{{asset('vendor/fjerbi/ultimateblog/js/jquery.js')}}"></script>
  <script type="text/javascript" src="{{asset('vendor/fjerbi/ultimateblog/js/bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('vendor/fjerbi/ultimateblog/js/lightbox.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('vendor/fjerbi/ultimateblog/js/wow.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('vendor/fjerbi/ultimateblog/js/main.js')}}"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.2/js/toastr.min.js"></script>
  <script type="text/javascript">
    $('#main').toggleClass(localStorage.toggled);
   
   function darkLight() {
     /*DARK CLASS*/
     if (localStorage.toggled != 'dark') {
       $('#main, p').toggleClass('dark', true);
       localStorage.toggled = "dark";
        
     } else {
       $('#main, p').toggleClass('dark', false);
       localStorage.toggled = "";
     }
   }
   
   /*Add 'checked' property to input if background == dark*/
   if ($('main').hasClass('dark')) {
      $( '#checkBox' ).prop( "checked", true )
   } else {
     $( '#checkBox' ).prop( "checked", false )
   }
   
   
       </script>
</body>
</html>

