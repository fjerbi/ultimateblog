<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="The Ultimate blog, create your own story and publish it, like comment and view others stories">
    <meta name="author" content="Jerbi Firas fjerbi">
    <title>{{$author->name}}</title>
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
                    

                    </ul>
                </div>
                
            </div>
        </div>
    </header>

   

<section id="page-breadcrumb">
    <div class="vertical-center sun">
         <div class="container">
            <div class="row">
                <div class="action">
                    <div class="col-sm-12">
                        <h1 class="title">{{ $author->name }}'s Profile</h1>
                      
                    </div>                                                                                
                </div>
            </div>
        </div>
    </div>
</section>

   
    <section class="blog-area section">
        <div class="container">

            <div class="row">

                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        
                        @if($stories->count() > 0)
                            @foreach($stories as $story)
                            <div class="col-md-6 col-sm-12">
                                <div class="card h-100">
                                    <div class="single-post post-style-1">

                                       
                                        <a class="avatar" href="{{ route('author.profile',$story->user->name) }}"><img class="img-rounded" src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?f=y" alt={{$story->user->name}}></a>

                                        <div class="col-md-6 col-sm-12 blog-padding-right">
                                            <div class="single-blog two-column">
                                                <div class="post-thumb">
                                                    <a href="{{ route('story.details',$story->slug) }}"><img src="/storage/images/{{$story->image}}" class="img-responsive" alt=""></a>
                                                    <div class="post-overlay">
                                                        <span class="uppercase"><a href="#"><small>{{$story->created_at->diffForHumans()}}</small> <br></a></span>
                                                    </div>
                                                </div>
                                                <div class="post-content overflow">
                                                    <h2 class="post-title bold"><a href="{{ route('story.details',$story->slug) }}">{{ $story->title }}</a></h2>
                                                    <h3 class="post-author"><a href="{{ route('author.profile',$story->user->name) }}">Posted by {{$story->user->name}}</a></h3>
                                                    <p> {{$story->description}}</p>
                                                    <a href="{{ route('story.details',$story->slug) }}" class="read-more">View More</a>
                                                    @guest
                                                    <a   class="btn btn-link btn-neutral" href="javascript:void(0);" onclick="toastr.info('To add favorite list. You need to login first.','Info',{
                                                        closeButton: true,
                                                        progressBar: true,
                                                    })"> <i class="fa fa-thumbs-up" aria-hidden="true"></i>{{ $story->favorite_to_users->count() }}</a>
                                                @else
                                                    <a  class="btn btn-link btn-neutral"  href="javascript:void(0);" onclick="document.getElementById('favorite-form-{{ $story->id }}').submit();"
                                                       class="{{ !Auth::user()->favorite_stories->where('pivot.story_id',$story->id)->count()  == 0 ? 'favorite_stories' : ''}}"> <i class="fa fa-thumbs-up" aria-hidden="true"></i>{{ $story->favorite_to_users->count() }}</a>
                                
                                                    <form id="favorite-form-{{ $story->id }}" method="POST" action="{{ route('story.favorite',$story->id) }}" style="display: none;">
                                                        @csrf
                                                    </form>
                                                @endguest
                                                    <div class="post-bottom overflow">
                                                        <ul class="nav nav-justified post-nav">
                                                            <li><a href="#"><i class="fa fa-tag"></i> Horror</a></li>
                                                            <li><a href="#"><i class="fa fa-eye"></i>{{ $story->view_count }}</a></li>
                                                            <li><a href="#"><i class="fa fa-comments"></i>{{ $story->comments->count() }}</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- single-post -->
                                </div><!-- card -->
                            </div><!-- col-lg-4 col-md-6 -->
                        @endforeach
                        @else
                            <div class="col-md-6 col-sm-12">
                                <div class="card h-100">
                                    <div class="single-post post-style-1">
                                        <div class="blog-info">
                                            <h4 class="title">
                                                <strong>Sorry, No post found :(</strong>
                                            </h4>
                                        </div><!-- blog-info -->
                                    </div><!-- single-post -->
                                </div><!-- card -->
                            </div><!-- col-md-6 col-sm-12 -->
                        @endif

                    </div><!-- row -->

                    {{--<a class="load-more-btn" href="#"><b>LOAD MORE</b></a>--}}

                </div><!-- col-lg-8 col-md-12 -->

                <div class="col-lg-4 col-md-12 ">

                    <div class="single-post info-area ">

                        <div class="about-area">
                            <h4 class="title"><b>ABOUT AUTHOR</b></h4>
                            <p>{{ $author->name }}</p><br>
                            <p>{{ $author->about }}</p><br>
                            <strong>Author Since: {{ $author->created_at}}</strong><br>
                            <strong>Total Posts : {{ $author->stories->count() }}</strong>
                        </div>


                    </div><!-- info-area -->

                </div><!-- col-lg-4 col-md-12 -->

            </div><!-- row -->

        </div><!-- container -->
    </section><!-- section -->



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
</body>
</html>


