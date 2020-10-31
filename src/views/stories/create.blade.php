<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="The Ultimate blog, create your own story and publish it, like comment and view others stories">
    <meta name="author" content="Jerbi Firas fjerbi">
    <title>Create your Story</title>
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

  @if ($errors->any())
  <div class="alert alert-danger">
      <strong>Whoops!</strong> There were some problems with your input.<br><br>
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif
  @csrf
  <form action="{{ route('ultimateblog.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
      <div class="main">
        <div class="section">
          <div class="container">
           
            <div>
              <div class="row">
                <div class="form-group">
                  <label for="image">Featured Image <span class="required">*</span></label>
                  <input type="file" name="image" id="image" class="form-control">
              </div>
                <div class="col-md-7 col-sm-7">
                  <div class="form-group">
                    <h6>Name
                      <span class="icon-danger">*</span>
                    </h6>
                    <input type="text" class="form-control border-input" name="title" placeholder="enter the title name here...">
                  </div>
                  <div class="form-group">
                    <h6>Description
                      <span class="icon-danger">*</span>
                    </h6>
                    <input type="text" class="form-control border-input" name="description" placeholder="enter the desc name here...">
                  </div>

                  <div class="form-group">
                    <h6>Category
                        <span class="icon-danger">*</span>
                      </h6>
                      <select class="w3-input" name="category">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                  </div>
                  <div class="form-group form-float">
                    <div class="form-line {{ $errors->has('tags') ? 'focused error' : '' }}">
                        <label for="tag">Select Tags</label>
                        <select name="tags[]" id="tag" class="form-control show-tick" data-live-search="true" multiple>
                            @foreach($tags as $tag)
                                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                            @endforeach
                        </select>
                    </div>
                  <div class="form-group">
                    <h6>Description</h6>

                    <textarea id="summernote" name="content" ></textarea>

                    <h5>
                      <small>
                        <span id="textarea-limited-message" class="pull-right">150 characters left</span>
                      </small>
                    </h5>
                  </div>
                 
                    <button class="btn btn-outline-primary" type="submit">Save & Publish </button>
                  
                </div>
              </div>
              
              

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



  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>
 
  <script>
    $(document).ready(function() {
      $sidebar = $('.sidebar');
      $sidebar_img_container = $sidebar.find('.sidebar-background');
      $full_page = $('.full-page');
      $sidebar_responsive = $('body > .navbar-collapse');
      sidebar_mini_active = true;
      window_width = $(window).width();
      fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();
      // if( window_width > 767 && fixed_plugin_open == 'Dashboard' ){
      //     if($('.fixed-plugin .dropdown').hasClass('show-dropdown')){
      //         $('.fixed-plugin .dropdown').addClass('show');
      //     }
      //
      // }
      $('.fixed-plugin a').click(function(event) {
        // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
        if ($(this).hasClass('switch-trigger')) {
          if (event.stopPropagation) {
            event.stopPropagation();
          } else if (window.event) {
            window.event.cancelBubble = true;
          }
        }
      });
      $('.fixed-plugin .active-color span').click(function() {
        $full_page_background = $('.full-page-background');
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        var new_color = $(this).data('color');
        if ($sidebar.length != 0) {
          $sidebar.attr('data-active-color', new_color);
        }
        if ($full_page.length != 0) {
          $full_page.attr('data-active-color', new_color);
        }
        if ($sidebar_responsive.length != 0) {
          $sidebar_responsive.attr('data-active-color', new_color);
        }
      });
      $('.fixed-plugin .background-color span').click(function() {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        var new_color = $(this).data('color');
        if ($sidebar.length != 0) {
          $sidebar.attr('data-color', new_color);
        }
        if ($full_page.length != 0) {
          $full_page.attr('filter-color', new_color);
        }
        if ($sidebar_responsive.length != 0) {
          $sidebar_responsive.attr('data-color', new_color);
        }
      });
      $('.fixed-plugin .img-holder').click(function() {
        $full_page_background = $('.full-page-background');
        $(this).parent('li').siblings().removeClass('active');
        $(this).parent('li').addClass('active');
        var new_image = $(this).find("img").attr('src');
        if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
          $sidebar_img_container.fadeOut('fast', function() {
            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $sidebar_img_container.fadeIn('fast');
          });
        }
        if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
          var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');
          $full_page_background.fadeOut('fast', function() {
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
            $full_page_background.fadeIn('fast');
          });
        }
        if ($('.switch-sidebar-image input:checked').length == 0) {
          var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
          var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');
          $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
          $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
        }
        if ($sidebar_responsive.length != 0) {
          $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
        }
      });
      $('.switch-sidebar-image input').on("switchChange.bootstrapSwitch", function() {
        $full_page_background = $('.full-page-background');
        $input = $(this);
        if ($input.is(':checked')) {
          if ($sidebar_img_container.length != 0) {
            $sidebar_img_container.fadeIn('fast');
            $sidebar.attr('data-image', '#');
          }
          if ($full_page_background.length != 0) {
            $full_page_background.fadeIn('fast');
            $full_page.attr('data-image', '#');
          }
          background_image = true;
        } else {
          if ($sidebar_img_container.length != 0) {
            $sidebar.removeAttr('data-image');
            $sidebar_img_container.fadeOut('fast');
          }
          if ($full_page_background.length != 0) {
            $full_page.removeAttr('data-image', '#');
            $full_page_background.fadeOut('fast');
          }
          background_image = false;
        }
      });
      $('.switch-mini input').on("switchChange.bootstrapSwitch", function() {
        $body = $('body');
        $input = $(this);
        if (paperDashboard.misc.sidebar_mini_active == true) {
          $('body').removeClass('sidebar-mini');
          paperDashboard.misc.sidebar_mini_active = false;
          $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();
        } else {
          $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');
          setTimeout(function() {
            $('body').addClass('sidebar-mini');
            paperDashboard.misc.sidebar_mini_active = true;
          }, 300);
        }
        // we simulate the window Resize so the charts will get updated in realtime.
        var simulateWindowResize = setInterval(function() {
          window.dispatchEvent(new Event('resize'));
        }, 180);
        // we stop the simulation of Window Resize after the animations are completed
        setTimeout(function() {
          clearInterval(simulateWindowResize);
        }, 1000);
      });
    });
  </script>
  <script>
      $(document).ready(function() {
  $('#summernote').summernote();
});
  </script>
  <script>
      $('.popover-dismiss').popover({
  trigger: 'focus'
})
  </script>
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
<!-- Mirrored from demos.creative-tim.com/paper-kit-2-pro/examples/landing-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Mar 2020 13:50:54 GMT -->
</html>
