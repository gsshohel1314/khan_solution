@extends('layouts.website')
@section('content')
<div class="main-slider slider-pro text-center" id="main-slider" data-slider-width="100%" data-slider-height="920px" data-slider-arrows="true" data-slider-buttons="true">
    <div class="sp-slides">
        @php
            $allBan=App\Banner::where('ban_publish',1)->orderBy('ban_id','DESC')->get();
        @endphp
        @foreach($allBan as $banner)
        <div class="sp-slide"><img class="sp-image" src="{{asset('public/uploads/banner/'.$banner->ban_image)}}" alt="slider">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="main-slider__info sp-layer" data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="2000" data-show-delay="1200" data-hide-delay="400">{{$banner->ban_details}}</div>
                        <h2 class="main-slider__title sp-layer" data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="800" data-show-delay="400" data-hide-delay="400">{{$banner->ban_title}}</h2>
                        <div class="sp-layer" data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="1200" data-show-delay="2000" data-hide-delay="400"><a class="main-slider__btn btn btn-default btn-round" href="{{$banner->ban_button_url}}">{{$banner->ban_button}}</a></div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- end .main-slider-->
<section class="section-default">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="text-center">
                    <div class="ui-subtitle-block">Tempor incididunt labore dolore veniam</div>
                    <h2 class="ui-title-block-2">Welcome to Khan Solutions</h2>
                    <div class="ui-decor-1 bg-primary"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <section class="b-advantages b-advantages-1  wow  fadeIn" data-wow-duration="1s" data-wow-delay="1s"> <i class="b-advantages__icon stroke flaticon-printed-paper "></i>
                    <div class="b-advantages__inner">
                        <h3 class="b-advantages__title ui-title-inner"><a href="home.html">Multipurpose Design</a></h3>
                        <div class="b-advantages__info">Aorem ipsum dolor sit amet consecteta elit sed lus tempor incididunt ut labore et dolore mag aliqua enia minim veniam quis nostrud exercitation</div>
                    </div>
                </section>
                <!-- end .b-advantages-->
            </div>
            <div class="col-sm-4">
                <section class="b-advantages b-advantages-1 wow  fadeIn" data-wow-duration="1s" data-wow-delay="1.3s"><i class="b-advantages__icon stroke flaticon-computer"></i>
                    <div class="b-advantages__inner">
                        <h3 class="b-advantages__title ui-title-inner"><a href="home.html">Fully Responsive</a></h3>
                        <div class="b-advantages__info">Aorem ipsum dolor sit amet consecteta elit sed lus tempor incididunt ut labore et dolore mag aliqua enia minim veniam quis nostrud exercitation</div>
                    </div>
                </section>
                <!-- end .b-advantages-->
            </div>
            <div class="col-sm-4">
                <section class="b-advantages b-advantages-1 wow  fadeIn" data-wow-duration="1s" data-wow-delay="1.6s"><i class="b-advantages__icon stroke flaticon-bar-chart"></i>
                    <div class="b-advantages__inner">
                        <h3 class="b-advantages__title ui-title-inner"><a href="home.html">Unlimited Features</a></h3>
                        <div class="b-advantages__info">Aorem ipsum dolor sit amet consecteta elit sed lus tempor incididunt ut labore et dolore mag aliqua enia minim veniam quis nostrud exercitation</div>
                    </div>
                </section>
                <!-- end .b-advantages-->
            </div>

            <div class="col-sm-4">
                <section class="b-advantages b-advantages-1 wow  fadeIn" data-wow-duration="1s" data-wow-delay="1.6s"><i class="b-advantages__icon stroke flaticon-bar-chart"></i>
                    <div class="b-advantages__inner">
                        <h3 class="b-advantages__title ui-title-inner"><a href="home.html">Unlimited Features</a></h3>
                        <div class="b-advantages__info">Aorem ipsum dolor sit amet consecteta elit sed lus tempor incididunt ut labore et dolore mag aliqua enia minim veniam quis nostrud exercitation</div>
                    </div>
                </section>
                <!-- end .b-advantages-->
            </div>
        </div>
    </div>
