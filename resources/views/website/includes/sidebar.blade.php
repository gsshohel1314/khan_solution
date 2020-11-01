@php
    $services=App\Service::where('status',1)->orderBy('id','DESC')->get();
    $posts = App\BlogPost::where('post_status',1)->latest()->take(3)->get();
    $tags = App\Tag::where('tag_status',1)->get();
    $images = App\BlogPost::where('post_status',1)->latest()->take(6)->get();
@endphp

<div class="col-md-4">
    <aside class="l-sidebar l-sidebar_right">
      <section class="widget section-sidebar">
        <h3 class="widget-title ui-title-block-4">what we offers</h3>
        <div class="ui-decor-3"></div>
        <div class="widget-content">
          <ul class="widget-list list list-mark-4">
            @foreach ($services as $service)
            <li class="widget-list__item"><a class="widget-list__link" href="{{url('services')}}">{{ $service->name }}</a></li>
            @endforeach
          </ul>
        </div>
      </section>
      <!-- end .widget-->
      <section class="widget section-sidebar">
        <h3 class="widget-title ui-title-block-4">recent posts</h3>
        <div class="ui-decor-3"></div>
        <div class="widget-content">

          @foreach ($posts as $post)
            <div class="post-widget clearfix">
              <div class="post-widget__media"><a href="#"><img class="img-responsive" src="{{ asset('public/uploads/post/sidebar') }}/{{ $post->post_photo }}" alt="foto"></a></div>
              <div class="post-widget__inner"><a class="post-widget__title ui-title-inner" href="#">{{ $post->post_title }}</a>
                <div class="post-widget__meta">
                  <div class="post-widget__meta-item"> By&nbsp;<a class="post-widget__meta-link" href="#">{{ $post->creator->name }}</a></div>
                  <div class="post-widget__meta-item"><a class="post-widget__meta-link post-widget__meta-link_color" href="#">
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
                  </a></div>
                </div>
              </div>
              <!-- end .widget-post-->
            </div>
          @endforeach
        </div>
      </section>

      
      <!-- end .widget-->
      <section class="widget section-sidebar">
        <h3 class="widget-title ui-title-block-4">popular posts</h3>
        <div class="ui-decor-3"></div>
        <div class="widget-content">
            <div class="widget-social-post clearfix">
              <div class="icon fa fa-twitter"></div>
              <div class="widget-social-post__info">Aorem ipsum dolor sit amet consecteta elit sed tempor incididunt labore dolore</div><a class="widget-social-post__link" href="twitter.com">http://t.co/LKJjHJsd</a>
              <!-- end .widget-social-post-->
            </div>
            <div class="widget-social-post clearfix">
              <div class="icon fa fa-twitter"></div>
              <div class="widget-social-post__info">Tempor incididunt labore et dolore mag aliqua minim veniam quis nostrud</div><a class="widget-social-post__link" href="twitter.com">http://t.co/LKJjHJsd</a>
              <!-- end .widget-social-post-->
            </div>
        </div>
      </section>
      <!-- end .widget-->
      <section class="widget widget-gallery section-sidebar">
        <h3 class="widget-title ui-title-block-4">instagram</h3>
        <div class="ui-decor-3"></div>
        <div class="widget-content">
          <div class="js-zoom-gallery">
            @foreach ($images as $image)
             <div class="widget-gallery__img"><a class="widget-gallery__link js-zoom-gallery__item" href="{{ asset('public/uploads/post/sidebar') }}/{{ $image->post_photo }}"><img class="img-responsive" src="{{ asset('public/uploads/post/sidebar') }}/{{ $image->post_photo }}" alt="foto"></a></div>
            @endforeach
          </div>
        </div>
      </section>
      <section class="widget section-sidebar">
        <h3 class="widget-title ui-title-block-4">popular tags</h3>
        <div class="ui-decor-3"></div>
        <div class="widget-content">
          <ul class="list-tags list-unstyled">
            @foreach ($tags as $tag)
              <li class="list-tags__item"><a class="list-tags__link btn btn-type-1 btn-sm btn_no-effect" href="#">{{ $tag->tag_name }}</a></li>
            @endforeach
          </ul>
        </div>
      </section>
      <!-- end .widget-->
    </aside>
</div>
