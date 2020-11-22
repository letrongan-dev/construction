@extends('layout.backend.default')
@section('content')
@include('sweetalert::alert')
<div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
<div class="content-header sty-one">
  <h1>PROJECTS</h1>
  <ol class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li><i class="fa fa-angle-right"></i> <a href="#">Project</a></li>
  </ol>
</div>
<div class="content">
	<div class="card">
	<div class="card-body">
		<div class="col-lg-12">
            <h4 class="text-black">Danh sách dự án</h4>
            <a href="{{URL::to('/admin/project/add')}}" class="btn btn-lg btn-success float-right">+ Thêm</a>
            <div class="table-responsive">
              <table class="table">
                <thead class="bg-info text-white">
                  <tr>
                    <th scope="col">Ngày nhận</span></th>
                    <th scope="col">Ngày bắt đầu</th>
                    <th scope="col">Hình ảnh</th>
                    <th scope="col">Tên dự án</th>
                    <th scope="col">Mô tả</th>
                    <th scope="col">Ngày hoàn thành dự kiến</span></th>
                    <th scope="col">Ngày hoàn thành thực tế</th>
                    <th scope="col">Số lượng nhân công</th>
                    <th scope="col">Trạng thái dự án</th>
                    <th scope="col">#</th>

                  </tr>
                </thead>
                <tbody>
                  @forelse($projects as $pro)
                  <tr>
                    <td><a href="{{URL::to('/activeService/'.$pro->id_project)}}" class="btn btn-sm btn-secondary text-white" >
                       <i class="fa fa-check-square-o"></i>
                      </a>
                    </td>
                    <td>{{$ser->created_at}}</td>
                    <td><img src='{{asset("public/frontend/img/service/$pro->banner")}}' height="70" width="100"></td>
                    <td>{{$pro->name_project}}</td>
                    <td>{{$pro->description}}</td>
                    <td>
                    <?php
                    if($pro->id_processing==0){
                    ?>
                    <span class="label label-warning">Ẩn</span></td>              
                    <?php
                    }else{
                    ?>  
                    <span class="label label-success">Hiển thị</span></td>
                    <?php
                    }
                    ?>
                    </td>
                    <td>
                      <a href="{{URL::to('/admin/service/edit/'.$pro->id_project)}}" class="btn btn-sm btn-success text-white">
                         <i class="fa fa-pencil-square-o"></i>
                      </a>
                      <a data-confirm='Bạn thật sự muốn xóa?'
                          href="{{URL::to('/admin/service/delete/'.$pro->id_project)}}" class="btn btn-sm btn-danger">
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
</div>
</div>

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
            swal("Success! Xóa thành công!", {
              icon: "success",
              timer:4000
            });
            window.location.href = href;
          }
        });
    });
});
</script>
@endsection

