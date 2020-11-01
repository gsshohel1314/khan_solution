@extends('layouts.admin')
@section('content')
<div class="row bread_part">
    <div class="col-sm-12 bread_col">
        <h4 class="pull-left page-title bread_title">Project</h4>
        <ol class="breadcrumb pull-right">
            <li><a href="#">Dashboard</a></li>
            <li class="active">Project</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="card-title card_top_title"><i class="fa fa-gg-circle"></i> All Project Information</h3>
                    </div>
                    <div class="col-md-4 text-right">
                        <a href="{{url('dashboard/project/create')}}" class="btn btn-md btn-primary waves-effect card_top_button"><i class="fa fa-plus-circle"></i> Add Project</a>
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
                             <strong>Successfully!</strong> delete Project information.
                          </div>
                        @endif
                        @if(Session::has('success_publish'))
                          <div class="alert alert-success alertsuccess" role="alert">
                             <strong>Successfully!</strong> publish Project information.
                          </div>
                        @endif
                        @if(Session::has('success_unpublish'))
                          <div class="alert alert-success alertsuccess" role="alert">
                             <strong>Successfully!</strong> unpublish Project information.
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
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($projects as $project)
                                    <tr>
                                        <td>{{$project->name}}</td>
                                        <td>{{(!empty($project->projectCategory))?$project->projectCategory->name:''}}</td>
                                        <td>
                                            @if($project->image==true)
                                                <img src="{{ asset('public/storage/project') }}/{{ $project->image }}" height="30px" width="30px" />
                                            @else
                                                <img src="{{asset('public/contents/admin')}}/assets/images/default-avatar.png" height="30px" width="30px" />
                                            @endif
                                        </td>
                                        <td>
                                            @if($project->status==true)
                                              <span class="badge bg-primary">Published</span>
                                            @else
                                              <span class="badge bg-danger">Unpublished</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a class="projectpublish projectunpublish" data-projectstatus="{{ url('dashboard/project/status/'.$project->id) }}" data-toggle="modal" 
                                                @if($project->status==true)
                                                data-target="#exampleModalUnpublish"
                                                @else
                                                data-target="#exampleModalPublish"
                                                @endif>
                                
                                                @if($project->status==true)
                                                <i class="fa fa-pause text-danger fa-lg"></i>
                                                @else
                                                <i class="fa fa-check text-dark fa-lg"></i>
                                                @endif
                                            </a>

                                            <a href="{{url('dashboard/project/'.$project->id)}}" title="view"><i class="fa fa-plus-square fa-lg view_icon"></i></a>

                                            <a href="{{url('dashboard/project/'.$project->id.'/edit')}}" title="edit"><i class="fa fa-pencil-square fa-lg edit_icon"></i></a>

                                            <a class="projectsoftdelete" data-projectsoftdelete="{{url('dashboard/project/'.$project->id)}}" data-toggle="modal" data-target="#exampleModalDelete"><i class="fa fa-trash text-danger fa-lg"></i></a>
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
<div id="exampleModalDelete" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
    <div class="modal-dialog">
        <div class="modal-content p-0 b-0">
            <form method="post" action="" id="projectsoftdelete">
              @csrf
              @method('delete')
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
            <form method="post" action="" id="projectpublish">
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
            <form method="post" action="" id="projectunpublish">
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
