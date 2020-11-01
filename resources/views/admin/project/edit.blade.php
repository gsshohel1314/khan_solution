@extends('layouts.admin')
@section('content')
<div class="row bread_part">
    <div class="col-sm-12 bread_col">
        <h4 class="pull-left page-title bread_title">Project</h4>
        <ol class="breadcrumb pull-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Project</a></li>
            <li class="active">Edit</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <form class="form-horizontal" method="post" action="{{url('dashboard/project/'.$project->id)}}" enctype="multipart/form-data">
          @csrf
          @method('put')
          <div class="card">
              <div class="card-header">
                  <div class="row">
                      <div class="col-md-8">
                          <h3 class="card-title card_top_title"><i class="fa fa-gg-circle"></i> Update Project Information</h3>
                      </div>
                      <div class="col-md-4 text-right">
                          <a href="{{url('dashboard/project')}}" class="btn btn-md btn-primary waves-effect card_top_button"><i class="fa fa-th"></i> All Project</a>
                      </div>
                      <div class="clearfix"></div>
                  </div>
              </div>
              <div class="card-body card_form">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-7">
                        @if(Session::has('success'))
                          <div class="alert alert-success alertsuccess" role="alert">
                             <strong>Successfully!</strong> update Project information.
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
                <div class="form-group row custom_form_group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">Project Name</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="name" value="{{$project->name}}">
                      @if ($errors->has('name'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('name') }}</strong>
                          </span>
                      @endif
                    </div>
                </div>

                <div class="form-group row custom_form_group{{ $errors->has('category') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">Project category:</label>
                    <div class="col-sm-4">
                        <select class="form-control" name="category">
                            <option value="">Select Project Category</option>
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}" @if($category->id==$project->pro_cat_id) selected
                                @endif >{{$category->name}}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('category'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('category') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                {{-- <div class="form-group row custom_form_group{{ $errors->has('image') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">Project Image :</label>
                    <div class="col-sm-4">
                      <div class="input-group">
                          <span class="input-group-btn">
                              <span class="btn btn-default btn-file btnu_browse">
                                  Browse… <input type="file" name="image" id="imgInp">
                              </span>
                          </span>
                          <input type="text" class="form-control" readonly>
                      </div>
                      @if ($errors->has('image'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('image') }}</strong>
                          </span>
                      @endif
                    </div>
                </div> --}}

                <div class="form-group row custom_form_group {{ $errors->has('image') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">Project Image:</label>
                    <div class="col-sm-4">
                      <div class="input-group">
                          <span class="input-group-btn">
                              <span class="btn btn-default btn-file btnu_browse">
                                  Browse… <input type="file" name="image" id="imgInp">
                              </span>
                          </span>
                          <input type="text" class="form-control" readonly>
                      </div>
                      <img id='img-upload'/>
                    </div>
                    <div class="col-sm-2">
                        @if($project->image!='')
                            <img class="img-thumbnail" src="{{ asset('public/storage/project') }}/{{ $project->image }}" alt="photo"/>
                        @else
                            <img class="img-thumbnail" src="{{asset('public/contents/admin')}}/assets/images/default-avatar.png" alt="photo"/>
                        @endif
                    </div>
                </div>
              </div>
              <div class="card-footer card_footer_button text-center">
                  <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
              </div>
          </div>
        </form>
    </div>
</div>
@endsection
