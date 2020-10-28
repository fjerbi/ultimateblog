<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A web application in which users post their stories and the winner will be awarded">
    <meta name="author" content="Developers365 Jerbi Firas">
    <title>The Ultimate Blog</title>
    <link href="{{asset('front/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('front/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('front/css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('front/css/lightbox.css')}}" rel="stylesheet">
	<link href="{{asset('front/css/main.css')}}" rel="stylesheet">
	<link href="{{asset('front/css/responsive.css')}}" rel="stylesheet">

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
        <div class="container">
            <div class="row">
                <div class="col-sm-12 overflow">
                   <div class="social-icons pull-right">
                        <ul class="nav nav-pills">
                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                            <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                            <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
             </div>
        </div>
        <div class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="index.html">
                    	<h1><img src="{{asset('front/images/logo.png')}}" alt="logo"></h1>
                    </a>

                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="index.html">Home</a></li>
                        <li class="dropdown"><a href="#">Pages <i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="aboutus.html">About</a></li>
                                <li><a href="aboutus2.html">About 2</a></li>
                                <li><a href="service.html">Services</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="contact.html">Contact us</a></li>
                                <li><a href="contact2.html">Contact us 2</a></li>
                                <li><a href="404.html">404 error</a></li>
                                <li><a href="coming-soon.html">Coming Soon</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="blog.html">Blog <i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="blog.html">Blog Default</a></li>
                                <li><a href="blogtwo.html">Timeline Blog</a></li>
                                <li><a href="blogone.html">2 Columns + Right Sidebar</a></li>
                                <li><a href="blogthree.html">1 Column + Left Sidebar</a></li>
                                <li><a href="blogfour.html">Blog Masonary</a></li>
                                <li><a href="blogdetails.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="portfolio.html">Portfolio <i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="portfolio.html">Portfolio Default</a></li>
                                <li><a href="portfoliofour.html">Isotope 3 Columns + Right Sidebar</a></li>
                                <li><a href="portfolioone.html">3 Columns + Right Sidebar</a></li>
                                <li><a href="portfoliotwo.html">3 Columns + Left Sidebar</a></li>
                                <li><a href="portfoliothree.html">2 Columns</a></li>
                                <li><a href="portfolio-details.html">Portfolio Details</a></li>
                            </ul>
                        </li>
                        <li><a href="shortcodes.html ">Shortcodes</a></li>
                    </ul>
                </div>
                <div class="search">
                    <form role="form" method="GET" action="{{ route('search') }}">
                        <i class="fa fa-search"></i>
                        <div class="field-toggle">
                            <input class="src-input" value="{{ isset($query) ? $query : '' }}" name="query" type="text" placeholder="Search">
                            <button class="btn btn-primary" type="submit"> search<i class="ion-ios-search-strong"></i></button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </header>
    <!--/#header-->

    <section id="home-slider">
        <div class="container">
            <div class="row">
                <div class="main-slider">
                    <div class="slide-text">
                        <h1>Are you passioned ?</h1>
                        <p>If you think you are creative, and you have a talent in writing stories, join us, write your story and if you are lucky your's will be chosen as a future short movie</p>
                        <a href="#" class="btn btn-common">SIGN UP</a>
                    </div>
                    <img src="{{asset('front/images/home/slider/hill.png')}}" class="slider-hill" alt="slider image">
                    <img src="{{asset('front/images/home/slider/house.png')}}" class="slider-house" alt="slider image">
                    <img src="{{asset('front/images/home/slider/sun.png')}}" class="slider-sun" alt="slider image">
                    <img src="{{asset('front/images/home/slider/birds1.png')}}" class="slider-birds1" alt="slider image">
                    <img src="{{asset('front/images/home/slider/birds2.png')}}" class="slider-birds2" alt="slider image">
                </div>
            </div>
        </div>
        <div class="preloader"><i class="fa fa-sun-o fa-spin"></i></div>
    </section>
    <!--/#home-slider-->

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                            <img src="{{asset('front/images/home/icon1.png')}}" alt="">
                        </div>
                        <h2>Incredibly Responsive</h2>
                        <p>Ground round tenderloin flank shank ribeye. Hamkevin meatball swine. Cow shankle beef sirloin chicken ground round.</p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="600ms">
                            <img src="{{asset('front/images/home/icon2.png')}}" alt="">
                        </div>
                        <h2>Superior Typography</h2>
                        <p>Hamburger ribeye drumstick turkey, strip steak sausage ground round shank pastrami beef brisket pancetta venison.</p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
                            <img src="images/home/icon3.png" alt="">
                        </div>
                        <h2>Swift Page Builder</h2>
                        <p>Venison tongue, salami corned beef ball tip meatloaf bacon. Fatback pork belly bresaola tenderloin bone pork kevin shankle.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#services-->

    <section id="action" class="responsive">
        <div class="vertical-center">
             <div class="container">
                <div class="row">
                    <div class="action take-tour">
                        <div class="col-sm-7 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                            <h1 class="title">Triangle Corporate Template</h1>
                            <p>A responsive, retina-ready &amp; wide multipurpose template.</p>
                        </div>
                        <div class="col-sm-5 text-center wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                            <div class="tour-button">
                                <a href="#" class="btn btn-common">TAKE THE TOUR</a>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#action-->

    <section id="features">
        <div class="container">
            <div class="row">
                <div class="single-features">
                    <div class="col-sm-5 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="images/home/image1.png" class="img-responsive" alt="">
                    </div>
                    <div class="col-sm-6 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h2>Experienced and Enthusiastic</h2>
                        <P>Pork belly leberkas cow short ribs capicola pork loin. Doner fatback frankfurter jerky meatball pastrami bacon tail sausage. Turkey fatback ball tip, tri-tip tenderloin drumstick salami strip steak.</P>
                    </div>
                </div>
                <div class="single-features">
                    <div class="col-sm-6 col-sm-offset-1 align-right wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h2>Built for the Responsive Web</h2>
                        <P>Mollit eiusmod id chuck turducken laboris meatloaf pork loin tenderloin swine. Pancetta excepteur fugiat strip steak tri-tip. Swine salami eiusmod sint, ex id venison non. Fugiat ea jowl cillum meatloaf.</P>
                    </div>
                    <div class="col-sm-5 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="images/home/image2.png" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="single-features">
                    <div class="col-sm-5 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="images/home/image3.png" class="img-responsive" alt="">
                    </div>
                    <div class="col-sm-6 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h2>Experienced and Enthusiastic</h2>
                        <P>Ut officia cupidatat anim excepteur fugiat cillum ea occaecat rump pork chop tempor. Ut tenderloin veniam commodo. Shankle aliquip short ribs, chicken eiusmod exercitation shank landjaeger spare ribs corned beef.</P>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <!--/#features-->

    <section id="clients">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="clients text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                        <p><img src="images/home/clients.png" class="img-responsive" alt=""></p>
                        <h1 class="title">This week's winners</h1>
                        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br> Ut enim ad minim veniam, quis nostrud </p>
                    </div>
                    <div class="clients-logo wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="col-xs-3 col-sm-2">
                            <a href="#"><img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxANEBAQEAgJCBAJCAoNDQkJCA8ICQcKIB0iIiAdHx8kKDQsJCYxJx8fLTstMT03MEMwIys9QT81NzQ5LjUBCgoKDQ0OFQ0OFS0ZHxktNzc3Ky0tLSsrLSsrKysrKys3NysrKys3KysrKysrKysrKysrKystKysrKysrKystK//AABEIAMgAyAMBIgACEQEDEQH/xAAcAAABBAMBAAAAAAAAAAAAAAACAAEFBgMEBwj/xAA/EAABAwIEAgcFBgQFBQAAAAABAAIDBBEFEiExBkEHEyJRYXGBkaGxwdEUIzJCUmIzU7LwFUNyouEWJDQ1dP/EABgBAAMBAQAAAAAAAAAAAAAAAAABAgME/8QAIREBAQACAgICAwEAAAAAAAAAAAECEQMxEiFBUSMyYSL/2gAMAwEAAhEDEQA/AN5EgCMISNiMIGrIEA4RAJgiCDHcDc28zYBVXiDHQzNaz8hLW69kuWTizFeqIi63qc7QS6xJIVEqJRmN3mUEk63Gqm1eOOxtxiYXHW2Ga+UWAutWpnLnFxBu8313WCRwve9tdu5M5199fFS0J0l9bm48dltU8tzfMW2IIsT2So95vpt81tQ6Ag3Gmh70G2KurfK68kjpS0ANLzmyNVk4Q4j+zyZJHHq5C0Z76RFVInxSa/Xv11GyCsld6pKtkli2RjwRcFrgQ4LZXE8KxGSFwdHO5op3B3VlxDXjususYRizKljXB4NxfexTZWaSqcIQiTI6dMESAcIghRBIzhEmCdAJJJJAU76owgCMK0CCyALGFkagCWpi1aKeF8n8tmnM3W1dVjjWpvF1YvdxabflDb6kpU52p2J4k+odnediSNzZqjJJgfas8mrTY7Ei9xYhaVvXXfZQ3gwPC/yQXIvry0HcVsNbYa+lxogLNtNz7EbVpiaCTvzWYuJtrf4LL9nNgbG5KmcF4dmqL5Yw1rDq9/epuUiphagQbC5Zm0TNeD4XXSIuCxYBxNzo7TsjuKreN8LGEPc0WMJ7TL6kJTOU7xWK+yQt0G55+CsXDdc5svVipMAkbvcWc4DZVd02m2odq652W1QSZiLGxzDc2srZWO4YA4uhaS8yHtXcTmJKkgo3Ag1sTGtIIZG0XBvcqTVMSRBCCiQDhEEIRNQBJ0ySRiCSYJICnI9kIRBWgQWQLGEbUAM7y0aNzEkAC9hdUrimV17vc0NAcOxdpeFd5G3H96Fc/wCkE2fG0D/Lc5x1slVY9qjJKCdOyLns7hbVJSZ9eXktEC/LmrrwhQde3UAjMRteyyzupt1ceO6wDBC5rXZHW0G3NZP+n3Ft8lzoWsA2C6TS4a1rQMtw0AajYKQgwtgsbd2vgsPOunxik0PC4LGSZM5bldkIsHBWTCoRGCGRn7x9yzIWZVYoaUNFgBa+3ILYjiDe7buS7Pemg2luDyzDUWuFpVuDsk/EMx11U24LHIBZSHAOJMI6ipljDcgaWkN5EWUTTjK4gBt3NLRmcGBi6X0nYbpHUAfhd1ch/byXMy27rHmeZ5Lqwu45eSarqvRnUyTRSl97NkYGk7F1tVdQqX0bSj7NkGUZZ36D8Tirorc17OnCZOCmQkQQBGEASSZOEA6SQSSNT0YQBGFog4WRqxrI1ICVT4+wwSQ9cCQYCAe5zCQrZdYa2mbPG+N7czZWFpCDnquJ9XvY21XQ+j82ZY7teeXNUjF6J1LM+J17sPZNwS5vJWvgeXs6a/fWPgsOWenZxX26lTuvy5eikYWqk1PF0FLdpY6VzSRaM31QUXSFC4gGGWPtW1F9Fh41t5OhBtvanyrQw7FGVDQWncA+Nk+JSua05dzy8UGzVNTHGLvmYweLgFpR4nDK7LHM2TQ6gjKSqW/BWySl9diTspN2wCTI31Ui3BqF1vs07qd4JyyxTl4ze1PUTu7b3FdL19LOwtzOMLnNFrkuGoXD5Wduw53I01K73T0sjWkSTfaBkADrAOuuNvoXPq5I2Mc98VW4Na1pu/tfRXx3SOSbXHovhdkke64BdlYLWDrblX0KG4awg0cbmk5i6Z7mi5IjYdgplbuO9nTpkkyEEYQIggHTpk4QBBMkEkGqARhCEQVoOjahCNqQFZOEyIBAcx49YftNy2xcwaAEWssvCQe6KQRkNcZwMx2YLK18UYA2sbmDi18TTl0u1wuo/gKh6qSoje3WOZrdRuO9Y8l06uH2VE+KjdkFGMRqZsxb1lnNB81sUks1YXONNQwdSw5m9QYzmvsDrdW1vD8T3Z+raHH81rlSMGFMjGlgbk6C11jMnRcUHwwHRyhpjMYkH4bEZVbK0XFhvb3qHcA2dluXhrdTc3Ly9qhdUPEuHTKXdaM73yBzJmyOtA3yW5QcIxtyOD5I3xOJzwkxmQ+PerjG0Hlr5LIG2T3daTdb21mxZW21NhuTclR+FYVFDJLII2AzyZnuIu7MVMPGi0GvAc4HYZSfHdEK1idoSN7OISBQk3J8SU911xwXsSSZOmRwiCEJ7oAgnTBOgHCScJkGqYThMnAVoPZG0oETUBkCJCE4SAvoo6ECOcODQ0TOyl2xLvFSLVq4nShzc4uHwdoEGwcFnyYbjbiz8bqrVSuuB5LYI+CgsFrw9o1voFMmYW35d65XciY+3UHUAM211LlNVDmht3SNYANyQA1VPH6LMRIyofA5rw7M1xy3WxAXyNDZzHMMzdGtJa8+ScmxcosVHKDtIyUcnsIcFsCUH0UZSuEYIEeQX/TYFa9XUu1cwEFmuUiwe1LWk72mZHhREj/vHa6FjfK63DLdoO12g25qNjN3uP7R7VfH2y5v1ZwiQhEulxnThMnCAdEEKcIMQKdME6AcJJJJBVAnCYfNOtEHRA/3dCnCDZQU4QhOEAbUdr6d49yxgrIEggaCoNPM6MmwDzlU9UyucW2c4dg7cyojH6O4EzRd0YGYc3tR4NiGawdrroTyXLnjqu7jz8sRjESDkFHPM9nOUCKMqTpK6fTNhzBf8Lg4Wb7088AkP4dQND3hFFBMLAAEHnmOijbpx8Neyz1TybztjudGNYHm63oaJzRd9RJOXWzZgAAPABbFJS5dScx8tAjq5AxpJOw9yW052XpqVE1rnYNFgNlgg1Bd+s+5A0GdwA2FnOI/I3uWc2uQLdg5SAb5CtuLtyc99CCcIQiut3MJOEITpAScIU7UGMJ0ySAK6SSSAqv1TpikCrQIIghCcIA090IThBjCMIAoPiXiWOiaWtLZp3Dsx3u2LxKR9pmadjnOhzZpBSOmMbdSyMEC59Sq/WxvgOdjbi93N71s9ENIaw11TNI6SScNp+sJ1Y0i5+XsU1W0Bu5hbZ0RLXN7iufl3vbq4dSaYcJx6OQAnU2F9bFpVnp52EXDgLjvXPJsJc1xcwuhd4DsvW3TQVrjZr2kX5jRZ+m26u9RXMYD2xoO/ZQU9S+pcI47O7QLn3u1jUNNw/JJrPVPdpqxgDAVYaGiZC3KyNsY9pcU/SbulR0giYGjU8zze5Vbjyr/AMJr4J+0YsTo2tqYgdpWWGYeNrK/4VTF5D3DssOn73LmHTzUA1FLHfWKklee/U/8LXjx1NsOTKW6WWirI6hgkilbMx40e06LZC4jgePT0D80T7tcRngfrFMP75rpOF8b0c9g6U0bjbs1AytJ89lqxuOlnCdY45A4Ate14cLhzXBzXBEEiEjBQBEgCCdCCiQZwkmCdAVayVk6ZaIEE6HMBqSG+JNgAo3EOIKWnvnqWPI/y4j1ryfRIJVa1fiMNK3NLOyIWNgTdz/IKk4rxtLJdsEYpW3/AIj7SSkfAKsTzPkJc+R8rnbukcXOKW1zD7W/E+O3Ou2ng6sa/fTdp3oFT5pC9xc55e55JL3HM5zkACIBS0kkdf6DH3iqmc2VUT/MFtvkrLxNE+OrjkawvbURxseOQcDa/wAFXuhekMcL5dhWTOA/cG6fVX3iKIERu/QXXSyx3GHLncZ5Y/CEqKMc2WLTqCLEFNDFlIIFvRWfE6eORge6RsLsgIefzqIjp3gX6vO2+kjCHgrK8djsw5ZlAt8Vu4bSmbU3DGnV22c9wUJitYxt2mqihEYa6oeDndSw95V2owwRs6stczq25HMIc1zVWOH2yy5d2zFkY0NAAGUAaACwAXnjpaqutxScXuIGQRDuHZB+JK9DyOsCfBeXeLJjLXVTzqXV0/sutvhE7QiZ3zWUsWN7rabn4KVpLBseqKM3inc0X1heesif6LoWCcfU81mzj7E/QZjd8Dz58lylhRoKx6BgnZK0OZIyVrho+Nwe1yyhcEw/Ep6Y3hqZIDfXI4hrvMK34X0jSssKimZUgWHWRHqZfZshPi6cE4VXoeOqCW16h9KT+WeItA9RcKw01ZFK0OjnimabWfHIHtKCbKSQSQFDxjHYKOwkc5zntJbHG3M4j5Ko1/GVRJcRNZSt77CSS3moziSoMtVK4m9p3NHcGjQKNTtPHGabFTWyzayVE03+uQuAWvZEAlZJZkziiSLb+xAIBG0JmiyNgv7UB3bouonRYfA4jRznSjwaSrPxGLwgg2++aLc3BZOHKMRUcEVrCOjhbtbWy1saiddl9WsB0v8AmVZdObmn+K5R0o01U10VUcRmmY0hjYG3ibQi3KyhsN4kxKfJRx4g9326RkTM9muYT+7cK+dJ88bcPIdGHOmkjjZrlLXXvf3Ll3CznuraXq9HsxCnDdNzcI2vj94Suo4F0cSthnpZsRax9Y2KSaaBhlyNvo3XfmrjwfQOw1n2N1XJWMjLjBLIwMcxvNv0U1S04u91/wCJIfRo0WR8ALSB2bj8Vu1dOaLGfLLOOyf9JXlXF5M9RO7fPWTH0uV6bnqzFE/rRbJC/wC9A7L9PcvLkjsxcf1OcUq0xYysZbfksjihUrYyLJwmOqIBAJKyIJ7IALLJDI5v4XvZYj8Li3VAdETBogO4cIVzqmjgkeczyxzXOO73AkX9yS1ej/8A9fB4mb+opJs641iQ++l/+mb4lYAFmrn5pZSNjPK4eV1gJSXBAJykPkkgwuGnojby8kJRN2HkgFZSGBU3XVMEVv49ZCw8+ySFoWVn6OKbrcTpGnZtQ558gCfknCr0bC2zQP2geS0sWvkNxtztopEAaeCiOMsTbRUcsztcgY1o/U8kAfFO9Ms/cscU6U55HVUMZeerZTZ2R7NDyTc+4LU6Lg1uL02ZgeC6YC+uWTKbFS3SxBaalkH54JW7dxH1UZ0csH+K0hGn30n9JU49I4L+OPRcTbNA8PeiSSCpohuLZBHR1LtslHO7/aV5it8F6P6SZsmGVZ76fJ7SB815xciqxA5AfkiKE/NSsKyNCGyK6AchIhK6RKCA/kO8+5HdANTf9ICJpQbsHRxWNloWMB7VNJIx7eYubj4p1U+i/EBFUvhLrCsi7NzoZRqPddJOM7FBak7n5pJn/JJozM29Eikw6eiElAPv7Ebdh5IGo27IByr10OwZsTYbX6ukqH+WlvmqKum9BdPmq55P5NCG+RLh9E4WXTtrQuY9OVeWwU9OD/5E7pXa7taPqV08lcO6a6rPXxx3uKehZz/C5xJ+ibPR+kBvXUVFUb5izXkMzL/JRXRhFmxOnP8AKbK/y0t81MVv3+ARm1zTCLX9NnZfgVqdEEGauc/lDTewlw+hUTpz8PrDKfVd4SSCSt0KT0wS5MLlF7dbPTt8+0D8l5+cfiu59N8uWgjb/MxCMeliVwxyVVAWQlF9UDt/VJY2pk/0QApkyIZCkD8VjnO3iUGePbzJ9UYKEdydINrDqowSxytNjDMx48bFJazSkgtNcoH7JJINmYdB5BM42SSQCY6/97LLHsPVJJAOuv8AQLHpWv53pWf1JJJxOXTri85dI9T12KVhvcRztiHgGtA+N0kkJiwcJO6/B6uHcxCpsO7TMPetnoYg7U8lt5aZnhpc/MJJKY5J3nP67IEkklbqcw6dn/8Ab0rb/irZDbvs3/lcYcmSSX8BIWMb+qSSFHehCSSQPqgf+IeCZJAZQE90kkAgkkkgP//Z" class="img-responsive" alt=""></a>
                        </div>
                        <div class="col-xs-3 col-sm-2">
                            <a href="#"><img src="data:image/jpeg;base64,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" class="img-responsive" alt=""></a>

                        </div>
                         <div class="col-xs-3 col-sm-2">
                              <a href="#"><img src="data:image/jpeg;base64,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" class="img-responsive" alt=""></a>
                        </div>
                         <div class="col-xs-3 col-sm-2">
                              <a href="#"><img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxANEBAQEAgJCBAJCAoNDQkJCA8ICQcKIB0iIiAdHx8kKDQsJCYxJx8fLTstMT03MEMwIys9QT81NzQ5LjUBCgoKDQ0OFQ0OFS0ZHxktNzc3Ky0tLSsrLSsrKysrKys3NysrKys3KysrKysrKysrKysrKystKysrKysrKystK//AABEIAMgAyAMBIgACEQEDEQH/xAAcAAABBAMBAAAAAAAAAAAAAAACAAEFBgMEBwj/xAA/EAABAwIEAgcFBgQFBQAAAAABAAIDBBEFEiExBkEHEyJRYXGBkaGxwdEUIzJCUmIzU7LwFUNyouEWJDQ1dP/EABgBAAMBAQAAAAAAAAAAAAAAAAABAgME/8QAIREBAQACAgICAwEAAAAAAAAAAAECEQMxEiFBUSMyYSL/2gAMAwEAAhEDEQA/AN5EgCMISNiMIGrIEA4RAJgiCDHcDc28zYBVXiDHQzNaz8hLW69kuWTizFeqIi63qc7QS6xJIVEqJRmN3mUEk63Gqm1eOOxtxiYXHW2Ga+UWAutWpnLnFxBu8313WCRwve9tdu5M5199fFS0J0l9bm48dltU8tzfMW2IIsT2So95vpt81tQ6Ag3Gmh70G2KurfK68kjpS0ANLzmyNVk4Q4j+zyZJHHq5C0Z76RFVInxSa/Xv11GyCsld6pKtkli2RjwRcFrgQ4LZXE8KxGSFwdHO5op3B3VlxDXjususYRizKljXB4NxfexTZWaSqcIQiTI6dMESAcIghRBIzhEmCdAJJJJAU76owgCMK0CCyALGFkagCWpi1aKeF8n8tmnM3W1dVjjWpvF1YvdxabflDb6kpU52p2J4k+odnediSNzZqjJJgfas8mrTY7Ei9xYhaVvXXfZQ3gwPC/yQXIvry0HcVsNbYa+lxogLNtNz7EbVpiaCTvzWYuJtrf4LL9nNgbG5KmcF4dmqL5Yw1rDq9/epuUiphagQbC5Zm0TNeD4XXSIuCxYBxNzo7TsjuKreN8LGEPc0WMJ7TL6kJTOU7xWK+yQt0G55+CsXDdc5svVipMAkbvcWc4DZVd02m2odq652W1QSZiLGxzDc2srZWO4YA4uhaS8yHtXcTmJKkgo3Ag1sTGtIIZG0XBvcqTVMSRBCCiQDhEEIRNQBJ0ySRiCSYJICnI9kIRBWgQWQLGEbUAM7y0aNzEkAC9hdUrimV17vc0NAcOxdpeFd5G3H96Fc/wCkE2fG0D/Lc5x1slVY9qjJKCdOyLns7hbVJSZ9eXktEC/LmrrwhQde3UAjMRteyyzupt1ceO6wDBC5rXZHW0G3NZP+n3Ft8lzoWsA2C6TS4a1rQMtw0AajYKQgwtgsbd2vgsPOunxik0PC4LGSZM5bldkIsHBWTCoRGCGRn7x9yzIWZVYoaUNFgBa+3ILYjiDe7buS7Pemg2luDyzDUWuFpVuDsk/EMx11U24LHIBZSHAOJMI6ipljDcgaWkN5EWUTTjK4gBt3NLRmcGBi6X0nYbpHUAfhd1ch/byXMy27rHmeZ5Lqwu45eSarqvRnUyTRSl97NkYGk7F1tVdQqX0bSj7NkGUZZ36D8Tirorc17OnCZOCmQkQQBGEASSZOEA6SQSSNT0YQBGFog4WRqxrI1ICVT4+wwSQ9cCQYCAe5zCQrZdYa2mbPG+N7czZWFpCDnquJ9XvY21XQ+j82ZY7teeXNUjF6J1LM+J17sPZNwS5vJWvgeXs6a/fWPgsOWenZxX26lTuvy5eikYWqk1PF0FLdpY6VzSRaM31QUXSFC4gGGWPtW1F9Fh41t5OhBtvanyrQw7FGVDQWncA+Nk+JSua05dzy8UGzVNTHGLvmYweLgFpR4nDK7LHM2TQ6gjKSqW/BWySl9diTspN2wCTI31Ui3BqF1vs07qd4JyyxTl4ze1PUTu7b3FdL19LOwtzOMLnNFrkuGoXD5Wduw53I01K73T0sjWkSTfaBkADrAOuuNvoXPq5I2Mc98VW4Na1pu/tfRXx3SOSbXHovhdkke64BdlYLWDrblX0KG4awg0cbmk5i6Z7mi5IjYdgplbuO9nTpkkyEEYQIggHTpk4QBBMkEkGqARhCEQVoOjahCNqQFZOEyIBAcx49YftNy2xcwaAEWssvCQe6KQRkNcZwMx2YLK18UYA2sbmDi18TTl0u1wuo/gKh6qSoje3WOZrdRuO9Y8l06uH2VE+KjdkFGMRqZsxb1lnNB81sUks1YXONNQwdSw5m9QYzmvsDrdW1vD8T3Z+raHH81rlSMGFMjGlgbk6C11jMnRcUHwwHRyhpjMYkH4bEZVbK0XFhvb3qHcA2dluXhrdTc3Ly9qhdUPEuHTKXdaM73yBzJmyOtA3yW5QcIxtyOD5I3xOJzwkxmQ+PerjG0Hlr5LIG2T3daTdb21mxZW21NhuTclR+FYVFDJLII2AzyZnuIu7MVMPGi0GvAc4HYZSfHdEK1idoSN7OISBQk3J8SU911xwXsSSZOmRwiCEJ7oAgnTBOgHCScJkGqYThMnAVoPZG0oETUBkCJCE4SAvoo6ECOcODQ0TOyl2xLvFSLVq4nShzc4uHwdoEGwcFnyYbjbiz8bqrVSuuB5LYI+CgsFrw9o1voFMmYW35d65XciY+3UHUAM211LlNVDmht3SNYANyQA1VPH6LMRIyofA5rw7M1xy3WxAXyNDZzHMMzdGtJa8+ScmxcosVHKDtIyUcnsIcFsCUH0UZSuEYIEeQX/TYFa9XUu1cwEFmuUiwe1LWk72mZHhREj/vHa6FjfK63DLdoO12g25qNjN3uP7R7VfH2y5v1ZwiQhEulxnThMnCAdEEKcIMQKdME6AcJJJJBVAnCYfNOtEHRA/3dCnCDZQU4QhOEAbUdr6d49yxgrIEggaCoNPM6MmwDzlU9UyucW2c4dg7cyojH6O4EzRd0YGYc3tR4NiGawdrroTyXLnjqu7jz8sRjESDkFHPM9nOUCKMqTpK6fTNhzBf8Lg4Wb7088AkP4dQND3hFFBMLAAEHnmOijbpx8Neyz1TybztjudGNYHm63oaJzRd9RJOXWzZgAAPABbFJS5dScx8tAjq5AxpJOw9yW052XpqVE1rnYNFgNlgg1Bd+s+5A0GdwA2FnOI/I3uWc2uQLdg5SAb5CtuLtyc99CCcIQiut3MJOEITpAScIU7UGMJ0ySAK6SSSAqv1TpikCrQIIghCcIA090IThBjCMIAoPiXiWOiaWtLZp3Dsx3u2LxKR9pmadjnOhzZpBSOmMbdSyMEC59Sq/WxvgOdjbi93N71s9ENIaw11TNI6SScNp+sJ1Y0i5+XsU1W0Bu5hbZ0RLXN7iufl3vbq4dSaYcJx6OQAnU2F9bFpVnp52EXDgLjvXPJsJc1xcwuhd4DsvW3TQVrjZr2kX5jRZ+m26u9RXMYD2xoO/ZQU9S+pcI47O7QLn3u1jUNNw/JJrPVPdpqxgDAVYaGiZC3KyNsY9pcU/SbulR0giYGjU8zze5Vbjyr/AMJr4J+0YsTo2tqYgdpWWGYeNrK/4VTF5D3DssOn73LmHTzUA1FLHfWKklee/U/8LXjx1NsOTKW6WWirI6hgkilbMx40e06LZC4jgePT0D80T7tcRngfrFMP75rpOF8b0c9g6U0bjbs1AytJ89lqxuOlnCdY45A4Ate14cLhzXBzXBEEiEjBQBEgCCdCCiQZwkmCdAVayVk6ZaIEE6HMBqSG+JNgAo3EOIKWnvnqWPI/y4j1ryfRIJVa1fiMNK3NLOyIWNgTdz/IKk4rxtLJdsEYpW3/AIj7SSkfAKsTzPkJc+R8rnbukcXOKW1zD7W/E+O3Ou2ng6sa/fTdp3oFT5pC9xc55e55JL3HM5zkACIBS0kkdf6DH3iqmc2VUT/MFtvkrLxNE+OrjkawvbURxseOQcDa/wAFXuhekMcL5dhWTOA/cG6fVX3iKIERu/QXXSyx3GHLncZ5Y/CEqKMc2WLTqCLEFNDFlIIFvRWfE6eORge6RsLsgIefzqIjp3gX6vO2+kjCHgrK8djsw5ZlAt8Vu4bSmbU3DGnV22c9wUJitYxt2mqihEYa6oeDndSw95V2owwRs6stczq25HMIc1zVWOH2yy5d2zFkY0NAAGUAaACwAXnjpaqutxScXuIGQRDuHZB+JK9DyOsCfBeXeLJjLXVTzqXV0/sutvhE7QiZ3zWUsWN7rabn4KVpLBseqKM3inc0X1heesif6LoWCcfU81mzj7E/QZjd8Dz58lylhRoKx6BgnZK0OZIyVrho+Nwe1yyhcEw/Ep6Y3hqZIDfXI4hrvMK34X0jSssKimZUgWHWRHqZfZshPi6cE4VXoeOqCW16h9KT+WeItA9RcKw01ZFK0OjnimabWfHIHtKCbKSQSQFDxjHYKOwkc5zntJbHG3M4j5Ko1/GVRJcRNZSt77CSS3moziSoMtVK4m9p3NHcGjQKNTtPHGabFTWyzayVE03+uQuAWvZEAlZJZkziiSLb+xAIBG0JmiyNgv7UB3bouonRYfA4jRznSjwaSrPxGLwgg2++aLc3BZOHKMRUcEVrCOjhbtbWy1saiddl9WsB0v8AmVZdObmn+K5R0o01U10VUcRmmY0hjYG3ibQi3KyhsN4kxKfJRx4g9326RkTM9muYT+7cK+dJ88bcPIdGHOmkjjZrlLXXvf3Ll3CznuraXq9HsxCnDdNzcI2vj94Suo4F0cSthnpZsRax9Y2KSaaBhlyNvo3XfmrjwfQOw1n2N1XJWMjLjBLIwMcxvNv0U1S04u91/wCJIfRo0WR8ALSB2bj8Vu1dOaLGfLLOOyf9JXlXF5M9RO7fPWTH0uV6bnqzFE/rRbJC/wC9A7L9PcvLkjsxcf1OcUq0xYysZbfksjihUrYyLJwmOqIBAJKyIJ7IALLJDI5v4XvZYj8Li3VAdETBogO4cIVzqmjgkeczyxzXOO73AkX9yS1ej/8A9fB4mb+opJs641iQ++l/+mb4lYAFmrn5pZSNjPK4eV1gJSXBAJykPkkgwuGnojby8kJRN2HkgFZSGBU3XVMEVv49ZCw8+ySFoWVn6OKbrcTpGnZtQ558gCfknCr0bC2zQP2geS0sWvkNxtztopEAaeCiOMsTbRUcsztcgY1o/U8kAfFO9Ms/cscU6U55HVUMZeerZTZ2R7NDyTc+4LU6Lg1uL02ZgeC6YC+uWTKbFS3SxBaalkH54JW7dxH1UZ0csH+K0hGn30n9JU49I4L+OPRcTbNA8PeiSSCpohuLZBHR1LtslHO7/aV5it8F6P6SZsmGVZ76fJ7SB815xciqxA5AfkiKE/NSsKyNCGyK6AchIhK6RKCA/kO8+5HdANTf9ICJpQbsHRxWNloWMB7VNJIx7eYubj4p1U+i/EBFUvhLrCsi7NzoZRqPddJOM7FBak7n5pJn/JJozM29Eikw6eiElAPv7Ebdh5IGo27IByr10OwZsTYbX6ukqH+WlvmqKum9BdPmq55P5NCG+RLh9E4WXTtrQuY9OVeWwU9OD/5E7pXa7taPqV08lcO6a6rPXxx3uKehZz/C5xJ+ibPR+kBvXUVFUb5izXkMzL/JRXRhFmxOnP8AKbK/y0t81MVv3+ARm1zTCLX9NnZfgVqdEEGauc/lDTewlw+hUTpz8PrDKfVd4SSCSt0KT0wS5MLlF7dbPTt8+0D8l5+cfiu59N8uWgjb/MxCMeliVwxyVVAWQlF9UDt/VJY2pk/0QApkyIZCkD8VjnO3iUGePbzJ9UYKEdydINrDqowSxytNjDMx48bFJazSkgtNcoH7JJINmYdB5BM42SSQCY6/97LLHsPVJJAOuv8AQLHpWv53pWf1JJJxOXTri85dI9T12KVhvcRztiHgGtA+N0kkJiwcJO6/B6uHcxCpsO7TMPetnoYg7U8lt5aZnhpc/MJJKY5J3nP67IEkklbqcw6dn/8Ab0rb/irZDbvs3/lcYcmSSX8BIWMb+qSSFHehCSSQPqgf+IeCZJAZQE90kkAgkkkgP//Z" class="img-responsive" alt=""></a>
                        </div>
                         <div class="col-xs-3 col-sm-2">
                            <a href="#"><img src="data:image/jpeg;base64,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" class="img-responsive" alt=""></a>
                       </div>
                         <div class="col-xs-3 col-sm-2">
                              <a href="#"><img src="data:image/jpeg;base64,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" class="img-responsive" alt=""></a>
                          </div>
                    </div>
                </div>
            </div>
        </div>
     </section>
    <!--/#clients-->

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center bottom-separator">
                    <img src="{{asset('front/images/home/under.png')}}" class="img-responsive inline" alt="">
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="testimonial bottom">
                        <h2>Testimonial</h2>
                        <div class="media">
                            <div class="pull-left">
                                <a href="#"><img src="{{asset('front/images/home/profile1.png')}}" alt=""></a>
                            </div>
                            <div class="media-body">
                                <blockquote>Nisi commodo bresaola, leberkas venison eiusmod bacon occaecat labore tail.</blockquote>
                                <h3><a href="#">- Jhon Kalis</a></h3>
                            </div>
                         </div>
                        <div class="media">
                            <div class="pull-left">
                                <a href="#"><img src="{{asset('front/images/home/profile2.png')}}" alt=""></a>
                            </div>
                            <div class="media-body">
                                <blockquote>Capicola nisi flank sed minim sunt aliqua rump pancetta leberkas venison eiusmod.</blockquote>
                                <h3><a href="">- Abraham Josef</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="contact-info bottom">
                        <h2>Contacts</h2>
                        <address>
                        E-mail: <a href="mailto:someone@example.com">email@email.com</a> <br>
                        Phone: +1 (123) 456 7890 <br>
                        Fax: +1 (123) 456 7891 <br>
                        </address>

                        <h2>Address</h2>
                        <address>
                        Unit C2, St.Vincent's Trading Est., <br>
                        Feeder Road, <br>
                        Bristol, BS2 0UY <br>
                        United Kingdom <br>
                        </address>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="contact-form bottom">
                        <h2>Send a message</h2>
                        <form id="main-contact-form" name="contact-form" method="post" action="sendemail.php">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" required="required" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" required="required" placeholder="Email Id">
                            </div>
                            <div class="form-group">
                                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your text here"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-submit" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="copyright-text text-center">
                        <p>&copy; Your Company 2014. All Rights Reserved.</p>
                        <p>Designed by <a target="_blank" href="http://www.themeum.com">Themeum</a></p>
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
</body>
</html>
