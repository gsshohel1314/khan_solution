@extends('layouts.admin')
@section('content')
<div class="row bread_part">
    <div class="col-sm-12 bread_col">
        <h4 class="pull-left page-title bread_title">Blog Post</h4>
        <ol class="breadcrumb pull-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Blog</a></li>
            <li class="active">Post</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="card-title card_top_title"><i class="fa fa-gg-circle"></i> All Blog Post</h3>
                    </div>
                    <div class="col-md-4 text-right">
                        <a href="{{url('dashboard/blog/post/add')}}" class="btn btn-md btn-primary waves-effect card_top_button"><i class="fa fa-plus-circle"></i> Add Post</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-7">
                        @if(Session::has('success_soft'))
                          <div class="alert alert-success alertsuccess" role="alert">
                             <strong>Successfully!</strong> delete blog post information.
                          </div>
                        @endif
                        @if(Session::has('error'))
                          <div class="alert alert-warning alerterror" role="alert">
                             <strong>Opps!</strong> please try again.
                          </div>
                        @endif
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table id="alltableinfo" class="table table-bordered custom_table mb-0">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        {{-- <th>Details</th> --}}
                                        <th>Image</th>
                                        <th>Author</th>
                                        <th>Category</th>
                                        <th>Tag</th>
                                        <th>Status</th>
                                        <th>Manage</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($all as $data)
                                    <tr>
                                        <td>{{Str::words($data->post_title,10)}}</td>
                                        {{-- <td>{{ Str::limit($data->post_details, 20) }}</td> --}}
                                        <td>
                                            @if($data->post_photo==true)
                                                <img src="{{ asset('public/uploads/post') }}/{{ $data->post_photo }}" height="30px" width="30px" />
                                            @else
                                                <img src="{{asset('public/contents/admin')}}/assets/images/default-avatar.png" height="30px" width="30px" />
                                            @endif
                                        </td>
                                        <td>{{$data->creator->name}}</td>
                                        <td>
                                            @php
                                                $cate=$data->post_category;
                                                $allBlogCate=explode(',',$cate);
                                            @endphp
                                            @foreach($allBlogCate as $pcate)
                                                @php
                                                $category=App\BlogCategory::where('bcate_status',1)->where('bcate_id',$pcate)->firstOrFail();
                                                @endphp
                                                {{$category->bcate_name}},
                                            @endforeach
                                        </td>
                                        <td>
                                            @php
                                                $tag=$data->post_tag;
                                                $allBlogTag=explode(',',$tag);
                                            @endphp
                                            @foreach($allBlogTag as $ptag)
                                                @php
                                                $tag=App\Tag::where('tag_status',1)->where('tag_id',$ptag)->firstOrFail();
                                                @endphp
                                                {{$tag->tag_name}},
                                            @endforeach
                                        </td>
                                        <td>
                                            @if($data->post_status==true)
                                              <span class="badge bg-primary">Published</span>
                                            @else
                                              <span class="badge bg-danger">Unpublished</span>
                                            @endif
                                        </td>
                                        <td style="width: 95px;">
                                            <a class="postpublish postunpublish " data-poststatus="{{ url('dashboard/blog/post/status/'.$data->post_slug) }}" data-toggle="modal" 
                                                @if($data->post_status==true)
                                                data-target="#exampleModalUnpublish"
                                                @else
                                                data-target="#exampleModalPublish"
                                                @endif>
                                
                                                @if($data->post_status==true)
                                                <i class="fa fa-pause text-danger fa-lg"></i>
                                                @else
                                                <i class="fa fa-check-square text-dark fa-lg"></i>
                                                @endif</a>

                                            <a href="{{url('dashboard/blog/post/view/'.$data->post_slug)}}" title="view"><i class="fa fa-plus-square fa-lg view_icon"></i></a>
                                            
                                            <a href="{{url('dashboard/blog/post/edit/'.$data->post_slug)}}" title="edit"><i class="fa fa-pencil-square fa-lg edit_icon"></i></a>

                                            <a href="#" title="delete" id="softDelete" data-toggle="modal" data-target="#softDelModal" data-id="{{$data->post_id}}"><i class="fa fa-trash fa-lg delete_icon"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer card_footer_expode">
                <a href="#" class="btn btn-secondary waves-effect">PRINT</a>
                <a href="#" class="btn btn-warning waves-effect">EXCEL</a>
                <a href="#" class="btn btn-success waves-effect">PDF</a>
            </div>
        </div>
    </div>
</div>
<!--Delete Modal Information-->
<div id="softDelModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
    <div class="modal-dialog">
        <div class="modal-content p-0 b-0">
            <form method="post" action="{{url('dashboard/blog/post/softdelete')}}"/>
              @csrf
              <div class="card mb-0">
                <div class="card-header">
                    <h3 class="card-title float-left"><i class="fa fa-gg-circle"></i> Confirm Message</h3>
                </div>
                <div class="card-body modal_card">
                  Are you sure you want to delete?
                  <input type="hidden" id="modal_id" name="modal_id">
                </div>
                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-sm btn-dark waves-effect">Confirm</button>
                    <button type="button" class="btn btn-sm btn-danger waves-effect" data-dismiss="modal">Close</button>
                </div>
              </div>
            </form>
        </div>
    </div>
</div>

<!--Publish Modal Information-->
<div class="modal fade" id="exampleModalPublish" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
    <div class="modal-dialog">
        <div class="modal-content p-0 b-0">
            <form method="post" action="" id="postpublish">
              @csrf
              @method('put')
              <div class="card mb-0">
                <div class="card-header">
                    <h3 class="card-title float-left"><i class="fa fa-gg-circle"></i> Confirm Message</h3>
                </div>
                <div class="card-body modal_card">
                  Are you sure you want to publish banner?
                  <input type="hidden" id="modal_id" name="modal_id">
                </div>
                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-sm btn-dark waves-effect">Confirm</button>
                    <button type="button" class="btn btn-sm btn-danger waves-effect" data-dismiss="modal">Close</button>
                </div>
              </div>
            </form>
        </div>
    </div>
</div>
<!--Unpublish Modal Information-->
<div class="modal fade" id="exampleModalUnpublish" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
    <div class="modal-dialog">
        <div class="modal-content p-0 b-0">
            <form method="post" action="" id="postunpublish">
              @csrf
              @method('put')
              <div class="card mb-0">
                <div class="card-header">
                    <h3 class="card-title float-left"><i class="fa fa-gg-circle"></i> Confirm Message</h3>
                </div>
                <div class="card-body modal_card">
                  Are you sure you want to unpublish banner?
                  <input type="hidden" id="modal_id" name="modal_id">
                </div>
                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-sm btn-dark waves-effect">Confirm</button>
                    <button type="button" class="btn btn-sm btn-danger waves-effect" data-dismiss="modal">Close</button>
                </div>
              </div>
            </form>
        </div>
    </div>
</div>
@endsection
