@extends('layouts.website')
@section('content')
<link href="{{asset('public/contents/admin')}}/assets/slick/slick.css" rel="stylesheet" type="text/css" />
<link href="{{asset('public/contents/admin')}}/assets/slick/slick-theme.css" rel="stylesheet" type="text/css" />

<div class="section-title-page area-bg area-bg_grad-3 area-bg_op_85 parallax">
  <div class="area-bg__inner">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <h1 class="b-title-page">About Us</h1>
          <div class="b-title-page__info">who we are</div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end .b-title-page-->
<article class="b-about section-default">
  <div class="container">
    <div class="row">
      <div class="col-md-5">
        <div class="ui-subtitle-block">Tempor incididunt labore dolore aliqua veniam</div>
        <h2 class="ui-title-block ui-title-block_light">We Produce Effective Design Solutions</h2>
        <div class="ui-decor-1 bg-primary"></div>
        <p>Eorem ipsum dolor sit amet consectetur adipisicing elit sed ipsu eiusmod tempor abore dolore magna aliqua aut enim minim veniama nostrud exsa citation saboris nisi aliquip ex commod consequat aute rure dolor tempor preh voluptate sad nula pariatur excepteur sinta.</p>
        <footer class="b-about__footer"><span class="b-about__author">Arthur Martin</span><span class="b-about__category">-- CEO & Founder OZUN</span></footer>
      </div>
      <div class="col-md-7">
        <div class="b-sm-about-group">
          <div class="row">
            <div class="col-md-6">
              <section class="b-sm-about"><img class="img-responsive" src="{{asset('public/contents/website')}}/assets/media/content/292x190/1.jpg" alt="foto">
                <h3 class="b-sm-about__title">building brands</h3>
                <p>Corem ipsum dolor sit amet consectea elit tempor incididunt selabore dolorem aliqua veniam quis nostrud exercitation</p>
              </section>
            </div>
            <div class="col-md-6">
              <section class="b-sm-about"><img class="img-responsive" src="{{asset('public/contents/website')}}/assets/media/content/292x190/2.jpg" alt="foto">
                <h3 class="b-sm-about__title">designing future</h3>
                <p>Aorem ipsum dolor sit amet consectea elit tempor incididunt selabore dolorem aliqua veniam quis nostrud exercitation</p>
              </section>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</article>
<div class="section-area">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="b-advantages-group">
          @php
              $services=App\Service::where('status',1)->latest()->take(3)->get();
          @endphp
          @foreach ($services as $service)
            <section class="b-advantages b-advantages-2 b-advantages-2_mod-a b-advantages_3-col"><i class="{{ $service->icon }}"></i>
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
</div>
<!-- end .section-area-->
<section class="section-type-12 section-default area-bg area-bg_blue area-bg_op_90 block-table__inner parallax">
  <div class="area-bg__inner">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="ui-subtitle-block">Tempor incididunt labore dolore aliqua veniam</div>
          <h2 class="ui-title-block ui-title-block_light color-white">We always worked hard <br>to meet client’s deadline ensuring quality!</h2>
          <div class="ui-decor-1 bg-white"></div>
          <div class="row">
            <div class="col-xs-12"><img class="img_3-col img-responsive" src="{{asset('public/contents/website')}}/assets/media/content/165x116/1.jpg" alt="foto"><img class="img_3-col img-responsive" src="{{asset('public/contents/website')}}/assets/media/content/165x116/2.jpg" alt="foto"><img class="img_3-col img-responsive" src="{{asset('public/contents/website')}}/assets/media/content/165x116/3.jpg" alt="foto"></div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="progress-block-group progress-block-group_mrg-left">
            <div class="progress-block">
              <div class="progress__title color-white">branding</div>
              <div class="progress progress-w-number progress_background progress_w_border-2">
                <div class="progress-bar bg-primary" style="width: 60%"></div><span class="progress-bar__number">60%</span>
              </div>
            </div>
            <div class="progress-block">
              <div class="progress__title color-white">web design</div>
              <div class="progress progress-w-number progress_background progress_w_border-2">
                <div class="progress-bar bg-primary" style="width: 85%"></div><span class="progress-bar__number">85%</span>
              </div>
            </div>
            <div class="progress-block">
              <div class="progress__title color-white">ux/ui</div>
              <div class="progress progress-w-number progress_background progress_w_border-2">
                <div class="progress-bar bg-primary" style="width: 45%"></div><span class="progress-bar__number">45%</span>
              </div>
            </div>
            <div class="progress-block">
              <div class="progress__title color-white">print media</div>
              <div class="progress progress-w-number progress_background progress_w_border-2">
                <div class="progress-bar bg-primary" style="width: 87%"></div><span class="progress-bar__number">87%</span>
              </div>
            </div>
            <div class="progress-block">
              <div class="progress__title color-white">search engine optimization</div>
              <div class="progress progress-w-number progress_background progress_w_border-2">
                <div class="progress-bar bg-primary" style="width: 87%"></div><span class="progress-bar__number">70%</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end .section-type-12-->
<section class="section-default">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="text-right">
          <div class="ui-subtitle-block">Tempor incididunt labore dolore veniam</div>
          <h2 class="ui-title-block-2">recent works</h2>
          <div class="ui-decor-1 bg-primary"></div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <div class="owl-carousel owl-theme owl-theme_mod-c enable-owl-carousel text-right" data-min480="1" data-min768="2" data-min992="3" data-min1200="3" data-pagination="true" data-navigation="false" data-auto-play="4000" data-stop-on-hover="true">
          @php
              $projects=App\Project::where('status',1)->orderBy('id','DESC')->get();
          @endphp
          @foreach ($projects as $project)
            <div class="b-isotope-grid__item grid-item"><a class="b-isotope-grid__inner" href="portfolio-1.html"><img src="{{ asset('public/storage/project') }}/{{ $project->image }}" alt="foto"><span class="b-isotope-grid__wrap-info"><span class="b-isotope-grid__info"><span class="b-isotope-grid__title">{{ $project->name }}</span><span class="b-isotope-grid__categorie">{{ $project->projectCategory->name }}</span></span></span></a></div>
          @endforeach
        </div>
        <!-- end .carousel-->
      </div>
    </div>
  </div>