</section>
<!-- end .section-default-->
<div class="section-area bg-grey pruning scrollme-section">
    <div class="section-default section-type-3 area-bg area-bg_blue area-bg_op_90 parallax pull-right">
        <div class="area-bg__inner">
            <ul class="b-tabs-nav nav nav-tabs">
                <li class="active"><a href="#who" data-toggle="tab">who is ozun</a></li>
                <li><a href="#statement" data-toggle="tab">mission statement</a></li>
                <li><a href="#awards" data-toggle="tab">our awards</a></li>
                <li><a href="#strategy" data-toggle="tab">the strategy</a></li>
            </ul>
            <div class="b-tabs-content tab-content">
                <div class="tab-pane active" id="who">
                    <section class="section-area">
                        <h2 class="ui-title-block-3">who we are</h2>
                        <div class="ui-subtitle-block-2">solutions for everyone</div>
                        <div class="ui-decor-2 bg-white"></div>
                        <p>Eorem ipsum dolor sit amet consectetur adipisicing elit sed eiusmod tempor abore dolore magna aliqua aut enim minim veniama nostrud exsa sed citation saboris nisi aliquip ex commodo consequat aute irure dolor tempore sed preh voluptate sad nulla pariatur excepteur sint occaecat.</p><a class="btn btn-default btn-round" href="home.html">read more</a>
                    </section>
                </div>
                <div class="tab-pane" id="statement">
                    <section class="section-area">
                        <h2 class="ui-title-block-3">mission statement</h2>
                        <div class="ui-subtitle-block-2">solutions for everyone</div>
                        <div class="ui-decor-2 bg-white"></div>
                        <p>Eorem ipsum dolor sit amet consectetur adipisicing elit sed eiusmod tempor abore dolore magna aliqua aut enim minim veniama nostrud exsa sed citation saboris nisi aliquip ex commodo consequat aute irure dolor tempore sed preh voluptate sad nulla pariatur excepteur sint occaecat.</p><a class="btn btn-default btn-round" href="home.html">read more</a>
                    </section>
                </div>
                <div class="tab-pane" id="awards">
                    <section class="section-area">
                        <h2 class="ui-title-block-3">our awards</h2>
                        <div class="ui-subtitle-block-2">solutions for everyone</div>
                        <div class="ui-decor-2 bg-white"></div>
                        <p>Eorem ipsum dolor sit amet consectetur adipisicing elit sed eiusmod tempor abore dolore magna aliqua aut enim minim veniama nostrud exsa sed citation saboris nisi aliquip ex commodo consequat aute irure dolor tempore sed preh voluptate sad nulla pariatur excepteur sint occaecat.</p><a class="btn btn-default btn-round" href="home.html">read more</a>
                    </section>
                </div>
                <div class="tab-pane" id="strategy">
                    <section class="section-area">
                        <h2 class="ui-title-block-3">the strategy</h2>
                        <div class="ui-subtitle-block-2">solutions for everyone</div>
                        <div class="ui-decor-2 bg-white"></div>
                        <p>Eorem ipsum dolor sit amet consectetur adipisicing elit sed eiusmod tempor abore dolore magna aliqua aut enim minim veniama nostrud exsa sed citation saboris nisi aliquip ex commodo consequat aute irure dolor tempore sed preh voluptate sad nulla pariatur excepteur sint occaecat.</p><a class="btn btn-default btn-round" href="home.html">read more</a>
                    </section>
                </div>
            </div>
            <!-- end .b-tabs-->
        </div>

        <div class="section-type-3__bg-item">
            <div class="scrollme">
                <div class="animateme" data-when="enter" data-from="0.5" data-to="0" data-opacity="0" data-translatex="-300" data-rotatez="0">
                    <img src="{{asset('public/contents/website')}}/assets/media/content/bg/bg-item-1.png" alt="foto">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end .section-area-->
<section class="section-default">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="text-center">
                    <div class="ui-subtitle-block">Tempor incididunt labore dolore veniam</div>
                    <h2 class="ui-title-block-2"><span class="shuffle">projects we do</span></h2>
                    <div class="ui-decor-1 bg-primary"></div>
                </div>
            </div>
        </div>

        @php
            $projectCategories = App\ProjectCategory::where('status',1)->orderBy('id','DESC')->get();
            $projects = App\Project::where('status',1)->orderBy('id','DESC')->get();
        @endphp

        <div class="row">
            <div class="col-xs-12">
                <div class="b-isotope b-isotope-1">
                    <ul class="b-isotope-filter list-inline">
                        <li><a class="current" href="" data-filter="*">all works</a></li>
                        @foreach ($projectCategories as $data)
                            <li><a href="" data-filter=".design_{{ $data->id }}">{{ $data->name }}</a></li>
                        @endforeach
                    </ul>
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <ul class="b-isotope-grid grid list-unstyled">
                                    <li class="grid-sizer"></li>
                                    @foreach ($projects as $data)
                                        <li class="b-isotope-grid__item grid-item design_{{ $data->pro_cat_id }} print ">
                                            <a class="b-isotope-grid__inner" href="portfolio-1.html"><img src="{{ asset('public/storage/project') }}/{{ $data->image }}" alt="foto"><span class="b-isotope-grid__wrap-info"><span class="b-isotope-grid__info"><span class="b-isotope-grid__title">{{ $data->name }}</span><span class="b-isotope-grid__categorie">{{ $data->projectCategory->name }}</span></span>
                                                </span>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end .b-isotope-->
            </div>
        </div>
    </div>
