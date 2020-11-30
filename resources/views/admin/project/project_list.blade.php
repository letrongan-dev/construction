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
                    <th scope="col"></th>
                    <th scope="col">Ngày nhận</th>
                    <th scope="col">Ngày bắt đầu</th>
                    <th scope="col">Hình ảnh</th>
                    <th scope="col">Tên dự án</th>
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
                    <td>
                      <button type="button" class="btn btn-secondary btn-sm fa fa-eye text-black" data-toggle="modal" data-target="#mediumModal{{$pro->id_project}}">
                    </td>
                    <td>{{date('d-m-Y', strtotime($pro->created_at))}}</td>
                    <td>{{date('d-m-Y', strtotime($pro->start_date))}}</td>
                    <td><img src='{{asset("public/frontend/img/project/$pro->banner")}}' height="70" width="100"></td>
                    <td>{{$pro->name_project}}</td>
                    <td>{{date('d-m-Y', strtotime($pro->date_completion_expected))}}</td>
                    <td>
                    @if($pro->date_completion_actual != null)
                    {{date('d-m-Y', strtotime($pro->date_completion_actual))}}
                    @endif
                    </td>
                    <td>{{$pro->total_employees}}</td>
                    <td>
                      @foreach($processing as $process)
                          @if($pro->id_processing == $process->id)
                          <span class="font-weight-bold">{{$process->name}}</span>
                          @endif
                      @endforeach
                    </td>
                    <td>
                      <a class="btn btn-sm btn-success text-white" data-toggle="modal" data-target="#editModal{{$pro->id_project}}">
                         <i class="fa fa-pencil-square-o"></i>
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
    {!!$projects->render()!!}
</div>
</div>
</div>
@foreach ($projects as $p)    
    <div class="modal fade" id="mediumModal{{$p->id_project}}" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mediumModalLabel">Mô tả dự án</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        {!!$p->description !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="editModal{{$p->id_project}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Cập nhật dự án</h4>
          </div>
          <div class="modal-body">
          @foreach($errors->all() as $err)
              <div class="alert alert-danger" role="alert">{{$err}}</div>
          @endforeach
          <form action="{{URL::to('/admin/project/update/'.$p->id_project)}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
            <div class="col-lg-12">
            <fieldset class="form-group">
              <label>Tên dự án</label>
              <input class="form-control" value="{{$p->name_project}}" disabled>
            </fieldset>
            </div>
            <div class="col-lg-12 mt-3">
            <fieldset class="form-group">
            <label>Chọn ảnh dự án</label>
              <div class="row">
                <img src='{{asset("public/frontend/img/project/$p->banner")}}' class="col-md-4" height="70" width="70">
                <input class="form-control col-md-8" name="banner" type="file">
              </div>
          </fieldset>
          </div>
            <div class="col-lg-12">
            <fieldset class="form-group">
              <label>Ngày khởi công</label>
              <input class="form-control" id="basicInput" type="date" name="startDate" value="{{$p->start_date}}" readOnly>
            </fieldset>
          </div>
          <div class="col-lg-12">
            <fieldset class="form-group">
              <label>Ngày hoàn thành thực tế</label>
              @if($p->date_completion_actual != null)
              <input class="form-control" name="dateActual" type="date" value="{{$p->date_completion_actual}}" disabled>
              @else
              <input class="form-control" name="dateActual" type="date">
              @endif
            </fieldset>
          </div>
          <div class="col-lg-12">
            <fieldset class="form-group">
              <label>Số lượng nhân công</label>
              @if($p->total_employees != 0)
              <input class="form-control" name="totalEmpl" type="number" min="0" value="{{$p->total_employees}}">
              @else
              <input class="form-control" name="totalEmpl" type="number" min="0" value="0">
              @endif
            </fieldset>
          </div>
            <div class="col-lg-12">
            <fieldset class="form-group">
              <label>NOTE</label>
              <small class="text-muted"><i> (Ghi chú đoạn văn bản có tối đa 255 ký tự)</i></small>
              <textarea class="form-control" name="note">{{$p->note}}</textarea>  
            </fieldset>
          </div>
          <div class="col-lg-12">
             <label>Trạng thái dự án</label>
                <select class="form-control" name="id_processing">
                  @foreach($processing as $proc)
                  @if($p->id_processing == $proc->id)
                  <option value="{{$proc->id}}" selected>{{$proc->name}}</option>
                  @endif
                  <option value="{{$proc->id}}">{{$proc->name}}</option>
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
@endsection

