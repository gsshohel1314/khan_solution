@extends('layouts.admin')
@section('content')
<div class="row bread_part">
    <div class="col-sm-12 bread_col">
        <h4 class="pull-left page-title bread_title">Recycle</h4>
        <ol class="breadcrumb pull-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Recycle</a></li>
            <li class="active">Project Category</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="card-title card_top_title"><i class="fa fa-gg-circle"></i> Recycle All Project Category</h3>
                    </div>
                    <div class="col-md-4 text-right">
                        <a href="{{url('dashboard/project/category')}}" class="btn btn-md btn-primary waves-effect card_top_button"><i class="fa fa-th"></i> All Project Category</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-7">
                        @if(Session::has('restore'))
                          <div class="alert alert-success alertsuccess" role="alert">
                             <strong>Successfully!</strong> restore project category information.
                          </div>
                        @endif
                        @if(Session::has('delete'))
                          <div class="alert alert-success alertsuccess" role="alert">
                             <strong>Successfully!</strong> permanently delete project category information.
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
                                        <th>status</th>
                                        <th>Manage</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($allRecycleProjectCategory as $data)
                                    <tr>
                                        <td>{{$data->name}}</td>
                                        <td>
                                            @if($data->status==true)
                                              <span class="badge bg-primary">Published</span>
                                            @else
                                              <span class="badge bg-danger">Unpublished</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a class="project_category_restore" data-project_category_restore="{{ url('dashboard/recycle/project/category/restore/'.$data->id) }}" data-toggle="modal" data-target="#exampleModalRestore"><i class="fa fa-recycle text-success fa-lg"></i></a>

                                            <a class="project_category_harddelete" data-project_category_harddelete="{{url('dashboard/recycle/project/category/delete/'.$data->id)}}" data-toggle="modal" data-target="#exampleModalDelete"><i class="fa fa-trash text-danger fa-lg"></i></a>
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
<!--Restore Modal Information-->
<div id="exampleModalRestore" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
    <div class="modal-dialog">
        <div class="modal-content p-0 b-0">
            <form method="post" action="" id="project_category_restore"/>
              @csrf
              @method('get')
              <div class="card mb-0">
                <div class="card-header">
                    <h3 class="card-title float-left"><i class="fa fa-gg-circle"></i> Confirm Message</h3>
                </div>
                <div class="card-body modal_card">
                  Are you sure you want to restore?
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
<!--Delete Modal Information-->
<div id="exampleModalDelete" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
    <div class="modal-dialog">
        <div class="modal-content p-0 b-0">
            <form method="post" action="" id="project_category_harddelete"/>
              @csrf
              @method('delete')
              <div class="card mb-0">
                <div class="card-header">
                    <h3 class="card-title float-left"><i class="fa fa-gg-circle"></i> Confirm Message</h3>
                </div>
                <div class="card-body modal_card">
                  Are you sure you want to permanently delete?
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
