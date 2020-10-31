<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="The Ultimate blog, create your own story and publish it, like comment and view others stories">
    <meta name="author" content="Jerbi Firas fjerbi">
    <title>The Ultimate Blog Home Page</title>
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


    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">The Ultimate Blog</h1>
                            <div class="form-inline" style="margin-left: 450px;">
                                <form method="POST" action="{{ route('subscriber.store') }}">
                                    @csrf
                                    <h2>Subscribe to our Blog</h2>
                                    <input class="form-control mr-sm-2" name="email" type="email" placeholder="Enter your email">
                                    <button class="btn btn-outline-success" type="submit"> Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#action-->

    
    <nav class="navbar navbar-light bg-light" style="margin-top:100px; margin-left:100px">
        <form method="GET" class="form-inline" action="{{ route('search') }}">                          
            <input class="form-control mr-sm-2" value="{{ isset($query) ? $query : '' }}" aria-label="Search" name="query" type="text" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit"> search<i class="ion-ios-search-strong"></i></button>
        </form>
    </nav>   
    <section id="blog" class="padding-top">
        
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-5">
                    <div class="sidebar blog-sidebar">
                        <div class="sidebar-item  recent">
                            <h3>Stories Comments</h3>
                            @foreach($comments as $comment)
                            <div class="media">
                                <div class="pull-left">
                                    <a href="#"><img src="images/portfolio/project1.jpg" alt=""></a>
                                </div>
                                <div class="media-body">
                                    <h4><a href="#">{{$comment->comment}} By <p>{{$comment->user->name}}</p></a></h4>
                                    <p>{{$comment->created_at->diffForHumans()}}</p>
                                
                                </div>
                            </div>
                    @endforeach
                    
                        </div>
                        <div class="sidebar-item categories">
                            <h3>Categories</h3>
                            <ul class="nav navbar-stacked">
                                @foreach($categories as $category)
                                <li>
                                    <a href="#">{{$category->name}}<span class="pull-right"></span></a></li>
                           @endforeach
                            </ul>
                        </div>
                        <div class="sidebar-item tag-cloud">
                            <h3>Tags</h3>
                            <ul class="nav nav-pills">
                                @foreach($tags as $tag)
                                <li>
                                    <a href="#">{{$tag->name}}<span class="pull-right"></span></a></li>
                           @endforeach
                               
                            </ul>
                        </div>
                        <div class="sidebar-item popular">
                            <h3>Latest Stories</h3>
                            <ul class="gallery">
                                Empty
                            </ul>
                        </div>
                    </div>
                </div>
            
                <div class="col-md-9 col-sm-7">
                    <div class="row">
                        @foreach($stories as $story)
                        <div class="col-md-12 col-sm-12">
                            <div class="single-blog two-column">
                                <div class="post-thumb">
                                    
                                    <a href="{{ route('story.details',$story->slug) }}"><img src="/storage/images/{{$story->image}}" style="height: 150px; width:150px" class="img-responsive" alt="{{$story->title}}"></a>
                                    <div class="post-overlay">
                                        <span class="uppercase"><a href="{{ route('story.details',$story->slug) }}"><small>{{$story->created_at->diffForHumans()}}</small> <br></a></span>
                                    </div>
                                </div>
                                <div class="post-content clearfix">
                                    <h2 class="post-title bold"><a href="{{ route('story.details',$story->slug) }}">{{ $story->title }}</a></h2>
                                    <h3 class="post-author"><a href="{{ route('author.profile',$story->user->name) }}">Posted by {{$story->user->name}}</a></h3>
                                    <p> {{$story->description}}</p>               
                                    <a href="{{ route('story.details',$story->slug) }}" class="read-more">View More</a>
                                    <div class="post-bottom clearfix">
                                        <ul class="nav navbar-nav post-nav">
                                            @guest
                                      <li>     <a   class="btn btn-link btn-neutral" href="javascript:void(0);" onclick="toastr.info('To like this story you need first to login.','Info',{
                                                closeButton: true,
                                                progressBar: true,
                                            })"> <i class="fa fa-thumbs-up" aria-hidden="true"></i>{{ $story->favorite_to_users->count() }}</a></li> 
                                        @else
                                        <li>       <a  class="btn btn-link btn-neutral"  href="javascript:void(0);" onclick="document.getElementById('favorite-form-{{ $story->id }}').submit();"
                                               class="{{ !Auth::user()->favorite_stories->where('pivot.story_id',$story->id)->count()  == 0 ? 'favorite_stories' : ''}}"> <i class="fa fa-thumbs-up" aria-hidden="true"></i>{{ $story->favorite_to_users->count() }}</a></li>
                        
                                            <form id="favorite-form-{{ $story->id }}" method="POST" action="{{ route('story.favorite',$story->id) }}" style="display: none;">
                                                @csrf
                                            </form>
                                        @endguest
                                      
                                        <li><a href="#"><i class="fa fa-eye"></i>{{ $story->view_count }}</a></li>
                                        <li><a href="#"><i class="fa fa-comments"></i>{{ $story->comments->count() }}</a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                      
                    </div>
                    <div class="blog-pagination">
                        <ul class="pagination">
                            {{ $stories->links() }}
                        </ul>
                    </div>
                 </div>
              
            </div>
        </div>
    </section>
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


if ($('main').hasClass('dark')) {
   $( '#checkBox' ).prop( "checked", true )
} else {
  $( '#checkBox' ).prop( "checked", false )
}


    </script>
</body>
</html>

