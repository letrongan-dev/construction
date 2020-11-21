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
    	$services = Service::all();
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
    	$service->img_service = $request->img_service;
    	$service->slug = $request->slug;
    	$service->content = $request->content;
    	$service->save();
    	return redirect('/admin/service')->with('success','Thêm thành công!');

    }
}