</section>
<!-- end .section-default-->
<section class="section-type-13">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="ui-subtitle-block">Tempor incididunt labore dolore aliqua veniam</div>
        <h2 class="ui-title-block-2 ui-title-block-2_mod-a">OZUN is Responsive</h2>
        <div class="ui-decor-1 bg-primary"></div>
        <p>Eorem ipsum dolor sit amet consectetur adipisicing elit sed eiusmod tempor abore dolor aliqua aut enim minim veniama nostrud exsa sed citation saboris nisi aliquip ex commod uat aute irure dolor tempore sed preh voluptate sad nula pariatur excepteur snt occaecat veniam nostrud exercitation ullamco laboris.</p><a class="btn btn-default btn-round btn_mrg-top_45" href="home.html">learn more</a>
      </div>
      <div class="col-md-6"><img class="img-responsive pull-right" src="{{asset('public/contents/website')}}/assets/media/components/b-about/1.jpg" alt="foto"></div>
    </div>
  </div>
</section>
<!-- end .section-type-13-->
<section class="section-type-14">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-push-6">
        <div class="ui-subtitle-block">Tempor incididunt labore aliqua veniam</div>
        <h2 class="ui-title-block-2 ui-title-block-2_mod-a">OZUN is Global</h2>
        <div class="ui-decor-1 bg-primary"></div>
        <p>Eorem ipsum dolor sit amet consectetur adipisicing elit sed eiusmod tempor abore dolor aliqua aut enim minim veniama nostrud exsa sed citation saboris nisi aliquip ex commod uat aute irure dolor tempore sed preh voluptate sad nula pariatur excepteur snt occaecat veniam nostrud exercitation ullamco laboris.</p><a class="btn btn-default btn-round btn_mrg-top_45" href="home.html">learn more</a>
      </div>
      <div class="col-md-6 col-md-pull-6"><img class="img-responsive pull-left img_mrg_l-30" src="{{asset('public/contents/website')}}/assets/media/components/b-about/2.jpg" alt="foto"></div>
    </div>
  </div>
</section>
<!-- end .section-type-14-->
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

<section class="section-default bg-grey">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <div class="text-center">
          <div class="ui-subtitle-block">Tempor incididunt labore dolore veniam</div>
          <h2 class="ui-title-block-2">what clients say</h2>
          <div class="ui-decor-1 bg-primary"></div>
          {{-- <div class="ui-subtitle-block-3">Lorem ipsum dolor sit amet adipisicing elit sed do eiusmod tempor incididunt utlabore dolore magna aliqua Ut enim ad minim veniam quis nostrud exercitation ullamco</div> --}}
        </div>
      </div>
    </div>

    @php
        $testimonial = App\Testimonial::where('tm_status',1)->orderBy('tm_id','DESC')->get();
    @endphp

    <div class="slider">
      @foreach ($testimonial as $data)
        <div class="row">
          <div class="row">
            <div class="col-xs-12">
              <div>
                <a class="b-brands__item" href="home.html"><img class="img-responsive center-block" src="{{ asset('public/uploads/testimonial/logo') }}/{{ $data->tm_logo }}" alt="foto"></a>
              </div>
                {{-- <div class="b-brands owl-carousel owl-theme enable-owl-carousel b-brands_mod-b" data-min480="1" data-min768="3" data-min992="5" data-min1200="5" data-pagination="false" data-navigation="false" data-auto-play="4000" data-stop-on-hover="true"><a class="b-brands__item" href="home.html"><img class="img-responsive center-block" src="{{ asset('public/uploads/testimonial/logo') }}/{{ $data->tm_logo }}" alt="foto"></a></div> --}}
                <!-- end b-brands-->
            </div>
          </div>
          <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <blockquote class="b-blockquote b-blockquote-1">
                  <p>{{$data->tm_opinion}}</p>
                  <footer class="b-blockquote-1__footer">
                    <div class="b-blockquote-1__face"><img class="img-responsive center-block" src="{{ asset('public/uploads/testimonial') }}/{{ $data->tm_image }}" alt="foto"></div>
                    <cite class="b-blockquote-1__cite" title="Blockquote Title"><span class="b-blockquote-1__author">{{$data->tm_name}}</span></cite>
                    <ul class="ui-rating list-inline">
                      @for($i=1; $i<=$data->tm_review; $i++)
                        <li><i class="fa fa-star"></i></li>
                      @endfor
                    </ul>
                  </footer>
                </blockquote>
                <!-- end .b-blockquote-->
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
<!-- end .section-default-->
<section class="section-type-11">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <h2 class="ui-title-block-3">we provide higher quality services</h2>
        <div class="ui-subtitle-block-2">and you’ll get solutions for everything</div>
      </div>
      <div class="col-md-5"><a class="btn btn-default btn-round pull-right" href="home.html">the offerings</a><a class="btn btn-default btn-round pull-right" href="home.html">learn more</a></div>
    </div>
  </div>
</section>

<script src="{{asset('public/contents/admin')}}/assets/slick/slick.min.js"></script>
<script>
  $(document).ready(function(){
    $('.slider').slick({
      // dots:true,
      infinite:true
    });
  });
</script>
@endsection

