@extends('layout.backend.default')
@section('content')
@include('sweetalert::alert')
<div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
<div class="content-header sty-one">
  <h1>USERS</h1>
  <ol class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li><i class="fa fa-angle-right"></i> <a href="#">User</a></li>
  </ol>
</div>
<div class="content">
	<div class="card">
	<div class="card-body">
		<div class="col-lg-12">
            <h4 class="text-black">Danh sách người dùng</h4>
            <a class="btn btn-lg btn-success float-right text-white" data-toggle="modal" data-target="#addModal">+ Thêm</a>
            <div class="table-responsive">
              <table class="table">
                <thead class="bg-info text-white">
                  <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Tên quyền</th>
                    <th scope="col">Mô tả</th>
                    <th scope="col">#</th>

                  </tr>
                </thead>
                <tbody>
                  @forelse($listRole as $role)
                  <tr>
                    <td>{{$role->id_role}}</td>
                    <td>{{$role->name_role}}</td>
                    <td>{{$role->description_role}}</td>
                    <td>
                      <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#exampleModal{{$role->id_role}}">
                        <i class="fa fa-pencil-square-o"></i>
                      </button>
                      <a data-confirm='Bạn thật sự muốn xóa này ?'
                          href="{{URL::to('/admin/role/delete/'.$role->id_role)}}" class="btn btn-sm btn-danger">
                         <i class="fa fa-trash-o"></i>
                      </a>
                    </td>
                  </tr>
                  @empty
                  <td colspan="4" class="text-center">No Available</td>
                  @endforelse
                </tbody>
              </table>
            </div>
    </div>
	 </div>
    </div>
</div>
</div>
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Thêm quyền</h4>
      </div>
      <div class="modal-body">
      @foreach($errors->all() as $err)
          <div class="alert alert-danger" role="alert">{{$err}}</div>
      @endforeach
      <form action="{{URL::to('/admin/role/add/')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
        <div class="col-lg-12">
        <fieldset class="form-group">
          <label>Tên quyền</label>
          <input class="form-control" name="name">
        </fieldset>
        </div>
      <div class="col-lg-12">
        <fieldset class="form-group">
          <label>Mô tả</label>
          <input class="form-control" name="description" type="text">
        </fieldset>
      </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">SAVE</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>
@foreach($listRole as $role)
<div class="modal fade" id="exampleModal{{$role->id_role}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cập nhật người dùng</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        </button>
      </div>
      <div class="modal-body">
      @foreach($errors->all() as $err)
        <div class="alert alert-danger" role="alert">{{$err}}</div>
      @endforeach
      <form action="{{URL::to('/admin/role/update/'.$role->id_role)}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
        <div class="col-lg-12">
        <fieldset class="form-group">
          <label>Tên quyền</label>
          <input class="form-control" name="name" value="{{$role->name_role}}">
        </fieldset>
        </div>
      <div class="col-lg-12">
        <fieldset class="form-group">
          <label>Mô tả</label>
          <input class="form-control" name="description" type="text" value="{{$role->description_role}}">
        </fieldset>
      </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">SAVE</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
      </form>
      </div>
    </div>
  </div>
</div>
@endforeach
@endsection
@section('script_admin')
@if(Session::has('success'))
    <script>
      swal("Thành công","{!! Session::get('success')!!}","success",{
        button:"OK",
      })
    </script>
@endif
@if(Session::has('error'))
    <script>
      swal("Lỗi","{!! Session::get('error')!!}","error",{
        button:"OK",
      })
    </script>
@endif
<script type="text/javascript">
  $(document).ready(function(){
    $('[data-confirm]').on('click', function(e){
        e.preventDefault(); //cancel default action

        //Recuperate href value
        var href = $(this).attr('href');
        var message = $(this).data('confirm');

        //pop up
        swal({
            title: "Are you sure ??",
            text: message, 
            icon: "warning",
            buttons: true,
            dangerMode: true,
            timer:3000,
        })
        .then((willDelete) => {
          if (willDelete) {
            window.location.href = href;
          }
        });
    });
});
</script>
@endsection

