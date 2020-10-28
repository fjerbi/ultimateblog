<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A web application in which users post their stories and the winner will be awarded">
    <meta name="author" content="Developers365 Jerbi Firas">
    <title>The Ultimate Blog</title>
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
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('front/images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('front/images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('front/images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('front/images/ico/apple-touch-icon-57-precomposed.png')}}">
</head><!--/head-->


<body>
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
                        <li><a href={{route('stories.index')}}>Home</a></li>
                        <li><a href= {{route('profile')}} >My profile</a></li>
                        
                        @if (Route::has('login'))
                        <div class="top-right links">
                            @auth
                                <a href="{{ url('/me') }}">Hello {{Auth::user()->name}}</a>
                                <li><a href= {{route('logout')}} >Disconnect</a></li>
                            @else
                                <a href="{{ route('login') }}">Login</a>
              
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                                                   
                                          
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
                  <img src="{{asset('https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50')}}" alt="...">
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
                  <img src="{{asset('front/images/home/under.png')}}" class="img-responsive inline" alt="">
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
</body>
</html>

