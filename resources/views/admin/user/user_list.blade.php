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
                    <th scope="col">Avatar</th>
                    <th scope="col">Họ tên</th>
                    <th scope="col">Số điện thoại</th>
                    <th scope="col">Email</th>
                    <th scope="col">Địa chỉ</th>
                    <th scope="col">Chức vụ</th>
                    <th scope="col">#</th>

                  </tr>
                </thead>
                <tbody>
                  @forelse($listUser as $user)
                  <tr>
                    <td><img src='{{asset("public/frontend/img/user/$user->avatar_user")}}' height="70" width="70"></td>
                    <td>{{$user->name_user}}</td>
                    <td>{{$user->phone_user}}</td>
                    <td>{{$user->email_user}}</td>
                    <td>{{$user->address_user}}</td>
                    <td>
                      @foreach($roles as $r)
                          @if($r->id_role == $user->role_id)
                          <span class="font-weight-bold">{{$r->description_role}}</span>
                          @endif
                      @endforeach
                    </td>
                    <td>
                      <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#exampleModal{{$user->id_user}}">
                        <i class="fa fa-pencil-square-o"></i>
                      </button>
                      <a data-confirm='Bạn thật sự muốn xóa này ?'
                          href="{{URL::to('/admin/user/delete/'.$user->id_user)}}" class="btn btn-sm btn-danger">
                         <i class="fa fa-trash-o"></i>
                      </a>
                    </td>
                  </tr>
                  @empty
                  <td colspan="10" class="text-center">No Available</td>
                  @endforelse
                </tbody>
              </table>
            </div>
          </div>
	   </div>
    </div>
    {!!$listUser->render()!!}
</div>
</div>
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Thêm user</h4>
      </div>
      <div class="modal-body">
      @foreach($errors->all() as $err)
          <div class="alert alert-danger" role="alert">{{$err}}</div>
      @endforeach
      <form action="{{URL::to('/admin/user/add/')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
        <div class="col-lg-12">
        <fieldset class="form-group">
          <label>Tên người dùng</label>
          <input class="form-control" name="name">
        </fieldset>
        </div>
        <div class="col-lg-12">
        <fieldset class="form-group">
        <label>Chọn ảnh user</label>
            <input class="form-control" name="avatar" type="file">
        </fieldset>
        </div>
      <div class="col-lg-12">
        <fieldset class="form-group">
          <label>Email</label>
          <input class="form-control" id="basicInput" type="email" name="email">
        </fieldset>
      </div>
      <div class="col-lg-12">
        <fieldset class="form-group">
          <label>Password</label>
          <input class="form-control" id="basicInput" type="password" name="password">
        </fieldset>
      </div>
      <div class="col-lg-12">
        <fieldset class="form-group">
          <label>Số điện thoại</label>
          <input class="form-control" id="basicInput" type="text" name="phone">
        </fieldset>
      </div>
      <div class="col-lg-12">
        <fieldset class="form-group">
          <label>Địa chỉ</label>
          <input class="form-control" name="address" type="text">
        </fieldset>
      </div>
      <div class="col-lg-12">
         <label>Quyền hệ thống</label>
            <select class="form-control" name="id_role">
              @foreach($roles as $r)
              <option value="{{$r->id_role}}">{{$r->description_role}}</option>
              @endforeach               
            </select>
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
@foreach($listUser as $u)
<div class="modal fade" id="exampleModal{{$u->id_user}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
      <form action="{{URL::to('/admin/user/update/'.$u->id_user)}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
        <div class="col-lg-12">
        <fieldset class="form-group">
          <label>Tên người dùng</label>
          <input class="form-control" name="name" value="{{$u->name_user}}">
        </fieldset>
        </div>
        <div class="col-lg-12">
        <fieldset class="form-group">
        <label>Chọn ảnh user</label>
          <div class="row">
            <img src='{{asset("public/frontend/img/user/$u->avatar_user")}}' class="col-lg-4" height="100" width="50">
            <input class="form-control col-lg-8" name="avatar" type="file">
          </div>
      </fieldset>
      </div>
      <div class="col-lg-12">
        <fieldset class="form-group">
          <label>Email</label>
          <input class="form-control" id="basicInput" type="email" name="email" value="{{$u->email_user}}">
        </fieldset>
      </div>
      <div class="col-lg-12">
        <fieldset class="form-group">
          <label>Password</label>
          <input class="form-control" id="basicInput" type="password" name="password">
        </fieldset>
      </div>
      <div class="col-lg-12">
        <fieldset class="form-group">
          <label>Số điện thoại</label>
          <input class="form-control" id="basicInput" type="text" name="phone" value="{{$u->phone_user}}">
        </fieldset>
      </div>
      <div class="col-lg-12">
        <fieldset class="form-group">
          <label>Địa chỉ</label>
          <input class="form-control" name="address" type="text" value="{{$u->address_user}}">
        </fieldset>
      </div>
      <div class="col-lg-12">
         <label>Quyền hệ thống</label>
            <select class="form-control" name="id_role">
              @foreach($roles as $r)
              @if($r->id_role==$u->role_id)
              <option value="{{$r->id_role}}" selected>{{$r->description_role}}</option>
              @else
              <option value="{{$r->id_role}}">{{$r->description_role}}</option>
              @endif
              @endforeach               
            </select>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
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

