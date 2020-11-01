@extends('layouts.website')
@section('content')
<div class="section-title-page area-bg area-bg_grad-3 area-bg_op_85 parallax">
  <div class="area-bg__inner">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <h1 class="b-title-page">Our Services</h1>
          <div class="b-title-page__info">We Provide Service</div>
        </div>
      </div>
    </div>
  </div>
</div>
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
            $projects=App\Project::where('status',1)->latest()->take(5)->get();
          @endphp
          @foreach($projects as $project)
          <div class="b-isotope-grid__item grid-item"><a class="b-isotope-grid__inner" href="portfolio-1.html"><img src="{{ asset('public/storage/project') }}/{{ $project->image }}" alt="foto"><span class="b-isotope-grid__wrap-info"><span class="b-isotope-grid__info"><span class="b-isotope-grid__title">{{ $project->name }}</span><span class="b-isotope-grid__categorie">{{ $project->projectCategory->name }}</span></span></span></a></div>
          @endforeach
        </div>
        <!-- end .carousel-->
      </div>
    </div>
  </div>
</section>
@endsection
