<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Processing;
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
        $projects = Project::orderBy('id_project','DESC')->paginate(6);
        $processing = Processing::all();
        return view('admin.project.project_list',\compact('projects','processing'));
    }
    public function add(){
        return view('admin.project.project_add');
    }
    public function save(Request $request){
        $this->validate($request,[
    		'name' => 'required|unique:project,name_project',
            'description' => 'required',
            'note' => 'max:255',
    		'banner' => 'mimes:jpg,jpeg,png,gif|max:2048',
    		'startDate' => 'required|date|after:yesterday',
            'date_completion_expected' => 'required|date|after:startDate'
    	],[
    		'name.required' => 'Vui lòng nhập tiêu đề bài viết',
            'name.unique' => 'Tiêu đề đã tồn tại xin vui lòng nhập tiêu đề khác',
    		'description.required' => 'Vui lòng nhập mô tả',
    		'note.max' => 'Ghi chú có tối đa 255 ký tự',
    		'banner.mimes' => 'Chỉ chấp nhận với đuôi .jpg .jpeg .png .gif',
            'banner.max' => 'Hình ảnh giới hạn dung lượng không quá 2M',
            'startDate.required' => 'Nhập ngày bắt đầu',
            'startDate.date'=>'Không đúng định dạng ngày tháng',
            'startDate.after' => 'Ngày bắt đầu lớn hơn ngày hôm qua',
            'date_completion_expected.date' => 'Ngày kết thúc không đúng định dạng',
            'date_completion_expected.after' => 'Ngày kết thức dự kiến phải lớn hơn ngày bắt đầu'
    		
    	]);
        $project = new Project();
        $project->name_project = $request->name;
        $project->description = $request->description;
        $project->note = $request->note;
        $project->banner = $this->setNameImage($request->banner);
        $project->start_date = $request->startDate;
        $project->date_completion_expected = $request->date_completion_expected;
        $project->total_employees = $request->total_employees;
        $project->id_processing = $request->id_processing;
        $project->slug = $request->slug;
        $project->id_processing = 4;
        $project->save();
        return redirect('/admin/projects')->with('success','Thêm thành công!');
    }
    public function update(Request $request,$id){
        $this->validate($request,[
            'note' => 'max:255',
            'banner' => 'mimes:jpg,jpeg,png,gif|max:2048',
            'dateActual' => 'date|after:startDate'
        ],[
            'note.max' => 'Ghi chú có tối đa 255 ký tự',
            'banner.mimes' => 'Chỉ chấp nhận với đuôi .jpg .jpeg .png .gif',
            'banner.max' => 'Hình ảnh giới hạn dung lượng không quá 2M',
            'dateActual.date' => 'Ngày kết thúc không đúng định dạng',
            'dateActual.after' => 'Ngày kết thức thực tế phải lớn hơn ngày bắt đầu'
            
        ]);
        $project = Project::find($id);
        $project->total_employees = $request->totalEmpl;
        if($request->note != null){
            $project->note = $request->note;    
        }else{
            $project->description = $project->description;
        }
        if($request->dateActual != null){
            $project->date_completion_actual = $request->dateActual;   
        }else{
            $project->date_completion_actual = $project->date_completion_actual;
        }
        if($request->banner != null){
            $project->banner = $this->setNameImage($request->banner);   
        }else{
            $project->banner = $project->banner;
        }if($request->id_processing != null){
            $project->id_processing = $request->id_processing;   
        }else{
            $project->id_processing = $project->id_processing;
        }
        $project->save();
        return redirect('/admin/projects')->with('success','Cập nhật thành công');     
    }
}
