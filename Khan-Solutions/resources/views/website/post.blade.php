@extends('layouts.website')
@section('content')

<style>
  button[name="submit"] {
    position: fixed;
    margin-top: -47px;
    right: 0;
    width: 40px;
    color: blue;
    border: 0px;
    margin-right: 114px;
  }

  .ui-form-1 textarea.form-control {
    border-radius: 0px;
  }
</style>

<div class="section-title-page area-bg area-bg_grad-3 area-bg_op_85 parallax">
  <div class="area-bg__inner">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <h1 class="b-title-page">Blog Post</h1>
          <div class="b-title-page__info">Read The Blog Post</div>
        </div>
      </div>
    </div>
  </div>
</div>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="l-main-content">
            <article class="b-post b-post-full clearfix">
              <div class="entry-media"><a class="js-zoom-images" href="#"><img class="img-responsive" src="{{ asset('public/uploads/post') }}/{{ $post->post_photo }}" alt="Foto"></a>
                <div class="entry-date">{{ $post->created_at->format('d') }}<span class="entry-date__month">{{$post->created_at->format("F'y")}}</span></div>
              </div>
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
                  </a>
                  </span><span class="entry-meta__item"><i class="entry-meta__icon fa fa-share-alt"></i> 0</span></div>
                  <h2 class="entry-title entry-title_spacing ui-title-inner"><a href="blog-post.html">{{ $post->post_title }}</a></h2>
                </div>
                <div class="entry-content">
                  <p>{{ $post->post_details }}</p>
                </div>
                <div class="entry-footer">
                  <div class="post-tags"><a class="post-tags___item" href="blog-main.html">Technology,</a><a class="post-tags___item" href="blog-main.html">Development,</a><a class="post-tags___item" href="blog-main.html">Life Style</a></div>
                  <div class="entry-footer-social">
                    <div class="entry-footer-social__title">Share</div>
                      <ul class="social-net list-inline social-net-colors">
                        <li class="social-net__item"><a class="social-net__link" href="twitter.com"><i class="icon fa fa-twitter"></i></a></li>
                        <li class="social-net__item"><a class="social-net__link" href="facebook.com"><i class="icon fa fa-facebook"></i></a></li>
                        <li class="social-net__item"><a class="social-net__link" href="plus.google.com"><i class="icon fa fa-google-plus"></i></a></li>
                      </ul>
                      <!-- end .social-list-->
                  </div>
                </div>
              </div>
            </article>
            <!-- end .post-->
            <article class="about-author clearfix">
              <div class="about-author__img"><img class="img-responsive" src="{{asset ('public/contents/website')}}/assets/media/content/posts/about-author/1.jpg" alt="foto"></div>
              <div class="about-author__inner">
                <div class="about-author__header"><span class="about-author__category">Content Writer</span><span class="about-author__title">{{ $post->creator->name }}</span></div>
                <div class="about-author__description">Lorem ipsum dolor sit amet consectetur adipisicing elit sed ipsum eiusmod ipsum tempor abored dolore sed magna aliqua aut enim minim veniama nostrud exsa.</div>
              </div>
            </article>
            <!-- end .about-author-->
            <nav>
              <ul class="pager">
                <li><a href="#"><span class="pager__label">prev post</span><span class="pager__title">the hiran minar story</span></a></li>
                <li><a href="#"><span class="pager__label">next post</span><span class="pager__title">best of the both worlds</span></a></li>
              </ul>
            </nav>

            <section class="section-comment">
              <h2 class="ui-title-block-4">comments   ({{ $post->comments->count() }})</h2>
              <div class="ui-decor-3"></div>
              @foreach ($post->comments as $key => $comment)
              <ul class="comments-list list-unstyled">
                <li>
                  <article class="comment clearfix">
                    <div class="comment-face"><img class="img-responsive" src="{{ asset('public/uploads/users') }}/{{ $comment->user->photo }}" alt="face"></div>
                    <div class="comment-inner">
                      <header class="comment-header">
                        <cite class="comment-author">{{ $comment->user->name }}</cite>
                        <time class="comment-datetime" datetime="2012-10-27">{{ $comment->created_at->diffForHumans() }}</time>
                      </header>
                      <div class="comment-body">
                        <p>{{ $comment->comment }}</p>
                      </div>
                      <footer class="comment-footer">
                        <button type="button" class="replay_comment" data-key="{{ $key }}">reply</button>
                      </footer>
                      
                      <section class="section-reply-form" id="section-reply-form">
                        @guest
                          <p>For post a new replay. You need to login first. <a href="{{ url('login') }}">Login</a></p>
                        @else
                          <form class="form-reply ui-form-1" action="{{url('comment/'.$post->post_id)}}" method="post">
                            @csrf
                            <div class="row show_div{{ $key }}" hidden>
                              <div class="col-xs-10">
                                <input type="hidden" name="replay" value="{{ $comment->id }}">
                                <textarea class="form-control" name="comment" rows="2" placeholder="Replay"></textarea>
                                <button class="" name="submit" type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>
                                </button>
                              </div>
                            </div>
                          </form>
                        @endguest
                      </section>
                    </div>
                  </article>

                  @if (!empty($comment->replay))
                    @foreach ($comment->replay as $data)
                      <ul class="children list-unstyled">
                        <li>
                            <article class="comment clearfix">
                              <div class="comment-face">
                                <img class="img-responsive" src="{{ asset('public/uploads/users') }}/{{ $data->user->photo }}" alt="face">
                              </div>
                              <div class="comment-inner">
                                <header class="comment-header">
                                  <cite class="comment-author">{{ $data->user->name }}</cite>
                                  <time class="comment-datetime" datetime="2012-10-27">{{ $data->created_at->diffForHumans() }}</time>
                                </header>
                                <div class="comment-body">
                                  <p>{{ $data->comment }}.</p>
                                </div>
                              </div>
                            </article>
                        </li>
                      </ul>
                    @endforeach
                  @endif
                </li>
              </ul>
              @endforeach
            </section>
            <!-- end .section-comment-->
            <section class="section-reply-form" id="section-reply-form">
              <h2 class="ui-title-block-4">leave a comment</h2>
              <div class="ui-decor-3"></div>
              @guest
                <p>For post a new comment. You need to login first. <a href="{{ url('login') }}">Login</a></p>
              @else
                <form class="form-reply ui-form-1" action="{{url('comment/'.$post->post_id)}}" method="post">
                  @csrf
                  <div class="row">
                    <div class="col-xs-12">
                      <input type="hidden" name="replay" value="">
                      <textarea class="form-control" name="comment" rows="4" placeholder="Comments"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12">
                      <button class="btn btn-default btn-round btn-block" type="submit">post my comment</button>
                    </div>
                  </div>
                </form>
              @endguest
            </section>
        </div>
      </div>
      @component('website/includes/sidebar')
      @endcomponent
    </div>
  </div>

  <script>
      $('.replay_comment').click(function() {
        var key =$(this).data('key');
        $('.show_div' + key).show();
      });
  </script>
@endsection
