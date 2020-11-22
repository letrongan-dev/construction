<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectController extends Controller
{
    public function setNameImage($data){
        if(empty($data)){
            return null;
        }
        else{
            $getNameImage = current(explode('.', $data->getClientOriginalName()));
            $destinationPath = 'public/frontend/img/project/';
            $date = date('dmY');
            $hash = md5($getNameImage);
            $plus = $date . '_' . $hash . '.jpg';
            $data->move($destinationPath, $plus);
            return $plus;
        }
    }

    public function index(){
        $projects = Project::all();
        return view('admin.project.project_list',\compact('projects'));
    }
    public function add(){
        return view('admin.project.project_add');
    }
    public function save(Request $request){
        $this->validate($request,[
    		'name' => 'required|unique:blogs,titles',
            'description' => 'required',
            'note' => 'max:255',
    		'banner' => 'mimes:jpg,jpeg,png,gif|max:2048',
    		'startDay' => 'required|date|before:tomorrow',

    	],[
    		'title.required' => 'Vui lòng nhập tiêu đề bài viết',
            'title.unique' => 'Tiêu đề đã tồn tại xin vui lòng nhập tiêu đề khác',
    		'description.required' => 'Vui lòng nhập mô tả',
    		'note.max' => 'Ghi chú có tối đa 255 ký tự',
    		'banner.mimes' => 'Chỉ chấp nhận với đuôi .jpg .jpeg .png .gif',
    		'banner.max' => 'Hình ảnh giới hạn dung lượng không quá 2M'
    	]);
    }
}