</section>
<!-- end .section-default-->
<section class="section-type-1 section-sm parallax area-bg area-bg_grad-2 area-bg_op_80">
    <div class="area-bg__inner">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h2 class="ui-title-block-3">like our work? let’s start together</h2>
                    <div class="ui-subtitle-block-2">we provide solutions for everyone</div>
                </div>
                <div class="col-md-5"><a class="btn btn-default btn-round pull-right" href="home.html">get in touch</a></div>
            </div>
        </div>
    </div>
</section>
<!-- end .section-type-1-->
<section class="section-default bg-grey">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="text-center">
                    <div class="ui-subtitle-block">Tempor incididunt labore dolore veniam</div>
                    <h2 class="ui-title-block-2"><span class="shuffle">what we offer</span></h2>
                    <div class="ui-decor-1 bg-primary"></div>
                </div>
            </div>
        </div>

        @php
            $services=App\Service::where('status',1)->orderBy('id','DESC')->get();
        @endphp

        <div class="row">
            <div class="col-xs-12">
                <div class="b-advantages-group">
                    @foreach($services as $service)
                        <section class="b-advantages b-advantages-2 b-advantages_3-col"><i class="{{ $service->icon }}"></i>
                            <div class="b-advantages__inner effect-border">
                                <h3 class="b-advantages__title ui-title-inner"><a href="home.html">{{ $service->name }}</a></h3>
                                <div class="b-advantages__info">{{ $service->details }}</div>
                            </div>
                        </section>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end .section-default-->
<section class="section-default">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="ui-subtitle-block">Tempor incididunt labore dolore aliqua veniam</div>
                <h2 class="ui-title-block ui-title-block_light">We always worked hard <br>to meet client’s deadline ensuring quality!</h2>
                <div class="ui-decor-1 bg-primary"></div>
                <div class="row">
                    <div class="col-xs-12"><img class="img_3-col img-responsive" src="{{asset('public/contents/website')}}/assets/media/content/165x116/1.jpg" alt="foto"><img class="img_3-col img-responsive" src="{{asset('public/contents/website')}}/assets/media/content/165x116/2.jpg" alt="foto"><img class="img_3-col img-responsive" src="{{asset('public/contents/website')}}/assets/media/content/165x116/3.jpg" alt="foto"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="progress-block-group progress-block-group_mrg-left">
                    <div class="progress-block">
                        <div class="progress__title">branding</div>
                        <div class="progress progress-w-number progress_background">
                            <div class="progress-bar bg-primary" style="width: 60%"></div><span class="progress-bar__number">60%</span>
                        </div>
                    </div>
                    <div class="progress-block">
                        <div class="progress__title">web design</div>
                        <div class="progress progress-w-number progress_background">
                            <div class="progress-bar bg-primary" style="width: 85%"></div><span class="progress-bar__number">85%</span>
                        </div>
                    </div>
                    <div class="progress-block">
                        <div class="progress__title">ux/ui</div>
                        <div class="progress progress-w-number progress_background">
                            <div class="progress-bar bg-primary" style="width: 45%"></div><span class="progress-bar__number">45%</span>
                        </div>
                    </div>
                    <div class="progress-block">
                        <div class="progress__title">print media</div>
                        <div class="progress progress-w-number progress_background">
                            <div class="progress-bar bg-primary" style="width: 87%"></div><span class="progress-bar__number">87%</span>
                        </div>
                    </div>
                    <div class="progress-block">
                        <div class="progress__title">search engine optimization</div>
                        <div class="progress progress-w-number progress_background">
                            <div class="progress-bar bg-primary" style="width: 87%"></div><span class="progress-bar__number">70%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end .section-default-->
