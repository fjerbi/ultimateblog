<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A web application in which users post their stories and the winner will be awarded">
    <meta name="author" content="Developers365 Jerbi Firas">
    <title>The Ultimate Blog Home Page</title>
    <link href="{{asset('front/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('front/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('front/css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('front/css/lightbox.css')}}" rel="stylesheet">
	<link href="{{asset('front/css/main.css')}}" rel="stylesheet">
	<link href="{{asset('front/css/responsive.css')}}" rel="stylesheet">
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
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                 Logout
                             </a>
                             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                 @csrf
                             </form>
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


    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Blog</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#action-->

    <section id="blog" class="padding-top">
        
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-7">
                    <nav class="navbar navbar-light bg-light" style="margin-top:70px;">
                        <form method="GET" class="form-inline" action="{{ route('search') }}">                          
                            <input class="form-control mr-sm-2" value="{{ isset($query) ? $query : '' }}" aria-label="Search" name="query" type="text" placeholder="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit"> search<i class="ion-ios-search-strong"></i></button>
                        </form>
                    </nav>   
                    
                     
                    <div class="row">
                       
                      @foreach($stories as $story)
                     
                        <div class="col-md-6 col-sm-12 blog-padding-right">
                            <div class="single-blog two-column">
                                <div class="post-thumb">
                                    <a href="{{ route('story.details',$story->slug) }}"><img src="https://elements-video-cover-images-0.imgix.net/files/c59153ca-3e05-4b41-8c95-70dd65500227/inline_image_preview.jpg?auto=compress%2Cformat&fit=min&h=394&w=700&s=c15e336b9593319970b963b94eae1107" class="img-responsive" alt=""></a>
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
                        @endforeach
                        
                    </div>
                   
                 </div>
              
            </div>
        </div>
    </section>
    

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

    <script type="text/javascript" src="{{asset('front/js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('front/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('front/js/lightbox.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('front/js/wow.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('front/js/main.js')}}"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.2/js/toastr.min.js"></script>
</body>
</html>
