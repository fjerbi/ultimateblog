<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A web application in which users post their stories and the winner will be awarded">
    <meta name="author" content="Developers365 Jerbi Firas">
    <title>{{$story->title}}</title>
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
         



    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">{{$story->title}}</h1>
                          
                        </div>                                                                                
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#page-breadcrumb-->

    <section id="blog-details" class="padding-top">
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
                         <div class="col-md-12 col-sm-12">
                            <div class="single-blog blog-details two-column">
                                <div class="post-thumb">
                                    <a href="#"><img src="https://picsum.photos/200/300" class="img-responsive" alt=""></a>
                                    <div class="post-overlay">
                                        <span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>
                                    </div>
                                </div>
                                <div class="post-content overflow">
                                    <h2 class="post-title bold"><a href="#">{{$story->title}}</a></h2>
                                    <h3 class="post-author"><a href="#">Posted by{{$story->user->name}}</a></h3>
                                    <p>{!! html_entity_decode($story->content) !!} </p>     <div class="post-bottom overflow">
                                        <ul class="nav navbar-nav post-nav">
                                            <li><a href="#"><i class="fa fa-tag"></i>
                                              @foreach($story->categories as $category)

                                              <span ><a href="{{ route('category.stories',$category->slug) }}">{{ $category->name }}</a></span>
                                          @endforeach
                                            </a></li>
                                            <li><a href="#"><i class="fa fa-heart"></i>{{ $story->favorite_to_users->count() }}</a></li>
                                            <li><a href="#"><i class="fa fa-comments"></i>{{ $story->comments->count() }}</a></li>
                                        </ul>
                                        @guest
                                        <a href="javascript:void(0);" onclick="toastr.info('To add favorite list. You need to login first.','Info',{
                                                    closeButton: true,
                                                    progressBar: true,
                                                })"><i class="fa fa-thumbs-up"></i>{{ $story->favorite_to_users->count() }}</a>
                                    @else
                                        <a href="javascript:void(0);" onclick="document.getElementById('favorite-form-{{ $story->id }}').submit();"
                                           class="{{ !Auth::user()->favorite_stories->where('pivot.story_id',$story->id)->count()  == 0 ? 'favorite_stories' : ''}}"><i class="ion-heart"></i>{{ $story->favorite_to_users->count() }}</a>
                                        <form id="favorite-form-{{ $story->id }}" method="POST" action="{{ route('story.favorite',$story->id) }}" style="display: none;">
                                            @csrf
                                        </form>
                                    @endguest
                                    </div>
                                    <div class="blog-share">
                                        <span class='st_facebook_hcount'></span>
                                        <span class='st_twitter_hcount'></span>
                                        <span class='st_linkedin_hcount'></span>
                                        <span class='st_pinterest_hcount'></span>
                                        <span class='st_email_hcount'></span>
                                    </div>
                                    <div class="author-profile padding">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <img src="{{asset('front/images/blogdetails/1.png')}}" alt="">
                                            </div>
                                            <div class="col-sm-10">
                                                <h3>{{$story->user->name}}</h3>
                                                <h3>About the author:</h3>
                                                <p>{{ $story->user->about }}</p>
                                                <span>Website:<a href="#"> rework</a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="response-area">
                                    <h2 class="bold">Comments</h2>
                                    <ul class="media-list">
                                        <li class="media">
                                            <div class="post-comment">
                                               
                                               
                                            </div>
                                            <div class="parrent">
                                                <ul class="media-list">
                                                    <li class="post-comment reply">
                                                        <a class="pull-left" href="#">
                                                            <img class="media-object" src="{{asset('front/images/blogdetails/3.png')}}" alt="">
                                                        </a>
                                                        @guest
                            <p>For post a new comment. You need to login first. <a href="{{ route('login') }}">Login</a></p>
                        @else
                        <form method="post" action="{{ route('comment.store',$story->id) }}">
                            @csrf
                                                        <div class="media-body">
                                                          <textarea class="form-control border-input" name="comment" placeholder="type your comment.." rows="4"></textarea>
                                                          <button class="btn btn-primary" type="submit" id="form-submit"><b>POST COMMENT</b></button>
                                                        </div>
                                                      </form>
                                                      @endguest
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="post-comment">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object" src="asset('front/images/blogdetails/4.png')}}" alt="">
                                                </a>
                                                @if($story->comments->count() > 0)
                                                @foreach($story->comments as $comment)
                                                <div class="media-body">
                                                    <span><i class="fa fa-user"></i>Posted by <a href="#">{{ $comment->user->name }}</a></span>
                                                    <p>{{ $comment->comment }}</p>
                                                    <ul class="nav navbar-nav post-nav">
                                                        <li><a href="#"><i class="fa fa-clock-o"></i>{{ $comment->created_at->diffForHumans()}}</a></li>
                                                
                                                    </ul>
                                                </div>
                                                @endforeach
                                                @else
                                                <p>No Comment yet. Be the first :)</p>
                                                @endif
                                            </div>
                                        </li>
                                        
                                    </ul>                   
                                </div><!--/Response-area-->
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
                <div class="col-md-3 col-sm-5">
                    <div class="sidebar blog-sidebar">
      
                       
                        <div class="sidebar-item popular">
                            <h3>Stories you may like</h3>

                            <ul class="gallery">
                              @foreach($randomstories as $randomstory)

                                <li>
                                  <p>{{ $randomstory->title }}</p>
                                  <a href="#"><img src="https://picsum.photos/200/300" alt="{{ $randomstory->title }}" class="img-rounded img-responsive"></a></li>
                             
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center bottom-separator">
                    <img src="images/home/under.png" class="img-responsive inline" alt="">
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
