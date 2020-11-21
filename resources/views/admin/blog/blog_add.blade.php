@extends('layout.backend.default')
@section('content')
<div class="content-wrapper"> 
<!-- Content Header (Page header) -->
<div class="content-header sty-two">
  <h1 class="text-white">Blog</h1>
  <ol class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li><i class="fa fa-angle-right"></i> <a href="#">Thêm bài viết</a></li>
  </ol>
</div>
<div class="content">
  <div class="card">
  <div class="card-body">
    <h4 class="text-black">Thêm bài viết mới</h4>
    @foreach($errors->all() as $err)
        <div class="alert alert-danger" role="alert">{{$err}}</div>
    @endforeach
    <form action="{{URL::to('/admin/blog/add')}}" method="post" enctype="multipart/form-data">
         {{ csrf_field() }}
    	<div class="row mt-4">
	      <div class="col-lg-6">
	        <fieldset class="form-group">
	          <label class="text-red">Tiêu đề *</label>
	          <input class="form-control" id="name" name="title" type="text">
	        </fieldset>
	      </div>
	      <div class="col-lg-6">
	        <fieldset class="form-group">
	          <label class="text-red">Mô tả ngắn * </label>
	          <small class="text-muted"><i>Mô tả đoạn văn bản có tối đa 100 ký tự</i></small>
	          <textarea class="form-control" name="description" type="text"></textarea>
	        </fieldset>
	      </div>
	  	</div>
	  	<div class="row">
	  	<div class="col-lg-6">
	        <fieldset class="form-group">
	          <label>Slug</label>
	          <input class="form-control" name="slug" id="slug" readonly type="text">
	        </fieldset>
	      </div>
	      <div class="col-lg-6">
	        <fieldset class="form-group">
	          <label>Chọn ảnh bìa cho bài viết</label>
	          <input class="form-control" name="img_blog" type="file">
	        </fieldset>
	      </div>
	     </div>
	     <div class="col-lg-12">
	        <fieldset class="form-group">
	          <label>Nội dung bài viết</label>
	          <textarea class="form-control" name="content" type="textarea" id="descTextarea"></textarea>
	        </fieldset>
	      </div>
	    </div>
        <div class="card m-t-3">
            <div style="text-align: center;" class="card-body">
            <div class="click2edit m-b-3"></div>
            <button id="save" class="btn btn-success" type="submit">Thêm</button>
            <a href="{{URL::to('/admin/blogs')}}" class="btn btn-danger"  type="button">Huỷ</a>
            </div>
        </div>
	</div>
    </div>
	</div>
    </form>
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


$("input#name").keyup(function(event)
{
    var title, slug;
 
    //Lấy text từ thẻ input title 
    title = $(this).val();
 
    //Đổi chữ hoa thành chữ thường
    slug = title.toLowerCase();
 
    //Đổi ký tự có dấu thành không dấu
    slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
    slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
    slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
    slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
    slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
    slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
    slug = slug.replace(/đ/gi, 'd');
    //Xóa các ký tự đặt biệt
    slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
    //Đổi khoảng trắng thành ký tự gạch ngang
    slug = slug.replace(/ /gi, "-");
    //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
    //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
    slug = slug.replace(/\-\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-/gi, '-');
    slug = slug.replace(/\-\-/gi, '-');
    //Xóa các ký tự gạch ngang ở đầu và cuối
    slug = '@' + slug + '@';
    slug = slug.replace(/\@\-|\-\@|\@/gi, '');
    //In slug ra textbox có id “slug”
    $("input#slug").val(slug);
});
    </script>
@endsection