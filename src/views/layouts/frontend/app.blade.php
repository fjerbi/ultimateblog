<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
        <link rel="icon" type="image/png" href="../assets/img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>
         Hkeyet
         حكايات
        </title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <link rel="canonical" href="https://www.creative-tim.com/product/paper-kit-2-pro" />
        <meta name="keywords" content="web hkeyet story website fullstack ">
        <meta name="description" content="Paper Kit 2 PRO is a premium Bootstrap 4 kit provided by Invision and Creative Tim. It is a beautiful cross-platform UI kit featuring over 1000 components, 34 sections and 11 example pages.">
        <meta itemprop="name" content="Paper Kit 2 PRO by Creative Tim">
        <meta itemprop="description" content="Paper Kit 2 PRO is a premium Bootstrap 4 kit provided by Invision and Creative Tim. It is a beautiful cross-platform UI kit featuring over 1000 components, 34 sections and 11 example pages.">
        <meta itemprop="image" content="../../../raw.githubusercontent.com/creativetimofficial/public-assets/master/paper-kit-2-pro-html/opt_pk2p_thumbnail.jpg">
        <!-- Twitter Card data -->
        <meta name="twitter:card" content="product">
        <meta name="twitter:site" content="@creativetim">
        <meta name="twitter:title" content="  Hkeyet حكايات">
        <meta name="twitter:description" content="  Hkeyet
        حكايات is a website in which the user can post his own story, best stories can be chosen to be at our top 5 stories">
        <meta name="twitter:creator" content="@creativetim">
        <meta name="twitter:image" content="../../../raw.githubusercontent.com/creativetimofficial/public-assets/master/paper-kit-2-pro-html/opt_pk2p_thumbnail.jpg">
        <!-- Open Graph data -->
        <meta property="fb:app_id" content="655968634437471">
        <meta property="og:title" content="Hkeyet حكايات"" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="../index.html" />
        <meta property="og:image" content="../../../raw.githubusercontent.com/creativetimofficial/public-assets/master/paper-kit-2-pro-html/opt_pk2p_thumbnail.jpg" />
        <meta property="og:description" content="Hkeyet
        حكايات is a website in which the user can post his own story, best stories can be chosen to be at our top 5 stories" />
        <meta property="og:site_name" content="Creative Tim" />
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link href="../../../maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <!-- CSS Files -->
        <link href="{{asset('front/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
        <link href="{{asset('front/assets/css/paper-kit.mindc68.css?v=2.3.0')}}" rel="stylesheet" />
        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link href="{{asset('front/assets/demo/demo.css')}}" rel="stylesheet" />
        <!-- Extra details for Live View on GitHub Pages -->
        <!-- Google Tag Manager -->
        <script>
          (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
              'gtm.start': new Date().getTime(),
              event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
              j = d.createElement(s),
              dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
              '../../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
          })(window, document, 'script', 'dataLayer', 'GTM-NKDMSK6');
        </script>
        <!-- End Google Tag Manager -->
        @stack('css')
      </head>


<body>

@include('layouts.frontend.partial.header')

@yield('content')

@include('layouts.frontend.partial.footer')

<!-- SCIPTS -->
<script src="{{asset('front/assets/js/core/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('front/assets/js/core/popper.min.js')}}" type="text/javascript"></script>
<script src="{{asset('front/assets/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="{{asset('front/assets/js/plugins/bootstrap-switch.js')}}"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{asset('front/assets/js/plugins/nouislider.min.js')}}" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="{{asset('front/assets/js/plugins/moment.min.js')}}"></script>
<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="{{asset('front/assets/js/plugins/bootstrap-tagsinput.js')}}"></script>
<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="{{asset('front/assets/js/plugins/bootstrap-selectpicker.js')}}" type="text/javascript"></script>
<!--	Plugin for Datetimepicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="{{asset('front/assets/js/plugins/bootstrap-datetimepicker.js')}}" type="text/javascript"></script>
<!--  Vertical nav - dots -->
<!--  Photoswipe files -->
<script src="{{asset('front/assets/js/plugins/photo_swipe/photoswipe.min.js')}}"></script>
<script src="{{asset('front/assets/js/plugins/photo_swipe/photoswipe-ui-default.min.js')}}"></script>
<script src="{{asset('front/assets/js/plugins/photo_swipe/init-gallery.js')}}"></script>
<!--  for Jasny fileupload -->
<script src={{asset('front//assets/js/plugins/jasny-bootstrap.min.js')}}"></script>
<!-- Control Center for Paper Kit: parallax effects, scripts for the example pages etc -->
<script src="{{asset('front/assets/js/paper-kit.mindc68.js?v=2.3.0')}}" type="text/javascript"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
<!--  Plugin for presentation page - isometric cards  -->
<script src="{{asset('front/assets/js/plugins/presentation-page/main.js')}}"></script>
<!-- Sharrre libray -->
<script src="{{asset('front/assets/demo/jquery.sharrre.js')}}"></script>
<script>
  $(document).ready(function() {

    // Facebook Pixel Code Don't Delete
    ! function(f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function() {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window,
      document, 'script', '../../../connect.facebook.net/en_US/fbevents.js');

    try {
      fbq('init', '111649226022273');
      fbq('track', "PageView");

    } catch (err) {
      console.log('Facebook Track Error:', err);
    }

  });
</script>
<noscript>
  <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&amp;ev=PageView&amp;noscript=1" />
</noscript>
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
@stack('js')
</body>
</html>
