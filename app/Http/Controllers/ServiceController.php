<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
class ServiceController extends Controller
{
	public function setNameImage($data){
        if(empty($data)){
            return null;
        }
        else{
            $getNameImage = current(explode('.', $data->getClientOriginalName()));
            $destinationPath = 'public/frontend/img/service/';
            $date = date('dmY');
            $hash = md5($getNameImage);
            $plus = $date . '_' . $hash . '.jpg';
            $data->move($destinationPath, $plus);
            return $plus;
        }
    }

    public function index(){
    	$services = Service::orderBy('id_service','DESC')->paginate(6);
    	return view('admin.service.service_list', compact('services'));
    }

    public function add(){
    	return view('admin.service.service_add');
    }

    public function save(Request $request){
    	$this->validate($request,[
    		'title' => 'required|unique:service,title',
    		'description' => 'required|max:100',
    		'img_blog' => 'mimes:jpg,jpeg,png,gif|max:2048',
    		'content' => 'required'

    	],[
    		'title.required' => 'Vui lòng nhập tiêu đề bài viết',
            'title.unique' => 'Tiêu đề đã tồn tại xin vui lòng nhập tiêu đề khác',
    		'description.required' => 'Vui lòng nhập mô tả',
    		'description.max' => 'Đoạn mô tả có tối đa 100 ký tự',
    		'content.required' => 'Vui lòng nhập nội dung',
    		'img_blog.mimes' => 'Chỉ chấp nhận với đuôi .jpg .jpeg .png .gif',
    		'img_blog.max' => 'Hình ảnh giới hạn dung lượng không quá 2M'
    	]);
    	$service = new Service();
    	$service->title = $request->title;
    	$service->description = $request->description;
    	$service->banner = $this->setNameImage($request->img_service);
    	$service->slug = $request->slug;
    	$service->content = $request->content;
    	$service->save();
    	return redirect('/admin/services')->with('success','Thêm thành công!');

    }

    public function delete($id){
    	$service = Service::find($id);
    	if(!$service){
    		return redirect('/admin/services')->with('error','Không tìm thấy dịch vụ!');
    	}
    	$service->delete();
    	return redirect('/admin/services')->with('success','Xóa thành công!');
    }

    public function edit($id){
    	$service = Service::find($id);
    	return view('admin.service.service_edit', compact('service'));
    }
    public function update(Request $request,$id){
    	$this->validate($request,[
    		'description' => 'required|max:100',
    		'img_blog' => 'mimes:jpg,jpeg,png,gif|max:2048',
    		'content' => 'required'

    	],[
    		'description.required' => 'Vui lòng nhập mô tả',
    		'description.max' => 'Đoạn mô tả có tối đa 100 ký tự',
    		'content.required' => 'Vui lòng nhập nội dung',
    		'img_blog.mimes' => 'Chỉ chấp nhận với đuôi .jpg .jpeg .png .gif',
    		'img_blog.max' => 'Hình ảnh giới hạn dung lượng không quá 2M'
    	]);
    	$service = Service::find($id);
    	$service->title = $service->title;
    	$service->slug = $service->slug;
    	if($request->description != null){
            $service->description = $request->description;    
        }else{
            $service->description = $blog->description;
        }
        if($request->content != null){
            $service->content = $request->content;   
        }else{
            $service->description = $service->content;
        }
        if($request->img_service != null){
            $service->banner = $this->setNameImage($request->img_service);   
        }else{
            $service->banner = $service->banner;
        }    
    	$service->save();
    	return redirect('/admin/services')->with('success','Cập nhật thành công!');

    }
    public function active($id){
        $service = Service::find($id);
        if($service->status == 0){
            $service->status = 1;
        }else{
            $service->status = 0;
        }
        $service->save();
        return redirect('/admin/services')->with('success','Kích hoạt thành công!');
    }
}
