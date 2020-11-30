@extends('layout.backend.default')
@section('content')
@include('sweetalert::alert')
<div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
<div class="content-header sty-one">
  <h1>BLOGS</h1>
  <ol class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li><i class="fa fa-angle-right"></i> <a href="#">Blog</a></li>
  </ol>
</div>
<div class="content">
	<div class="card">
	<div class="card-body">
		<div class="col-lg-12">
            <h4 class="text-black">Danh sách bài viết</h4>
            <a href="{{URL::to('/admin/blog/add')}}" class="btn btn-lg btn-success float-right">+ Thêm</a>
            <div class="table-responsive">
              <table class="table">
                <thead class="bg-primary text-white">
                  <tr>
                    <th scope="col"><span class="fa fa-check ml-3"></span></th>
                    <th scope="col">Ngày tạo</th>
                    <th scope="col">Hình ảnh</th>
                    <th scope="col">Tiêu đề</th>
                    <th scope="col">Mô tả</th>
                    <th scope="col">Trạng thái</th>
                    <th scope="col">#</th>

                  </tr>
                </thead>
                <tbody>
                  @foreach($listBlog as $blog)
                  <tr>
                    <td><a href="{{URL::to('/changeStatus/'.$blog->id_blog)}}" class="btn btn-sm btn-secondary text-white" >
                       <i class="fa fa-check-square-o"></i>
                      </a>
                    </td>
                    <td>{{date('d-m-Y', strtotime($blog->date_blog))}}</td>
                    <td><img src='{{asset("public/frontend/img/blog/$blog->img_blog")}}' height="70" width="70"></td>
                    <td>{{$blog->titles}}</td>
                    <td>{{$blog->description}}</td>
                    <td>
                    <?php
                    if($blog->status==0){
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
                      <a href="{{URL::to('/admin/blog/edit/'.$blog->id_blog)}}" class="btn btn-sm btn-success text-white">
                         <i class="fa  fa-pencil-square-o"></i>
                      </a>
                      <a data-confirm='Bạn thật sự muốn xóa này ?'
                          href="{{URL::to('/admin/blog/delete/'.$blog->id_blog)}}" class="btn btn-sm btn-danger">
                         <i class="fa fa-trash-o"></i>
                      </a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
	   </div>
     {!!$listBlog->render()!!}

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

