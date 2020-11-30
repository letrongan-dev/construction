@extends('layout.backend.default')
@section('content')
<div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
<div class="content-header sty-one">
  <h1>LAYOUT</h1>
  <ol class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li><i class="fa fa-angle-right"></i> <a href="#">Layout</a></li>
  </ol>
</div>
<div class="content">
  <div class="card">
  <div class="card-body">
     <div class="col-lg-12">
      <div class="card-header">
          <h4>INFORMATION</h4>
      </div>
      @foreach($info as $i)
      <div class="card-body">
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
              <li class="nav-item">
                  <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><span class="fa fa-home font-weight-bold">Trang giới thiệu</span></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"><span class="fa fa-phone font-weight-bold">Trang liên hệ</span></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false"><span class="fa fa-comment font-weight-bold">Phản hồi khách hàng</span></a>
              </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                  <h3 class="text-center text-red font-weight-bold">Giới thiệu công ty</h3>
                  <p>
                      <form action="{{ URL::to('/admin/update/info/'.$i->id) }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                      <div class="col-sm-12">
                      <fieldset class="form-group">
                        <label class="font-weight-bold">Ảnh bìa</label>
                        <div class="row">
                          <img class="col-sm-6" src="{{ asset('/public/frontend/img/banner/'.$i->banner) }}" style="height:50%,width:50%">
                          <input class="form-control col-sm-6 mt-5" name="banner" type="file">
                        </div>
                      </fieldset>
                      </div>
                      <div class="col-sm-12">
                      <fieldset class="form-group">
                        <textarea class="form-control" name="description" id="descTextarea">{{$i->about_description}}</textarea>
                      </fieldset>
                      </div>
                          <div class="card-body text-center">
                          <button id="save" class="btn btn-success" type="submit">Cập nhật</button>
                          </div>
                      
                      </form>
                  </p>
               </div>
              <div class="tab-pane fade text-center" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                  <h3 class="text-center text-red font-weight-bold">Thông tin liên hệ</h3>
                  <p>
                      <div class="row">
                        <div class="col-lg-6">
                          <form action="{{ URL::to('/admin/update/info/'.$i->id) }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                          <div class="col-md-12 offset-md-3">
                          <fieldset class="form-group">
                            <div class="row">
                              <label><span class="fa fa-home fa-3x col-md-6 mr-2"></span></label>
                              <input class="form-control col-md-6" name="address">
                            </div>
                          </fieldset>
                          </div>
                          <div class="col-md-12 offset-md-3">
                          <fieldset class="form-group">
                            <div class="row">
                              <label><span class="fa fa-phone fa-3x col-md-6 mr-3"></span></label>
                              <input class="form-control col-md-6" name="phone">
                            </div>
                          </fieldset>
                          </div>
                          <div class="col-md-12 offset-md-3">
                          <fieldset class="form-group">
                            <div class="row">
                              <label><span class="fa fa-envelope fa-3x col-md-6 mr-2"></span></label>
                              <input class="form-control col-md-6" name="email">
                            </div>
                          </fieldset>
                          </div>
                              <div class="card-body text-center">
                              <button id="save" class="btn btn-success" type="submit">Cập nhật</button>
                              </div>
                          </form>
                        </div>
                        <div class="col-lg-6">
                          <div class="col-md-12">
                          <fieldset class="form-group">
                            <div class="row">
                              <label><span class="fa fa-home fa-3x mr-2"></span></label>
                              <span>{{$i->address}}</span>
                            </div>
                          </fieldset>
                          </div>
                          <div class="col-md-12">
                          <fieldset class="form-group">
                            <div class="row">
                              <label><span class="fa fa-phone fa-3x mr-3"></span></label>
                              <span>{{$i->phone}}</span>
                            </div>
                          </fieldset>
                          </div>
                          <div class="col-md-12">
                          <fieldset class="form-group">
                            <div class="row">
                              <label><span class="fa fa-envelope fa-3x mr-2"></span></label>
                              <span>{{$i->email}}</span>
                            </div>
                          </fieldset>
                          </div>
                        </div>
                      </div>                
                  </p>
              </div>
              <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                  <h3 class="text-center text-red font-weight-bold">Phản hồi khách hàng</h3>
                  <p>
                      <a class="btn btn-lg btn-success float-right text-white" data-toggle="modal" data-target="#addModal">+ Thêm</a>
                      <div class="table-responsive">
                      <table class="table">
                        <thead class="bg-primary text-white">
                          <tr>
                            <th scope="col"><span class="fa fa-check ml-3"></span></th>
                            <th scope="col">Ngày</th>
                            <th scope="col">Họ tên & dự án</th>
                            <th scope="col">Nội dung</th>
                            <th scope="col">Trạng thái</th>
                            <th scope="col">#</th>

                          </tr>
                        </thead>
                        <tbody>
                          @forelse($feedbacks as $fb)
                          <tr>
                            <td><a href="{{URL::to('/admin/activeFeedBack/'.$fb->id)}}" class="btn btn-sm btn-secondary text-white" >
                               <i class="fa fa-check-square-o"></i>
                              </a>
                            </td>
                            <td>{!! htmlspecialchars_decode(date('j<\s\up>S</\s\up> F Y', strtotime($fb->created_at))) !!}</td>
                            <td>{{$fb->name}}</td>
                            <td>{{$fb->content}}</td>
                            <td>
                            <?php
                            if($fb->status==0){
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
                              <a data-confirm='Bạn thật sự muốn xóa này ?'
                                  href="{{URL::to('/admin/feedback/delete/'.$fb->id)}}" class="btn btn-sm btn-danger">
                                 <i class="fa fa-trash-o"></i>
                              </a>
                            </td>
                          </tr>
                          @empty
                          <td colspan="6" class="text-center">No Available</td>
                          @endforelse
                        </tbody>
                      </table>
                    </div>
                  </p>
              </div>
          </div>
      </div>
      @endforeach
     </div>
   </div>
   </div>
   <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Thêm feedbacks</h4>
      </div>
      <div class="modal-body">
      @foreach($errors->all() as $err)
          <div class="alert alert-danger" role="alert">{{$err}}</div>
      @endforeach
      <form action="{{URL::to('/admin/feedback/add')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
        <div class="col-lg-12">
        <fieldset class="form-group">
          <label>Họ tên + Dự án</label>
          <input class="form-control" name="name">
        </fieldset>
        </div>
      <div class="col-lg-12">
        <fieldset class="form-group">
          <label>Nội dung</label>
          <textarea class="form-control"  name="content"></textarea>
        </fieldset>
      </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">SAVE</button>
      </div>
      </form>
    </div>
  </div>
</div>
</div>
</div>
@endsection
@section('script_admin')
<script src="{{asset('public/ckeditor/ckeditor.js')}}"></script>
<script type="text/javascript">
        CKEDITOR.replace('descTextarea',{
        filebrowserBrowseUrl : '/construction/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserUploadUrl : '/construction/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserImageBrowseUrl : '/construction/filemanager/dialog.php?type=1&editor=ckeditor&fldr='  
        });
</script>
@if(Session::has('success'))
    <script>
      swal("Thành công","{!! Session::get('success')!!}","success",{
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