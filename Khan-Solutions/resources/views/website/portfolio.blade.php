@extends('layouts.website')
@section('content')
  <div class="section-title-page area-bg area-bg_grad-3 area-bg_op_85 parallax">
    <div class="area-bg__inner">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <h1 class="b-title-page">the portfolio</h1>
            <div class="b-title-page__info">works we have done</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @php
    $projectCategories = App\ProjectCategory::where('status',1)->orderBy('id','DESC')->get();
    $projects = App\Project::where('status',1)->orderBy('id','DESC')->get();
  @endphp

  <div class="section-default">
      <div class="b-isotope b-isotope-1">
        <ul class="b-isotope-filter list-inline">
          <li><a class="current" href="" data-filter="*">all works</a></li>
          @foreach ($projectCategories as $data)
            <li><a href="" data-filter=".link_{{ $data->id }}">{{ $data->name }}</a></li>
          @endforeach
          {{-- <li><a href="" data-filter=".wordpress">wordpress</a></li>
          <li><a href="" data-filter=".mockups">mockups</a></li>
          <li><a href="" data-filter=".animation">animation</a></li>
          <li><a href="" data-filter=".print">print design</a></li> --}}
        </ul>
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <ul class="b-isotope-grid grid list-unstyled">
                <li class="grid-sizer"></li>
                @foreach ($projects as $data)
                  <li class="b-isotope-grid__item grid-item link_{{ $data->pro_cat_id }} print"><a class="b-isotope-grid__inner" href="portfolio-1.html"><img src="{{ asset('public/storage/project') }}/{{ $data->image }}" alt="foto"><span class="b-isotope-grid__wrap-info"><span class="b-isotope-grid__info"><span class="b-isotope-grid__title">{{ $data->name }}</span><span class="b-isotope-grid__categorie">{{ $data->projectCategory->name }}</span></span></span></a></li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>
      </div>
  </div>
  <section class="section-type-1 section-sm parallax area-bg area-bg_grad-2 area-bg_op_80">
    <div class="area-bg__inner">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h2 class="ui-title-block-3">we provide higher quality services</h2>
            <div class="ui-subtitle-block-2">and you’ll get solutions for everything</div>
          </div>
          <div class="col-md-5"><a class="btn btn-default btn-round pull-right" href="home.html">the offerings</a><a class="btn btn-default btn-round pull-right" href="home.html">learn more</a></div>
        </div>
      </div>
    </div>
  </section>
@endsection
