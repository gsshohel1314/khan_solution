@extends('layouts.website')
@section('content')
  <div class="section-title-page area-bg area-bg_grad-3 area-bg_op_85 parallax">
    <div class="area-bg__inner">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <h1 class="b-title-page">contact us</h1>
            <div class="b-title-page__info">get in touch</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="section-default b-contact b-contact_mod-a">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <h2 class="ui-title-block-3 ui-title-block-3_sm">contact info</h2>
          <div class="ui-decor-2 ui-decor-2_sm bg-primary"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6">

          @php
              $social = App\SocialMedia::where('sm_status',1)->where('sm_id',1)->firstOrFail();
          @endphp

          <p>Borem ipsum dolor sit amet consecteta elit sed lus tempor incididunt labore ast dolore kliqua en minim veniam quis nostrud exercitationLorem ipsum dolor sit amet consectet adipisicing elit sed do eiusmod tempor incididunt labore.</p>
          <div class="b-contact-info"><span class="b-contact-info__title text-primary">Our Working Hours Are:</span><span class="b-contact-info__text">Monday to Friday : 09:00am to 06:00pm</span></div>
            <ul class="social-net list-inline social-net-colors">
              <li class="social-net__item"><a class="social-net__link" href="{{ $social->sm_twitter }}"><i class="icon fa fa-twitter"></i></a></li>
              <li class="social-net__item"><a class="social-net__link" href="{{ $social->sm_facebook }}"><i class="icon fa fa-facebook"></i></a></li>
              <li class="social-net__item"><a class="social-net__link" href="{{ $social->sm_google }}"><i class="icon fa fa-google-plus"></i></a></li>
              <li class="social-net__item"><a class="social-net__link" href="{{ $social->sm_youtube }}"><i class="icon fa fa-youtube"></i></a></li>
              <li class="social-net__item"><a class="social-net__link" href="{{ $social->sm_pinterest }}"><i class="icon fa fa-pinterest"></i></a></li>
            </ul>
        </div>
        <div class="col-sm-6">
          @php
              $conInfo=App\ContactInformation::where('cont_status',1)->where('cont_id',1)->firstOrFail();
          @endphp
          <div class="b-contact-desc">
            <div class="b-contact-desc__item">
              <div class="b-contact-desc__name"><i class="icon fa fa-home"></i> Address</div>
              <div class="b-contact-desc__info">{{$conInfo->cont_add1}}</div>
            </div>
            <div class="b-contact-desc__item">
              <div class="b-contact-desc__name"><i class="icon fa fa-phone"></i> Phone</div>
              <div class="b-contact-desc__info">{{$conInfo->cont_phone1}}   /   {{$conInfo->cont_phone2}}</div>
            </div>
            <div class="b-contact-desc__item">
              <div class="b-contact-desc__name"><i class="icon fa fa-envelope"></i> email</div>
              <div class="b-contact-desc__info">{{$conInfo->cont_email1}}  /  {{$conInfo->cont_email2}}</div>
            </div>
            <div class="b-contact-desc__item">
              <div class="b-contact-desc__name"><i class="icon fa fa-globe"></i> Web</div>
              <div class="b-contact-desc__info">www.khansolutions.com</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end .b-contact-->
  <div class="map" id="map"></div>
  <div class="container">
  <div class="row">
    <div class="col-xs-12">
      <section class="section-default">
        <div class="text-center">
          <div class="ui-subtitle-block">Tempor incididunt dolore veniam</div>
          <h2 class="ui-title-block-2">send message</h2>
          <div class="ui-decor-1 bg-primary"></div>
        </div>
        @if(Session::has('success'))
            <script type="text/javascript">
                swal({title: "Success!", text: "Successfully send your contact information!", icon: "success", button: "OK", timer:5000,});
             </script>
          @endif
          @if(Session::has('error'))
              <script type="text/javascript">
                  swal({title: "Opps!",text: "Error! Please try again", icon: "error", button: "OK", timer:5000,});
              </script>
          @endif
          <div id="success"></div>
          <form class="b-form-contacts ui-form ui-form-3" action="{{url('contact/submit')}}" method="post">
            @csrf
            <div class="row">
              <div class="col-md-4">
                <input class="form-control" type="text" name="name" placeholder="Name" required>
              </div>
              <div class="col-md-4">
                <input class="form-control" type="email" name="email" placeholder="Email">
              </div>
              <div class="col-md-4">
                <input class="form-control last-block_mrg-btn_0" type="text" name="subject" placeholder="Subject">
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <textarea class="form-control" rows="5" placeholder="Comments" name="message" required></textarea>
                <button class="btn btn-grad-1 btn-round pull-right" type="submit">Send Message</button>
              </div>
            </div>
          </form>
      </section>
    </div>
  </div>
  </div>
@endsection
