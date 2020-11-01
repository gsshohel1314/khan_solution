<style>
  .pagination {
    text-align: center;
  }
  .page-item{
    padding: 15px;
  }
</style>

@extends('layouts.website')
@section('content')
<div class="section-title-page area-bg area-bg_grad-3 area-bg_op_85 parallax">
  <div class="area-bg__inner">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <h1 class="b-title-page">Blog</h1>
          <div class="b-title-page__info">All Blog Post</div>
        </div>
      </div>
    </div>
  </div>
</div>

  @php
    $posts = App\BlogPost::where('post_status',1)->orderBy('post_id','ASC')->simplePaginate(3);    
  @endphp

<div class="container">
  <div class="row">
    <div class="col-md-8">
      <div class="l-main-content">
        <div class="posts-group">

          @foreach ($posts as $post)
            <section class="b-post b-post-1 b-post-1_mod-a clearfix">
              <div class="entry-media"><a class="" href="{{ url('post/'.$post->post_slug) }}"><img class="img-responsive" src="{{ asset('public/uploads/post') }}/{{ $post->post_photo }}" alt="Foto"></a>
                <div class="entry-date">{{ $post->created_at->format('d') }}<span class="entry-date__month">{{$post->created_at->format("F'y")}}</span></div>
                {{-- {{ $post->created_at->diffForHumans()}} --}}
              </div>
              <div class="entry-main">
                <div class="entry-header">
                  <div class="entry-meta"><span class="entry-meta__item">by<a class="entry-meta__link text-primary" href="#">{{ $post->creator->name }}</a></span><span class="entry-meta__item">--<a class="entry-meta__link entry-meta__link_color" href="#">
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
                  <h2 class="entry-title entry-title_spacing ui-title-inner"><a href="{{ url('post/'.$post->post_slug) }}">{{ $post->post_title }}</a></h2>
                </div>
                <div class="entry-content">
                  <p>{{ $post->post_details }}</p>
                </div>
              </div>
            </section>
          @endforeach
        </div>
        <div>
          {{ $posts->links() }}
        </div>
        {{-- <div class="text-center">
          <ul class="pagination pagination-2 typography-last-elem">
            <li><a href="#"><span class="fa fa-angle-left"></span></a></li>
            <li><a href="#">1</a></li>
            <li class="active"><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#"><span class="fa fa-angle-right"></span></a></li>
          </ul>
        </div> --}}
      </div>
    </div>
    @component('website/includes/sidebar')
    @endcomponent
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
