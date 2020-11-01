<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="telephone=no" name="format-detection">
    <meta name="HandheldFriendly" content="true">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @php
        $basic=App\Basic::where('basic_status',1)->where('basic_id',1)->firstOrFail();
        $social=App\SocialMedia::where('sm_status',1)->where('sm_id',1)->firstOrFail();
        $conInfo=App\ContactInformation::where('cont_status',1)->where('cont_id',1)->firstOrFail();
        $copy = App\Copyright::where('copy_status',1)->where('copy_id',1)->firstOrFail();
    @endphp
    <title>{{$basic->basic_title}}</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="{{asset('public/contents/website')}}/assets/css/master.css">
    <link rel="stylesheet" href="{{asset('public/contents/website')}}/assets/css/style.css">
    <!--toastr-->
    <link href="{{asset('public/contents/website')}}/assets/toastr/toastr.min.css" rel="stylesheet" type="text/css" />
    <script src="{{asset('public/contents/website')}}/assets/libs/jquery-1.12.4.min.js"></script>
    <script src="{{asset('public/contents/website')}}/assets/js/sweetalert.min.js"></script>
</head>
<body>
    <div id="page-preloader"><span class="spinner border-t_second_b border-t_prim_a"></span></div>
    <div class="l-theme animated-css" data-header="sticky" data-header-top="200" data-canvas="container">
        <div data-off-canvas="mobile-slidebar left overlay">
            <ul class="yamm nav navbar-nav">
                <li><a href="{{url('/')}}">Home</a></li>
                <li><a href="{{url('about')}}">About</a></li>
                <li><a href="{{url('services')}}">Services</a></li>
                <li><a href="{{url('portfolio')}}">Portfolio</a></li>
                <li><a href="{{url('blog')}}">Blog</a></li>
                <li><a href="{{url('contact')}}">Contact Us</a></li>
            </ul>
        </div>
        <div class="wrap-fixed-menu" id="fixedMenu">
            <nav class="fullscreen-center-menu">
                <div class="menu-main-menu-container">
                    <ul class="nav navbar-nav">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="{{url('about')}}">About</a></li>
                        <li><a href="{{url('services')}}">Services</a></li>
                        <li><a href="{{url('portfolio')}}">Portfolio</a></li>
                        <li><a href="{{url('blog')}}">Blog</a></li>
                        <li><a href="{{url('contact')}}">Contact Us</a></li>
                    </ul>
                </div>
            </nav>
            <button type="button" class="fullmenu-close"><i class="fa fa-times"></i></button>
        </div>
        <header class="header header-topbar-hidden header-boxed-width navbar-fixed-top header-background-trans header-color-white header-logo-white header-navibox-1-left header-navibox-2-left header-navibox-3-right header-navibox-4-right">
            <div class="container container-boxed-width">
                <nav class="navbar" id="nav">
                    <div class="container">
                        <div class="header-navibox-1">
                            <button class="menu-mobile-button visible-xs-block js-toggle-mobile-slidebar toggle-menu-button"><i class="toggle-menu-button-icon"><span></span><span></span><span></span><span></span><span></span><span></span></i></button>
                            <a class="navbar-brand scroll" href="{{url('/')}}"><img class="normal-logo" src="{{asset('public/contents/website')}}/assets/media/general/logo.png" alt="logo"><img class="scroll-logo hidden-xs" src="{{asset('public/contents/website')}}/assets/media/general/logo-dark.png" alt="logo"></a>
                        </div>
                        <div class="header-navibox-2">
                            <ul class="yamm main-menu nav navbar-nav">
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li><a href="{{url('about')}}">About</a></li>
                                <li><a href="{{url('services')}}">Services</a></li>
                                <li><a href="{{url('portfolio')}}">Portfolio</a></li>
                                <li><a href="{{url('blog')}}">Blog</a></li>
                                <li><a href="{{url('contact')}}">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="header-navibox-3">
                            <ul class="nav navbar-nav hidden-xs clearfix vcenter">
                                <li>
                                    <button class="js-toggle-screen toggle-menu-button"><i class="toggle-menu-button-icon"><span></span><span></span><span></span><span></span><span></span><span></span></i></button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        @yield('content')
        <div class="section-area bg-grey">
            <div class="container">
                <div class="b-brands owl-carousel owl-theme enable-owl-carousel" data-min480="1" data-min768="3" data-min992="5" data-min1200="5" data-pagination="false" data-navigation="false" data-auto-play="4000" data-stop-on-hover="true">
                    @php
                        $allPartner=App\Partner::where('partner_status',1)->orderBy('partner_id','ASC')->get();
                    @endphp
                    @foreach($allPartner as $partner)
                    <a class="b-brands__item" href="{{$partner->partner_url}}" target="_blank"><img class="img-responsive center-block" src="{{asset('public/uploads/partner/'.$partner->partner_logo)}}" alt="partner"></a>
                    @endforeach
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <ul class="footer-social-nets">
                            <li class="footer-social-nets__item"><a class="footer-social-nets__link" href="{{ $social->sm_facebook }}">facebook</a></li>
                            <li class="footer-social-nets__item"><a class="footer-social-nets__link" href="{{ $social->sm_twitter }}">twitter</a></li>
                            <li class="footer-social-nets__item"><a class="footer-social-nets__link" href="{{ $social->sm_google }}">google +</a></li>
                            <li class="footer-social-nets__item"><a class="footer-social-nets__link" href="{{ $social->sm_pinterest }}">pinterest</a></li>
                            <li class="footer-social-nets__item"><a class="footer-social-nets__link" href="{{ $social->sm_linkedin }}">LinkedIn</a></li>
                            <li class="footer-social-nets__item"><a class="footer-social-nets__link" href="{{ $social->sm_skype }}">Skype</a></li>
                            <li class="footer-social-nets__item"><a class="footer-social-nets__link" href="{{ $social->sm_youtube }}">youtube</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer__main">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="footer-section">
                                <a class="footer__logo" href="#"><img class="img-responsive" src="{{asset('public/contents/website')}}/assets/media/general/logo-lg.png" alt="Logo"></a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <section class="footer-section footer-section_links">
                                <h3 class="footer-section__title">Useful Links</h3>
                                <ul class="footer-list list-unstyled">
                                    <li class="footer-list__item"><a class="footer-list__link" href="{{url('about')}}">About Us</a></li>
                                    <li class="footer-list__item"><a class="footer-list__link" href="{{url('contact')}}">Contact Us</a></li>
                                    <li class="footer-list__item"><a class="footer-list__link" href="{{url('services')}}">What We Do</a></li>
                                    <li class="footer-list__item"><a class="footer-list__link" href="#">We Are Hiring</a></li>
                                    <li class="footer-list__item"><a class="footer-list__link" href="{{url('portfolio')}}">Our Works</a></li>
                                    <li class="footer-list__item"><a class="footer-list__link" href="{{url('blog')}}">The News</a></li>
                                    <li class="footer-list__item"><a class="footer-list__link" href="#">FAQ’s</a></li>
                                </ul>
                            </section>
                        </div>
                        <div class="col-sm-4">
                            <section class="footer-section">
                                <h3 class="footer-section__title">Contact Info</h3>
                                <p>Address: {{$conInfo->cont_add1}}</p>
                                <p>Phone: {{$conInfo->cont_phone1}} / {{$conInfo->cont_phone2}}</p>
                                <p>Email: {{$conInfo->cont_email1}} </p><a class="footer__link" href="#">get directions</a>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
              <div class="container">
              <div class="row">
                  <div class="col-xs-12">{{ $copy->copy_title }} | All rights reserved by <strong class="font-weight-bold">{{ $copy->copy_creator }}</strong> | Development By <a href="https://creativesystemltd.com/">Creative System Limited</a>.</div>
              </div>
              </div>
          </div>
        </footer>
    </div>
    <script src="{{asset('public/contents/website')}}/assets/libs/jquery-migrate-1.2.1.js"></script>
    <script src="{{asset('public/contents/website')}}/assets/libs/bootstrap/bootstrap.min.js"></script>
    <script src="{{asset('public/contents/website')}}/assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>
    <script src="{{asset('public/contents/website')}}/assets/plugins/owl-carousel/owl.carousel.min.js"></script>
    <script src="{{asset('public/contents/website')}}/assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="{{asset('public/contents/website')}}/assets/plugins/headers/slidebar.js"></script>
    <script src="{{asset('public/contents/website')}}/assets/plugins/headers/header.js"></script>
    <script src="{{asset('public/contents/website')}}/assets/plugins/flowplayer/flowplayer.min.js"></script>
    <script src="{{asset('public/contents/website')}}/assets/plugins/isotope/isotope.pkgd.min.js"></script>
    <script src="{{asset('public/contents/website')}}/assets/plugins/isotope/imagesLoaded.js"></script>
    <script src="{{asset('public/contents/website')}}/assets/plugins/rendro-easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="{{asset('public/contents/website')}}/assets/plugins/rendro-easy-pie-chart/waypoints.min.js"></script>
    <script src="{{asset('public/contents/website')}}/assets/plugins/scrollreveal/scrollreveal.min.js"></script>
    <script src="{{asset('public/contents/website')}}/assets/plugins/revealer/js/anime.min.js"></script>
    <script src="{{asset('public/contents/website')}}/assets/plugins/revealer/js/scrollMonitor.js"></script>
    <script src="{{asset('public/contents/website')}}/assets/plugins/revealer/js/main.js"></script>
    <script src="{{asset('public/contents/website')}}/assets/plugins/animate/wow.min.js"></script>
    <script src="{{asset('public/contents/website')}}/assets/plugins/animate/jquery.shuffleLetters.js"></script>
    <script src="{{asset('public/contents/website')}}/assets/plugins/animate/jquery.scrollme.min.js"></script>
    <script src="{{asset('public/contents/website')}}/assets/js/custom.js"></script>
    <script src="{{asset('public/contents/website')}}/assets/plugins/slider-pro/jquery.sliderPro.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqQ_bBw186KJnMcRByvn5ffZueg88wp1E"></script>
    <script src="{{asset('public/contents/website')}}/assets/js/map-custom.js"></script>

    <!--toastr-->
    <script src="{{asset('public/contents/website')}}/assets/toastr/toastr.min.js"></script>

    <!-- Toastr without composer code start -->
    @if(Session::has('success'))
    <script>
        toastr.success("{{ Session::get('success') }}", "success", {
        positionClass : "toast-top-right",
        closeButton: true,
        progressBar: true,
        timeOut : "3000",
        });
    </script>
    @endif
    @if(Session::has('info'))
    <script>
        toastr.info("{{ Session::get('info') }}");
    </script>
    @endif
    @if(Session::has('warning'))
    <script>
        toastr.warning("{{ Session::get('warning') }}");
    </script>
    @endif
    @if(Session::has('error'))
    <script>
        toastr.error("{{ Session::get('error') }}", "error",{
        positionClass : "toast-top-right",
        closeButton: true,
        progressBar: true,
        timeOut : "3000",
        });
    </script>
    @endif

    <!-- Toastr globaly error show code -->
    <script>
        @if($errors->any())
        @foreach($errors->all() as $error)
            toastr.error('{{ $error }}','Error',{
                closeButton: true,
                progressBar: true,
            });
        @endforeach
        @endif
    </script>
    <!-- Toastr globaly error show code end -->

    <!-- Toastr without composer code end -->
</body>
</html>
