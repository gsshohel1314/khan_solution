@extends('layouts.admin')
@section('content')
<div class="row bread_part">
    <div class="col-sm-12 bread_col">
        <h4 class="pull-left page-title bread_title">Recycle</h4>
        <ol class="breadcrumb pull-right">
            <li><a href="#">Dashboard</a></li>
            <li class="active">Recycle</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-md-6 col-xl-3">
        <a href="{{url('dashboard/recycle/user')}}">
          <div class="mini-stat clearfix bx-shadow bg-white">
              <span class="mini-stat-icon bg-primary"><i class="md md-person"></i></span>
              <div class="mini-stat-info text-right text-dark mini_stat_info">
                  @php
                      $totalUser=App\User::where('status',0)->count();
                  @endphp
                  <span class="counter text-dark">{{$totalUser}}</span>
                  Users
              </div>
          </div>
        </a>
    </div>
    <div class="col-md-6 col-xl-3">
        <a href="{{url('dashboard/recycle/service')}}">
          <div class="mini-stat clearfix bx-shadow bg-white">
              <span class="mini-stat-icon bg-primary"><i class="md md-person"></i></span>
              <div class="mini-stat-info text-right text-dark mini_stat_info">
                  @php
                      $totalService=App\Service::onlyTrashed()->count();
                  @endphp
                  <span class="counter text-dark">{{$totalService}}</span>
                  Services
              </div>
          </div>
        </a>
    </div>
    <div class="col-md-6 col-xl-3">
        <a href="{{url('dashboard/recycle/project')}}">
          <div class="mini-stat clearfix bx-shadow bg-white">
              <span class="mini-stat-icon bg-primary"><i class="md md-person"></i></span>
              <div class="mini-stat-info text-right text-dark mini_stat_info">
                  @php
                      $totalProject=App\Project::onlyTrashed()->count();
                  @endphp
                  <span class="counter text-dark">{{$totalProject}}</span>
                  Projects
              </div>
          </div>
        </a>
    </div>
    <div class="col-md-6 col-xl-3">
        <a href="{{url('dashboard/recycle/project/category')}}">
          <div class="mini-stat clearfix bx-shadow bg-white">
              <span class="mini-stat-icon bg-primary"><i class="md md-person"></i></span>
              <div class="mini-stat-info text-right text-dark mini_stat_info">
                  @php
                      $totalProjectCategory=App\ProjectCategory::onlyTrashed()->count();
                  @endphp
                  <span class="counter text-dark">{{$totalProjectCategory}}</span>
                  Projects Category
              </div>
          </div>
        </a>
    </div>
    <div class="col-md-6 col-xl-3">
        <a href="{{url('dashboard/recycle/banner')}}">
          <div class="mini-stat clearfix bx-shadow bg-white">
              <span class="mini-stat-icon bg-primary"><i class="md md-panorama"></i></span>
              <div class="mini-stat-info text-right text-dark mini_stat_info">
                  @php
                      $totalBan=App\Banner::where('ban_status',0)->count();
                  @endphp
                  <span class="counter text-dark">{{$totalBan}}</span>
                  Banner
              </div>
          </div>
        </a>
    </div>
    <div class="col-md-6 col-xl-3">
        <a href="{{url('dashboard/recycle/contactus')}}">
          <div class="mini-stat clearfix bx-shadow bg-white">
              <span class="mini-stat-icon bg-primary"><i class="md md-contacts"></i></span>
              <div class="mini-stat-info text-right text-dark mini_stat_info">
                  @php
                      $totalConus=App\Contactus::where('conus_status',0)->count();
                  @endphp
                  <span class="counter text-dark">{{$totalConus}}</span>
                  Contact Message
              </div>
          </div>
        </a>
    </div>
    <div class="col-md-6 col-xl-3">
        <a href="{{url('dashboard/recycle/partner')}}">
          <div class="mini-stat clearfix bx-shadow bg-white">
              <span class="mini-stat-icon bg-primary"><i class="md md-view-carousel"></i></span>
              <div class="mini-stat-info text-right text-dark mini_stat_info">
                  @php
                      $totalPartner=App\Partner::where('partner_status',0)->count();
                  @endphp
                  <span class="counter text-dark">{{$totalPartner}}</span>
                  Partner
              </div>
          </div>
        </a>
    </div>
    <div class="col-md-6 col-xl-3">
        <a href="{{url('dashboard/recycle/gallery')}}">
          <div class="mini-stat clearfix bx-shadow bg-white">
              <span class="mini-stat-icon bg-primary"><i class="md md-photo-library"></i></span>
              <div class="mini-stat-info text-right text-dark mini_stat_info">
                  @php
                      $totalGal=App\Gallery::where('gallery_status',0)->count();
                  @endphp
                  <span class="counter text-dark">{{$totalGal}}</span>
                  Gallery
              </div>
          </div>
        </a>
    </div>
    <div class="col-md-6 col-xl-3">
        <a href="{{url('dashboard/recycle/gallery/category')}}">
          <div class="mini-stat clearfix bx-shadow bg-white">
              <span class="mini-stat-icon bg-primary"><i class="md md-insert-chart"></i></span>
              <div class="mini-stat-info text-right text-dark mini_stat_info">
                  @php
                      $totalGcate=App\GalleryCategory::where('gcate_status',0)->count();
                  @endphp
                  <span class="counter text-dark">{{$totalGcate}}</span>
                  Gallery Category
              </div>
          </div>
        </a>
    </div>
    <div class="col-md-6 col-xl-3">
        <a href="{{url('dashboard/recycle/team')}}">
          <div class="mini-stat clearfix bx-shadow bg-white">
              <span class="mini-stat-icon bg-primary"><i class="md md-account-box"></i></span>
              <div class="mini-stat-info text-right text-dark mini_stat_info">
                  @php
                      $totalTeam=App\Team::where('team_status',0)->count();
                  @endphp
                  <span class="counter text-dark">{{$totalTeam}}</span>
                  Team Member
              </div>
          </div>
        </a>
    </div>
    <div class="col-md-6 col-xl-3">
        <a href="{{url('dashboard/recycle/team')}}">
          <div class="mini-stat clearfix bx-shadow bg-white">
              <span class="mini-stat-icon bg-primary"><i class="md md-local-library"></i></span>
              <div class="mini-stat-info text-right text-dark mini_stat_info">
                  @php
                      $totalTM=App\Testimonial::where('tm_status',0)->count();
                  @endphp
                  <span class="counter text-dark">{{$totalTM}}</span>
                  Client Testimonial
              </div>
          </div>
        </a>
    </div>
    <div class="col-md-6 col-xl-3">
        <a href="{{url('dashboard/recycle/blog/post')}}">
          <div class="mini-stat clearfix bx-shadow bg-white">
              <span class="mini-stat-icon bg-primary"><i class="md md-view-quilt"></i></span>
              <div class="mini-stat-info text-right text-dark mini_stat_info">
                  @php
                      $totalPost=App\BlogPost::where('post_status',0)->count();
                  @endphp
                  <span class="counter text-dark">{{$totalPost}}</span>
                  Blog Post
              </div>
          </div>
        </a>
    </div>
    <div class="col-md-6 col-xl-3">
        <a href="{{url('dashboard/recycle/blog/category')}}">
          <div class="mini-stat clearfix bx-shadow bg-white">
              <span class="mini-stat-icon bg-primary"><i class="md md-layers"></i></span>
              <div class="mini-stat-info text-right text-dark mini_stat_info">
                  @php
                      $totalBlogCate=App\BlogCategory::where('bcate_status',0)->count();
                  @endphp
                  <span class="counter text-dark">{{$totalBlogCate}}</span>
                  Blog Category
              </div>
          </div>
        </a>
    </div>
    <div class="col-md-6 col-xl-3">
        <a href="{{url('dashboard/recycle/blog/tag')}}">
          <div class="mini-stat clearfix bx-shadow bg-white">
              <span class="mini-stat-icon bg-primary"><i class="md md-now-widgets"></i></span>
              <div class="mini-stat-info text-right text-dark mini_stat_info">
                  @php
                      $totalTag=App\Tag::where('tag_status',0)->count();
                  @endphp
                  <span class="counter text-dark">{{$totalTag}}</span>
                  Blog Tag
              </div>
          </div>
        </a>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="mini-stat clearfix bx-shadow bg-white">
            <span class="mini-stat-icon bg-primary"><i class="md md-forum"></i></span>
            <div class="mini-stat-info text-right text-dark mini_stat_info">
                <span class="counter text-dark">0</span>
                Post Comments
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="mini-stat clearfix bx-shadow bg-white">
            <span class="mini-stat-icon bg-primary"><i class="md md-explore"></i></span>
            <div class="mini-stat-info text-right text-dark mini_stat_info">
                @php
                    $totalNS=App\NewsletterSubscriber::where('ns_status',0)->count();
                @endphp
                <span class="counter text-dark">{{$totalNS}}</span>
                Newsletter Subscribe
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="mini-stat clearfix bx-shadow bg-white">
            <span class="mini-stat-icon bg-primary"><i class="md md-cloud"></i></span>
            <div class="mini-stat-info text-right text-dark mini_stat_info">
                <span class="counter text-dark">0</span>
                Demo
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="mini-stat clearfix bx-shadow bg-white">
            <span class="mini-stat-icon bg-primary"><i class="md md-cloud"></i></span>
            <div class="mini-stat-info text-right text-dark mini_stat_info">
                <span class="counter text-dark">0</span>
                Demo
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="mini-stat clearfix bx-shadow bg-white">
            <span class="mini-stat-icon bg-primary"><i class="md md-cloud"></i></span>
            <div class="mini-stat-info text-right text-dark mini_stat_info">
                <span class="counter text-dark">0</span>
                Demo
            </div>
        </div>
    </div>
</div> <!-- End row-->
@endsection