<!-- b-progress width parallax-->
<div class="section-progress area-bg parallax">
    <div class="area-bg__inner">
        <ul class="b-progress-list b-progress-list-1 list-unstyled clearfix">
            <li class="b-progress-list__item"><i class="b-progress-list__icon pe-7s-coffee"></i><span class="b-progress-list__percent js-chart" data-percent="1500"><span class="js-percent"></span>+</span><span class="b-progress-list__name">cups of coffee</span></li>
            <li class="b-progress-list__item"><i class="b-progress-list__icon pe-7s-smile"></i><span class="b-progress-list__percent js-chart" data-percent="6400"><span class="js-percent"></span>+</span><span class="b-progress-list__name">happy customers</span></li>
            <li class="b-progress-list__item"><i class="b-progress-list__icon pe-7s-diamond"></i><span class="b-progress-list__percent js-chart" data-percent="165"><span class="js-percent"></span>+</span><span class="b-progress-list__name">awards won</span></li>
            <li class="b-progress-list__item"><i class="b-progress-list__icon pe-7s-mouse"></i><span class="b-progress-list__percent js-chart" data-percent="9700"><span class="js-percent"></span>+</span><span class="b-progress-list__name">social media likes</span></li>
        </ul>
    </div>
</div>
<!-- end .b-progress width parallax-->
<section class="section-default">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="text-center">
                    <div class="ui-subtitle-block">Tempor incididunt labore dolore veniam</div>
                    <h2 class="ui-title-block-2">latest news</h2>
                    <div class="ui-decor-1 bg-primary"></div>
                </div>
            </div>
        </div>

        @php
            $posts = App\BlogPost::where('post_status',1)->latest()->take(3)->get();    
        @endphp

        <div class="row">
            <div class="col-md-5" id="revealfx1"><img class="img-responsive " src="{{ asset('public/uploads/post/home') }}/{{ $posts[0]->post_photo }}" alt="foto"></div>
            <div class="col-md-7">
                @foreach ($posts as $post)
                    <section class="b-post b-post-2 bg-grey  clearfix">
                        <div class="entry-date">{{ $post->created_at->format('d') }}<span class="entry-date__month">{{$post->created_at->format("F'y")}}</span></div>
                        <div class="entry-main">
                            <div class="entry-header">
                                <div class="entry-meta"><span class="entry-meta__item">by<a class="entry-meta__link text-primary" href="blog-main.html">{{ $post->creator->name }}</a></span><span class="entry-meta__item">--<a class="entry-meta__link entry-meta__link_color" href="blog-main.html">
                                    @php
                                    $cate=$post->post_category;
                                    $allBlogCate=explode(',',$cate);
                                    @endphp
                                    @foreach($allBlogCate as $pcate)
                                    @php
                                    $category=App\BlogCategory::where('bcate_status',1)->where('bcate_id',$pcate)->firstOrFail();
                                    @endphp
                                    {{$category->bcate_name}},
                                    @endforeach
                                </a></span><span class="entry-meta__item"><i class="entry-meta__icon fa fa-share-alt"></i>0</span></div>
                                <h2 class="entry-title"><a href="blog-post.html">{{ 
                                Str::limit($post->post_details,70) }}</a></h2>
                            </div>
                        </div>
                    </section>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- end .section-default-->
<section class="section-type-4 scrollme-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="ui-subtitle-block">Tempor incididunt labore dolore aliqua veniam</div>
                <h2 class="ui-title-block ui-title-block_light"><span class="shuffle">Easier To Customize</span></h2>
                <div class="ui-decor-1 bg-primary"></div>
                <div class="ui-subtitle-block-3">Lorem ipsum dolor sit amet consectetur adipisicing elit
                    <br>sed eiusmod tempor incididunt labore magna</div>
                <p>Eorem ipsum dolor sit amet consectetur adipisicing elit sed eiusmod tempor abore dolore magna aliqua aut enim minim veniama nostrud exsa sed citation saboris nisi aliquip ex commod consequat aute irure dolor tempore sed preh voluptate sad nula pariatur excepteur sint occaecat ninim veniam nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat quis.</p><a class="btn btn-round btn-grad-1" href="home.html">learn more</a>
            </div>
            <div class="col-md-6">
                <div class="section-type-4__img">
                    <div class="scrollme">
                        <div class="animateme" data-when="enter" data-from="1" data-to="0" data-opacity="0" data-translatex="300" data-rotatez="0">
                            <img src="{{asset('public/contents/website')}}/assets/media/content/657x498/1.png" alt="foto">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
