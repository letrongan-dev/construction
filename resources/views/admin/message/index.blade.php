@extends('layout.backend.default')
@section('content')
<div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
<div class="content-header sty-one">
  <h1>MESSAGE</h1>
  <ol class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li><i class="fa fa-angle-right"></i> <a href="#">Message</a></li>
  </ol>
</div>
<div class="content">
	<div class="card">
	<div class="card-body">
		<div class="col-lg-12">
            <h4 class="text-black">Danh sách message</h4>
            <div class="table-responsive">
              <table class="table">
                <thead class="bg-info text-white">
                  <tr>
                    <th scope="col">Ngày nhận</th>
                    <th scope="col">Name</th>
                    <th scope="col">Tiêu đề</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nội dung</span></th>
                  </tr>
                </thead>
                <tbody>
                  @forelse($messages as $mess)
                  <tr>
                    <td>{{date('d-m-Y', strtotime($mess->created_at))}}</td>
                    <td>{{$mess->name}}</td>
                    <td>{{$mess->subject}}</td>
                    <td>{{$mess->email}}</td>
                    <td>{{$mess->content}}</td>
                  </tr>
                  @empty
                  <td colspan="5" class="text-center">No Available</td>
                  @endforelse
                </tbody>
              </table>
            </div>
          </div>
	   </div>
    </div>
    {!!$messages->render()!!}
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
@endsection
